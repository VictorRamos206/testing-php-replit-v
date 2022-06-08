<?php
//calculator_test2.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';
	
	function testDivide() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->divide(3,0), "ERR", "Divide by zero, returns ERR");
	}
}
