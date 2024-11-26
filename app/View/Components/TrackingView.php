<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Envio;

class TrackingView extends Component
{
    public $envio;

    public function __construct($trackingNumber)
    {
        $this->envio = Envio::where('numero_seguimiento', $trackingNumber)->first();
    }

    public function render()
    {
        return view('components.tracking-view');
    }
}
