<?php
    if ($_SESSION['idRol']==1) {
?>

<?php
    include $GLOBALS['path']->HEADER;
?>

<div class="container" style="height: 79vh;flex-direction: column;"> 
    <div class="row-column px-3 w-100" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 0px;height: 15vh;z-index: 1;">
        <div class="d-flex">
            <a href="/home" class="text a-session">Home</a> / <a class="text a-session" href="/admin">Admin</a>
        </div>
        <div class="d-flex pt-1 g-1">
            <a id="addUsers" href="#" class="btn-auth text py-1 px-2">Añadir</a> <a class="btn-cancel text py-1 px-1" href="/admin">Cancelar</a>
        </div>
    </div>
    <div style="height: 100%;background-color: #f1f1f1;z-index: 0;">
        <form id="registroUser" class="pt-5 px-3" action="/regstroUserController" method="post">
            <div class="row">
                <div class="w-50 px-2">
                    <div>
                        <label class="text" for="emailUser">Email del usuario</label>
                    </div>
                    <div>
                        <input class="input-user" type="email" name="emailUser" id="emailUser" placeholder="user@gmail.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                    </div>
                    <div class="pt-1">
                        <label class="text" for="emailUser">Contraseña del usuario</label>
                    </div>
                    <div>
                        <input class="input-user" type="password" name="passwdUser" id="passwdUser" placeholder="**********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    </div>
                    <div class="pt-1">
                        <label class="text" for="emailUser">Repite la contraseña del usuario</label>
                    </div>
                    <div>
                        <input class="input-user" type="password" name="reapeatPasswdlUser" id="reapeatPasswdlUser" placeholder="**********" required>
                    </div>
                    <div>
                        <p id="errorPasswd" class="text-error"></p>
                    </div>
                    <div class="pt-1">
                        <select class="select-users text w-100"  name="rolUser" id="rolUser" required>
                            <option value="0">--Selecciona el rol del usuario--</option>
                            <option value="1">Admin</option>
                            <option value="2">Usuario</option>
                            <option value="3">Desarrollador</option>
                        </select>
                    </div>
                </div>
                <div class="w-50 px-2">
                <div>
                        <label class="text" for="nameUser">Nombre del usuario</label>
                    </div>
                    <div>
                        <input class="input-user" type="text" name="nameUser" id="nameUser" placeholder="Nombre del usuario..." required>
                    </div>
                    <div class="pt-1">
                        <label class="text" for="lastNameUser">Apellido del usuario</label>
                    </div>
                    <div>
                        <input class="input-user" type="text" name="lastNameUser" id="lastNameUser" placeholder="Apellido del usuario...">
                    </div>
                    <div class="pt-1">
                        <label class="text" for="departamentoUser">Departamento del usuario</label>
                    </div>
                    <div>
                        <input class="input-user" type="text" name="departamentoUser" id="departamentoUser" placeholder="Departamento del usuario...">
                    </div>
                </div>
            </div>
        </form>
    </div>  
</div>

<style>
    body{
        background-image: none !important;
    }
</style>
<?php
    }else{
        header('Location: /404');
    }
?>

<?php
      if (isset($_SESSION['registroUser'])) {

        include $path->COMPONENTS.'/widgets/alerts/altaAlert.php'; 
        unset($_SESSION['registroUser']);
    }

?>