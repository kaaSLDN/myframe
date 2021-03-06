<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

/**
 * A Listener for tests progress.
 */
interface TestListener
{
    /**
     * An error occurred.
     *
     * @param Test       $test
     * @param \Exception $e
     * @param float      $time
     */
    public function addError(Test $test, \Exception $e, $time);

    /**
     * A warning occurred.
     *
     * @param Test    $test
     * @param Warning $e
     * @param float   $time
     */
    public function addWarning(Test $test, Warning $e, $time);

    /**
     * A failure occurred.
     *
     * @param Test                 $test
     * @param AssertionFailedError $e
     * @param float                $time
     */
    public function addFailure(Test $test, AssertionFailedError $e, $time);

    /**
     * Incomplete tests.
     *
     * @param Test       $test
     * @param \Exception $e
     * @param float      $time
     */
    public function addIncompleteTest(Test $test, \Exception $e, $time);

    /**
     * Risky tests.
     *
     * @param Test       $test
     * @param \Exception $e
     * @param float      $time
     */
    public function addRiskyTest(Test $test, \Exception $e, $time);

    /**
     * Skipped tests.
     *
     * @param Test       $test
     * @param \Exception $e
     * @param float      $time
     */
    public function addSkippedTest(Test $test, \Exception $e, $time);

    /**
     * A tests suite started.
     *
     * @param TestSuite $suite
     */
    public function startTestSuite(TestSuite $suite);

    /**
     * A tests suite ended.
     *
     * @param TestSuite $suite
     */
    public function endTestSuite(TestSuite $suite);

    /**
     * A tests started.
     *
     * @param Test $test
     */
    public function startTest(Test $test);

    /**
     * A tests ended.
     *
     * @param Test  $test
     * @param float $time
     */
    public function endTest(Test $test, $time);
}
