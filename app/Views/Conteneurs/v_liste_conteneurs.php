<div id="article-wrapper">



<?php if(!isset ($recherche_vide)){ ?>

    <?php if (count($result) != 0) { ?>



      
                <article class="main-article">
                    <h1>Classements 2007</h1>
                    <p>
                        <strong>
                            Les classements sont établis par classe de bateaux. Une classe de bateau correspond à un
                            type de coque et une longueur maximale de coque.
                        </strong>
                    </p>

                  

                    <h2>Affichez les résultats par classe de bateaux</h2>

                    <?php if (!isset ($recherche_vide)){ ?>
                    <h1><?php echo $heading . "(" . $pager ->getDetails()['total'] . " trouvés)"; ?></h1>
                    <?php } ?> 

                   


<ul class="list-items">
<?php

 foreach ($result as $row) { ?>
 <li>
 <?= $row['Id'] . '-' . $row['AddrEmplacement'];?>
 <a href="<?=base_url('Cconteneur/detail/'). '/' . $row['Id']; ?>">Plus d'infos</a>
 </li>

 <?php } ?> 
 </ul>
<?php 

 } else {
     echo "<p>Aucun résultat trouvé</p>";
 }
?>
  
                  <?php echo $pager->links(); ?> 
                  <?php } ?> 

                </article>
                



               
    