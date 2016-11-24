<?php
function isInteger($bar){
	if(!is_int($bar)){
		throw new Exception("Erro: O número {$bar} não é do tipo inteiro!", 1);
	}
	return "O número {$bar} é do tipo inteiro!";
}

function tryInteger($foo)
{
    try {
        return isInteger($foo);
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

$result = tryInteger(2.5);
print_r($result);
