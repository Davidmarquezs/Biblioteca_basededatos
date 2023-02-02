<?php

namespace App\Listeners;
use App\Events\ActualizarLibroEvent;
use App\Models\UserLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ActualizarLibroListener
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
    public function handle(ActualizarLibroEvent $event)
    {
        UserLog::create([
            'id_user' => $event->id,
            'contexto' => 'Actualizacion de libro',
            'libro' => $event->lib,
        ]);
    }
}
