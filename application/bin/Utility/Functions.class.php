<?php
	namespace Sandbox\Bin\Utility;

	class Functions
	{
		/**
         * Returns an array using the <pre> </pre> tags
         * Unfortunately we're displaying information so we'll return some HTML
         *
         * @param array
         * @return string
         */		
		public static function dump($values)
		{
			echo "<pre>";
			print_r($values);
			echo "</pre>";
		}
	} /*end of class Functions*/