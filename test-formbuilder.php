<?php
require "autoload.php";

$form = new Form("post", "action");

$form->addField(new InputField("userName", "text", "Nom Utilisateur"))
->addField(new PasswordField("pass", "Mot de passe"))
->addField(new InputField("role", "text", "Role"));

$form->hydrateFromArray([
    "userName" => "bob", "pass" => "123", "role" => "user"
]);

echo $form->getOpeningTag();
echo $form->getField("userName");
echo $form->getField("pass");
echo $form->getField("role");
echo $form->getClosingTag();