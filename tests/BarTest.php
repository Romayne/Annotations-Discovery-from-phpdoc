<?php
    class BarTest extends PHPUnit_Framework_TestCase
    {
        public function setUp()
        {
            include_once("application/bin/MetaDescription/Annotation.class.php");
        }

        public function testBarShouldExist()
        {
            $this->assertFileExists("models/Bar.class.php", "Bar.class.php should exist in models directory.");
        }

        public function testBarShouldHaveAnnotations()
        {
            $annotations = Sandbox\Bin\MetaDescription\Annotation::discover("models/Bar.class.php");

            $this->assertEquals(is_array($annotations), true, "Annotations for Bar.class.php should be an array.");
            $this->assertCount(0, $annotations, "Annotations for Bar.class.php should not contain any elements.");
        }
    } /*end of class BarTest*/