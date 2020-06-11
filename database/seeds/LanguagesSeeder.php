<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = $this->languagesList();

        DB::table('languages')->insert($languages);
    }

    public function languagesList()
    {
        $items = [
            'English',
            'Afar',
            'Abkhazian',
            'Afrikaans',
            'Amharic',
            'Arabic',
            'Assamese',
            'Aymara',
            'Azerbaijani',
            'Bashkir',
            'Belarusian',
            'Bulgarian',
            'Bihari',
            'Bislama',
            'Bengali/Bangla',
            'Tibetan',
            'Breton',
            'Catalan',
            'Corsican',
            'Czech',
            'Welsh',
            'Danish',
            'German',
            'Bhutani',
            'Greek',
            'Esperanto',
            'Spanish',
            'Estonian',
            'Basque',
            'Persian',
            'Finnish',
            'Fiji',
            'Faeroese',
            'French',
            'Frisian',
            'Irish',
            'Scots/Gaelic',
            'Galician',
            'Guarani',
            'Gujarati',
            'Hausa',
            'Hindi',
            'Croatian',
            'Hungarian',
            'Armenian',
            'Interlingua',
            'Interlingue',
            'Inupiak',
            'Indonesian',
            'Icelandic',
            'Italian',
            'Hebrew',
            'Japanese',
            'Yiddish',
            'Javanese',
            'Georgian',
            'Kazakh',
            'Greenlandic',
            'Cambodian',
            'Kannada',
            'Korean',
            'Kashmiri',
            'Kurdish',
            'Kirghiz',
            'Latin',
            'Lingala',
            'Laothian',
            'Lithuanian',
            'Latvian/Lettish',
            'Malagasy',
            'Maori',
            'Macedonian',
            'Malayalam',
            'Mongolian',
            'Moldavian',
            'Marathi',
            'Malay',
            'Maltese',
            'Burmese',
            'Nauru',
            'Nepali',
            'Dutch',
            'Norwegian',
            'Occitan',
            '(Afan)/Oromoor/Oriya',
            'Punjabi',
            'Polish',
            'Pashto/Pushto',
            'Portuguese',
            'Quechua',
            'Rhaeto-Romance',
            'Kirundi',
            'Romanian',
            'Russian',
            'Kinyarwanda',
            'Sanskrit',
            'Sindhi',
            'Sangro',
            'Serbo-Croatian',
            'Singhalese',
            'Slovak',
            'Slovenian',
            'Samoan',
            'Shona',
            'Somali',
            'Albanian',
            'Serbian',
            'Siswati',
            'Sesotho',
            'Sundanese',
            'Swedish',
            'Swahili',
            'Tamil',
            'Telugu',
            'Tajik',
            'Thai',
            'Tigrinya',
            'Turkmen',
            'Tagalog',
            'Setswana',
            'Tonga',
            'Turkish',
            'Tsonga',
            'Tatar',
            'Twi',
            'Ukrainian',
            'Urdu',
            'Uzbek',
            'Vietnamese',
            'Volapuk',
            'Wolof',
            'Xhosa',
            'Yoruba',
            'Chinese',
            'Zulu',
        ];

        $languages = array();
        foreach ($items as $item => $value) {
            $languages[$item]['name'] = $value;
            $languages[$item]['created_at'] = Carbon::now();
            $languages[$item]['updated_at'] = Carbon::now();
        }

        return $languages;
    }

}
