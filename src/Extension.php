<?php
/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qia;

use Flarum\Support\Extension as BaseExtension;
use Illuminate\Events\Dispatcher;
use Flarum\Events\RegisterLocales;

class Extension extends BaseExtension
{
    public function listen(Dispatcher $events)
    {
        $events->listen(RegisterLocales::class, function (RegisterLocales $event) {
            $event->addLocale('fr', 'Français');
            $event->addJsFile('fr', __DIR__.'/../locale/core.js');
            $event->addConfig('fr', __DIR__.'/../locale/core.php');
            $event->addTranslations('fr', __DIR__.'/../locale/core.yml');
            $event->addTranslations('fr', __DIR__.'/../locale/likes.yml');
            $event->addTranslations('fr', __DIR__.'/../locale/lock.yml');
            $event->addTranslations('fr', __DIR__.'/../locale/mentions.yml');
            $event->addTranslations('fr', __DIR__.'/../locale/pusher.yml');
            $event->addTranslations('fr', __DIR__.'/../locale/reports.yml');
            $event->addTranslations('fr', __DIR__.'/../locale/sticky.yml');
            $event->addTranslations('fr', __DIR__.'/../locale/subscriptions.yml');
            $event->addTranslations('fr', __DIR__.'/../locale/tags.yml');
        });
    }
}
