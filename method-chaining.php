<?php

class abc
{
	public function firstOne()
	{
		echo "This is First Method";
		return $this;
	}

	public function secondOne()
	{
		echo "This is second Method";
		return $this;
	}

	public function thirdOne()
	{
		echo "This is third Method";
		// return $this;
	}
}


$test = new abc();

$test->firstOne()->secondOne()->thirdOne();


?>