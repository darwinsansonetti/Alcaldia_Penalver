<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Noticia extends Model{
    protected $table = "noticia";

    protected $fillable = [
        'id','title','descripcion','path_image','fecha','activo',
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