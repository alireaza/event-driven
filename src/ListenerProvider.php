<?php

namespace AliReaza\EventDriven;

use Psr\EventDispatcher\ListenerProviderInterface;

class ListenerProvider extends AbstractListenerProvider implements ListenerProviderInterface, EventDrivenListenerInterface
{
    public function __construct(public ListenerProviderInterface $provider)
    {
    }

    public function getListenersForEvent(object $event): iterable
    {
        return $this->provider->getListenersForEvent($event);
    }

    public function subscribe(int $timeout_ms = 0): void
    {
        $this->provider->subscribe($timeout_ms);
    }

    public function unsubscribe(bool $unsubscribe = true): void
    {
        $this->provider->unsubscribe($unsubscribe);
    }

    public function addListener(string $event_name, callable $callable): self
    {
        $this->provider->listeners[$event_name][] = $callable;
        return $this;
    }

    public function clearListeners(string $event_name): void
    {
        if (array_key_exists($event_name, $this->provider->listeners)) {
            unset($this->provider->listeners[$event_name]);
        }
    }
}