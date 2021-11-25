<?php

namespace Nikidze\Transliterate;

class Transliterator
{
    const CONVERTER_DEFAULT = array(
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
        'э' => 'e',    'ю' => 'yu',   'я' => 'ya',

        'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
        'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
        'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
        'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
        'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
        'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
        'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
    );

    const CONVERTER_ISO9 = array(
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'yo',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'j',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'x',    'ц' => 'c',    'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'sch',  'ь' => '\'',    'ы' => 'y\'',    'ъ' => '"',
        'э' => 'e\'',    'ю' => 'yu',   'я' => 'ya',

        'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
        'Е' => 'E',    'Ё' => 'Yo',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
        'Й' => 'J',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
        'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
        'У' => 'U',    'Ф' => 'F',    'Х' => 'X',    'Ц' => 'C',    'Ч' => 'Ch',
        'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '\'',     'Ы' => 'Y\'',    'Ъ' => '"',
        'Э' => 'E\'',    'Ю' => 'Yu',   'Я' => 'Ya',
    );

    /**
     * Transliterates from Russian into Latin
     * 
     * Example: Пушкин -> Pushkin
     * 
     * @param string $from
     * @param string $format
     * @return string
     */
    public static function translit(string $from, string $format = 'default'): string
    {
        if ($format == 'default') {
            $value = strtr($from, self::CONVERTER_DEFAULT);
        } else {
            $value = strtr($from, self::CONVERTER_ISO9);
        }
        return $value;
    }

    /**
     * Transliterates from Russian into friendly Url
     * 
     * Example: Пушкин: "Дубровский" -> pushkin-dubrovskiy
     * 
     * @param string $from
     * @param string $format
     * @return string
     */
    public static function friendlyUrl(string $from): string
    {
        $value = self::translit($from, 'default');
        $value = mb_strtolower($value);
        $value = mb_ereg_replace('[^-0-9a-z]', '-', $value);
        $value = mb_ereg_replace('[-]+', '-', $value);
        $value = trim($value, '-');
        return $value;
    }
}
