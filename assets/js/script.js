document.addEventListener('DOMContentLoaded', function() {
    // ========== Menu Hamburguer ==========
    const menuToggle = document.getElementById('mobile-menu');
    const navList = document.querySelector('.nav-list');
    
    if (menuToggle && navList) {
        menuToggle.addEventListener('click', function() {
            navList.classList.toggle('active');
            menuToggle.classList.toggle('active');
        });
    }

    // ========== Tema Light/Dark ==========
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;
    
    if (themeToggle) {
        // Verificar preferência salva
        const savedTheme = localStorage.getItem('theme') || 'light';
        setTheme(savedTheme);
        
        themeToggle.addEventListener('click', function() {
            const newTheme = body.classList.contains('dark-theme') ? 'light' : 'dark';
            setTheme(newTheme);
            localStorage.setItem('theme', newTheme);
        });
    }
    
    function setTheme(theme) {
        if (theme === 'dark') {
            body.classList.add('dark-theme');
            body.classList.remove('light-theme');
        } else {
            body.classList.add('light-theme');
            body.classList.remove('dark-theme');
        }
    }

    // ========== Carrossel de Banners ==========
    function initCarousel() {
        const carouselContainer = document.querySelector('.carousel-container');
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.indicator');
        
        if (!slides.length) return;
    
        let currentIndex = 0;
        let isAnimating = false;
        let intervalId;
        const slideInterval = 5000; // 5 segundos
        const transitionDuration = 800; // 0.8s
    
        // Configuração inicial
        function setupCarousel() {
            slides.forEach((slide, index) => {
                slide.style.transition = `opacity ${transitionDuration}ms ease`;
                slide.style.position = 'absolute';
                slide.style.width = '100%';
                slide.style.opacity = index === 0 ? '1' : '0';
                slide.style.zIndex = index === 0 ? '2' : '1';
            });
            
            indicators[0]?.classList.add('active');
        }
    
        // Mostra slide específico
        function showSlide(index) {
            if (isAnimating || index === currentIndex) return;
            
            isAnimating = true;
            
            // Verifica limites
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;
            
            const currentSlide = slides[currentIndex];
            const nextSlide = slides[index];
            
            // Atualiza indicadores
            indicators.forEach(ind => ind.classList.remove('active'));
            indicators[index]?.classList.add('active');
            
            // Prepara próximo slide
            nextSlide.style.zIndex = '2';
            
            // Animação
            setTimeout(() => {
                nextSlide.style.opacity = '1';
                currentSlide.style.opacity = '0';
                
                setTimeout(() => {
                    currentSlide.style.zIndex = '1';
                    currentIndex = index;
                    isAnimating = false;
                }, transitionDuration);
            }, 50);
        }
    
        function nextSlide() {
            showSlide(currentIndex + 1);
        }
    
        function startCarousel() {
            stopCarousel();
            intervalId = setInterval(nextSlide, slideInterval);
        }
    
        function stopCarousel() {
            clearInterval(intervalId);
        }
    
        // Event listeners
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                showSlide(index);
                stopCarousel();
                startCarousel();
            });
        });
    
        if (carouselContainer) {
            carouselContainer.addEventListener('mouseenter', stopCarousel);
            carouselContainer.addEventListener('mouseleave', startCarousel);
        }
    
        // Inicialização
        setupCarousel();
        startCarousel();
    }

    // ========== Efeito de Reveal ao Scroll ==========
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
            
            // Efeito de hover nos ícones
            const techIcons = card.querySelector('.tech-icons');
            if (techIcons) {
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
            }
        });
    }

    // ========== Inicialização de Todos os Componentes ==========
    initCarousel();
    initScrollReveal();

    // ========== Carregamento de Componentes ==========
    // Carrega a navegação
    const navContainer = document.getElementById('nav-container');
    if (navContainer) {
        fetch('/portfolio/includes/nav.html')
            .then(response => response.text())
            .then(data => {
                navContainer.innerHTML = data;
                // Reativa os event listeners após carregar o nav
                const mobileMenu = document.getElementById('mobile-menu');
                const navList = document.querySelector('.nav-list');
                if (mobileMenu && navList) {
                    mobileMenu.addEventListener('click', function() {
                        navList.classList.toggle('active');
                        mobileMenu.classList.toggle('active');
                    });
                }
            })
            .catch(error => console.error('Erro ao carregar navegação:', error));
    }

    // Carrega o footer
    const footerContainer = document.getElementById('footer-container');
    if (footerContainer) {
        fetch('/portfolio/includes/footer.html')
            .then(response => response.text())
            .then(data => footerContainer.innerHTML = data)
            .catch(error => console.error('Erro ao carregar footer:', error));
    }
});
