<?php
/**
 * O projeto el33t não é um projeto de código aberto, sua reprodução ou cópia estão
 * sujeitos as penalidades da lei.
 *
 * Descrição: este documento define a direção que o sistema irá seguir e os módulos que serão carregados.
 * As páginas são todas armazenadas no banco de dados e são carregadas dinamicamente, porém, algumas coisas
 * são carregadas especificamente para uma página, e esses módulos são carregados aqui. Estilos e skins do site
 * também devem ser configurados aqui.
 *
 * Criado por Felipe Vieira Vendramini (felipevendramini@live.com)
 * Criado por Rodrigo Teles Correa (Skype: rodrigo762356)
 *
 * Projeto: PhpStorm.
 * Criado por: FELIPEVIEIRAVENDRAMI
 * Criado em: 19/10/2018 13:21
 */


if (!isset($INDEX_LOADED) || isset($LOAD_PAGE))
    die("Invalid request");

$LOAD_PAGE = true;

include_once (WEBSITE_ROOT . "master.php");