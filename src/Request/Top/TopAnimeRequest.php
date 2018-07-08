<?php

namespace Jikan\Request\Top;

use Jikan\Request\RequestInterface;

class TopAnimeRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $page;

    /**
     * TopAnimeRequest constructor.
     *
     * @param int $page
     */
    public function __construct(int $page = 0)
    {
        $this->page = $page;
    }

    /**
     * Get the path to request
     *
     * @return string
     */
    public function getPath(): string
    {
        return 'https://myanimelist.net/topanime.php?'.http_build_query(['limit' => 50 * $this->page]);
    }
}
