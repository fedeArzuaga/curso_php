<?php

	/* MÉTODOS Y VARIABLES ESTÁTICOS/AS */

	/*

	¿Qué es una variable o metodo estático/a? ¿En qué se caracteriza? Vamos a ver un ejemplo para poder entenderlo mejor

	*/

	class CompraVehiculo{

		private $precio_base;

		private static $ayuda = 0;

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

		function climatizador(){
			$this -> precio_base += 2000;
		}

		function gps(){
			$this -> precio_base += 2500;
		}

		function tapiceria($color){

			if( $color == "blanco" ){
				$this -> precio_base += 3000;
			}else if( $color == "beige" ){
				$this -> precio_base += 3500;
			}else{
				$this -> precio_base += 5000;
			}

		}

		// Dando valor a la ayuda del gobierno

		static function descuento(){

			if( date("m-d-y") > "05-01-".date("y") && date("m-d-y") < "07-31-".date("y") ){
 
				self::$ayuda = 4500;

			}

		}

		// Funcion getter para obtener el valor del precio final
		function get_precio_final(){

			$valor_final = $this -> precio_base - self::$ayuda;
			
			return $valor_final;

		}

	}

?>