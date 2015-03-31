<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Wechat;

class WechatController extends Controller {

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
        Wechat::on('message', function($message){
            \Log::info("收到来自'{$message['FromUserName']}'的消息：{$message['Content']}");
        });

        return Wechat::serve();
    }

}
