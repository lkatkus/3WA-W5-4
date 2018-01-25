<?php
    $name=null;

    if(array_key_exists('name',$_POST)){
        $name=$_POST['name'];
        $surname=$_POST['surname'];
    };
?>

<?php if($name == null):?>
    <div class="container">
        <div class="row">
            <form action="index.view.php" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Surname</label>
                    <input type="text" class="form-control" name="surname" placeholder="Surname">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

<?php else: ?>
    <?php
        $newName = changeName($name);
        $newSurname = changeName($surname);
    ?>
    <p>Labas, <span><?php echo $newName.' '.$newSurname;?></span></p>
<?php endif;?>
