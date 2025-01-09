<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['title', 'content'];
=======
    protected $fillable = ['nome', 'title', 'content'];
>>>>>>> 8fe9dbb (Primeiro commit)
}
