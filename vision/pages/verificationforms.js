function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

//verif  nom
function verifNom(champ)
{
	var x=document.forms["f2"]["nom"].value;
   if(x.value.length < 2 || x.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

//verif  prenom
function verifPrenom(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

//verif  prenom
function verifCin(champ)
{
   if(champ.value.length < 2 || champ.value.length > 8 || !champ.match(/^\d+/))
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

function verifForm(f2)
{
   var nomOk = verifnom(f2.nom);
    var prenomOk = verifnom(f2.prenom);
   var mailOk = verifMail(f2.email);

   
   if((verifPseudo(f.nom) && verifMail(f.email))
   {
	   return true;
   }   
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}