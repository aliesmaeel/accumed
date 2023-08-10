<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Settings extends Resource
{

    public static $model = \App\Models\Setting::class;


    public static $title = 'id';


    public static $search = [
        'id',
    ];

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make(__('Name'),'name'),
            Text::make(__('Value'),'value'),
        ];
    }


}
