Algoritmo cajeroAutomatico
	
	bandera <- 1
	billMil <- 0;
	billQuinientos <- 0;
	billCien <- 0;
	billCincuenta <- 0;
	billDiez <- 0;
	
	Escribir 'Ingrese la cantidad de dinero que quiere sacar. (multiplo de 100)'
	Leer montoAExtraer
	
	Mientras bandera = 1 Hacer
		
		Si montoAExtraer MOD 10 <> 0 Entonces //Preguntamos si el monto ingresado es multiplo de 10
			Escribir 'Por favor, ingrese la cantidad de dinero que quiere sacar. (multiplo de 10)'//Si no es multiplo pedimos ingresar de vuelta
			Leer montoAExtraer
		SiNo
			bandera<-0
		Fin Si
		
	Fin Mientras
	
	//Escribir 'El monto ingresado fue ', montoAExtraer
	
	Mientras montoAExtraer > 999 Hacer
		billMil <- billMil + 1;
		montoAExtraer <- montoAExtraer - 1000		
	FinMientras

	Mientras montoAExtraer > 499 Hacer
		billQuinientos <- billQuinientos + 1;
		montoAExtraer <- montoAExtraer - 500		
	FinMientras
	
	Mientras montoAExtraer > 99 Hacer
		billCien <- billCien + 1;
		montoAExtraer <- montoAExtraer - 100		
	FinMientras
	
	Mientras montoAExtraer > 49 Hacer
		billCincuenta <- billCincuenta + 1;
		montoAExtraer <- montoAExtraer - 50		
	FinMientras
	
	Mientras montoAExtraer > 9 Hacer
		billDiez <- billDiez + 1;
		montoAExtraer <- montoAExtraer - 10		
	FinMientras
	
	Escribir 'Se entragaran los siguientes billetes'
	Escribir 'Billetes de 1000: ', billMil
	Escribir 'Billetes de 500: ', billQuinientos
	Escribir 'Billetes de 100: ', billCien
	Escribir 'Billetes de 50: ', billCincuenta
	Escribir 'Billetes de 10: ', billDiez
	
FinAlgoritmo
