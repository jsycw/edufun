<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\Author;

class Article extends Model
{
    use HasFactory;
    // artinya yang bisa diisi
    protected $fillable = [
        'title',
        'photo',
        'desc',
        'date',
        'author_id',
        'category_id'
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author() : BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
