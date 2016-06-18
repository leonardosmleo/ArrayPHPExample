<?php 
$arrayExample = array(
	"cars" => array(
		"codigo"	=>	01,
		"nome"		=>	"Astra",
		"cor"		=>	array(
			"corLata"	=>"Verde",
			"corParachoque"	=>"Preto"
		)
	),
	"trucks" => array(
		"codigo"	=>	01,
		"nome"		=>	"F-350",
		"cor" 		=>	array(
			"corLata" =>"Prata",
			"corParachoque"	=>"Cromo"
		)
	)
);
echo "<pre>",print_r($arrayExample,true),"</pre>";
