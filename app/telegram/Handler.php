<?php

namespace App\telegram;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use Illuminate\Support\Stringable;

class Handler extends WebhookHandler {


    public function balance(): void {
        $this->reply("скоро можно будет узнать свой баланс");
    }

	public function addMoney():void {
		 $this->reply("не скоро можно будет пополнить свой баланс");
	}
}
