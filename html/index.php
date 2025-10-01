<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte 8 - LAMP amb Docker</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            max-width: 800px;
            width: 100%;
        }
        h1 {
            color: #667eea;
            margin-bottom: 30px;
            font-size: 2.5em;
            text-align: center;
        }
        .info-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            border-left: 5px solid #667eea;
        }
        .success {
            color: #28a745;
            font-weight: bold;
            font-size: 1.2em;
        }
        .error {
            color: #dc3545;
            font-weight: bold;
            font-size: 1.2em;
        }
        .detail {
            margin: 10px 0;
            color: #495057;
        }
        .detail strong {
            color: #212529;
        }
        hr {
            margin: 30px 0;
            border: none;
            border-top: 2px solid #e9ecef;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #6c757d;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Hola món!</h1>
       
        <div class="info-box">
            <?php
            // Configuració de connexió
            $host = 'db';
            $user = 'usuari';
            $password = 'contrasenya';
            $database = 'exemple';
           
            // Intentar connexió
            $connexio = mysqli_connect($host, $user, $password, $database);
           
            // Comprovar connexió
            if ($connexio) {
                echo '<p class="success">✓ Connexió a la base de dades correcta</p>';
                echo '<div class="detail"><strong>Base de dades:</strong> ' . $database . '</div>';
                echo '<div class="detail"><strong>Servidor:</strong> ' . $host . '</div>';
                echo '<div class="detail"><strong>Usuari:</strong> ' . $user . '</div>';
               
                // Informació addicional de MySQL
                $result = mysqli_query($connexio, "SELECT VERSION() as version");
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    echo '<div class="detail"><strong>MySQL Version:</strong> ' . $row['version'] . '</div>';
                }
               
                mysqli_close($connexio);
            } else {
                echo '<p class="error">✗ Error de connexió: ' . mysqli_connect_error() . '</p>';
            }
            ?>
        </div>
       
        <hr>
       
        <h2 style="color: #495057; margin-bottom: 20px;">ℹ️ Informació del Sistema</h2>
        <div class="info-box">
            <div class="detail"><strong>PHP Version:</strong> <?php echo phpversion(); ?></div>
            <div class="detail"><strong>Servidor Web:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']; ?></div>
            <div class="detail"><strong>Sistema Operatiu:</strong> <?php echo PHP_OS; ?></div>
            <div class="detail"><strong>Data i Hora:</strong> <?php echo date('d/m/Y H:i:s'); ?></div>
        </div>
       
        <div class="footer">
            <p>Projecte 8 - Implantació d'Aplicacions Web</p>
            <p>ASIX - Institut Julio Antonio</p>
        </div>
    </div>
</body>
</html>
