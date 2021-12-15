<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Comentario
 * @package App\Models\Admin
 * @version December 10, 2021, 7:27 pm UTC
 *
 * @property string $name
 * @property email $email
 * @property string $subject
 * @property string $message
 */
class Comentario extends Model
{
    

    use HasFactory;

    public $table = 'comentarios';
    

    public $timestamps = false;



    public $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'subject' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'message' => 'exit'
    ];

    
}
