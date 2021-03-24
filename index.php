<!DOCTYPE html>
<html>

<head>
    <title>Ceci est une page de test avec des balises PHP</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
     include("form.php"); 
     ?>

    <div class="container">
        <div class="formContainer">
            <div class="formTitle">
                <p>
                    Formulaire de contact
                </p>
            </div>

            <form id="contact" name="contact" action="form.php" method="post">

                <div class="formInput">
                    <div class="formSpace">
                        <input type="text" name="nomPrenom" placeholder="NOM & PRÉNOM *" id="nomEnvoie"
                            class="inputStyle" maxlength="60" style="width:200px;" onkeyup="validationNom();"
                            required />
                        <div class="obligatoire" id="obligatoirenom"></div>
                    </div>
                    <div class="formSpace">
                        <input type="text" name="entreprise" placeholder="ENTREPRISE" class="inputStyle" maxlength="60"
                            style="width:200px;" />
                    </div>
                </div>

                <div class="formInput">
                    <div class="formSpace">
                        <input type="text" name="numero" placeholder="TÉLÉPHONE *" id="numEnvoie" class="inputStyle"
                            maxlength="30" style="width:200px;" onkeyup="validationNum();" required />
                        <div class="obligatoire" id="obligatoirenum"></div>
                    </div>
                    <div class="formSpace">
                        <input type="email" name="email" placeholder="ADRESSE MAIL *" id="adresseEnvoie"
                            class="inputStyle" maxlength="80" style="width:200px;" onkeyup="validationEmail();"
                            required />
                        <div class="obligatoire" id="obligatoireemail"></div>
                    </div>
                </div>

        </div>
        <div class="formMessage">
            <textarea placeholder="MESSAGE *" maxlength="1024" name="message" rows="10" cols="60" class="inputStyle"
                onkeyup="validationText();" id="textEnvoie" required></textarea>
            <div class="obligatoire" id="obligatoiretext"></div>
        </div>
        <div class="inputSubmit">
            <input type="button" value="Envoyer" onclick="validationEnvoie();" id="submitButton" />
        </div>

    </div>
    </form>


    <script src="script.js"></script>
</body>

</html>