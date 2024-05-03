<?php
$message = $_GET['message'];
$message_lenght = strlen($message);
$new_message = str_replace($message, '***', $message);

?>

<h1>Il Messaggio lasciato è: <?php echo $message; ?></h1>
<h2>La lunghezza del messaggio è: <?php echo $message_lenght; ?></h2>
<h3>Il nuovo messaggio è: <?php echo $new_message?></h3>