<?php

class Charmeleon extends Pokemon{

public function __construct($Name)
{
    $this->Name = $Name;
    $this->Type = 'Fire';
    $this->HP = 60;
    $this->Attacks = [['Name' => 'Head Butt', 'Damage' => 10],['Name' => 'Flare', 'Damage' => 30]];
    $this->Weakness = 'Water';
    $this->Resistance = 'Lightning';

}
public function __toString(){
    echo '<div class="' . $this->Name . '">' . '<br>' . $this->Type . '<br>' . '<input type="text" id="HPPokemonChar" value="' . $this->HP  . '" disabled>' . '<input type="text" id="WeaknessChar" value="' . $this->Weakness  . '" disabled>' . '<input type="text" id="ResistanceChar" value="' . $this->Resistance . ' " disabled> ' . '</div>';
}
}