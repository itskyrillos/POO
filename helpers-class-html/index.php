<!DOCTYPE html>
<html lang="en">
<?php
require "html.php";
$html = new Html();
?>

<head>
    <?php
    echo $html->meta();
    echo $html->stylesheet();
    ?>

</head>

<body>
    <h1>It works!</h1>

    <?php
    echo $html->img();
    echo $html->link();
    echo $html->javascript();
    ?>
</body>

</html>