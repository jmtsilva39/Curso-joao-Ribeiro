

SELECT nome, email FROM clientes WHERE cidade = 'Coimbra' AND sexo = "f"


SELECT nome, email FROM clientes WHERE cidade = "Paris" AND sexo = "m"

--Vamos usar o OR para ir buscar

SELECT * FROM produtos WHERE preco_unidade < 1 OR preco_unidade >2;


-- NOT - permite devolver os registros cujas condições indicadas não sejam verdadeiras

SELECT nome FROM clientes WHERE NOT sexo = 'm';
-- neste caso, vai devolver todos os clientes do sexo feminino


SELECT * FROM produtos WHERE NOT preco_unidade <= 1.5
--devolve todos os produtos cujo preço é superior a 1.5 (exclusive)

EXISTS --operador pouco usado,

--
SELECT * FROM clientes WHERE EXISTS(SELECT cidade FROM clientes WHERE cidade = "Paris")