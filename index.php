<?php
class Comp
{
    public $nameCPU, $frequencyCPU, $sizeRAM, $sizeHDD;
    function __construct($nameCPU, $frequencyCPU = "4.1 GHz", $sizeRAM, $sizeHDD)
    {
        $this->nameCPU = $nameCPU;
        $this->frequencyCPU = "4.1 Ghz";
        $this->sizeRAM = $sizeRAM;
        $this->sizeHDD = $sizeHDD;
    }
    function out()
    {
        echo "Модель: $this->nameCPU";
        echo "<br>Частота: $this->frequencyCPU";
        echo "<br>ОЗУ: $this->sizeRAM";
        echo "<br>HDD: $this->sizeHDD";
    }
}

$comp1 = new Comp("Intel", "null", "8 GB", "300 GB");
$comp2 = new Comp("AMD", "3.8 GHz", "16 GB", "500 GB");

$comp1->out();
echo "<br><br>";
$comp2->out();
