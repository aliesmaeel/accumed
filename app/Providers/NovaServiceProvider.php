<?php

namespace App\Providers;

use App\Nova\Blog;
use App\Nova\Client;
use App\Nova\Dashboards\Main;
use App\Nova\footer;
use App\Nova\GetInTouch;
use App\Nova\HomePage;
use App\Nova\Job;
use App\Nova\News;
use App\Nova\Report;
use App\Nova\Settings;
use App\Nova\Testimonial;
use App\Nova\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Nova::mainMenu(function (Request $request) {
            return [

                MenuItem::resource(User::class),

                MenuSection::make('HomePage', [
                    MenuItem::resource(HomePage::class),
                    MenuItem::resource(Testimonial::class),
                ])->icon('home')->collapsable(),

                MenuSection::make('Pages', [
                    MenuItem::resource(Blog::class),
                    MenuItem::resource(Client::class),
                    MenuItem::resource(Job::class),
                    MenuItem::resource(News::class),
                    MenuItem::resource(Report::class),
                ])->icon('book-open')->collapsable(),

                MenuSection::make('Settings', [
                    MenuItem::resource(footer::class),
                    MenuItem::resource(GetInTouch::class),
                    MenuItem::resource(Settings::class),
                ])->icon('cog')->collapsable(),


            ];
        });

    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
