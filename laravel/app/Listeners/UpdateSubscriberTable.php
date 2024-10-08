<?php

namespace App\Listeners;

use App\Events\UserSubscribed;
use Illuminate\Support\Facades\DB;

class UpdateSubscriberTable
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserSubscribed $event): void
    {
        //insert subscribers' email
        DB::insert('insert into subscribers (email) values (?)',[$event->user->email]);
    }
}
