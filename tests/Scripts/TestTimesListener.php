<?php

class PHPUnitTestListener implements PHPUnit_Framework_TestListener
{
    private $time;
    private $timeLimit = 2;

    public function startTest(PHPUnit_Framework_Test $test)
    {
          $this->time = time();
    }

    public function endTest(PHPUnit_Framework_Test $test, $time)
    {
        $current = time();
        $took = $current - $this->time;
        if ($took > $this->timeLimit) {
            echo "\nName: ".$test->getName()." took ".$took .
                " second(s) (from: $this->time, to: $current)\n";
        }
    }

    public function addError(PHPUnit_Framework_Test $test, Exception $e, $time)
    {
    }

    public function addFailure(PHPUnit_Framework_Test $test, PHPUnit_Framework_AssertionFailedError $e, $time)
    {
    }

    public function addIncompleteTest(PHPUnit_Framework_Test $test, Exception $e, $time)
    {
    }

    public function addSkippedTest(PHPUnit_Framework_Test $test, Exception $e, $time)
    {
    }

    public function startTestSuite(PHPUnit_Framework_TestSuite $suite)
    {
    }

    public function endTestSuite(PHPUnit_Framework_TestSuite $suite)
    {
    }

    /**
     * addRiskyTest was added in PHPUnit 4.0.0
     * 
     * @param PHPUnit_Framework_Test $test
     * @param Exception              $e
     * @param float                  $time
     * 
     * @see PHPUnit_Framework_BaseTestListener 
     */
    public function addRiskyTest(PHPUnit_Framework_Test $test, Exception $e, $time)
    {
    }
}
