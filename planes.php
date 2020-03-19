<?php

	abstract class Airplane
	{
		
		public abstract function TakeOff();
		public abstract function Land();
		
		public function Fly()
		{
			echo "Летим";
		}
	}

	class Mig extends Airplane
	{
		
		public function TakeOff()
		{
			echo "Миг - Взлет";
		}
		
		public function Land()
		{
			echo "Миг - Посадка";
		}
		
		public function Attack()
		{
			echo "Миг - Атака";
		}
		
	}

	class Ty154 extends Airplane
	{
		
		public function TakeOff()
		{
			echo "ТУ-154 - Взлет";
		}
		
		public function Land()
		{
			echo "ТУ-154 - Посадка";
		}
		
	}

?>