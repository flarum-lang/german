<?php

/*
 * This file is part of the German Extension for Flarum.
 *
 * (c) Marcel Ehrlich <marcelehrlich@hotmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'plural' => function ($count) {
        return $count == 1 ? 'one' : 'other';
    }
];
