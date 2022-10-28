<?php

namespace App\Models\Users;

use App\Models\Actions\Actions;

class Tester implements UserInterface
{
    public function getListActions(): array
    {
        return [
           Actions::TEST_CODE, Actions::SPEAK_WITH_MANAGER, Actions::SET_TASK
        ];
    }
}
