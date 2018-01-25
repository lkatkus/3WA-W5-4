<?php

    function search($key, $lang){

        // INCLUDE DICTIONARY
        include ('dictionary.php');

        // SEARCH DICTIONARY
        if(array_key_exists($key,$dic)){
            echo $dic[$key];
        }elseif(in_array($key,$dic)){
            echo array_search($key,$dic);
        }else{
            echo 'nera tokio';
        };

        echo '<br>';

        // SEARCH DICTIONARY WITH SWITCH
        switch ($lang) {
            case 'lt-en':
                if(array_key_exists($key,$dic)){
                    echo $dic[$key];
                }else{
                    echo 'not found';
                }
                break;

            case 'en-lt':
                if(in_array($key,$dic)){
                    echo array_search($key,$dic);
                }else{
                    echo 'nera';
                }
                break;
        }
    }

?>
