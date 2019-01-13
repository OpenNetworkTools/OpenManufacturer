<?php
        
    class ManufacturerTests extends \PHPUnit\Framework\TestCase {

        public function testManufacturer_instanceOf(){
            $node = new \OpenNetworkTools\Manufacturer();
            $this->assertInstanceOf(\OpenNetworkTools\Manufacturer::class, $node);
        }
    
    }
?>