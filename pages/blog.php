<section id="banner-blog">
    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(assets/images/site/banner-blog.png); height: 600px;">
        <div class="uk-container uk-padding">
            <div class="block-title-banner uk-text-center">
                <h1 class="uk-heading-medium">Compartilhamos nossos conhecimentos com você!</h1>
                <p>Conteúdo dedicado a oferecer insights e dicas para profissionais ou empresas que desejam saber mais sobre gestão empresarial!</p>
                <div class="spacing"></div>
                <form class="uk-search uk-search-default" action="resultado-pesquisa" method="POST">
                    <input class="uk-search-input" type="search" name="pesquisa" placeholder="Tem alguma dúvida? Insira Algum Termo.">
                </form>
            </div>
        </div>
    </div>
</section>

<section id="post-1">
    <div class="uk-container uk-padding">
        <div class="block-title">
            <h1>Gestão Empresarial</h1>
        </div>
        <div class="uk-text-center" uk-grid>
            <div class="uk-child-width-1-3@m uk-grid-medium uk-grid-match uk-grid">
                <?php require('conteudo-blog.php') ?>
                <?php lerRSS($url3); ?>
            </div>

            <div id="more-three" hidden>
                <div class="uk-child-width-1-3@m uk-grid-medium uk-grid-match uk-grid">
                    <?php lerRest($url3) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <div class="uk-container uk-padding">
            <div class="spacing"></div>
            <a uk-toggle="target: #more-three">
                <p class="uk-text-right uk-margin-large-right">MAIS <i class="fas fa-chevron-right"></i></p>
            </a>
        </div>
    </div>
</section>

<section id="post-2">
    <div class="uk-container uk-padding">
        <div class="block-title">
            <h1>Gestão da Qualidade</h1>
        </div>
        <div class="uk-text-center" uk-grid>
            <div class="uk-child-width-1-3@m uk-grid-medium uk-grid-match uk-grid">
                <?php lerRSS($url4); ?>
            </div>
            <div id="more-four" hidden>
                <div class="uk-child-width-1-3@m uk-grid-medium uk-grid-match uk-grid">
                    <?php lerRest($url4) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <div class="uk-container uk-padding">
            <div class="spacing"></div>
            <a uk-toggle="target: #more-four">
                <p class="uk-text-right uk-margin-large-right">MAIS <i class="fas fa-chevron-right"></i></p>
            </a>
        </div>
    </div>
</section>

<section id="post-3">
    <div class="uk-container uk-padding">
        <div class="block-title">
            <h1>Gestão de Projetos</h1>
        </div>
        <div class="uk-text-center" uk-grid>
            <div class="uk-child-width-1-3@m uk-grid-medium uk-grid-match uk-grid">
                <?php lerRSS($url1); ?>
            </div>
            <div id="more-one" hidden>
                <div class="uk-child-width-1-3@m uk-grid-medium uk-grid-match uk-grid">
                    <?php lerRest($url1) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <div class="uk-container uk-padding">
            <div class="spacing"></div>
            <a uk-toggle="target: #more-one">
                <p class="uk-text-right uk-margin-large-right">MAIS <i class="fas fa-chevron-right"></i></p>
            </a>
        </div>
    </div>
</section>


<section id="post-4">
    <div class="uk-container uk-padding">
        <div class="block-title">
            <h1>Gestão de Pessoas</h1>
        </div>
        <div class="uk-text-center" uk-grid>
            <div class="uk-child-width-1-3@m uk-grid-medium uk-grid-match uk-grid">
                <?php lerRSS($url2); ?>
            </div>
            <div id="more-two" hidden>
                <div class="uk-child-width-1-3@m uk-grid-medium uk-grid-match uk-grid">
                    <?php lerRest($url2) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <div class="uk-container uk-padding">
            <div class="spacing"></div>
            <a uk-toggle="target: #more-two">
                <p class="uk-text-right uk-margin-large-right">MAIS <i class="fas fa-chevron-right"></i></p>
            </a>
        </div>
    </div>
</section>



<section id="icon-point">
    <div class="uk-container uk-padding-large">
        <div class="block-point uk-text-center">
            <img src="assets/images/site/icons-parceiros.png" alt="icons">
        </div>
    </div>
</section>