<?php

class First
{
    private $name = 'Ivan';

//    protected $color = 'black';

    public function __construct($initWord){
        $this->name = $initWord;
    }

    public function firstName(){
        return $this->name;
    }
}

class Second extends First
{
    private $name;

    public function firstName()
    {
        return 'name2 = ' . parent::firstName();
    }

}

class Third extends First
{
    private $name;

    public function firstName()
    {
        return 'name3 = ' . parent::firstName();
    }
}

$name1 = new First('Oleksandr');
echo $name1->firstName();

echo '<br>';

$name2 = new Second('Dima');
echo $name2->firstName();

echo '<br>';

$name3 = new Third('Sergey');
echo $name3->firstName();

echo '<br>';


?>