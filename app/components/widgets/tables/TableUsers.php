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


        ?>

        <tr>
            <td class="td-check"><input type="checkbox" name="" id=""></td>
            <td>idUser</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Email</td>
            <td>Departamento</td>
            <td>Rol</td>
        </tr>
        <tr>
            <td class="td-check"><input type="checkbox" name="" id=""></td>
            <td>idUser</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Email</td>
            <td>Departamento</td>
            <td>Rol</td>
        </tr>
    </table>
</div>