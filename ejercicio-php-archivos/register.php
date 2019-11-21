<?PHP
  if($_POST && $_FILES)
  {
      $js_usuarios = file_get_contents("usuarios.json");
      $usuarios = json_decode($js_usuarios,true);
      if($_FILES["foto"]["error"]==0) {
      $ext = pathinfo($_FILES["foto"]["name"],PATHINFO_EXTENSION);
      move_uploaded_file($_FILES["foto"]["tmp_name"], "perfiles/".(count($usuarios) + 1).".".$ext);
      $usuario =[
          "id" => count($usuarios) +1,
          "nombre" => $_POST["name"],
          "email" => $_POST["email"],
          "username" => $_POST["username"],
          "password" => password_hash($_POST["password"],PASSWORD_DEFAULT),
          "foto" => (count($usuarios) + 1).".".$ext
      ];
    $usuarios[] = $usuario;
      $js_usuarios = json_encode($usuarios);
      file_put_contents("usuarios.json", $js_usuarios);
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
        <form id='register' action='' method='post' enctype="multipart/form-data">
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                 <div>
                    <label for="foto">Subir foto: </label>
                    <input type="file" name="foto">
                 </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
