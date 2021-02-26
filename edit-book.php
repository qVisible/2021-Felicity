<html>

<head>
    <link href="style1.css" type="text/css" rel="stylesheet">
</head>

<body>
    <?php require_once('db-connect.php'); ?>
    <?php require_once('nav.php'); ?>
    <div id="wrapper">

        <?php
    $book_id=$_GET['book_id'];
    
    $sql='SELECT * FROM t_books WHERE book_id='.$book_id;
    
    $result=mysqli_query($con,$sql);
    $rowBooks=mysqli_fetch_array($result);
    ?>

        <form action="update-book.php" method="post">

            <label>title:</label> <input type="text" size="40" value="<?php echo $rowBooks['title']?>" name="title">

            <label>isbn: </label><input type="text" value="<?php echo $rowBooks['isbn']?>" name="isbn">

            <label>date published:</label> <input type="date" value="<?php echo $rowBooks['date_published']?>" name="date_published">

            <label>author: </label>

            <select name="author_fk">
                <?php
                    $sql="SELECT * FROM t_authors";
                    $result=mysqli_query($con,$sql);
                                         
                    //Get all the authors to fill the select box                     
                    while($rowAuthors=mysqli_fetch_array($result)){
                        echo '<option value="'.$rowAuthors['author_id'].'"';
                
                        //pre-select option to match user's choice
                        if($rowAuthors['author_id']==$rowBooks['author_fk']){
                            echo ' selected';
                        }
                        
                        echo '>'.$rowAuthors['author_name'].'</option>';       
                    }
                ?>
            </select>

            <label>publisher: </label>

            <select name="publisher_fk">
                <?php
                    $sql="SELECT * FROM t_publishers";
                    $result=mysqli_query($con,$sql);
                                         
                    //Get all the publishers to fill the select box                     
                    while($rowPublishers=mysqli_fetch_array($result)){
                        echo '<option value="'.$rowPublishers['publisher_id'].'"';
                
                        //pre-select option to match user's choice
                        if($rowPublishers['publisher_id']==$rowBooks['publisher_fk']){
                            echo ' selected';
                        }
                        
                        echo '>'.$rowPublishers['publisher_name'].'</option>';       
                    }
                ?>
            </select>

            <input type="hidden" name="book_id" value="<?php echo $book_id ?>">

            <input type="submit" value="Update Book">

        </form>

        <?php//Close Connection
        mysqli_close($con);
    ?>
    </div>
</body>

</html>
