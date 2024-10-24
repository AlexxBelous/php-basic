<?php
use myfrm\Db;

/**
 * @var Db $db
 */

$db_config = require CONFIG . '/db.php';
$db = (Db::getInstance())->getConnection($db_config);

$posts = $db->query("select * from posts order by id desc")->findAll();
$recent_posts = $db->query("select * from posts order by id desc limit 3")->findAll();



require_once VIEWS . '/index.tpl.php';