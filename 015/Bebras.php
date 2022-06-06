<?php

class Bebras {
    public $tail = 'long';
    private $age = 23;
    private $name, $childrens;

    public function __construct(string $n, array $c) {
        echo '<br> magic construct <br>';
        $this->whatsAge();
        $this->age = rand(10, 200);
        $this->whatsAge();
        $this->name = $n;
        $this->childrens = $c;
    }

    public function __destruct() {
        echo '<br> magic visi mire <br>';
    }

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

    public function __get($what) {
        if (in_array($what, ['age', 'name'])) {
            return 'Antanukas';
        }
        return 'NONE';
        // echo '<br>magic GET '.$what.'<br>';
        // return 'Nieko nera namie';
        
    }

    public function __set($where, $what) {
        echo '<br>magic SET '.$where.' '.$what.'<br>';

    }

}
