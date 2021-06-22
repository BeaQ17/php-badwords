<?php

$paragraph = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
Tenetur, modi?";

//var_dump($_GET["word"]);

$censored = str_replace($_GET["word"], "***", $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
    <h1>badwords</h1>

    <p><?php echo $sentence; ?></p>
    <p>Lunghezza paragrafo: <?php echo strlen($paragraph) ?></p>

    <p>Paragrafo censurato: <?php echo $censored ?></p>
    <p>Lunghezza paragrafo censurato: <?php echo strlen($censored) ?></p>



</body>
</html>