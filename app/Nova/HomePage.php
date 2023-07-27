<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Text;

class HomePage extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\HomePage>
     */
    public static $model = \App\Models\HomePage::class;

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
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make(__('Hero Text'),'hero_text'),

            Text::make(__('fist Service Description'),'fistServiceDescription'),
            Text::make(__('second Service Description'),'secondServiceDescription'),
            Text::make(__('third Service Description'),'thirdServiceDescription'),
            Text::make(__('fourth Service Description'),'fourthServiceDescription'),
            Text::make(__('first Our Shows'),'firstOurShows'),
            Text::make(__('second Our Shows'),'secondOurShows'),
            Text::make(__('third Our Shows'),'thirdOurShows'),
            Text::make(__('first Our Shows Description'),'firstOurShowsDescription'),
            Text::make(__('second Our Shows Description'),'secondOurShowsDescription'),
            Text::make(__('third Our Shows Description'),'thirdOurShowsDescription'),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
