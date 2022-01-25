<?php

class InputField {
    protected string $name;
    protected string $type;
    protected string $label;
    protected string $nameValue ="";
    protected string $typeValue ="";
    protected string $labelValue ="";

    public function __construct(string $name, string $type, string $label) {
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
    }

    public function __toString() {
        return "<label for=" . $this->name . " value=>" . $this->label . "</label>
        <input type=" . $this->type . "name=" . $this->name . ">";
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of label
     */ 
    public function getLabel()
    {
        return $this->label;
    }
}