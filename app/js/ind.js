window.addEventListener('load',()=>{

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

        HTML.navUser.addEventListener('click',()=>{
            if (palancaheight === 0) {
                HTML.dropdownUser.classList.add('animation-height');
                HTML.dropdownUser.classList.remove('animation-height-off');
                HTML.dropdownUser.classList.remove('animation-height-into');
                palancaheight = 1;
            }else{
                HTML.dropdownUser.classList.remove('animation-height');
                HTML.dropdownUser.classList.add('animation-height-into');
                palancaheight = 0;
            }
            
        })



        HTML.navHome.addEventListener('click',()=>{
            HTML.slidebarHome.classList.add('slidebar-home');
            HTML.slidebarHome.classList.remove('slidebar-off');
            HTML.slidebarHome.classList.remove('slidebar-reverse'); 
        })

        HTML.closedSlidebar.addEventListener('click',()=>{
            HTML.slidebarHome.classList.add('slidebar-reverse');
            HTML.slidebarHome.classList.remove('slidebar-home');
        })

        HTML.sshClipServer.addEventListener('click',()=>{
            console.log(this.innerWidth);
        })
     
     /****************************************************************************************************HOME*******************/





})