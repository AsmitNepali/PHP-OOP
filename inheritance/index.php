<?php 
	class CoffeeMaker
	{
		public function brew()
		{
			var_dump('Brewing the coffee');
		}
	}
	// is a" 
	class SpecialityCoffeeMaker extends CoffeeMaker
	{
		public function brewLatte()
		{
			var_dump('Brewing a Latte');
		}
	}
	(new SpecialityCoffeeMaker())->brew();