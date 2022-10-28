<?php

namespace App\Models\Users;

use App\Models\Actions\Actions;

class Designer implements UserInterface
{
    public function getListActions(): array
    {
        return [
           Actions::DRAW_DESIGN, Actions::SPEAK_WITH_MANAGER
        ];
    }
}
