<?php

namespace App;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum OrderStatus: string implements HasLabel,HasDescription,HasIcon,HasColor
{
    case Placed = 'order placed';
    case Shipping = 'shipping';
    case Delivered = 'delivered';
    case Cancelled = 'cancelled';

    public function getLabel(): ?string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return match($this){
            self::Placed => 'Order has been placed',
            self::Shipping => 'Order is being Shipped',
            self::Delivered => 'Order has been delivered',
            self::Cancelled => 'Order has been cancelled'
        };
    }

    public function getIcon(): ?string
    {
        return match($this){
            self::Placed => 'heroicon-o-shopping-cart',
            self::Shipping => 'heroicon-o-truck',
            self::Delivered => 'heroicon-o-check-circle',
            self::Cancelled => 'heroicon-o-x-circle'
        };
    }

    public function getColor(): ?string
    {
        return match($this){
            self::Placed => 'info',
            self::Shipping => 'gray',
            self::Delivered => 'success',
            self::Cancelled => 'danger'
        };
    }
}
