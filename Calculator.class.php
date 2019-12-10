<?php
interface Calc
{
    public function addition($a, $b);
    public function minus($a, $b);
    public function multiplication($a, $b);
    public function division($a, $b);
}

class Calculator implements Calc
{
    public function addition($a, $b)
    {
        return $a + $b;
    }

    public function minus($a, $b)
    {
        return $a - $b;
    }

    public function multiplication($a, $b)
    {
        return $a * $b;
    }

    public function division($a, $b)
    {
        return $a / $b;
    }
}
?>