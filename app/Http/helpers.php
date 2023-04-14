<?php

use App\Models\Danhmuc;
use App\Models\Comment;

function mv_test()
{
    return 'mayviet';
}

function getDanhmuc($danhmuccha)
{
 
    $danhmuc = Danhmuc::where('hienthi', 1)->where('danhmuc_id', $danhmuccha)->orderBy('thutu', 'asc')->get();
    // $danhmuc = Danhmuc::where('danhmuc_id', $danhmuccha)->orderBy('thutu', 'asc')->get();
    $datas = array();
    foreach ($danhmuc as $dm) {
        $t = array();
        $t['id'] = $dm->id;
        $t['label'] = $dm->name;
        $t['slug'] = $dm->slug;
        $t['url'] = $dm->url;
        $t['children'] = [];
    
        $dem = Danhmuc::where('danhmuc_id', $dm->id)->count();
        if ($dem > 0) {
            $t['children'] = getDanhmuc($dm->id);
            $t['kiemtra'] = 1;
        }
        array_push($datas, $t,);
    }
    return $datas;
}
function getDanhmucNova($danhmuccha,$loaidanhmuc)
{   
 
    // $dem = Danhmuc::where('loaidanhmuc_id',$loaidanhmuc)->count();
    // return $dem;

    $danhmuc = Danhmuc::where('danhmuc_id',$danhmuccha)->orderBy('thutu', 'asc')->get();
    $datas = array();
    
    foreach ($danhmuc as $dm) {
        $t = array();
        $t['id'] = $dm->id;
        $t['label'] = $dm->name;
        $t['slug'] = $dm->slug;
        $t['loaidanhmuc_id'] = $dm->loaidanhmuc_id;
        $t['url'] = $dm->url;
        $t['children'] = [];
        $t['kiemtra'] = 0;
        $t['menuduoi'] = 0;
    
        $dem = Danhmuc::where('danhmuc_id', $dm->id)->count();
        if ($dem > 0) {
            $t['children'] = getDanhmucNova($dm->id,$loaidanhmuc);
            $t['kiemtra'] = 1;
        }
        array_push($datas, $t,);
       
    }

    return  $datas ;
}

function getDanhmucid($danhmuccha)
{
    $danhmuc = Danhmuc::where('hienthi', 1)->where('danhmuc_id', $danhmuccha)->get()->pluck('id')->toArray();
    $datas = array();
    if ($danhmuccha != '') {
        array_push($datas, $danhmuccha);
    }
    foreach ($danhmuc as $dm) {

        if (Danhmuc::where('hienthi', 1)->where('danhmuc_id', $dm)->count() > 0) {
            $t = getDanhmucid($dm);
            #array_merge($datas,$t );
            foreach ($t as $a) {
                array_push($datas, $a);
            }
        }

        //$datas += $t;
        array_push($datas, $dm);
    }
    return $datas;
}
function catchuoi($chuoi, $dodai)
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
    return $tieude.'...';
}

function catanh($chuoi)
{

    
        
    $chuoi =  preg_replace("/<img[^>]+\>/i", "", $chuoi);
    return $chuoi;
            
       
                    
    
}

function getcomment($commentcha,$loaicomment)
{   
 
    // $dem = Danhmuc::where('loaidanhmuc_id',$loaidanhmuc)->count();
    // return $dem;

    $comment = Comment::where('parentId',$loaicomment)->orderBy('id', 'desc')->get();
    $datas = array();
    
    foreach ($comment as $dm) {
        $t = array();
        $t['id'] = $dm->id;
        $t['content'] = $dm->name;
        $t['userId'] = $dm->slug;
        $t['children'] = [];
        $t['kiemtra'] = 0;
        $dem = Comment::where('parentId', $dm->id)->count();
        if ($dem > 0) {
            $t['children'] = getcomment($dm->id, $loaicomment);
            $t['kiemtra'] = 1;
        }
        array_push($datas, $t,);
       
    }

    return  $datas ;
}