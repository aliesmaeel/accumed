<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;

class ChangeBooleanValue extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Change To Active Or Not Active';


    public function handle(ActionFields $fields, Collection $models)
    {
        $countActive=0;

        foreach ($models as $model)
        {
           $model->active=$fields->active;
           $model->save();
           if($model->active==1)
           {
               $countActive++;
           }
        }
        if ($countActive < 1)
        {
            $models->first()->active=true;
            $models->first()->save();
        }

        return Action::message('Note: At Least One Record Must Be Active ! ');
    }


    public function fields(NovaRequest $request)
    {
        return [
            Boolean::make(__('Active'),'active' ),
        ];
    }


}
