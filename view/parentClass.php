<?php
class vehicles {
   public $speed;
   private $weight;
   protected $color;

    public function fastTime ($distance)
{
    $time = $distance / $this->speed;
    return $time;
}
    public function setColor()
{
    $color=$this->color;
    return $color;
}
}
class cars extends vehicles {
    public $dryAir;

    public function setDryAir(){
        $dryAir=$this->speed * 2;
        return $dryAir;
    }
}
class motorbike extends cars{
    public $type;

    function setType($type)
    {
        $this->type = $type;
        return $type;
    }
}