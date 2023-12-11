<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои фоточки</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
        <!-- <div class="container" style="display: flex; justify-content: center; flex-direction: row; flex-wrap: wrap; gap: 10px;"> -->
    <? 
        $nums = range(1,10);

        // первая строка
        echo " <table>";
        for ($i = 1; $i <= 10; $i++)
        {
            echo "";
            for ($j = 1; $j <= 10; $j++)
            {
                $result = $i * $j;
                echo "";
            }
            echo "";
        }
        echo "
        $i * $j = $result
        ";
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


