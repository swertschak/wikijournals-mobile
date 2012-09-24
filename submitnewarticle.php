<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kruemel
 * Date: 19.08.12
 * Time: 11:12
 * To change this template use File | Settings | File Templates.
 */

header('content-type: application/json; charset=utf-8');

if (isset($_GET["ArticleTitle"])) {
    $ArticleTitle = strip_tags($_GET['ArticleTitle']);
    $ArticleRubric = strip_tags($_GET['ArticleRubric']);
    $PublicationTitle = strip_tags($_GET['PublicationTitle']);
    $ArticleYear = strip_tags($_GET['ArticleYear']);
    $PublicationIssue = strip_tags($_GET['PublicationIssue']);
    $AuthorName = strip_tags($_GET['AuthorName']);

    $result = 'success';

}
?>