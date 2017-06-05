<?php namespace Omega1WPCathering;

/** @var \Herbert\Framework\Enqueue $enqueue */
use Omega1WPCathering\Helper;

$enqueue->admin([
    'as'     => 'pureBase',
    'src'    => Helper::assetUrl('css/simple-grid.css'),
    'filter' => [ 'panel' => ['Omega1WPCathering-recipes'] ]
]);