<style>

#quote-container {
    font-size: 24px;
    text-align: left;
    transition: opacity 0.5s ease;
    opacity: 1;
}

.filosofo {
    display: none; /* Esconde todos os parágrafos inicialmente */
}

.filosofo.active {
    display: block; /* Apenas o parágrafo ativo é exibido */
}


</style>

<div class="bg-color-sky-light" data-auto-height="true" style="font-weight: 900px;">
    <div class="content-lg container">
        <h2 data-pt="Nossos Valores" data-en="Our Values"></h2>
        <div id="quote-container">
            <p class="filosofo" data-pt="Sêneca: 'Não é porque as coisas são difíceis que não ousamos; é porque não ousamos que elas são difíceis.'"
            data-en="Seneca: 'It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.'"></p>
            <p class="filosofo" data-pt="Platão: 'A sabedoria começa na reflexão.'"
            data-en="Plato: 'Wisdom begins in wonder.'"></p>
            <p class="filosofo" data-pt="Aristóteles: 'A excelência não é um ato, mas um hábito.'"
            data-en="Aristotle: 'Excellence is not an act, but a habit.'"></p>
            <p class="filosofo" data-pt="Confúcio: 'O homem que move montanhas começa carregando pequenas pedras.'"
            data-en="Confucius: 'The man who moves a mountain begins by carrying away small stones.'"></p>
            <p class="filosofo" data-pt="Friedrich Nietzsche: 'O que não me mata, me fortalece.'"
            data-en="Friedrich Nietzsche: 'What does not kill me makes me stronger.'"></p>
            <p class="filosofo" data-pt="Descartes: 'Penso, logo existo.'"
            data-en="Descartes: 'I think, therefore I am.'"></p>
        </div>

        <div class="row row-space-1 margin-b-2">
            <div class="col-sm-6 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <img src="img/icons/v1.png">
                        </div>
                        <div class="service-info">
                            <h3 data-pt="Trabalho" data-en="Work"></h3>
                            <p class="margin-b-5" data-pt="Acreditamos no esforço contínuo e na dedicação para alcançar resultados sólidos e superar desafios com excelência." 
                               data-en="We believe in continuous effort and dedication to achieve solid results and overcome challenges with excellence.">

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <img src="img/icons/v2.png">
                        </div>
                        <div class="service-info">
                            <h3 data-pt="Lealdade" data-en="Loyalty">Lealdade</h3>
                            <p class="margin-b-5" data-pt="Valorizamos a confiança mútua e mantemos o compromisso com nossos parceiros, clientes e colaboradores, promovendo relações duradouras." 
                               data-en="We value mutual trust and maintain our commitment to our partners, clients, and collaborators, promoting lasting relationships.">
                                Valorizamos a confiança mútua e mantemos o compromisso com nossos parceiros, clientes e colaboradores, promovendo relações duradouras.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-space-1">
            <div class="col-sm-6">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <img src="img/icons/v3.png">
                        </div>
                        <div class="service-info">
                            <h3 data-pt="Integridade" data-en="Integrity">Integridade</h3>
                            <p class="margin-b-5" data-pt="Agimos de maneira transparente e ética, respeitando os princípios morais em todas as interações e compromissos. Estamos em vigor com as leis que promovem código de ética e a LGPD." 
                               data-en="We act transparently and ethically, respecting moral principles in all interactions and commitments. We comply with laws that promote the code of ethics and LGPD.">
                                Agimos de maneira transparente e ética, respeitando os princípios morais em todas as interações e compromissos. Estamos em vigor com as leis que promovem código de ética e a LGPD.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 sm-margin-b-2">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                    <div class="service" data-height="height">
                        <div class="service-element">
                            <img src="img/icons/v4.png">
                        </div>
                        <div class="service-info">
                            <h3 data-pt="Ponderação" data-en="Thoughtfulness">Ponderação</h3>
                            <p class="margin-b-5" data-pt="Tomamos decisões com cuidado e reflexão, considerando as implicações e os impactos de nossas ações para um resultado equilibrado." 
                               data-en="We make decisions with care and reflection, considering the implications and impacts of our actions for a balanced outcome.">
                                Tomamos decisões com cuidado e reflexão, considerando as implicações e os impactos de nossas ações para um resultado equilibrado.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

const quotes = document.querySelectorAll('#quote-container p');
let currentIndex = 2;

// Exibe a primeira frase
quotes[currentIndex].classList.add('active');

// Função para alternar as frases
function showNextQuote() {
    // Remove a classe active da frase atual
    quotes[currentIndex].classList.remove('active');

    // Atualiza o índice para a próxima frase
    currentIndex = (currentIndex + 1) % quotes.length;

    // Adiciona a classe active à nova frase
    quotes[currentIndex].classList.add('active');
}

// Muda a frase a cada 3 segundos (1000 milissegundos)
setInterval(showNextQuote, 3000);


</script>