<?php

require __DIR__ . '/../vendor/autoload.php';

use Nikidze\Transliterate\Transliterator;

// Aleksandr Sergeevich Pushkin
echo Transliterator::translit('Александр Сергеевич Пушкин');
// aleksandr-sergeevich-pushkin-dubrovskiy
echo Transliterator::friendlyUrl('Александр Сергеевич Пушкин: "Дубровский"');
// s"esh' eschyo e'tix myagkix francuzskix bulok, da vy'pej chayu
echo Transliterator::translit('съешь ещё этих мягких французских булок, да выпей чаю', 'iso9');