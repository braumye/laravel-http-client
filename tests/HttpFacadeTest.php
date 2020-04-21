<?php

namespace Braumye\Illuminate\Tests\Http;

use Braumye\Illuminate\Http\Client\Facades\Http;
use Braumye\Illuminate\Http\Client\Factory;
use Braumye\Illuminate\Http\Client\PendingRequest;
use Orchestra\Testbench\TestCase;

class HttpFacadeTest extends TestCase
{
    public function testHttpFacade()
    {
        $this->assertInstanceof(PendingRequest::class, Http::asJson());
    }
}
