<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use App\Models\Fileupload;
use App\Models\Post;
use Google\Service\AnalyticsReporting\OrderBy;
use Google\Service\Blogger\Resource\Posts;
use Illuminate\Http\Request;
use App\Models\Luottruycap;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use TheSeer\Tokenizer\Exception;

class VanhoaController extends Controller
{
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

    

    
    public function trangchu()
    {  

  
        
        $PostsNoibat = Post::where('published_at', '!=', null)->where('danhmuc_id', '!=', 26)->orderBy('id', 'desc')->take(8)->get();
       

        $Postnew = Post::where('danhmuc_id',26)->where('published_at', '!=', null)->orderBy('id', 'desc')->first();
        
            
        
        $Posts_id=[];
        $Posts_id[]=$Postnew->id;
        $quantam = Post::whereNotIn('id',$Posts_id)->where('danhmuc_id',26)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(4)->get();

        
        $PostDienanh = Post::where('danhmuc_id',80)->where('published_at', '!=', null)->orderBy('id', 'desc')->first();

        
        $Posts_idDienanh = [];
        $Posts_idDienanh[]=$PostDienanh->id;
        $PostsDienanh = Post::whereNotIn('id',$Posts_idDienanh)->where('danhmuc_id',80)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(5)->get();

        

        $PostVanhoadoisong = Post::where('danhmuc_id',110)->where('published_at', '!=', null)->orderBy('id', 'desc')->first();

        
        $Posts_idvanhoadoisong=[];
        $Posts_idvanhoadoisong[]=$PostVanhoadoisong->id;
        $PostsVanhoadoisong = Post::whereNotIn('id',$Posts_idvanhoadoisong)->where('danhmuc_id',110)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(5)->get();

        
        $PostGocnhinvanhoa = Post::where('danhmuc_id',111)->where('published_at', '!=', null)->orderBy('id', 'desc')->first();

        
        $Posts_idgocnhinvanhoa=[];
        $Posts_idgocnhinvanhoa[]=$PostGocnhinvanhoa->id;
        $PostsGocnhinvanhoa = Post::whereNotIn('id',$Posts_idgocnhinvanhoa)->where('danhmuc_id',111)->where('published_at', '!=', null)->orderBy('id', 'desc')->take(5)->get();
        // $tuannay = Luottruycap:: whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        // return  $tuannay;

        $datetime = Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString();
        // return $datetime;
        $date = Carbon::createFromFormat('Y-m-d H:i:s',$datetime)->format('d/m/Y');
        $checkngay = Luottruycap::where('thoigian',$date)->first(); // hom nay
        if($checkngay){
            $checkngay->soluong=  $checkngay->soluong+1;
            
            $checkngay->save();
        }else{
            $taongay = new Luottruycap();
            $taongay->soluong= 1;
            $taongay->thoigian = $date;
            $taongay->save();
        }
        return view('posts.home',[
            'PostsNoibat' => $PostsNoibat,
    
            'quantam' => $quantam,
            'Postnew' => $Postnew,
            'PostDienanh'=>$PostDienanh,
            'PostsDienanh'=>$PostsDienanh,
            'PostVanhoadoisong'=>$PostVanhoadoisong,
            'PostsVanhoadoisong'=>$PostsVanhoadoisong,
            'PostGocnhinvanhoa'=>$PostGocnhinvanhoa,
            'PostsGocnhinvanhoa'=>$PostsGocnhinvanhoa,
            
        ]);
    }

    public function getThumbnail($content, $file)
    {
        $thumbnail = "";
        if(file_exists("storage/".$file)){
               return $file;
            }else{
                preg_match_all('/<img[^>]+>/i', $content, $result);
                
                if ($result) {
                    if ($result[0]) {
                        if ($result[0][0]) {
                            preg_match_all('/(src)=("[^"]*")/i', $result[0][0], $img);
                            if ($img) {
                                try {
                                    if (preg_match('/src=/', $img[0][0]) == 1) {
                                        $data = str_replace('src="/storage/', '', $img[0][0]);
                                        $data = str_replace('"', '', $data);
                                        // return $data;
                                        $thumbnail = $data;
                                    } else {
                                        $thumbnail = 'noimg.jpg';
                                    }
                                } catch (Exception $e) {
                                    $thumbnail = 'noimg.jpg';
                                }
                            } else {
                                $thumbnail = 'noimg.jpg';
                            }
                        } else {
                            $thumbnail = 'noimg.jpg';
                        }
                    }
                } else {
                    $thumbnail = 'noimg.jpg';
                }
                return $thumbnail;
            }
            
    }

    public function tintuc($slug, Request $request)
    {
        
        // return Danhmuc::all();
        $start = ($request->page - 1) * 16;
        $page = $request->page;
        $getdanhmuc = Danhmuc::where('slug', $slug)->first();
        $allbaiviet = Post::where('danhmuc_id', $getdanhmuc->id)->where('published_at', '!=', null)->orderBy('id', 'desc')->skip($start)->paginate(13);
        // return $allbaiviet;
        foreach($allbaiviet as $all=> $bv){
            // return  $bv->content;
            if(strlen(strstr($bv->thumbnail, 'http://'))>0){
                $bv->thumbnail =  str_replace('src=', '', $bv->thumbnail);
            }
        }
        
        if($slug == 'dac-san-van-hoa'){
            $allbaiviet1 =  DB::table('posts')->join('fileuploads', 'fileuploads.idtruong', '=', 'posts.id')->where('posts.published_at', '!=', null)->where('posts.danhmuc_id', $getdanhmuc->id)->orderBy('posts.id', 'desc')->paginate(16);
            // return $allbaiviet1;
            
            return view('posts.vanban',[
                'getdanhmuc' => $getdanhmuc,
                'page' => $page,
                'allbaiviet' => $allbaiviet1,
                // 'recordsTotal' => $recordsTotal,
            ]);
        }
        return view('posts.tintuc',[
            'getdanhmuc' => $getdanhmuc,
            'page' => $page,
            'allbaiviet' => $allbaiviet,
            // 'recordsTotal' => $recordsTotal,
        ]);
    }

