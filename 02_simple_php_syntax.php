<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SYNTAX</title>
</head>
<body>
    <p><?php 
        // Task #1
        $name = '<strong>>>>RIZALYNE CATBAGAN ASALDO</strong>'; 
        $age = '>>>21 years old';
        $address = '>>>Gen. T. De Leon, Valenzuela';
        $hobbies = '>>>Reading Fiction Novel';
        $pet_peeve = '>>>mga maiissue na person';

        echo $name, '<br>'; 
        echo $age, '<br>'; 
        echo $address, '<br>'; 
        echo $hobbies, '<br>'; 
        echo $pet_peeve, '<br>','<br>','<br>'; 


        // Task #2
        // echo $hobbies, '<br>'; 
        // echo $pet_peeve, '<br>'; 


        // Task #3
        define('NAME','<strong>RIZALYNE</strong>');
        define('AGE','21');
        define('ADDRESS','Valenzuela City');
        define('HOBBIES','Wattpad');
        define('PET_PEEVE','sila, hehe');

        echo NAME, '<br>';
        echo AGE, '<br>';
        echo ADDRESS, '<br>';
        echo HOBBIES, '<br>';
        echo PET_PEEVE, '<br>','<br>';


        // Task #4
        echo '<pre>';
        var_dump(NAME, AGE, ADDRESS, HOBBIES, PET_PEEVE);
        echo '</pre>';


        /* Task #5
        The reason why my pet peeve is mga maiissue na person kasi hilig nilanbg palakihin yung bagay na di naman dapat.
        */
        ?>
    </p>
</body>
</html>