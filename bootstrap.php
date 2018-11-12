<?php

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$events->afterBuild(function ($jigsaw) {
    $collection = json_encode($jigsaw->getCollection('emails')->toJson());
    $config = json_encode($jigsaw->getConfig()->toJson());
    exec("node tasks/js/after-jigsaw --collection=$collection --config=$config 2>&1", $out, $err);
});
