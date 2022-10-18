<?php

namespace WW\Countries\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Country extends Model
{
    use Sushi;

    protected $rows = [
        [
            'iso_code' => 'AF',
            'name' => 'Afghanistan'
        ],
        [
            'iso_code' => 'AX',
            'name' => 'Åland Islands'
        ],
        [
            'iso_code' => 'AL',
            'name' => 'Albania'
        ],
        [
            'iso_code' => 'DZ',
            'name' => 'Algeria'
        ],
        [
            'iso_code' => 'AS',
            'name' => 'American Samoa'
        ],
        [
            'iso_code' => 'AD',
            'name' => 'Andorra'
        ],
        [
            'iso_code' => 'AO',
            'name' => 'Angola'
        ],
        [
            'iso_code' => 'AI',
            'name' => 'Anguilla'
        ],
        [
            'iso_code' => 'AQ',
            'name' => 'Antarctica'
        ],
        [
            'iso_code' => 'AG',
            'name' => 'Antigua & Barbuda'
        ],
        [
            'iso_code' => 'AR',
            'name' => 'Argentina'
        ],
        [
            'iso_code' => 'AM',
            'name' => 'Armenia'
        ],
        [
            'iso_code' => 'AW',
            'name' => 'Aruba'
        ],
        [
            'iso_code' => 'AU',
            'name' => 'Australia'
        ],
        [
            'iso_code' => 'AT',
            'name' => 'Austria'
        ],
        [
            'iso_code' => 'AZ',
            'name' => 'Azerbaijan'
        ],
        [
            'iso_code' => 'BS',
            'name' => 'Bahamas'
        ],
        [
            'iso_code' => 'BH',
            'name' => 'Bahrain'
        ],
        [
            'iso_code' => 'BD',
            'name' => 'Bangladesh'
        ],
        [
            'iso_code' => 'BB',
            'name' => 'Barbados'
        ],
        [
            'iso_code' => 'BY',
            'name' => 'Belarus'
        ],
        [
            'iso_code' => 'BE',
            'name' => 'Belgium'
        ],
        [
            'iso_code' => 'BZ',
            'name' => 'Belize'
        ],
        [
            'iso_code' => 'BJ',
            'name' => 'Benin'
        ],
        [
            'iso_code' => 'BM',
            'name' => 'Bermuda'
        ],
        [
            'iso_code' => 'BT',
            'name' => 'Bhutan'
        ],
        [
            'iso_code' => 'BO',
            'name' => 'Bolivia'
        ],
        [
            'iso_code' => 'BA',
            'name' => 'Bosnia & Herzegovina'
        ],
        [
            'iso_code' => 'BW',
            'name' => 'Botswana'
        ],
        [
            'iso_code' => 'BV',
            'name' => 'Bouvet Island'
        ],
        [
            'iso_code' => 'BR',
            'name' => 'Brazil'
        ],
        [
            'iso_code' => 'IO',
            'name' => 'British Indian Ocean Territory'
        ],
        [
            'iso_code' => 'VG',
            'name' => 'British Virgin Islands'
        ],
        [
            'iso_code' => 'BN',
            'name' => 'Brunei'
        ],
        [
            'iso_code' => 'BG',
            'name' => 'Bulgaria'
        ],
        [
            'iso_code' => 'BF',
            'name' => 'Burkina Faso'
        ],
        [
            'iso_code' => 'BI',
            'name' => 'Burundi'
        ],
        [
            'iso_code' => 'KH',
            'name' => 'Cambodia'
        ],
        [
            'iso_code' => 'CM',
            'name' => 'Cameroon'
        ],
        [
            'iso_code' => 'CA',
            'name' => 'Canada'
        ],
        [
            'iso_code' => 'CV',
            'name' => 'Cape Verde'
        ],
        [
            'iso_code' => 'BQ',
            'name' => 'Caribbean Netherlands'
        ],
        [
            'iso_code' => 'KY',
            'name' => 'Cayman Islands'
        ],
        [
            'iso_code' => 'CF',
            'name' => 'Central African Republic'
        ],
        [
            'iso_code' => 'TD',
            'name' => 'Chad'
        ],
        [
            'iso_code' => 'CL',
            'name' => 'Chile'
        ],
        [
            'iso_code' => 'CN',
            'name' => 'China'
        ],
        [
            'iso_code' => 'CX',
            'name' => 'Christmas Island'
        ],
        [
            'iso_code' => 'CC',
            'name' => 'Cocos (Keeling) Islands'
        ],
        [
            'iso_code' => 'CO',
            'name' => 'Colombia'
        ],
        [
            'iso_code' => 'KM',
            'name' => 'Comoros'
        ],
        [
            'iso_code' => 'CG',
            'name' => 'Congo - Brazzaville'
        ],
        [
            'iso_code' => 'CD',
            'name' => 'Congo - Kinshasa'
        ],
        [
            'iso_code' => 'CK',
            'name' => 'Cook Islands'
        ],
        [
            'iso_code' => 'CR',
            'name' => 'Costa Rica'
        ],
        [
            'iso_code' => 'CI',
            'name' => 'Côte d’Ivoire'
        ],
        [
            'iso_code' => 'HR',
            'name' => 'Croatia'
        ],
        [
            'iso_code' => 'CU',
            'name' => 'Cuba'
        ],
        [
            'iso_code' => 'CW',
            'name' => 'Curaçao'
        ],
        [
            'iso_code' => 'CY',
            'name' => 'Cyprus'
        ],
        [
            'iso_code' => 'CZ',
            'name' => 'Czechia'
        ],
        [
            'iso_code' => 'DK',
            'name' => 'Denmark'
        ],
        [
            'iso_code' => 'DJ',
            'name' => 'Djibouti'
        ],
        [
            'iso_code' => 'DM',
            'name' => 'Dominica'
        ],
        [
            'iso_code' => 'DO',
            'name' => 'Dominican Republic'
        ],
        [
            'iso_code' => 'EC',
            'name' => 'Ecuador'
        ],
        [
            'iso_code' => 'EG',
            'name' => 'Egypt'
        ],
        [
            'iso_code' => 'SV',
            'name' => 'El Salvador'
        ],
        [
            'iso_code' => 'GQ',
            'name' => 'Equatorial Guinea'
        ],
        [
            'iso_code' => 'ER',
            'name' => 'Eritrea'
        ],
        [
            'iso_code' => 'EE',
            'name' => 'Estonia'
        ],
        [
            'iso_code' => 'SZ',
            'name' => 'Eswatini'
        ],
        [
            'iso_code' => 'ET',
            'name' => 'Ethiopia'
        ],
        [
            'iso_code' => 'FK',
            'name' => 'Falkland Islands'
        ],
        [
            'iso_code' => 'FO',
            'name' => 'Faroe Islands'
        ],
        [
            'iso_code' => 'FJ',
            'name' => 'Fiji'
        ],
        [
            'iso_code' => 'FI',
            'name' => 'Finland'
        ],
        [
            'iso_code' => 'FR',
            'name' => 'France'
        ],
        [
            'iso_code' => 'GF',
            'name' => 'French Guiana'
        ],
        [
            'iso_code' => 'PF',
            'name' => 'French Polynesia'
        ],
        [
            'iso_code' => 'TF',
            'name' => 'French Southern Territories'
        ],
        [
            'iso_code' => 'GA',
            'name' => 'Gabon'
        ],
        [
            'iso_code' => 'GM',
            'name' => 'Gambia'
        ],
        [
            'iso_code' => 'GE',
            'name' => 'Georgia'
        ],
        [
            'iso_code' => 'DE',
            'name' => 'Germany'
        ],
        [
            'iso_code' => 'GH',
            'name' => 'Ghana'
        ],
        [
            'iso_code' => 'GI',
            'name' => 'Gibraltar'
        ],
        [
            'iso_code' => 'GR',
            'name' => 'Greece'
        ],
        [
            'iso_code' => 'GL',
            'name' => 'Greenland'
        ],
        [
            'iso_code' => 'GD',
            'name' => 'Grenada'
        ],
        [
            'iso_code' => 'GP',
            'name' => 'Guadeloupe'
        ],
        [
            'iso_code' => 'GU',
            'name' => 'Guam'
        ],
        [
            'iso_code' => 'GT',
            'name' => 'Guatemala'
        ],
        [
            'iso_code' => 'GG',
            'name' => 'Guernsey'
        ],
        [
            'iso_code' => 'GN',
            'name' => 'Guinea'
        ],
        [
            'iso_code' => 'GW',
            'name' => 'Guinea-Bissau'
        ],
        [
            'iso_code' => 'GY',
            'name' => 'Guyana'
        ],
        [
            'iso_code' => 'HT',
            'name' => 'Haiti'
        ],
        [
            'iso_code' => 'HM',
            'name' => 'Heard & McDonald Islands'
        ],
        [
            'iso_code' => 'HN',
            'name' => 'Honduras'
        ],
        [
            'iso_code' => 'HK',
            'name' => 'Hong Kong SAR China'
        ],
        [
            'iso_code' => 'HU',
            'name' => 'Hungary'
        ],
        [
            'iso_code' => 'IS',
            'name' => 'Iceland'
        ],
        [
            'iso_code' => 'IN',
            'name' => 'India'
        ],
        [
            'iso_code' => 'ID',
            'name' => 'Indonesia'
        ],
        [
            'iso_code' => 'IR',
            'name' => 'Iran'
        ],
        [
            'iso_code' => 'IQ',
            'name' => 'Iraq'
        ],
        [
            'iso_code' => 'IE',
            'name' => 'Ireland'
        ],
        [
            'iso_code' => 'IM',
            'name' => 'Isle of Man'
        ],
        [
            'iso_code' => 'IL',
            'name' => 'Israel'
        ],
        [
            'iso_code' => 'IT',
            'name' => 'Italy'
        ],
        [
            'iso_code' => 'JM',
            'name' => 'Jamaica'
        ],
        [
            'iso_code' => 'JP',
            'name' => 'Japan'
        ],
        [
            'iso_code' => 'JE',
            'name' => 'Jersey'
        ],
        [
            'iso_code' => 'JO',
            'name' => 'Jordan'
        ],
        [
            'iso_code' => 'KZ',
            'name' => 'Kazakhstan'
        ],
        [
            'iso_code' => 'KE',
            'name' => 'Kenya'
        ],
        [
            'iso_code' => 'KI',
            'name' => 'Kiribati'
        ],
        [
            'iso_code' => 'KW',
            'name' => 'Kuwait'
        ],
        [
            'iso_code' => 'KG',
            'name' => 'Kyrgyzstan'
        ],
        [
            'iso_code' => 'LA',
            'name' => 'Laos'
        ],
        [
            'iso_code' => 'LV',
            'name' => 'Latvia'
        ],
        [
            'iso_code' => 'LB',
            'name' => 'Lebanon'
        ],
        [
            'iso_code' => 'LS',
            'name' => 'Lesotho'
        ],
        [
            'iso_code' => 'LR',
            'name' => 'Liberia'
        ],
        [
            'iso_code' => 'LY',
            'name' => 'Libya'
        ],
        [
            'iso_code' => 'LI',
            'name' => 'Liechtenstein'
        ],
        [
            'iso_code' => 'LT',
            'name' => 'Lithuania'
        ],
        [
            'iso_code' => 'LU',
            'name' => 'Luxembourg'
        ],
        [
            'iso_code' => 'MO',
            'name' => 'Macao SAR China'
        ],
        [
            'iso_code' => 'MG',
            'name' => 'Madagascar'
        ],
        [
            'iso_code' => 'MW',
            'name' => 'Malawi'
        ],
        [
            'iso_code' => 'MY',
            'name' => 'Malaysia'
        ],
        [
            'iso_code' => 'MV',
            'name' => 'Maldives'
        ],
        [
            'iso_code' => 'ML',
            'name' => 'Mali'
        ],
        [
            'iso_code' => 'MT',
            'name' => 'Malta'
        ],
        [
            'iso_code' => 'MH',
            'name' => 'Marshall Islands'
        ],
        [
            'iso_code' => 'MQ',
            'name' => 'Martinique'
        ],
        [
            'iso_code' => 'MR',
            'name' => 'Mauritania'
        ],
        [
            'iso_code' => 'MU',
            'name' => 'Mauritius'
        ],
        [
            'iso_code' => 'YT',
            'name' => 'Mayotte'
        ],
        [
            'iso_code' => 'MX',
            'name' => 'Mexico'
        ],
        [
            'iso_code' => 'FM',
            'name' => 'Micronesia'
        ],
        [
            'iso_code' => 'MD',
            'name' => 'Moldova'
        ],
        [
            'iso_code' => 'MC',
            'name' => 'Monaco'
        ],
        [
            'iso_code' => 'MN',
            'name' => 'Mongolia'
        ],
        [
            'iso_code' => 'ME',
            'name' => 'Montenegro'
        ],
        [
            'iso_code' => 'MS',
            'name' => 'Montserrat'
        ],
        [
            'iso_code' => 'MA',
            'name' => 'Morocco'
        ],
        [
            'iso_code' => 'MZ',
            'name' => 'Mozambique'
        ],
        [
            'iso_code' => 'MM',
            'name' => 'Myanmar (Burma)'
        ],
        [
            'iso_code' => 'NA',
            'name' => 'Namibia'
        ],
        [
            'iso_code' => 'NR',
            'name' => 'Nauru'
        ],
        [
            'iso_code' => 'NP',
            'name' => 'Nepal'
        ],
        [
            'iso_code' => 'NL',
            'name' => 'Netherlands'
        ],
        [
            'iso_code' => 'NC',
            'name' => 'New Caledonia'
        ],
        [
            'iso_code' => 'NZ',
            'name' => 'New Zealand'
        ],
        [
            'iso_code' => 'NI',
            'name' => 'Nicaragua'
        ],
        [
            'iso_code' => 'NE',
            'name' => 'Niger'
        ],
        [
            'iso_code' => 'NG',
            'name' => 'Nigeria'
        ],
        [
            'iso_code' => 'NU',
            'name' => 'Niue'
        ],
        [
            'iso_code' => 'NF',
            'name' => 'Norfolk Island'
        ],
        [
            'iso_code' => 'KP',
            'name' => 'North Korea'
        ],
        [
            'iso_code' => 'MK',
            'name' => 'North Macedonia'
        ],
        [
            'iso_code' => 'MP',
            'name' => 'Northern Mariana Islands'
        ],
        [
            'iso_code' => 'NO',
            'name' => 'Norway'
        ],
        [
            'iso_code' => 'OM',
            'name' => 'Oman'
        ],
        [
            'iso_code' => 'PK',
            'name' => 'Pakistan'
        ],
        [
            'iso_code' => 'PW',
            'name' => 'Palau'
        ],
        [
            'iso_code' => 'PS',
            'name' => 'Palestinian Territories'
        ],
        [
            'iso_code' => 'PA',
            'name' => 'Panama'
        ],
        [
            'iso_code' => 'PG',
            'name' => 'Papua New Guinea'
        ],
        [
            'iso_code' => 'PY',
            'name' => 'Paraguay'
        ],
        [
            'iso_code' => 'PE',
            'name' => 'Peru'
        ],
        [
            'iso_code' => 'PH',
            'name' => 'Philippines'
        ],
        [
            'iso_code' => 'PN',
            'name' => 'Pitcairn Islands'
        ],
        [
            'iso_code' => 'PL',
            'name' => 'Poland'
        ],
        [
            'iso_code' => 'PT',
            'name' => 'Portugal'
        ],
        [
            'iso_code' => 'PR',
            'name' => 'Puerto Rico'
        ],
        [
            'iso_code' => 'QA',
            'name' => 'Qatar'
        ],
        [
            'iso_code' => 'RE',
            'name' => 'Réunion'
        ],
        [
            'iso_code' => 'RO',
            'name' => 'Romania'
        ],
        [
            'iso_code' => 'RU',
            'name' => 'Russia'
        ],
        [
            'iso_code' => 'RW',
            'name' => 'Rwanda'
        ],
        [
            'iso_code' => 'WS',
            'name' => 'Samoa'
        ],
        [
            'iso_code' => 'SM',
            'name' => 'San Marino'
        ],
        [
            'iso_code' => 'ST',
            'name' => 'São Tomé & Príncipe'
        ],
        [
            'iso_code' => 'SA',
            'name' => 'Saudi Arabia'
        ],
        [
            'iso_code' => 'SN',
            'name' => 'Senegal'
        ],
        [
            'iso_code' => 'RS',
            'name' => 'Serbia'
        ],
        [
            'iso_code' => 'SC',
            'name' => 'Seychelles'
        ],
        [
            'iso_code' => 'SL',
            'name' => 'Sierra Leone'
        ],
        [
            'iso_code' => 'SG',
            'name' => 'Singapore'
        ],
        [
            'iso_code' => 'SX',
            'name' => 'Sint Maarten'
        ],
        [
            'iso_code' => 'SK',
            'name' => 'Slovakia'
        ],
        [
            'iso_code' => 'SI',
            'name' => 'Slovenia'
        ],
        [
            'iso_code' => 'SB',
            'name' => 'Solomon Islands'
        ],
        [
            'iso_code' => 'SO',
            'name' => 'Somalia'
        ],
        [
            'iso_code' => 'ZA',
            'name' => 'South Africa'
        ],
        [
            'iso_code' => 'GS',
            'name' => 'South Georgia & South Sandwich Islands'
        ],
        [
            'iso_code' => 'KR',
            'name' => 'South Korea'
        ],
        [
            'iso_code' => 'SS',
            'name' => 'South Sudan'
        ],
        [
            'iso_code' => 'ES',
            'name' => 'Spain'
        ],
        [
            'iso_code' => 'LK',
            'name' => 'Sri Lanka'
        ],
        [
            'iso_code' => 'BL',
            'name' => 'St. Barthélemy'
        ],
        [
            'iso_code' => 'SH',
            'name' => 'St. Helena'
        ],
        [
            'iso_code' => 'KN',
            'name' => 'St. Kitts & Nevis'
        ],
        [
            'iso_code' => 'LC',
            'name' => 'St. Lucia'
        ],
        [
            'iso_code' => 'MF',
            'name' => 'St. Martin'
        ],
        [
            'iso_code' => 'PM',
            'name' => 'St. Pierre & Miquelon'
        ],
        [
            'iso_code' => 'VC',
            'name' => 'St. Vincent & Grenadines'
        ],
        [
            'iso_code' => 'SD',
            'name' => 'Sudan'
        ],
        [
            'iso_code' => 'SR',
            'name' => 'Suriname'
        ],
        [
            'iso_code' => 'SJ',
            'name' => 'Svalbard & Jan Mayen'
        ],
        [
            'iso_code' => 'SE',
            'name' => 'Sweden'
        ],
        [
            'iso_code' => 'CH',
            'name' => 'Switzerland'
        ],
        [
            'iso_code' => 'SY',
            'name' => 'Syria'
        ],
        [
            'iso_code' => 'TW',
            'name' => 'Taiwan'
        ],
        [
            'iso_code' => 'TJ',
            'name' => 'Tajikistan'
        ],
        [
            'iso_code' => 'TZ',
            'name' => 'Tanzania'
        ],
        [
            'iso_code' => 'TH',
            'name' => 'Thailand'
        ],
        [
            'iso_code' => 'TL',
            'name' => 'Timor-Leste'
        ],
        [
            'iso_code' => 'TG',
            'name' => 'Togo'
        ],
        [
            'iso_code' => 'TK',
            'name' => 'Tokelau'
        ],
        [
            'iso_code' => 'TO',
            'name' => 'Tonga'
        ],
        [
            'iso_code' => 'TT',
            'name' => 'Trinidad & Tobago'
        ],
        [
            'iso_code' => 'TN',
            'name' => 'Tunisia'
        ],
        [
            'iso_code' => 'TR',
            'name' => 'Turkey'
        ],
        [
            'iso_code' => 'TM',
            'name' => 'Turkmenistan'
        ],
        [
            'iso_code' => 'TC',
            'name' => 'Turks & Caicos Islands'
        ],
        [
            'iso_code' => 'TV',
            'name' => 'Tuvalu'
        ],
        [
            'iso_code' => 'UM',
            'name' => 'U.S. Outlying Islands'
        ],
        [
            'iso_code' => 'VI',
            'name' => 'U.S. Virgin Islands'
        ],
        [
            'iso_code' => 'UG',
            'name' => 'Uganda'
        ],
        [
            'iso_code' => 'UA',
            'name' => 'Ukraine'
        ],
        [
            'iso_code' => 'AE',
            'name' => 'United Arab Emirates'
        ],
        [
            'iso_code' => 'GB',
            'name' => 'United Kingdom'
        ],
        [
            'iso_code' => 'US',
            'name' => 'United States'
        ],
        [
            'iso_code' => 'UY',
            'name' => 'Uruguay'
        ],
        [
            'iso_code' => 'UZ',
            'name' => 'Uzbekistan'
        ],
        [
            'iso_code' => 'VU',
            'name' => 'Vanuatu'
        ],
        [
            'iso_code' => 'VA',
            'name' => 'Vatican City'
        ],
        [
            'iso_code' => 'VE',
            'name' => 'Venezuela'
        ],
        [
            'iso_code' => 'VN',
            'name' => 'Vietnam'
        ],
        [
            'iso_code' => 'WF',
            'name' => 'Wallis & Futuna'
        ],
        [
            'iso_code' => 'EH',
            'name' => 'Western Sahara'
        ],
        [
            'iso_code' => 'YE',
            'name' => 'Yemen'
        ],
        [
            'iso_code' => 'ZM',
            'name' => 'Zambia'
        ],
        [
            'iso_code' => 'ZW',
            'name' => 'Zimbabwe'
        ],
    ];
}
