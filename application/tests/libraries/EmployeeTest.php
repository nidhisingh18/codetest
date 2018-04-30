<?php

require_once('C:\xampp\htdocs\codeigniter\application\libraries\Employee.php');

class EmployeeTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }

  public function testget_details()
  {
    // test to ensure that the object from an fsockopen is valid
    $connObj = new Employee();
    $array = array('5');
    $name = $connObj->get_details($array);
    $this->assertTrue( $name !== false);
    $this->assertContains(5,  $array);
  }


}
?>