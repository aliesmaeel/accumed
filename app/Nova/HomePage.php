<?php

namespace App\Nova;

use App\Nova\Actions\ChangeBooleanValue;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Text;

class HomePage extends Resource
{

    public static $model = \App\Models\HomePage::class;


    public static $title = 'id';


    public static $search = [
        'id',
    ];

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make(__('Hero Text'),'hero_text'),

            Text::make(__('fist Service Description'),'fistServiceDescription'),
            Text::make(__('second Service Description'),'secondServiceDescription'),
            Text::make(__('third Service Description'),'thirdServiceDescription'),
            Text::make(__('fourth Service Description'),'fourthServiceDescription')
                ->hideFromIndex(),
            Text::make(__('first Our Shows'),'firstOurShows')->hideFromIndex(),
            Text::make(__('second Our Shows'),'secondOurShows')->hideFromIndex(),
            Text::make(__('third Our Shows'),'thirdOurShows')->hideFromIndex(),
            Text::make(__('first Our Shows Description'),'firstOurShowsDescription')
                ->hideFromIndex(),
            Text::make(__('second Our Shows Description'),'secondOurShowsDescription')
                ->hideFromIndex(),
            Text::make(__('third Our Shows Description'),'thirdOurShowsDescription')
                ->hideFromIndex(),
            Boolean::make(__('active'),'active')

        ];
    }

    public function actions(NovaRequest $request)
    {
        return [
            new ChangeBooleanValue()
        ];
    }
}
