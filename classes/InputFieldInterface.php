<?php

interface InputFieldInterface {

    public function getName(): string;

    public function setName(string $name): self;

    public function getValue(): mixed;

    public function setValue(mixed $value): self;

    public function getType(): string;

    public function setType(string $type): self;

    public function getLabel(): string;

    public function setLabel(string $label): self;

}