<?php

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$url = $_POST["url"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$submit = $_POST["submit"];

require "validator.php";
$validator = new Validator();

if (isset($submit)) {

    $validFirstName = $validator->string($firstname);
    $validLastName = $validator->string($lastname);
    $validEmail = $validator->email($email);
    $validPhone = $validator->int($phone);
    $validUrl = $validator->url($url);
    $validSubject = $validator->string($subject);
    $validMessage = $validator->string($message);

    try {

        $pdo = new PDO('mysql:host=localhost;dbname=form;charset=utf8', 'root', 'root');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $data = $pdo->prepare("INSERT INTO data (firstname, lastname, email, phone, url, subject, message) VALUES (:firstname, :lastname, :email, :phone, :url, :subject, :message)");

        $data->bindParam(":firstname", $validFirstName);
        $data->bindParam(":lastname", $validLastName);
        $data->bindParam(":email", $validEmail);
        $data->bindParam(":phone", $validPhone);
        $data->bindParam(":url", $validUrl);
        $data->bindParam(":subject", $validSubject);
        $data->bindParam(":message", $validMessage);

        $data->execute();

        // if ($pdo->query($data)) {
        //     echo "<script type='text/javascript'>alert('Nouvelles données correctement envoyées.');</script>";
        // } else {
        //     echo "<script type='text/javascript'>alert('Erreur');</script>";
        // }
        header('Location: index.php');
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

    $pdo = null;
}
