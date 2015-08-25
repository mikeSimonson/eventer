<?php

namespace Tests\Weew\Events;

use PHPUnit_Framework_TestCase;
use Weew\Events\EventSubscription;

class SubscriptionTest extends PHPUnit_Framework_TestCase {
    public function test_getters_and_setters() {
        $sub = new EventSubscription('foo', 'bar', 'ba');
        $this->assertEquals('foo', $sub->getId());
        $this->assertEquals('bar', $sub->getTopic());
        $this->assertEquals('ba', $sub->getSubscriber());
        $sub->setTopic('yolo');
        $sub->setSubscriber('swag');
        $this->assertEquals('yolo', $sub->getTopic());
        $this->assertEquals('swag', $sub->getSubscriber());
    }
}
