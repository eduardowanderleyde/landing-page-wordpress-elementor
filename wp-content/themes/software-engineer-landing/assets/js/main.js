(function($) {
    'use strict';

    // Smooth scroll para links de âncora
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && 
            location.hostname === this.hostname) {
            let target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
                return false;
            }
        }
    });

    // Animação de entrada para elementos
    function animateOnScroll() {
        $('.animate-on-scroll').each(function() {
            let elementTop = $(this).offset().top;
            let elementBottom = elementTop + $(this).outerHeight();
            let viewportTop = $(window).scrollTop();
            let viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('animated');
            }
        });
    }

    // Inicializar animações
    $(window).on('scroll', animateOnScroll);
    $(document).ready(animateOnScroll);

    // Menu mobile
    $('.mobile-menu-toggle').click(function() {
        $('.main-navigation').toggleClass('active');
    });

    // Formulário de contato
    $('#contact-form').submit(function(e) {
        e.preventDefault();
        
        let form = $(this);
        let submitButton = form.find('button[type="submit"]');
        let formData = form.serialize();

        submitButton.prop('disabled', true).text('Enviando...');

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {
                form.find('.form-message').html('<div class="success">Mensagem enviada com sucesso!</div>');
                form[0].reset();
            },
            error: function() {
                form.find('.form-message').html('<div class="error">Erro ao enviar mensagem. Tente novamente.</div>');
            },
            complete: function() {
                submitButton.prop('disabled', false).text('Enviar Mensagem');
            }
        });
    });

    // Filtro de projetos
    $('.project-filter button').click(function() {
        let filter = $(this).data('filter');
        
        $('.project-filter button').removeClass('active');
        $(this).addClass('active');

        if (filter === 'all') {
            $('.project-item').show();
        } else {
            $('.project-item').hide();
            $('.project-item[data-category="' + filter + '"]').show();
        }
    });

})(jQuery); 