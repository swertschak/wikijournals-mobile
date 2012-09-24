<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kruemel
 * Date: 06.08.12
 * Time: 17:18
 * To change this template use File | Settings | File Templates.
 */
header('content-type: application/json; charset=utf-8');

if (isset($_GET["name"])) {
    $name = strip_tags($_GET['name']);
    $email = strip_tags($_GET['email']);
    $subject = strip_tags($_GET['subject']);
    $mailtext = strip_tags($_GET['mailtext']);
    $header = "Von: ". name . " <" . $email . ">rn";

    $empfaenger = 'krumrueck@myjournals.de';
    $titel = 'Das Kontaktformular wurde ausgeführt';
    $mailbody = "
	Name: $name
	E-Mail: $email
	Betreff: $subject
	Mailtext: $mailtext
	";
    $result = 'success';

    if (mail($empfaenger, $titel, $mailbody, $header)) {
        echo json_encode($result);
    }
}
?>