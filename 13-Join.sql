/*Esta query vai devolver os nomes dos clientes, o id e data hora das encomendas
*/

SELECT clientes.nome, encomendas.id, encomendas.data_hora
FROM clientes, encomendas
WHERE encomendas.id_cliente = clientes.id;


-- Podemos obter o mesmo resultado da seguinte forma

SELECT clientes.nome, encomendas.id, encomendas.data_hora
FROM clientes JOIN encomendas
ON encomendas.id_cliente = clientes.id;


/*
A expressão JOIN (também pode ser INNER JOIN) vai juntar nomesmo resultado
os dados da tabela clientes com os dados da tabela encomendas.
*/


/*
LEFT JOIN

*/

SELECT clientes.nome, encomendas.id, encomendas.data_hora
FROM clientes LEFT JOIN encomendas
ON encomendas.id_cliente = clientes.id
WHERE clientes.id = 2

/* Vejamos a situação dos colaboradores.
Queremos saber que colaboradores estiveram envolvidos em cada encomenda 
*/

SELECT colaboradores.*, encomendas.*
FROM colaboradores LEFT JOIN encomendas
ON colaboradores.id = encomendas. id_colaborador;

/* podemos simplificar a quantidade de código */

SELECT e.*, c.*
FROM colaboradores
LEFT JOIN encomendas e ON e.id_colaborador = c.id;

 