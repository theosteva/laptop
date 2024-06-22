<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use OpenApi\Annotations as OA;


/**
 * Class book.
 * 
 * @author  Theodorus <Theodorus.42202107@ukrida.ac.id>
 * 
 * @OA\Schema(
 *     description="book model",
 *     title="book model",
 *     required={"title", "author"},
 *     @OA\Xml(
 *         name="book"
 *     )
 * )
 */
class book extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $table = 'books';
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'publication_year',
        'cover',
        'description',
        'price',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
    ];

    public function data_adder(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
