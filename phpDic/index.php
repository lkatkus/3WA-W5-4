<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP DICTIONARY</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <?php include('search.php') ?>

        <div class="container py-3">
            <div class="row">
                <div class="col-6">
                    MEGA DICTIONARY
                </div>
            </div>

            <div class="row py-3">
                <div class="col-6">
                    <form action="index.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="searchKey" placeholder="Enter word">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="lang">
                                <option value="lt-en">Lithuanian to English</option>
                                <option value="en-lt">English to Lithuanian</option>
                            </select>
                        </div>
                        <button type="submit" name="button">Search</button>
                    </form>
                </div>

                <div class="col-6">

                    <?php
                    $key = null;
                    if($key==null){
                        if(array_key_exists('searchKey',$_GET)){
                            $key=$_GET['searchKey'];
                            $lang=$_GET['lang'];
                        }
                    }else{
                        search($key, $lang);
                    }

                    ?>


                    <?php
                        $key=null;
                        if(array_key_exists('searchKey',$_GET)){
                            $key=$_GET['searchKey'];
                            $lang=$_GET['lang'];
                        }
                    ?>

                    <?php if($key):?>
                        <?php search($key, $lang);?>
                    <?php endif;?>

                </div>
            </div>

        </div>



    </body>
</html>
