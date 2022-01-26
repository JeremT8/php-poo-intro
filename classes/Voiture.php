<?php

class MovableStuff {
    protected int $x;

    protected int $y;

    protected array $orientation = [
        ["name" => "Nord", "axis" => "y", "sign" => "+"],
        ["name" => "Est", "axis" => "x", "sign" => "+"],
        ["name" => "Sud", "axis" => "y", "sign" => "-"],
        ["name" => "Ouest", "axis" => "x", "sign" => "-"],
    ];

    protected int $currentOrientationIndex = 0;

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX(int $x)
    {
        $this->checkCoordinate($x);
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->checkCoordinate($y);
        $this->y = $y;
    }

    private function checkCoordinate(int $value)
    {
        if ($value < 0) {
            throw new InvalidArgumentException("les coordonnées ne peuvent être négatives");
        }
    }

    public function turn()
    {
        $isLastIndex = $this->currentOrientationIndex == count($this->orientation) - 1;

        if ($isLastIndex) {
            $this->currentOrientationIndex = 0;
        } else {
            $this->currentOrientationIndex++;
        }
    }

    public function move(int $distance)
    {
        $axis = $this->orientation[$this->currentOrientationIndex]["axis"];
        $sign = $this->orientation[$this->currentOrientationIndex]["sign"];

        if ($sign === "-") {
            $distance = -$distance;
        }

        if ($this->$axis < abs($distance)) {
            $this->$axis = 0;
        } else {
            $this->$axis += $distance;
        }

    }

}

class Voiture extends MovableStuff 
{

    public function __construct(int $x, int $y)
    {
        $this->setX($x);
        $this->setY($y);
    }

    public function __destruct()
    {
        var_dump("la voiture est détruite");
    }

    public function __toString()
    {
        return "x= {$this->x}, y= {$this->y} orientation : {$this->orientation[$this->currentOrientationIndex]["name"]}";
    }
    
}

class Bateau extends MovableStuff {

    public function __construct(int $x, int $y)
    {
        $this->setX($x);
        $this->setY($y);
    }

    public function __toString()
    {
        return "Je vogue sur les flots et ma position est : x= {$this->x}, y= {$this->y} orientation : {$this->orientation[$this->currentOrientationIndex]["name"]}";
    }

}
