function utiliserAjax(scriptCible,zoneAffichage)
{ 
  

//*******************  afficher une Annimation  ********************************//***//

document.getElementById(zoneAffichage).innerHTML=  "<img src = 'images/ajax-loader.gif' />";      //***//

//****************************************************************************//***//


/**************** Cr�er un objet XMLHttpRequest /********************************
/********************************************************************************
*********************************************************************************/
 var xhr; 
    try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
    catch (e) 
    {
        try {   xhr = new ActiveXObject('Microsoft.XMLHTTP');    }
        catch (e2) 
        {
          try {  xhr = new XMLHttpRequest();      }
          catch (e3) {  xhr = false;   }
        }
     }




//*************************** Attendre la r�ception de la r�ponse,
//*************************** quand elle est pr�te (readyState = 4) 
//*************************** et sans erreurs (status = 200), 
//*************************** on consomme le texte re�u (responseText)
//***************************



 
    xhr.onreadystatechange  = function()

    { 
         if(xhr.readyState  == 4)
         {
              if(xhr.status  == 200) { 
				//alert(zoneAffichage);	
//alert(document.getElementById(zoneAffichage).innerHTML);				
                 document.getElementById(zoneAffichage).innerHTML= xhr.responseText;
				 //alert(document.getElementById(zoneAffichage).innerHTML);
              }else 
                 alert ("Error code " + xhr.status);
         }

    } 


   xhr.open( "GET", scriptCible,  true); 

   xhr.send(null);

//************************* avec post, on devrait �crire: **************************************//***//

//***		xhr.open("POST", "afficher.php",  true);                                       //***//

//***           xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");    //***//

//***  		xhr.send("code=E1&nom=Moujtahid&prenom=Moujidd");                                                         //***//

//******************************************************************************************//***//




 
} 
