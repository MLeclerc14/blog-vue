<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'filable_id', 'filable_type', 'name'
    ];

    /**
     * Get all of the owning filable models.
     */
    public function filable()
    {
        return $this->morphTo();
    }
}
