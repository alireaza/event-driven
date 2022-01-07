<?php

namespace AliReaza\EventDriven;

use Psr\EventDispatcher\ListenerProviderInterface;

abstract class AbstractListenerProvider implements ListenerProviderInterface
{
    public array $listeners = [];
}