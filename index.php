<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>


        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="enter name">
            <br>
            <input type="text" name="mail" placeholder="email">
            <button type="submit" name="button">submit</button>

        </form>

        <?php

        $br = "<br>=========<br>";

        // $name = $_GET['name'];
        // $mail = $_GET['mail'];

        // BASED ON METHOD
        $name = $_POST['name'];
        $mail = $_POST['mail'];

        echo $name;
        echo $br;
        echo $mail;

        echo $br;
        // TO DISPLAY ERRORS IN BROWSER
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        echo "hello world <br>";

        // SETTING VARIABLES
        $a = "Variable set";
        // ADD TO SET VARIABLE
        $a .= ", really really set";
        echo $a;

        $b = 2;
        $c = 3;


        echo ($b + $c);

        if($b == $c){
            echo "EQUAL";
        }else if($b > $c){
            echo "b > c";
        }else if($b < $c){
            echo "b < c";
        }else{
            echo "FALSE";
        }

        $d = 6;

        // SWITCH STATEMENT
        switch ($d) {
            case $d < 5:
                echo "LESS";
                break;

            case $d > 7:
                echo "MORE";
                break;

            case 6:
                echo "666";
                break;

            default:
                echo "what is \"d\"? ";
                break;
        }

        echo $br;

        // FOR LOOPS
        for($i = 0;$i < 10;$i++){
            echo $i;
        }

        echo $br;

        $arr = ['audi','bmw','mazda'];
        echo $arr[1];
        echo "<br>";

        for($i=0;$i < count($arr); $i++){
            echo $arr[$i]."LALA"."BUBU";
            echo "<br>";
        }

        echo $br;

        // FOR EACH LOOP
        foreach ($arr as $reiksme){
            echo $reiksme;
        };


        $arr = [
            'Marius'=>'23', /*Marius - key, 23 - value */
            'Tomas'=>'55',
            'Petras'=>'15'
        ];

        $arr['bubulis']='12';
        array_shift($arr);
        array_unshift($arr,'Marius');

        echo $br;

        foreach ($arr as $key => $reiksme){
            echo $key.' '.$reiksme;

            echo "<br>";
        };

        echo $br;

        echo $arr['Tomas'];

        ?>

    </body>
</html>
