<?php 
$page_title = "Quem Sou - Meu Portfólio";
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
include 'includes/header.php'; 
?>

<!-- Banner Pessoal -->
<section class="personal-banner">
    <div class="banner-container">
        <img src="https://images.unsplash.com/photo-1571171637578-41bc2dd41cd2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
             alt="Desenvolvimento Pessoal" 
             class="banner-img">
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <h1>Minha História</h1>
            <p>Da fábrica para o mundo da tecnologia: uma jornada de transformação</p>
        </div>
    </div>
</section>

<!-- Conteúdo Quem Sou -->
<section class="personal-content">
    <div class="container">
        <div class="personal-grid">
            <!-- Foto e Dados Pessoais -->
            <div class="personal-card personal-profile">
                <div class="profile-image">
                    <img src="assets/img/gustavo.png" 
                         alt="Minha Foto" 
                         class="profile-img">
                </div>
                <div class="profile-info">
                    <h2>Informações Pessoais</h2>
                    <ul class="personal-details">
                        <li><i class="fas fa-user"></i> <strong>Idade:</strong> 30 anos</li>
                        <li><i class="fas fa-map-marker-alt"></i> <strong>Naturalidade:</strong> Passos-MG</li>
                        <li><i class="fas fa-home"></i> <strong>Residência:</strong> Braço do Norte (20+ anos)</li>
                        <li><i class="fas fa-laptop-code"></i> <strong>Área:</strong> Tecnologia (4+ anos)</li>
                    </ul>
                </div>
            </div>

            <!-- Minha Jornada -->
            <div class="personal-card personal-journey">
                <h2><i class="fas fa-road"></i> Minha Jornada</h2>
                <div class="journey-timeline">
                    <div class="journey-step">
                        <div class="step-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <div class="step-content">
                            <h3>Chão de Fábrica</h3>
                            <p>Por muitos anos trabalhei no setor industrial, desenvolvendo disciplina, trabalho em equipe e resiliência.</p>
                        </div>
                    </div>

                    <div class="journey-step">
                        <div class="step-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="step-content">
                            <h3>Volta aos Estudos</h3>
                            <p>Aos 28 anos, decidi mudar de vida e retornei aos estudos, descobrindo minha paixão pela tecnologia e programação.</p>
                        </div>
                    </div>

                    <div class="journey-step">
                        <div class="step-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="step-content">
                            <h3>Descoberta Profissional</h3>
                            <p>Meu primeiro contato com desenvolvimento web foi transformador. Desde então, venho me dedicando intensamente a aprender e crescer na área.</p>
                        </div>
                    </div>

                    <div class="journey-step">
                        <div class="step-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="step-content">
                            <h3>Atuação Profissional</h3>
                            <p>Há mais de 4 anos trabalhando com tecnologia, cada dia é uma nova oportunidade de aprendizado e superação.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Valores e Visão -->
            <div class="personal-card personal-values">
                <h2><i class="fas fa-heart"></i> Meus Valores</h2>
                <div class="values-grid">
                    <div class="value-item">
                        <i class="fas fa-brain"></i>
                        <h3>Resiliência</h3>
                        <p>Aprendi com minha trajetória que persistência é a chave para superar qualquer desafio.</p>
                    </div>
                    <div class="value-item">
                        <i class="fas fa-hands-helping"></i>
                        <h3>Colaboração</h3>
                        <p>Acredito no poder do trabalho em equipe e no compartilhamento de conhecimento.</p>
                    </div>
                    <div class="value-item">
                        <i class="fas fa-seedling"></i>
                        <h3>Crescimento Contínuo</h3>
                        <p>Busco aprender algo novo todos os dias, tanto profissional quanto pessoalmente.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>