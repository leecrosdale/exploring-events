<?php


namespace App\Enums;


class OrderStatus
{
    const REQUESTING = 'awaiting confirmation';
    const ACCEPTED = 'accepted';
    const COOKING = 'cooking';
    const OUTFORDELIVERY = 'out for delivery';
    const DELIVERED = 'delivered';
}