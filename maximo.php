<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&amp;display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <?php var_dump( $_POST ) ?>
  <div>Esto es una pagina del cliente </div>
  <form id="maximo-widget" action="" method="post" publicKey="wqLNc6OB1uqkuJWV0xD98G93WhEb3AkY6kpZ" amount=19.32 currency="PEN"></form>
  <script src="https://maximo-widget.s3.amazonaws.com/widget.js"></script>
  

  
  <button onclick="run()">REALIZAR EL PAGO</button>
 <script>
   function run() {
      window.Maximo.run()
    }

  </script>
</body>
</html>