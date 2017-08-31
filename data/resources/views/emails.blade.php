<?php

/**
 * Build the message.
 *
 * @return $this
 */
public
function build()
{
    return $this->view('emails.orders.shipped')
        ->text('emails.orders.shipped_plain');
}

?>

<div>
    Price: {{ $order->price }}
</div>