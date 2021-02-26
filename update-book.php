<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <meta http-equiv="refresh" content="1;URL='show-books.php'">
</head>

<body>
    <?php require_once('db-connect.php'); ?>
    <?php require_once('nav.php'); ?>
    <div id="wrapper">
        <?php
        $book_id=$_POST['book_id'];
        $title=$_POST['title'];
        $isbn=$_POST['isbn'];
        $date_published=$_POST['date_published'];
        $author_fk=$_POST['author_fk'];
        $publisher_fk=$_POST['publisher_fk'];


        $sql='UPDATE t_books SET title="'.$title.'", isbn="'.$isbn.'", date_published="'.$date_published.'", author_fk='.$author_fk.', publisher_fk='.$publisher_fk.' WHERE book_id='.$book_id;


        if(mysqli_query($con,$sql)){
            echo 'Successful Update - '.$title. ' record has been succesfully updated.';
        }
        else{
            echo "Error updating record: " . mysqli_error($con);
        }



    ?>

        <?php//Close Connection
        mysqli_close($con);
    ?>
    </div>
</body>

</html>
