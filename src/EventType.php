<?php declare(strict_types=1);

namespace App;

enum EventType: string
{
    case LIVE = 'live';

    case ONLINE = 'online';
}
