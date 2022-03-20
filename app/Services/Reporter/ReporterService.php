<?php
namespace App\Services\Reporter;

use Carbon\Carbon;
use GuzzleHttp\Client;
use Throwable;

class ReporterService{
    private static $instance;

    public function __construct()
    {
    }

    public function captureException(Throwable $e){
        $message = '';
        $message .= sprintf("*Environment: %s* \n", env('APP_ENV'));
        $message .= sprintf("*Time: %s (Asia/Phnom_Penh)*\n", Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateTimeString());
        $message .= "```\n";
        $message .= substr((string)$e, 0, 1000) . '...';
        $message .= "\n```";

        $client = new Client();
        $token = env('TELEGRAM_TOKEN');
        $groupId = env('TELEGRAM_GROUP_REPORT_ID');

        $url = sprintf('https://api.telegram.org/bot%s/sendMessage', $token);
        $result = $client->post($url, [
            'json' => [
                'chat_id' => $groupId,
                "text" => $message,
                'parse_mode' => 'Markdown'
            ]
        ]);
    }

    /**
     * @return ReporterService
     */
    public static function instance(){
        if(!self::$instance){
            self::$instance = app(ReporterService::class);
        }
        return self::$instance;
    }
}