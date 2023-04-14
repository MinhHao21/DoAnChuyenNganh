<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Http\Requests\NovaRequest;
use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use ZiffMedia\NovaSelectPlus\SelectPlus;
use Laravel\Nova\Fields\Select;
use Mayviet\Fileupload\Fileupload;
use Mayviet\Selecttree\Selecttree;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\Boolean;


use PhoenixLib\NestedTreeAttachMany\NestedTreeAttachManyField;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $trafficCop = false;
    public static $model = \App\Models\Post::class;

    /**
     * Get the displayble label of the resource.
     *
     * @return string
     */
    public static function label()
    {
        return 'Bài viết';
    }

    public static function singularLabel()
    {
        return 'Bài viết';
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
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
            Selecttree::make('Danh mục','danhmuc_id')->api(['danh-muc-so-tp'])->hideFromIndex()->rules('required'),
            Text::make('Từ khóa', 'tukhoa')->hideFromIndex(),
            // BelongsTo::make('Danh mục', 'danhmuc', 'App\Nova\Danhmuc'),
            Image::make('Hình đại diện', 'thumbnail') ,
            
            Text::make('Tiêu đề', 'title')->rules('required'),
            Slug::make('Slug')->from('Title')->rules('required')->hideFromIndex(),
            Text::make('Tác giả', 'created_by')->rules('required'),
            Date::make('Ngày tạo', 'created_at')->placeholder('Click vào đây để chọn ngày tháng') ,
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
            Trix::make('Mô tả ngắn', 'excerpt'),
            NovaTinyMCE::make('Nội dung', 'content')->options([
                'use_lfm' => true,
                'lfm_url' => 'laravel-filemanager',
                'height' => '700',
                'image_caption' => true,
                'plugins' => 'link code | table | image',
                'toolbar' => ' undo redo | styleselect | bold italic forecolor backcolor |  alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link | code'

            ])->stacked()->hideFromIndex(),
            
            // Heading::make('SEO')->hideFromIndex(),
            // Text::make('Linkyoutube', 'seo_title')->hideFromIndex(),
            // Textarea::make('Mô tả SEO', 'seo_description')->hideFromIndex(),
            // Image::make('Hình ảnh SEO', 'seo_image')->hideFromIndex(),
            Fileupload::make('Upload File PDF','file')->upload(['posts'])->hideFromIndex(),
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
        // user_group_id = 1 dc phep duyet
        // if ($request->user()->user_group_id == 1) {
            return [
                new Actions\duyet,
                new Actions\huyduyet,
            ];
        // }
        return [];
    }
}
