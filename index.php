<?php
/* No trecho a seguir estamos definindo uma variáchamada 'mensagem' com o conteúdo 'Olá'. */
$mensagem = 'Olá ';
if(isset($_GET['nome'])) {
    $nome = $_GET['nome'];
    /* Podemos utilizar o operador '.=' para concatenar o vslor já existente em uma bvariável
     * com uma vslor (sem substituir o anterior). No trecho de código a seguir será adcionado
     * o valor da variável 'nome' à cadeia de caracteres e, em seguida, esta será adcionada ao 
     * conteúdo já existente na variável 'mensagem' (Ex: Se o valor da variável 'nome' for 'Maria'
     * e o valor da variável mensagem for 'Olá', conteúdo armazenado na variável 'mensagem' após
     * a execução desta linha será 'Olá Maria!'.) */
    $mensagem .= "$nome!";
} else
    /* No trecho de código a seguir será adcionado o valor 'Mundo!' à cadeia de caracteres e,
     * em seguida, esta será adicionada ao conteúdo já existente na variável 'mensagem' (Ex: Se
     * o valor da variável mensagem for 'Olá', conteúdo a ser armazenado na variável 'mensagem'
     * após a execução desta linha será 'Olá Mundo!'.) */
    $mensagem .= 'Mundo!';

/* No trecho a seguir estamos utilizando a instrução 'echo' para imprimir o conteúdo
 * da variável 'mensagem' */
echo $mensagem;