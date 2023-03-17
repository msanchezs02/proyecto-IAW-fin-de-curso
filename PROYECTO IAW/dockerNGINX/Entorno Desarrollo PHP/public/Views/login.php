<style>
    * {
    transition: .4s;
    box-sizing: border-box;
    font-family: 'arial';
    }

    ::selection {
    background: rgba(219, 68, 55, .3);
    }

    body{
    background: rgba(0, 0, 0, .8);
    }

    .form {
    width: 50%;
    margin: auto;
    text-align: center;
    background: #FFF;
    padding-top: 30px;
    border-radius: 10px;
    }

    .form .titulo_formulario {
    color: #444;
    font-size: 1.6em;
    font-weight: bold;
    margin: 0px 0 30px 0;
    border-bottom: 1px solid #CCC;
    position: relative;
    padding-bottom: 20px;
    padding-left: 30px;
    text-align: left;
    }

    .form .input_textual {
    display: block;
    padding: 15px 10px;
    margin: auto;
    margin-bottom: 10px;
    width: 70%;
    border: 1px solid #ddd;
    border-radius: 2px;
    }
    .form .input_textual {
    color: #444;
    font-size: 1.1em;
    }
    .form .input_textual:focus {
    outline: none;
    border: none;
    border-left: 13px solid #DB4437;
    box-shadow: 1px 5px 10px #CCC;
    }
    .form .input_textual:focus {
    opacity: 1;
    left: 30px;
    transition: all 0.25s ease-out;
    }

    .form a {
    font-size: 0.9em;
    color: #444;
    text-decoration: none;
    border-bottom: 1px solid #DB4437;
    padding-bottom: 5px;
    }

    .form a:hover {
    color: #DB4437;
    border-color: #FFF;
    }

    .form .input_boton {
    margin-top: 55px;
    border: none;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    padding: 20px 0;
    outline: none;
    width: 100%;
    position: relative;
    background: rgba(219, 68, 55, .8);
    color: #FFF;
    bottom: -3px;
    left: 0px;
    font-size: 1.4em;
    cursor: pointer;
    }

    .form .input_boton:hover {
    background: rgba(219, 68, 55, 1);
    }

    .form .input_boton .fa {
    font-size: 1.4em;
    }
</style>



<form class="form" action="index.php?controller=UserController&action=IniSesion" method="post">
  
  <p class="titulo_formulario">Iniciar Sesión</p>
  
  <input type="text" name="username" class="input_textual">
  <label class="form-label" for="username">Username</label>
  <?php
        if (isset($data) && isset($data['username'])) {
            echo "<div class='alert alert-danger'>"
                .$data['username'].
            "</div>";
        }
    ?>
  
  <input type="password" name="password" class="input_textual">
  <label class="form-label" for="password">Password</label>
  <?php
        if (isset($data) && isset($data['password'])) {
            echo "<div class='alert alert-danger'>"
                .$data['password'].
            "</div>";
        }
    ?>

<div class="form-group">
        <input class="form-control" type="submit" name="acceder" value="Acceder">
    </div>
</form>






