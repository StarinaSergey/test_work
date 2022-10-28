<?php

namespace App\Models\Actions;


class Actions implements ActionInterface
{
    const TEST_CODE = 'testing';
    const WRITE_CODE = 'writing';
    const SPEAK_WITH_MANAGER = 'spiking';
    const SET_TASK = "setting";
    const DRAW_DESIGN = "drawing";

    public function getListDetails(): array
    {
        return [
            self::WRITE_CODE => "Write code",
            self::TEST_CODE => "Test code",
            self::SPEAK_WITH_MANAGER => "Speaking with manager",
            self::SET_TASK => "Can set task",
            self::DRAW_DESIGN => "Draw desing"
        ];
    }
}
