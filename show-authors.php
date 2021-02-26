<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once('db-connect.php'); ?>
    <?php require_once('nav.php'); ?>
    <div id="wrapper">
        <a href="create-author.php">Add Author</a><br>
        <?php
    //put whatever code you want to execute here.

    $sql="SELECT * FROM t_authors";

    $result=mysqli_query($con,$sql);



    while ($row=mysqli_fetch_array($result)){
        echo '<div>';
        echo 'id: '.$row['author_id'].'<br>';
        echo '<span id="author-name">'.$row['author_name'].'</span><br>';
        echo '</div>';
    }

    ?>

        <?php//Close Connection
        mysqli_close($con);
    ?>
    </div>
</body>

</html>
