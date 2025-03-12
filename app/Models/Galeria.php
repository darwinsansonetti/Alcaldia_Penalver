<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeria extends Model{
    protected $table = "galeria";

    protected $fillable = [
        'id','title','path_image','activo',
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