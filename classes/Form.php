<?php

class Form {
    private string $method;
    private string $action;
    private array $fields = [];


    public function __construct(string $method, string $action = "") {
        $this->method = $method;
        $this->action = $action;
    }
    public function getOpeningTag() { 
        $html ="<form method=\"{$this->method}\" ";
        if (! empty($this->action)) {
            $html .= " action=\"{$this->action}\" ";
        }
        $html .= ">";
        return $html;
    }
    public function getClosingTag() { 
        return "</form>";
    }
    public function addField(InputField $field) {
        // $html ="<div>
        //     <label for=" . $inputField->getName() . ">" . $inputField->getName() . "</label>
        //     <input type=" . $inputField->getType() . "name=" . $inputField->getName() . "></input>
        // </div>";
        // array_push($this->fields, $html);

        $this->fields[$field->getName()] = $field;
        return $this;
    }

    public function getField(string $name) {
        if (array_key_exists($name, $this->fields)) {
            return "<div>" . $this->fields[$name] . "</div>";
        } else {
            throw new Exception("La clé $name n'existe pas");
        }
        
    }
    
    public function hydrateFromArray($tabs) {
        
    }  















    // public function getFields() {
    //     $html ="";
    //     foreach ($this->fields as $f) {
    //         $html .= $f;
    //     }
    //     return $html;
    // }
}

