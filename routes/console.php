<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

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

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Artisan::command('tester', function () {
    /** @var \DefStudio\Telegraph\Models\TelegraphBot $bot */
    $bot = \DefStudio\Telegraph\Models\TelegraphBot::find(2);

    dd($bot->registerCommands([
        '/balance' => 'узнать свой баланс',
        '/addMoney' => 'пополнить баланс (*временно не доступно*)',
    ])->send());

});
