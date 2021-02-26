<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once('db-connect.php'); ?>
    <?php require_once('nav.php'); ?>
    <div id="wrapper">

        <table>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>author</th>
                <th>publisher</th>
                <th>isbn</th>
                <th>published</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            <?php
    //put whatever code you want to execute here.

    $sql="SELECT * FROM t_books JOIN t_authors ON author_fk=author_id JOIN t_publishers ON publisher_fk=publisher_id";

    $result=mysqli_query($con,$sql);



    while ($row=mysqli_fetch_array($result)){
        echo '<tr>';
        echo '<td>'.$row['book_id'].'</td>';
        echo '<td><span id="book-title">'.$row['title'].'</span></td>';
        echo '<td>'.$row['author_name'].'</td>';
        echo '<td>'.$row['publisher_name'].'</td>';
        echo '<td>'.$row['isbn'].'</td>';
        echo '<td>'.$row['date_published'].'</td>';
        echo '<td><a href="edit-book.php?book_id='.$row['book_id'].'"><img src="edit.png" width="16px"></a></td>';
        echo '<td><a href="delete-book.php?book_id='.$row['book_id'].'"><img src="delete.ico" width="16px"></a></td>';
        echo '</tr>';
    }

    ?>

            <?php//Close Connection
        mysqli_close($con);
    ?>
        </table>

        <div id="sub-nav">

            <a href="create-book.php"><img src="add-book.png"></a>
            <div>Add Book</div>
        </div>

    </div>
    <!--End of Wrapper-->

</body>

</html>
