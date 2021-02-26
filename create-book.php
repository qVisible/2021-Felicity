<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once('db-connect.php'); ?>
    <?php require_once('nav.php'); ?>
    <div id="wrapper">
        <form action="insert-book.php" method="post">
            <label>title:</label> <input type="text" name="title">
            <label>isbn: </label><input type="text" name="isbn">
            <label>date published:</label> <input type="date" name="date_published">
            <label>author:</label>

            <select name="author_fk">
                <?php
                    $sql="SELECT * FROM t_authors";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                        echo '<option value="'.$row['author_id'].'">'.$row['author_name'].'</option>';       
                    }
                ?>
            </select>

            <!--            <input type="text" name="author_fk">-->
            <label>publisher: </label>

            <select name="publisher_fk">
                <?php
                    $sql="SELECT * FROM t_publishers";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result)){
                        echo '<option value="'.$row['publisher_id'].'">'.$row['publisher_name'].'</option>';       
                    }
                ?>
            </select>

            <input type="submit" value="Create Book">

        </form>

        <?php//Close Connection
        mysqli_close($con);
    ?>

    </div>

</body>

</html>
