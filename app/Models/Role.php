<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Helpers\Roles;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function scopeAdmin(Builder $query)
    {
        return $this->getRole($query, 'Admin');
    }

    public function scopeCustomer(Builder $query)
    {
        return $this->getRole($query);
    }

    public function getRole(Builder $query, string $role = 'Customer')
    {
        return $query->where('name', Roles::findByKey(ucfirst($role))->value);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
