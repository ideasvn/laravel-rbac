<?php

namespace Ideasvn\Rbac\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'display_name', 'description'];

    public function users() {
        return $this->belongsToMany('App\User');
    }

    public function permissions() {
        return $this->belongsToMany('Ideasvn\Rbac\Model\Permission')->withTimestamps();
    }
}
