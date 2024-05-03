<?php
//per recuperare il valore dai form devi scergliere un metodo (GET/POST) e poi utiliuzarli con il metodo 
$message = $_GET['message'];

$message_lenght = strlen($message);
$new_message = str_replace($message, '***', $message);
$new_message_lenght = strlen($new_message);
?>

<h1>Il Messaggio lasciato è: <?php echo $message; ?></h1>
<h2>La lunghezza del messaggio è: <?php echo $message_lenght; ?></h2>
<h3>Il nuovo messaggio è: <?php echo $new_message?></h3>
<h4>La lunghezza del nuovo messaggio è: <?php echo $new_message_lenght ?></h4>