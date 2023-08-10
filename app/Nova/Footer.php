<?php

namespace App\Nova;
use App\Nova\Actions\ChangeBooleanValue;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;
use ShuvroRoy\NovaTabs\Tabs;
use Stepanenko3\NovaJson\Fields\JsonArray;
use Stepanenko3\NovaJson\Fields\JsonRepeatable;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;

class Footer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Footer>
     */
    public static $model = \App\Models\Footer::class;

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
            new Tabs('JSON',
                [
                    ID::make()->sortable(),
                    Text::make('Footer Title','title'),
                    Text::make('Copy Write','copy_write'),
                    Boolean::make(__('active'),'active')->default(true),

                    JsonRepeatable::make('Attributes For Title', 'attributes')
                        ->fullWidth()
                        ->stacked()
                        ->rules([
                            'required',
                            'array',
                        ])
                        ->fields([
                            Text::make('Title For Column', 'titleForColumn')
                                ->fullWidth()
                                ->rules([
                                    'required',
                                ]),

                            JsonRepeatable::make('Column attributes', 'columnAttributes')
                                ->fullWidth()
                                ->rules([
                                    'required',
                                    'array',
                                    'between:1,10',
                                ])
                                ->fields([
                                    Text::make('text', 'text')
                                        ->fullWidth()
                                        ->rules([
                                            'required',
                                        ]),
                                    Text::make('link', 'link')
                                        ->fullWidth()
                                ]),
                        ]),


                ]),

        ];
    }

//    public function authorizedToUpdate(Request $request)
//    {
//        return false;
//    }

    public function authorizedToView(Request $request)
    {
        return false;
    }

    public function authorizedToReplicate(Request $request)
    {
        return false;
    }

    public function actions(NovaRequest $request)
    {
        return [
            (new ChangeBooleanValue())
        ];
    }


}
