<?php

namespace App\Console\Commands;

use App\Models\Danhmuc;
use App\Models\Document;
use App\Models\Fileupload;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class converdocument extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'conver:document';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function xoadau($text)
    {
        $text = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $text);
        $text = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $text);
        $text = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $text);
        $text = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $text);
        $text = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $text);
        $text = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $text);
        $text = preg_replace("/(đ)/", 'd', $text);
        $text = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $text);
        $text = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $text);
        $text = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $text);
        $text = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $text);
        $text = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $text);
        $text = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $text);
        $text = preg_replace("/(Đ)/", 'D', $text);
        $text = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $text);
        $text = preg_replace("/()/", '', $text);
        return $text;
    }
    public function handle()
    {
        $response = Http::get('http://127.0.0.1:8888/cms/v1/testvanban');
        foreach ($response['data'] as $key => $data) {
            // Tạo văn bản
            $danhmuc = Danhmuc::where('name', $data['danhmuc'])->first();
            $document = new Document();
            // $document->title = $data['titile'];
            $document->sokyhieu = $data['code'];

            if ($danhmuc) {
                $document->danhmuc_id = $danhmuc->id;
            }
            $document->trichyeu = $data['mota'];
            $document->luotxem = $data['viewxem'];
            $document->published_at = $data['pulic'];
            $document->save();

            // File đính kèm
            $file = new Fileupload();
            $file->tenbang = 'document';
            $file->idtruong =  $document->id;
            $file->tenfile = $data['filename'];
            $file->duoifile = $data['duoifile'];
            $file->loaifile = $data['duoifile'];
            $file->link = $data['link'];
            $file->save();

            $this->info($key);
        }
    }
}
