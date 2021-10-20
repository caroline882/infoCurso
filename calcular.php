</form>
<?php
$dados = $_REQUEST;
$numero = isset($dados["numero"]) ? $dados["numero"] : 0;

if (isset($dados["numero"])) {
    $numero = $dados["numero"];
} else {
    $numero = 0;
}

echo "O numero é: " . $numero . "<br/>";
$calcular = 1;
while($numero > 0) {
    // $calcular *= $numero;
    $calcular = $calcular * $numero;
    $numero--;
    // $numero = numero - 1;
    
}





echo "O fatorial é: " . $calcular;