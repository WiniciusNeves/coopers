document.addEventListener('DOMContentLoaded', function () {
  const slider = document.getElementById('cards-slider');
  const cards = Array.from(slider.getElementsByClassName('good-thing-card'));
  const paginationDotsContainer = document.getElementById('pagination-dots');

  let currentPage = 0;
  const cardsPerPage = 3;
  let totalPages = Math.ceil(cards.length / cardsPerPage);
  const dots = [];

  function isMobileLayout() {
    return window.innerWidth < 768; // Tailwind md breakpoint
  }

  function setupMobileLayout() {
    // Remove transform e mostra todos os cards em coluna
    slider.style.transform = 'translateX(0)';
    slider.style.transition = 'none';
    slider.style.flexWrap = 'wrap';

    cards.forEach(card => {
      card.style.display = 'block';
    });

    // Oculta bolinhas
    paginationDotsContainer.style.display = 'none';
  }

  function setupDesktopLayout() {
    totalPages = Math.ceil(cards.length / cardsPerPage);

    // Reset styles
    slider.style.transition = 'transform 0.5s ease-in-out';
    slider.style.flexWrap = 'nowrap';

    // Cria as bolinhas
    paginationDotsContainer.innerHTML = '';
    paginationDotsContainer.style.display = 'flex';

    for (let i = 0; i < totalPages; i++) {
      const dot = document.createElement('span');
      dot.classList.add('pagination-dot', 'w-10', 'h-10', 'rounded-full', 'bg-gray-300', 'cursor-pointer', 'inline-block');
      dot.dataset.page = i;
      paginationDotsContainer.appendChild(dot);
      dots.push(dot);
    }

    showPage(currentPage);

    // Clique nas bolinhas
    paginationDotsContainer.addEventListener('click', function (event) {
      if (event.target.classList.contains('pagination-dot')) {
        const pageToGo = parseInt(event.target.dataset.page);
        showPage(pageToGo);
      }
    });
  }

  function showPage(page) {
    if (isMobileLayout()) return; // Ignora paginação no mobile

    currentPage = Math.max(0, Math.min(page, totalPages - 1));
    const offset = currentPage * 100;
    slider.style.transform = `translateX(-${offset}%)`;
    updatePaginationDots();
  }

  function updatePaginationDots() {
    dots.forEach((dot, index) => {
      dot.classList.toggle('bg-[#56c870]', index === currentPage);
      dot.classList.toggle('bg-gray-300', index !== currentPage);
    });
  }

  function handleLayout() {
    if (isMobileLayout()) {
      setupMobileLayout();
    } else {
      setupDesktopLayout();
    }
  }

  // Inicialização
  handleLayout();
  window.addEventListener('resize', handleLayout);
});

