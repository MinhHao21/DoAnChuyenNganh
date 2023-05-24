<?php

namespace App\Providers;

use App\Models\Banner;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Post;
use App\Models\Luottruycap;
use App\Models\Video;
use App\Models\Thuvienanh;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Carbon\Carbon;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function catchuoi($chuoi, $dodai)
    {

        $mang = explode(' ', $chuoi);
        // return count($mang);
        $dodaimang = count($mang);
        if ($dodaimang > $dodai) {
            $dodaimang = $dodai;
        }
        $i = 0;
        $tieude = '';
        while ($i < $dodaimang) {
            $tieude = $tieude . ' ' . $mang[$i];
            $i = $i + 1;
        }
        return $tieude;
    }

    
    public function boot()
    { 
    //     // $mucluc =  Post::orderBy('id', 'desc')->where('danhmuc_id', 3)->where('published_at', '!=', null)->take(4)->get();
    //     $mucluc =  DB::table('posts')->select('*')->join('fileuploads', 'fileuploads.idtruong', '=', 'posts.id')->where('posts.published_at', '!=', null)->orderBy('posts.id', 'desc')->where('posts.danhmuc_id', 119)->get();
    //     $video = Video::orderBy('id', 'desc')->get();
    //     $thuvienanh = Thuvienanh::orderBy('id', 'desc')->get();
    //     $bannernoibat = Banner::where('hienthi', '=', 1)->orderBy('id', 'desc')->first();
    //     $banner = Banner::where('hienthi', '!=', 1)->orderBy('id', 'desc')->get();
    //     $datas = getDanhmuc(null);
    //     View::share('bannernoibat',  $bannernoibat);
    //     View::share('danhmuc',  $datas);
    //     View::share('mucluc',  $mucluc);
    //     View::share('thuvienanh',  $thuvienanh);
    //     View::share('banner',  $banner);
    //     View::share('video',  $video);
    //     Paginator::useBootstrap();




    //     $datetime = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
    //     // return $datetime;
    //     $date = Carbon::createFromFormat('Y-m-d H:i:s',$datetime)->format('d/m/Y');
        
      
    //     $checkngay = Luottruycap::where('thoigian',$date)->first();
    //     if($checkngay){

    //         View::share('homnay',  ($checkngay->soluong));
    //     }else{
    //         $homay = 1;
    //         View::share('homnay',  $homay);
    //     }

    //     $homqua = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::yesterday())->format('d/m/Y');
    //     $homqua = Luottruycap::where('thoigian',$homqua)->first();
    //     if($homqua){
    //         View::share('homqua',  ($homqua->soluong));
            
    //     }else{
    //         $homay = 0;
    //         View::share('homqua',  0);

    //     }
        
        
        

    //     $allLuotTruyCap  =  Luottruycap::all();
    //     // return  $allLuotTruyCap;
    //     $now = Carbon::now();
        
    //     $tuannay = Luottruycap:: whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
    //     $countTuan  = 0;
    //     foreach($tuannay as $t){
            
    //         $countTuan += $t->soluong;
    //     }
    //     View::share('tuannay',  $countTuan);



    //     $month = Carbon::createFromFormat('Y-m-d H:i:s',$datetime)->format('m');
    //     $thangnay  = Luottruycap::whereMonth('created_at', $month)->get();
    //     $countthang = 0;
    //     foreach($thangnay as $th){
    //         $countthang +=  $th->soluong;
    //     }
    // //    $premonth = $month - 1;
    //     View::share('thangnay',  $countthang);
        
    //     $thangqua  = Luottruycap::whereMonth('created_at', ((int)$month-1))->get();
    //     $countthangqua = 0;
    //     foreach($thangqua as $th){
    //         $countthangqua +=  $th->soluong;
    //     }
    //     View::share('thangqua',  $countthangqua);

    //     $tongluottruycap = 0;
    //     foreach($allLuotTruyCap as $all){
            
    //        $tongluottruycap += $all->soluong;
    //     }

    //     View::share('tongluottruycap',  $tongluottruycap);

    }
}
