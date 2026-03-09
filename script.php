<?php

class Alien{
    private $Color;

    public function GetColor(){
        return $this->Color;
    }

    public function SetColor($NewColor){
        $this->Color = $NewColor;
    }
}

$Alien1 = new Alien();
$Alien1->SetColor("Blauw");
echo $Alien1->GetColor();

?>