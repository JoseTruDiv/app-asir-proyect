
    <div class="container align-center justify-center">
        <div class="box-auth" id="boxAuth">
            <form action="/loginController" method="post">
                <div class="row justify-center">
                    <img class="logo-auth" src="./app/imgs/logo-corporativo.svg" alt="">
                </div>
                <input type="hidden" name="funcion" value="setUser">
                <div class="row justify-center mt-1">
                    <p class="text">Login</p>
                </div>
                <div class="row justify-center mt-1">
                    <input class="input text" type="email" name="nameLogin" id="nameLogin" placeholder="Email de usuario...">
                </div>
                <?php 

                    require_once __DIR__.'../../../../src/routes/path.php';
                    $path = new Path();

                    require_once $path->CONTROLLERS.'/GetCuentaController.php';

                    $getCuentaController = new GetCuentaController();
                    

                    if ($getCuentaController->index() === 0) {
                       
                
                ?>
                <div class="row justify-center mt-1">
                    <p class="text">¿No tienes cuenta?, <a class="a" href="/registro">Crea una</a></p>
                </div>

                <?php
                     # code...
                    }else{

                    }
                ?>

                <div class="row justify-center mt-2">
                    <button class="btn-auth text">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <?php
        session_start();
        if (isset($_SESSION['registroUser'])) {
            include $path->COMPONENTS.'/alerts/altaAlert.php'; 
            unset($_SESSION['registroUser']);
        }

        if (isset($_SESSION['inicio'])) {
            include $path->COMPONENTS.'/alerts/errorLogin.php'; 
            unset($_SESSION['inicio']);
        }
     ?>