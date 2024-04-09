--BETWEEN - devolve os resultados que estão entre um intervalo.

SELECT * FROM produtos WHERE preco_unidade BETWEEN 1 AND 2;

-- seria o mesmo que escrever
SELECT * from produtos WHERE preco_unidade >1 AND preco_unidade <2;

-- Queremos todas as encomendas registradas entre duas datas.

SELECT * FROM encomendas WHERE data_hora BETWEEN '2030-01-01 00:00:00' AND '2030-01-30 00:00:00'

-- in - Devolve todos os registros que estejam compreendidos
-- dentro de uma coleção de valores. Vejamos:

SELECT * FROM clientes WHERE cidade IN ("Lisboa", "Viseu");

-- podereiamos fazer da seguinte forma:
SELECT * FROM clientes Where cidade = "lisboa" OR cidade = "Viseu";


Like -- É um operador que permite pesquisar no interior dos valores das células

--Wildcards

--% representa zero, um ou mais caracteres de qualquer tipo.
-- vai buscar todos os clientes cujo nome começa por João.
SELECT nome FROM clientes WHERE nome LIKE "João%"
-- vamos pesquisar todos os nomes de clientes que tenham a palavra Silva


--vamos pesquisar todos os nomes de clientes que tenham a palavra Silvia
SELECT nome FROM clientes WHERE nome LIKE "%SILVA"

-- e todos os nomes e respectivos emails cujo domínio seja gmail.com
SELECT nome, email FROM clientes WHERE email LIKE "%gmail.com"

-- todos os nome que começam pela letra A e terminam em S
SELECT nome FROM clientes WHERE nome LIKE "A%S";

-- IMPORTANTE: É case insensitive

--(underscore) representa um caracter apenas

SELECT nome FROM clientes WHERE nome LIKE "Francisc_%";

SELECT nome FROM clientes WHERE nome LIKE "__a%";

