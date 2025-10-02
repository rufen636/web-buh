<?php
// app/Jobs/SendTelegramNotification.php

namespace App\Jobs;

use App\Services\SendFormService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;


class SendTelegramNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(private array $formData)
    {
    }

    public function handle(SendFormService $telegramService)
    {
        $telegramService->sendToTelegram($this->formData);
    }
}
