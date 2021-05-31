<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model{
    protected $table = 'xp';

    public function getConversion(){
        $years = floor($this->meses / 12);
        $modulo = $this->meses % 12;
        return "del proyecto: $years años $modulo meses";
    }
}