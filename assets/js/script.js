document.addEventListener('DOMContentLoaded', function() {
    // Menu Hamburguer
    const menuToggle = document.getElementById('mobile-menu');
    const navList = document.querySelector('.nav-list');
    
    menuToggle.addEventListener('click', function() {
        navList.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });
    
    // Tema Light/Dark
    const themeToggle = document.getElementById('theme-toggle');
    const themeStyle = document.getElementById('theme-style');
    const body = document.body;
    
    // Verificar preferência salva
    const savedTheme = localStorage.getItem('theme') || 'light';
    setTheme(savedTheme);
    
    themeToggle.addEventListener('click', function() {
        const newTheme = body.classList.contains('dark-theme') ? 'light' : 'dark';
        setTheme(newTheme);
        localStorage.setItem('theme', newTheme);
        document.cookie = `theme=${newTheme}; path=/; max-age=31536000`; // 1 ano
    });
    
    function setTheme(theme) {
        if (theme === 'dark') {
            body.classList.add('dark-theme');
            themeStyle.href = 'assets/css/dark.css';
        } else {
            body.classList.remove('dark-theme');
            themeStyle.href = 'assets/css/style.css';
        }
    }

    function initCarousel() {
        const carouselContainer = document.querySelector('.carousel-container');
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.indicator');
        
        if (!slides.length) return;
    
        let currentIndex = 0;
        let isAnimating = false;
        let intervalId;
        const slideInterval = 4000;
        const transitionDuration = 1000; // Aumentei um pouco a duração
    
        // Pré-carrega as imagens de forma mais eficiente
        function preloadImages() {
            const images = [];
            slides.forEach((slide, index) => {
                const img = slide.querySelector('img');
                if (img) {
                    images[index] = new Image();
                    images[index].src = img.src;
                    // Garante que a primeira imagem está totalmente carregada
                    if (index === 0) {
                        images[index].onload = () => {
                            slides[0].style.opacity = 1;
                        };
                    }
                }
            });
        }
    
        function showSlide(index) {
            if (isAnimating) return;
            
            isAnimating = true;
            
            // Verifica limites
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;
            
            const currentSlide = slides[currentIndex];
            const nextSlide = slides[index];
            
            // Atualiza indicadores
            indicators.forEach(ind => ind.classList.remove('active'));
            indicators[index].classList.add('active');
            
            // Animação
            nextSlide.style.zIndex = 3; // Slide entrando (maior z-index)
            currentSlide.style.zIndex = 2; // Slide saindo
            
            // Garante que o próximo slide está pronto
            nextSlide.style.opacity = 0;
            nextSlide.style.display = 'block';
            
            setTimeout(() => {
                nextSlide.classList.add('active');
                currentSlide.classList.remove('active');
                
                nextSlide.style.opacity = 1;
                currentSlide.style.opacity = 0;
                
                setTimeout(() => {
                    currentIndex = index;
                    isAnimating = false;
                    currentSlide.style.zIndex = 1; // Reset z-index
                }, transitionDuration);
            }, 50); // Pequeno delay para garantir a renderização
        }
    
        function nextSlide() {
            showSlide(currentIndex + 1);
        }
    
        function startCarousel() {
            // Mostra o primeiro slide imediatamente
            slides[0].style.opacity = 1;
            slides[0].classList.add('active');
            indicators[0].classList.add('active');
            
            // Inicia o ciclo
            stopCarousel();
            intervalId = setInterval(nextSlide, slideInterval);
        }
    
        function stopCarousel() {
            clearInterval(intervalId);
        }
    
        // Eventos
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                if (index !== currentIndex) {
                    showSlide(index);
                    stopCarousel();
                    startCarousel();
                }
            });
        });
    
        if (carouselContainer) {
            carouselContainer.addEventListener('mouseenter', stopCarousel);
            carouselContainer.addEventListener('mouseleave', startCarousel);
        }
    
        // Inicialização otimizada
        preloadImages();
        
        // Garante que o DOM está totalmente pronto
        setTimeout(() => {
            startCarousel();
        }, 100);
    }

    // Efeito de revelação ao rolar a página
    function initScrollReveal() {
        const projectCards = document.querySelectorAll('.project-card');
        
        if (!projectCards.length) return;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });
        
        projectCards.forEach(card => {
            card.style.opacity = 0;
            card.style.transform = 'translateY(50px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
            
            // Efeito de hover
            card.addEventListener('mouseenter', function() {
                const icons = this.querySelectorAll('.tech-icons i');
                icons.forEach((icon, index) => {
                    icon.style.transitionDelay = `${index * 0.1}s`;
                    icon.style.transform = 'translateY(-5px)';
                });
            });
            
            card.addEventListener('mouseleave', function() {
                const icons = this.querySelectorAll('.tech-icons i');
                icons.forEach(icon => {
                    icon.style.transform = 'translateY(0)';
                });
            });
        });
    }

    // Inicializações
    initCarousel();
    initScrollReveal();
});
