<?php

namespace App\Models\Admin;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Socio
 * @package App\Models\Admin
 * @version November 27, 2021, 3:12 am UTC
 *
 * @property string $name
 * @property string $lastname
 * @property string $dni
 * @property string $direction
 * @property string $phone
 * @property boolean $estado
 * @property string $email
 */
class Socio extends Model
{
    
    use HasFactory;

    public $table = 'socios';
    

    protected $dates = ['deleted_at'];

    public $timestamps = false;

    public $fillable = [
        'name',
        'lastname',
        'dni',
        'direction',
        'phone',
        'estado',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'dni' => 'string',
        'name' => 'string',
        'lastname' => 'string',        
        'direction' => 'string',
        'phone' => 'string',
        'estado' => 'boolean',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dni' => 'numeric|required|min:8|unique:socios',
        'name' => 'required',
        'lastname' => 'required',        
        'direction' => 'required',
        'phone' => 'required',
        'estado' => 'required',
        'email' => 'nullable'
    ];
    public static $updateRules = [        
        'name' => 'required',
        'lastname' => 'required',        
        'direction' => 'required',
        'phone' => 'required',
        'estado' => 'required',
        'email' => 'nullable'
    ];
    
}
