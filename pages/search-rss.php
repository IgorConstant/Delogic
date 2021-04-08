<?php
$rss = new DOMDocument();
$rss->load('https://blog.delogic.com.br/feed/');
$formulario = $_POST["pesquisa"];


function rssSearch($rssfeed, $results)
{
    $list = array();
    $found = 0;


    foreach ($rssfeed->getElementsByTagName('item') as $node) {
        $item = array(
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'description' => $node->getElementsByTagName('description')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
            'cat' => $node->getElementsByTagName('category')->item(0)->nodeValue
        );
        array_push($list, $item);
    }

    sizeof($list);


    for ($i=0;$i<sizeof($list);$i++) {
        
        $post = $list[$i]['description'];

        $titletolower = ($post);

        if (strpos($titletolower, $results) !== false)  {
            $link = $list[$i]['link'];
            $category = $list[$i]['cat'];
            $title = $list[$i]['title'];
            $description = $list[$i]['description'];
            echo ('
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
            $found++;
        
        } 
    }


    if ($found == 0) {
        echo "<h2 class='uk-width-xxlarge uk-margin'>Nenhum resultado corresponde a sua pesquisa.</h2>";
    }
    
}


rssSearch($rss, $formulario);
