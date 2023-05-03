<?php 

class Tester
{
	public $numone;
	public $numtwo;
	
	public function __construct($a, $b)
	{
		$this->numone = $a;
		$this->numtwo = $b;
	}

	public function __invoke(){
		return $this->numone * $this->numtwo;
	}
}


$testobj = new Tester(20, 25);

echo $testobj();

?>