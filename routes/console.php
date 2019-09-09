<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command("inspire 
               {user : The ID of the user}
               {--queue=* : Whether the job should be queued}", function () { //闭包命令
    $arguments = $this->arguments();
    $userId = $this->argument('user');
    $options = $this->options();
    print_r($arguments);
    print_r($options);

//    $name = $this->ask('What is your name?');
//    $password = $this->secret('What is the password?');
//    echo "$name\r\n";
//    echo "$password\r\n";
    $this->info(Inspiring::quote());
})->describe('Display an inspiring quote');
