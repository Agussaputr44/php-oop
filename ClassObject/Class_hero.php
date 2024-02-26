<?php
class Hero
{
    private $name;
    private $lifePoint;
    private $attackHitPoint;
    private $attackKickPoint;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setLifePoint($lifePoint)
    {
        $this->lifePoint = $lifePoint;
    }

    public function getLifePoint()
    {
        return $this->lifePoint;
    }
    public function setAttack($attackHitPoint, $attackKickPoint)
    {
        $this->attackHitPoint = $attackHitPoint;
        $this->attackKickPoint = $attackKickPoint;
    }

    public function getAttackKickPoint()
    {
        return $this->attackKickPoint;
    }
    public function getAttackHitPoint()
    {
        return $this->attackKickPoint;
    }

    public function hit($hero)
    {
        $attackerName = $this->getName();
        $defenderName = $hero->getName();
        $damage = $this->getAttackHitPoint();
        $hpHero = $hero->getLifePoint();

        $hp = $hpHero - $damage;

        $hero->setLifePoint($hp);
    

    
        echo "$attackerName memberi pukulan dengan damage $damage kepada $defenderName";
        echo " Sisa hp $defenderName: $hp";
    }
    

    public function kick($hero)
    {
        $attackerName = $this->getName();
        $defenderName = $hero->getName();
        $damage = $this->getAttackKickPoint();
        $hpHero = $hero->getLifePoint();

        $hp = $hpHero - $damage;

        $hero->setLifePoint($hp);
    

    
        echo "$attackerName memberi tendangan dengan damage $damage kepada $defenderName";
        echo " Sisa hp $defenderName: $hp";
    }


}