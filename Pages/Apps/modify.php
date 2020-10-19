<?php
include_once($_SERVER['DOCUMENT_ROOT']."/RyftenStore/Header-Footer/Header.php");
?>

<div class="w3-container" style="margin-top: 50px;margin-bottom: 50px; width: 100%;min-height: 500px">
    <?php
    if(isset($_GET["mod"]))
    {
        $datos = unserialize(utf8_decode($_GET["mod"]));

        $des= utf8_encode($datos['description']);

        echo "<div id='modify' class='w3-center'>
                  <h2>Modificar Aplicacion</h2>
                 <form class='w3-center modifyForm' method='post' action='modifyController.php' enctype='multipart/form-data'>
                 <ul>
                      <li class='w3-margin-bottom'>
                           <input type='text' required='' value='{$datos['name']}' name='name'>
                       </li>
                       <li class='w3-margin-bottom'>
                           <input type='text' required='' value='{$datos['price']}' name='price'>
                       </li>
                       
                       <li class='w3-margin-bottom'>
                           <input type='text' required='' value='{$datos['owner']}' name='owner'>
                       </li>
                       
                       <li class='w3-margin-bottom'>
                           <textarea type='text' required='' name='description'>$des</textarea>
                       </li>
                       <li class='w3-margin-bottom'>
                           <img id='imgCharacter' class='w3-margin-bottom' src='/RyftenStore/img/{$datos['image']}'>
                           <input class='file'  type='file' name='image'>
                       </li>
                       <li>
                       <input class='w3-hover-teal inputModifyForm' type='submit' value='Modify' name='modify'>
                       <input class='w3-hover-teal inputModifyForm' type='submit' value='Delete' name='delete'>     
                       </li>
                 </ul>                             
                 </form>
                </div>";

        
        echo "<div id='upload' class='w3-center'>
                  <h2>Subir App</h2>
                 <form class='w3-center modifyForm' method='post' action='modifyController.php' enctype='multipart/form-data'>
                 <ul style='list-style: none'>
                      
                      <li class='w3-margin-bottom'>
                           <input type='text' required='' placeholder='Name' name='name'>
                       </li>
                       <li class='w3-margin-bottom'>
                           <input type='number' required='' placeholder='price' name='price'>
                       </li>
                        <li class='w3-margin-bottom'>
                           <input type='text' required='' placeholder='owner' name='owner'>
                       </li>
                       <li class='w3-margin-bottom'>
                           <textarea type='text' required='' placeholder='Description' name='description'></textarea>
                       </li>
                       <li class='w3-margin-bottom'>
                           <input class='file' required='' type='file' name='image'>
                       </li>                  
                       <li><input class='w3-hover-teal inputUploadForm' type='submit' name='upload' value='Upload'></li>
                 </ul>                             
                 </form>
                </div>";
    }

    if(isset($_GET["status"]))
    {
        $status=$_GET["status"];
        echo "<h2>$status</h2>";
    }

    ?>
</div>





<?php
include_once($_SERVER['DOCUMENT_ROOT']."/TP5 - Nuñez Ezequiel/Header-Footer/Footer.php");
?>
