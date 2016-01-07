<?php include("banco.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/foxicon.png">
    <title>Scripting Studios Art - Criação de Sites em Cachoeira do Sul, Santa Maria e Porto Alegre</title>
    <meta name="description" content="">
    <meta name="author" content="Scripting Studios Art">
    <META NAME="Keywords" CONTENT="web design, criação de site, desenvolver um site, site para empresa, comprar um site, e-mails personalizados, valor, emails empresariais, otimização de sites, cachoeira do sul, webdesign, criação de sites, assistencia, rodrigo machado, andré machado, guacimar mello, tecnico, informatica, barato, rede, album, digital, Scripting Studios Art, Santa Maria, Porto Alegre, Desenvolvimento de Sites, Art, Scripting, Tecnologias, Orçamento, Contato, Telefone, Equipe, Programação, Criação, Criacao, Site, Desenvolver, Criar Site">
    <META NAME="Description" CONTENT="Criação de Sites em Cachoeira do Sul, Santa Maria, Porto Alegre, Desenvolvimento de Sites, Sistemas Internos, Intranet, Loja Virtual, Produtos, Serviços. Tenha um site para sua empresa, Informatica, Scripting Studios Art">
    
    <META NAME="Subject" CONTENT="Criação de Sites - Cachoeira do Sul, Santa Maria, Porto Alegre, Scripting Studios Art">
    <META NAME="Classification" CONTENT="Computers/Internet">
    <META NAME="Abstract" CONTENT="Criação de sites Cachoeira do Sul, Santa Maria, Porto Alegre - Webdesign, Scripting Studios Art">
    <META NAME="Copyright" CONTENT="© Scripting Studios Art">
    <META NAME="Contact" CONTENT="contato@scripting.com.br">
    <META NAME="Publisher" CONTENT="Scripting Studios Art">
    <META NAME="Robots" CONTENT="ALL">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <META NAME="Revisit-After" CONTENT="5 Days">
    <META NAME="Distribution" CONTENT="Global">
    <META NAME="Rating" CONTENT="General">


    <link rel="canonical" href="http://www.scripting.com.br/" >
    <meta name="geo.region" content="BR-RS" >
    <meta name="geo.placename" content="Cachoeira do Sul, Rio Grande do Sul, Brasil" >
    <meta name="geo.position" content="-30.0483822;-52.8872863,17" >
    <meta name="dcterms.title" content="Criação de Sites em Cachoeira do Sul, Santa Maria, Porto Alegre, Desenvolvimento de Sites, Sistemas Internos, Intranet, Loja Virtual, Produtos, Serviços. Tenha um site para sua empresa, Informatica, Scripting Studios Art" >
    <meta name="dcterms.type" content="text" >
    <meta name="dcterms.format" content="text/html" >
    <meta name="dc.language" content="pt-BR" >
    <meta name="dcterms.subject" content="web design, criação de site, desenvolver um site, site para empresa, comprar um site, e-mails personalizados, valor, emails empresariais, otimização de sites, cachoeira do sul, webdesign, criação de sites, assistencia, rodrigo machado, andré machado, guacimar mello, tecnico, informatica, barato, rede, album, digital, Scripting Studios Art, Santa Maria, Porto Alegre, Desenvolvimento de Sites, Art, Scripting, Tecnologias, Orçamento, Contato, Telefone, Equipe, Programação, Criação, Criacao, Site, Desenvolver, Criar Site" >
    <meta name="dcterms.creator.address" content="contato@scripting.com.br" >
    <meta name="dcterms.identifier" content="http://www.scripting.com.br/" >
    <meta property="og:title" content="Scripting Studios Art - Criação de Sites em Cachoeira do Sul, Santa Maria e Porto Alegre" >
    <meta property="og:url" content="http://www.scripting.com.br/" >
    <meta property="og:image" content="images/foxicon.png" >
    <meta property="og:site_name" content="Scripting Studios Art - Criação de Sites em Cachoeira do Sul, Santa Maria e Porto Alegre" >
    <meta property="fb:admins" content="scriptingstudiosart">
    <meta property="og:description" content="Criação de Sites em Cachoeira do Sul, Santa Maria, Porto Alegre, Desenvolvimento de Sites, Sistemas Internos, Intranet, Loja Virtual, Produtos, Serviços. Tenha um site para sua empresa, Informatica, Scripting Studios Art" >
    <meta property="og:latitude" content="-30.0483822" >
    <meta property="og:longitude" content="-52.8872863,17" >
    <meta property="og:street-address" content="Rua Riachuelo 517" >
    <meta property="og:locality" content="Cachoeira do Sul" >
    <meta property="og:region" content="RS" >
    <meta property="og:country-name" content="BR" >
    <meta property="og:email" content="contato@scripting.com.br" >
    <meta property="og:phone_number" content="(51) 9684-6630" >
    <meta itemprop="name" content="Scripting Studios Art - Criação de Sites em Cachoeira do Sul, Santa Maria e Porto Alegre" >
    <meta itemprop="image" content="images/foxicon.png" >
    <meta name="alexaVerifyID" content="gaBEFg-Vtlufz8aLpC_7r7_EwPA"/> 
    <script type="text/javascript">
    _atrk_opts = { atrk_acct:"gH9Cf1a8Md00aq", domain:"scripting.com.br",dynamic: true};
    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>


    <link rel="alternate" hreflang="pt-BR" href="http://scripting.com.br/" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/andremachado.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/lightbox.css">

    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>

</head>
<body >
<?php
            if (isset($_GET['p'])) { $page = $_GET['p']; }

                ?>
    <!-- Inicio do Container -->
    <div class="container">
        <!-- Inicio do Conteúdo Header -->
        <header class="row">
            <h1 style="display:none;">Criação de Sites - Com espírito inovador, a Scripting Studios Art desenvolve soluções criativas e inteligentes para seus clientes, com o intuito de que a apresentação da empresa na internet alcance os resultados esperados.</h1>
            <ul class="nav nav-tabs sans">
                <li class="active">
                    <a <?php if (isset($page)) { ?> href="index.php" <?php } else { ?> href="index.php#home" data-toggle="tab" <?php } ?> rel="Scripting Studios Art">Início</a></li>
                <li><a <?php if (isset($page)) { ?> href="index.php?p=institucional" <?php } else { ?> href="index.php?p=institucional#Institucional" data-toggle="tab" <?php } ?> rel="Institucional">Institucional</a></li>
                <li><a <?php if (isset($page)) { ?> href="index.php?p=tecnologias" <?php } else { ?> href="index.php?p=tecnologias#Tecnologias" data-toggle="tab" <?php } ?> rel="Tecnologias">Tecnologias</a></li>
                <li><a <?php if (isset($page)) { ?> href="index.php?p=servicos" <?php } else { ?> href="index.php?p=servicos#Servicos" data-toggle="tab" <?php } ?> rel="Servicos">Serviços</a></li>
                <li><a <?php if (isset($page)) { ?> href="index.php?p=blog" <?php } else { ?> href="index.php?p=blog#Blog" data-toggle="tab"<?php } ?> rel="Blog">Blog</a></li>
                <li><a <?php if (isset($page)) { ?> href="index.php?p=faq" <?php } else { ?> href="index.php?p=faq#Faq" data-toggle="tab"<?php } ?> rel="Faq">Faq</a></li>
                <li style="background-color:#3B5998;"><a class="social" <?php if (isset($page)) { ?> href="index.php?p=portfolio" <?php } else { ?> href="index.php?p=portfolio#Portfolio" data-toggle="tab"<?php } ?> rel="Portfólio">Portfólio</a></li>
                <li style="background-color:#2FCC73;"><a class="social" <?php if (isset($page)) { ?> href="index.php?p=orcamento" <?php } else { ?> href="index.php?p=orcamento#Orcamento" data-toggle="tab"<?php } ?> rel="Orçamento">Orçamento</a></li>
                <li style="background-color:#DD4B39;"><a class="social" <?php if (isset($page)) { ?> href="index.php?p=contato" <?php } else { ?> href="index.php?p=contato#Contato" data-toggle="tab"<?php } ?> rel="Contato">Contato</a></li>
            </ul>
        <!-- Fim do Conteúdo Header -->
        </header>
        <!-- Inicio da Linha -->
        <div class="row" >
            <!-- Inicio da Tag Main com 12 C -->
            <div role="main" class="col-md-12" >
              <!-- Inicio do Tab Content -->
                <div class="tab-content">
            <?php
            if ((isset($page)) && (file_exists("page/$page.php"))){
                ?>
                    <!-- Página dinâmica -->
                    <?php @include("page/$page.php"); ?>
                <?php
            }
            else if ((isset($page)) && (!file_exists("page/$page.php"))) {
                include("page/404.php");
            }
            else if (!isset($page)) {
            ?>
                    <!-- Homepage -->
                    <div id="home" class="tab-pane fade in active">
                        <div style="background-color: rgba(246, 246, 246, 0);margin-bottom:0px;padding-bottom:0px;">
                            <?php include("inc/sliderfoundation.php"); ?>
                            <h3 class="sans">Conectando o mundo com você</h3>
                            <p style="margin:0 auto;width:98%;text-align:center;padding:15px;" class="sans"><strong>Criação de Sites e Sistemas Web</strong> - Com espírito inovador, a Scripting Studios Art desenvolve soluções criativas e inteligentes para seus clientes, com o intuito de que a apresentação da empresa na internet alcance os resultados esperados.</p>
                        </div>    
                        <div class="box-content">
                            <?php include("inc/frontpage.php"); ?>                                                    
                        </div>
                    </div>
                    <!-- Institucional -->
                    <div id="Institucional" class="tab-pane fade">
                            <?php @include("page/institucional.php"); ?>
                    </div>
                    <!-- Tecnologias -->
                    <div id="Tecnologias" class="tab-pane fade">
                            <?php @include("page/tecnologias.php"); ?>
                    </div>
                    <!-- Serviços -->
                    <div id="Servicos" class="tab-pane fade">
                            <?php @include("page/servicos.php"); ?>
                    </div>
                    <!-- Blog -->
                    <div id="Blog" class="tab-pane fade">
                            <?php @include("page/blog.php"); ?>
                    </div>
                    <!-- Faq -->
                    <div id="Faq" class="tab-pane fade">
                            <?php @include("page/faq.php"); ?>
                    </div>
                    <!-- Portfólio -->
                    <div id="Portfolio" class="tab-pane fade">
                            <?php @include("page/portfolio.php"); ?>
                    </div>
                    <!-- Orçamento -->
                    <div id="Orcamento" class="tab-pane fade">
                            <?php @include("page/orcamento.php"); ?>
                    </div>
                    <!-- Contato -->
                    <div id="Contato" class="tab-pane fade">
                            <?php @include("page/contato.php"); ?>
                    </div>
            <?php
            }
            ?>
                <!-- Fim do Tab Content -->
                </div>

            <!-- Fim da tag Main com 12 C -->
            </div>
        <!-- Fim da Linha -->
        </div>

        <!-- Inicio do Footer -->
        <footer class="row">
           <?php include("inc/facaumorcamento.php"); ?>
           <?php include("inc/footer.php"); ?>
        <!-- Fim do Footer -->
        </footer>
        <!-- Inicio do Copyright -->
        <div class="copyright row">
            E-mail: contato@scripting.com.br
            <p>Scripting Studios Art</p>
        <!-- Fim do Copyright -->
        </div>
    <!-- Fim do Conainer -->
    </div>

    <!-- Inicio do Google Analytics -->
    <div>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-64994314-1', 'auto');
          ga('send', 'pageview');

        </script>
    <!-- Fim do Google Analytics -->
    </div>

    <!-- Google Tag Manager -->
    <div>
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5VQ92L"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5VQ92L');</script>
    <!-- End Google Tag Manager -->
    </div>
    <?php include("inc/seo.php"); ?>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>