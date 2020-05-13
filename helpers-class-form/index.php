<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form OOP</title>
</head>

<body>

    <h1>Ceci est un formulaire avec class</h1>

    <?php
    require "form.php";

    $form = new Form();

    echo $form->openForm("POST", "send.php");
    echo $form->input();
    echo $form->select();
    echo $form->submit();
    echo $form->textarea();
    echo $form->radio();
    echo $form->checkbox();
    echo $form->closeForm();
    ?>
</body>

</html>