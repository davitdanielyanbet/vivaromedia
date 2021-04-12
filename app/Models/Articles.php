<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
            'author_id',
            'title',
            'slug',
            'description',
            'featured_image'
        ];
}
