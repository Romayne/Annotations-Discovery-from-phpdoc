<?php
	include("application/bin/MetaDescription/Annotation.class.php");
	include("application/bin/Utility/Functions.class.php");
	
	//Model test
	$annotations = Sandbox\Bin\MetaDescription\Annotation::discover("models/Foo.class.php");
	Sandbox\Bin\Utility\Functions::dump($annotations);
	
	//Data object test
	$annotations = Sandbox\Bin\MetaDescription\Annotation::discover("models/PersonViewModel.class.php");
	Sandbox\Bin\Utility\Functions::dump($annotations);
	
	//Empty class test
	$annotations = Sandbox\Bin\MetaDescription\Annotation::discover("models/Bar.class.php");
	Sandbox\Bin\Utility\Functions::dump($annotations);
	
	//Model not found test
	$annotations = Sandbox\Bin\MetaDescription\Annotation::discover("ModelNotFound.class.php");
	Sandbox\Bin\Utility\Functions::dump($annotations);