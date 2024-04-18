/*Vamos começar por alterar o nome de um colaborador
*/

SELECT * FROM colaboradores WHERE id=5;

/*
Como pode observar, trata-se da Débora Barros.
Vamos alterar o nome e o sexo dela.
*/


UPDATE colaboradores
SET nome = 'Mário Antunes',
sexo = 'm'
WHERE id = 5;

