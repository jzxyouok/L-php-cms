<?php

namespace App\Console;

use App\Http\Model\Doc;
use App\Http\Model\Gather;
use App\Http\Requests\Request;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use QL\QueryList;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
      \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
      $schedule->call(function () {

//获取所要采集的分类页的网址
        $siteName=Gather::where('auto','是')->first()->toArray()['.site_name'];
        $categoryUrl=Gather::where('auto','是')->first()->toArray()['.category_url'];
        $categoryKeyword=Gather::where('auto','是')->first()->toArray()['.category_keyword'];


    Gather::where('auto','是')->first();
    $rules = array(
      'title' => array($title, 'text'),
      'content' => array($content, 'html'),
    );

    $html = $url;

    $data = QueryList::Query($html, $rules)->data;
//打印结果
    return response()->json(['code' => 1, 'msg' => '采集成功', 'gatheredData' => $data[0]]);




      })->everyThirtyMinutes();
    }
}
