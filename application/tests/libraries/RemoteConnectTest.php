<?php

require_once('C:\xampp\htdocs\codeigniter\application\libraries\RemoteConnect.php');

class RemoteConnectTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testConnectionIsValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnect();
    $serverName = 'www.google.com';
    $name = $connObj->connectToServer($serverName);
    $this->assertTrue( $name !== false);
  }

/**
* @expectedException Exception
*/
  public function testConnectionIsNotValid()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new RemoteConnect();
    $serverName = '';
    $name = $connObj->connectToServer($serverName);
    $this->assertTrue( $name !== false);
  }
}
?>