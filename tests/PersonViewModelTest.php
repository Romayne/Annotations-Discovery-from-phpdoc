<?php
    class PersonViewModelTest extends PHPUnit_Framework_TestCase
    {
        public function setUp()
        {
            include_once("application/bin/MetaDescription/Annotation.class.php");
        }

        public function testBarShouldExist()
        {
            $this->assertFileExists("models/PersonViewModel.class.php", "PersonViewModel.class.php should exist in models directory.");
        }

        public function testFooShouldHaveAnnotations()
        {
            $annotations = Sandbox\Bin\MetaDescription\Annotation::discover("models/PersonViewModel.class.php");

            $this->assertEquals(is_array($annotations), true, "Annotations for PersonViewModel.class.php should be an array.");
            $this->assertCount(7, $annotations, "Annotations for PersonViewModel.class.php should contain 7 elements.");
        }
    } /*end of class PersonViewModelTest*/