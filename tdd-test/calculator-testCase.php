<?php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase{


function testAdd(){
    $myCalc = new Calculator();
    $this->assertEqual($myCalc->add(1,1,2), 2, "1 + 1");
    $this->assertEqual($myCalc->add(1,1), 3, " 3 params 1 + 1");
}

}
