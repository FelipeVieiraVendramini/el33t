<?php
/**
 * O projeto el33t não é um projeto de código aberto, sua reprodução ou cópia estão
 * sujeitos as penalidades da lei.
 *
 * Descrição: Este arquivo de inicialização define as variáveis iniciais do site de maneira global,
 * ou seja, qualquer coisa que deva estar presente em todas as páginas do projeto, deverão ser encontradas
 * aqui.
 *
 * Criado por Felipe Vieira Vendramini (felipevendramini@live.com)
 * Criado por Rodrigo Teles Correa (Skype: rodrigo762356)
 *
 * Projeto: PhpStorm.
 * Criado por: FELIPEVIEIRAVENDRAMI
 * Criado em: 19/10/2018 13:14
 */

if (isset($INDEX_LOADED))
    die("Index has already been loaded");

if (!isset($_SESSION)) {
    session_start();
}

define ("WEBSITE_ROOT", __DIR__ . "\\");
define ("WEBSITE_INDEX", WEBSITE_ROOT . "index.php");

// Definição da variável que certifica o carregamento do índice.
$INDEX_LOADED = true;

include_once(WEBSITE_ROOT . "load.php");