<?php

namespace Tests\Weew\Events;

use PHPUnit_Framework_TestCase;
use Weew\Events\Event;

class EventTest extends PHPUnit_Framework_TestCase {
    public function test_get_and_set_topic() {
        $event = new Event();
        $this->assertEquals(get_class($event), $event->getTopic());
        $event->setTopic('bar');
        $this->assertEquals('bar', $event->getTopic());
    }

    public function test_status() {
        $event = new Event();
        $this->assertTrue($event->isActive());
        $this->assertFalse($event->isHandled());
        $event->handle();
        $this->assertFalse($event->isActive());
        $this->assertTrue($event->isHandled());
    }

    public function test_get_and_set_data() {
        $event = new Event();
        $event->setData(['bar' => 'foo']);
        $this->assertEquals(['bar' => 'foo'], $event->getData());
        $this->assertEquals('foo', $event->get('bar'));
        $this->assertTrue($event->has('bar'));
        $event->remove('bar');
        $this->assertFalse($event->has('bar'));
        $this->assertNull($event->get('bar'));
        $this->assertNull($event->get('foo'));
        $event->set('foo', 'bar');
        $this->assertEquals('bar', $event->get('foo'));
        $this->assertEquals(['foo' => 'bar'], $event->getData());
    }
}