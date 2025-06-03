
<div class="d-flex w-100 d-none d-block-mobile" style="overflow: scroll;">
    <table class="table-user w-100">

        <?php

$path = $GLOBALS['path'];
require_once $path->CONTROLLERS.'/GetUsersController.php';

$getUserController = new GetUsersController();

$arrayUsers = $getUserController->getUsers();


if ($arrayUsers == 0) {

?>


<div>
    <h3>Esta tabla esta vacía</h3>
</div>


<?php



}else{


    if (count($arrayUsers)<=2) {
  

    foreach ($arrayUsers as $array) {
?>
     <tr class="tr-mobile">
                    <td class="td-check">idUser</td>
                    <td class="d-flex g-1 justify-center"><?php echo $array[0];  ?> <input class="check-box" type="checkbox" name="<?php echo 'idUser-'.$array[0];  ?>" id="<?php echo 'idUser-'.$array[0];  ?>"></td>
                </tr>
                <tr class="tr-mobile">
                    <td class="td-check">Nombre</td>
                    <td class="d-flex g-1 justify-center"><?php echo $array[1];  ?></td>
                </tr>
                <tr class="tr-mobile">
                    <td class="td-check">Email</td>
                    <td  class="p-1 text-center"><?php echo $array[3];  ?></td>
                </tr>
                <tr class="tr-mobile">
                    <td class="td-check">Departamento</td>
                    <td  class="p-1 text-center"><?php echo $array[4];  ?></td>
                </tr>
                <tr class="tr-mobile">
                    <td class="td-check">Rol</td>
                    <td  class="p-1 text-center"> <?php
            
            switch ($array[5]) {
                case 1:
                    echo 'Administrador';
                    break;
                case 2:
                    echo 'Usuario';
                    break;
                case 3:
                    echo 'Desarrollador';
                    break;
            }

        ?></td>
            </tr>
      


<?php


        }
    }else{
        $count = 0;
        $div = 0;
        $pares = 1;
        foreach ($arrayUsers as $array) {
            ?>
            <tbody class="<?php echo "div-$div"; if ($div>0) {
                    echo " d-none";
                } ?>">
            <tr class="tr-mobile-<?php echo $pares; ?>">
                    <input type="hidden" name="" id="getUsuariosMobile" value="<?php echo count($arrayUsers);  ?>">
                    <td class="td-check">idUser</td>
                    <td class="d-flex g-1 justify-center"><?php echo $array[0];  ?> <input class="check-box" type="checkbox" name="<?php echo 'idUser-'.$array[0];  ?>" id="<?php echo 'idUser-'.$array[0];  ?>"></td>
                </tr>
                <tr class="tr-mobile-<?php echo $pares; ?>">
                    <td class="td-check">Nombre</td>
                    <td class="d-flex g-1 justify-center"><?php echo $array[1];  ?></td>
                </tr>
                <tr class="tr-mobile-<?php echo $pares; ?>">
                    <td class="td-check">Email</td>
                    <td  class="p-1 text-center"><?php echo $array[3];  ?></td>
                </tr>
                <tr class="tr-mobile-<?php echo $pares; ?>">
                    <td class="td-check">Departamento</td>
                    <td  class="p-1 text-center"><?php echo $array[4];  ?></td>
                </tr>
                <tr class="tr-mobile-<?php echo $pares; ?>">
                    <td class="td-check">Rol</td>
                    <td  class="p-1 text-center"> <?php
            
            switch ($array[5]) {
                case 1:
                    echo 'Administrador';
                    break;
                case 2:
                    echo 'Usuario';
                    break;
                case 3:
                    echo 'Desarrollador';
                    break;
            }

        ?></td>
            </tr>
            </tbody>
                
            
                <tr class="<?php echo "div-$div"; if ($div>0) {
                    echo " d-none";
                } ?>">
               
                  
            
            
            <?php

                $count++;

                if ($pares%2==0) {
                    $pares=1;
                }else{
                    $pares=2;
                }

                if ($count == 2) {
                    $count = 0;
                    $div++;
                }

                    }



    }
 }

?>
    </table>
</div>