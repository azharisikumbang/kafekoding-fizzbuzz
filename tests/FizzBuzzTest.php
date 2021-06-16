<?php 

namespace Tests;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
	protected function fizzBuzzMultiple(int $total, int $start = 1)
	{
		// implementasi kode fizz buzz untuk beberapa angka, dari range $start - $end
	}

	protected function fizzBuzzSingle(int $number)
	{
		// implementasi kode fizz buzz untuk satu angka
	}

	/** @test */
	public function fizz_buzz_single_success()
	{
		$this->assertEquals(1, $this->fizzBuzzSingle(1));
		$this->assertEquals(8, $this->fizzBuzzSingle(8));
		$this->assertEquals(88, $this->fizzBuzzSingle(88));
		$this->assertEquals('Fizz', $this->fizzBuzzSingle(3));
		$this->assertEquals('Fizz', $this->fizzBuzzSingle(99));
		$this->assertEquals('Buzz', $this->fizzBuzzSingle(100));
		$this->assertEquals('Fizz Buzz', $this->fizzBuzzSingle(15));
		$this->assertEquals('Fizz Buzz', $this->fizzBuzzSingle(45));

		$this->assertNotEquals(3, $this->fizzBuzzSingle(3));
		$this->assertNotEquals(15, $this->fizzBuzzSingle(15));
		$this->assertNotEquals(99, $this->fizzBuzzSingle(99));
		$this->assertNotEquals('Fizz', $this->fizzBuzzSingle(17));
	}

	/** @test */
	public function fizz_buzz_multiple_success()
	{
		$total = 100;
		$start = 1;
		$fizzBuzzArrays = $this->fizzBuzzMultiple($total, $start);

		for ($start; $start <= $total ; $start++) { 
			$this->assertEquals($this->fizzBuzzSingle($start), $fizzBuzzArrays[$start]);	
		}
	}	
}