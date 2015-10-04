<?php
	include("application/bin/MetaDescription/Annotation.class.php");
	include("application/bin/Utility/Functions.class.php");
	
	$annotations = Sandbox\Bin\MetaDescription\Annotation::discover("models/Foo.class.php");
	Sandbox\Bin\Utility\Functions::dump($annotations);
	
	$annotations = Sandbox\Bin\MetaDescription\Annotation::discover("models/PersonViewModel.class.php");
	Sandbox\Bin\Utility\Functions::dump($annotations);
	
	$annotations = Sandbox\Bin\MetaDescription\Annotation::discover("models/Bar.class.php");
	Sandbox\Bin\Utility\Functions::dump($annotations);

	$annotations = Sandbox\Bin\MetaDescription\Annotation::discover("ModelNotFound.class.php");
	Sandbox\Bin\Utility\Functions::dump($annotations);