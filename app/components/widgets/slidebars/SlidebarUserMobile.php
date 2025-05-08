<div class="slidebar-user-mobile">
        <div class="d-flex justify-end pt-1 w-100 px-1">
            <a id="closed-nav-user-mobile" class="a-session" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                </svg>
            </a>
        </div>

        <div class="row-column g-1 align-center pb-5" style="scale: 1.2;">
            <?php  

                if ($_SESSION['idRol']==1) {

            ?>
                <p><a class="text" href="/admin">ADMIN</a></p>
            <?php
                    
                }

            ?>
            <p><a class="text" href="/home">HOME</a></p>
            <p><a class="text" href="/config">CONFIG</a></p>
            <p><a class="text" href="/questions">QUESTIONS</a></p>
        </div>

        <div class="row-column g-1 align-center" style="scale: 1.2;">
        <div>
           <p class="tittle-navbar-user"><?php  echo $_SESSION['nameUser']; ?></p>
        </div>
        <div>
            <?php 

                switch ($_SESSION['idRol']) {
                    case 1:

            ?>

                <p class="text">Rol: <?php echo 'Administrador'; ?></p>        

            <?php
                        break;
                    case 2:

            ?>
            
            <p class="text">Rol: <?php echo 'Usuario'; ?></p>

            <?php
                        break;
                    case 3:

            ?>

                <p class="text">Rol: <?php echo 'Desarrollador'; ?></p>

            <?php
                        break;
                }

            ?>
        </div>
        <div>
            <p class="text"><?php  echo $_SESSION['emailUser']; ?></p>
        </div>
  
            <a href="/closed_session" class="a-session d-flex alig-center mt-1" style="gap: 5px;">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
                Cerrar Sesión
            </a>
        </div>

        

</div>