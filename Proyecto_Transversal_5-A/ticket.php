<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEYNI COOKIES - TICKET</title>
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
        <i class="fas fa-cookie-bite"></i> Ticket de Compra
    </div>
    <a href="Pagina_Principal.html" class="back-link">
        <i class="fas fa-home"></i> Volver a Inicio
    </a>
</header>

<div class="article-container-cover">
    <h1>¡Gracias por tu compra!</h1>
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

                            $cliente_id = $_POST["cliente_id"] ?? "";
                            $nombre = $_POST["nombre"] ?? "";
                            $apellidos = $_POST["apellidos"] ?? "";
                            $correo = $_POST["correo"] ?? "";
                            $telefono = $_POST["telefono"] ?? "";
                            $nacionalidad = $_POST["nacionalidad"] ?? "";
                            $estado = $_POST["estado"] ?? "";
                            $codigo_postal = $_POST["cp"] ?? "";
                            $colonia = $_POST["colonia"] ?? "";
                            $tipo_galleta = $_POST["tipo_galleta"] ?? "";
                            $cantidad = $_POST["cantidad"] ?? "";
                            $iva = $_POST["iva"] ?? "";
                            $total = $_POST["total"] ?? "";
                            $contacto_emergencia = $_POST["contacto_emergencia"] ?? "";
                            $comentarios = $_POST["comentarios"] ?? "";

                            echo "<p><strong>Cliente ID:</strong> $cliente_id</p>";
                            echo "<p><strong>Nombres:</strong> $nombre</p>";
                            echo "<p><strong>Apellidos:</strong> $apellidos</p>";
                            echo "<p><strong>Correo electrónico:</strong> $correo</p>";
                            echo "<p><strong>Teléfono:</strong> $telefono</p>";
                            echo "<p><strong>Nacionalidad:</strong> $nacionalidad</p>";
                            echo "<p><strong>Estado:</strong> $estado</p>";
                            echo "<p><strong>Código Postal:</strong> $codigo_postal</p>";
                            echo "<p><strong>Colonia:</strong> $colonia</p>";
                            echo "<p><strong>Tipo de Galleta:</strong> $tipo_galleta</p>";
                            echo "<p><strong>Cantidad:</strong> $cantidad</p>";
                            echo "<p><strong>IVA:</strong> $iva</p>";
                            echo "<p><strong>Total:</strong> $total</p>";
                            echo "<p><strong>Contacto de Emergencia:</strong> $contacto_emergencia</p>";
                            echo "<p><strong>Comentarios:</strong> $comentarios</p>";

                            $sql = "INSERT INTO ordenmc 
                            (Cliente_ID, Nombres, Apellidos, Correo_electronico, Telefono, Nacionalidad, Estado, Codigo_postal, Colonia, Tipo_de_Galleta, Cantidad, IVA, Total, Contacto_de_emergencia, Comentarios)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                            $stmt = $conexion->prepare($sql);
                            $stmt->bind_param(
                                "issssssssssssss",
                                $cliente_id,
                                $nombre,
                                $apellidos,
                                $correo,
                                $telefono,
                                $nacionalidad,
                                $estado,
                                $codigo_postal,
                                $colonia,
                                $tipo_galleta,
                                $cantidad,
                                $iva,
                                $total,
                                $contacto_emergencia,
                                $comentarios
                            );

                            if ($stmt->execute()) {
                                echo "<p style='color: green;'>Pedido realizado</p>";
                            } else {
                                echo "<p style='color: red;'>Su pedido no se pudo realizar correctamente</p>";
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