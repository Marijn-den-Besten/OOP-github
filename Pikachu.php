<?php

class Pikachu extends Pokemon{

public function __construct($Name)
{
    $this->Name = $Name;
    $this->Type = 'lightning';
    $this->HP = 60;
    $this->Attacks = [['Name' => 'Electric Ring', 'Damage' => 50],['Name' => 'Pika Punch', 'Damage' => 20]];
    $this->Weakness = 'Fire';
    $this->Resistance = 'Fighting';

    parent::__construct($this->Name, $this->Type, $this->HP, $this->Attacks, $this->Weakness, $this->Resistance);
}
public function __toString(){
    echo '<div class="' . $this->Name . '">' . '<br>' . $this->Type . '<br>' . '<input type="text" id="HPPokemonPika" value="' . $this->HP  . '" disabled>' . '<input type="text" id="WeaknessPika" value="' . $this->Weakness  . '" disabled>' . '<input type="text" id="ResistancePika" value="' . $this->Resistance . ' " disabled> ' . '</div>';
}
}
