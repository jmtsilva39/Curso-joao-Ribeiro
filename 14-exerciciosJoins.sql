
/*
    A nossa base de dados tem tabelas com relações entre si.

    - a tabela das encomendas tem relação com a tabela dos clientes
    - a tabela das encomendas também tem relação com a tabela dos colaboradores
    - a tabela das encomendas_produtos tem relação com a tabela das encomendas e dos produtos
*/

//queremos dados sobre as encomendas do cliente cujo id = 20


SELECT c.*, e.*
FROM clientes c
left join encomendas e
on c.id = e.id_cliente 
where c.id = 20;

-- no histórico das encomendas, queremos saber quem foram os clientes envolvidos nas 20
-- primeiras encomendas da nossa loja.

SELECT e.id, e.data_hora, c.nome
FROM encomendas e LEFT JOIN clientes cada
ON e.id_cliente = c.id
where e.id <=20;

-- agora queremos a mesma informação, mas sobre as últimas 20 encomendas e ordenadas por ordem
-- mais recente para a mais antiga

SELECT e.id, e.data_hora, c.nome
FROM encomendas
LEFT JOIN clientes c
ON e.id_cliente = c.id
ORDER BY e.id DESC
LIMIT 20;

-- para efetuar exercícios com right join, vamos eliminar 10 clientes
-- para isso vamos remover usando a expressão DELETE

DELETE FROM clientes WHERE id BETWEEN 100 and 109;
SELECT COUNT(*) total_clientes FROM clientes;

/* TESTE LEFT JOIN SEM O CLIENTE ID=100*/

SELECT c.nome, e.data_hora FROM clientes c
LEFT JOIN encomendas e ON c.id = e.id_cliente
WHERE e.id_cliente = 100;

/* TESTE */

SELECT c.nome, e.data_hora
FROM clientes c
RIGHT JOIN encomendas e
ON c.id = e.id_cliente
WHERE e.id_cliente = 100;

