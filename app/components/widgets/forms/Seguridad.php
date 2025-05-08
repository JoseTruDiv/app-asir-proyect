<p class="text pb-1">Cambiar datos de usuario:</p>
            <form class="row-column g-2 w-60" action="/editUsersConfigController" method="post">
                <input type="hidden" name="emailUser" id="emailUser" value="<?php echo $_SESSION['emailUser']; ?>">
                <div>
                    <div>
                        <label class="text" for="nameUser">Nuevo nombre del usuario</label>
                        </div>
                        <div class="d-flex align-end g-1">
                            <input class="input-user disabled" type="text" name="newNameUser" id="newNameUser" placeholder="Nombre del usuario..." disabled><input type="checkbox" style="transform: scale(1.4);cursor: pointer;" class="active-input-seg" name="" id="">
                        </div>
                </div>
                <div>
                <div>
                        <label class="text" for="newEmailUser">Nuevo email del usuario</label>
                    </div>
                    <div class="d-flex align-end g-1">
                    <input class="input-user disabled" type="email" name="newEmailUser" id="newEmailUser" placeholder="user@gmail.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" disabled><input type="checkbox" style="transform: scale(1.4);cursor: pointer;" class="active-input-seg" name="" id="">
                    </div>
                </div>
                <div>
                <div>
                    <label class="text" for="newPasswdUser">Cambia tu contraseña:</label>
                    </div>
                    <div class="d-flex align-end g-1">
                    <input class="input-user disabled" type="password" name="newPasswdUser" id="newPasswdUser" placeholder="**********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" disabled><input type="checkbox" style="transform: scale(1.4);cursor: pointer;" class="active-input-seg" name="" id="">
                    </div>
                </div>
                    
                <div class="d-flex g-1">
                    <button type="submit" class="btn-auth text" style="padding: 1rem 2rem;">Enviar</button>
                </div>
            </form>