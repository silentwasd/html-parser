<?php

namespace BashkirskyKot\HtmlParser\Facades;

use BashkirskyKot\HtmlParser\Services\Parser\ParserService;
use Illuminate\Support\Facades\Facade;

class Parser extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ParserService::class;
    }
}