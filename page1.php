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
        <h1 class="carousel-title" style="font-size: 36px;" data-pt="A cobertura privada dos benefícios por incapacidade" data-en="Private coverage of disability benefits"></h1>
	<p class="desc" data-pt="Sylvio Sacramento Fernandes - 16 de outubro de 2019" data-en="Sylvio Sacramento Fernandes - October 16, 2019"></p>
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
                                <h2 data-pt="Sobre o tema" data-en="About the topic" id="aboutTitle"></h2>

        <p data-pt="Na última semana, um tema interessante da reforma da Previdência tem sido ressaltado pela imprensa. O texto proposto, dando nova redação ao art. 201, § 10 da CF/88, é o seguinte: “Lei complementar poderá disciplinar a cobertura de benefícios não programados, inclusive os decorrentes de acidente do trabalho, a ser atendida concorrentemente pelo Regime Geral de Previdência Social e pelo setor privado”.

Apesar de ser apontada como previsão inédita de abertura da cobertura previdenciária ao mercado, a EC 20/98, ao inserir o referido parágrafo, já havia previsto a possibilidade de atuação do setor privado na cobertura previdenciária, ainda que limitada a acidentes de trabalho. A redação ainda vigente prevê: “Lei disciplinará a cobertura do risco de acidente do trabalho, a ser atendida concorrentemente pelo regime geral de previdência social e pelo setor privado”.

O preceito hoje existente, após 20 anos de sua inclusão na Constituição, nunca foi regulamentado. A PEC 06, além de alargar as possibilidades de atuação do setor privado para todos os benefícios de risco, demanda lei complementar para a disciplina específica do tema. A princípio, a cobertura estatal restaria limitada a aposentadorias programadas e pensões, somente.

O assunto é complexo. Quando da reforma previdenciária de 1998, posicionei-me contra a atuação do segmento privado na cobertura previdenciária, a qual, naquele momento, me parecia um retrocesso, pois o seguro acidentário obrigatório fora privado até a estatização da cobertura e respectiva inclusão no modelo público de previdência social, pela lei 5.316/67.

O modelo estatal, como sugerido por Beveridge, tinha como escopo eliminar as deficiências do modelo privado da primeira metade do século XX. As dificuldades giravam em torno dos litígios derivados de falhas de cobertura ou negativas de indenização por parte das seguradoras, o que era relativamente comum. Da mesma forma, a cobertura de prestações acidentárias sempre foi potencialmente complexa, tendo em vista a elevada subjetividade do eventual nexo causal do sinistro com o trabalho.

Enfim, a incorporação do seguro de acidentes do trabalho ao modelo estatal de proteção social derivava da chamada “teoria do risco social”, na qual o sinistro sofrido por um trabalhador demandaria cobertura solidária de toda a sociedade, assegurando cobertura efetiva ao trabalhador, independentemente da situação econômica do empregador, das interpretações das seguradoras ou mesmo da eventual culpa do acidentado.

Sem embargo, temos de reconhecer que o modelo estatal está distante de uma cobertura minimamente adequada. As dificuldades administrativas estão colapsando a autarquia previdenciária. O modelo solidário de cobertura funciona precariamente, com particular prejuízo daqueles de demandam prestações com urgência, como acidentados. Enquanto para benefícios programados a praxe internacional seja a manutenção dos modelos estatais, os benefícios de risco contam com organizações variadas e funcionais.

A atuação privada está longe de ser solução mágica aos problemas do sistema previdenciário, incluindo a cobertura de benefícios por incapacidade. Todavia, é inegável que – no caso particular da cobertura de prestações não programadas – há experiências de sucesso no estrangeiro, as quais, talvez, possam nos orientar a viabilizar alguma atuação efetiva e eficiente, sem as desventuras do modelo estatal vigente, o qual não tem a menor perspectiva de melhora, tendo em vista as severas restrições econômicas e de pessoal que enfrentaremos nos próximos anos.

