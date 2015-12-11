<div data-role="page" id="pageinscription">
       
<?php

include "vues/entetebtn.html";
include "vues/logo.html";


?>


  

<div data-role="content" id="divinscrit" >

<form action="#" rel="external" id="frmInsc">
    <div data-role="fieldcontain">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" value="" class="required" />
        
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" value="" class ="required" />

        <label for="mail">Mail</label>
        <input type="email" name="mail" id="mail" value="" class="required email"/>        
		
		<label for="tel">Téléphone</label>
		<input type="text" name="tel" id="tel" value="" class="required number"/> 

			
			
		
		<fieldset data-role="controlgroup" data-type="horizontal">
    		<legend>Indiquez le service :</legend>
    		<input type="radio" name="radio-choice-h-2" id="radio-choice-h-2a" value="">
    		<label for="radio-choice-h-2a">Recherche</label>
    		<input type="radio" name="radio-choice-h-2" id="radio-choice-h-2b" value="">
    		<label for="radio-choice-h-2b">Production</label>
    		<input type="radio" name="radio-choice-h-2" id="radio-choice-h-2c" value="">
    		<label for="radio-choice-h-2c">Commercial</label>
    		<input type="radio" name="radio-choice-h-2" id="radio-choice-h-2d" value="">
    		<label for="radio-choice-h-2d">Sécurité</label>		
		</fieldset>		

		<p>
    		<a href="#" data-role="button" id="btninscription" name="envoyer" data-theme="b" >Envoyer</a>
    	</p>
    	

    

    </div>

</form>
</div><!-- /content -->
 <?php
   include "vues/pied.html";
?>
    
</div><!-- /page -->
