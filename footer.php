<!-- Sistema Desenvolvido por: Daniel Duarte -->
<!-- Versão do Sistema> 1.26.09.24 -->
<!-- Desenvolvido em PHP, HTML, CSS, JAVASCRIPT, SASS e outros. -->
<!-- Github repo: https://github.com/Danielduarte3105/SFA-Site  -->
<!-- Atualização de Processos e Desenvolvimento de Querys -->

<style>
/* Estilos para o input do tipo file */
#curri {
    font-family: Arial, sans-serif;  /* Define a fonte */
    font-size: 14px;  /* Define o tamanho da fonte */
    color: #fff;  /* Cor do texto */
    background-color: #383e5d;  /* Cor de fundo */
    border: 2px solid #2980b9;  /* Cor da borda */
    border-radius: 5px;  /* Bordas arredondadas */
    padding: 10px 15px;  /* Espaçamento interno */
    cursor: pointer;  /* Cursor de ponteiro */
}

#curri:hover {
    background-color: #65635b;  /* Cor de fundo ao passar o mouse */
}

#curri:active {
    background-color: #65635b;  /* Cor de fundo ao clicar */
    border-color: #1c6ea4;  /* Cor da borda ao clicar */
}

/* Remove o estilo padrão do input */
#curri::-webkit-file-upload-button {
    visibility: hidden;
}

#curri::before {
    content: 'Selecionar arquivo';  /* Texto dentro do botão */
    display: inline-block;
    background: #383e5d;
    /* border: 1px solid #2980b9; */
    border-radius: 5px;
    padding: 10px 15px;
    outline: none;
    white-space: nowrap;
    /* -webkit-user-select: none; */
    cursor: pointer;
    font-family: Arial, sans-serif;
    font-size: 14px;
    color: white;
}

#curri:hover::before {
    background-color: #2980b9;
}

#curri:active::before {
    background-color: #1c6ea4;
}

h5{
    color: #fff;
}

</style>

<footer class="footer">
    <!-- Links -->
    <div class="footer-seperator">
        <div class="content-lg container">
            <div class="row">
                <div class="col-sm-2 sm-margin-b-50">
                    <!-- List -->
                    <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="index.php" data-pt="Inicio" data-en="Home"></a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="about.php" data-pt="Sobre Nós" data-en="About Us"></a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="equipe.php" data-pt="Nossa Equipe" data-en="Our Team"></a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="contact.php" data-pt="Contato" data-en="Contact"></a></li>
                    </ul>
                    <!-- End List-->
                </div>
                <div class="col-sm-4 sm-margin-b-30">
                    <!-- List -->
                  <!-- <ul class="list-unstyled footer-list">
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Twitter</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Facebook</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">Instagram</a></li>
                        <li class="footer-list-item"><a class="footer-list-link" href="#">YouTube</a></li>
                    </ul> -->
                    <!-- End List -->
                </div>

                
                <div class="col-sm-5 sm-margin-b-30">
                    <h2 class="color-white" data-pt="Mande-nos uma mensagem! Ou envie seu currículo." 
                    data-en="Send us a message! Or send your resume."></h2>

                    <h5 data-pt="Aceitamos apenas curriculos em PDF" 
                    data-en="We only accept resumes in PDF" ></h5>
                    <form
                        id="contact-form"
                        name="cform"
                        method="post"
                        onsubmit="return checkall()"
                        action="sendMail/sendMail.php"
                        enctype="multipart/form-data"
                    >

                        <input type="file" id="curri" name="curri" class="form-control footer-input margin-b-20" placeholder="Curriculo - Resume">
                        <br>
                        <input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" />
                        <input type="text" id="fn" name="uname" class="form-control footer-input margin-b-20" placeholder="Nome - Name" required>
                        <input type="email" id="fe" name="email" class="form-control footer-input margin-b-20" placeholder="Email - E-mail" required>
                        <input type="text" id="fp" name="phno" maxlength="11" class="form-control footer-input margin-b-20" placeholder="Telefone - Telephone" required>

                        

                        <textarea name="msg" id="fm" class="form-control footer-input margin-b-30" rows="6" placeholder="Mensagem - Message" required></textarea>
                        <button name="csubmit" type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" data-pt="Enviar" data-en="Send"></button>
                        
                    </form>
                </div> </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Links -->

    <!-- Copyright -->
    <div class="content container">
        <div class="row">
            <div class="col-xs-6">
            <span><img src="./img/logo/logo.png" alt=""></span>
                <!-- <span id="b" style="color: #17bed2; font-size: 28px; font-weight: bold;">SSF</span>
                <span style="color: #fff; font-size: 22px; font-weight: bold;">ADVOCACIA</span> -->
            </div>
            <div class="col-xs-6 text-right">
                <p class="margin-b-0"><a class="color-base fweight-700" href="#preview/asentus/" data-pt="SFA Advocacia Todos os direitos reservados:" data-en="SFA Advocacia All rights reserved:">SFA Advocacia</a> <a class="fsite color-base fweight-700" href="index.php">sfa.adv.br</a></p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Copyright -->
</footer>
<!--========== END FOOTER ==========-->
<script>
    function checkAll()
    {
        var ph = document.getElementById( "fp" );
        var phv = ph.value;
        if(phv.length<10 && /^\d+$/.test(phv)==false)
        {
            document.cform.submit();
            return true;
        }
        else
        {
            ph.focus();
            alert("Inserção Inválida");
            return false;
        }

    }
</script>

<a href="javascript:void(0);" class="js-back-to-top back-to-top" data-pt="Topo" data-en="Top"></a>

<?php
    if(isset($_POST['csubmit'])) {
        $name = $_POST['uname'];
        $emid = $_POST['email'];
        $phno = $_POST['phno'];
        $msg = $_POST['msg'];
        $message = '<html><body><table>
<tr><td>From  -  '.$name.'</td></tr><tr><td>Email ID  -  '.$emid.'</td></tr><tr><td>Phone No  -  '.$phno.'</td></tr><tr><td>Message - <br>'.$msg.'</td></tr>
</table></body></html>';
        $subj = "Mensagem de $emid";
        $mailstatus=0;

        $to = "daniel.silva@sfa.adv.br";
       
        $headers = "MIME-VERSION: 1.0" . "\r\n";
        $headers .= "Content-type:text/html; charset=UTF-8". "\r\n";
        $headers .= "From : <$emid> \r\n";
        if(mail($to,$subj,$message,$headers)) {
            ?>
            <script>
                alert("Obrigado por enviar seu e-mail!");
            </script>
            <?php
        }
        else {
            ?>
            <script>
                alert("Envio falhou!");
            </script>
            <?php
        }
    }
?>

</body>
</html>