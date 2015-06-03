<?php
/**
 * @link https://github.com/anmaslov/yii2-autocomplete-widget
 * @copyright Copyright &copy; Alexey Maslov, 2015
 * @license http://opensource.org/licenses/mit-license.php
 */

namespace tests;

use Yii;
use anmaslov\autocomplete\AutoComplete;
use yii\test\ArrayFixture;

/**
 * AutoCompleteTest
 */
class AutoCompleteTest extends \PHPUnit_Framework_TestCase
{
    private $autocomplete;
    private $_fixture;

    protected function setUp()
    {
        parent::setUp();

        $this->autocomplete = new AutoComplete([
            'name' => 'auto',
            'id' => 'autoId'
        ]);

        $this->_fixture = new ArrayFixture([
            'dataFile' => '@tests/data/array_fixture.php',
        ]);
        $this->_fixture->load();
        $this->autocomplete->data = $this->_fixture->data;
    }

    public function testExpectedInput()
    {
        $expectedHtml = "<div><input type=\"text\" id=\"autoId\" class=\"form-control\" name=\"auto\"></div>";

        ob_start();
        $this->autocomplete->run();
        $actualHtml = ob_get_contents();
        ob_end_clean();

        $this->assertEquals($expectedHtml, $actualHtml);
    }

    public function testContainer()
    {
        $this->autocomplete->container = [
            'class' => 'form-control',
        ];

        $expectedHtml = "<div class=\"form-control\"><input type=\"text\" id=\"autoId\" class=\"form-control\" name=\"auto\"></div>";

        ob_start();
        $this->autocomplete->run();
        $actualHtml = ob_get_contents();
        ob_end_clean();

        $this->assertEquals($expectedHtml, $actualHtml);
    }


}