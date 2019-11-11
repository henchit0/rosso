Proceso centroNumerico
	
	sumaMenor <- 0;
	sumaMayor <- 0;
	bandera <- 0;
	
	Para i <- 2 Hasta 1000 Con Paso 1 Hacer
		Para j <- 1 Hasta i - 1 Con Paso 1 Hacer
			sumaMenor <- sumaMenor + j;
		FinPara
		//sumaMenor <- 0;
		
		contador <- i+1
		
		Mientras bandera = 0 Hacer
			
			sumaMayor <- sumaMayor + contador
			
			
			Si sumaMenor = sumaMayor Entonces
				
				Escribir i,' es centro numerico.'
				bandera <- 1;
				
			FinSi
			
			Si sumaMayor > sumaMenor Entonces
				
				bandera <- 1;
				
			FinSi
			
			contador <- contador + 1
			
		FinMientras
		
		sumaMenor <- 0;
		sumaMayor <- 0;
		bandera <- 0;
		
	Fin Para
	
	
	
	
FinProceso


	