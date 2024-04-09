/*  Se quiseres atribuir um nome com espaços pelo meio, também o podes fazer*/

SELECT produto `Nome do fruto` FROM produtos;

/* No caso das tabelas, também é possível usar ALIAS.
Em algum casos é mesmo obrigatório. Veremos mais para a frente
quando falarmos sobre subqueries
*/

SELECT produtos.* FROM produtos;
SELECT P.* FROM produtos p;

/* O objetivo é ir buscar as primeiras 5 encomendas, 
juntando duas tabelas: encomendas e clientes.
Queremos ver o nome dos clientes envolvidos em cada encomenda.
*/

SELECT clientes.nome, encomendas.*
FROM clientes, encomendas
WHERE clientes.id = encomendas.id_cliente LIMIT 5;