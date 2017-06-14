<?php

namespace Rf\WebComponent\EngineBundle\Tests\Mock\ViewObject\Page\Composed;

use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Composed.
 */
class Composed
{
    /**
     * @Route("/composed", name="composed_page_test")
     *
     * @return array The array of data
     */
    public function __invoke()
    {
        return array(
            'title' => 'composed page',
        );
    }
}
