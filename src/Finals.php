<?php
class Finals
{
    private $num;
    
    public function __construct($num)
    {
        $this->num = $num;
    }

    public function mod($divisor) 
    {
        if($divisor > $this->num)
        {
            throw new \InvalidArgumentException("Divisor should be greater than dividend");
        }
        else if(!is_numeric($divisor)) 
        {
            throw new \InvalidArgumentException("Divisor is not a number");
        }

        return $this->num % $divisor;
    }
}