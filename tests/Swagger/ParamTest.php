<?php

namespace SwaggerTests;
use Swagger\Param;

/**
 * Param test case.
 * @group Param
 */
class ParamTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Param
     */
    private $Param;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp ()
    {
        parent::setUp();

        $this->fixture = <<<EOF
{
    "description":"ID of the route being requested",
    "required":"true",
    "allowMultiple":"false",
    "dataType":"integer",
    "name":"organic_id",
    "paramType":"path"
}

EOF;

         $this->Param = new Param(
             'description="ID of the route being requested",required=true,'.
             'allowMultiple=false,dataType="integer",name="organic_id",paramType="path"'
         );

    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown ()
    {
        $this->Param = null;

        parent::tearDown();
    }

    /**
     * Tests Param->__construct()
     */
    public function test__construct ()
    {
        $this->assertEquals(json_decode($this->fixture, true), $this->Param->results) ;

    }

}

