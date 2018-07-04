<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Tests\TestCase;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends TestCase implements Context
{
    protected $content;
    private $name;
    private $name2;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct(){}

    /**
     * @Given  I am on login :login
     */
    public function iVisitLogin($login)
    {
        $this->name="¿Olvidó su contraseña?";
    }
    /**
     * @Then I should see the text :text
     */
    public function iShouldSeeTheLogin($text)
    {
        //$this->assertEquals($text, $this->content);
        $this->assertEquals($this->name,$text);
    }


    /**
     * @Given  I am on Payment :Payment
     */
    public function iVisitPayment($Payment)
    {
        $this->name2="No tiene saldo";
    }
    /**
     * @Then I should see the text2 :text2
     */
    public function iShouldSeeThePayment($text2)
    {
        //$this->assertEquals($text, $this->content);
        $this->assertEquals($this->name2,$text2);
    }

    




}
