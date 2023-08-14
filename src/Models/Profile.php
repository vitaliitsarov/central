<?php

namespace Bootstoolspro\Central\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $connection = 'central_database';

    protected $table = 'profiles';

    protected $guarded = [];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
