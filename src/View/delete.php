<?php
$dba= new DBA();
$am = new ArticleManager($dba->getPDO());
$article_id = isset($_GET['id']) ? $_GET['id'] : '';

if(!$article_id){
    return;
}

$am->deleteArticle($article_id);
header


?>