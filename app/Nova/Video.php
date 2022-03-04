<?php

namespace App\Nova;

use App\Models\Video as EloquentVideo;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class Video extends Resource
{
    public static $group = "Courses";

    public static $model = EloquentVideo::class;

    public static $title = 'title';

    public static $search = [
        'id', 'title',
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Title')
                ->sortable()
                ->hideWhenCreating()
                ->hideWhenUpdating(),


        ];
    }
}
