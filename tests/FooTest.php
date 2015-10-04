<?php
    class FooTest extends PHPUnit_Framework_TestCase
    {
        public function setUp()
        {
            include_once("application/bin/MetaDescription/Annotation.class.php");
        }

        public function testFooShouldExist()
        {
            $this->assertFileExists("models/Foo.class.php", "Foo.class.php should exist in models directory.");
        }

        public function testFooShouldHaveAnnotations()
        {
            $annotations = Sandbox\Bin\MetaDescription\Annotation::discover("models/Foo.class.php");

            $this->assertEquals(is_array($annotations), true, "Annotations for Foo.class.php should be an array.");
            $this->assertArrayHasKey("helloWorld", $annotations, "Annotations for Foo.class.php should have a definition for helloWorld");
            $this->assertArrayHasKey("bar", $annotations, "Annotations for Foo.class.php should have a definition for bar");
        }
    } /*end of class FooTest*/