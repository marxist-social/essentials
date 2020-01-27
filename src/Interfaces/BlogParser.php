<?php

namespace MarxistSocial\Essentials\Interfaces;

interface BlogParser
{
    public function __construct(string $blog_url);
    public function getData() : string;
    public function tweakData(string $data) : string;
    public function returnData() : string;
    public function parse() : string;
}

