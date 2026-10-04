<?php

    function pushImage($img, $caption, $thumb = true) {

        // echo basename(__FILE__, '.php');
        $dir = basename($_SERVER["REQUEST_URI"], '.php');

        $path = '../assets/_app/img/' . $dir;

        $ssrc = $path . '/dq/' . $img;
        $msrc = $path . '/low/' . $img;
        $tsrc = $path . '/thumbs/' . $img;

        $src = $thumb ? $tsrc : $ssrc;
        list($width, $height) = getimagesize($ssrc);
        list($tw, $th) = getimagesize($tsrc);

        echo '<div class="card p-2 border-0">';
        echo '<div class="thumb loading" style="max-width:' . $tw . 'px; max-height:' . $th . 'px; min-height: 128px;">';
        echo '<img class="card-img-top lozad thumb-image"
            src="' . $src . '"
            data-ssrc="' . $ssrc . '"
            data-msrc="' . $msrc . '"
            data-w="' . $width . '"
            data-h="' . $height . '"/>';
        echo '<span class="thumb-caption">';
        echo $caption;
        echo '</span>';
        echo '</div>';
        echo '</div>';
    }

    function pushPlainImage($img) {
        $dir = basename($_SERVER["REQUEST_URI"], '.php');

        $src = '../assets/_app/img/' . $dir . '/dq/' . $img;
        list($tw, $th) = getimagesize($src);

        echo '<div class="thumb loading" style="max-width:' . $tw . 'px; max-height:' . $th . 'px;">';
        echo '<img class="card-img-top lozad thumb-image"
            src="' . $src . '"/>';
        echo '</div>';
    }

    function pushTip($text, $ref = null) {
        echo '<span data-toggle="tooltip" data-html="true" title="' . $text . '"><b class="icon-note"></b></span>';
    }

    function pushArticle($img, $title, $author, $place, $date) {

        echo '<li><figure class="article">';
        pushImage($img, $title);
        echo '<figcaption>';
        echo '<h6 class="article-title">' . $title . '</h6>';
        echo '<h6 class="article-author">' . $author . '</h6>';
        echo '<h6 class="article-place">' . $place . '</h6>';
        echo '<h6 class="article-date">' . $date . '</h6>';
        echo '</figcaption>';
        echo '</figure></li>';
    }

    function pushArticleAddon($img, $title, $number) {

        $caption = '[' . $number . '] ' . $title;

        echo '<li style="display: none;">';
        pushImage($img, $caption);
        echo '</li>';
    }

    function pushCopyleft($fixed) {
        echo '<footer>
            <p class="copyright">
                <i>Il testo di questa pagina è distribuito sotto licenza <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribuzione - Condividi allo stesso modo 3.0 Unported</a>
                </i>
            </p>
            </footer>
            <style>
              .copyright {';

        if ($fixed)
            echo '  bottom: 0;
                    position: relative;';
        else
            echo '  bottom: 0;
                position: absolute;';
        
        echo '  color: white;
                font-size: 1rem;
                display: block;
                text-align: center;
                background: rgba(0, 0, 0, .9);
                padding-top: .25rem;
                padding-bottom: .25rem;
                margin-bottom: 0;
                margin-top: 1rem;
                width: 100%;
                font-family: Segoe UI;
            }
            </style>';
    }


    function pushCopyright($fixed) {

        return pushCopyleft($fixed);
        
        echo '<footer>
            <p class="copyright">
            © Copyright 2019 - Attilio Pierelli
            </p>
            </footer>
            <style>
              .copyright {';

        if ($fixed)
            echo '  bottom: 0;
                    position: relative;';
        else
            echo '  bottom: 0;
                position: absolute;';
        
        echo '  color: white;
                font-size: 1rem;
                display: block;
                text-align: center;
                background: rgba(0, 0, 0, .9);
                padding-top: .25rem;
                padding-bottom: .25rem;
                margin-bottom: 0;
                margin-top: 1rem;
                width: 100%;
                font-family: Segoe UI;
            }
            </style>';
    }

?>