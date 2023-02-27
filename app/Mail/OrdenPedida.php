<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\Compra;
use Illuminate\Queue\SerializesModels;

class OrdenPedida extends Mailable
{
    use Queueable, SerializesModels;
     /**
     * The order instance.
     *
     * @var \App\Models\Compra
     */
    public $compra;
    /**
     * Create a new message instance.
     * @param  \App\Models\Compra  $compra
     * @return void
     */
    public function __construct(Compra $compra)
    {
        //
        $this->compra = $compra;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.name');
    }
}
