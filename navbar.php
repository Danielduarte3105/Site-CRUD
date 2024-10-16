<header class="header navbar-fixed-top">

    <nav class="navbar" role="navigation">
        <div class="container">

            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <div class="logo">
                    <a class="logo-wrap" href="index.php" style="width:220px;">
                        <p class="logo-img-main">
                            <span><img src="./img/logo/logo.png" style="height: 60px;"></span>
                            <br>
                        </p>
                        <p class="logo-img-active">
                            <span><img src="./img/logo/logo2.png" style="height: 60px;"></span>
                        </p>
                    </a>
                </div>
            </div>

            <div class="collapse navbar-collapse nav-collapse">
    <div class="menu-container">
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="index.php" data-pt="Inicio" data-en="Home"></a></li>
            
            <!-- Item "Sobre Nós" com Dropdown -->
            <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-item-child nav-item-hover" type="button" data-toggle="dropdown" href="about.php" data-pt="Sobre Nós" data-en="About Us">
                    Sobre Nós
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="act.php" data-pt="Áreas de Atuação" data-en="Practice Areas"></a></li>
                    <li><a class="dropdown-item" href="equipe.php" data-pt="Equipe" data-en="Team"></a></li>
                    <li><a class="dropdown-item" href="about.php" style="font-weight: bold;" data-pt="Saiba Mais" data-en="Learn More"></a></li>
                </ul>
            </li>
            
            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="articles.php" data-pt="Artigos" data-en="Articles"></a></li>
            <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.php" data-pt="Contato" data-en="Contact"></a></li>
            
            <!-- Traduzir -->
            <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-item-child nav-item-hover" type="button" data-toggle="dropdown" data-pt="Traduzir" data-en="Translate">
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="language-option" href="#" data-lang="en"><img src="./img/icons/eua.png" alt="flag-usa" style="max-width: 35px;"> - Inglês</a></li>
                    <li><a class="language-option" href="#" data-lang="pt"><img src="./img/icons/brasil.png" alt="flag-br" style="max-width: 35px;"> - Português</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>


        </div>
    </nav>

</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const languageOptions = document.querySelectorAll('.language-option');
        const elements = document.querySelectorAll('[data-en]');

        // Function to set language
        function setLanguage(language) {
            elements.forEach(element => {
                element.textContent = element.getAttribute(`data-${language}`);
            });
            localStorage.setItem('language', language);
        }

        // Set initial language based on localStorage
        const savedLanguage = localStorage.getItem('language') || 'pt';
        setLanguage(savedLanguage);

        // Add event listener for language options
        languageOptions.forEach(option => {
            option.addEventListener('click', function(e) {
                e.preventDefault();
                const selectedLanguage = this.getAttribute('data-lang');
                setLanguage(selectedLanguage);
            });
        });
    });
</script>