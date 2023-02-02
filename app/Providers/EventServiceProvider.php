<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use App\Events\NuevoLibroEvent;
use App\Listeners\NuevoLibroListener;
use App\Events\ActualizarLibroEvent;
use App\Listeners\ActualizarLibroListener;
use App\Events\EliminarLibroEvent;
use App\Listeners\EliminarLibroListener;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        NuevoLibroEvent::class => [
            NuevoLibroListener::class,
        ],

        ActualizarLibroEvent::class => [
            ActualizarLibroListener::class,
        ],

        EliminarLibroEvent::class => [
            EliminarLibroListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
