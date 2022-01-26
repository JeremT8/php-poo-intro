<?php
require "autoload.php";
//require "classes/QueryBuilder.php";

$qb = new QueryBuilder();
$qb->select("id,`;DROP TABLE persons; name")
    ->from("`persons`")
    ->where("id", "=",5);

// SELECT `id`, `name` FROM persons WHERE id=5
echo "{$qb->getSQL()}\n";