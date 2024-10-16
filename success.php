<!-- Sistema Desenvolvido por: Daniel Duarte -->
<!-- Versão do Sistema> 1.26.09.24 -->
<!-- Desenvolvido em PHP, HTML, CSS, JAVASCRIPT, SASS e outros. -->
<!-- Github repo: https://github.com/Danielduarte3105/SFA-Site  -->
<!-- Atualização de Processos e Desenvolvimento de Querys -->
 
<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>

<style>
    .desc{
        color: white;
        font-size: 17px;
        backdrop-filter: blur(4px);
    }

    .margin-b-5{
        color: Black;
        font-size: 17px;
        backdrop-filter: blur(1px);  
    }

    .margin-b-2{
        color: Black;
        font-size: 17px;
        backdrop-filter: blur(1px);  
    }

    .about{
        color: Black;
        font-size: 17px;
        backdrop-filter: blur(1px);  
    }

</style>



     
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

           
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title" data-pt="Parabéns!" data-en="Congratulations!"></h1>
                                <p class="desc" data-pt="O envio de seu formulário, deu certo!" data-en="Submitting your form was successful!"></p>
                                    <br>
                                <p data-pt="Em breve retornaremos o contato!" data-en="We will get back in touch soon!"></p>
                                    

                            </div>
                            <a href="index.php" class="btn-theme btn-theme-sm btn-white-brd text-uppercase" data-pt="Início" data-en="Home"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
