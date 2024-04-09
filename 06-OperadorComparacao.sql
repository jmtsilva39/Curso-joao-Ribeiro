

SELECT nome, cidade FROM clientes WHERE cidade = "Lisboa";

SELECT * from colaboradores WHERE sexo <> "f";

SELECT * FROM clientes WHERE cidade = "Lisboa" AND sexo = "f";

SELECT * FROM produtos WHERE preco_unidade > 1;

select * from produtos where preco_unidade <=1.5;

-- Esse tipo de operador não vai funcionar com colunas do tipo varchar
SELECT * FROM produtos WHERE preco_unidade >=1 AND preco_unidade <=2;

SELECT nome FROM clientes WHERE nome > 10;
-- esta query não vai devolver dados.

-- Mas podes usar, por exemplo, com colunas do tipo DATETIME
--Tem atenção o formato da data. Deve ser ano, mês, dia, hora, minuto e segundo
SELECT * FROM encomendas WHERE data_hora <= "2030-01-02 10:00:00";

