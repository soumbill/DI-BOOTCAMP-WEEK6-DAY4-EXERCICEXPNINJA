<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPNINJA | Day4</title>
</head>
<body>
    <h1>Exercise 1 : Union Of Two Arrays</h1>
    <?php 
        $array1 = array(1, 2, 3, 4,5);
        $array2 = array(2, 3, 4, 5, 6,7,8);

        $union_array = array_merge($array1, $array2);

        print_r($union_array);
        // foreach($union_array as $elt){

        //     echo $elt . '<br>';
        // }
    ?>
</body>
</html>