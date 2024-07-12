<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class LaravelFeatureContext implements Context
{

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @BeforeScenario
     */
//    public function setUp()
//    {
//        if ( ! $this->app)
//        {
//            $this->refreshApplication();
//        }
//    }

    /**
     * @Given I am logged in
     */
    public function iAmLoggedIn()
    {
        throw new PendingException();
    }

    /**
     * @When I visit :arg1
     */
    public function iVisit($arg1)
    {
        throw new PendingException();
    }

    public function createApplication()
    {
        $unitTesting = true;
        $testEnvironment = 'testing';
        return require __DIR__.'/../../bootstrap/start.php';
    }

    /**
     * @Then I should see :arg1
     */
    public function iShouldSee($arg1)
    {
        throw new PendingException();
    }
}
