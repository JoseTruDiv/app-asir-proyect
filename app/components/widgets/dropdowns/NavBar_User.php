<div id="dropdown-user" class="dropdown-user animation-height-off">
    <div class="grid grid-1-3 g-0 p-1">
        <div>
           <p class="tittle-navbar-user"><?php  echo $_SESSION['nameUser']; ?></p>
        </div>
        <div>
            <p class="text"><?php  echo $_SESSION['emailUser']; ?></p>
        </div>
        <div class="pt-1">
            <a href="#" class="a" style="text-decoration: underline;">Mi perfil</a>
        </div>
    </div>
    <div class="box-closed-session">
            <a href="/" class="a-session d-flex alig-center" style="gap: 5px;">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
                Cerrar Sesión
            </a>
    </div>
</div>