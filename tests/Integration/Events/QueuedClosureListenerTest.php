<?php

namespace Illuminate\Tests\Integration\Events;

use Illuminate\Events\CallQueuedListener;
use Illuminate\Events\InvokeQueuedClosure;
use function Illuminate\Events\queueable;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Event;
use Orchestra\Testbench\TestCase;

class QueuedClosureListenerTest extends TestCase
{
    public function testAnonymousQueuedListenerIsQueued()
    {
        Bus::fake();

        Event::listen(queueable( static function (TestEvent $event) {
            //
        })->catch( static function (TestEvent $event) {
            //
        })->onConnection(null)->onQueue(null));

        Event::dispatch(new TestEvent);

        Bus::assertDispatched(CallQueuedListener::class, static function ($job) {
            return $job->class == InvokeQueuedClosure::class;
        });
    }
}

class TestEvent
{
    //
}
