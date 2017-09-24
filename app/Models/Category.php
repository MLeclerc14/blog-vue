<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The posts that belong to the category.
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    /**
     * Get all of the url's categories.
     */
    public function urls()
    {
        return $this->morphMany(Url::class, 'urlable');
    }

    /**
     * Get all of the file's categories.
     */
    public function files()
    {
        return $this->morphMany(File::class, 'filable');
    }
}
