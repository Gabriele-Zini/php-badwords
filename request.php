<?php
$paragraph = trim($_GET['paragraph']);
$censored = trim($_GET['censored']);
$censored_paragraph = str_replace($censored, "***", $paragraph);
$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="first-output">
        <p> <span>Paragrafo:</span><?php echo $censored_paragraph ?></p>
        <p><span>Lunghezza del paragrafo</span> <?php echo $censored_paragraph_length ?></p>
    </div>

</body>

</html>