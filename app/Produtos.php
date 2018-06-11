<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'sku',
        'titulo',
        'descricao',
        'preco'
    ];

    public function getTituloFormattedAttribute(){
        return $this->titulo." 52";
    }

    public function getCreatedAtFormattedAttribute(){
        return (new \DateTime($this->created_at))->format('d/m/Y');
    }

    // public function setTituloAttribute($value){
    //     $value = 2; //ex;
    //     $this->titulo = $value;
    // }

}
