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
 * Criado em: 24/10/2018 12:48
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexCarousel extends Model
{
    protected $table = "content_index_carousel";

    /**
     * The identity of the carousel item.
     *
     * @return int
     */
    public function id() {
        return $this->attributes['id'];
    }

    /**
     * The url to the requested image.
     *
     * @return string
     */
    public function getImgUrl() {
        return $this->attributes['img_url'];
    }

    public function getAltText() {
        return $this->attributes['name'];
    }

    public function getTitle() {
        return $this->attributes['title'];
    }

    public function getTitleColor() {
        return "#".dechex($this->attributes['title_color']);
    }

    public function getDescription() {
        return $this->attributes["description"];
    }

    public function getDescriptionColor() {
        return "#". dechex($this->attributes["description_color"]);
    }

    public function hasButton() {
        return $this->attributes['button'] != null;
    }

    public function getButtonText() {
        return $this->attributes['button'];
    }

    public function getUrl() {
        return $this->attributes['url'];
    }

    public function getButtonClass() {
        return $this->attributes['button_class'];
    }
}