<?php
	
	// Creando una clase

	class Person{

		// Atributos
		protected $name;
		protected $lastName;
		private $dateBirth;

		// Contructor
		public function Person($name, $lastName, $dateBirth){
			$this -> name = $name;
			$this -> lastName = $lastName;
			$this -> dateBirth = $dateBirth;
		}

		// Metodos
		public function showName(){
			echo $this -> name;
		}

		public function get_last_name(){
			echo $this -> lastName;
		}

		public function walk(){

		}

	}

?>