<?php

use Flarum\Event\ConfigureWebApp;
use Flarum\Event\DiscussionWillBeSaved;
//use Flarum\Event\ExtensionWasEnabled;
//use Flarum\Extension\Extension;
use Illuminate\Contracts\Events\Dispatcher;

return function(Dispatcher $events) {
    $events->listen(ConfigureWebApp::class, function(ConfigureWebApp $event){
        //$event->addAssets(__DIR__.'/js/lib/string.js');
    });

    $events->listen(DiscussionWillBeSaved::class, function(DiscussionWillBeSaved $event){

        $text = $event->discussion->title;

        $text = \GaNuongLaChanh\FlarumVnSlug\Utils::genSlug($text);

        $event->discussion->slug = $text;

    });
};
