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
        font-size: 22px;
    }
</style>

<!--========== PARALLAX ==========-->
<div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/02.jpg">
    <div class="parallax-content container">
        <h1 class="carousel-title" style="font-size: 36px;" data-pt="A Possibilidade dos Litígios entre Acionistas e S/As Abertas serem Dirimidos na Via Judicial e não Exclusivamente na Via Arbitral" data-en="The Possibility of Disputes between Shareholders and Publicly Held Corporations being Settled in Court and Not Exclusively in Arbitration"></h1>
	<p class="desc" data-pt="Sylvio Sacramento Fernandes - 10 de outubro de 2024" data-en="Sylvio Sacramento Fernandes - October 10, 2024"></p>
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

        <p data-pt="As sociedades anônimas (S/As) de capital aberto, pela sua natureza, possuem uma estrutura complexa de governança, envolvendo múltiplos interesses de acionistas, investidores e da própria sociedade. A arbitragem tem se destacado como um mecanismo preferencial de resolução de disputas nesses contextos, especialmente após a Lei nº 6.404/1976 (Lei das S/As) e a promulgação da Lei de Arbitragem (Lei nº 9.307/1996). Contudo, uma questão relevante surge: litígios entre acionistas e as sociedades anônimas abertas precisam ser dirimidos exclusivamente na via arbitral ou pode-se recorrer também ao Judiciário?

Este artigo explora as nuances jurídicas da arbitragem e da jurisdição estatal em disputas societárias, especialmente no que diz respeito às S/As abertas, e discute os principais argumentos que envolvem a escolha do foro judicial em detrimento do arbitral.

Arbitragem no Contexto das S/As Abertas
A arbitragem tem ganhado espaço em disputas societárias principalmente em razão de sua natureza sigilosa, especializada e menos formal. A inclusão da cláusula compromissória no estatuto social das S/As permite que os conflitos entre acionistas e a própria sociedade, bem como entre acionistas, sejam resolvidos via arbitral. Essa cláusula compromissória obriga os acionistas a resolverem as suas disputas fora do Judiciário, utilizando-se de árbitros, que geralmente possuem maior especialização em temas de direito societário e comercial.

A Comissão de Valores Mobiliários (CVM) reconhece a validade e a importância da arbitragem para a solução de litígios nas S/As abertas. No entanto, a adoção da arbitragem não exclui completamente a possibilidade de acionistas recorrerem ao Judiciário, levantando debates sobre a conveniência e os limites desse instrumento.

Possibilidade de Acesso ao Judiciário
Embora a arbitragem tenha se tornado a via preferencial para resolução de disputas societárias, o acesso ao Judiciário não pode ser totalmente vedado. A Constituição Federal do Brasil garante o direito de acesso à justiça (art. 5º, XXXV), que estabelece que 'a lei não excluirá da apreciação do Poder Judiciário lesão ou ameaça a direito'. Assim, a arbitragem não pode ser imposta de maneira absoluta, uma vez que o direito ao Judiciário é uma garantia fundamental.

Essa proteção constitucional sugere que, mesmo diante de uma cláusula compromissória arbitral, pode haver situações excepcionais em que os acionistas busquem o Judiciário, seja em casos de nulidade ou ineficácia da própria cláusula arbitral, seja por questões de ordem pública, como violações de direitos fundamentais ou práticas abusivas por parte da companhia.

Além disso, a cláusula compromissória em estatuto social deve respeitar o princípio da autonomia da vontade. Embora a adesão ao estatuto seja obrigatória para os acionistas, pode-se questionar se houve consentimento real e expresso por parte de todos os envolvidos, especialmente acionistas minoritários, o que poderia abrir brechas para contestações judiciais.

Precedentes e Jurisprudência
A jurisprudência brasileira tem reconhecido o papel central da arbitragem nas disputas entre acionistas e sociedades anônimas abertas. Em diversas decisões, os tribunais têm reafirmado a validade das cláusulas compromissórias e a preferência pela arbitragem. Contudo, há precedentes que permitem que determinadas questões sejam levadas ao Judiciário, principalmente quando há alegações de nulidade da convenção de arbitragem ou violação de direitos inalienáveis.

Um exemplo significativo foi a decisão do Superior Tribunal de Justiça (STJ) no julgamento do Recurso Especial nº 1.297.974-RJ, onde se decidiu que o acionista não poderia ser obrigado a submeter-se à arbitragem se não houver aceitado expressamente a cláusula compromissória, ou seja, se ela foi inserida posteriormente à sua entrada na sociedade. Este precedente ressalta a importância do consentimento explícito do acionista para a adoção da arbitragem, reforçando que, em determinadas situações, a via judicial pode ser a escolha legítima.

Além disso, questões que envolvem matérias de ordem pública, como práticas abusivas, abuso de poder de controle ou violação dos direitos dos minoritários, também podem ser analisadas pela Justiça comum, dado que nem todos os direitos disponíveis podem ser resolvidos exclusivamente em sede arbitral.

Benefícios e Desafios do Recurso ao Judiciário: 
Optar pelo Judiciário ao invés da arbitragem pode oferecer certas vantagens, especialmente em casos onde o acionista considera que a arbitragem poderia ser desfavorável ou parcial. O sistema judicial é público, gratuito e, em tese, mais acessível aos acionistas minoritários. Além disso, em questões que envolvem grandes disputas societárias, o recurso ao Judiciário permite que as decisões sejam amplamente divulgadas, promovendo uma maior transparência nos processos e maior controle social sobre as decisões.

