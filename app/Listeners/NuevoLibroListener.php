<?php

namespace App\Listeners;

use App\Events\NuevoLibroEvent;
use App\Models\UserLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NuevoLibroListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(NuevoLibroEvent $event)
    {
        UserLog::create([
            'id_user' => $event->id,
            'contexto' => 'Registro de nuevo libro',
            'libro' => $event->lib,
        ]);
    }
}
