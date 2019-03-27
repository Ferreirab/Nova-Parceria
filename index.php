<?php
define('SITE_KEY', '6LchQpMUAAAAADLxb9kI9zNGZ8PpUEjmW2qY9dhY');
define('SECRET_KEY', '6LchQpMUAAAAAKGbUD3bJqKEfcP3jC8V1f0ani4o')
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/iconNovaParceria.png" type="image/png"/>
        <title>Nova Parceria</title>
    <a href="formulario.php"></a>
    <link href="Style/css.css" rel="stylesheet" type="text/css"/>
    <script src="Script/script.js" type="text/javascript"></script>
    <link href="Style/fonts.css" rel="stylesheet" type="text/css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?render=6LchQpMUAAAAADLxb9kI9zNGZ8PpUEjmW2qY9dhY"></script>

    <meta name="description" content="Conservadora BH, limpeza e conservação BH, 
          portaria BH, serviços de limpeza, serviços de portaria, serviços de conservação
          segurança do trabalho, limpeza de condomionio, limpeza, conservadora em bh, portaria 
          condominios, limpeza e conservação belo horizonte, solução completa condominio,
          empresa tercerizada belo horizonte, empresa de conservação belo horizonte, empresa de conservação bh,
          conservadoras bh, conservadora de condominio belo horizonte, conservadora e limpeza de condominio belo horizonte,
          conservação e portaria belo horizonte, tercerização de conservadora belo horizonte,
          conservação bh, belo horizonte conservadoras boas, conservadoras com limpeza e portaria bh,
          portaria 24 horas belo horizonte, conservação e portaria 24 horas belo horizonte,
          conservadora minas gerais, conservadora de condominios mg, conservação bh,
          conservadoras de condominio e segurança do trabalho belo horizonte, portaria 24h belo horizonte,
          conservação e segurança do trabalho nh, treinamento de NR-35, treinamento de NR-35 belo horizonte, 
          segurança e treinamento belo horizonte,  portaria e limpeza bh, conservação e treinamento de NF belo horizonte, 
          Nova Parceria, limpeza, fachada, segurança do trabalho, manutencao, conservadora,
          NF-35 BH,conservadoranova,  "/>

    <meta name="KEYWORDS" content="Conservadora BH, limpeza e conservação BH, 
          portaria BH, serviços de limpeza, serviços de portaria, serviços de conservação
          segurança do trabalho, limpeza de condomionio, limpeza, conservadora em bh, portaria 
          condominios, limpeza e conservação belo horizonte, solução completa condominio,
          empresa tercerizada belo horizonte, empresa de conservação belo horizonte, empresa de conservação bh,
          conservadoras bh, conservadora de condominio belo horizonte, conservadora e limpeza de condominio belo horizonte,
          conservação e portaria belo horizonte, tercerização de conservadora belo horizonte,
          conservação bh, belo horizonte conservadoras boas, conservadoras com limpeza e portaria bh,
          portaria 24 horas belo horizonte, conservação e portaria 24 horas belo horizonte,
          conservadora minas gerais, conservadora de condominios mg, conservação bh,
          conservadoras de condominio e segurança do trabalho belo horizonte, portaria 24h belo horizonte,
          conservação e segurança do trabalho nh, treinamento de NR-35, treinamento de NR-35 belo horizonte, 
          segurança e treinamento belo horizonte,  portaria e limpeza bh, conservação e treinamento de NF belo horizonte, 
          Nova Parceria, limpeza, fachada, segurança do trabalho, manutencao, conservadora,
          NF-35 BH,conservadoranova, "/>
</head>

<script type="text/javascript">
    jQuery(document).ready(function () {
        // Exibe ou oculta o botão
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 200) {
                jQuery('#subir').fadeIn(200);
            } else {
                jQuery('#subir').fadeOut(200);
            }
        });
        // Faz animação para subir
        jQuery('#subir').click(function (event) {
            event.preventDefault();
            jQuery('html, body').animate({scrollTop: 0}, 300);
        })
    });</script>

