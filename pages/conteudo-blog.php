<?php
date_default_timezone_set('America/Sao_Paulo');

//Faz a Chamada da URL do Feed do Blog Delogic
$url0 = "https://blog.delogic.com.br/feed";
$url1 = "https://blog.delogic.com.br/category/gestao-de-projetos/feed/";
$url2 = "https://blog.delogic.com.br/category/gestao-de-pessoas/feed/";
$url3 = "https://blog.delogic.com.br/category/gestao-empresarial/feed/";
$url4 = "https://blog.delogic.com.br/category/gestao-da-qualidade/feed/";
$url5 = "https://blog.delogic.com.br/category/eventos/feed/";


function lerRSS($rdp)
{
    if (isset($_POST['submit'])) {
        if ($_POST['feedurl'] != '') {
            $rdp = $_POST['feedurl'];
        }
    }

    $invalidurl = false;
    if (@simplexml_load_file($rdp)) {
        $feeds = simplexml_load_file($rdp);
    } else {
        $invalidurl = true;
        echo "<h2>RSS Inválido</h2>";
    }


    $i = 0;


    if (!empty($feeds)) {
        $site = $feeds->channel->title;
        $sitelink = $feeds->channel->link;

        foreach ($feeds->channel->item as $item) {

            //Variáveis Para Receber Dados das Noticias.
            $title = $item->title;
            $link = $item->link;
            $description = $item->description;
            $postDate = $item->pubDate;
            $category = $item->category;
            $pubDate = date('D, d M Y', strtotime($postDate));

            $i++;

            if ($i<=3) echo ('
            <div class="rss-container">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div>
                            <i class="fas fa-tags"></i>&nbsp;<strong class="feed_category">' . $category . '</strong>
                            <h6 class="uk-card-title uk-margin-remove-bottom"><a target="_blank" class="feed_title" href="' . $link . '">' . $title . '</a></h6>
                            <div class="spacing"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body uk-padding-remove">
                    <p class="feed_description">' . $description . '</p>
                </div>
                <div class="uk-card-footer">
                    <a href="'.$link.'" class="uk-button uk-button-text">Leia Mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>');
        }
        
    } else {

        if (!$invalidurl) {
            echo "<h2>Nenhum item encontrado</h2>";
        }
    }
}


function lerRest($rdp)
{
    if (isset($_POST['submit'])) {
        if ($_POST['feedurl'] != '') {
            $rdp = $_POST['feedurl'];
        }
    }

    $invalidurl = false;
    if (@simplexml_load_file($rdp)) {
        $feeds = simplexml_load_file($rdp);
    } else {
        $invalidurl = true;
        echo "<h2>RSS Inválido</h2>";
    }


    $i = 0;


    if (!empty($feeds)) {
        $site = $feeds->channel->title;
        $sitelink = $feeds->channel->link;

        foreach ($feeds->channel->item as $item) {

            //Variáveis Para Receber Dados das Noticias.
            $title = $item->title;
            $link = $item->link;
            $description = $item->description;
            $postDate = $item->pubDate;
            $category = $item->category;
            $pubDate = date('D, d M Y', strtotime($postDate));

            $i++;

            if ($i>=4) echo ('
            <div class="rss-container">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div>
                            <i class="fas fa-tags"></i>&nbsp;<strong><a class="feed_category" href="https://blog.delogic.com.br/category">' . $category . '</a></strong>
                            <h6 class="uk-card-title uk-margin-remove-bottom"><a target="_blank" class="feed_title" href="' . $link . '">' . $title . '</a></h6>
                            <div class="spacing"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body uk-padding-remove">
                    <p class="feed_description">' . $description . '</p>
                </div>
                <div class="uk-card-footer">
                    <a href="'.$link.'" class="uk-button uk-button-text">Leia Mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>');
        }
        
    } else {

        if (!$invalidurl) {
            echo "<h2>Nenhum item encontrado</h2>";
        }
    }
}