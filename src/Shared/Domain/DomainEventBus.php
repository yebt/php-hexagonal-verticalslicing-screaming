<?php

declare(strict_types=1);

namespace App\Shared\Domain;

interface DomainEventBus
{

    /**
     * @param DomainEvent[] $events
     */
    public function publish(array $events): void;
}
