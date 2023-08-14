<?php

namespace Vitaliitsarov\Central\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $connection = 'central_database';
    public $incrementing = false;
    protected $guarded = [];
    public $timestamps = false;

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
