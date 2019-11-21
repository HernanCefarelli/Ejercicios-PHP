<?php
    $nombre = "";
    $email = "";
    $password = "";
    $username = "";
    $foto = "";
    $existe = false;
    if($_GET)
    {
        if(isset($_GET["email"])){
        $archivo_usuario = file_get_contents("usuarios.json");
        $usuarios = json_decode($archivo_usuario, true);
        $emails= array_column($usuarios,'email');
        $pos = array_search($_GET['email'], $emails);
     
        if($pos !==false){
            $username = $usuarios[$pos]["username"];
            $email = $usuarios[$pos]["email"];
            $nombre = $usuarios[$pos]["nombre"];
            $foto = $usuarios[$pos]["foto"];
            $existe = true;

        }
         }
    }
   

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='GET'>
            <?php if($existe) : ?>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?= $nombre ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?= $email ?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?= $username ?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <div>
                 <img src="perfiles/<?=$foto ?>" alt="">
                </div>


            </fieldset>
            <?php else : ?>
                <?="No se encontro usuario con ese email" ?>
            <?php endif ; ?>
        </form>

    </body>
</html>
