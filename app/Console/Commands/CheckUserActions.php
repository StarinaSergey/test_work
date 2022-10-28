<?php

namespace App\Console\Commands;

use App\Models\Users\UserFactory;
use App\Models\Users\UserInterface;
use Illuminate\Console\Command;

class CheckUserActions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:can {role} {action}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check user actions';

    public function __construct(private readonly UserFactory $factory)
    {
        parent::__construct();
    }


    public function handle()
    {
        $role =  $this->argument('role');
        $action = $this->argument('action');

        $user = $this->factory->getUserObject($role);
        if(!($user instanceof UserInterface)) {
            throw new \Exception('Role don\'t exist');
        }

        echo( (in_array($action, $user->getListActions()))? "true" : "false" );

    }
}
