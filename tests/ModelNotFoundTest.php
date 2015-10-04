<?php
    class ModelNotFoundTest extends PHPUnit_Framework_TestCase
    {
        public function setUp()
        {
            include_once("application/bin/MetaDescription/Annotation.class.php");
        }
        
        public function testAnnotationsShouldReturnMessage()
        {
            $annotations = Sandbox\Bin\MetaDescription\Annotation::discover("ModelNotFound.class.php");

            $this->assertEquals(is_array($annotations), true, "Annotations should be an array.");
            $this->assertCount(1, $annotations, "Annotations array should only have one element.");
            $this->assertArrayHasKey(0, $annotations, "Annotations should contain a key 0.");
            $this->assertContains("does not exist", $annotations[0], "Element at first position should have a 'does not exist' message.");
        }
    } /*end of class ModelNotFoundTest*/