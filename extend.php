<?php

/*
 * A Flarum extension template for BBCode created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '';
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[image={URL} width={NUMBER?} unit={CHOICE=px,em,rem,%;optional} title={SIMPLETEXT1?} alt={SIMPLETEXT2?} class={SIMPLETEXT3?}]',
                '<img src="{URL}" style="width:{NUMBER}{CHOICE};" class="SIMPLETEXT3" title="SIMPLETEXT1" alt="SIMPLETEXT2">'
            );
        })
];
