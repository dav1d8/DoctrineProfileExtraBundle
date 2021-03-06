<?php

return Symfony\CS\Config\Config::create()
    ->fixers([
        '-phpdoc_short_description',
        '-list_commas',
        '-unalign_double_arrow',
        '-unalign_equals',
        'short_array_syntax',
    ])
    ->setUsingCache(true)
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in([__DIR__])
    )
;
