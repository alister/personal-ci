<?php
use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Resources')
    ->exclude('Tests')
    ->in('src')
;

return new Sami($iterator, array(
    'theme'                => 'enhanced',
    'title'                => 'Personal-CI demo API',
    'build_dir'            => __DIR__.'/build/docs',
    'cache_dir'            => __DIR__.'/.sami-cache',
    'default_opened_level' => 2,
));
