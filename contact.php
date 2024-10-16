<!-- Sistema Desenvolvido por: Daniel Duarte -->
<!-- Versão do Sistema> 1.26.09.24 -->
<!-- Desenvolvido em PHP, HTML, CSS, JAVASCRIPT, SASS e outros. -->
<!-- Github repo: https://github.com/Danielduarte3105/SFA-Site  -->
<!-- Atualização de Processos e Desenvolvimento de Querys -->

<?php include 'header.php'; ?>
<body>

<style>
    .map-container {
        display: flex;
        flex-flow: row; /* Manter os mapas lado a lado */
        justify-content: center; /* Centralizar os mapas */
        gap: 100px; /* Espaço entre os mapas */
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

    /* h3{
        color: #515769;
        font-size: 35px;
        align-items: center;
        display: flex;
        padding: 15px;
    } */


</style>

<?php include 'navbar.php'; ?>
<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">

        <h1 class="carousel-title" data-pt="Contate-nos" 
        
        data-en="Contact-Us"></h1>


        <p class="desc" data-pt="Contamos com profissionais altamente especializados, vasto banco de dados, atividade altamente informatizada, escritórios próprios nos Estados de São Paulo e Rio de Janeiro, além de correspondentes nas principais cidades do país, participando ativa e diretamente da defesa dos interesses dos nossos clientes, mesclando experiência, comprometimento e inovação." 
        
        data-en="We have highly specialized professionals, a vast database, highly computerized activity, our own offices in the States of São Paulo and Rio de Janeiro, as well as correspondents in the main cities of the country, actively and directly participating in the defense of our clients' interests, combining experience , commitment and innovation.">
        </p>
    </div>
</div>

<div class="section-seperator">
    <div class="content-lg container">
        <div class="row contact">

        <h2 data-pt="Nossos Endereços"
        data-en="Our addresses">Nossos endereços</h2>

        <br><br>
        <div class="col-sm-6 sm-margin-b-50">
            
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <b data-pt="Endereço Matriz:" 
                    
                    data-en="Headquarters Address:"></b> 

                    <p data-pt="Rua Matias Aires, 402, 11º andar - CEP 01309-020 - São Paulo – SP" 
                    
                    data-en="Rua Matias Aires, 402, 11th floor - ZIP 01309-020 - São Paulo – SP"></p>  

                    <b data-pt="Telefone:"
                    
                    data-en="Telephone:"> 
                
                    </b>
                    <p>+55 (11) 3255.2226</p>
                    <b>E-mail</b><p> ssfadvocacia@sfa.adv.br</p>
                    </div>
                    </div>


                    


            <div class="col-sm-6 sm-margin-b-50">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">

                    <b data-pt="Endereço Filial:" 
                    
                    data-en="Branch Address:"></b>

                    <p data-pt="Rua Sete de Setembro, 71, 21º andar - CEP 20050-005 - Rio de Janeiro – RJ" 
                    
                    data-en="Rua Sete de Setembro, 71, 21st floor - ZIP 20050-005 - Rio de Janeiro – RJ"></p>    

                    <b data-pt="Telefone:" 

                    data-en="Telephone:"> </b>
                    
                    <p>+55 (21) 2224.8991</p>
                    <b>E-mail</b><p> ssfadvocacia@sfa.adv.br</p>

                    
                </div>
            </div>
       
        </div>
    
    </div>
</div>
<!-- 
<h3>Encontre-nos no mapa!</h3> -->

<div id="map" class="map-container"></div>
<script src="js/components/gmap.js" type="text/javascript"></script>
<div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.408903595684!2d-46.6593617!3d-23.553753300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce583244a121d9%3A0xb6a24d3833aab936!2sR.%20Matias%20Aires%2C%20402%20-%20Consola%C3%A7%C3%A3o%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001309-020!5e0!3m2!1spt-BR!2sbr!4v1727122194200!5m2!1spt-BR!2sbr" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2336687358984!2d-43.1770024!3d-22.904750600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5fadb6d31b%3A0xe1d73de20490d613!2sR.%20Sete%20de%20Setembro%2C%2071%20-%2021%C2%BA%20andar%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020050-005!5e0!3m2!1spt-BR!2sbr!4v1727122290537!5m2!1spt-BR!2sbr" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</div>
<br><br><br>
<br><br>
</body>
<?php include 'footer.php';