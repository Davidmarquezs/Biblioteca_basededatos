<?php

namespace App\Events;

use App\Models\Libro;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NuevoLibroEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $id;
    public $lib;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($id, $lib)//RECIBE LOS PARAMETROS DEL CONTROLADOR
    {
        $this->id = $id;
        $this->lib = $lib;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
