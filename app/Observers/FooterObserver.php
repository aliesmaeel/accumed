<?php

namespace App\Observers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterObserver
{


    /**
     * Handle the Footer "created" event.
     *
     * @param  \App\Models\Footer  $footer
     * @return void
     */

    public function created(Footer $footer)
    {
        //
    }

    /**
     * Handle the Footer "updated" event.
     *
     * @param  \App\Models\Footer  $footer
     * @return void
     */
    public function updated(Footer $footer)
    {
        //
    }

    /**
     * Handle the Footer "deleted" event.
     *
     * @param  \App\Models\Footer  $footer
     * @return void
     */
    public function deleted(Footer $footer)
    {
        //
    }

    /**
     * Handle the Footer "restored" event.
     *
     * @param  \App\Models\Footer  $footer
     * @return void
     */
    public function restored(Footer $footer)
    {
        //
    }

    /**
     * Handle the Footer "force deleted" event.
     *
     * @param  \App\Models\Footer  $footer
     * @return void
     */
    public function forceDeleted(Footer $footer)
    {
        //
    }
}
