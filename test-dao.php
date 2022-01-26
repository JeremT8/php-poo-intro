<?php
require "autoload.php";

$pdo = new PDO(
    "mysql:host=localhost;dbname=formation_cda_2022;charset=utf8",
    "root", "",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$dao = new PersonDAO($pdo);

echo $dao->snakeToCamelCase("prix_du_pain");

try {
    var_dump(
        $dao->find(["address_id" => "1"], ["last_name"=>"DESC"])->getAllAsObject()
    );

}catch(PDOException $ex){
    echo $ex->getMessage();
} catch(NotFoundException $ex){
    echo "<div>Il n'y a pas de résultats</div>";
}