Por outro lado, o recurso ao Judiciário pode ser mais lento e burocrático, o que contrasta com a eficiência e celeridade normalmente atribuída à arbitragem. A escolha entre arbitragem e Judiciário deve, portanto, levar em consideração a natureza da disputa, os interesses em jogo e a necessidade de um julgamento especializado.


Por fim, embora a arbitragem seja amplamente utilizada em litígios societários envolvendo S/As abertas, a via judicial continua sendo uma alternativa viável e, em alguns casos, necessária. O princípio constitucional do acesso à justiça garante que, em situações excepcionais, os acionistas possam recorrer ao Judiciário, mesmo quando exista uma cláusula compromissória arbitral. A decisão entre arbitragem e o Judiciário deve ser tomada com base nas peculiaridades de cada caso, considerando o equilíbrio entre a eficiência e a justiça nas disputas societárias.

Assim, embora a arbitragem ofereça vantagens claras, a via judicial permanece uma ferramenta indispensável para assegurar o pleno exercício de direitos por parte dos acionistas, especialmente aqueles minoritários."



data-en="Publicly-held corporations (S/As), by their nature, have a complex governance structure, involving multiple interests of shareholders, investors and the company itself. Arbitration has emerged as a preferred dispute resolution mechanism in these contexts, especially after Law No. 6,404/1976 (S/As Law) and the enactment of the Arbitration Law (Law No. 9,307/1996). However, a relevant question arises: do disputes between shareholders and publicly-held corporations need to be settled exclusively through arbitration or can the courts also be used?

This article explores the legal nuances of arbitration and state jurisdiction in corporate disputes, especially with regard to publicly-held corporations, and discusses the main arguments involving the choice of judicial jurisdiction over arbitration.

Arbitration in the Context of Publicly Held Corporations
Arbitration has been gaining ground in corporate disputes mainly due to its confidential, specialized and less formal nature. The inclusion of an arbitration clause in the bylaws of public corporations allows conflicts between shareholders and the company itself, as well as between shareholders, to be resolved through arbitration. This arbitration clause obliges shareholders to resolve their disputes outside the Judiciary, using arbitrators, who generally have greater specialization in corporate and commercial law matters.

The Brazilian Securities and Exchange Commission (CVM) recognizes the validity and importance of arbitration for resolving disputes in public corporations. However, the adoption of arbitration does not completely exclude the possibility of shareholders resorting to the Judiciary, raising debates about the convenience and limits of this instrument.

Possibility of Access to the Judiciary
Although arbitration has become the preferred means of resolving corporate disputes, access to the Judiciary cannot be completely prohibited. The Brazilian Federal Constitution guarantees the right to access to justice (art. 5, XXXV), which establishes that 'the law shall not exclude from the consideration of the Judiciary any injury or threat to a right'. Thus, arbitration cannot be imposed absolutely, since the right to the Judiciary is a fundamental guarantee.

This constitutional protection suggests that, even in the face of an arbitration arbitration clause, there may be exceptional situations in which shareholders seek the Judiciary, whether in cases of nullity or ineffectiveness of the arbitration clause itself, or for public order reasons, such as violations of fundamental rights or abusive practices by the company.

In addition, the arbitration clause in the articles of association must respect the principle of autonomy of will. Although adherence to the articles of association is mandatory for shareholders, it may be questioned whether there was real and express consent on the part of all those involved, especially minority shareholders, which could open up loopholes for legal challenges.

Precedents and Case Law
Brazilian case law has recognized the central role of arbitration in disputes between shareholders and publicly-held corporations. In several decisions, the courts have reaffirmed the validity of arbitration clauses and the preference for arbitration. However, there are precedents that allow certain issues to be taken to the Judiciary, especially when there are allegations of nullity of the arbitration agreement or violation of inalienable rights.

A significant example was the decision of the Superior Court of Justice (STJ) in the judgment of Special Appeal No. 1,297,974-RJ, where it was decided that the shareholder could not be forced to submit to arbitration if he had not expressly accepted the arbitration clause, that is, if it was inserted after his entry into the company. This precedent highlights the importance of the shareholder's explicit consent to the adoption of arbitration, reinforcing that, in certain situations, the judicial route may be the legitimate choice.

Furthermore, issues involving matters of public order, such as abusive practices, abuse of control power or violation of minority shareholders' rights, may also be analyzed by the ordinary courts, given that not all available rights can be resolved exclusively through arbitration.

Benefits and Challenges of Recourse to the Judiciary
Opting for the Judiciary instead of arbitration may offer certain advantages, especially in cases where the shareholder considers that arbitration could be unfavorable or partial. The judicial system is public, free and, in theory, more accessible to minority shareholders. Furthermore, in matters involving major corporate disputes, recourse to the Judiciary allows decisions to be widely publicized, promoting greater transparency in the processes and greater social control over decisions.
On the other hand, recourse to the Judiciary may be slower and more bureaucratic, which contrasts with the efficiency and speed normally attributed to arbitration. The choice between arbitration and the Judiciary must, therefore, take into account the nature of the dispute, the interests at stake and the need for a specialized judgment.

Conclusion
Although arbitration is widely used in corporate disputes involving publicly held corporations, the judicial route remains a viable and, in some cases, necessary alternative. The constitutional principle of access to justice guarantees that, in exceptional situations, shareholders may resort to the Judiciary, even when there is an arbitration agreement. The decision between arbitration and the Judiciary must be made based on the peculiarities of each case, considering the balance between efficiency and justice in corporate disputes.

Therefore, although arbitration offers clear advantages, the judicial route remains an indispensable tool to ensure the full exercise of rights by shareholders, especially minority shareholders.
 "></p>
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
