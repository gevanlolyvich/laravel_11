<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    protected $with = ['author', 'category']; // pencegah problem N+1 

    public function author(): BelongsTo //relation one to many
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void //query scope
    {
        $query->when($filters['search'] ?? false, 
            fn ($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );

        $query->when($filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas('category', 
            fn ($query) => $query->where('slug', $category)) // whereHas digunakan saat ada relasi seperti post dengan category dimana category didalam wherehas adalah method category diatas
        );

        $query->when($filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas('author', 
            fn ($query) => $query->where('username', $author)) // whereHas digunakan saat ada relasi seperti post dengan author dimana author didalam wherehas adalah method author diatas
        );
    }
}
