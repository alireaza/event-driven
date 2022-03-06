<?php

namespace AliReaza\EventDriven;

interface EventDrivenInterface
{
    public function getEventId(): string;

    public function setCorrelationId(string $correlation_id): void;

    public function getCorrelationId(): string;

    public function setCausationId(string $causation_id): void;

    public function getCausationId(): string;
}