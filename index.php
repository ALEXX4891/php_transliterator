<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Транслитерация текста</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php require_once './converter.php';
        $text = '';    
        
    ?> 

    <div class="container mt-3">
        <form class="input-group mb-5" name="form" action="" method="post">
            <input type="text" class="form-control" placeholder="Введите Ваш текст" id="text" name="text">
            <input class="btn btn-primary" type="submit" value="Транслителировать">
        </form>
        <p class="text-muted ">Транслитерация текста:</p>
    </div>
<?php

$text = $_POST['text'];
 
	$text = strtr($text, $converter);

?>
<div class="container mt-3"> 
    <p>
        <?php echo $text; ?>
    </p>
</div>
<?php require_once './converter.php';
?>
   
</body>
</html>









<!-- // $a = 0;
// while ($a < 100) {
//     echo $a . "<br>";  
//     $a += 3;
// }







// $var = str_replace(' ', '', $var);

// $var = "Привет мир!";

// for ($i = 0; $i < strlen($var); $i += 2) {
//    echo $var[$i] . $var[$i + 1];
// } 

// echo $var[17] . $var[18]; -->


