<?php
require "autoload.php";

$form = new Form("post");

$form   ->addField(new InputField("userName", "text", "Nom Utilisateur"))
        ->addField(new PasswordField("pass", "Mot de passe"))
        ->addField(new InputField("role", "text", "role"))
;

$form -> add(InputField::class, ["name" => "age"]);
$form->add(InputField::class, ["name" => "firstName"]);
$form->add(InputField::class, ["name" => "lastName"]);


//$form->hydrateFromArray($_POST);


//$form->hydrateFromObject($p);

echo $form->getOpeningTag();

echo $form->getField("userName");
echo $form->getField("pass");
echo $form->getField("role");
echo $form->getField("age");
echo $form->getField("firstName");
echo $form->getField("lastName");



echo $form->getClosingTag();

var_dump($form);