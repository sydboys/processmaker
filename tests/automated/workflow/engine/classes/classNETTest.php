<?php

require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.net.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:32.
 */
class classNETTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var NET
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new NET('192.168.11.21');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * This is the default method to test, if the class still having
     * the same number of methods.
     */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('NET');
        $this->assertTrue(count($methods) == 14);
    }

    /**
     * @covers NET::__construct
     * @todo   Implement test__construct().
     */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('__construct', $methods), 'exists method __construct');
        $r = new ReflectionMethod('NET', '__construct');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'pHost');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }

    /**
     * @covers NET::resolv
     * @todo   Implement testresolv().
     */
    public function testresolv()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('resolv', $methods), 'exists method resolv');
        $r = new ReflectionMethod('NET', 'resolv');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'pHost');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }

    /**
     * @covers NET::scannPort
     * @todo   Implement testscannPort().
     */
    public function testscannPort()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('scannPort', $methods), 'exists method scannPort');
        $r = new ReflectionMethod('NET', 'scannPort');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'pPort');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }

    /**
     * @covers NET::is_ipaddress
     * @todo   Implement testis_ipaddress().
     */
    public function testis_ipaddress()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('is_ipaddress', $methods), 'exists method is_ipaddress');
        $r = new ReflectionMethod('NET', 'is_ipaddress');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'pHost');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }

    /**
     * @covers NET::ping
     * @todo   Implement testping().
     */
    public function testping()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('ping', $methods), 'exists method ping');
        $r = new ReflectionMethod('NET', 'ping');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'pTTL');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == true);
        $this->assertTrue($params[0]->getDefaultValue() == '3000');
    }

    /**
     * @covers NET::loginDbServer
     * @todo   Implement testloginDbServer().
     */
    public function testloginDbServer()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('loginDbServer', $methods), 'exists method loginDbServer');
        $r = new ReflectionMethod('NET', 'loginDbServer');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'pUser');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
        $this->assertTrue($params[1]->getName() == 'pPasswd');
        $this->assertTrue($params[1]->isArray() == false);
        $this->assertTrue($params[1]->isOptional() == false);
    }

    /**
     * @covers NET::setDataBase
     * @todo   Implement testsetDataBase().
     */
    public function testsetDataBase()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('setDataBase', $methods), 'exists method setDataBase');
        $r = new ReflectionMethod('NET', 'setDataBase');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'pDb');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
        $this->assertTrue($params[1]->getName() == 'pPort');
        $this->assertTrue($params[1]->isArray() == false);
        $this->assertTrue($params[1]->isOptional() == true);
        $this->assertTrue($params[1]->getDefaultValue() == '');
    }

    /**
     * @covers NET::tryConnectServer
     * @todo   Implement testtryConnectServer().
     */
    public function testtryConnectServer()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('tryConnectServer', $methods), 'exists method tryConnectServer');
        $r = new ReflectionMethod('NET', 'tryConnectServer');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'pDbDriver');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }

    /**
     * @covers NET::tryOpenDataBase
     * @todo   Implement testtryOpenDataBase().
     */
    public function testtryOpenDataBase()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('tryOpenDataBase', $methods), 'exists method tryOpenDataBase');
        $r = new ReflectionMethod('NET', 'tryOpenDataBase');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'pDbDriver');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }

    /**
     * @covers NET::getDbServerVersion
     * @todo   Implement testgetDbServerVersion().
     */
    public function testgetDbServerVersion()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('getDbServerVersion', $methods), 'exists method getDbServerVersion');
        $r = new ReflectionMethod('NET', 'getDbServerVersion');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'driver');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }

    /**
     * @covers NET::dbName
     * @todo   Implement testdbName().
     */
    public function testdbName()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('dbName', $methods), 'exists method dbName');
        $r = new ReflectionMethod('NET', 'dbName');
        $params = $r->getParameters();
        $this->assertTrue($params[0]->getName() == 'pAdapter');
        $this->assertTrue($params[0]->isArray() == false);
        $this->assertTrue($params[0]->isOptional() == false);
    }

    /**
     * @covers NET::showMsg
     * @todo   Implement testshowMsg().
     */
    public function testshowMsg()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('showMsg', $methods), 'exists method showMsg');
        $r = new ReflectionMethod('NET', 'showMsg');
        $params = $r->getParameters();
    }

    /**
     * @covers NET::getErrno
     * @todo   Implement testgetErrno().
     */
    public function testgetErrno()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('getErrno', $methods), 'exists method getErrno');
        $r = new ReflectionMethod('NET', 'getErrno');
        $params = $r->getParameters();
    }

    /**
     * @covers NET::getErrmsg
     * @todo   Implement testgetErrmsg().
     */
    public function testgetErrmsg()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue(in_array('getErrmsg', $methods), 'exists method getErrmsg');
        $r = new ReflectionMethod('NET', 'getErrmsg');
        $params = $r->getParameters();
    }
}
 