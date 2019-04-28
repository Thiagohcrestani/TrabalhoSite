<?php

namespace Site;

class Sobre {
	
	public function getAbout() {
		$texto['titulo'] = "Sobre o Site.";
		
		$texto['lista'] = array(
			array("O que é um framework?",

				"R: Resolver problemas  recorrentes no software, permitindo ao Programador focar na resolução do problema em si, sem precisar ficar reescrevendo código."
			),
			array
			(
				"O que é padrão de projeto?",
				"R: São soluções para problemas comuns que encontramos enquanto estamos desenvolvemos um software, utilizamos os mesmos para que o projeto fique organizado."
			),
			array
			(
				"Quais as principais categorias de padrões de projetos?",
				"R:Singleton, Factory Method, MVC, VCL, Startegy. ?."
			),
			array
			(
				"Qual o principal padrão de projeto utilizado nesta aplicação?",
				"R: O padrão utilizado neste projeto foi o MVC (Model View Controler)."
			)
		);
		
		
		
		return $texto;
	}
	
}