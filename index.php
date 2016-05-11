<html>
 <head>
  <title>DEMO AZURE WEB APP</title>
 </head>
 <body>
 <?php 
 echo '<p>HELLO FLORIPA</p>'; 
 $VALOR = getenv('AMBIENTE');
 echo $VALOR;
 ?> 
 </body>
</html>
