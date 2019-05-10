<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yume</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <script src="js/custom.js"></script>
</head>
<body>
    <?php

        $name = $_POST["name"];
        $email = $_POST["email"];
        $address = $_POST["email"];
        $content = $_POST["content"];
        $for = "contacto@yume.cl";
        $subjet = $name . "Te ha escrito a través de barbafuerte.com";
        $message = $name . "," . $email . "Se ha contacatado:" .
            $content
            ;
        mail($for, $asunto, utf8_decode($message));
        mail(to, subject, message);
        echo "<p>mensaje enviado</p>";
    ?>
</body>
</html>