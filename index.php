<?php 
$page_title = "Home - Meu Portfólio";
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
include 'includes/header.php'; 
?>


<main>
    <!-- Carousel de banners automático -->
    <section class="banner-carousel">
        <div class="carousel-container">
            <div class="carousel-slide active">
                <img src="assets/img/banner_5.avif"
                    alt="Tecnologia 1" class="carousel-img">
                <div class="carousel-caption">
                    <h2>Bem-vindo ao Meu Portfólio</h2>
                    <p>Explore meus projetos e habilidades em desenvolvimento web.</p>
                </div>
            </div>
            <div class="carousel-slide">
                <img src="assets/img/bannner_6.avif" alt="Tecnologia 2" class="carousel-img">
            </div>
            <div class="carousel-slide">
                <img src="assets/img/amarelo.avif" alt="Tecnologia 3" class="carousel-img">
            </div>

            <!-- Indicadores de slide -->
            <div class="carousel-indicators">
                <span class="indicator active" data-slide="0"></span>
                <span class="indicator" data-slide="1"></span>
                <span class="indicator" data-slide="2"></span>
            </div>
        </div>
    </section>

    <!-- Minha Jornada -->
    <section class="my-journey">
        <div class="container">
            <h2 class="section-title">Minha Jornada na Tecnologia</h2>

            <div class="journey-content">
                <!-- Foto de perfil -->
                <div class="profile-section">
                    <div class="profile-frame">
                        <img src="assets/img/gustavo.png" alt="Minha Foto" class="profile-img">
                        <div class="profile-overlay">
                            <div class="social-links">
                                <a href="https://github.com/guttoalves95" target="_blank"><i
                                        class="fab fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/gustavo-alves-gomes-442146304?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                                    target="_blank"><i class="fab fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/gutto_alvez/" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="tech-stack">
                        <h3>Minha Stack</h3>
                        <div class="tech-icons">
                            <i class="fab fa-html5" title="HTML5"></i>
                            <i class="fab fa-css3-alt" title="CSS3"></i>
                            <i class="fab fa-js" title="JavaScript"></i>
                            <i class="fab fa-php" title="PHP"></i>
                            <!--<i class="fab fa-react" title="React"></i> -->
                            <!--<i class="fab fa-node-js" title="Node.js"></i> -->
                        </div>
                    </div>
                </div>

                <!-- Texto e projetos -->
                <div class="journey-text">
                    <div class="journey-highlights">
                        <h3>Minha História</h3>
                        <p>Comecei minha jornada na tecnologia em 2018, quando desenvolvi meu primeiro site usando HTML
                            e CSS. Desde então, tenho me dedicado intensamente ao aprendizado contínuo e ao
                            aprimoramento das minhas habilidades.</p>

                        <div class="milestones">
                            <div class="milestone">
                                <i class="fas fa-graduation-cap"></i>
                                <p>Formação em Análise e Desenvolvimento de Sistemas</p>
                            </div>
                            <div class="milestone">
                                <i class="fas fa-briefcase"></i>
                                <p>5+ projetos de estudo finalizado</p>
                            </div>
                            <div class="milestone">
                                <i class="fas fa-code"></i>
                                <p>10.000+ linhas de código escritas</p>
                            </div>
                        </div>
                    </div>

                    <div class="featured-projects">
                        <h3>Projetos Destacados</h3>
                        <div class="project-highlights">
                            <div class="project-item">
                                <h4>Sistema de Gerenciamento</h4>
                                <p>Plataforma completa desenvolvida com PHP e MySQL para controle de estoque.</p>
                                <a href="#" class="project-link">Ver Detalhes <i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="project-item">
                                <h4>Aplicativo Web</h4>
                                <p>Solução em PHP com integração a API RESTful.</p>
                                <a href="#" class="project-link">Ver Detalhes <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Como fiz o site -->
    <section class="site-creation">
        <h2>Como Desenvolvi Este Site</h2>
        <div class="creation-steps">
            <div class="step">
                <h3>Design Responsivo</h3>
                <p>Utilizei media queries para garantir que o site se adapte a qualquer tamanho de tela.</p>
            </div>
            <div class="step">
                <h3>Temas Light/Dark</h3>
                <p>Implementei um sistema de temas que lembra a preferência do usuário usando cookies.</p>
            </div>
            <div class="step">
                <h3>Carousel Dinâmico</h3>
                <p>O banner principal é um carousel interativo que roda automaticamente mas pode ser controlado pelo
                    usuário.</p>
            </div>
        </div>
    </section>
    <!-- Meus Projetos -->
    <section class="my-projects">
        <h2 class="section-title">Projetos Desenvolvidos</h2>
        <div class="projects-grid">
            <!-- Card GitHub -->
            <div class="project-card github-card">
                <div class="card-header">
                <i class="fab fa-php"></i>
                <h3>Sistema de Currículos</h3>
                </div>
                <img src="assets/img/curriculos.jpeg"
                    alt="Código GitHub" class="project-image">
                <div class="project-info">
                    <p>Sistema completo com versionamento no GitHub. Tecnologias: PHP, JavaScript, MySQL.</p>
                    <div class="tech-icons">
                        <i class="fab fa-php" title="PHP"></i>
                        <i class="fab fa-js" title="JavaScript"></i>
                        <i class="fas fa-database" title="MySQL"></i>
                    </div>
                    <div class="project-links">
                        <a href="https://curriculos.mkm.net.br/todas_vagas.php" target="_blank" class="demo-link">
                            <i class="fas fa-external-link-alt"></i> Ver Demo
                        </a>
                        <a href="https://github.com/seu-usuario/projeto" target="_blank" class="code-link">
                            <i class="fas fa-code"></i> Código
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card PHP -->
            <div class="project-card php-card">
                <div class="card-header">
                    <i class="fab fa-php"></i>
                    <h3>Sistema PHP</h3>
                </div>
                <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                    alt="Sistema PHP" class="project-image">
                <div class="project-info">
                    <p>Aplicação web em PHP com painel administrativo. Tecnologias: PHP, Bootstrap, jQuery.</p>
                    <div class="tech-icons">
                        <i class="fab fa-php" title="PHP"></i>
                       <!-- <i class="fab fa-bootstrap" title="Bootstrap"></i> -->
                       <i class="fas fa-database" title="MySQL"></i>
                        <i class="fab fa-js" title="jQuery"></i>
                    </div>
                    <div class="project-links">
                        <a href="#" target="_blank" class="demo-link">
                            <i class="fas fa-external-link-alt"></i> Ver Demo
                        </a>
                        <a href="#" target="_blank" class="code-link">
                            <i class="fas fa-code"></i> Código
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card JavaScript -->
            <div class="project-card js-card">
                <div class="card-header">
                    <i class="fab fa-js"></i>
                    <h3>Aplicação JS</h3>
                </div>
                <img src="https://images.unsplash.com/photo-1579468118864-1b9ea3c0db4a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                    alt="Aplicação JavaScript" class="project-image">
                <div class="project-info">
                    <p>Aplicação front-end moderna com React. Tecnologias: JavaScript, React, Node.js.</p>
                    <div class="tech-icons">
                        <i class="fab fa-js" title="JavaScript"></i>
                        <i class="fab fa-react" title="React"></i>
                        <i class="fab fa-node-js" title="Node.js"></i>
                    </div>
                    <div class="project-links">
                        <a href="#" target="_blank" class="demo-link">
                            <i class="fas fa-external-link-alt"></i> Ver Demo
                        </a>
                        <a href="#" target="_blank" class="code-link">
                            <i class="fas fa-code"></i> Código
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>