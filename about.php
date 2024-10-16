<!-- Sistema Desenvolvido por: Daniel Duarte -->
<!-- Versão do Sistema> 1.0.16 -->
<!-- Desenvolvido em PHP, HTML, CSS, JAVASCRIPT, SASS e outros. -->
<!-- Github repo: https://github.com/Danielduarte3105/SFA-Site  -->

<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<style>

    .leGraf {
        display: flex;
        justify-content: center; 
        align-items: center;  
        color: #333;
        font-size: 1.9rem;

    }


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

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">
        <h1 class="carousel-title" data-pt="Sobre nós" data-en="About Us"></h1>
	<p class="desc" data-pt="Sylvio Sacramento Fernandes - Advogados Associados" data-en="Sylvio Sacramento Fernandes - Associate Lawyers"></p>
    </div>
</div>
<!--========== PARALLAX ==========-->

<div class="promo-section overflow-h" id="about">
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <br><br>
                                <h2 data-pt="Sobre nós" data-en="About Us"></h2>
                                <div class="about"><strong>
                                <p style="font-weight: 700;" data-pt="Em mais de 40 anos de prestação de serviços jurídicos, são estes o valores que norteiam nossa atuação: Trabalho, Lealdade, Integridade e Ponderação." data-en="In more than 40 years of providing legal services, these are the values ​​that guide our operations: Work, Loyalty, Integrity and Consideration.">
                                <br><br>

                                
                               <p style="font-weight: 500;" data-pt="Contamos com profissionais altamente especializados, vasto banco de dados, atividade altamente informatizada, escritórios próprios nos Estados de São Paulo e Rio de Janeiro, além de correspondentes nas principais cidades do país, participando ativa e diretamente da defesa dos interesses dos nossos clientes, mesclando experiência, comprometimento e inovação.

                               A natureza diferenciada da nossa participação profissional advém da atuação direta dos sócios, da seleção de profissionais oriundos das mais renomadas faculdades do país, dos incentivos ao aprimoramento e da experiência acumulada, permitindo que se alie uma ação abrangente, de qualidade e coerente com a complexidade dos problemas." 
                               
                               data-en="We have highly specialized professionals, a vast database, highly computerized activities, our own offices in the states of São Paulo and Rio de Janeiro, as well as correspondents in the main cities of the country, actively and directly participating in the defense of our clients' interests, combining experience, commitment and innovation.

                               The differentiated nature of our professional participation comes from the direct involvement of our partners, the selection of professionals from the most renowned universities in the country, the incentives for improvement and the accumulated experience, allowing us to combine comprehensive, quality action that is consistent with the complexity of the problems."></p>
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


<!--========== PAGE LAYOUT ==========-->
<!-- Service -->

<?php include 'values.php'; ?>


<br><br>

<?php include 'work.php'; ?>

<style>
    .flex-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    .flex-item {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    #genderChart {
        max-width: 500px;
        margin: 20px auto;
    }

    .flex-item {
        display: none; /* Inicialmente, ocultamos todos os itens */
        background-color: rgba(255, 255, 255, 0.8); /* Fundo branco com opacidade */
        border-radius: 5px; /* Bordas arredondadas */
        padding: 10px; /* Espaçamento interno */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra para dar um efeito de profundidade */
    }

    .flex-item.show {
        display: flex; /* Mostra os itens conforme o filtro */
    }
        .flex-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .flex-item {
        flex: 1 1 22%; 
        margin: 10px;
        box-sizing: border-box;
    }

    /* Estilo dos botões de filtro */
    .filter-buttons {
        margin-bottom: 20px;
        text-align: center;
    }

    .flex-item {
        display: none; /* Inicialmente, ocultamos todos os itens */
        background-color: rgba(255, 255, 255, 0.8); /* Fundo branco com opacidade */
        border-radius: 5px; /* Bordas arredondadas */
        padding: 10px; /* Espaçamento interno */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra para dar um efeito de profundidade */
    }

    .flex-item.show {
        display: flex; /* Mostra os itens conforme o filtro */
    }

    .filter-btn {
        background-color: #333; /* Cinza escuro */
        color: #fff; /* Texto branco */
        border: none;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease, color 0.3s ease;
        border-radius: 0; /* Botões quadrados */
    }

    .filter-btn:hover {
        background-color: #fff; /* Fundo branco ao passar o mouse */
        color: #333; /* Texto cinza escuro no hover */
    }

    /* Oculta ou exibe conforme o filtro */
    .flex-item {
        display: none; /* Inicialmente, ocultamos todos os itens */
    }

    .flex-item.show {
        display: flex; /* Mostra os itens conforme o filtro */
    }

    .filter-btn.active {
        background-color: #fff; /* Fundo branco para o botão ativo */
        color: #333; /* Texto cinza escuro para o botão ativo */
    }

    h6{
        color: #515769;
        font-size: 17px;
    }
</style>

<?php include'advs.php'; ?>

<?php include'footer.php'; ?>
</body>
