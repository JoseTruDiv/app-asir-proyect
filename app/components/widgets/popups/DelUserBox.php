<div id="box-pupups-delUser" class="d-none">
<div class="popup-wallpaper">
    <div class="popup-delUser">
        <div class="d-flex justify-end">
            <a id="del-closed-popup" href="#" style="color: #000;"><svg xmlns="http://www.w3.org/2000/svg" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg></a>
        </div>
        <div>
            <form id="delUser" action="/delUsersController" method="post">
                        <div id="box-input-delusers">
                            
                        </div>
                        <div class="py-1">
                            <h3 class="text-center">¿Estas seguro de eliminar estos usuarios?</h3>
                        </div>
                            <div class="d-flex w-100 pt-1 g-1">
                                <button type="submit" class="btn-auth w-100 p-1 text">Eliminar Usuario</button>
                            </div>
                            <div id="del-closed-popup" class="d-flex w-100 pt-1 g-1">
                                <button type="button" class="btn-cancel w-100 text py-1 px-1" style="background-color: #fff;">Cancelar</button>
                            </div>
            </form>
        </div>
    </div>
</div>
</div>
