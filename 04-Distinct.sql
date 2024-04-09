
-- O DISTINCT é usado para remover duplicados nos resultados das queries
SELECT DISTINCT cidades FROM clientes;

-- se quisermos ordenar alfabeticamente, também o podemos fazer;
SELECT DISTINCT cidade FROM clientes ORDER BY cidade

-- podemos saber que preços diferentes existem da seguinte forma;


-- vai devolver os dados de todos os produtos por ordem crescente.
-- podes ver que existem produtos com o mesmo preço.
-- podemos saber que preços diferentes existem da seguinte forma.

SELECT DISTINCT preco_unidade FROM produtos ORDER BY preco_unidade;

-- IMPORTANTE: SE alguma coluna tiver valor NULL, o distinct vai incluir esse valor na lista
-- de valores distintos.