<?php

namespace App\Models\Users;

use App\Models\Actions\Actions;

class Writer implements UserInterface
{
    public function getListActions(): array
    {
        return [
            Actions::WRITE_CODE, Actions::TEST_CODE
        ];
    }
}
