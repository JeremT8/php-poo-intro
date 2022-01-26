<?php

class InputField implements InputFieldInterface {

    protected string $name;

    protected string $type;

    protected string $label;

    protected mixed $value = "";

    public function __construct(string $name = "", 
                                string $type = "text", 
                                string $label = ""){
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
    }

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    public function __toString()
    {
        return "<label for=\"{$this->name}\">{$this->label}</label>
                <input type=\"{$this->type}\" name=\"{$this->name}\"
                value=\"{$this->value}\">";
    }

    /**
     * Get the value of value
     */ 
    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * Set the value of value
     *
     * @return  self
     */ 
    public function setValue(mixed $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of label
     */ 
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */ 
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }
}