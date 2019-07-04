<?php

	/* MÉTODOS Y VARIABLES ESTÁTICOS/AS */

	/*

	¿Qué es una variable o metodo estático/a? ¿En qué se caracteriza? Vamos a ver un ejemplo para poder entenderlo mejor

	*/

	class CompraVehiculo{

		private $precio_base;

		function CompraVehiculo($gama){

			if( $gama == "urbano" ){
				$this -> precio_base = 10000;
			}else if( $gama == "compacto" ){
				$this -> precio_base = 20000;
			}else if( $gama == "berlina" ){
				$this -> precio_base = 30000;
			}

		}

		// Fin del constructor

		function get_precio(){

			return $this -> precio_base;

		}

	}

?>