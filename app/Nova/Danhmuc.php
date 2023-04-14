<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Mayviet\Selecttree\Selecttree;
use Laravel\Nova\Http\Requests\NovaRequest;
use phpDocumentor\Reflection\PseudoTypes\False_;

class Danhmuc extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Danhmuc::class;

    public static function label()
    {
        return 'Danh mục';
    }

    public static function singularLabel()
    {
        return 'Danh mục';
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
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
            // BelongsTo::make('Loại danh mục', 'loaidanhmuc', 'App\Nova\Loaidanhmuc')->rules('required'),
            Select::make('Cấp trên', 'danhmuc_id')->options(
                \App\Models\Danhmuc::pluck('name', 'id'))->displayUsingLabels(),
            
            // Selecttree::make('Cấp trên','danhmuc_id')->api(['danh-muc-so-tp'])->hideFromIndex(),
            Text::make('Tên', 'name')->rules('required'),
            Slug::make('Slug')->from('Name')->rules('required')->hideFromIndex(),
            Boolean::make('Hiển thị', 'hienthi')->default(False),

            Text::make('Thứ tự', 'thutu'),
          
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
        // return [
        //     new Actions\duyet,
        //     new Actions\huyduyet,
        // ];
        return [];
    }
}
