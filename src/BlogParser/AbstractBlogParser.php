<?php

namespace MarxistSocial\Essentials\BlogParser;

use MarxistSocial\Essentials\Interfaces\BlogParser;

abstract class AbstractBlogParser implements BlogParser
{
    public $blog_url;
    public function __construct(string $blog_url) {
        $this->blog_url = $blog_url;
    }

    abstract public function getData() : string;
    abstract public function tweakData(string $data) : string;
    abstract public function returnData() : string;

    public function parse() {
        $data = $this->getData();
        $data = $this->tweakData($data);
        return $this->returnData();
    }
}