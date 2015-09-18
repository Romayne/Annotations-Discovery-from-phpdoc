<?php
	class Foo
	{
		/**
		* Returns Hello World
		*
		* @annotation AuthentiationRequired()
		* @annotation Alias(foo)
		*
		* @param string
		* @return string
		*/
		public function helloWorld($name)
		{
			return "Hello World " .$name;
		}
		
		/**
		* Displays Foo::bar()
		*
		* @annotation AuthentiationRequired()
		* @annotation DependecyInjectionStack(Patients, Doctors, Documents)
		*
		* @return void
		*/
		private function bar()
		{
			echo "Foo::bar()";
		}
	} /*end of class Foo*/