<?php

class Finals2
{
    private $name;
    private $age;
    private $favcolor;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setFavColor($favcolor)
    {
        $this->favcolor = $favcolor;
    }

    public function setTogetherInput($name,$age,$favcolor)
    {
        $this->name = $name;
        $this->age = $age;
        $this->favcolor = $favcolor;

    }


    public function getName()
    {
        if(!ctype_alpha($this->name))
        {
            throw new \InvalidArgumentException('Alphabet is required as an entry');
        }
        return $this->name;
    }

    

    public function getAge()
    {
        if(!is_numeric($this->age))
        {
            throw new \InvalidArgumentException('Alphabet is required as an entry');
        }
        return $this->age;
    }
      
    public function getFavColor()
    {
        if(!ctype_alpha($this->favcolor))
        {
            throw new \InvalidArgumentException('Input must be Alphabet');
        }
        return $this->favcolor;
    }

    public function getTogetherInput()
    {
        return $this->name;
        return $this->age;
        return $this->favcolor;
    }

}