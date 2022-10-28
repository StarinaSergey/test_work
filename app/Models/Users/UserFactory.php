<?php

namespace App\Models\Users;

class UserFactory
{
    public function getUserObject(string $role):? UserInterface
    {
        return match ($role) {
            "writer" => new Writer(),
            "tester" => new Tester(),
            "manager" => new Manager(),
            "designer" => new Designer(),
            default => null
        };
    }
}
