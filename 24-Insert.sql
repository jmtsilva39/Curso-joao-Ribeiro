/*
INSERT INTO tabela
(coluna1, coluna2,...)
VALUES
(valor1, valor2,...)

 */

 INSERT INTO colaboradores(nome, sexo, ativo)
 VALUES ('colaborador1', 'm', 1);

 -- Também podemos inserir apenas alguns valores

 INSERT INTO colaboradores(nome)
 VALUES (colaborador2);

 --ou 
 INSERT INTO colaboradores(nome, ativo)
 VALUES ('colaboradore3', 1);

 /*Neste dois casos, as colunas que não foram indicadas,
  vão ficar automaticamente com o valor
 padrão definido no schema para cada uma delas
 */

 INSERT INTO colaboradores
 VALUES(0, 'colaborador4', 'm', 1);

 /* Repara que atribuí um valor para cada coluna existente na tabela
 dos colaboradores. */




/* Podemos usar o INSERT para copiar dados de uma tabela para a outra da seguinte forma
*/

INSERT INTO tabela_b(nome, email)
SELECT nome, email
FROM tabela_a;

/* */