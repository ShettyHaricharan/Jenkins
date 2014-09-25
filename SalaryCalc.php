<?php

class SalaryCalc {
    protected $sal;
    function __construct($sal) {
        if ($sal <= 0) {
            throw new Exception('Nobody works for free');
        }
        $this->sal = $sal;
    }
    function getDaily() {
        return $this->sal/46/5;
    }
}

?>
