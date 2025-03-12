<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model{
    protected $table = "video";

    protected $fillable = [
        'id','title','descripcion','path_video','activo',
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