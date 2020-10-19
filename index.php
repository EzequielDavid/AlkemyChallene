<?php include_once("Header-Footer/Header.php")
?>
<!-- Image Header -->
<div id="imgContainer" class="w3-display-container w3-animate-opacity">
  <img src="img/Banner.png" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  </div>
</div>



<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>Ryften Apps</h2>
<p>Top apps</p>


<div class="w3-row"><br>
    <?php
    include_once("Clases/Conection.php");
    $conection = new Conection("conection.ini");

    $row = $conection->getApp();

    if(isset($_SESSION['user']))
    {
        echo " <div class='modify'>
                  <button class='w3-hover-teal'><a href='/RyftenStore/Pages/Apps/modify.php?mod=".serialize($row[0])."'>Modificar</a></button>
                  <button class='w3-hover-teal'><a href='/RyftenStore/Pages/Apps/modify.php?mod=".serialize($row[1])."'>Modificar</a></button>
                  <button class='w3-hover-teal'><a href='/RyftenStore/Pages/Apps/modify.php?mod=".serialize($row[2])."'>Modificar</a></button>
                  <button class='w3-hover-teal'><a href='/RyftenStore/Pages/Apps/modify.php?mod=".serialize($row[3])."'>Modificar</a></button>
              </div>";

    }

    echo "<div class='w3-quarter characterIndex'>
         <a href='/RyftenStore/Pages/Apps/Detail.php?row=".serialize($row[0])."'><img src='img/{$row[0]['image']}' alt='Instagram' style='width:65%' class='w3-circle w3-hover-opacity'></a> 
          <h3>{$row[0]['name']}</h3>
          <h4>$ {$row[0]["price"]}</h4>
         </div>";


echo "<div class='w3-quarter characterIndex'>
      <a href='/RyftenStore/Pages/Apps/Detail.php?row=".serialize($row[1])."'><img src='img/{$row[1]['image']}' alt='Twitter' style='width:65%' class='w3-circle w3-hover-opacity'></a>
      <h3>{$row[1]['name']}</h3>
      <h3>$ {$row[1]["price"]}</h3>
      </div>";

    echo "<div class='w3-quarter characterIndex'>
      <a href='/RyftenStore/Pages/Apps/Detail.php?row=".serialize($row[2])."'><img src='img/{$row[2]['image']}' alt='Facebook' style='width:65%' class='w3-circle w3-hover-opacity'></a>
      <h3>{$row[2]['name']}</h3>
      <h3>$ {$row[2]["price"]}</h3>
      </div>";

    echo "<div class='w3-quarter characterIndex'>
      <a href='/RyftenStore/Pages/Apps/Detail.php?row=".serialize($row[3])."'><img src='img/{$row[3]['image']}' alt='Gwent' style='width:65%' class='w3-circle w3-hover-opacity'></a>
      <h3>{$row[3]['name']}</h3>
      <h3>$ {$row[3]["price"]}</h3>
      </div>";

?>

</div>
</div>



<?php include_once("Header-Footer/Footer.php")
?>