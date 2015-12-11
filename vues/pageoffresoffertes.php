<div data-role="page" id="pageoffresoffertes">
<?php    
    include "vues/entetebtn.html";
?>
<div data-role="content" id="divliste"> 
    <ul data-role="listview" id="lstoffres" >
<?php
    $jour = "";
    $bool=false;
    foreach ($lesOffres as $uneOffre){
        
        if($jour!=$uneOffre['jour']){
            $jour=$uneOffre['jour'];
            if($bool==true){
                echo '</ul></div>';
            }
            $bool=true;
            
            echo "<div data-role='collapsible'><h3>".$jour."</h3><ul data-role='listview' id='listeOffre'>";
    ?>
        <li data-role="list-diviser" data-theme="b"><?php echo $jour ?></li>
<?php 
        } //fin si
?>

           <li id="<?php echo $uneOffre['id'] ?>"><a href ="#pageoffre" ><?php echo $uneOffre['date']." à ".$uneOffre['heure']. " vers " .$uneOffre['retour']?> </a> </li>
<?php 
    } //fin foreach
?>
    </ul>
    </div><!-- /content -->
<?php    
    include "vues/pied.html";
?>
</div> <!-- /page -->
