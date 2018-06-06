<?php

namespace App;

use Mni\FrontYAML\Markdown\MarkdownParser;
use Parsedown as BaseParsedown;

class ParsedownParser implements MarkdownParser
{

    /**
     * ParsedownParser constructor.
     */
    public function __construct()
    {
        $this->parser = new BaseParsedown();
    }

    /**
     * @param  string $markdown
     * @return  string
     */
    public function parse($markdown)
    {
        return $this->parser->text($markdown);
    }
}
