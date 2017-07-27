<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use QL\QueryList;
use App\Http\Model\Gather;
use Illuminate\Support\Facades\Validator;
use App\Http\Model\Doc;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\Request;
class autoGather extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:gather';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '自动采集';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
  public function deep_in_array($value, $array)
  {
    foreach ($array as $item) {
      if (!is_array($item)) {
        if ($item == $value) {
          return true;
        } else {
          continue;
        }
      }

      if (in_array($value, $item)) {
        return true;
      } else if ($this->deep_in_array($value, $item)) {
        return true;
      }
    }
    return false;
  }

  public function isDomain($domain)
  {
    return preg_match('/(\.us|\.tv|\.org\.cn|\.org|\.net\.cn|\.net|\.mobi|\.me|\.la|\.info|\.hk|\.gov\.cn|\.edu|\.com\.cn|\.com|\.co\.jp|\.co|\.cn|\.cc|\.biz)/i', $domain) ? true : false;
  }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      //获取所要采集的分类页的网址
      // $siteName = Gather::where('auto', '是')->get()->toArray()['site_name'];

      $gather = Gather::where('auto', '是')->get()->toArray();


      foreach ($gather as $g) {
        $siteName = $g['site_name'];
        $categoryUrl = $g['category_url'];
        $categoryKeyword = explode(',', $g['category_keyword']);
        $time_selector = $g['time_selector'];
        $titleSelector = $g['title_selector'];
        $contentUrlSelector = $g['content_url_selector'];
        $docTitle = $g['doc_title'];
        $docContent = $g['doc_content'];
        $categorySite = [];

        foreach ($categoryKeyword as $cK) {
          array_push($categorySite, 'http://' . $siteName . $categoryUrl . '/' . $cK);
        }
        //dd($categorySite);
        foreach ($categorySite as $cS) {
          if ($time_selector) {
            $rules = array(
              'title' => array($titleSelector, 'text'),
              'content_url' => array($contentUrlSelector, 'href'),
              'time' => array($time_selector, 'text'),
            );
          } else {
            $rules = array(
              'title' => array($titleSelector, 'text'),
              'content_url' => array($contentUrlSelector, 'href'),

            );
          }


          $html = $cS;

          $data = array_slice(QueryList::Query($html, $rules)->data, 0, 10);
          // dd(!$this->isDomain($data[0]['content_url']));
          if (!$this->isDomain($data[0]['content_url'])) {//判断获取的链接是否包含域名，如果没有域名则添加
            foreach ($data as &$d) {
              $d['content_url'] = 'http://' . $siteName . $d['content_url'];

            }
            // dd($data);
          }

          // dd($data);
          //  dd(date("Y/m/d"));
          if ($time_selector) {
            foreach ($data as $k => $v) {
              if ($v['time'] !== date("Y/m/d")) {//只保留当天的
                unset($data[$k]);
              }
            }
          }

          $dataOnlyTitle = [];

          foreach ($data as $k => $v) {//只保留title,方便判断是否已经采集了该文章
            array_push($dataOnlyTitle, array('title' => $v['title']));

          }

          //  dd($dataOnlyTitle);
          //  dd($data);
          foreach ($dataOnlyTitle as $k => $v) {
            $validator = Validator::make($v, ['title' => 'required|exists:docs,title'], ['title.exists' => '文档已经存在', 'required' => '标题不能为空']);

            if ($validator->passes()) {
              unset($dataOnlyTitle[$k]);
            }

          }
          // dd($dataOnlyTitle);
          $finalData = [];
          foreach ($data as $k => $v) {
            if ($this->deep_in_array($v['title'], $dataOnlyTitle)) {
              $t = QueryList::Query($v['content_url'], array(
                'title' => array($docTitle, 'text'),
                'content' => array($docContent, 'html'),
              ))->data;
              //  dd($t);
              $t[0]['from'] = $v['content_url'];
              $t[0]['status'] = 'wait_for_verify';
              array_push($finalData, $t[0]);
            }

          }

          //   dd($finalData);


          foreach ($finalData as $fD) {
            // dd($fD);
            Doc::create($fD);
          }
//      dd($finalData);


        }

      }
    }
}
