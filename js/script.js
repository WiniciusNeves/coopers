document.addEventListener('DOMContentLoaded', function() {
    const cardsContainer = document.getElementById('cards-container');
    const cards = Array.from(cardsContainer.getElementsByClassName('good-thing-card'));
    const paginationDotsContainer = document.getElementById('pagination-dots');
    
    let currentPage = 0;
    const cardsPerPage = 3; // Mostrar 3 cards por vez

    // Calcula o número total de páginas baseado no número de cards e cards por página
    const totalPages = Math.ceil(cards.length / cardsPerPage);

    // Array para armazenar as referências das bolinhas de paginação
    const dots = [];

    // Ajusta o número de bolinhas de paginação dinamicamente
    paginationDotsContainer.innerHTML = ''; // Limpa as bolinhas existentes
    for (let i = 0; i < totalPages; i++) {
        const dot = document.createElement('span');
        dot.classList.add('pagination-dot', 'w-10', 'h-10', 'rounded-full', 'bg-gray-300', 'cursor-pointer');
        dot.dataset.page = i;
        paginationDotsContainer.appendChild(dot);
        dots.push(dot); // Adiciona ao array de dots
    }

    // Função para mostrar os cards da página atual e esconder os outros
    function showCards(page) {
        // Garante que a página não seja menor que 0 ou maior que o total de páginas
        if (page < 0) {
            currentPage = 0;
        } else if (page >= totalPages) {
            currentPage = totalPages - 1;
        } else {
            currentPage = page;
        }
        
        cards.forEach((card, index) => {
            const start = currentPage * cardsPerPage;
            const end = start + cardsPerPage;
            if (index >= start && index < end) {
                card.classList.remove('hidden'); // Mostra o card
            } else {
                card.classList.add('hidden'); // Esconde o card
            }
        });
        updatePaginationDots(); // Atualiza a bolinha ativa
    }

    // Função para atualizar o estilo da bolinha de paginação ativa
    function updatePaginationDots() {
        dots.forEach((dot, index) => {
            if (index === currentPage) {
                dot.classList.remove('bg-gray-300');
                dot.classList.add('bg-[#56c870]'); // Cor ativa (verde)
            } else {
                dot.classList.remove('bg-[#56c870]');
                dot.classList.add('bg-gray-300'); // Cor inativa (cinza)
            }
        });
    }

    // Adiciona event listeners para as bolinhas de paginação
    paginationDotsContainer.addEventListener('click', function(event) {
        if (event.target.classList.contains('pagination-dot')) {
            const pageToGo = parseInt(event.target.dataset.page);
            showCards(pageToGo);
        }
    });

    // Mostra os cards da primeira página ao carregar
    showCards(0);
});
