<?php
include_once($_SERVER['DOCUMENT_ROOT']."/RyftenStore/Header-Footer/Header.php");
?>

<div id="cardContainer">
<?php
if(isset($_GET["row"]))
{
    $datos = unserialize(utf8_decode($_GET["row"]));

   $des= utf8_encode($datos['description']);

    echo "<div id='image' class='w3-card-4 w3-margin-rigth w3-orange' style='width:50%;float: left'>
            <img src='/RyftenStore/img/{$datos["image"]}'  style='width:100%'>
            <div class='w3-container w3-center'>
            </div>
            <p class='w3-orange' style='text-align: center'>{$datos["owner"]}</p>
          </div>";

    echo "<div id='description' class='w3-card-4 ' style='width:45%;float: right'>
            <header class='w3-container w3-orange'>
              <h1>{$datos["name"]}</h1>
            </header>
        
            <div class='w3-container'>
              <p>$des</p>
            </div>
        
            <footer class='w3-container w3-orange'>
              <h5>$ {$datos["price"]}</h5>
            </footer>
          </div>";
}

?>
</div>


<div class="clearFix"></div>


<?php
include_once($_SERVER['DOCUMENT_ROOT']."/RyftenStore/Header-Footer/Footer.php");
?>
