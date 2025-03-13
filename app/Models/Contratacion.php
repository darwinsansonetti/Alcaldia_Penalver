<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contratacion extends Model{
    protected $table = "contratacion";

    protected $fillable = [
        'id','llamado','title','condiciones','aclaratorias','recepcion','activo',
    ];

    // public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [        
        'created_at', 'updated_at',
    ];
}