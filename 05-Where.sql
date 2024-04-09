-- Buscar apenas os clientes que são da cidade de Lisboa.
SELECT * FROM clientes WHERE cidade = 'Lisboa';

-- buscar os clientes que são só sexo masculino
SELECT * FROM clientes where sexo = "m";

-- COM o WHERE podemos usar várias condições em sequência.
-- por exemplo, quero saber quantos clientes são de Coimbra e do sexo feminino.
SELECT * FROM clientes WHERE cidade = "COIMBRA" AND sexo = "f";

