<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEYNI COOKIES - REVIEW</title>
    <link rel="icon" href="Imagenes/logotipo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7e3d7;
            color: #333;
        }

        header {
            background-color: #e0e0e0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #d81b60;
        }

        .back-link {
            text-decoration: none;
            color: #d81b60;
            font-weight: bold;
        }

        .article-container-cover {
            text-align: center;
            margin: 20px;
            color: #d81b60;
        }

        .content {
            padding: 30px;
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            text-align: center;
            color: #d81b60;
        }

        .ticket-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .ticket-table td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        .ticket {
            text-align: center;
            font-size: 1.1rem;
        }

        .ticket p {
            margin: 10px 0;
            color: #555;
        }

        footer {
            background-color: #e0e0e0;
            padding: 10px;
            text-align: center;
            width: 100%;
            margin-top: 50px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-icons a {
            margin: 0 10px;
            color: #d81b60;
            font-size: 24px;
            text-decoration: none;
        }

        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        .back-button a {
            background-color: #d81b60;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-button a:hover {
            background-color: #c5114b;
        }

        hr {
            border: 1px solid #d81b60;
            margin: 20px 0;
        }
    </style>
</head>

<body>

<header>
    <div class="page-title">
        <i class="fas fa-comment-dots"></i> Enviar Opinión
    </div>
    <a href="Pagina_Principal.html" class="back-link">
        <i class="fas fa-home"></i> Volver a Inicio
    </a>
</header>

<div class="article-container-cover">
    <h1>¡Gracias por compartir tu opinión!</h1>
</div>

<div class="content">
    <table class="ticket-table">
        <tr>
            <td>
                <center>
                    <div class="ticket">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                            include("config.php");

                            if ($conexion->connect_error) {
                                die("<p style='color: red;'>Error de conexión: " . $conexion->connect_error . "</p>");
                            }

                            $numero_venta = $_POST['numero_venta'] ?? '';
                            $nombre = $_POST['nombre'] ?? '';
                            $correo = $_POST['correo'] ?? '';
                            $calificacion = $_POST['calificacion'] ?? '';
                            $opinion = $_POST['opinion'] ?? '';
                            $sugerencias = $_POST['sugerencias'] ?? '';

                            echo "<p><strong>Número de Venta:</strong> $numero_venta</p>";
                            echo "<p><strong>Nombre:</strong> $nombre</p>";
                            echo "<p><strong>Correo:</strong> $correo</p>";
                            echo "<p><strong>Calificación:</strong> $calificacion</p>";
                            echo "<p><strong>Opinión:</strong> $opinion</p>";
                            echo "<p><strong>Sugerencias:</strong> $sugerencias</p>";

                            $sql = "INSERT INTO reseñamc 
                            (Numero_Venta, Nombre, Correo_electronico, Calificacion, Opinion, Sugerencias_adicionales)
                            VALUES (?, ?, ?, ?, ?, ?)";

                            $stmt = $conexion->prepare($sql);
                            $stmt->bind_param("ssssss", $numero_venta, $nombre, $correo, $calificacion, $opinion, $sugerencias);

                            if ($stmt->execute()) {
                                echo "<p style='color: green;'>Tu opinión se ha enviado correctamente.</p>";
                            } else {
                                echo "<p style='color: red;'>Hubo un error al enviar tu opinión.</p>";
                            }

                            $stmt->close();
                            $conexion->close();
                        }
                        ?>
                    </div>
                </center>
            </td>
        </tr>
    </table>

    <div class="back-button">
        <a href="Pagina_Principal.html">Regresar a la página principal</a>
    </div>
</div>

<footer>
    <p>&copy; 2024 Meyni Cookies. Derechos reservados CECyTES "Justo Sierra".</p>

    <div class="social-icons">
        <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://tiktok.com" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</footer>

</body>
</html>