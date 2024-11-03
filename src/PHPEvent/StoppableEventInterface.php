<?php

declare(strict_types=1);

namespace PHPEvent;

use Psr\EventDispatcher\StoppableEventInterface as PsrStoppableEventInterface;

interface StoppableEventInterface extends PsrStoppableEventInterface
{
    public function isPropagationStopped(): bool;
    public function stopPropagation(): void;
}
