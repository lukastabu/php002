<?php

class Bebras {
    public $tail = 'long';
    private $age = 23;

    //getter function
    public function whatsAge()
    {
        echo '<br>'.$this->age.'<br>';
    }


    //setter function
    public function changeAge(int $age)
    {
        if ($age > 35) 
        {
            return;
        }
    
        $this->age = $age;
    }
}
