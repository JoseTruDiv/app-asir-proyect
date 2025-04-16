<?php
    if ($_SESSION['idRol']==1) {
?>
<div class="container">
    <h1>Estas en administrador</h1>
</div>
<?php
    }else{
        header('Location: /404');
    }
?>
