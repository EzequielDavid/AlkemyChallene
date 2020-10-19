<?php
include_once($_SERVER['DOCUMENT_ROOT']."/RyftenStore/Header-Footer/Header.php");
include_once($_SERVER['DOCUMENT_ROOT']."/RyftenStore/Clases/Conection.php");
?>

<div id="searchContainer">
  <?php

  if(isset($_POST["search"]))
  {
      $conection = new Conection($_SERVER['DOCUMENT_ROOT']."/RyftenStore/conection.ini");
      $search=$_POST["search"];

          $row= $conection->getApp($search);

         $modify="";
         $i=0;
      if(isset($_SESSION['user']))
      {
          $modify= " <div class='modifySearch'>
                          <button class='w3-hover-teal'><a href='/RyftenStore/Pages/Apps/modify.php?mod=".serialize($row[$i])."'>Modificar</a></button>
                     </div>";
      }
          if(count($row)>0)
          {
             for($i;$i<count($row);$i++)
             {
                 echo "<div class='searchContent w3-container w3-center'>
             <div class='w3-quarter imageContainer'>
              <a href='/RyftenStore/Pages/Apps/Detail.php?row=".serialize($row[$i])."'><img src='/RyftenStore/img/{$row[$i]['image']}' alt='{$row[$i]['image']}' style='width:100%' class='w3-circle w3-hover-opacity w3-center'></a> 
              <h3>{$row[$i]['name']}</h3>
              <h4>$ {$row[$i]['price']} </h4>
              $modify
             </div>
           </div>";
             }

      }
          else
          {
              echo "<div class='searchContent w3-container w3-center imageContainer'>
                    <h3 id='notFound'>Aplicacion no Encontrado</h3>
                    </div>";

              $notFoundSearch=$conection->getApp();

              for($i=0;$i<count($notFoundSearch);$i++)
              {

                  echo "<div class='searchContent w3-container w3-center'>
                             <div class='w3-quarter imageContainer'>
                              <a href='/RyftenStore/Pages/Apps/Detail.php?row=".serialize($notFoundSearch[$i])."'><img src='/RyftenStore/img/{$notFoundSearch[$i]['image']}' alt='{$notFoundSearch[$i]['image']}' style='width:100%' class='w3-circle w3-hover-opacity w3-center'></a> 
                              <h3>{$notFoundSearch[$i]['name']}</h3>
                              <h4>$ {$notFoundSearch[$i]['price']} </h4>
                             </div>
                        </div>";
                  if(isset($_SESSION['user']))
                  {
                      echo " <div class='modifySearch'>
                                <button class='w3-hover-teal'><a href='/RyftenStore/Pages/Apps/modify.php?mod=".serialize($notFoundSearch[$i])."'>Modificar</a></button>
                            </div>";
                  }

              }
          }
  }

  ?>
</div>
<div class="clearFix"></div>
<?php
include_once($_SERVER['DOCUMENT_ROOT']."/RyftenStore/Header-Footer/Footer.php");
?>
