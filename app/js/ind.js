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

})