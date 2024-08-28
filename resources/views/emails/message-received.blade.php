<html>
    <head>
        <title>Mensaje recibido</title>        
    </head>
    <body>
        <p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
        <p><strong>Asunto: {{ $msg['subject'] }}</strong></p>
        <p><strong>Contenido: {{ $msg['content'] }}</strong></p>
    </body>
</html