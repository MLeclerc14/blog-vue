<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'urlable_type', 'urlable_id', 'slug'
    ];

    /**
     * Get all of the owning urlable models.
     */
    public function urlable()
    {
        return $this->morphTo();
    }
}
