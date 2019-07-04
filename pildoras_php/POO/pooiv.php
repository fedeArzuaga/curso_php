<?php

	include "vehiculos.php";

	// Conceptos a tratar en esta clase

	/*
	
		Modularizacion
		Encapsulación
		Modificadores de acceso => (Public, Private, Protected)

		MODULARIZACIÓN:

		La modularización es la práctica de dividir un software o programa en partes ordenadas, para una mejor administración del mismo. Podemos crear un programa complejo en un solo archivo, o podemos divirlos en varios archivos modularizando el código, de forma que va a ser mucho más legible darle mantenimiento a ese programa.

		ENCAPSULACIÓN:

		La encapsulación consiste en que podamos "encapsular" (valga la redundancia) funcionalidades que solo nos van a servir para ejecutar instrucciones REFERENTES A ESA CLASE. De forma que, si tengo una clase Carrito, yo pueda ejecutar las operaciones de comprar, reservar, eliminar, todas DENTRO de mi clase carrito, no es necesario que TODA LA APLIACIÓN pueda tener acceso a esas funcionalidades.

		MODIFICACIONES DE ACCESO:

		Por último, para que todo el concepto de modularización y encapsulación se cumplan, debemos restringir o liberar el acceso de ciertas funcionalidades a respectivas clases, y de eso va las modificaciones de acceso. Tenemos tres niveles de acceso que son:

		- PUBLIC: Funcionalidades que son accesibles desde cualquier punto del programa
		- PRIVATE: Funcionalidades que son accesibles desde la propia clase
		- PROTECTED: Funcionalidades que son accesibles desde la propia clase y clases heredadas

		FUNCIONES GETTERS Y SETTERS

		Si encapsulamos propiedades o metodos de ciertas clases, como hacemos para poder acceder o modificar las mismas desde otro entorno del programa? con las funciones getters y setters.

	*/

?>