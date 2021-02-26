<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once('db-connect.php'); ?>
    <?php require_once('nav.php'); ?>
    <div id="wrapper">
        <?php
    //put whatever code you want to execute here.

    $sql="SELECT * FROM t_publishers";

    $result=mysqli_query($con,$sql);



    while ($row=mysqli_fetch_array($result)){
        echo '<div>';
        echo 'id: '.$row['publisher_id'].'<br>';
        echo '<span id="book-title">'.$row['publisher_name'].'</span><br>';
        echo '</div>';
    }

    ?>

        <?php//Close Connection
        mysqli_close($con);
    ?>
    </div>
</body>

</html>
