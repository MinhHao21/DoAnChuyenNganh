<?php

namespace App\Console\Commands;

use App\Models\Danhmuc;
use App\Models\Document;
use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class converdataerror extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'conver:data';

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
    public function handle()
    {
        // $document_types = Danhmuc::where('loaidanhmuc_id',4)->get();
        // foreach ($document_types as $dt){

        //     $kiemtra = Post::where('danhmuc_id',$dt->id)->count();
        //     if($kiemtra <= 0 ){
        //         $kiemtra = Danhmuc::where('id',$dt->id)->delete();
        //     }
        // }
        // $coquanbanhanh = Danhmuc::where('loaidanhmuc_id',5)->get();
        // foreach ($coquanbanhanh as $cqbh){

        //     $kiemtra = Post::where('danhmuc_id',$cqbh->id)->count();
        //     if($kiemtra <= 0 ){
        //         $kiemtra = Danhmuc::where('id',$cqbh->id)->delete();
        //     }
        // }
        // $posts = Post::where('danhmuc_id',45)->delete();
        $Vanban = Document::orderBy('id', 'desc')->get();
        foreach ($Vanban as $vb) {

            // $str = trim($vb->sokyhieu);
            // $str = preg_replace('/[^a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễếệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/', '-', $str);
            // $str = preg_replace('/-+/', "-", $str);

            // $vb->slug = rtrim($str, '-');      

            $check = Document::where('slug', $vb->slug)->count();
            if ($check > 0) {
                $vb->slug = $vb->slug.$check;
            }
            $vb->save();
        }
    }
}
