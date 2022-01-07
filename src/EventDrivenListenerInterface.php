<?php

namespace AliReaza\EventDriven;

/**
 * Interface EventDrivenListenerInterface
 *
 * @package AliReaza\EventDriven
 */
interface EventDrivenListenerInterface
{
    public function subscribe(): void;

    public function unsubscribe($unsubscribe = true): void;
}