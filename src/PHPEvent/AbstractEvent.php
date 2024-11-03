<?php

declare(strict_types=1);

namespace PHPEvent;

use Symfony\Component\EventDispatcher\GenericEvent;

abstract class AbstractEvent extends GenericEvent implements EventInterface
{ }
