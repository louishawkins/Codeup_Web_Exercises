<?php

class Automobile
{
    public $doors = 2;
    public $engine = '';
    public $trunk = '';
    public $cargoBed = false;

    public function honk() {
	return 'Beep beep!';	    
    }

    public function revEngine() {
         if ($this->engine == 'huge'){
	    return 'Vroom VROOM!';
	 }
	 else {
	    return 'putt putt putt...';
	 }
	        
    }	
}

class Sedan extends Automobile
{

}

class Truck extends Automobile
{

}

class Coupe  extends Automobile {}

class Corvette extends Coupe
{
    public function __construct()
    {
        $this->engine = 'huge';
    }	    
	    
}

$myDream = new Corvette();

echo $myDream->honk() . PHP_EOL;

echo $myDream->engine . PHP_EOL;

echo $myDream->revEngine() . PHP_EOL;

$myReality->revEngine() .PHP_EOL;

?>
