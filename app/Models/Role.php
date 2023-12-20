<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function user_roles()
    {
        return $this->hasMany(RoleUser::class, 'role_id', 'id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
