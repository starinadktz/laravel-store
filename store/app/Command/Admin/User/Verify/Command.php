<?php

namespace App\Command\Admin\User\Verify;

use App\Entity\User\User;

class Command
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}