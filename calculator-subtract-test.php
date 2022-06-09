<?php
//calculator-subtract-test.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase {
	function testSubtract() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->Subtract(1,1), 2, "1 + 1");
	  $this->assertEqual($myCalc->Subtract(2,2), 4, "2 + 2");
	  $this->assertEqual($myCalc->Subtract(1,1,1), 3, "three params, 1 + 1 + 1");
	}
	
	
	
}