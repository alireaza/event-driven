<?php

namespace AliReaza\EventDriven;

use Psr\EventDispatcher\ListenerProviderInterface;

/**
 * Abstract AbstractListenerProvider
 *
 * @package AliReaza\EventDriven
 */
abstract class AbstractListenerProvider implements ListenerProviderInterface
{
    public array $listeners = [];
}