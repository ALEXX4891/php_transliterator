<?
    $files = glob("./photos/*.{jpg,png,jpeg,png}", GLOB_BRACE);
    if (isset($_POST['copyImage'])) {    
            foreach($files as $file) {
                $dirname    = dirname( $file ).DIRECTORY_SEPARATOR;
                $filename   = pathinfo( $file, PATHINFO_FILENAME );
                $extension  = pathinfo( $file, PATHINFO_EXTENSION );
                 copy($file, $dirname . 'new_' . $filename . '.' . $extension);
        }
        header('location: /');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои фоточки</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
        <div class="container" style="display: flex; justify-content: center; flex-direction: row; flex-wrap: wrap; gap: 10px;">
    <? 
        foreach($files as $key => $file) {
            if ($key != 0 && $key % 4 == 0) {
                echo '<br>';
            }
            echo '<img width="250" height="250" src=' . $file . ' alt=' . $file . ' >';
        }
    ?>
        </div>;

        <div class="container d-flex justify-content-center">
            <form action="#" method="POST">
                <input class="btn btn-primary" name="copyImage" type="submit" value="Скопировать изображения" />
            </form>
        </div>

    

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


