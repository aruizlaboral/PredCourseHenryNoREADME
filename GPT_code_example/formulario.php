

<html>
<head>
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>

    <form action="contacto.php" method="post">

        <label for="nombre">Nombre:</label><br />
        <input type="text" name="nombre" id="nombre" /><br />

        <label for="email">Email:</label><br />
        <input type="text" name="email" id="email" /><br />

        <label for="mensaje">Mensaje:</label><br />
        <textarea name="mensaje" id="mensaje"></textarea><br />

        <input type="submit" value="Enviar Mensaje"/>

    </form>
</body>
</html> 


<?php 
if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['mensaje'])){ 

    $nombre = $_POST['nombre']; 
    $email = $_POST['email']; 
    $mensaje = $_POST['mensaje']; 

    if(!empty($nombre) && !empty($email) && !empty($mensaje)){ 

        //aquí va el código para enviar el correo electrónico 

        echo 'Mensaje enviado correctamente'; 

    }else{ 

        echo 'Por favor, rellene todos los campos'; 

    } 
}else{ 

    echo 'Por favor, rellene el formulario';  
}  
?>