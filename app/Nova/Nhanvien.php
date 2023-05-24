<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use ZiffMedia\NovaSelectPlus\SelectPlus;
use Laravel\Nova\Fields\Select;
use Mayviet\Fileupload\Fileupload;
use Mayviet\Selecttree\Selecttree;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\Boolean;

class Nhanvien extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Nhanvien::class;

    /**
     * Get the displayble label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Nhân Viên';
    }

    public static function singularLabel()
    {
        return 'Nhân Viên';
    }
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        
            return [
                ID::make(__('ID'), 'id')->sortable(),
                // Selecttree::make('Danh mục','danhmuc_id')->api(['danh-muc-so-tp'])->hideFromIndex()->rules('required'),
                // Text::make('Từ khóa', 'tukhoa')->hideFromIndex(),
                // BelongsTo::make('Danh mục', 'danhmuc', 'App\Nova\Danhmuc'),
                // Image::make('Hình đại diện', 'thumbnail') ,
                
                Text::make('Tên nhân viên', 'name')->rules('required'),
                Text::make('Email', 'email')->rules('required'),
                Text::make('Điện thoại', 'phone')->rules('required'),
                Text::make('Địa chỉ', 'address')->rules('required'),
                Text::make('Chức vụ', 'position')->rules('required'),
                Date::make('Ngày thuê', 'hire_date')->placeholder('Click vào đây để chọn ngày tháng'),
                // // Slug::make('Slug')->from('Title')->rules('required')->hideFromIndex(),
                // Text::make('Tác giả', 'created_by')->rules('required'),
                // Date::make('Ngày tạo', 'created_at')->placeholder('Click vào đây để chọn ngày tháng') ,
                Text::make('Trạng thái', function () {
                    if (!$this->published_at) {
                        return '<span style="color: red">Chưa duyệt</span>';
                    } else {
                        return '<span style="color: green">Đã duyệt</span>';
                    }
                })->asHtml(),
                // Text::make('Thời gian đăng bài', function () {
                //     return $this->created_at;
                // })->asHtml(),
                // Boolean::make('Nổi bật', 'noibat')->default(False),
                // Textarea::make('Mô tả ngắn', 'excerpt'),
                // Trix::make('Mô tả ngắn', 'excerpt'),
                // NovaTinyMCE::make('Nội dung', 'content')->options([
                //     'use_lfm' => true,
                //     'lfm_url' => 'laravel-filemanager',
                //     'height' => '700',
                //     'image_caption' => true,
                //     'plugins' => 'link code | table | image',
                //     'toolbar' => ' undo redo | styleselect | bold italic forecolor backcolor |  alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link | code'
    
                // ])->stacked()->hideFromIndex(),
                
            ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
