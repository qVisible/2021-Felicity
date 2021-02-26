<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once('db-connect.php'); ?>
    <?php require_once('nav.php'); ?>
    <div id="wrapper">
        <?php
        $author_name=$_POST['author_name'];
        
        $sql='INSERT INTO t_authors (author_name)
        VALUES ("'.$author_name.'")';

        if(mysqli_query($con,$sql)){
            echo 'New Author Created: '.$author_name;
        }
        else{
            echo "Error creating author record: " . mysqli_error($con);
        }



    ?>

        <?php//Close Connection
        mysqli_close($con);
    ?>
    </div>
</body>

</html>
