<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once('db-connect.php'); ?>
    <?php require_once('nav.php'); ?>
    <div id="wrapper">
        <?php
    $book_id= $_GET['book_id'];

    $sql = 'DELETE FROM t_books WHERE book_id='.$book_id;

    if(mysqli_query($con,$sql)){
    echo 'Book '.$book_id.' has been deleted';
    }
    else{
    echo "Error deleting Book record: " . mysqli_error($con);
    }



    ?>

        <?php//Close Connection
        mysqli_close($con);
    ?>
    </div>
</body>

</html>
