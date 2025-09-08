<?php

declare(strict_types=1);

namespace App\Shared\Domain;

trait RecordEvents
{


    /** @var DomainEvent[] */
    private array $recordedEvents = [];

    protected function recordThat(DomainEvent $event): void
    {
        $this->recordedEvents[] = $event;
    }

    /** @return DomainEvent[]  */
    public function pullDomainEvents(): array
    {
        $eventsToReturn = $this->recordedEvents;
        $this->recordedEvents = [];

        return $eventsToReturn;
    }
}
