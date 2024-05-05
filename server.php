<?php
//per recuperare il valore dai form devi scergliere un metodo (GET/POST) e poi utiliuzarli con il metodo 
$message = $_GET['paragrafo'];
$censure = $_GET['censure'];
$message_lenght = strlen($message);
$new_message = str_replace($censure, '***', $message, $count);

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
        Il numero di censure è :
        <?php echo $count; ?>
       
    </p>
</div>