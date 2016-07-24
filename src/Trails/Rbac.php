<?php

namespace Ideasvn\Rbac\Trails;

trait Rbac
{
    public function roles() {
        return $this->belongsToMany('Ideasvn\Rbac\Model\Role')->withTimestamps();
    }
}