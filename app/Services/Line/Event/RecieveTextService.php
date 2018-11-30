<?php
namespace App\Services\Line\Event;
use LINE\LINEBot;
use DB;
use LINE\LINEBot\Event\MessageEvent\TextMessage;
class RecieveTextService
{
    /**
     * @var LineBot
     */
    private $bot;
    /**
     * Follow constructor.
     * @param LineBot $bot
     */
    public function __construct(LineBot $bot)
    {
        $this->bot = $bot;
    }
    /**
     * 登録
     * @param TextMessage $event
     * @return string
     */
    public function execute(TextMessage $event)
    {
        // メッセージ拾い
        if($event->getText() =='上田'){
            return $event->getText().'さん大好きだよ';
        }else{
            return $event->getText();
        }



    }
}