<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;



class Accounts extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'postition',
        'short_desc',
        'avatar_url',
        'show_user'
    ];
}
