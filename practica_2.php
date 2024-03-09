<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1d1717;
            color: white;
        }
        form {
            background-color: #fff;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px black;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: wheat;
            font-weight: bold;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        fieldset {
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        legend {
            font-weight: bold;
            margin-bottom: 10px;
            color: black;
        }
        .form-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .form-control {
            margin-top: 3px;
        }
    </style>
</head>
<body>

    <h1>Formulario de Registro</h1>

    <form method="post" action="">
        <fieldset>
            <legend>Información General</legend>
            <div class="form-group">
                <div class="form-control">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
                </div>
                <div class="form-control">
                    <label for="apellido_paterno">Apellido Paterno:</label>
                    <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido Paterno">
                </div>
                <div class="form-control">
                    <label for="apellido_materno">Apellido Materno:</label>
                    <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Apellido Materno">
                </div>
            </div>
            <div class="form-group">
                <div class="form-control">
                    <label for="usuario">Nombre de Usuario:</label>
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                </div>
                <div class="form-control">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
                </div>
                <div class="form-control">
                    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Datos de Facturación</legend>
            <div class="form-group">
                <div class="form-control">
                    <label for="pais">País:</label>
                    <select id="pais" name="pais" >
                        <option value="México">México</option>
                        <option value="Canada">Canadá</option>
                        <option value="USA">Estados Unidos</option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="ciudad">Ciudad:</label>
                    <select id="ciudad" name="ciudad" >
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Matehuala">Matehuala</option>
                        <option value="Cd. Valles">Ciudad Valles</option>
                    </select>
                </div>
                <div class="form-control">
                    <label for="calle">Calle:</label>
                    <input type="text" name="calle" id="calle" placeholder="Calle" >
                </div>
            </div>
            <div class="form-group">
                <div class="form-control">
                    <label for="numero_casa">Número de Casa:</label>
                    <input type="text" name="numero_casa" id="numero_casa" placeholder="Número de Casa" >
                </div>
                <div class="form-control">
                    <label for="colonia">Colonia:</label>
                    <input type="text" name="colonia" id="colonia" placeholder="Colonia">
                </div>
                <div class="form-control">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" name="email" id="email" placeholder="Correo Electrónico">
                </div>
            </div>
            <div class="form-group">
                <div class="form-control">
                    <label for="rfc">R.F.C:</label>
                    <input type="text" name="rfc" id="rfc" placeholder="R.F.C">
                </div>
                <div class="form-control">
                    <label for="cp">C.P:</label>
                    <input type="text" name="cp" id="cp" placeholder="Código Postal">
                </div>
            </div>
        </fieldset>

        <div>
            <input type="submit" name="enviar" value="Enviar">
            <input type="reset" name="limpiar" value="Limpiar">
        </div>
    </form>

    <?php //Forma para imprimir los datos registrados en la parte del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Información enviada:</h2>";
        echo "<p>Nombre: " . $_POST["nombre"] . "</p>";
        echo "<p>Apellido Paterno: " . $_POST["apellido_paterno"] . "</p>";
        echo "<p>Apellido Materno: " . $_POST["apellido_materno"] . "</p>";
        echo "<p>Nombre de Usuario: " . $_POST["usuario"] . "</p>";
        echo "<p>Contraseña: " . $_POST["contraseña"] . "</p>";
        echo "<p>Fecha de Nacimiento: " . $_POST["fecha_nacimiento"] . "</p>";
        echo "<p>País: " . $_POST["pais"] . "</p>";
        echo "<p>Ciudad: " . $_POST["ciudad"] . "</p>";
        echo "<p>Calle: " . $_POST["calle"] . "</p>";
        echo "<p>Número de Casa: " . $_POST["numero_casa"] . "</p>";
        echo "<p>Colonia: " . $_POST["colonia"] . "</p>";
        echo "<p>Correo Electrónico: " . $_POST["email"] . "</p>";
        echo "<p>R.F.C: " . $_POST["rfc"] . "</p>";
        echo "<p>C.P: " . $_POST["cp"] . "</p>";
    }
    ?>

</body>
</html>


