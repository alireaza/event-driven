<?php

namespace AliReaza\EventDriven;

use Psr\EventDispatcher\EventDispatcherInterface;

/**
 * Class EventDispatcher
 *
 * @package AliReaza\EventDriven
 */
class EventDispatcher implements EventDispatcherInterface, EventDrivenInterface
{
    public function __construct(private EventDispatcherInterface $dispatcher)
    {
    }

    public function dispatch(object $event): object
    {
        return $this->dispatcher->dispatch($event);
    }

    public function getEventId(): string
    {
        return $this->dispatcher->getEventId();
    }

    public function setCorrelationId(string $correlation_id): void
    {
        $this->dispatcher->setCorrelationId($correlation_id);
    }

    public function getCorrelationId(): string
    {
        return $this->dispatcher->getCorrelationId();
    }

    public function setCausationId(string $causation_id): void
    {
        $this->dispatcher->setCausationId($causation_id);
    }

    public function getCausationId(): string
    {
        return $this->dispatcher->getCausationId();
    }
}