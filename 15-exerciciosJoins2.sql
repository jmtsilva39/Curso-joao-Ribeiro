/* Vamos contar a quantidade de registros*/


SELECT COUNT(*) total FROM encomendas_produtos;

/* Vejamos o conteúdo das primeiras 20 linhas */

SELECT * FROM encomendas_produtos LIMIT 20;


SELECT
e.data_hora,
p.produto,
ep.quantidade,
CONCAT('R$ ', ROUND(p.preco_unidade * ep.quantidade, 2)) as total
FROM encomendas_produtos ep
LEFT JOIN encomendas e
ON e.id = ep.id_encomenda
LEFT JOIN produtos p
ON p.id = ep.id_produto
WHERE e.id = 3;
