<?php

$paragrafo=" Ciao, come stai? ";
$parametro1 = $_GET["parametro1"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    

<p>

<?php echo $paragrafo;
 $paragrafoDopoTrim = trim ($paragrafo);
?>

</p>

<p>
    La lunghezza del paragrafo prima del trim è: <?php echo strlen($paragrafo);?>
</p>

<p>
    La lunghezza del paragrafo dopo il trim è: <?php echo strlen($paragrafoDopoTrim);?>
</p>

<form methods="GET">
    <input type="text" name="parametro1">
    <button type="submit">INVIA</button>
    <?php echo str_replace($parametro1, '***', $paragrafo);
    
    ?>
</form>

</body>
</html>