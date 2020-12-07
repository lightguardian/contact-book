<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';

    protected $fillable = 
    [
        'name',
        'cpf',
        'email',
        'birthdate'

    ];

    // public function setNameAttribute($value)

    // {
    //     $this->attributes['name'] = $value;
    //     $this->attributes['slug'] = Str::slug($value);

    // }

}
