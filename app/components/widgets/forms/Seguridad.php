<p class="text pb-1">Cambiar datos de usuario:</p>
            <form class="row-column g-2 w-60" action="#" method="post">
                <div>
                    <div>
                            <label class="text" for="nameUser">Nuevo nombre del usuario</label>
                        </div>
                        <div>
                            <input class="input-user" type="text" name="nameUser" id="nameUser" placeholder="Nombre del usuario...">
                        </div>
                </div>
                <div>
                <div>
                        <label class="text" for="nameUser">Nuevo email del usuario</label>
                    </div>
                    <div>
                    <input class="input-user" type="email" name="emailUser" id="emailUser" placeholder="user@gmail.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                    </div>
                </div>
                <div>
                <div>
                    <label class="text" for="nameUser">Cambia tu contraseña:</label>
                    </div>
                    <div>
                    <input class="input-user" type="password" name="passwdUser" id="passwdUser" placeholder="**********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    </div>
                </div>
                    
                <div class="d-flex g-1">
                    <button type="submit" class="btn-auth text" style="padding: 1rem 2rem;">Enviar</button>
                    <button type="button" class="btn-auth-2 text d-flex align-center" style="padding: 1rem 1rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                    <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    </svg>
                        Activar Auth 2
                    </button>
                </div>
            </form>