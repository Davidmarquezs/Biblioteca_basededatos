<?php

namespace App\Listeners;
use App\Events\EliminarLibroEvent;
use App\Models\UserLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EliminarLibroListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EliminarLibroEvent $event)
    {
        UserLog::create([
            'id_user' => $event->id,
            'contexto' => 'eliminacion de libro',
            'libro' => $event->lib,
        ]);
    }
}
