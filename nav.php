<nav>
    <a href="show-books.php">books</a>
    <a href="show-authors.php">authors</a>
    <a href="show-publishers.php">publishers</a>
    |
    <a href="get-code.php?filename=<?php
$currentFile = $_SERVER['PHP_SELF'];
$parts = Explode('/', $currentFile);
echo $parts[count($parts) - 1]; //Get the current filename and pass it to the Get Code Page
?>">code</a>
    <!--    <a href="database-help.php">database</a>-->
</nav>
