<?php
//per recuperare il valore dai form devi scergliere un metodo (GET/POST) e poi utiliuzarli con il metodo 
$message = $_GET['paragrafo'];

$message_lenght = strlen($message);
$new_message = str_replace('appennini', '***', $message);
$new_message_lenght = strlen($new_message);
?>



<div>
    <p>
        il messaggio è:

    </p>
    <?php echo $message;?>
</div>
<p>
   la lunghezza del messaggio è:  <?php echo $message_lenght; ?> caratteri
</p>
<div>
    <p>
        Il novo messaggio è:
        
    </p>
    <?php echo $new_message?>
</div>
<div>
    <p>
        La lunghezza del nuovo paragrafo è:
        <?php echo $new_message_lenght; ?>
        caratteri
    </p>
</div>