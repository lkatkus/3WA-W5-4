<?php
    function changeName($name){

        $nameLength = strlen($name);

        echo "name- ".$name;
        echo "<br>length- ".$nameLength."<br>";
        $nameStart = substr($name, 0, -2);
        echo "start- ".$nameStart;

        $nameEnd = substr($name, $nameLength-2);
        echo "<br> end- ".$nameEnd;

        switch ($nameEnd) {
            case 'us':
                $newName = $nameStart.'au';
                break;

            case 'as':
                $newName = $nameStart.'ai';
                break;

            case 'is':
                $newName = $nameStart.'i';
                break;

            case 'ys':
                $newName = $nameStart.'y';
                break;

            case 'ė':
                $newName = $nameStart.'e';
                break;

            default:
                echo "derp";
                break;
        };

        // echo "<br>new- ".$newName;
        return $newName;
    }
?>
