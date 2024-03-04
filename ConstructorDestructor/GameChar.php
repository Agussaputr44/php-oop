<?php
class GameChar
{
    private $name;
    private $lifePoint;
    private $attackHitPoint;
    private $attackKickPoint;

    public function __construct($name, $lifePoint, $attackHitPoint, $attackKickPoint)
    {
        $this->name = $name;
        $this->lifePoint = $lifePoint;
        $this->attackHitPoint = $attackHitPoint;
        $this->attackKickPoint = $attackKickPoint;
    }

    public function __destruct()
    {
        echo "Karakter " . $this->name . " memiliki lifePoint " . $this->lifePoint . ".\n";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLifePoint()
    {
        return $this->lifePoint;
    }

    public function setLifePoint($lifePoint)
    {
        $this->lifePoint = $lifePoint;
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
        return $this->attackHitPoint;
    }

    public function hit($hero)
    {
        $attackerName = $this->getName();
        $defenderName = $hero->getName();
        $damage = $this->getAttackHitPoint();
        $hpHero = $hero->getLifePoint();

        $hp = $hpHero - $damage;

        $hero->setLifePoint($hp);

        echo "$attackerName memberi pukulan dengan damage $damage kepada $defenderName. Sisa hp $defenderName: $hp\n";
    }

    public function kick($hero)
    {
        $attackerName = $this->getName();
        $defenderName = $hero->getName();
        $damage = $this->getAttackKickPoint();
        $hpHero = $hero->getLifePoint();

        $hp = $hpHero - $damage;

        $hero->setLifePoint($hp);

        echo "$attackerName memberi tendangan dengan damage $damage kepada $defenderName. Sisa hp $defenderName: $hp\n";
    }
}

$hero1 = new GameChar("Goku", 100, 20, 30);
$hero2 = new GameChar("Subzero", 120, 25, 35);

$hero1->hit($hero2);
$hero2->kick($hero1);
