<?php

namespace App\Console\Commands;

use App\Models\Actions\Actions;
use App\Models\Users\UserFactory;
use App\Models\Users\UserInterface;
use Illuminate\Console\Command;

class GetUserAction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:list-actions {role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get list user\'s actions';

    public function __construct(
        public readonly UserFactory $factory,
        public readonly Actions $actions
    )
    {
        parent::__construct();
    }


    public function handle()
    {
        $role =  $this->argument('role');

        $user = $this->factory->getUserObject($role);
        if(!($user instanceof UserInterface)) {
            throw new \Exception('Role don\'t exist');
        }

        $userListActions = $user->getListActions();
        $actionListDetails = $this->actions->getListDetails();

        foreach ($userListActions as $action) {
            echo("- " . $actionListDetails[$action]). PHP_EOL;
        }

    }
}
