<?php

use Nikidze\Transliterate\Transliterator;
use PHPUnit\Framework\TestCase;

class TransliteratorTest extends TestCase
{
    public function testTranslit()
    {
        $string = 'Пушкин';
        $string_transliterated = Transliterator::translit($string);

        $this->assertEquals($string_transliterated, 'Pushkin');
    }

    public function testTranslitIso()
    {
        $string = 'съешь ещё этих мягких французских булок, да выпей чаю';
        $string_transliterated = Transliterator::translit($string, 'iso9');

        $this->assertEquals($string_transliterated, "s\"esh' eschyo e'tix myagkix francuzskix bulok, da vy'pej chayu");
    }

    public function testFriendlyUrl()
    {
        $string = "Пушкин: \"Дубровский\"";
        $string_transliterated = Transliterator::friendlyUrl($string);

        $this->assertEquals($string_transliterated, 'pushkin-dubrovskiy');
    }
}
