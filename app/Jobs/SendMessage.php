<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;


class SendMessage implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $surname;
    protected $name;
    protected $fathername;
    protected $phoneNumber;
    protected $email;
    protected $message;
    protected $botToken;
    protected $chatId;

    /**
     * Create a new job instance.
     */
    public function __construct($surname, $name, $fathername, $phoneNumber, $email, $message)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->fathername = $fathername;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->message = $message;
        $this->botToken = env('TELEGRAM_BOT_TOKEN');
        $this->chatId = env('TELEGRAM_CHAT_ID');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // https://api.telegram.org/bot
        $text = "Новое сообщение от: {$this->name}\n\n{$this->email}";
        Http::post("https://api.telegram.org/bot{$this->botToken}/SendMessage", [
            'chat_id' => $this->chatId,
            'text' => $text,
        ]);

    }
}
