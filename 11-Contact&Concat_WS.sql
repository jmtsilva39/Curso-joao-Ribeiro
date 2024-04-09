/* O SQL contém um enorme conjunto de funções para efetuar ajustamentos na forma
como recolhemos os dados.

Não se trata apenas de ir buscar ou alterar os dados da forma
estrutural como estão organizados.
Vimos que podemos trazer os dados com nomes de colunas diferentes com o ALIAS.
Vamos ver a função concat. 


*/

SELECT CONCAT('O meu nome é ', nome, ' e o meu email é: ', email) frase 
FROM clientes LIMIT 10;

SELECT CONCAT(' A loja tem ', produto, ' a ', preco_unidade, ' euros cada unidade.') texto
FROM produtos LIMIT 10;


/* CONCAT_WS*/

SELECT CONCAT_WS(' | ', nome, telefone, cidade) AS teste FROM clientes;

/* Aproveito para indicar algo que é muito importante perceber:
TUDO O QUE POSSAS FAZER COM SQL, NO MYSQL PARA TRAZER OS DADOS PRONTOS A SEREM USADOS
, DEVES FAZÊ-LO. Evita ao máximo trazer uma pilha de dados para serem tratados posteriormente
no teu PHP, Javascript, etc.
A idéia é trazer os dados o mais preparados possíveis para que possam ser usados 
no teu frontend.
*/