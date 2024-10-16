<?php include 'header.php'; ?>

<!-- Sistema Desenvolvido por: Daniel Duarte -->
<!-- Versão do Sistema> 1.26.09.24 -->
<!-- Desenvolvido em PHP, HTML, CSS, JAVASCRIPT, SASS e outros. -->
<!-- Github repo: https://github.com/Danielduarte3105/SFA-Site  -->
<!-- Atualização de Processos e Desenvolvimento de Querys -->

<style>
    .desc{
        color: white;
        font-size: 19px;
        backdrop-filter: blur(3px);
    }

    .container {
        width: 80%;
        max-width: 1200px;
    }

    .desc, .about p, .service-info p {
        max-width: 1200px; /* Limita a largura máxima */
        font-size: 18px; /* Define o tamanho da fonte */
        overflow-wrap: break-word; /* Para quebrar palavras longas */
        word-wrap: break-word; /* Para navegadores mais antigos */
        white-space: normal; /* Para permitir a quebra de linha */
    }

    @media (max-width: 768px) {
        .desc, .about p, .service-info p {
            max-width: 100%; /* Para telas menores */
            font-size: 14px; /* Reduz o tamanho da fonte */
        }
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

    .btn{
        background-color: #fff; /* Cinza escuro */
        color: #000; /* Texto branco */
        border: none;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease, color 0.3s ease;
        border-radius: 0; /* Botões quadrados */
    }

    .btn:hover {
        background-color: #333;
        color: #fff; 
    }

    .btn:active {
        background-color: #d4cfc5; 
    }
    /* #myCarousel .carousel-inner .item .carousel-centered > *{
        opacity: 0;
    }
    #myCarousel .carousel-inner .item.active .carousel-centered > *{
        animation: fadeInUp .6s 1 ease-in-out forwards;
        transition: all .6s ease-in-out;
    }

    @keyframes fadeInUp{
        0%{opacity: 0;transform: translateY(-10px);}
        100%{opacity: 1;transform: translateY(0);}
    } */
</style>

<body>
<?php include 'navbar.php'; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="img-responsive" src="img/1920x1080/01.jpg" alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h1 class="carousel-title text-center" data-pt="SFA - Advogados Associados" 
                        data-en="SFA - Associated Lawyers"></h1>

                        <p class="desc text-center" data-pt="Temos convicção de que em qualquer atividade, o sucesso depende da capacidade de aproximar-se e assessorar-se das pessoas certas; em termos de serviços jurídicos, colocamos à disposição confiabilidade, experiência, profissionalismo e uma relação personalizada com clientes e colaboradores." 
                           
                        data-en="We are convinced that in any activity, success depends on the ability to approach and advise the right people; in terms of legal services, we provide reliability, experience, professionalism, and a personalized relationship with clients and collaborators.">
                        </p>
                    </div>
                    <div class="text-center"><a href="#about" class="btn" data-pt="Saiba Mais" 
                    data-en="Learn More"></a></div>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="img-responsive" src="img/1920x1080/02.jpg" alt="Slider Image">
            <div class="container">
                <div class="carousel-centered">
                    <div class="margin-b-40">
                        <h2 class="carousel-title text-center" data-pt="SFA - Advogados Associados" 
                        data-en="SFA - Associated Lawyers"></h2>

                        <p class="desc text-center" data-pt="As evoluções técnicas e tecnológicas recebem nossa especial atenção, permitindo-nos promover a implementação de fórmulas ágeis de comunicação com nossos clientes, bem como as mudanças necessárias à constante busca da excelência nos serviços prestados."
                           
                        data-en="Technical and technological evolutions receive our special attention, allowing us to promote the implementation of agile communication formulas with our clients, as well as the necessary changes in the constant pursuit of excellence in the services provided."></p>
                    </div>

                    <div class="text-center"><a href="#about" class="btn" data-pt="Saiba Mais" 
                    data-en="Learn More"></a></div>
                    

                </div>
            </div>
        </div>
    </div>

    <!-- Controles do Carrossel -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="promo-section overflow-h" id="about">
    <div class="container">
        <div class="clearfix">
            <div class="ver-center">
                <div class="ver-center-aligned">
                    <div class="promo-section-col">
                        <br><br>
                        <strong>
                        <h2 data-pt="Sobre nós" data-en="About Us"></h2>
                        <div class="about" style="font-weight: 700;">
                            <p style="font-weight: 700;" data-pt="Em mais de 40 anos de prestação de serviços jurídicos, são estes o valores que norteiam nossa atuação: Trabalho, Lealdade, Integridade e Ponderação."
                               data-en="In over 40 years of providing legal services, these are the values that guide our actions: Work, Loyalty, Integrity, and Thoughtfulness.">
                            </p>
                            <p style="font-weight: 500;" data-pt="Contamos com profissionais altamente especializados, vasto banco de dados, atividade altamente informatizada, escritórios próprios nos Estados de São Paulo e Rio de Janeiro, além de correspondentes nas principais cidades do país, participando ativa e diretamente da defesa dos interesses dos nossos clientes, mesclando experiência, comprometimento e inovação."

                            data-en="We have highly specialized professionals, a vast database, highly computerized activities, our own offices in the States of São Paulo and Rio de Janeiro, in addition to correspondents in major cities in the country, actively participating in the defense of our clients' interests, blending experience, commitment, and innovation."></p>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
            <div class="promo-section-img-right">
                <img class="img-responsive" src="img/970x970/01.jpg" alt="Content Image">
            </div>
        </div>

<?php include 'values.php'; ?>
<?php include 'footer.php'; ?>
