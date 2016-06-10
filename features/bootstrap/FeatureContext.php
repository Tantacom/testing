<?php

use Behat\Behat\Context\ClosuredContextInterface;
use Behat\Behat\Context\TranslatedContextInterface;
use Behat\Behat\Context\BehatContext;
use Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends \Behat\MinkExtension\Context\MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^I have a field "([^"]*)"$/
     */
    public function iHaveAFieldNamed($argument1)
    {
        $page = $this->getSession()->getPage();
        return $page->findById($argument1);
    }

    /**
     * @When /^I fill the field "([^"]*)" with "([^"]*)"$/
     */
    public function iFillTheFieldWith($field, $value)
    {
        $ele = $this->getSession()->getPage()->findById($field);
        $ele->setValue($value);
    }
}
