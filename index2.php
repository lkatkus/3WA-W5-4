<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP form test</title>
        <style media="screen">
            input{
                display: block;
            }
            span{
                text-transform: capitalize;
            }
        </style>
    </head>
    <body>
        <?php
        $name=null;

        if(array_key_exists('name',$_POST)){
            $name=$_POST['name'];
            $surname=$_POST['surname'];
        };
        ?>

        <?php if($name == null):?>
        <form action="index2.php" method="post">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="text" name="surname" placeholder="Enter your surname">
            <input type="text" name="mail" placeholder="Enter your Email">
            <button type="submit" name="button">Submit</button>
        </form>

        <?php elseif($name == 'krabas'): ?>
                <p>KRABASSSSSS</p>
                <?php echo $_POST['name'] ?>

        <?php else: ?>
            <p>Labas, <span><?php echo $name.' '.$surname;?></span></p>

        <?php endif;?>


        <?php
            if(array_key_exists('name',$_POST)){
                $name=$_POST['name'];
                $surname=$_POST['surname'];
                echo $name.' '.$surname;
                echo '<a href="index2.php">Atgal</a>';
            }else{
                echo '
                    <form action="index2.php" method="post">
                        <input type="text" name="name" placeholder="Enter your name">
                        <input type="text" name="surname" placeholder="Enter your surname">
                        <input type="text" name="mail" placeholder="Enter your Email">
                        <button type="submit" name="button">Submit</button>
                    </form>
                ';
            }
        ?>




    </body>
</html>
