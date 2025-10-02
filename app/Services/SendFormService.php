<?php

namespace App\Services;

use App\Jobs\SendTelegramNotification;
use App\Models\UserFormData;
use Illuminate\Support\Facades\Log;
use Telegram\Bot\Laravel\Facades\Telegram;
class SendFormService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function sendWorm($data)
    {
        $user_form_data = UserFormData::create($data);

        if ($user_form_data) {
            $this->sendToTelegram($data);
            SendTelegramNotification::dispatch($data);
            return true;
        }else{
            return false;
        }
    }
    public function sendToTelegram($data)
    {
        $message = "📧 Новая заявка с сайта!\n\n";
        $message .= "👤 Имя: {$data['name']}\n";
        $message .= "📧 Email: {$data['email']}\n";
        $message .= "📞 Телефон: " . ($data['phone'] ?? 'не указан') . "\n";
        $message .= "💬 Сообщение: {$data['description']}\n";
        $message .= "⏰ Время: " . now()->format('d.m.Y H:i');

        try {
            Telegram::sendMessage([
                'chat_id' => env('TELEGRAM_CHAT_ID'),
                'text' => $message,
                'parse_mode' => 'HTML'
            ]);
        } catch (\Exception $e) {
            Log::error('Ошибка отправки в Telegram: ' . $e->getMessage());
        }
    }

}
