<html>
<title> Controle </title>

<?php 
        $i=0;
        while($i< count($ret)){
    ?>

<center> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Date</th>
      <th scope="col">Durée</th>
    </tr>
  </thead>
  <tbody>

   <tbody>
       <tr>
           <td><p><?= $ret[$i]->getNumDevoir()?></p></td>
           <td><p><?= $ret[$i]->getDateDevoir()?></p></td>
           <td><p><?= $ret[$i]->getDureeDevoir()?></p></td>
       </tr>
   </tbody>
</table> 
</center>

<?php
    $i++;
    }
?>

</html>