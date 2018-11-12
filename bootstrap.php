<?php

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$events->afterBuild(function ($jigsaw) {
    $config = json_encode($jigsaw->getConfig()->toJson());
    $jigsaw->getCollections()->each(function ($item, $key) use ($config) {
        $collection = json_encode($item->toJson());
        exec("node tasks/js/after-jigsaw --collection=$collection --config=$config 2>&1", $out, $err);
    });
});
