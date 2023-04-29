    <?php

    $result = "portada.png";
    //echo '<img src=' . $result . '>';
    //echo "<br>";

    $nombre = $_POST["nombre"];
    echo "<br>" . "<br>" . $nombre;
    echo "&nbsp";
    
    $lastname = $_POST["lastname"];
    echo $lastname;
    echo "<br>";

    $numero_identificacion = $_POST["numero_identificacion"];

    $op1 = $_POST["op1"];
    if ($op1 == "Cedula") {
        echo "Cedula: " . "&nbsp" . $numero_identificacion;
        echo "<br>";
    } else if ($op1 == "Tarjeta_identidad") {
        echo "Tarjeta Identidad: " . "&nbsp" . $numero_identificacion;
        echo "<br>";
    } else if ($op1 == "Pasaporte") {
        echo "Pasaporte: " . "&nbsp" . $numero_identificacion;
        echo "<br>";
    }
    $email = $_POST["email"];
    echo "Correo: " . "&nbsp" . $email;
    echo "<br>";
    $phone = $_POST["phone"];
    echo "Telefono: " . "&nbsp" . $phone;
    echo "<br>";

    $Direccion = $_POST['Direccion'];
    echo "Direccion: " . "&nbsp" . $Direccion;
    echo "<br>";
    ?>

    <html>

    <head>
        <style>
            body {
                background-image: url("Img/Lld-proyector-destacada.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
        </style>



    </head>

    <body>


        <a href="navegacion.html">Pagina Principal</a>


    </body>

    </html>