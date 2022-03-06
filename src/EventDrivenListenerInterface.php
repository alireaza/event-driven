<?php

namespace AliReaza\EventDriven;

interface EventDrivenListenerInterface
{
    public function subscribe(int $timeout_ms = 0): void;

    public function unsubscribe(bool $unsubscribe = true): void;
}