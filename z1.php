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

        .btn{
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

    .btn:hover {
        background-color: #888;
        color: #fff; 
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

    #aboutTitle{
        display: block;
        position: relative;
        line-height: 2;
        margin-bottom: 4rem;
    }
    #aboutTitle:after{
        content: "";
        width: 20%;
        max-width: 150px;
        min-width: 70px;
        height: 3px;
        background: #17BED2;
        display: block;
        position: relative;
        line-height: 2;
    }
    p{
        line-height: 170%;
        font-size: 1.7rem;
    }
</style>

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">
        <h1 class="carousel-title">Página de Vendas</h1>
	
    </div>
</div>
<!--========== PARALLAX ==========-->


<div class="promo-section-center-text" style="text-align:justify; font-size: 35px;" >
            <div class="container">
                <div class="clearfix">
                    <div class="ver-center">
                        <div class="ver-center-aligned">
                            <div class="promo-section-col">
                                <br><br>
                                



                                <?php include 'exibir.php'; ?>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
        

<div class="text-center"><a href="index.php" class="btn" data-pt="Voltar" data-en="Go Home"></a></div>

<br><br><br><br>

<?php include 'footer.php'; ?>
</body>
