<?php

namespace Ideasvn\Rbac\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $fillable = ['name', 'display_name', 'description'];

    public function roles() {
        return $this->belongsToMany('Ideasvn\Rbac\Model\Role');
    }
}