    public function chitiettintuc($slug)
    {
        $baivietchitiet = Post::where('slug', $slug)->where('published_at', '!=', null)->first();
        $time2 = strtotime($baivietchitiet->created_at);
        // return 
        $newformat2 = date('d/m/Y',$time2);
        switch (date('l',$time2)){
            case 'Monday':
                $newformat2 = 'Thứ 2  '.$newformat2;
                break;
            case 'Tuesday':
                $newformat2 = 'Thứ 3  '.$newformat2;
                break;

            case 'Wednesday':
                $newformat2 = 'Thứ 4  '.$newformat2;
                break;

            case 'Thursday':
                $newformat2 = 'Thứ 5  '.$newformat2;
                break;
            case 'Friday':
                $newformat2 = 'Thứ 6  '.$newformat2;
                break;
            case 'Saturday':
                $newformat2 = 'Thứ 7  '.$newformat2;
                break;
            default:
                $newformat2 = 'Chủ nhật  '.$newformat2;
                break;
        }
        $baivietchitiet->ngaydangbai = $newformat2;

        
  
        $getdanhmuc = Danhmuc::where('id', $baivietchitiet->danhmuc_id)->first();

        $baivietlienquanleft = Post::orderBy('id', 'desc')->where('danhmuc_id', $getdanhmuc->id)->where('published_at', '!=', null)->take(4)->get();
        $listId = [];
        foreach($baivietlienquanleft as $lq){
            if(strlen(strstr($lq->thumbnail, 'http://'))>0){
                $lq->thumbnail =  str_replace('src=', '', $lq->thumbnail);
            }
            array_push($listId, $lq->id);
        }

        $baivietlienquanright= Post::orderBy('id', 'desc')->where('danhmuc_id', $getdanhmuc->id)->whereNotIn('id', $listId)->where('published_at', '!=', null)->take(4)->get();
        foreach($baivietlienquanright as $all=> $bv){
            
            if(strlen(strstr($bv->thumbnail, 'http://'))>0){
                $bv->thumbnail =  str_replace('src=', '', $bv->thumbnail);
            }
        }
      
        return view('posts.chitiettintuc',[
            'baivietchitiet' => $baivietchitiet,
            'slug' => $slug,
            'getdanhmuc' => $getdanhmuc,
            'baivietlienquanleft' => $baivietlienquanleft,
            'baivietlienquanright' => $baivietlienquanright,
  
        ]);

    }
    public function timkiempost(Request $request)
    {
       
            $post = Post::orderBy('id', 'desc')->where('published_at', '!=', null);
            if ($request->search) {
                $post =  $post->where(function ($query) use ($request) {
                    $query->where('title', 'like', '%' . $request->search . '%')
                        ->orWhere('title', 'like', $request->search . '%')
                        ->orWhere('title', 'like', '%' . $request->search);
                });
            }
            $post = $post->paginate(16);
   
    // return count($post);
       

        return view('timkiem.index',[
            'post' => $post,
   
        ]);

       
    }
    // public function k2items($slug){
    //     return redirect('tin-tuc/'.$slug);
    // }

    // public function k2categories($slug){
    //     return redirect('tin-tuc/'.$slug);
    // }
    // public function k2comments($slug){
    //     return redirect('tin-tuc/'.$slug);
    // }
    // // public function k2users($slug){
    // //     return redirect('tin-tuc/'.$slug);
    // // }
    // public function k2extrafields($slug){
    //     return redirect('tin-tuc/'.$slug);
    // }
    // public function k2extrafieldgroups($slug){
    //     return redirect('tin-tuc/'.$slug);
    // }
    // // public function k2mediamanager($slug){
    // //     return redirect('tin-tuc/'.$slug);
    // // }
    // public function dulich($slug){
    //     return redirect('tin-tuc/'.$slug);
    // }
    // public function datvanguoixunghe($slug){
    //     return redirect('tin-tuc/'.$slug);
    // }
    // public function dienanh(){
    //     return redirect('tin-tuc/dien-anh');
    // }
    // public function mucluc(){
    //     return redirect('tin-tuc/muc-luc');
    // }

    // public function k2itemss($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function k2categoriess($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function k2commentss($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function k2userss($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function k2extrafieldss($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function k2extrafieldgroupss($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function k2mediamanagers($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function nonnuocvietnam($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function dulichxunghe($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function thegioidoday($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function nguoixunghe($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function xunghengaynay($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function datnuocxunghe($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function dienanhs($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }
    // public function muclucs($slug){
    //     return redirect('chi-tiet-tin-tuc/'.$slug);
    // }

    public function test()
    {
        
        // $tables = DB::connection("mysql2")->getDoctrineSchemaManager()->listTableNames();
        // $data = [];
        // foreach($tables as $tb){
        //     $count = DB::connection("mysql2")->table($tb)->count();
        //     array_push($data, $tb. ": " . $count);
        // }

        // return $data;

        // $post = DB::table('posts')->where('id', 15303)->first();
        // return $post;
        $post = md5('Image15304').'_M.jpg';
        return $post;
    }
    

    public function docPdf()
    {
        # code...
    }
    
}
