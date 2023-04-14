<?php

namespace App\Http\Controllers;

use App\Models\Fileupload;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;


class FileuploadController extends Controller
{
    //
    // Chuẩn hóa ký tự tiếng việt
    public function convert_vi_to_en($str)
    {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
        $str = preg_replace("/(đ)/", "d", $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
        $str = preg_replace("/(Đ)/", "D", $str);
        //$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
        return $str;
    }
    public function fileupload(Request $request)
    {
        // Lấy ngày giờ hiện tại
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        // Lấy file
        $file =  $request->file('files');
        // Lấy thông tin đi kèm
        $tenbang = $request->tenbang;
        $idtruong = $request->truong_id;
        $linkfile =  'storage/' . $year . '/' . $month . '/' . $tenbang;
        $linkfile2 = 'app/public/' . $year . '/' . $month . '/' . $tenbang;

        foreach ($file as $fl) {
            $tenfile = $fl->getClientOriginalName();
            // chuẩn hóa tên file
            $tenfile =   trim($this->convert_vi_to_en(pathinfo($tenfile, PATHINFO_FILENAME)));
            $tenfile =    trim($this->convert_vi_to_en($tenfile));
            $tenfile =   str_replace(' ', '_', $this->convert_vi_to_en($tenfile));

            // Lấy đuôi file
            $duoifile =   $fl->getClientOriginalExtension();
            if (file_exists($linkfile . '/' . $tenfile. '.' . $duoifile) == 1) {
                $check = 0;
                $i = 1;
                while ($check == 0) {
                    $name = $tenfile . '(' . $i . ')';
                    if (file_exists($linkfile . '/' . $name. '.' . $duoifile)  == 1) {
                        $i++;
                    } else {
                        $check++;
                    }
                }
            } else {
                $name = $tenfile;
            }
            $linkview = null;
            // if ($duoifile == 'docx' || $duoifile == 'xlsx' || $duoifile == 'doc' || $duoifile == 'xls') {
            //     $linkview  = 'https://view.officeapps.live.com/op/view.aspx?src=http://tuphap.hatinh.gov.vn/' . $linkfile . '/' . $name  . '.' . $duoifile . '&amp;wdStartOn=1';
            // } else if ($duoifile == 'pdf' || $duoifile == 'PDF') {
            //     $linkview = 'http://tuphap.hatinh.gov.vn/' . $linkfile . '/' . $name. '.' . $duoifile ;
            // } else {
            //     $linkview = '';
            // }
            // Lưu file và upload vào bảng
            if ($fl->move(storage_path($linkfile2 . '/'), $name. '.' . $duoifile)) {
                DB::table('fileuploads')->insert([
                    'tenfile' =>   $name,
                    'tenbang' =>  $tenbang,
                    'idtruong' =>  $idtruong,
                    'duoifile' => $duoifile,
                    'link' =>  $linkfile . '/' . $name. '.' . $duoifile ,
                    'linkview' =>  $linkview,
                    'created_by' =>  auth()->user()->truong_id,
                ]);
            };
        }
    }
    // Lấy danh sách file 
    public function loadfile(Request $request)
    {
        $uuid = $request->uuid;
        $tenbang = $request->tenbang;
        $id = $request->id;
        $arr =  array();
        $data =  array();

        $file = Fileupload::where('tenbang', $tenbang)->where('created_by', auth()->user()->truong_id)->where(function ($query) use ($uuid, $id) {
            $query->where('idtruong', $uuid)
                ->orWhere('idtruong', $id);
        })->get();
        return $file;
    }
    public function viewfile(Request $request)
    {
    }
    // Nếu ko lưu thì xóa nhưng file đã tải lên
    public function xoauuid(Request $request)
    {
        $uuid = $request->uuid;
        $danhsach = Fileupload::where('idtruong', $uuid)->get();
        foreach ($danhsach as $ds) {
            File::delete($ds->link);
        }
        Fileupload::where('idtruong', $uuid)->delete();
        return 0;
    }
    public function xoafile(Request $request)
    {
        $name = $request->name;
        $uuid = $request->uuid;
        $file = Fileupload::where('tenfile', $name)->first();
        File::delete($file->link);
        Fileupload::where('tenfile', $name)->delete();
        return 0;
    }
    // Lây những đuôi file đc phép tải lên
    public function config()
    {
        // return file_exists('storage/2021/7/tailieus/Loc_Ha.xls');
        return config('configupload');
    }
}
