<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once('db-connect.php'); ?>
    <?php require_once('nav.php'); ?>
    <div id="wrapper">
        <?php
        $title=$_POST['title'];
        $isbn=$_POST['isbn'];
        $date_published=$_POST['date_published'];
        $author_fk=$_POST['author_fk'];
        $publisher_fk=$_POST['publisher_fk'];


        $sql='INSERT INTO t_books (title, isbn, date_published, author_fk, publisher_fk)
        VALUES ("'.$title.'", "'.$isbn.'","'.$date_published.'",'.$author_fk.','.$publisher_fk.')';

        if(mysqli_query($con,$sql)){
            echo 'New Book Created: '.$title;
        }
        else{
            echo "Error creating book record: " . mysqli_error($con);
        }



    ?>

        <?php//Close Connection
        mysqli_close($con);
    ?>
    </div>
</body>

</html>
