<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once('db-connect.php'); ?>
    <?php require_once('nav.php'); ?>
    <div id="wrapper">
        <form action="insert-author.php" method="post">
            author name: <input type="text" name="author_name"><br>
            <input type="submit" value="Create Author">
        </form>

        <?php//Close Connection
        mysqli_close($con);
    ?>
    </div>
</body>

</html>
