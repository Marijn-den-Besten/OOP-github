<?php

class Pokemon {

    protected $Name;
    public $Type;
    public $HP;
    public $Attacks;
    public $Weakness;
    public $Resistance;
    public $Target;
    private static $count;

    public function __construct($Name, $Type, $HP, $Attacks, $Weakness, $Resistance, $Target)
    {
        $this->Name = $Name;
        $this->Type = $Type;
        $this->HP = $HP;
        $this->Attacks = $Attacks;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;
        $this->Target = $Target;
        self::$count++;
    }

    public function __toString() {
        return json_encode($this);
    }

    function getName() {
        return $this->Name;
    }

    function setName($NewName) {
        $this->Name = $NewName;
    }

    function getHP() {
        return $this->Name . ' heeft ' . $this->HP . ' HitPoints';
    }

    function setHP($NewHP) {
        $this->HP = $NewHP;
    }

    function getPopulation() {
        return Pokemon::$count;
    }

    public function Attack($target, $AttackNmbr) {
        echo '<br>';
        echo $this->Name . ' Attacks ' . $target->getName() . ' ';
        echo '<br>';

        $attack = $this->Attacks[$AttackNmbr];

        $damage = $attack['Damage'];

        $target->Damagereceive($damage);
    }

    public function Damagereceive($damage) {
        if ($this->Weakness == 'Fire'){
            $dmgtotal = $damage * 1.5;
        }
        if ($this->Resistance == 'Lightning') {
            $dmgtotal = $damage - 10;
        }
        echo $this->Name . ' receives damage :' . $dmgtotal;
        $damageAfterHit=$this->HP - $dmgtotal;
        if ($damageAfterHit < 0) $damageAfterHit = 0;
        echo '<br>';
        echo $this->Name . ' Heeft nog: ' . $damageAfterHit . ' HP over';
        $this->setHP($damageAfterHit);
        if ($this->HP < 0) $this->setHP(0);
        echo '<br>';
        if ($this->HP < 1){
            echo $this->Name . ' is overleden!';
            self::$count--;
        }
    }


}