<?php

namespace App\Models;
use Eloquent as Model;

/**
 * Class Empleado
 * @package App\Models
 * @version September 11, 2021, 2:11 pm UTC
 *
 */
class Empleado extends Model
{
    public $table = 'empleados';
    public $fillable = [
        'nombre',
        'apellido',
        'empresa',
        'email',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|max:255|min:3',
        'apellido' => 'required|max:255|min:3',
        'email' => 'email'
    ];

    public function empleador() {
        return $this->belongsTo(Empresa::class, 'empresa');
    }
}
