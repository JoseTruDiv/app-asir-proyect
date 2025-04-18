window.addEventListener('load',()=>{



       /****************************************************************************************************VARIABLES GLOBALES*******************/

    var idUserChecked;
    var idUsersChecked=[];
    var idUserCheck;
    var nameEditUser;


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
       

       if (HTML.sshClipServer !== null) {
            HTML.sshClipServer.addEventListener('click',()=>{
                console.log(this.innerWidth);
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





})