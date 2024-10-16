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

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">

        <h1 class="carousel-title" 

        data-pt="Atenção" 
        data-en="Attention!"></h1>

	<p class="desc" data-pt="Houve um erro no envio do seu formulário!" 
    
    data-en="Please, there was an error sending your form!"></p>

    <br>
    <p data-pt="Tente novamente, mas se o erro persistir, mande-nos um e-mail." 
    data-en="Try again, but if the error persists, send us an email."></p>
    
    
    </div>
</div>

<?php include'footer.php'; ?>
</body>
