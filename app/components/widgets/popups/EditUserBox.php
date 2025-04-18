<div id="box-pupups-editUser" class="d-none">
<div class="popup-wallpaper">
    <div class="popup-editUser">
        <div class="d-flex justify-end">
            <a id="closed-popup" href="#" style="color: #000;"><svg xmlns="http://www.w3.org/2000/svg" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg></a>
        </div>
        <div class="pb-1">
            <h3>Editar el usuario <span id="nameUser"></span></h3>
        </div> 
        <div>
            <form id="editRegistroUser" action="/alterUserController" method="post">
                    <input type="hidden" name="editIdUser" id="editIdUser">
                        <div>
                            <label class="text" for="nameUser">Nombre del usuario</label>
                            
                        </div>
                        <div>
                            <input type="hidden" name="edidUser" id="edidUser">
                        </div>
                        <div>
                            <input class="input-user" type="text" name="nameUser" id="editNameUser" placeholder="Nombre del usuario..." required>
                        </div>
                        <div class="pt-1">
                            <label class="text" for="lastNameUser">Apellido del usuario</label>
                        </div>
                        <div>
                            <input class="input-user" type="text" name="lastNameUser" id="editLastNameUser" placeholder="Apellido del usuario...">
                        </div>
                        <div class="pt-1">
                            <label class="text" for="departamentoUser">Departamento del usuario</label>
                        </div>
                        <div>
                            <input class="input-user" type="text" name="departamentoUser" id="editDepartamentoUser" placeholder="Departamento del usuario...">
                        </div>
                        <div class="pt-1">
                            <label class="text" for="emailUser">Email del usuario</label>
                        </div>
                        <div>
                            <input class="input-user" type="email" name="emailUser" id="editEmailUser" placeholder="user@gmail.com" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                        </div>
                        <div class="pt-1">
                            <label class="text" for="emailUser">Contraseña nueva del usuario</label>
                        </div>
                        <div>
                            <input class="input-user" type="password" name="passwdUser" id="editPasswdUser" placeholder="**********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                        </div>
                        <div>
                            <p id="errorPasswd" class="text-error"></p>
                        </div>
                        <div class="pt-1">
                            <select class="select-users text w-100"  name="rolUser" id="editRolUser" required>
                                <option value="0">--Selecciona el rol del usuario--</option>
                                <option value="1">Admin</option>
                                <option value="2">Usuario</option>
                                <option value="3">Desarrollador</option>
                            </select>
                        </div>
                        <div class="d-flex pt-1 g-1">
                            <button type="submit" class="btn-auth w-100 p-1 text">Editar Usuario</button>
                        </div>
            </form>
        </div>
    </div>
</div>
</div>
