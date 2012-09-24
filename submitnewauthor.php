<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kruemel
 * Date: 19.08.12
 * Time: 11:12
 * To change this template use File | Settings | File Templates.
 */

header('content-type: application/json; charset=utf-8');

if (isset($_GET["AuthorName"])) {
    $AuthorName = strip_tags($_GET['AuthorName']);
    $AuthorLocation = strip_tags($_GET['AuthorLocation']);
    $result = 'success';

}
?>