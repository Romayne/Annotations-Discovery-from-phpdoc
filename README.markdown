Annotations Discovery from phpdoc
====================

This project reads the phpdoc definition of every method or property with in a class. An array of strings containing the found annotations is returned. The returned array offers a means of extending this project, to perform actions based on the annotations within a class.

How To Use
====================

Integrate the application/bin/MetaDescription/Annotations.class.php into your project structure. Use the discover method to return an array of strings that represent the annotations attached to any methods or properties of a given class. For an annotation to be discovered, a line within the phpdoc must contain a @ annotation definition. It is recommended to create a custom factory that can determine what should be done with the annotations inside the given class.

Known Issues
====================

Within phpdoc it is important to use @ annotation as all lower case with a space following the @ symbol. Files that are being read using Annotations::discover(); should contain a single class definition. Unit tests might not resolve include paths since they were written to run inside phpStorm with a run configuration scope of "directory".  

Copyright and Ownership
====================
The phpdoc name and any other terms used are copyright to their original authors.

Contact
====================

Contact directly at [info@calgarywebdev.com](info@calgarywebdev.com).