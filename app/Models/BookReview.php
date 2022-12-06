<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookReview extends Model
{
    use HasFactory;

    protected $table = "book_reviews";
    protected $fillable = [
        "id",
        "comment",
        "edited",
        "book_id",
        "user_id",

    ];

    function book(){
        return $this->belongsTo(Book::class, 'id', 'book_id');
    }

    function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
