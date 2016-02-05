<?php 
class Bod{
    private $x;
    private $y;
    
    public function __construct($x,$y){
        $this->x=$x;
        $this->y=$y;
    }
    
    public function __tostring(){
        return("[$this->x,$this->y]");
    }
    
    public function vzdalenostOdNuly(){
        return sqrt( pow((0-$this->x),2) + pow((0-$this->y),2) );
    }
    
    public function vzdalenostOdBodu($druhy){
        return sqrt( pow(($druhy->x - $this->x),2) + pow(($druhy->y - $this->y),2) );
    }
    
    public function posun($px,$py){
        $this->x = $this->x + $px;
        $this->y = $this->y + $py;
        
        return $this;
    }
}
?>