Mais do que assumir a negativa automática de modelo privado paralelo de cobertura, acredito que seja a hora de reconhecermos a precariedade do modelo vigente e sua improvável recuperação em tempo hábil. Um aparato regulatório apropriado, com fiscalização efetiva, pode atender ao desejo natural de seguradoras em atuar no segmento com o propósito constitucional da efetiva cobertura previdenciária. Caso a proposta seja aprovada, nos resta averiguar como será a respectiva regulamentação e, então, observar se os interesses de segurados e dependentes serão devidamente atendidos. Afinal, a proteção adequada e em tempo hábil é a missão de qualquer sistema previdenciário."



data-en="Last week, an interesting topic regarding the Social Security reform has been highlighted by the press. The proposed text, which rewords art. 201, § 10 of the Federal Constitution of 1988, is as follows: “A supplementary law may regulate the coverage of unscheduled benefits, including those resulting from work-related accidents, to be met concurrently by the General Social Security Regime and the private sector.”

Despite being considered an unprecedented provision for opening social security coverage to the market, Constitutional Amendment 20/98, when it included the aforementioned paragraph, had already provided for the possibility of private sector involvement in social security coverage, even if limited to work-related accidents. The current text states: “A law shall regulate the coverage of the risk of work-related accidents, to be met concurrently by the general social security regime and the private sector.”

The provision that currently exists, 20 years after its inclusion in the Constitution, has never been regulated. In addition to expanding the possibilities for private sector action to cover all risk benefits, PEC 06 requires a supplementary law to specifically regulate the topic. Initially, state coverage would be limited to scheduled retirements and pensions only.

The issue is complex. During the 1998 social security reform, I was against the private sector's involvement in social security coverage, which, at the time, seemed like a step backwards to me, since mandatory accident insurance had been private until the coverage was nationalized and included in the public social security model by law 5,316/67.

The state model, as suggested by Beveridge, aimed to eliminate the deficiencies of the private model from the first half of the 20th century. The difficulties revolved around litigation arising from coverage failures or denials of compensation by insurance companies, which was relatively common. Likewise, coverage of accident benefits has always been potentially complex, given the high degree of subjectivity regarding the possible causal link between the accident and work.

Finally, the incorporation of accident insurance at work into the state model of social protection was based on the so-called “social risk theory,” in which an accident suffered by a worker would require joint coverage from the entire society, ensuring effective coverage for the worker, regardless of the employer’s economic situation, the interpretations of the insurance companies, or even the possible fault of the injured party.

However, we must recognize that the state model is far from providing minimally adequate coverage. Administrative difficulties are collapsing the social security authority. The joint coverage model works precariously, to the particular detriment of those who urgently require benefits, such as accident victims. While international practice for scheduled benefits is to maintain state models, risk benefits have varied and functional organizations.

Private action is far from being a magic solution to the problems of the social security system, including coverage of disability benefits. However, it is undeniable that – in the particular case of coverage of unscheduled benefits – there are successful experiences abroad, which may perhaps guide us to make some effective and efficient action viable, without the misfortunes of the current state model, which has no prospect of improvement, given the severe economic and personnel restrictions that we will face in the coming years.

Rather than assuming the automatic denial of a parallel private model of coverage, I believe that it is time to recognize the precariousness of the current model and its unlikely recovery in a timely manner. An appropriate regulatory framework, with effective oversight, can meet the natural desire of insurers to operate in the segment with the constitutional purpose of effective social security coverage. If the proposal is approved, we will have to determine what the respective regulation will be like and, then, observe whether the interests of insured parties and dependents will be duly served. After all, adequate and timely protection is the mission of any social security system."></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
<br><br>
<div class="text-center"><a href="articles.php" class="btn" data-pt="Voltar" data-en="Go Home"></a></div>

<br><br><br><br>

<?php include 'footer.php'; ?>
</body>
