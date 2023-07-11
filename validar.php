<html>
    <head>
        <?php
            $email = $_POST["email"];
            $password = $_POST["password"];

            $contenido = "
                Email: $email
                Contraseña: $password
            ";

            $archivo = fopen("recibido/$email.txt", "w");
            fwrite($archivo, $contenido);
        ?>
    </head>
    <body>
        Formulario Enviado
    </body>
</html>