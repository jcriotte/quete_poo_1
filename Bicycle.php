<?php
class Bicycle {
    public string $color;
    public int $currentSpeed;
    public int $nbSeats;
    public int $nbWheels;

    public function __construct(string $color) {
        $this->color = $color;
    }
    
    public function forward(): string {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!<br>";
        }
        $sentence .= "I'm stopped !<br>";
        return $sentence;
    }
}
?>