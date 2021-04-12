<?php
namespace App\Models;
use App\Scopes\AncientScope;
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
