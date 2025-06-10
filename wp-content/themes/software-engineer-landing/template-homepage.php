<?php
/**
 * Template Name: Página Inicial
 * Description: Template personalizado para a página inicial do engenheiro de software
 */

get_header();
?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="animate-on-scroll">Engenheiro de Software</h1>
                <p class="animate-on-scroll">Desenvolvendo soluções inovadoras e escaláveis</p>
                <div class="hero-buttons animate-on-scroll">
                    <a href="#projects" class="btn-primary">Ver Projetos</a>
                    <a href="#contact" class="btn-secondary">Contato</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Habilidades Técnicas</h2>
            <div class="skills-grid">
                <div class="skill-card animate-on-scroll">
                    <i class="fas fa-code"></i>
                    <h3>Desenvolvimento</h3>
                    <p>JavaScript, Python, Java, C++</p>
                </div>
                <div class="skill-card animate-on-scroll">
                    <i class="fas fa-database"></i>
                    <h3>Banco de Dados</h3>
                    <p>MySQL, PostgreSQL, MongoDB</p>
                </div>
                <div class="skill-card animate-on-scroll">
                    <i class="fas fa-cloud"></i>
                    <h3>Cloud</h3>
                    <p>AWS, Azure, Google Cloud</p>
                </div>
                <div class="skill-card animate-on-scroll">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Mobile</h3>
                    <p>React Native, Flutter</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Projetos</h2>
            <div class="project-filter animate-on-scroll">
                <button data-filter="all" class="active">Todos</button>
                <button data-filter="web">Web</button>
                <button data-filter="mobile">Mobile</button>
                <button data-filter="ai">IA</button>
            </div>
            <div class="projects-grid">
                <?php
                // Aqui você pode adicionar um loop para exibir os projetos
                // usando Custom Post Type ou Elementor
                ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title animate-on-scroll">Entre em Contato</h2>
            <div class="contact-content">
                <div class="contact-info animate-on-scroll">
                    <h3>Vamos trabalhar juntos</h3>
                    <p>Estou disponível para novos projetos e oportunidades.</p>
                    <div class="contact-details">
                        <p><i class="fas fa-envelope"></i> seu@email.com</p>
                        <p><i class="fas fa-phone"></i> (XX) XXXX-XXXX</p>
                        <p><i class="fas fa-map-marker-alt"></i> Sua Localização</p>
                    </div>
                </div>
                <div class="contact-form animate-on-scroll">
                    <form id="contact-form" action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" required placeholder="Seu Nome">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" required placeholder="Seu Email">
                        </div>
                        <div class="form-group">
                            <textarea name="message" required placeholder="Sua Mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Enviar Mensagem</button>
                        <div class="form-message"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer(); 