<?php
// Demonstra��o de "Data Providers"
class Classe3Test extends PHPUnit_Framework_TestCase
{
    // Informa o nome do forne�edor de dados (@dataProvider) para a clase de teste
    /**
     * @dataProvider provider
     */

    // Recebe 3 par�metros
    public function testCombine($a, $b, $c)
    {
        // Afirma que o valor do terceiro par�metro � igual a concatena��o dos primeiros dois separados por um espa�o
        $this->assertEquals($c, $a . ' ' . $b);
    }

    // A fun��o fornecedora de valores
    public function provider()
    {
        // retorna um array contendo 3 grupos de valores a serem testados
        return array(
            array('Hello', 'World', 'Hello World'),
            array('�', 'Nois', '� Nois'),
            array('Deu', 'Certo', 'Deu certo')
        );
    }
}
?>