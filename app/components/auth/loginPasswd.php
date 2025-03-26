
<div class="container align-center justify-center">
        <div class="box-auth box-passLogin-animate">
            <form action="/loginController" method="post">
                <div class="row justify-center">
                    <img class="logo-auth" src="./app/imgs/logo-corporativo.svg" alt="">
                </div>
                <input type="hidden" name="funcion" value="authUser">
                <div class="row justify-center mt-1">
                    <p class="text">Login</p>
                </div>
                <div class="row justify-center mt-1">
                    <input class="input text" type="password" name="passLogin" id="passLogin" placeholder="Contraseña...">
                </div>
                
                <div class="row justify-center mt-2">
                    <button class="btn-auth text">Enviar</button>
                </div>
            </form>
            <div>
                    <a href="/" class="a pt-1 d-flex align-center justify-center" style="gap: 10px;">
                        <svg height="7" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2003_65)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.14652 0.146266C2.19295 0.0998361 2.24807 0.0630057 2.30873 0.0378779C2.3694 0.01275 2.43442 -0.000183105 2.50008 -0.000183105C2.63269 -0.000183105 2.75987 0.0524963 2.85364 0.146266C2.94741 0.240036 3.00009 0.367216 3.00009 0.499827C3.00009 0.632437 2.94741 0.759617 2.85364 0.853387L1.70706 1.99973H7.50017C7.63091 2.00256 7.75535 2.05649 7.84682 2.14996C7.93828 2.24343 7.9895 2.369 7.9895 2.49978C7.9895 2.63056 7.93828 2.75613 7.84682 2.8496C7.75535 2.94307 7.63091 2.997 7.50017 2.99983H1.70706L2.85364 4.14641C2.94685 4.24029 2.99905 4.36729 2.9988 4.49958C2.99855 4.63187 2.94588 4.75868 2.85232 4.85221C2.75876 4.94574 2.63194 4.99837 2.49964 4.99858C2.36735 4.99878 2.24037 4.94654 2.14652 4.85329L0.14658 2.85334C0.100113 2.80693 0.0632491 2.75182 0.0380979 2.69115C0.0129466 2.63048 9.53674e-07 2.56545 9.53674e-07 2.49978C9.53674e-07 2.43411 0.0129466 2.36908 0.0380979 2.30841C0.0632491 2.24774 0.100113 2.19263 0.14658 2.14622L2.14652 0.146266Z" fill="currentColor"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2003_65">
                        <rect width="8" height="5" fill="white" transform="matrix(-1 0 0 1 8 -0.000213623)"/>
                        </clipPath>
                        </defs>
                        </svg>
                        Volver a login
                    </a>
                </div>
        </div>
    </div>