<body>
    <div id="topo" class="cabecalho" style="background-color:#4169E1; margin-top: -6%; width:100%; height: auto; border-radius: 10px;">
        <img class="logo" src="img/logoNovaParceria.jpg" alt="Logo Nova Parceria" style="margin-left: 35%; margin-right: 5%; margin-top: 1%; width: 30%; height: auto;"/> 

        <p style="margin-top: -9.5%; margin-right: 3%; margin-top: 1%; color: white; text-align: right; font-size: 1.3vw;"> 
            <a href="mailto:contato@conservadora.com.br" target="_blank"><img src="img/iconEmail.png" alt="Icone E-mail" style="width:2%;
                                                                              height: auto"/> contato@conservadoranova.com.br</a> | <a href="tel:31 3271-1537" target="_blank"><img src="img/iconTelefone.png" alt="icone Telefone" 
                                                                                                      style="width:2%;"/> 31 3271-1537</a> | <a href="https://api.whatsapp.com/send?phone=5531985627592&text=Olá! Nova Parceria" target="_blank">
                <img src="img/iconWhatsApp.png" alt="Icone WhatsApp" style="width:2%;"/> +55 31 98562-7592</a><br/><br/></p>
    </div>

    <!--        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <style>
        .mySlides {display:none;
                   opacity: 1;
        }
    </style>

    <div class="w3-content w3-section" style="background-color:white; height: auto; width: 34%; margin-top: 5%; margin-left: 34%;">
        <img class="mySlides" src="img/clientes/logoSesc.jpg" alt="Logo Sesc" style="width:100%; height:30vw; margin-left: 1%; margin-top: -11%;">
        <img class="mySlides" src="img/clientes/logoCamargoCorrea.jpg" alt="Logo Cargo Correa" style= "width:100%; height:30vw; margin-left: 1%; margin-top: -11%; ">
        <img class="mySlides" src="img/clientes/logoUsiminas.png" alt="Logo Usiminas" style="width:100%;height: 30vw; margin-left: 1%;margin-top: -11%;">
        <img class="mySlides" src="img/clientes/logoTranspetro.jpg" alt="Logo Transpetro" style="width:100%;height: 30vw; margin-left: 1%;margin-top: -11%;">           
        <img class="mySlides" src="img/clientes/logoMrv.jpg" alt="Logo Mrv" style="width:100%;height: 30vw; margin-left: 1%;margin-top: -11%;">
        <img class="mySlides" src="img/clientes/logoSaoMarcos.jpg" alt="Logo São Marcos" style="width:100%;height: 30vw; margin-left: 1%; margin-top: -11%;"> 
        <P style="     display: block;
           width: 10%;
           height: auto;
           background: #2E8B57;
           border: 1px;
           color: #fff;
           text-decoration: none;
           text-align: center;
           padding: 1%;
           margin: 5% 0% 1%;
           font-size: 1.5vw;
           position: absolute;
           margin-top: -30%;">Clientes</P>
        <p style="position: absolute; margin-top: -25.5%; color: black;
           font-size: 1.4vw;
           width: 30%;">Venha fazer parte de ser um de nossos clientes.</p>
    </div>

    <script>
        var myIndex = 0;
        carousel();
        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>

    <div class="hoverzoom" style="border-top-right-radius: 10px;">
        <img src="img/imgFundoMenuClientes.jpg" alt="Imagem de fundo do menu Clientes"/>
        <div class="retina">
            <a href="#serviços">Serviços</a>
            <p>A melhor forma de realizar seus serviços a sua disposição.</p>
        </div>
    </div>

    <style>
        .hoverzoom {
            position: relative;
            width: 33%;
            overflow: hidden;
            margin-left: 67%;
            margin-top: -31.6%;
        }
        .hoverzoom > img {
            width: 100%; 
            -webkit-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -moz-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -ms-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -o-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
        }
        .hoverzoom:hover > img {
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
        }
        .hoverzoom .retina{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 1;    
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0.5);    
            text-align: center;
            padding: 30px;

            -webkit-transition:	 all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -moz-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -ms-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -o-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000); 
        }
        .hoverzoom:hover .retina {
            opacity: 1;
            box-shadow: inset 0 0 100px 50px rgba(0,0,0,.5);
        }
        .hoverzoom .retina p {
            color: #fff;
            font-size: 1.1vw;
            width: 100%;
            letter-spacing: 1px;
        }
        .hoverzoom .retina a {
            display: block;
            width: 40%;
            background: red;
            border: 1px;
            color: #fff;
            text-decoration: none;
            text-align: center;
            padding: 1%;
            margin: -5% 0% 1%;
            font-size: 1.5vw;

        }
    </style>

    <!--       ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------> 

    <div class="hoverzoom1" style="border-bottom-right-radius: 10px;">
        <img src="img/imgFundoMenuEmpresa.jpg" alt="Imagem de fundo do menu Empresas"/>
        <div class="retina1">
            <a href="#sobre">Empresa</a>
            <p>Conoheça tudo sobre nos, quem somos.</p>
        </div>
    </div>

    <style>
        .hoverzoom1 {
            position: relative;
            width: 33%;
            overflow: hidden;
            margin-left: 67%;
            margin-top: -0.6%
        }
        .hoverzoom1 > img {
            width: 100%; 
            -webkit-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -moz-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -ms-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -o-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
        }
        .hoverzoom1:hover > img {
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
        }
        .hoverzoom1 .retina1{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 1;    
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0.5);    
            text-align: center;
            padding: 30px;

            -webkit-transition:	 all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -moz-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -ms-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -o-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000); 
        }
        .hoverzoom1:hover .retina1 {
            opacity: 1;
            box-shadow: inset 0 0 100px 50px rgba(0,0,0,.5);
        }
        .hoverzoom1 .retina1 p {
            color: #fff;
            font-size: 1.4vw;
            width: 100%;
            text-align: justify;
        }
        .hoverzoom1 .retina1 a {
            display: block;
            width: 40%;
            background: #00BFFF;
            border: 1px;
            color: #fff;
            text-decoration: none;
            text-align: center;
            padding: 1%;
            margin: 5% 0% 1%;
            font-size: 1.5vw;

        }
    </style>

    <!--        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="hoverzoom2" style="border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
        <img src="img/imgFundoMenuLocalizacao.jpg" alt="Imagem de fundo do menu Localização"/>
        <div class="retina2">
            <a href="#localização">Localização & Contatos</a>
            <p>Entre em contato conosco ou venha nos visitar.</p>
        </div>
    </div>

    <style>
        .hoverzoom2 {
            position: relative;
            width: 33%;
            overflow: hidden;
            margin-left: 0%;
            margin-top: -32.5%;
            height: 31.1vw;
        }
        .hoverzoom2 > img {
            width: 100%; 
            -webkit-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -moz-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -ms-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -o-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            height: 100%;
        }
        .hoverzoom2:hover > img {
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
        }
        .hoverzoom2 .retina2{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 1;    
            background: none repeat scroll 0 0 rgba(0, 0, 0, 0.5);    
            text-align: center;
            padding: 30px;

            -webkit-transition:	 all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -moz-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -ms-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            -o-transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000);
            transition: all .8s cubic-bezier(.190, 1.000, .220, 1.000); 
        }
        .hoverzoom2:hover .retina2 {
            opacity: 1;
            box-shadow: inset 0 0 100px 50px rgba(0,0,0,.5);
        }
        .hoverzoom2 .retina2 p {
            color: #fff;
            font-size: 1.4vw;
            width: 100%;
            text-align: justify;
        }
        .hoverzoom2 .retina2 a {
            display: block;
            width: 70%;
            background:#FFA500;
            border: 1px;
            color: #fff;
            text-decoration: none;
            text-align: center;
            padding: 1%;
            margin: 5% 0% 1%;
            font-size: 1.5vw;
            margin-top: -2%;
        }
    </style>

    <!--        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <a style="position: fixed; 
       bottom: 2em;
       left: -0em;
       text-decoration: none;
       color: white;
       font-size: 12px;
       padding: 1em;
       border-radius: 55px;
       display: none;" href="#topo" id="subir"><input type="image" src="img/iconSetaSubir.png" alt="Botão subir" >
    </a>

    <div class="servicos" id="serviços" style="background-color:whitesmoke; margin-top: 2%; width:100%; height: auto; border-radius: 10px;">
        <a href="#fachadas"><img src="img/limpezaDeFachada.jpg" alt="Limpeza de Fachada" style="margin-top: 1%; width: 30%; height: auto; border-radius: 8px; margin-left:0.5%;"/></a>
        <a href="#manutencao"><img src="img/manutencao.jpg" alt="Manutenção" style="margin-top: 1%; width:30%; height: auto; border-radius: 8px; margin-left: 4.5%;"/></a>
        <a href="#obra"><img src="img/obraCivil.jpg" alt="Obra Civil" style="margin-top: 1%; width:30%; height: auto; border-radius: 8px; margin-left:2.8%; "/></a>
        <a href="#projetos"><img src="img/projeto.jpg" alt="Projeto" style="width:30%; height: auto; border-radius: 8px; margin-left: 0.5%;"/></a>
        <a href="#seguranca"><img src="img/segurancaDoTrabalho.jpg" alt="Segurança do Trabalho" style="width: 30%; height: auto; border-radius: 8px; margin-left: 4.5%;"/></a>
        <a href="#limpeza"><img src="img/conservacaoLimpeza.jpg" alt="Conservação e limpeza" style="width:30%; height: auto; border-radius: 8px; margin-left: 2.3%;"/></a>
    </div>

    <!--                ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="fachadas" id="fachadas" style=" height: auto;
         width: 100%;
         background: #4169E1;
         color: white;
         margin-top: 1%;
         border-radius: 10px;
         ">
        <h2 style="text-align: center; margin-right: 550px; width: 100%; font-size: 2.5vw;"> Limpeza de fachadas</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" margin-top: -150px; width: 50%; height: auto; margin-left: 5px; position: relative  " >
            <div class="carousel-inner" style="margin-right: 550px; margin-top: 160px; width: 100%; border-radius: 10px; height: auto;">

                <div class="item active">
                    <img src="img/LimpezaDoCristo.jpg" alt="Limpeza do Cristo" style="width:100%; height: auto; border-radius: 10px; position: static">
                </div>

                <div class="item">
                    <img src="img/LimpezaDeFachadaDePredio.jpg" alt="Limpeza de fachada de predio" style="width:100%; height: auto; border-radius: 10px; position: static">
                </div>

                <div class="item"> 
                    <img src="img/fachada.jpg" alt="Fachada" style="width:100%; height: auto; border-radius: 10px; position: static">
                </div> 

                <br/>
            </div>
        </div>

        <div class="rightcolumn" style=" margin-right: 3%; margin-top: -25%; width: 45%; height: auto;" >
            <p align="justify" style=" font-size: 1.3vw;" >Com um serviço que vêm se popularizando no mercado, a Plátanos Descartáveis trouxe mais uma comodidade para
                todos os seus clientes. Hoje trabalhamos com técnicas especializadas em manter a fachada do seu prédio limpa
                e protegida contra a ação do tempo, clima e da poluição! Ter uma empresa de limpeza especialista em higienização
                e manutenção de fachada é vital para que um prédio gere sempre boas impressões em todos os seus visitantes! Com nossa
                empresa de limpeza você encontra uma equipe profissional, capacitada com todas as mais novas técnicas de limpeza e que
                segue padrões de segurança rígidos.
            </p>
        </div>
    </div>

    <!--        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="cliente1" id="manutencao" style=" height: auto;
         width: 100%;
         background: #4169E1;
         color: white;
         margin-top: -17px;
         border-radius: 10px;
         ">
        <h2 style="text-align: center; margin-right: 550px; width: 100%; font-size: 2.5vw;"> Serviços de manutenção </h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" margin-top: -150px; width: 50%; height: auto; margin-left: 49%; " >
            <div class="carousel-inner" style="margin-right: 550px; margin-top: 160px; width: 100%; height: auto;">

                <div class="item active">
                    <img src="img/manutencaoHidraulica.jpg" alt="Manutenção Hidráulica" style="width:100%; height: auto; border-radius: 10px;">
                </div>
                <div id="manutenção"></div>
                <div class="item">
                    <img src="img/manutencaoHidraulicaResidencial.jpg" alt="Manutenção Hidráulica residencial" style="width:100%; height: auto; border-radius: 10px;">
                </div>

                <div class="item"> 
                    <img src="img/manutencaoPortao.jpg" alt="Manutenção em portão" style="width:100%; height: auto; border-radius: 10px;"> 
                </div> 
                <br/>

            </div>
        </div>

        <div class="rightcolumn" style=" margin-right: 53%; margin-top: -25%; width: 45%; height: auto;" >
            <p align="justify" style=" font-size: 1.3vw;" >Fornecimento de mão de obra para solução de pequenas e grandes
                tarefas do dia a dia. Desde trocas de lâmpadas e manutenção de
                portão eletrônico a solução de grandes vazamentos hidráulicos.
            </p>
        </div>
    </div>

    <!--        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="cliente1" id="obra" style=" height: auto;
         width: 100%;
         background: #4169E1;
         color: white;
         margin-top: -17px;
         border-radius: 10px;
         ">
        <h2 style="text-align: center; margin-right: 550px; width: 100%; font-size: 2.5vw;"> Obra civil </h2>

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" margin-top: -150px; width: 50%; height: auto; margin-left: 5px;  " >
            <div class="carousel-inner" style="margin-right: 550px; margin-top: 160px; width: 100%; height: auto; border-radius: 10px;">
                <div class="item active">
                    <img src="img/pisoDeConcreto.jpg" alt="Piso de Concreto" style="width:100%; height: auto; border-radius: 10px;">
                </div>

                <div class="item">
                    <img src="img/planejamentoDeObra.jpg" alt="Planejamento de Obra" style="width:100%; height: auto; border-radius: 10px;">
                </div>

                <div class="item"> 
                    <img src="img/construcao.jpg"alt="Construção" style="width:100%; height: auto; border-radius: 10px;"> 
                </div> 
                <br/>

            </div>
        </div>

        <div class="rightcolumn" style=" margin-right: 3%; margin-top: -25%; width: 45%; height: auto;" >
            <p align="justify" style=" font-size: 1.3vw;" >Alvenaria, formas e obras em geral – Instalações elétricas, hidráulicas, prevenção e combate a incêndio
                Sistemas eletrônicos de segurança e automação - Restauração e calefação de fachada
                Acabamento de epóxi em piso - Revestimentos diversos – Pintura em geral - Impermeabilização em geral
                fggeralImpermeabilização em Pintura e isolamento térmico - Pintura texturizada e mar’morato.
            </p>
        </div>
    </div>

    <!--        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="cliente1" id="projetos" style=" height: auto;
         width: 100%;
         background: #4169E1;
         color: white;
         margin-top: -17px;
         border-radius: 10px;
         ">
        <h2 style="text-align: center; margin-right: 550px; width: 100%; font-size: 2.5vw;"> Projetos </h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" margin-top: -150px; width: 50%; height: auto; margin-left: 49%; " >

            <div class="carousel-inner" style="margin-right: 550px; margin-top: 160px; width: 100%; height: auto; border-radius: 10px;">
                <div class="item active">

                    <img src="img/desenhoDeProjeto.jpg" alt="Desenho de Projeto" style="width:100%; height: auto; border-radius: 10px;">
                </div>
                <div id="manutenção"></div>
                <div class="item">
                    <img src="img/projeto3D.jpg" alt="Porjeto em 3D" style="width:100%; height: auto; border-radius: 10px;">
                </div>

                <div class="item"> 
                    <img src="img/plantaDeProjeto.jpg"alt="Planta de projeto" style="width:100%; height: auto; border-radius: 10px;"> 
                </div> 
                <br/>
            </div>

        </div>

        <div class="rightcolumn" style=" margin-right: 53%; margin-top: -25%; width: 45%; height: auto;" >
            <p align="justify" style=" font-size: 1.3vw;" >Arquitetura - Estrutural - Instalações elétricas - SPDA - Cabeamento estruturado
                Hidro sanitários (hidráulica, esgoto e água pluvial) - Prevenção e Combate a Incêndio
                Sistemas eletrônicos e de automação residencial e industrial
                Legalização em órgãos públicos (Prefeitura, CEMIG, Corpo de Bombeiro).
            </p>
        </div>
    </div>

    <!--        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="cliente1" id="seguranca" style=" height: auto;
         width: 100%;
         background: #4169E1;
         color: white;
         margin-top: -17px;
         border-radius: 10px;
         ">
        <h2 style="text-align: center; margin-right: 550px; width: 100%; font-size: 2.5vw;"> Segurança e Medicina do Trabalho </h2>

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" margin-top: -150px; width: 50%; height: auto; margin-left: 5px;  " >
            <div class="carousel-inner" style="margin-right: 550px; margin-top: 160px; width: 100%; height: auto; border-radius: 10px;">
                <div class="item active">
                    <img src="img/normaRegulamentadora.jpg" alt="Norma regulamentadora NR" style="width:100%; height: auto; border-radius: 10px;">
                </div>

                <div class="item">
                    <img src="img/kitDeEPI.jpg" alt="Kit de EPI" style="width:100%; height: auto; border-radius: 10px;">
                </div>

                <div class="item"> 
                    <img src="img/epiTrabalhoAltura.jpg"alt="EPI em trabalho em altura" style="width:100%; height: auto; border-radius: 10px;"> 
                </div> 
                <br/>

            </div>
        </div>

        <div class="rightcolumn" style=" margin-right: 3%; margin-top: -25%; width: 45%; height: auto;" >
            <p align="justify" style=" font-size: 1.3vw;" > Fornecimento de ASO (Atestado de Saúde Ocupacional)
                Elaboração PPRA, PCMAT, PCMSO
                Elaboração do PPP (Perfil Profissiográfico Previdenciário)
                Treinamentos diversos (NR6, NR12, NR18, NR 35)
                Elaboração de laudos diversos - PCA - RIMA
                Pericias técnicas insalubridade/periculosidade.
            </p>
        </div>
    </div>

    <!--        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="cliente1" id="limpeza" style=" height: auto;
         width: 100%;
         background: #4169E1;
         color: white;
         margin-top: -17px;
         border-radius: 10px;
         ">
        <h2 id='' style="text-align: center; margin-right: 550px; width: 100%; font-size: 2.5vw;">Conservação e Limpeza </h2>

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style=" margin-top: -150px; width: 50%; height: auto; margin-left: 49%; " >
            <div class="carousel-inner" style="margin-right: 550px; margin-top: 160px; width: 100%; height: auto;border-radius: 10px;">
                <div class="item active">
                    <img src="img/faxineira.jpg" alt="Faxineira" style="width:100%; height: auto;border-radius: 10px;">
                </div>

                <div class="item">
                    <img src="img/enceramentoChao.jpg" alt="Enceramento de chão" style="width:100%; height: auto;border-radius: 10px;">
                </div>

                <div class="item"> 
                    <img src="img/jardinagem.jpg"alt="Jardinagem" style="width:100%; height: auto;border-radius: 10px;"> 
                </div> 
                <br/>

            </div>
        </div>

        <div class="rightcolumn" style=" margin-right: 53%; margin-top: -25%; width: 45%; height: auto;" >
            <p align="justify" style=" font-size: 1.3vw;" >Fornecimento de mão de obra de faxineira, portaria, jardineiro,
                copeiro, manobrista, ascensorista e recepcionista. Limpeza e
                impermeabilização de fachada.  Nossos profissionais são treinados
                para oferecer um serviço diferenciado,Fazemos um criterioso processo de 
                seleção de acordo com o perfil que nosso cliente solicita, levando em consideração
                localização e experiência profissional.  Suas atividades e ações são definidas
                conforme a solicitação e necessidade do cliente.
            </p>
        </div>
    </div>

    <!--        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div id="sobre" class="empresa" style=" top: 100%; margin-top: 1.1%; background-color: whitesmoke; color: black; border-radius: 10px;">
        <img src="img/nossaEmpresa.png" alt="Empresa Nova Parceria" style="width:80%; margin-left: 9%;"/>
        <br/>
        <img src="img/mosaico.png" alt="Mosaico Nova Parceria" style="width:70%; margin-left: 13%;"/>
        <br/>
        <br/>
        <img src="img/indentidadeOrganizacional.png" alt="Indentidade Nova Parceria" style="width:70%; margin-left: 15%;"/>  
    </div>

    <div id="localização" class="mapa" style="margin-top: 10px; background-color: #4169E1; width: 100%; border-radius: 10px;"><br>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.3866022353327!2d-43.96727198569869!3d-19.908106986615948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6973671478163%3A0xb57c60f32fbfd8ef!2sNova+Parceria!5e0!3m2!1spt-BR!2sbr!4v1550052759944" width="74%" height="550px" frameborder="0" style="margin-top: 1%;margin-left: 1%; width: 98%" allowfullscreen></iframe>

        <div style="height: auto; margin-left:5%; " >
            <img class="logo" src="img/logoNovaParceria.jpg" alt="Logo Nova Parceria" style=" margin-left: 35%; margin-top: -0%; width: 25%; "/> 

            <p style="margin-top: -3%; height: auto; font-size: 1.3vw; margin-left: 17%; "> 
                <a href="http://www.facebook.com.br" target="_blank"><img src="img/iconFacebook.png" alt="icone Facebook" style=" height: auto; margin-left: 25%; width: 3%;"/></a>

                <a href="http://www.twitter.com.br/@conservadoraN" target="_blank"><img src="img/iconTwitter.png" alt="icone Twitter" style=" height: auto; width: 3%;"/></a>

                <a href="http://www.instagram.com.br/nparceria" target="_blank"><img src="img/iconInstagram.png" alt="icone Instagram" style=" height: auto; width: 3%;"/></a>

                <a href="mailto:contato@conservadoranova.com.br"><img src="img/iconEmailSocial.png" alt="Icone E-mail" style=" right: 13.8%; height: auto; width: 3%;"/></a>

                <a href="https://www.linkedin.com/in/nova-conservadora-81145a180" target="_blank"><img src="img/iconLinkedin.png" alt="Icone Linkedin" style=" height: auto; width: 3%;"/></a>

                <a href="https://api.whatsapp.com/send?phone=5531985627592&text=Olá! Nova Parceria" target="_blank"><img src="img/iconWhatsAppSocial.png" alt="Icone WhatsApp" style=" height: auto; width: 3%;"/></a>

                <a href="http://meuprediobh.blogspot.com" target="_blank"><img src="img/iconBlogger.png" alt="Icone Blogger" style=" height: auto; width: 3%;"/></a>
            </p>
        </div>
        <div style=" font-size: 1.2vw; margin-left:1%; margin-top: -13%; float: left">
            <p style="color: white; text-align: center"><b>Endereço:</b></p>
            <p style="color: white; text-align: center">Tel. 31 3271-1537 | +55 31 98562-7592</p>
            <p style="color: white; text-align: center">Rua Magnólia, 891 – 2º andar – Caiçara – BH – MG</p>
            <p style="color: white; text-align: center">CEP: 30710-010</p>
            <br/>
        </div>
        <div style="font-size: 1.2vw; margin-right: 1%; margin-top: -13%; float: right;">
            <p style="color: white; text-align: center;"><b>Horário:</b></p>
            <p style="color: white; text-align: center">Segunda-feira a sexta-feira: 8hrs ás 17hrs</p>
            <p style="color: white; text-align: center">Sabado: Fechado!</p>
            <p style="color: white; text-align: center">Domingos e Feriados: Fechado!</p>
            <br/>
        </div>


        <div class="container">
            <link href="Style/cssForm.css" rel="stylesheet" type="text/css"/>
            <div class="row">
                <div class="col-md-4">
                    <div class="form_main">
                        <h4 class="heading"><strong>Formulário </strong>  <span></span></h4>
                        <div class="form">
                            <form action="contact_send_mail.php" method="post" id="contactFrm" name="contactFrm">
                                <p style="color: white">NOME:</p>
                                <input type="text" required="" placeholder="EX: João" value="" name="nome" class="txt">
                                <p style="color: white">EMAIL:</p>
                                <input type="text" required="" placeholder="EX: João@gmaiil.com" value="" name="email" class="txt">
                                <P style="color: white">ASSUNTO:</P>
                                <input type="text" required="" placeholder="EX: Orçamento" value="" name="assunto" class="txt">
                                <p style="color: white">MENSAGEM:</p>
                                <textarea style="    border-radius: 5px;" placeholder="Digite sua mensagem" name="mess" type="text" class="txt_3"></textarea>
                                <input type="submit" value="enviar" name="enviar" class="txt2">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="contatos" style="background:whitesmoke; margin-top: 1%; color: black;width: 100%; text-align: center; border-radius: 10px;">
            <br/>
            <h5>© Copyright 2000-2019</h5> 
            </h5>Desenvolvido por: Bruno, Gustavo, Vinicius e Wanderson - alunos do SENAI.</h5>
            <br/>
            <br/>
            <?php
            $visitantes = contadorPagina();
            echo "Número de visitas: " . $visitantes;
            ?>
            <br/>
        </div>
        <?php

        function contadorPagina() {
            $arquivo = "contadorPagina.txt";
            $f = fopen($arquivo, "r");
            $contador = 0;
            if ($f) {
                $contador = fread($f, filesize($arquivo));
                $contador = $contador + 1;
                fclose($f);
            }

            $f = fopen($arquivo, "w+");
            if ($f) {
                fwrite($f, $contador);
                fclose($f);
            }
            return $contador;
        }
        ?>
</body>
</html>
