<?php

declare(strict_types=1);

namespace App\Shared\Domain;

use DateTimeImmutable;

interface DomainEvent
{
    public function aggregateId(): string;
    public function occurredOn(): DateTimeImmutable;
    public static function eventName(): string;
}
