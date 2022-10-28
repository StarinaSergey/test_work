<?php

namespace App\Models\Users;

use App\Models\Actions\Actions;

class Manager implements UserInterface
{
    public function getListActions(): array
    {
        return [
           Actions::SET_TASK
        ];
    }
}
