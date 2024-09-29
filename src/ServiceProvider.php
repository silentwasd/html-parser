<?php

namespace BashkirskyKot\HtmlParser;

use BashkirskyKot\HtmlParser\Services\Parser\ParserService;
use Illuminate\Support\ServiceProvider as Provider;

class ServiceProvider extends Provider
{
    public function register(): void
    {
        $this->app->bind(ParserService::class);
    }
}