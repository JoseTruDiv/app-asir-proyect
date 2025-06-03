window.addEventListener('load',()=>{



       /****************************************************************************************************VARIABLES GLOBALES*******************/

    var idUserChecked;
    var idUsersChecked=[];
    var idUserCheck;
    var nameEditUser;
    var countMobile = 0; 



    /****************************************************************************************************FORMULARIO DE REGISTRO*******************/
        if (HTML.formReg !== null) {
            HTML.formReg.addEventListener('submit',(e)=>{
                e.preventDefault();
                if (comparePass(HTML.passReg.value,HTML.passReg2.value)===1) {
                    HTML.formReg.submit();
                }else{
                    HTML.errorPassKeyReg.textContent='Error, las contraseñas no son iguales.';
                }
            })
        }

        


    /****************************************************************************************************FORMULARIO DE REGISTRO*******************/



     /****************************************************************************************************HOME*******************/

        var palancaheight = 0;

        if (HTML.navUser !== null) {
            HTML.navUser.addEventListener('click',()=>{
                if (palancaheight === 0) {
                    HTML.dropdownUser.classList.add('animation-height');
                    HTML.dropdownUser.classList.remove('animation-height-off');
                    HTML.dropdownUser.classList.remove('animation-height-into');
                    HTML.dropdownUser.style.display='block';
                    palancaheight = 1;
                }else{
                    HTML.dropdownUser.classList.remove('animation-height');
                    HTML.dropdownUser.classList.add('animation-height-into');
                    HTML.dropdownUser.style.display='none';
                    palancaheight = 0;
                }
                
            })
        }
       

        if (HTML.navHome !== null) {
            HTML.navHome.addEventListener('click',()=>{
                HTML.slidebarHome.classList.add('slidebar-home');
                HTML.slidebarHome.classList.remove('slidebar-off');
                HTML.slidebarHome.classList.remove('slidebar-reverse'); 
            })
        }


        if (HTML.closedSlidebar !== null) {
            HTML.closedSlidebar.addEventListener('click',()=>{
                HTML.slidebarHome.classList.add('slidebar-reverse');
                HTML.slidebarHome.classList.remove('slidebar-home');
            })
        }
       


       if (HTML.divSSH !== null) {
            HTML.divSSH.addEventListener('click', () => {
                for (const item of document.getElementsByClassName('div-alert-ssh')) {
                    item.classList.remove('d-none');
                    item.classList.add('d-flex');
                }
                console.log('hola')
            });
            document.getElementById('closed-ssh').addEventListener('click', () => {
                    for (const item of document.getElementsByClassName('div-alert-ssh')) {
                        item.classList.add('d-none');
                        item.classList.remove('d-flex');
                    }
                });
       }
       


       if (HTML.closedNavUserMobile !== null) {
        HTML.closedNavUserMobile.addEventListener('click',()=>{
            document.getElementsByClassName('slidebar-user-mobile')[0].classList.remove('animation-slidebar-user-mobile-on');
            document.getElementsByClassName('slidebar-user-mobile')[0].classList.add('animation-slidebar-user-mobile-off');
        })

        document.getElementById('nav-user-mobile').addEventListener('click',()=>{
            document.getElementsByClassName('slidebar-user-mobile')[0].classList.add('animation-slidebar-user-mobile-on');
            document.getElementsByClassName('slidebar-user-mobile')[0].classList.remove('animation-slidebar-user-mobile-off');
        })
    }
    

     
     /****************************************************************************************************HOME*******************/


       /****************************************************************************************************ADMIN USERS PAGE*******************/

        if (HTML.afterUsers !== null) {
                var count = 1;
                HTML.afterUsers.addEventListener('click',()=>{
                    if (document.getElementsByClassName('div-'+count)[0] !== null) {
                        HTML.beforeUsers.classList.remove('d-none');
                        for (const item of document.getElementsByClassName('div-'+count)) {
                            item.classList.remove('d-none');
                        }
                        var countMine = count - 1;
                        for (const item of document.getElementsByClassName('div-'+countMine)) {
                            item.classList.add('d-none');
                        }            
                    }
                })
            }
 

           if (HTML.beforeUsersMobile !== null) {


    HTML.beforeUsersMobile.addEventListener('click', () => {
        if (countMobile < 0) { 
            countMobile = 1; 
        }
        if (document.getElementsByClassName('div-' + countMobile)[0] !== null) {
            
            if (countMobile > 0) {
                 for (const item of document.getElementsByClassName('div-' + countMobile)) {
                item.classList.add('d-none');
            }
            }else{
                HTML.beforeUsersMobile.classList.add('d-none');
            }

             countMobile--;

            var countMine = countMobile; 

            for (const item of document.getElementsByClassName('div-' + countMine)) {
                item.classList.remove('d-none');
            }
        }
    });
}


             if (HTML.afterUsersMobile !== null) {
                 var usuariosMobile = parseInt(document.getElementById('getUsuariosMobile').value);

                var totalUsuariosMobile = Math.floor(usuariosMobile/2);
                HTML.afterUsersMobile.addEventListener('click',()=>{
                    countMobile++;

                    if (countMobile > totalUsuariosMobile) {
                        countMobile = totalUsuariosMobile;
                    }

                    if (document.getElementsByClassName('div-'+countMobile)[0] !== null) {
                        HTML.beforeUsersMobile.classList.remove('d-none');
                        for (const item of document.getElementsByClassName('div-'+countMobile)) {
                            item.classList.remove('d-none');
                        }
                        var countMine = countMobile - 1;
                        for (const item of document.getElementsByClassName('div-'+countMine)) {
                            item.classList.add('d-none');
                        }            
                    }
                })
            }
 

            if (HTML.beforeUsers !== null) {
                var count = 1;
                HTML.beforeUsers.addEventListener('click',()=>{
                    if (document.getElementsByClassName('div-'+count)[0] !== null) {
                        for (const item of document.getElementsByClassName('div-'+count)) {
                            item.classList.add('d-none');
                        }
                        var countMine = count - 1;
                        for (const item of document.getElementsByClassName('div-'+countMine)) {
                            item.classList.remove('d-none');
                        }            
                    }
                })
            }



            if ( HTML.checkBoxClass[0]!==null) {
                var checkedNumber = 0;
                for (const item of HTML.checkBoxClass) {
                    item.addEventListener('change',()=>{
                        if (item.checked === true) {
                            checkedNumber++;
                        }else{
                            checkedNumber--;
                        }

                        switch (true) {
                            case checkedNumber===0:
                                document.getElementById('delUser').classList.add('a-disabled')
                                document.getElementById('delUser').classList.remove('a-enabled')
                                document.getElementById('editUser').classList.add('a-disabled')
                                document.getElementById('editUser').classList.remove('a-enabled')
                                break;
                            case checkedNumber>1:
                                document.getElementById('delUser').classList.add('a-enabled')
                                document.getElementById('delUser').classList.remove('a-disabled')
                                document.getElementById('editUser').classList.add('a-disabled')
                                document.getElementById('editUser').classList.remove('a-enabled')
                                idUsersChecked.push(item.id);
                                break;
                            case checkedNumber===1:
                                document.getElementById('delUser').classList.add('a-enabled')
                                document.getElementById('delUser').classList.remove('a-disabled')
                                document.getElementById('editUser').classList.add('a-enabled')
                                document.getElementById('editUser').classList.remove('a-disabled')
                                idUserChecked = item.id;
                                idUsersChecked.push(item.id);
                                break;
                        }

                    })
                }
            }


            if (HTML.boxEditUser!==null && HTML.editUser!==null) {
                HTML.editUser.addEventListener('click',()=>{
                    idUserCheck = idUserChecked.split('-')[1];
                    HTML.boxEditUser.classList.remove('d-none');
                    nameEditUser = document.getElementsByClassName('idUser-'+idUserCheck)[0].value; 

                    document.getElementById('nameUser').innerHTML=nameEditUser;

                    document.getElementById('editIdUser').value=idUserCheck;

                })

                HTML.closedEditUser.addEventListener('click',()=>{
                    HTML.boxEditUser.classList.add('d-none');
                })
            }


            if (HTML.boxDelUser!==null && HTML.delUser!==null) {
                document.getElementById('delUser').addEventListener('click',()=>{
                    let idUsersFormat = [];
                    idUserCheck = idUserChecked.split('-')[1];

                    for (const item of idUsersChecked) {
                        idUsersFormat.push(item.split('-')[1]);
                    }

                    console.log(idUsersFormat);

                    for (const value of idUsersFormat) {

                        const inputHidden = document.createElement('input');

                        inputHidden.setAttribute('type','hidden');

                        inputHidden.setAttribute('value',value);

                        inputHidden.setAttribute('name','idUser-'+value);

                        document.getElementById('box-input-delusers').appendChild(inputHidden);
                    }

                    HTML.boxDelUser.classList.remove('d-none');

                })

                HTML.closedDelUser.addEventListener('click',()=>{
                    HTML.boxDelUser.classList.add('d-none');
                })
            }

           



        /****************************************************************************************************ADMIN USERS PAGE*******************/



       /****************************************************************************************************ADD USERS PAGE*******************/

                
        if (HTML.registroUser !== null) {
                HTML.addUsers.addEventListener('click',(e)=>{
                    e.preventDefault();
                    console.log(document.getElementById('passwdUser').value);
                    if (document.getElementById('passwdUser').value!=='' && document.getElementById('reapeatPasswdlUser').value!=='') {
                        if (comparePass(document.getElementById('passwdUser').value,document.getElementById('reapeatPasswdlUser').value)===1) {
                            HTML.registroUser.submit();
                        }else{
                            HTML.errorPass.innerHTML='Error, las contraseñas no son iguales.';
                        }
                    }else{

                    }
                })
            }



         /****************************************************************************************************ADD USERS PAGE*******************/





         
       /****************************************************************************************************CONFIG PAGE*******************/


       if (document.getElementsByClassName('a-config')[0] !== null) {
            for (const item of document.getElementsByClassName('a-config')) {
                item.addEventListener('click',()=>{
                    const id = item.id.split('-')[1];
                    for (const box of document.getElementsByClassName('box')) {
                        box.classList.add('d-none');
                    }
                    document.getElementById('box-'+id).classList.remove('d-none');
                    for (const activo of document.getElementsByClassName('a-config-on')) {
                        activo.classList.remove('a-config-on');
                        activo.classList.add('a-config-off');
                    }
                    item.classList.remove('a-config-off');
                    item.classList.add('a-config-on');
                })
            }
        }


        if (document.getElementsByClassName('active-input-seg')[0] !== null) {
            for (const item of document.getElementsByClassName('active-input-seg')) {
                item.addEventListener('change',()=>{
                    if (item.checked) {
                        item.previousElementSibling.classList.remove('disabled');
                        item.previousElementSibling.disabled=false;
                    }else{
                        item.previousElementSibling.classList.add('disabled');
                        item.previousElementSibling.disabled=true;
                    }
                    
                })
            }
        }


        /****************************************************************************************************CONFIG PAGE*******************/


        
        /****************************************************************************************************QUESTIONS PAGE*******************/


                
        if (HTML.itemBoxAcordionsClass[0] !== null) {
            for (const item of HTML.itemBoxAcordionsClass) {
                item.addEventListener('click',()=>{
                    const id = item.id.split('-')[1];
                    if (document.getElementsByClassName('item-text-acordion')[id].classList.contains('d-none')) {
                        document.getElementsByClassName('item-text-acordion')[id].classList.remove('d-none');
                        document.getElementsByClassName('icon-arrow')[id].innerHTML='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67"/></svg>';

                    }else{
                        document.getElementsByClassName('item-text-acordion')[id].classList.add('d-none');
                        document.getElementsByClassName('icon-arrow')[id].innerHTML='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671"/></svg>';
                    }
                    
                })
            }
        }


        /****************************************************************************************************QUESTIONS PAGE*******************/



})