<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'name', 'parent_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'position_id');
    }

    public function boss()
    {
        return $this->belongsTo(Position::class, 'parent_id');
    }

    public function subordinates()
    {
        return $this->hasMany(Position::class, 'parent_id')->with(['subordinates', 'users']);
    }
}
