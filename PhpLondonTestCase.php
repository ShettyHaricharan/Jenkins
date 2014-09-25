<?php

error_reporting(E_ALL);
require_once "SalaryCalc.php";

class PhpLondonTestCase extends UnitTestCase {
    function testSalaryCalcExists() {
        $this->assertTrue(class_exists('SalaryCalc'));
    }
    function testGetDaily() {
        $sal = new SalaryCalc(41400);
        $this->assertTrue(method_exists($sal,'getDaily'));
        $this->assertEqual(180, $sal->getDaily());
        $sal2 = new SalaryCalc(82800);
        $this->assertEqual(360, $sal2->getDaily());
    }
    function testNegativeSalaryThrowsException() {
        $this->expectException();
        $sal = new SalaryCalc(-41400);

    }
}

?>
