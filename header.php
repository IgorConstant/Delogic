<header>
    <div class="uk-position-relative">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
            <nav class="uk-navbar uk-navbar-container uk-margin">
                <!-- Logo Delogic -->
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href=""><img width="80%" src="assets/images/site/logo-delogic.png" alt="logo"></a>
                </div>
                <div class="uk-navbar-center uk-visible@l">
                    <ul class="uk-navbar-nav ">
                        <li class="uk-active"><a href="">Home</a></li>
                        <li><a class="links" href="quem-somos">Quem Somos</a></li>
                        <li><a class="links" href="servicos">Serviços</a></li>
                        <li><a class="links" href="produtos">Produtos</a></li>
                        <li><a class="links" href="segmentos">Segmentos</a></li>
                        <li><a class="links" href="blog">Blog</a></li>
                        <li><a class="links" href="ao-vivo">Ao Vivo</a></li>
                        <li><a class="links" href="fale-conosco">Fale Conosco</a></li>
                    </ul>
                </div>

                <div class="uk-navbar-right uk-visible@l">
                    <div class="block-icons">
                        <ul class="uk-navbar-nav">
                            <li><a class="icons-header" href="https://pt-br.facebook.com/delogicbr/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="icons-header" href="https://pt.linkedin.com/company/delogic" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a class="icons-header" href="https://www.youtube.com/channel/UCbTRsjJKxCGoyL5tLZ0oQ5g?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a class="icons-header" href="mailto:comercial@delogic.com.br" target="_blank"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Canvas -->
                <a class="uk-navbar-toggle uk-hidden@l uk-position-right" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary"><span class="off-canvas">Menu</span></a>
            </nav>
        </div>
    </div>
</header>

<!-- social icons -->
<?php include('social-icons.php') ?>

<!-- OffCanvas -->
<div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <div class="brand uk-text-center">
            <a class="uk-offcanvas-brand" href=""><img width="80%" src="assets/images/site/logo-delogic.png" alt="brand-delogic"></a>
        </div>
        <ul class="uk-nav uk-nav-primary uk-padding-small uk-nav-left uk-margin-auto-vertical">
            <li class="uk-active"><a href="">Home</a></li>
            <li><a class="links" href="quem-somos">Quem Somos</a></li>
            <li><a class="links" href="servicos">Serviços</a></li>
            <li><a class="links" href="produtos">Produtos</a></li>
            <li><a class="links" href="segmentos">Segmentos</a></li>
            <li><a class="links" href="blog">Blog</a></li>
            <li><a class="links" href="ao-vivo">Ao Vivo</a></li>
            <li><a class="links" href="fale-conosco">Fale Conosco</a></li>

            <li class="uk-nav-divider"></li>

            <li class="icons-social"><a href="https://pt-br.facebook.com/delogicbr/" class="fb" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
            <li class="icons-social"><a href="https://pt.linkedin.com/company/delogic" class="linkedin" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
            <li class="icons-social"><a href="https://www.youtube.com/channel/UCbTRsjJKxCGoyL5tLZ0oQ5g?view_as=subscriber" class="youtube" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
            <li class="icons-social"> <a href="mailto:comercial@delogic.com.br" class="email" target="_blank"><i class="fas fa-envelope" aria-hidden="true"></i></a></li>
        </ul>
    </div>
</div>
