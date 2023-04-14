<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use App\Models\Post;
use App\Models\Nghesynghenhan;
use App\Models\Caulacbo;
use App\Models\Document;
use App\Models\Video;
use App\Models\Audio;
use App\Models\Coquanbanhanh;
use App\Models\Disannghethuat;
use App\Models\Fileupload;
use App\Models\Gopyvanban;
use App\Models\Hoidap;
use App\Models\Tacpham;
use App\Models\Thuvienanh;
use App\Models\Tochuc;
use App\Models\Vanbangopy;
use App\Models\Thamgiatrogiupphaply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DanhmucController extends Controller
{
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
    public function check()
    {
        $response = Http::get('http://127.0.0.1:8888/cms/v1/testdocument123');
        foreach ($response['data'] as $dt) {
            $danhmuc = new Danhmuc();
            $danhmuc->name =  $dt['name'];
            if ($dt['parentid'] != 0) {
                foreach ($response['data'] as $dt1) {
                    if ($dt1['id'] == $dt['parentid']) {
                        $danhmuc->danhmuc_id =  $dt1['name'];
                    }
                }
            }
            $slug = str_replace(' ', '-', DanhmucController::xoadau($danhmuc->name));
            $danhmuc->slug = $slug;
            $danhmuc->loaidanhmuc_id =  $dt['type'];
            $danhmuc->hienthi =  1;
            if (Danhmuc::where('slug', $slug)->count() == 0) {
                $danhmuc->save();
            }
        }
        $danhmuc1 = Danhmuc::all();
        foreach ($danhmuc1 as $dm) {
            if ($dm->danhmuc_id) {
                $cha = Danhmuc::where('name', $dm->danhmuc_id)->first();
                $dm->danhmuc_id = $cha->id;
                $dm->save();
            }
        }
    }
    public function checkpost()
    {
    }
    public function gopyvanban()
    {

        return view('posts.gopyvanban', []);
    }
    public function cauhoitg($id)
    {
        $hoidap = Hoidap::where('id',$id)->first();
        $time2 = strtotime($hoidap->published_at);
        $newformat2 = date('d/m/Y ',$time2);
        $hoidap->ngaytraloi = $newformat2;
        
        return view('posts.cauhoitg', [
            'hoidap' => $hoidap,
        ]);
    }

    public function danhmuc($slug)
    {
        # Lấy danh mục theo url truyền vào ở trên
        $danhmuc = Danhmuc::where('slug', $slug)->first();
        $baiviet_id = DB::table('post_tag')->where('tag_id', $danhmuc->id)->get();

        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        #Kiểm tra xem danh mục thuộc loại nào
        # 1: tin tức , 2: Hình ảnh, 3: Audio, 4: Video, 5: văn bản
        // Cơ cấu bộ máy tổ chức
        if ($danhmuc->loaidanhmuc_id == 1) {

            $cChitiet = 'chi-tiet-tin-tuc';
            # kiểm tra nếu có danh mục con thì select theo danh mục con
            #return getDanhmucid('');
            $Danhmuccon = Danhmuc::where('danhmuc_id', $danhmuc->id)->where('loaidanhmuc_id', $danhmuc->loaidanhmuc_id)->get();
            foreach ($Danhmuccon as $dmc) {
                $dmc->dem = count($Danhmuccon);
            }


            $posts = Post::orderBy('id', 'desc')->whereIn('id',  $arr)->where('published_at', '!=', null)->paginate(5);
            if (count($posts) == 1) {
                $chitiet = Post::whereIn('id',  $arr)->first();
                $chuyen = DanhmucController::chitiettintuc($chitiet->slug);
                return $chuyen;
            } else {
                // return $posts;
                return view('posts.danhmuc', [
                    'posts' => $posts,
                    'chuyenmuc' => $danhmuc,
                    'cChitiet' => $cChitiet,
                    'Danhmuccon' => $Danhmuccon,
                    'slug' => $slug,
                ]);
            }
        }
        if ($danhmuc->loaidanhmuc_id == 2) {
            $cChitiet = 'van-ban';

            $dsvanban = Document::orderBy('id', 'desc')->where('danhmuc_id', $danhmuc->id)->paginate(5);
            foreach ($dsvanban as $vb) {
                $vb->file = Fileupload::where('tenbang', 'documents')->where('idtruong', $vb->id)->get();
                foreach ($vb->file as $f) {
                    $f->link1 = '/' . $f->link;
                }
            }
            return view('document.danhmuc', [
                'dsvanban' => $dsvanban,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 10) {
            $cChitiet = 'chi-tiet-van-ban-gop-y';

            $vanbangopy = Vanbangopy::orderBy('id', 'desc')->where('published_at', '!=', null)->get();
            foreach ($vanbangopy as $vb) {
                $vb->upload = Fileupload::where('tenbang', 'vanbangopys')->where('idtruong', $vb->id)->get();
            }

            // return $danhmuc->id;
            return view('posts.gopyvanban', [
                'vanbangopy' => $vanbangopy,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 11) {
            $cChitiet = 'van-ban-gop-y';

            // return $posts;
            // $tochucbomay = Tochucbomay::orderBy('id', 'desc')->where('linhvuc_id', $danhmuc->id)->paginate(10);
            return view('posts.tochucbomay', [
                // 'tochucbomay' => $tochucbomay,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 12) {
            $cChitiet = 'chi-tiet-tgpl';
            $dsvanbanpl = Document::orderBy('id', 'desc')->where('danhmuc_id', 53)->take(6)->get();
            $tgtgpl = Thamgiatrogiupphaply::orderBy('id', 'desc')->get();
            // Trợ giúp pháp lý trong hoạt động tố tụng id= 47
            $baiviet_id = DB::table('post_tag')->where('tag_id', 47)->get();
            $arr = [];
            foreach ($baiviet_id as $bv) {
                $arr[]  = $bv->post_id;
            }
            $tgplthdtt = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
            foreach ($tgplthdtt as $thdtt) {
                $thdtt->title = self::catchuoi($thdtt->title, 10) . "...";
            }

            // Trợ giúp pháp lý tại cơ sở id= 105
            $baiviet_id = DB::table('post_tag')->where('tag_id', 105)->get();
            $arr = [];
            foreach ($baiviet_id as $bv) {
                $arr[]  = $bv->post_id;
            }
            $tgpltcs = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
            foreach ($tgpltcs as $tcs) {
                $tcs->title = self::catchuoi($tcs->title, 10) . "...";
            }

            // Trợ giúp pháp lý hoạt động khác = 106
            $baiviet_id = DB::table('post_tag')->where('tag_id', 106)->get();
            $arr = [];
            foreach ($baiviet_id as $bv) {
                $arr[]  = $bv->post_id;
            }
            $tgplhdk = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
            foreach ($tgplhdk as $hdk) {
                $hdk->title = self::catchuoi($hdk->title, 10) . "...";
            }

            return view('trogiupphaply.trangchinh', [
                'dsvanbanpl' => $dsvanbanpl,
                'tgplhdk' => $tgplhdk,
                'tgplthdtt' => $tgplthdtt,
                'tgpltcs' => $tgpltcs,
                'chuyenmuc' => $danhmuc,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 6) {
            $hoidap = Hoidap::where('published_at','!=',null)->orderBy('id', 'desc')->paginate(10);
            foreach($hoidap as $hd){
                $time2 = strtotime($hd->created_at);
                $newformat2 = date('H:i:s d/m/Y',$time2);
                $hd->ngaytaocauhoi = $newformat2;
            }
      
            return view('posts.hoidap', [
                'hoidap' => $hoidap,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 8) {
            $hoidap = Hoidap::where('published_at','!=',null)->orderBy('id', 'desc')->paginate(10);
            foreach($hoidap as $hd){
                $time2 = strtotime($hd->created_at);
                $newformat2 = date('H:i:s d/m/Y',$time2);
                $hd->ngaytaocauhoi = $newformat2;
            }
            return view('posts.cauhoitg', [
                'hoidap' => $hoidap,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 3) {
            $cChitiet = 'chi-tiet-video';
            $posts = Video::orderBy('id', 'desc')->paginate(10);
            $danhsachvideo = [];
            foreach ($posts as $p) {
                $chuoi = explode(".", $p->linkyoutube);
                if ($chuoi[1] == 'mp4') {
                    $danhsachvideo[] = $p;
                }
            }
            return view('video.danhsach', [
                'posts' => $danhsachvideo,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 14) {
            $cChitiet = 'chi-tiet-video';
            $poststhumbnail = Post::orderBy('id', 'desc')->whereIn('id',  $arr)->where('published_at', '!=', null)->where('thumbnail', '!=', null)->paginate(10);
            $postsnotthumbnail = Post::orderBy('id', 'desc')->whereIn('id',  $arr)->where('published_at', '!=', null)->where('thumbnail', null)->where('seo_title', null)->paginate(10);
            $video = Post::orderBy('id', 'desc')->whereIn('id',  $arr)->where('published_at', '!=', null)->where('seo_title', '!=', null)->paginate(10);
            $postscarousel = Post::orderBy('id', 'desc')->whereIn('id',  $arr)->where('published_at', '!=', null)->where('thumbnail', '!=', null)->paginate(5);
            $thutu = 0;
            foreach ($postscarousel as $pc) {
                $pc->thutu = ++$thutu;
            }

            foreach ($video  as $v) {
                if (strlen($v->seo_title) > 11) {
                    if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $v->seo_title, $match)) {
                        $v->youtube_id = $match[1];
                    }
                }
            }


            return view('posts.chuyendoiso', [
                'poststhumbnail' => $poststhumbnail,
                'postsnotthumbnail' => $postsnotthumbnail,
                'video' => $video,
                'postscarousel' => $postscarousel,
                'slug' => $slug,
            ]);
        }
        return view('posts.danhmuc', [
            'posts' => [],
            'chuyenmuc' => $danhmuc,
            'cChitiet' => '',
            'slug' => $slug,
        ]);
    }

    public function danhmuchacon()
    {
        $datas = getDanhmucNova(null,null);
        return $datas;
    }
    public function laytendanhmuc(Request $request)
    {
        $infoDanhmuc = Danhmuc::where('id',$request->id)->first();
        return $infoDanhmuc->name;
    }
    public function vanban()
    {
        $datas = getDanhmucNova(null, 2);
        return $datas;
    }



    public function chitietvanbangopy($slug)
    {
        $chiTiet = Vanbangopy::where('slug', $slug)->firstOrFail();
        $upload = Fileupload::where('idtruong', $chiTiet->id)->get();
        return view('posts.chitietvanbangopy', [
            'chiTiet' => $chiTiet,
            'upload' => $upload,

        ]);
    }

    public function chitietdisan($slug)
    {

        $chiTiet = Disannghethuat::where('slug', $slug)->first();
        // $danhmuc = Danhmuc::where('id', $chiTiet->danhmuc_id )->select('name')->first();

        return view('disannghethuat.chitietdisan', [
            'chiTiet' => $chiTiet,
            // 'danhmuc' => $danhmuc,

        ]);
    }

    public function chitiet($slug)
    {
        $chitiet = Post::where('slug', $slug)->firstOrFail();
        # Lấy danh mục theo url truyền vào ở trên


        return view('posts.chitiet', [
            'chitiet' => $chitiet,
        ]);
    }

    // 

    public function chitiettintuc($slug)
    {

        $chitiet = Post::where('slug', $slug)->firstOrFail();
        //return $chitiet;


        // return $chitiet;
        # Lấy danh mục theo url truyền vào ở trên
        $chitiet->luotxem = $chitiet->luotxem + 1;
        $chitiet->save();
        if (strlen(strstr($chitiet->content, '<a href=')) > 0) {
            $test = explode('>', $chitiet->content);
            $chitiet->link = substr(strchr($test[1], '/'), 0, -1);
        }
        if ($chitiet->seo_title != null) {
            if (strlen($chitiet->seo_title) > 11) {
                if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $chitiet->seo_title, $match)) {
                    $chitiet->youtube_id = $match[1];
                }
            }
        }
        # Tin cùng chuyên mục
        $tinlienquan = Post::where('danhmuc_id', $chitiet->danhmuc_id)->orderBy('id', 'desc')->limit(6)->get();
        $upload = Fileupload::where('idtruong', $chitiet->id)->get();
        // return $upload;
        $danhmuc = Danhmuc::where('id', $chitiet->danhmuc_id)->first();
        #Kiểm tra xem danh mục thuộc loại nào
        // return $chitiet;
       
        return view('posts.chitiettintuc', [
            'chitiet' => $chitiet,
            'chuyenmuc' => $danhmuc,
            'tinlienquan' => $tinlienquan,
            'upload' => $upload,
        ]);
    }

    public function test($slug)
    {

        $chitiet = Post::where('slug', $slug)->firstOrFail();
        # Lấy danh mục theo url truyền vào ở trên
        $chitiet->luotxem = $chitiet->luotxem + 1;
        $chitiet->save();
        # Tin cùng chuyên mục
        $tinlienquan = Post::where('danhmuc_id', $chitiet->danhmuc_id)->orderBy('id', 'desc')->limit(6)->get();
        $upload = Fileupload::where('idtruong', $chitiet->id)->get();
        // return $upload;
        $danhmuc = Danhmuc::where('id', $chitiet->danhmuc_id)->first();
        #Kiểm tra xem danh mục thuộc loại nào
        // return $chitiet;
        return view('posts.test', [
            'chitiet' => $chitiet,
            'chuyenmuc' => $danhmuc,
            'tinlienquan' => $tinlienquan,
            'upload' => $upload,
        ]);
    }

    public function sodowebsite()
    {

        return view('posts.sodowebsite', []);
    }

    public function hoidap()
    {
        // $dscauhoi = Hoidap::orderBy('id', 'desc')->take(10)->get();
        $hoidap = Hoidap::where('published_at','!=',null)->orderBy('id', 'desc')->paginate(10);
     
        return view('posts.hoidap', [
            'hoidap' => $hoidap,
        ]);
    }

    public function luuhd(Request $request)
    {
        // return $request;
        // $request->validate(
        //     [
        //         'name' => ['required', 'max:30'],
        //         'email' => ['required'],
        //         'noidung' => ['required', 'string'],
        //         'diachi' => ['required'],
        //         'g-recaptcha-response' => ['required', 'captcha']
        //     ],
        //     [
        //         'required' => ':attribute không được bỏ trống',
        //         'min' => ':attribute có ít nhất 8 ký tự',
        //         'max' => ':attribute có nhiều nhất 30 ký tự',
        //         'unique' => ':attribute đã tồn tại',
        //         'string' => ':attribute phải là chuỗi ký tự',
        //         'g-recaptcha-response.required' => 'Vui lòng xác minh bạn không phải robot',
        //         'g-recaptcha-response.captcha' => 'Lỗi captcha, hãy thử lại',
        //     ],
        //     [
        //         'name' => 'Tên',
        //         'email' => 'email',
        //         'noidung' => 'Nội dung',
        //         'diachi' => 'Địa chỉ',
        //     ]
        // );
        $hd = new Hoidap;
        $hd->name = $request->input('name');
        $hd->diachi = $request->input('diachi');
        $hd->email = $request->input('email');
        $hd->noidung = $request->input('noidung');
        
        if ($hd->save()) {
            return redirect()->route('posts.hoidap')->with('message', 'Câu hỏi của bạn đã gửi thành công. Ban biên tập sẽ tiếp nhận và trả lời câu hỏi trong thời gian sớm nhất!');
        }
        // Hoidap::create([
        //     'name' => $request -> name,
        //     'email' => $request -> email,
        //     'diachi' => $request -> diachi,
        //     'noidung' =>$request -> noidung,
        // ]);

       
  
    }


    // Cần viết hàm xóa hết các thẻ html của người dùng gửi vào
    public function luugopy(Request $request)
    {
        $request->validate(
            [
                'hoten' => ['required', 'max:30'],
                'email' => ['required'],
                'noidung' => ['required', 'string'],
                'tieude' => ['required', 'string'],
                'diachi' => ['required'],
                'sdt' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'g-recaptcha-response' => ['required', 'captcha']
            ],
            [
                'required' => ':attribute không được bỏ trống',
                'min' => ':attribute có ít nhất 10 ký tự',
                'max' => ':attribute có nhiều nhất 30 ký tự',
                'unique' => ':attribute đã tồn tại',
                'string' => ':attribute phải là chuỗi ký tự',
                'g-recaptcha-response.required' => 'Vui lòng xác minh bạn không phải robot',
                'g-recaptcha-response.captcha' => 'Lỗi captcha, hãy thử lại',
            ],
            [
                'hoten' => 'Tên',
                'email' => 'email',
                'noidung' => 'Nội dung',
                'diachi' => 'Địa chỉ',
                'tieude' => 'Tiêu đề',
                'sdt' => 'Số điện thoại',
            ]
        );
        $gopy = new Gopyvanban();
        $gopy->hoten = $request->input('hoten');
        $gopy->diachi = $request->input('diachi');
        $gopy->sodienthoai = $request->input('sdt');
        $gopy->email = $request->input('email');
        $gopy->tieude = $request->input('tieude');
        $gopy->noidung = $request->input('noidung');
        $slug = $request->input('slug');
        $gopy->vanbangopy_id = Vanbangopy::where('slug', $slug)->first()->id;

        if ($gopy->save()) {
            return redirect()->route('post.chitietvanbangopy', [$slug])->with('message', 'Góp ý của bạn đã gửi thành công. Ban biên tập sẽ tiếp nhận và trả lời góp ý trong thời gian sớm nhất!');
        }
    }


    public function lichcongtac()
    {

        return view('posts.lichcongtac', []);
    }

    public function ajaxvanban(Request $request)
    {
        $sokyhieu = $request->input('sokyhieu');
        $tenvanban = $request->input('tenvanban');
        $ngaybanhanh = $request->input('ngaybanhanh');
        $ngaybanhanh = $request->input('ngaybanhanh');
        $linhvuc_id = $request->input('linhvuc_id');
        $chuyenmuc_id = $request->input('chuyenmuc_id');
        $coquanbanhanh_id = $request->input('coquanbanhanh_id');
        $lvb = $request->input('loaivb');


        $vanban = Document::orderBy('id', 'desc');

        if ($sokyhieu) {
            $vanban = $vanban->where(function ($query) use ($request) {
                $query->where('sokyhieu', 'like', '%' . $request->input('sokyhieu') . '%')
                    ->orWhere('sokyhieu', 'like', $request->input('sokyhieu') . '%')
                    ->orWhere('sokyhieu', 'like', '%' . $request->input('sokyhieu'));
            });
        }
        if ($tenvanban) {
            $vanban = $vanban->where(function ($query) use ($request) {
                $query->where('tenvanban', 'like', '%' . $request->input('tenvanban') . '%')
                    ->orWhere('tenvanban', 'like', $request->input('tenvanban') . '%')
                    ->orWhere('tenvanban', 'like', '%' . $request->input('tenvanban'));
            });
        }

        if ($ngaybanhanh) {

            $vanban = $vanban->where('ngaybanhanh', '<', $ngaybanhanh);
        }

        if ($linhvuc_id) {

            $vanban = $vanban->where('document_type_id', $linhvuc_id);
        }

        if ($chuyenmuc_id) {

            $vanban = $vanban->where('danhmuc_id', $chuyenmuc_id);
        }
        if ($coquanbanhanh_id) {

            $vanban = $vanban->where('coquanbanhanh', $coquanbanhanh_id);
        }
        $vanban = $vanban->get();

        foreach ($vanban as $vb) {
            if ($vb->ngaybanhanh) {
                $vb->ngaybh = $vb->ngaybanhanh->format("Y/m/d");
            }
            if ($vb->ngayhieuluc) {
                $vb->ngayhl = $vb->ngayhieuluc->format("Y/m/d");
            }
            $vb->file = Fileupload::where('tenbang', 'documents')->where('idtruong', $vb->id)->get();

            foreach ($vb->file as $f) {
                $f->link1 = '/' . $f->link;
            }
            // if($infofileupload){
            //     $vb->duoifile = $infofileupload->duoifile;
            //     $vb->link = $infofileupload->link;
            //     $vb->tenfile = $infofileupload->tenfile;
            // }

        }


        return $vanban;
    }

    public function vanbanchitiet($id)
    {
        $ctvanban = Document::where('id', $id)->first();
        $ctvanban->dinhkem = Fileupload::where('tenbang', 'document')->where('idtruong', $ctvanban->id)->get();
        // return $ctvanban;
        return view('posts.vanbanchitiet', [
            'ctvanban' => $ctvanban,

        ]);
    }

    public function tinhLuotxem(Request $request)
    {
        $id = $request->id;
        $luotxem = $request->luotxem;

        $bds = Post::where('id', $id)->first();
        $bds->luotxem = $luotxem;
        $bds->save();
        return 1;
    }

    // nhân làm thư viện ảnh

    public function thuvienanh($slug)
    {

        $thuvienanh = Thuvienanh::where('slug', $slug)->first();
        $dsthuvienanh = Fileupload::where('tenbang', 'thuvienanhs')->where('idtruong', $thuvienanh->id)->get();
        return view('thuvienanh.index', [
            'name' => $thuvienanh->name,
            'dsthuvienanh' => $dsthuvienanh,
        ]);
    }

    public function listPost()
    {
        $baiviet_id = DB::table('post_tag')->where('tag_id', 25)->get();
        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        $post = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
        foreach ($post as $pt) {
            $pt->title = self::catchuoi($pt->title, 15) . "...";
        }
        return  $post;
    }
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
    public function timkiem()
    {

        return view('posts.timkiem', []);
    }
    public function searchPost(Request $request)
    {
        //return $request->chuyenmuc_id;$request->chuyenmuc_id
        $post = Post::orderBy('id', 'desc');
        if ($request->searchName) {
            $post =  $post->where(function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->searchName . '%')
                    ->orWhere('title', 'like', $request->searchName . '%')
                    ->orWhere('title', 'like', '%' . $request->searchName);
            });
        }
        if ($request->chuyenmuc_id) {
            $post = $post->where('danhmuc_id', (int)$request->chuyenmuc_id);
        }
        if ($request->ngaybd && $request->ngaykt) {
            $post = $post->whereBetween('published_at', [$request->ngaybd, $request->ngaykt]);
            //Reservation::whereBetween('reservation_from', [$from, $to])->get();
        }

        $post = $post->paginate(10);
        return $post;
    }
    // nhân sửa nghị quyết
    public function ajaxchuyenmuc(Request $request)
    {

        $chuyenmuc = Danhmuc::where('danhmuc_id', $request->loaivb)->get();
        $linhvuc = DB::table('document_types')->orderBy('id', 'desc')->get();
        $coquanbanhanh = Coquanbanhanh::orderBy('id', 'desc')->get();
        return [
            'linhvuc' => $linhvuc,
            'chuyenmuc' => $chuyenmuc,
            'coquanbanhanh' => $coquanbanhanh,
        ];
    }

    public function danhmuccontgpl($slug)
    {

        # Lấy danh mục theo url truyền vào ở trên
        $danhmuc = Danhmuc::where('slug', $slug)->first();

        $baiviet_id = DB::table('post_tag')->where('tag_id', $danhmuc->id)->get();

        $arr = [];
        foreach ($baiviet_id as $bv) {
            $arr[]  = $bv->post_id;
        }
        #Kiểm tra xem danh mục thuộc loại nào
        # 1: tin tức , 2: Hình ảnh, 3: Audio, 4: Video, 5: văn bản
        // Cơ cấu bộ máy tổ chức
        if ($danhmuc->loaidanhmuc_id == 1) {
            $cChitiet = 'chi-tiet-tin-tuc';
            # kiểm tra nếu có danh mục con thì select theo danh mục con
            #return getDanhmucid('');
            $Danhmuccon = Danhmuc::where('danhmuc_id', $danhmuc->id)->where('loaidanhmuc_id', $danhmuc->loaidanhmuc_id)->get();

            $tenDanhmuccha = Danhmuc::where('id', $danhmuc->danhmuc_id)->first();
            $posts = Post::orderBy('id', 'desc')->whereIn('id',  $arr)->where('published_at', '!=', null)->paginate(10);
            if (count($posts) == 1) {
                $chitiet = Post::whereIn('id',  $arr)->first();
                $chuyen = DanhmucController::chitiettintucs($chitiet->slug);
                return $chuyen;
            } else {
                return view('trogiupphaply.danhmuc', [
                    'posts' => $posts,
                    'chuyenmuc' => $danhmuc,
                    'cChitiet' => $cChitiet,
                    'Danhmuccon' => $Danhmuccon,
                    'tenDanhmuccha' => $tenDanhmuccha,
                    'slug' => $slug,
                ]);
            }
        }
        if ($danhmuc->loaidanhmuc_id == 2) {
            $cChitiet = 'van-ban';

            $dsvanban = Document::orderBy('id', 'desc')->where('danhmuc_id', $danhmuc->id)->paginate(10);

            return view('document.danhmuc', [
                'dsvanban' => $dsvanban,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 10) {
            $cChitiet = 'chi-tiet-van-ban-gop-y';
            $vanbangopy = Vanbangopy::where('linhvuc_id', $danhmuc->id)->orderBy('id', 'desc')->get();
            // return $danhmuc->id;

            return view('posts.gopyvanban', [
                'vanbangopy' => $vanbangopy,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 11) {
            $cChitiet = 'van-ban-gop-y';
            // $tochucbomay = Tochucbomay::orderBy('id', 'desc')->where('linhvuc_id', $danhmuc->id)->paginate(10);
            return view('posts.tochucbomay', [
                // 'tochucbomay' => $tochucbomay,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 12) {
            $cChitiet = 'chi-tiet-tgpl';
            $dsvanbanpl = Document::orderBy('id', 'desc')->where('danhmuc_id', 53)->take(6)->get();
            $tgtgpl = Thamgiatrogiupphaply::orderBy('id', 'desc')->get();
            // Trợ giúp pháp lý trong hoạt động tố tụng id= 47
            $baiviet_id = DB::table('post_tag')->where('tag_id', 47)->get();
            $arr = [];
            foreach ($baiviet_id as $bv) {
                $arr[]  = $bv->post_id;
            }
            $tgplthdtt = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
            foreach ($tgplthdtt as $thdtt) {
                $thdtt->title = self::catchuoi($thdtt->title, 10) . "...";
            }

            // Trợ giúp pháp lý tại cơ sở id= 105
            $baiviet_id = DB::table('post_tag')->where('tag_id', 105)->get();
            $arr = [];
            foreach ($baiviet_id as $bv) {
                $arr[]  = $bv->post_id;
            }
            $tgpltcs = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
            foreach ($tgpltcs as $tcs) {
                $tcs->title = self::catchuoi($tcs->title, 10) . "...";
            }

            // Trợ giúp pháp lý hoạt động khác = 106
            $baiviet_id = DB::table('post_tag')->where('tag_id', 106)->get();
            $arr = [];
            foreach ($baiviet_id as $bv) {
                $arr[]  = $bv->post_id;
            }
            $tgplhdk = Post::orderBy('id', 'desc')->whereIn('id', $arr)->where('published_at', '!=', null)->take(3)->get();
            foreach ($tgplhdk as $hdk) {
                $hdk->title = self::catchuoi($hdk->title, 10) . "...";
            }

            return view('trogiupphaply.trangchinh', [
                'dsvanbanpl' => $dsvanbanpl,
                'tgplhdk' => $tgplhdk,
                'tgplthdtt' => $tgplthdtt,
                'tgpltcs' => $tgpltcs,
                'chuyenmuc' => $danhmuc,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 6) {
            return view('posts.hoidap', []);
        }
        if ($danhmuc->loaidanhmuc_id == 8) {
            return view('posts.cauhoitg', []);
        }
        if ($danhmuc->loaidanhmuc_id == 3) {
            $cChitiet = 'chi-tiet-video';
            $posts = Video::orderBy('id', 'desc')->paginate(10);
            $danhsachvideo = [];
            foreach ($posts as $p) {
                $chuoi = explode(".", $p->linkyoutube);
                if ($chuoi[1] == 'mp4') {
                    $danhsachvideo[] = $p;
                }
            }
            return view('video.danhsach', [
                'posts' => $danhsachvideo,
                'chuyenmuc' => $danhmuc,
                'cChitiet' => $cChitiet,
            ]);
        }
        if ($danhmuc->loaidanhmuc_id == 15) {
            
            $get_el_ablums =  DB::table('el_albums')->where('danhmuc_id', $danhmuc->id)->get();
            if($get_el_ablums){
                foreach ($get_el_ablums as $ab) {
                    $get_el_photos = DB::table('el_photos')->where('album_id', $ab->id)->orderBy('id', 'asc')->first();
                    $ab->path = $get_el_photos->path;
                }
            }else{
                $get_el_ablums = null;   
            }
            
     
            return view('thuvienanh.newindex', [
                'dsablums' => $get_el_ablums,
                'chuyenmuc' => $danhmuc,

            ]);
        }

        return view('posts.danhmuc', [
            'posts' => [],
            'chuyenmuc' => $danhmuc,
            'cChitiet' => '',
            'slug' => $slug,
        ]);
    }
    public function chitiettintucs($slug)
    {

        $chitiet = Post::where('slug', $slug)->firstOrFail();
        //return $chitiet;


        // return $chitiet;
        # Lấy danh mục theo url truyền vào ở trên
        $chitiet->luotxem = $chitiet->luotxem + 1;
        $chitiet->save();
        if (strlen(strstr($chitiet->content, '<a href=')) > 0) {
            $test = explode('>', $chitiet->content);
            $chitiet->link = substr(strchr($test[1], '/'), 0, -1);
        }
        # Tin cùng chuyên mục
        $tinlienquan = Post::where('danhmuc_id', $chitiet->danhmuc_id)->orderBy('id', 'desc')->limit(6)->get();
        $upload = Fileupload::where('idtruong', $chitiet->id)->get();
        // return $upload;
        $danhmuc = Danhmuc::where('id', $chitiet->danhmuc_id)->first();
        $tenDanhmuccha = Danhmuc::where('id', $danhmuc->danhmuc_id)->first();
        #Kiểm tra xem danh mục thuộc loại nào
        // return $tenDanhmuccha;
        // return $chitiet;
        return view('trogiupphaply.chitiettintuc', [
            'chitiet' => $chitiet,
            'chuyenmuc' => $danhmuc,
            'tinlienquan' => $tinlienquan,
            'upload' => $upload,
            'tenDanhmuccha' => $tenDanhmuccha,
        ]);
    }
    public function vanbangopy()
    {

        $datas = getDanhmucNova(null, 10);
        return $datas;
    }
    public function chitietablums($slug)
    {
        $get_el_ablums =  DB::table('el_albums')->where('slug', $slug)->first();
        $get_el_photos = DB::table('el_photos')->where('album_id', $get_el_ablums->id)->orderBy('id', 'asc')->get();
      
        return view('thuvienanh.chitietanh', [
            'info_ablums' => $get_el_ablums,
            'datas_photos' => $get_el_photos,
        ]);
    }
    public function thongkehoidap()
    {
       $Thongkehoidap = Hoidap::all();
       $Tonghoidap = count($Thongkehoidap);
       $SLdatraloi = 0;
       $SLChuatraloi = 0;
        foreach($Thongkehoidap as $tk){
            if($tk->published_at != null ){
                $SLdatraloi = ++$SLdatraloi;
            }
            if($tk->published_at == null ){
                $SLChuatraloi = ++$SLChuatraloi;
            }
        }
        $dataThongke = array();
        $dataThongke['Tonghoidap']= $Tonghoidap;
        $dataThongke['SLdatraloi']= $SLdatraloi;
        $dataThongke['SLChuatraloi']= $SLChuatraloi;

        return $dataThongke;
    }
}
