<?php

    function search($key, $langFrom, $langTo){


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

        // switch ($lang) {
        //     case 'lt-en':
        //         if(array_key_exists($key,$dic2)){
        //             echo $dic2[$key]['en'];
        //         }else{
        //             echo 'not found';
        //         };
        //         break;
        //
        //     case 'lt-ru':
        //         if(array_key_exists($key,$dic2)){
        //             echo $dic2[$key]['ru'];
        //         }else{
        //             echo 'not found';
        //         };
        //         break;
        //
        //     case 'lt-pl':
        //         if(array_key_exists($key,$dic2)){
        //             echo $dic2[$key]['pl'];
        //         }else{
        //             echo 'not found';
        //         };
        //         break;
        //
        //
        // };



        // if(array_key_exists($key,$dic2)){
        //     if(in_array($key,$dic2) == false){
        //         echo $key.' '.$dic2[$key][$langTo];
        //     }else{
        //         echo 'lol';
        //     }
        // }else{
        //     echo 'not found';
        // };

        // MAIN LANGUAGE?

        // foreach ($dic2 as $reiksme){
        //     echo (array_values($reiksme)).'<br>';
        //     foreach ($reiksme as $reiksme2){
        //         if($key == $reiksme2){
        //             echo '!!!!!!'.$reiksme2.'<br>';
        //         }else{
        //             echo $reiksme2.'<br>';
        //         }
        //     };
        // };

        if(array_key_exists($key,$dic2)){
            echo $dic2[$key][$langTo];
        }else{
            // FIND IF THE MAIN WORD ARRAY
            foreach ($dic2 as $i){
                foreach ($i as $j){
                    if($key == $j){
                        $mainKey = $i; /* MAIN ARRAY FOR WORD; */
                        $langEnter = array_search($key,$i); /* LANGUAGE OF ENTERED WORD */
                    }
                };
            };
            if($langTo == 'lt'){
                echo array_search($mainKey,$dic2);
            }else{
                echo $dic2[$mainKey][$langTo]; /* NOT WORKING... */
                echo $mainKey[$langTo];
            }
        };
    };

?>
