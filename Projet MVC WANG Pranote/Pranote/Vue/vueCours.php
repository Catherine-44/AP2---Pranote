<html>

<meta charset="UTF-8"/>
<title> Cours </title>
<?php 
        $i=0;
        while($i< count($ret)){
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Date</th>
      <th scope="col">Heure</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><p><?= $ret[$i]->getNomCours()?></p></td>
      <td><p><?= $ret[$i]->getDateCours()?></p></td>
      <td><p><?= $ret[$i]->getHeureCours()?></p></td>

    </tr>
  </tbody>
</table>

<?php
    $i++;
    }
?>

</html>