<?php

namespace Braumye\Illuminate\Http\Client\Facades;

use Braumye\Illuminate\Http\Client\Factory;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest asJson()
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest asForm()
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest attach(string $name, string $contents, string|null $filename = null, array $headers)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest asMultipart()
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest bodyFormat(string $format)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest contentType(string $contentType)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest acceptJson()
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest accept(string $contentType)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest retry(int $times, int $sleep = 0)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest withHeaders(array $headers)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest withBasicAuth(string $username, string $password)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest withDigestAuth(string $username, string $password)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest withToken(string $token, string $type = 'Bearer')
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest withCookies(array $cookies, string $domain)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest withoutRedirecting()
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest withoutVerifying()
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest timeout(int $seconds)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest withOptions(array $options)
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest beforeSending(callable $callback)
 * @method static \Braumye\Illuminate\Http\Client\Response get(string $url, array $query = [])
 * @method static \Braumye\Illuminate\Http\Client\Response post(string $url, array $data = [])
 * @method static \Braumye\Illuminate\Http\Client\Response patch(string $url, array $data = [])
 * @method static \Braumye\Illuminate\Http\Client\Response put(string $url, array $data = [])
 * @method static \Braumye\Illuminate\Http\Client\Response delete(string $url, array $data = [])
 * @method static \Braumye\Illuminate\Http\Client\Response send(string $method, string $url, array $options = [])
 * @method static \Braumye\Illuminate\Http\Client\PendingRequest stub(callable $callback)
 * @method static \Braumye\Illuminate\Http\Client\ResponseSequence fakeSequence(string $urlPattern = '*')
 *
 * @see \Braumye\Illuminate\Http\Client\Factory
 */
class Http extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
