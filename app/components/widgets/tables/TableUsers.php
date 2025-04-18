
<div class="d-flex w-100">
    <table class="table-user w-100">
        <tr class="tr-first">
            <td class="td-check">Check</td>
            <td>idUser</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Email</td>
            <td>Departamento</td>
            <td>Rol</td>
        </tr>

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


    if (count($arrayUsers)<=6) {
  

    foreach ($arrayUsers as $array) {
?>
    <tr>
    <td class="td-check">
        
    <input class="check-box" type="checkbox" name="<?php echo 'idUser-'.$array[0];  ?>" id="<?php echo 'idUser-'.$array[0];  ?>">
    
    <input type="hidden" class="idUser-<?php echo $array[0];?>" value="<?php echo $array[1];  ?>"></td>
    <td><?php echo $array[0];  ?></td>
    <td><?php echo $array[1];  ?></td>
    <td><?php echo $array[2];  ?></td>
    <td><?php echo $array[3];  ?></td>
    <td><?php echo $array[4];  ?></td>
    <td>
        <?php

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

        ?>
    </td> 
    </tr>
      


<?php


        }
    }else{
        $count = 0;
        $div = 0;

        foreach ($arrayUsers as $array) {
            ?>
                
                <tr class="<?php echo "div-$div"; if ($div>0) {
                    echo " d-none";
                } ?>">
                <td class="td-check">
        
                <input class="check-box" type="checkbox" name="<?php echo 'idUser-'.$array[0];  ?>" id="<?php echo 'idUser-'.$array[0];  ?>">
                
                <input type="hidden" class="idUser-<?php echo $array[0];?>" value="<?php echo $array[1];  ?>"></td>
                <td><?php echo $array[0];  ?></td>
                <td><?php echo $array[1];  ?></td>
                <td><?php echo $array[2];  ?></td>
                <td><?php echo $array[3];  ?></td>
                <td><?php echo $array[4];  ?></td>
                <td>
                    <?php
            
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
            
                    ?>
                </td> 
                </tr>
                  
            
            
            <?php

                $count++;

                if ($count == 6) {
                    $count = 0;
                    $div++;
                }

                    }



    }
 }

?>
    </table>
</div>