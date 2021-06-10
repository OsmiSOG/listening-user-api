<?php

namespace Database\Seeders;

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
        DB::table('languages')->insert([
            array('name'=>'English', 'iso_639-1'=>'en'),
            array('name'=>'Afar', 'iso_639-1'=>'aa'),
            array('name'=>'Abkhazian', 'iso_639-1'=>'ab'),
            array('name'=>'Afrikaans', 'iso_639-1'=>'af'),
            array('name'=>'Amharic', 'iso_639-1'=>'am'),
            array('name'=>'Arabic', 'iso_639-1'=>'ar'),
            array('name'=>'Assamese', 'iso_639-1'=>'as'),
            array('name'=>'Aymara', 'iso_639-1'=>'ay'),
            array('name'=>'Azerbaijani', 'iso_639-1'=>'az'),
            array('name'=>'Bashkir', 'iso_639-1'=>'ba'),
            array('name'=>'Belarusian', 'iso_639-1'=>'be'),
            array('name'=>'Bulgarian', 'iso_639-1'=>'bg'),
            array('name'=>'Bihari', 'iso_639-1'=>'bh'),
            array('name'=>'Bislama', 'iso_639-1'=>'bi'),
            array('name'=>'Bengali/Bangl','iso_639-1'=>'bn'),
            array('name'=>'Tibetan', 'iso_639-1'=>'bo'),
            array('name'=>'Breton', 'iso_639-1'=>'br'),
            array('name'=>'Catalan', 'iso_639-1'=>'ca'),
            array('name'=>'Corsican', 'iso_639-1'=>'co'),
            array('name'=>'Czech', 'iso_639-1'=>'cs'),
            array('name'=>'Welsh', 'iso_639-1'=>'cy'),
            array('name'=>'Danish', 'iso_639-1'=>'da'),
            array('name'=>'German', 'iso_639-1'=>'de'),
            array('name'=>'Bhutani', 'iso_639-1'=>'dz'),
            array('name'=>'Greek', 'iso_639-1'=>'el'),
            array('name'=>'Esperanto', 'iso_639-1'=>'eo'),
            array('name'=>'Spanish', 'iso_639-1'=>'es'),
            array('name'=>'Estonian', 'iso_639-1'=>'et'),
            array('name'=>'Basque', 'iso_639-1'=>'eu'),
            array('name'=>'Persian', 'iso_639-1'=>'fa'),
            array('name'=>'Finnish', 'iso_639-1'=>'fi'),
            array('name'=>'Fiji', 'iso_639-1'=>'fj'),
            array('name'=>'Faeroese', 'iso_639-1'=>'fo'),
            array('name'=>'French', 'iso_639-1'=>'fr'),
            array('name'=>'Frisian', 'iso_639-1'=>'fy'),
            array('name'=>'Irish', 'iso_639-1'=>'ga'),
            array('name'=>'Scots/Gaelic', 'iso_639-1'=>'gd'),
            array('name'=>'Galician', 'iso_639-1'=>'gl'),
            array('name'=>'Guarani', 'iso_639-1'=>'gn'),
            array('name'=>'Gujarati', 'iso_639-1'=>'gu'),
            array('name'=>'Hausa', 'iso_639-1'=>'ha'),
            array('name'=>'Hindi', 'iso_639-1'=>'hi'),
            array('name'=>'Croatian', 'iso_639-1'=>'hr'),
            array('name'=>'Hungarian', 'iso_639-1'=>'hu'),
            array('name'=>'Armenian', 'iso_639-1'=>'hy'),
            array('name'=>'Interlingua', 'iso_639-1'=>'ia'),
            array('name'=>'Interlingue', 'iso_639-1'=>'ie'),
            array('name'=>'Inupiak', 'iso_639-1'=>'ik'),
            array('name'=>'Indonesian', 'iso_639-1'=>'in'),
            array('name'=>'Icelandic', 'iso_639-1'=>'is'),
            array('name'=>'Italian', 'iso_639-1'=>'it'),
            array('name'=>'Hebrew', 'iso_639-1'=>'iw'),
            array('name'=>'Japanese', 'iso_639-1'=>'ja'),
            array('name'=>'Yiddish', 'iso_639-1'=>'ji'),
            array('name'=>'Javanese', 'iso_639-1'=>'jw'),
            array('name'=>'Georgian', 'iso_639-1'=>'ka'),
            array('name'=>'Kazakh', 'iso_639-1'=>'kk'),
            array('name'=>'Greenlandic', 'iso_639-1'=>'kl'),
            array('name'=>'Cambodian', 'iso_639-1'=>'km'),
            array('name'=>'Kannada', 'iso_639-1'=>'kn'),
            array('name'=>'Korean', 'iso_639-1'=>'ko'),
            array('name'=>'Kashmiri', 'iso_639-1'=>'ks'),
            array('name'=>'Kurdish', 'iso_639-1'=>'ku'),
            array('name'=>'Kirghiz', 'iso_639-1'=>'ky'),
            array('name'=>'Latin', 'iso_639-1'=>'la'),
            array('name'=>'Lingala', 'iso_639-1'=>'ln'),
            array('name'=>'Laothian', 'iso_639-1'=>'lo'),
            array('name'=>'Lithuanian', 'iso_639-1'=>'lt'),
            array('name'=>'Latvian/Lettish', 'iso_639-1'=>'lv'),
            array('name'=>'Malagasy', 'iso_639-1'=>'mg'),
            array('name'=>'Maori', 'iso_639-1'=>'mi'),
            array('name'=>'Macedonian', 'iso_639-1'=>'mk'),
            array('name'=>'Malayalam', 'iso_639-1'=>'ml'),
            array('name'=>'Mongolian', 'iso_639-1'=>'mn'),
            array('name'=>'Moldavian', 'iso_639-1'=>'mo'),
            array('name'=>'Marathi', 'iso_639-1'=>'mr'),
            array('name'=>'Malay', 'iso_639-1'=>'ms'),
            array('name'=>'Maltese', 'iso_639-1'=>'mt'),
            array('name'=>'Burmese', 'iso_639-1'=>'my'),
            array('name'=>'Nauru', 'iso_639-1'=>'na'),
            array('name'=>'Nepali', 'iso_639-1'=>'ne'),
            array('name'=>'Dutch', 'iso_639-1'=>'nl'),
            array('name'=>'Norwegian', 'iso_639-1'=>'no'),
            array('name'=>'Occitan', 'iso_639-1'=>'oc'),
            array('name'=>'(Afan)/Oromoor/Oriya', 'iso_639-1'=>'om'),
            array('name'=>'Punjabi', 'iso_639-1'=>'pa'),
            array('name'=>'Polish', 'iso_639-1'=>'pl'),
            array('name'=>'Pashto/Pushto', 'iso_639-1'=>'ps'),
            array('name'=>'Portuguese', 'iso_639-1'=>'pt'),
            array('name'=>'Quechua', 'iso_639-1'=>'qu'),
            array('name'=>'Rhaeto-Romance', 'iso_639-1'=>'rm'),
            array('name'=>'Kirundi', 'iso_639-1'=>'rn'),
            array('name'=>'Romanian', 'iso_639-1'=>'ro'),
            array('name'=>'Russian', 'iso_639-1'=>'ru'),
            array('name'=>'Kinyarwanda', 'iso_639-1'=>'rw'),
            array('name'=>'Sanskrit', 'iso_639-1'=>'sa'),
            array('name'=>'Sindhi', 'iso_639-1'=>'sd'),
            array('name'=>'Sangro', 'iso_639-1'=>'sg'),
            array('name'=>'Serbo-Croatian', 'iso_639-1'=>'sh'),
            array('name'=>'Singhalese', 'iso_639-1'=>'si'),
            array('name'=>'Slovak', 'iso_639-1'=>'sk'),
            array('name'=>'Slovenian', 'iso_639-1'=>'sl'),
            array('name'=>'Samoan', 'iso_639-1'=>'sm'),
            array('name'=>'Shona', 'iso_639-1'=>'sn'),
            array('name'=>'Somali', 'iso_639-1'=>'so'),
            array('name'=>'Albanian', 'iso_639-1'=>'sq'),
            array('name'=>'Serbian', 'iso_639-1'=>'sr'),
            array('name'=>'Siswati', 'iso_639-1'=>'ss'),
            array('name'=>'Sesotho', 'iso_639-1'=>'st'),
            array('name'=>'Sundanese', 'iso_639-1'=>'su'),
            array('name'=>'Swedish', 'iso_639-1'=>'sv'),
            array('name'=>'Swahili', 'iso_639-1'=>'sw'),
            array('name'=>'Tamil', 'iso_639-1'=>'ta'),
            array('name'=>'Telugu', 'iso_639-1'=>'te'),
            array('name'=>'Tajik', 'iso_639-1'=>'tg'),
            array('name'=>'Thai', 'iso_639-1'=>'th'),
            array('name'=>'Tigrinya', 'iso_639-1'=>'ti'),
            array('name'=>'Turkmen', 'iso_639-1'=>'tk'),
            array('name'=>'Tagalog', 'iso_639-1'=>'tl'),
            array('name'=>'Setswana', 'iso_639-1'=>'tn'),
            array('name'=>'Tonga', 'iso_639-1'=>'to'),
            array('name'=>'Turkish', 'iso_639-1'=>'tr'),
            array('name'=>'Tsonga', 'iso_639-1'=>'ts'),
            array('name'=>'Tatar', 'iso_639-1'=>'tt'),
            array('name'=>'Twi', 'iso_639-1'=>'tw'),
            array('name'=>'Ukrainian', 'iso_639-1'=>'uk'),
            array('name'=>'Urdu', 'iso_639-1'=>'ur'),
            array('name'=>'Uzbek', 'iso_639-1'=>'uz'),
            array('name'=>'Vietnamese', 'iso_639-1'=>'vi'),
            array('name'=>'Volapuk', 'iso_639-1'=>'vo'),
            array('name'=>'Wolof', 'iso_639-1'=>'wo'),
            array('name'=>'Xhosa', 'iso_639-1'=>'xh'),
            array('name'=>'Yoruba', 'iso_639-1'=>'yo'),
            array('name'=>'Chinese', 'iso_639-1'=>'zh'),
            array('name'=>'Zulu', 'iso_639-1'=>'zu'),
        ]);
    }
}
