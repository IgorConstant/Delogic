<?php require 'api/core.php'; ?>
<?php date_default_timezone_set('America/Sao_Paulo'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Igor Henrique Constant">
    <meta name="description" content="Gerir informações, fica mais fácil com a Delogic! A gestão de processos é o melhor caminho para garantir um crescimento empresarial escalável e sem riscos.">

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.delogic.com.br/" />
    <meta property="og:title" content="Delogic | Sistemas de Gestão Integrados" />
    <meta property="og:description" content="Gerir informações, fica mais fácil com a Delogic! A gestão de processos é o melhor caminho para garantir um crescimento empresarial escalável e sem riscos." />

    <base href="<?php echo Request::getBaseUrl(); ?>">

    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="favicon.ico" type="image/x-icon">

    <title>Delogic | Sistemas de Gestão Integrados</title>

    <!-- Css Compilado -->
    <link rel="stylesheet" href="assets/css/mystyles.css">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js"></script>

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="assets/dist/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/dist/owl.theme.default.min.css">

    <!-- jQuery Ajax Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- RdStation -->
    <script async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/361234e4-2f23-410b-9fe9-3099e1f5dd44-loader.js" type="text/javascript"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125776993-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-125776993-1');
    </script>
</head>

<body>
    <?php
    extract($_GET);
    require 'header.php';
    require 'pages/' . $page . '.php';
    require 'footer.php';
    ?>

    <!-- Script OwlCarousel  -->
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                rtl: false,
                margin: 20,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true,
                navText: ["<img src='assets/images/site/seta.png'>"],
                responsive: {
                    600: {
                        rtl: false,
                        items: 1,
                    }
                }
            });
        })
    </script>



    <!-- JS Framework -->
    <script src="assets/js/main.js"></script>
    <script src="scripts/owl.carousel.js"></script>
</body>

</html>