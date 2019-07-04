<?php

	// POO (Programacion Orientada a Objetos) o OOP (Objects Oriented Programming)
	
	/*

	¿Qué es la POO?

	La POO es el concepto de programar pensando en objetos como si se tratara de la vida real. Es la abstracción de cosas y realidades físicas para luego llevarlas a cabo de forma programática.

	TRES TERMINOS QUE HAY QUE INTERIORIZAR

	- OBJETO
	- CLASE
	- INSTANCIA

	OBJETO: Es la abstraccion de algo de la vida real, cuyo objeto se concentra en dos aspectos: atributos y metodos

	ATRIBUTO: Es una CARACTERÍSTICA del objeto. Ej: Alto, bajo, color, etc.

	MÉTODOS: Son las FUNCIONALIDADES de un objeto. Ej: Correr, saltar, girar, etc.

	#######################################################

	QUE ES UNA CLASE?

	Una clase es una PLANTILLA o TEMPLATE de un objeto

	QUE ES UNA INSTANCIA?

	Es un ejemplar de una clase, un modelo del cual se ha sacado de esa "plantilla".

	*/

	// COMENZAMOS - Primero creamos la clase COCHE

	class Coche{
		
		// Asignamos atributos a la clase COCHE
		protected $ruedas;
		var $color;
		protected $motor;

		//Creamos un constructor
		function Coche(){
			// Esta funcion se va a encargar que darle un estado inicial al objeto
			$this -> ruedas = 4;
			$this -> color = "";
			$this -> motor = 1600;
		}

		// Creamos funciones setter y getter (Por convencion suelen llamarse con principio get o set, respectivamente);
		function get_ruedas(){
			return $this -> ruedas;
		}

		function get_motor(){
			return $this -> motor;
		}

		function set_ruedas($ruedas){
			$this -> ruedas = $ruedas;
		}

		// Asignamos Metodos a la clase COCHE
		function acelerar(){
			echo "BRUM BRUM</br>";
		}
		function girar(){
			echo "Girando :D</br>";
		}
		function frenar(){
			echo "Alto derrape pariente</br>";
		}
		function establece_color($color_coche, $nombre_coche){
			$this -> color = $color_coche;
			echo "El color de " . $nombre_coche . " es: " . $color_coche . "</br>";
		}

	}

	#########################################################################################

	// Heredamos los atributos y metodos de la clase Coche
	class Camion extends Coche{
		//Creamos un constructor
		function Camion(){
			// Esta funcion se va a encargar que darle un estado inicial al objeto
			$this -> ruedas = 8;
			$this -> color = "gris";
			$this -> motor = 2600;
		}

		// Utilizando la instruccion parent
		function acelerar(){

			// parent:: -> Le indica al metodo de la clase Camion que debe ejecutar exactamente lo mismo que se encuentra en la clase padre, con al diferencia de que justo despues de haberse ejecutado, podemos modificar la misma funcion o metodo a nuestro gusto segun nuestras necesidades.
			parent::acelerar();

			echo "Camion arrancado!</br>";

		}

		// Sobreescritura de codigo para la clase Camion
		function establece_color($color_camion, $nombre_camion){
			$this -> color = $color_camion;
			echo "El color de " . $nombre_camion . " es: " . $color_camion . "</br>";
		}
	}

?>