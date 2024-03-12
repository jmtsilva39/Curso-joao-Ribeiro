<?php

// COPIAR, MOVER, RENOMEAR E ELIMINAR FICHEIROS

// Para mover um ficheiro (a cópia duplica), usamos a função rename
rename(__DIR__ . '/file_to_move.nfo', __DIR__ . '/destino/file_to_move.nfo');

// Esta função serve também para renomear o ficheiro, desde que seja mantida a path
rename(__DIR__ . '/file_to_move.nfo', __DIR__ . '/new_file_to_move.nfo');