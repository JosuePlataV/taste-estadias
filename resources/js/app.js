import './bootstrap';

import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import esLocale from '@fullcalendar/core/locales/es';

document.addEventListener('DOMContentLoaded', () => {
  const calendarEl = document.getElementById('calendar');
  if (!calendarEl) return;

  // RESF de la card 
  const card = document.getElementById('event-card');
  const cardImg = document.getElementById('card-img');
  const cardTitle = document.getElementById('card-title');
  const cardLocation = document.getElementById('card-location');
  const cardDesc = document.getElementById('card-desc');
  const cardDateRangeEl = document.getElementById('card-daterange');

  // Utilidades card 
  let hideTimer = null;

  function formatRangeES(startISO, endISO) {
    const s = new Date(startISO);
    const e = new Date(endISO);
    const mes = new Intl.DateTimeFormat('es-MX', { month: 'long' }).format(e).toLowerCase();
    return `${s.getDate()} al ${e.getDate()} de ${mes}`;
  }

  function fillAndShowCard(ev) {
    const { title, extendedProps } = ev;
    cardImg.src = extendedProps.imagen;
    cardTitle.textContent = title;
    if (cardDateRangeEl) {
      cardDateRangeEl.textContent = formatRangeES(extendedProps.rangeStart, extendedProps.rangeEnd);
    }
    cardLocation.textContent = extendedProps.ubicacion;
    cardDesc.textContent = extendedProps.descripcion;
    card.classList.remove('hidden');
  }

  function hideCardSoon(delay = 200) {
    clearTimeout(hideTimer);
    hideTimer = setTimeout(() => card.classList.add('hidden'), delay);
  }

  card.addEventListener('mouseenter', () => clearTimeout(hideTimer));
  card.addEventListener('mouseleave', () => hideCardSoon(120));

  // Datos base AHOA JS
  const eventos = [
    {
      title: 'FERIA NACIONAL DEL MOLE',
      start: '2025-10-03',
      end: '2025-10-26',
      categoria: 'destacado',
      ubicacion: 'San Pedro Atocpan, Milpa Alta, CDMX.',
      descripcion:
        'La Feria Nacional del Mole celebra su edición número 48 en este 2025 con una experiencia gastronómica que incluirá un recorrido por las distintas variedades de uno de los platillos más típicos de la cocina mexicana.',
      imagen: '/img/c-mole.png',
      color: '#534741'
    },
    {
      title: 'ANUGA',
      start: '2025-10-04',
      end: '2025-10-09',
      categoria: 'internacional',
      ubicacion: 'Colonia, Alemania',
      descripcion: 'La feria internacional más importante de alimentos y bebidas.',
      imagen: '/img/c-mole.png',
      color: '#F27E1E'
    },
    {
      title: 'FESTIVAL GASTRONOMICO',
      start: '2025-10-18',
      categoria: 'nacional',
      ubicacion: 'Guadalajara, Jal.',
      descripcion: 'Celebración de sabores mexicanos contemporáneos.',
      imagen: '/img/c-mole.png',
      color: '#D33882'
    }
  ];

  // eventos diarios
  const eventosExpand = [];
  eventos.forEach((e) => {
    const start = new Date(e.start);
    const end = e.end ? new Date(e.end) : new Date(e.start);
    for (let d = new Date(start); d <= end; d.setDate(d.getDate() + 1)) {
      eventosExpand.push({
        title: e.title,
        start: new Date(d),
        color: e.color,
        textColor: '#FFF7EF',
        extendedProps: {
          categoria: e.categoria,
          ubicacion: e.ubicacion,
          descripcion: e.descripcion,
          imagen: e.imagen,
          rangeStart: e.start,
          rangeEnd: e.end || e.start
        }
      });
    }
  });

  //  Calendario
  const calendar = new Calendar(calendarEl, {
    plugins: [dayGridPlugin, interactionPlugin],
    locale: esLocale,
    headerToolbar: false,
    initialView: 'dayGridMonth',
    eventDisplay: 'block',
    events: eventosExpand,

    displayEventTime: false,
    eventClassNames: () => ['font-Space-Grotesk-Medium', 'tmx-event'],

    // evento con su categoría para poder filtrar por DOM
    eventDidMount(info) {
      info.el.dataset.cat = info.event.extendedProps?.categoria || '';
    },

    eventMouseEnter(info) { fillAndShowCard(info.event); },
    eventMouseLeave() { hideCardSoon(200); },
    eventClick(info) { fillAndShowCard(info.event); }
  });

  calendar.render();

  // navegación de meses
  const prevBtn = document.getElementById('prev-month');
  const nextBtn = document.getElementById('next-month');
  const monthTitle = document.getElementById('month-title');

  function updateMonthTitle() {
    const date = calendar.getDate();
    const options = { month: 'long' };
    const monthName = date.toLocaleDateString('es-MX', options);
    monthTitle.textContent = monthName.charAt(0).toUpperCase() + monthName.slice(1);
  }

  prevBtn.addEventListener('click', () => { calendar.prev(); updateMonthTitle(); });
  nextBtn.addEventListener('click', () => { calendar.next(); updateMonthTitle(); });
  updateMonthTitle();

  // por DOM filtros dentro del mismo scope
// Filtros mínimos (solo lógica)
const filterBtns = document.querySelectorAll('.filter-btn');

function applyFilter(type = 'all') {
  const eventEls = calendarEl.querySelectorAll('.fc-daygrid-event');
  eventEls.forEach(el => {
    const cat = el.dataset.cat || '';
    el.style.display = (type === 'all' || cat === type) ? '' : 'none';
  });
}

filterBtns.forEach(btn => {
  btn.addEventListener('click', () => applyFilter(btn.dataset.filter));
});

applyFilter('all');

});
