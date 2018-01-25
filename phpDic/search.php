<?php

    function search($key, $lang){


        // INCLUDE DICTIONARY
        include ('dictionary.php');

        // echo '<br>===';
        // echo $dic2['labas']['pl'];
        // echo '===';
        //
        // // SEARCH DICTIONARY
        // if(array_key_exists($key,$dic)){
        //     echo $dic[$key];
        // }elseif(in_array($key,$dic)){
        //     echo array_search($key,$dic);
        // }else{
        //     echo 'nera tokio';
        // };
        //
        // // SEARCH DICTIONARY WITH SWITCH
        // switch ($lang) {
        //     case 'lt-en':
        //         if(array_key_exists($key,$dic)){
        //             echo $dic[$key];
        //         }else{
        //             echo 'not found';
        //         }
        //         break;
        //
        //     case 'en-lt':
        //         if(in_array($key,$dic)){
        //             echo array_search($key,$dic);
        //         }else{
        //             echo 'nera';
        //         }
        //         break;
        // };


        // MULTILANGUAGUE

        switch ($lang) {
            case 'lt-en':
                if(array_key_exists($key,$dic2)){
                    echo $dic2[$key]['en'];
                }else{
                    echo 'not found';
                };
                break;

            case 'lt-ru':
                if(array_key_exists($key,$dic2)){
                    echo $dic2[$key]['ru'];
                }else{
                    echo 'not found';
                };
                break;

            case 'lt-pl':
                if(array_key_exists($key,$dic2)){
                    echo $dic2[$key]['pl'];
                }else{
                    echo 'not found';
                };
                break;


        };


    }

?>
