<!-- Sistema Desenvolvido por: Daniel Duarte -->
<!-- Versão do Sistema: 1.26.09.24 -->
<!-- Desenvolvido em PHP, HTML, CSS, JAVASCRIPT, SASS e outros. -->
<!-- Github repo: https://github.com/Danielduarte3105/SFA-Site -->
<!-- Atualização de Processos e Desenvolvimento de Querys -->

<?php include 'header.php'; ?>
<body>
<?php include 'navbar.php'; ?>

<style>
    .desc {
        color: white;
        font-size: 17px;
        backdrop-filter: blur(4px);
    }

    .margin-b-5, .margin-b-2, .about {
        color: Black;
        font-size: 17px;
        backdrop-filter: blur(1px);
    }

    h6 {
        color: #515769;
        font-size: 17px;
    }
</style>

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
    <div class="parallax-content container">

        <h1 class="carousel-title" data-pt="Áreas de Atuação" 
        
        data-en="Areas of Activity"></h1>

        <p class="desc" data-pt="Sylvio Sacramento Fernandes - Advogados Associados" 
        
        data-en="Sylvio Sacramento Fernandes - Associate Lawyers"></p>
    </div>
</div>

<div class="promo-section overflow-h">
    <div class="container">
        <div class="clearfix">
            <div class="ver-center">
                <div class="ver-center-aligned">
                    <div class="promo-section-col">
                        <br><br>
                        <h2 data-pt="Nossas Áreas de Atuação" data-en="Our Areas of Activity"></h2>
                        <div class="about">
                            <p style="font-weight: 800; font-size: 18px;"
                            
                            data-pt="Nosso escritório de advocacia especializado em direito securitário atua principalmente em questões relacionadas a seguros, representando tanto seguradoras quanto segurados em disputas legais."

                            data-en="Our law firm specializing in insurance law works mainly on insurance-related matters, representing both insurers and policyholders in legal disputes."></p>


                            <p style="font-weight: 500; font-size: 16px;" 
                            
                            data-pt="Nossas áreas de atuação incluem análise e revisão de apólices de seguro, litígios envolvendo indenizações, sinistros e cobertura de seguros, além de consultoria para prevenir litígios e garantir o cumprimento de normas regulatórias. O escritório também pode atuar na mediação e arbitragem de conflitos entre as partes envolvidas em contratos de seguros, buscando soluções rápidas e eficientes."

                            data-en="Our areas of activity include analysis and review of insurance policies, litigation involving compensation, claims and insurance coverage, as well as consultancy to prevent litigation and ensure compliance with regulatory standards. The office can also mediate and arbitrate conflicts between parties involved in insurance contracts, seeking quick and efficient solutions."></p>
                            
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


<br><br><br><br>
<?php include 'work.php'; ?>

<?php include 'footer.php'; ?>
</body>
