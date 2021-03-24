// Elements Warning Message below each Input
let obligatoirenom = document.getElementById("obligatoirenom");
let obligatoirenum = document.getElementById("obligatoirenum");
let obligatoireemail = document.getElementById("obligatoireemail");
let obligatoiretext = document.getElementById("obligatoiretext");


// Input validity Status (True or False)
let NomIsValid = "";
let NumIsValid = "";
let EmailIsValid = "";
let TextIsValid = "";


//Check if the Input Name is Valid (return True or False)
let validationNom = () => {
    const momEnvoie = document.getElementById("nomEnvoie").value;
    if (momEnvoie == "") {
        obligatoirenom.innerHTML = "Ce champ est nécessaire"
        return NomIsValid = false;
    } else {
        obligatoirenom.innerHTML = "";
        return NomIsValid = true;
    }
}
//Check if the Input Numéro is Valid (return True or False)
let validationNum = () => {
    const munEnvoie = document.getElementById("numEnvoie").value;
    if (munEnvoie == "") {
        obligatoirenum.innerHTML = "Ce champ est nécessaire"
        return NumIsValid = false;
    } else {
        obligatoirenum.innerHTML = "";
        return NumIsValid = true;
    }
}
//Check if the Input Email is Valid (return True or False)
let validationEmail = () => {
    let pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
    const adresseEnvoie = document.getElementById("adresseEnvoie").value;

    if (adresseEnvoie == "") {
        obligatoireemail.innerHTML = "Ce champ est nécessaire";
         return EmailIsValid = false;
    } 

    if (!adresseEnvoie.match(pattern)) {
            obligatoireemail.innerHTML = "Veuillez entrer une adresse valide";
            return EmailIsValid = false;
        } 
        
    if(adresseEnvoie.match(pattern) && !adresseEnvoie == "") {
            obligatoireemail.innerHTML = "";
            return EmailIsValid = true;
        }else{
            return EmailIsValid = false;
        }
    
}
//Check if the Input TextArea is Valid (return True or False)
let validationText = () => {
    const textEnvoie = document.getElementById("textEnvoie").value;
    if(textEnvoie == ""){
        obligatoiretext.innerHTML = "Ce champ est nécessaire"
       return TextIsValid  = false;
    }else{
        obligatoiretext.innerHTML = "";
        return TextIsValid  = true;
    }   
}

//check if all Input are Valid
function validationEnvoie() {

    validationNom()
    validationNum()
    validationEmail()
    validationText()

    //if all The Input are Valid then We Send the Form To form.php
    if (NomIsValid && NumIsValid && EmailIsValid && TextIsValid) {
        document.getElementById("contact").submit();
    }
}

