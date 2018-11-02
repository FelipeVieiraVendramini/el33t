<?php
/**
 * O projeto el33t não é um projeto de código aberto, sua reprodução ou cópia estão
 * sujeitos as penalidades da lei.
 *
 * Descrição:
 *
 * Criado por Felipe Vieira Vendramini (felipevendramini@live.com)
 * Criado por Rodrigo Teles Correa (Skype: rodrigo762356)
 *
 * Projeto: PhpStorm.
 * Criado por: FELIPEVIEIRAVENDRAMI
 * Criado em: 02/11/2018 14:27
 */
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Load macros
        require base_path() . '';
    }
}