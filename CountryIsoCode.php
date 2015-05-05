<?php
/**
 * Helper class to get country by different ISO 3166-1 code
 *
 * @author Mehdi Atraimche <mehdi.atraimche@gmail.com>
 * @see http://en.wikipedia.org/wiki/ISO_3166-1
 */

class CountryIsoCode{

    /**
     * All countries in array
     * Thank's to Ryan Deas for the array
     * @var array
     * @see https://gist.github.com/DrRoach/a0562291953c65c71686
     */
    private static $countries = array (
        0 => array ('country' => 'Afghanistan', 'alpha_2' => 'AF', 'alpha_3' => 'AFG', 'digit_code' => '004'),
        1 => array ('country' => 'Albania', 'alpha_2' => 'AL', 'alpha_3' => 'ALB', 'digit_code' => '008'),
        2 => array ('country' => 'Algeria', 'alpha_2' => 'DZ', 'alpha_3' => 'DZA', 'digit_code' => '012'),
        3 => array ('country' => 'American Samoa', 'alpha_2' => 'AS', 'alpha_3' => 'ASM', 'digit_code' => '016'),
        4 => array ('country' => 'Andorra', 'alpha_2' => 'AD', 'alpha_3' => 'AND', 'digit_code' => '020'),
        5 => array ('country' => 'Angola', 'alpha_2' => 'AO', 'alpha_3' => 'AGO', 'digit_code' => '024'),
        6 => array ('country' => 'Anguilla', 'alpha_2' => 'AI', 'alpha_3' => 'AIA', 'digit_code' => '660'),
        7 => array ('country' => 'Antarctica', 'alpha_2' => 'AQ', 'alpha_3' => 'ATA', 'digit_code' => '010'),
        8 => array ('country' => 'Antigua and Barbuda', 'alpha_2' => 'AG', 'alpha_3' => 'ATG', 'digit_code' => '028'),
        9 => array ('country' => 'Argentina', 'alpha_2' => 'AR', 'alpha_3' => 'ARG', 'digit_code' => '032'),
        10 => array ('country' => 'Armenia', 'alpha_2' => 'AM', 'alpha_3' => 'ARM', 'digit_code' => '051'),
        11 => array ('country' => 'Aruba', 'alpha_2' => 'AW', 'alpha_3' => 'ABW', 'digit_code' => '533'),
        12 => array ('country' => 'Australia', 'alpha_2' => 'AU', 'alpha_3' => 'AUS', 'digit_code' => '036'),
        13 => array ('country' => 'Austria', 'alpha_2' => 'AT', 'alpha_3' => 'AUT', 'digit_code' => '040'),
        14 => array ('country' => 'Azerbaijan', 'alpha_2' => 'AZ', 'alpha_3' => 'AZE', 'digit_code' => '031'),
        15 => array ('country' => 'Bahamas', 'alpha_2' => 'BS', 'alpha_3' => 'BHS', 'digit_code' => '044'),
        16 => array ('country' => 'Bahrain', 'alpha_2' => 'BH', 'alpha_3' => 'BHR', 'digit_code' => '048'),
        17 => array ('country' => 'Bangladesh', 'alpha_2' => 'BD', 'alpha_3' => 'BGD', 'digit_code' => '050'),
        18 => array ('country' => 'Barbados', 'alpha_2' => 'BB', 'alpha_3' => 'BRB', 'digit_code' => '052'),
        19 => array ('country' => 'Belarus', 'alpha_2' => 'BY', 'alpha_3' => 'BLR', 'digit_code' => '112'),
        20 => array ('country' => 'Belgium', 'alpha_2' => 'BE', 'alpha_3' => 'BEL', 'digit_code' => '056'),
        21 => array ('country' => 'Belize', 'alpha_2' => 'BZ', 'alpha_3' => 'BLZ', 'digit_code' => '084'),
        22 => array ('country' => 'Benin', 'alpha_2' => 'BJ', 'alpha_3' => 'BEN', 'digit_code' => '204'),
        23 => array ('country' => 'Bermuda', 'alpha_2' => 'BM', 'alpha_3' => 'BMU', 'digit_code' => '060'),
        24 => array ('country' => 'Bhutan', 'alpha_2' => 'BT', 'alpha_3' => 'BTN', 'digit_code' => '064'),
        25 => array ('country' => 'Bosnia and Herzegovina', 'alpha_2' => 'BA', 'alpha_3' => 'BIH', 'digit_code' => '070'),
        26 => array ('country' => 'Botswana', 'alpha_2' => 'BW', 'alpha_3' => 'BWA', 'digit_code' => '072'),
        27 => array ('country' => 'Bouvet Island', 'alpha_2' => 'BV', 'alpha_3' => 'BVT', 'digit_code' => '074'),
        28 => array ('country' => 'Brazil', 'alpha_2' => 'BR', 'alpha_3' => 'BRA', 'digit_code' => '076'),
        29 => array ('country' => 'British Indian Ocean Territory', 'alpha_2' => 'IO', 'alpha_3' => 'IOT', 'digit_code' => '086'),
        30 => array ('country' => 'Brunei Darussalam', 'alpha_2' => 'BN', 'alpha_3' => 'BRN', 'digit_code' => '096'),
        31 => array ('country' => 'Bulgaria', 'alpha_2' => 'BG', 'alpha_3' => 'BGR', 'digit_code' => '100'),
        32 => array ('country' => 'Burkina Faso', 'alpha_2' => 'BF', 'alpha_3' => 'BFA', 'digit_code' => '854'),
        33 => array ('country' => 'Burundi', 'alpha_2' => 'BI', 'alpha_3' => 'BDI', 'digit_code' => '108'),
        34 => array ('country' => 'Cambodia', 'alpha_2' => 'KH', 'alpha_3' => 'KHM', 'digit_code' => '116'),
        35 => array ('country' => 'Cameroon', 'alpha_2' => 'CM', 'alpha_3' => 'CMR', 'digit_code' => '120'),
        36 => array ('country' => 'Canada', 'alpha_2' => 'CA', 'alpha_3' => 'CAN', 'digit_code' => '124'),
        37 => array ('country' => 'Cabo Verde', 'alpha_2' => 'CV', 'alpha_3' => 'CPV', 'digit_code' => '132'),
        38 => array ('country' => 'Cayman Islands', 'alpha_2' => 'KY', 'alpha_3' => 'CYM', 'digit_code' => '136'),
        39 => array ('country' => 'Central African Republic', 'alpha_2' => 'CF', 'alpha_3' => 'CAF', 'digit_code' => '140'),
        40 => array ('country' => 'Chad', 'alpha_2' => 'TD', 'alpha_3' => 'TCD', 'digit_code' => '148'),
        41 => array ('country' => 'Chile', 'alpha_2' => 'CL', 'alpha_3' => 'CHL', 'digit_code' => '152'),
        42 => array ('country' => 'China', 'alpha_2' => 'CN', 'alpha_3' => 'CHN', 'digit_code' => '156'),
        43 => array ('country' => 'Christmas Island', 'alpha_2' => 'CX', 'alpha_3' => 'CXR', 'digit_code' => '162'),
        44 => array ('country' => 'Colombia', 'alpha_2' => 'CO', 'alpha_3' => 'COL', 'digit_code' => '170'),
        45 => array ('country' => 'Comoros', 'alpha_2' => 'KM', 'alpha_3' => 'COM', 'digit_code' => '174'),
        46 => array ('country' => 'Cook Islands', 'alpha_2' => 'CK', 'alpha_3' => 'COK', 'digit_code' => '184'),
        47 => array ('country' => 'Costa Rica', 'alpha_2' => 'CR', 'alpha_3' => 'CRI', 'digit_code' => '188'),
        48 => array ('country' => 'Croatia', 'alpha_2' => 'HR', 'alpha_3' => 'HRV', 'digit_code' => '191'),
        49 => array ('country' => 'Cuba', 'alpha_2' => 'CU', 'alpha_3' => 'CUB', 'digit_code' => '192'),
        50 => array ('country' => 'Cyprus', 'alpha_2' => 'CY', 'alpha_3' => 'CYP', 'digit_code' => '196'),
        51 => array ('country' => 'Czech Republic', 'alpha_2' => 'CZ', 'alpha_3' => 'CZE', 'digit_code' => '203'),
        52 => array ('country' => 'Denmark', 'alpha_2' => 'DK', 'alpha_3' => 'DNK', 'digit_code' => '208'),
        53 => array ('country' => 'Djibouti', 'alpha_2' => 'DJ', 'alpha_3' => 'DJI', 'digit_code' => '262'),
        54 => array ('country' => 'Dominica', 'alpha_2' => 'DM', 'alpha_3' => 'DMA', 'digit_code' => '212'),
        55 => array ('country' => 'Dominican Republic', 'alpha_2' => 'DO', 'alpha_3' => 'DOM', 'digit_code' => '214'),
        56 => array ('country' => 'Ecuador', 'alpha_2' => 'EC', 'alpha_3' => 'ECU', 'digit_code' => '218'),
        57 => array ('country' => 'Egypt', 'alpha_2' => 'EG', 'alpha_3' => 'EGY', 'digit_code' => '818'),
        58 => array ('country' => 'El Salvador', 'alpha_2' => 'SV', 'alpha_3' => 'SLV', 'digit_code' => '222'),
        59 => array ('country' => 'Equatorial Guinea', 'alpha_2' => 'GQ', 'alpha_3' => 'GNQ', 'digit_code' => '226'),
        60 => array ('country' => 'Eritrea', 'alpha_2' => 'ER', 'alpha_3' => 'ERI', 'digit_code' => '232'),
        61 => array ('country' => 'Estonia', 'alpha_2' => 'EE', 'alpha_3' => 'EST', 'digit_code' => '233'),
        62 => array ('country' => 'Ethiopia', 'alpha_2' => 'ET', 'alpha_3' => 'ETH', 'digit_code' => '231'),
        63 => array ('country' => 'Faroe Islands', 'alpha_2' => 'FO', 'alpha_3' => 'FRO', 'digit_code' => '234'),
        64 => array ('country' => 'Fiji', 'alpha_2' => 'FJ', 'alpha_3' => 'FJI', 'digit_code' => '242'),
        65 => array ('country' => 'Finland', 'alpha_2' => 'FI', 'alpha_3' => 'FIN', 'digit_code' => '246'),
        66 => array ('country' => 'France', 'alpha_2' => 'FR', 'alpha_3' => 'FRA', 'digit_code' => '250'),
        67 => array ('country' => 'French Guiana', 'alpha_2' => 'GF', 'alpha_3' => 'GUF', 'digit_code' => '254'),
        68 => array ('country' => 'French Polynesia', 'alpha_2' => 'PF', 'alpha_3' => 'PYF', 'digit_code' => '258'),
        69 => array ('country' => 'French Southern Territories', 'alpha_2' => 'TF', 'alpha_3' => 'ATF', 'digit_code' => '260'),
        70 => array ('country' => 'Gabon', 'alpha_2' => 'GA', 'alpha_3' => 'GAB', 'digit_code' => '266'),
        71 => array ('country' => 'Gambia', 'alpha_2' => 'GM', 'alpha_3' => 'GMB', 'digit_code' => '270'),
        72 => array ('country' => 'Germany', 'alpha_2' => 'DE', 'alpha_3' => 'DEU', 'digit_code' => '276'),
        73 => array ('country' => 'Ghana', 'alpha_2' => 'GH', 'alpha_3' => 'GHA', 'digit_code' => '288'),
        74 => array ('country' => 'Gibraltar', 'alpha_2' => 'GI', 'alpha_3' => 'GIB', 'digit_code' => '292'),
        75 => array ('country' => 'Greece', 'alpha_2' => 'GR', 'alpha_3' => 'GRC', 'digit_code' => '300'),
        76 => array ('country' => 'Greenland', 'alpha_2' => 'GL', 'alpha_3' => 'GRL', 'digit_code' => '304'),
        77 => array ('country' => 'Grenada', 'alpha_2' => 'GD', 'alpha_3' => 'GRD', 'digit_code' => '308'),
        78 => array ('country' => 'Guadeloupe', 'alpha_2' => 'GP', 'alpha_3' => 'GLP', 'digit_code' => '312'),
        79 => array ('country' => 'Guam', 'alpha_2' => 'GU', 'alpha_3' => 'GUM', 'digit_code' => '316'),
        80 => array ('country' => 'Guatemala', 'alpha_2' => 'GT', 'alpha_3' => 'GTM', 'digit_code' => '320'),
        81 => array ('country' => 'Guernsey', 'alpha_2' => 'GG', 'alpha_3' => 'GGY', 'digit_code' => '831'),
        82 => array ('country' => 'Guinea', 'alpha_2' => 'GN', 'alpha_3' => 'GIN', 'digit_code' => '324'),
        83 => array ('country' => 'Guyana', 'alpha_2' => 'GY', 'alpha_3' => 'GUY', 'digit_code' => '328'),
        84 => array ('country' => 'Haiti', 'alpha_2' => 'HT', 'alpha_3' => 'HTI', 'digit_code' => '332'),
        85 => array ('country' => 'Heard Island and McDonald Islands', 'alpha_2' => 'HM', 'alpha_3' => 'HMD', 'digit_code' => '334'),
        86 => array ('country' => 'Honduras', 'alpha_2' => 'HN', 'alpha_3' => 'HND', 'digit_code' => '340'),
        87 => array ('country' => 'Hong Kong', 'alpha_2' => 'HK', 'alpha_3' => 'HKG', 'digit_code' => '344'),
        88 => array ('country' => 'Hungary', 'alpha_2' => 'HU', 'alpha_3' => 'HUN', 'digit_code' => '348'),
        89 => array ('country' => 'Iceland', 'alpha_2' => 'IS', 'alpha_3' => 'ISL', 'digit_code' => '352'),
        90 => array ('country' => 'India', 'alpha_2' => 'IN', 'alpha_3' => 'IND', 'digit_code' => '356'),
        91 => array ('country' => 'Indonesia', 'alpha_2' => 'ID', 'alpha_3' => 'IDN', 'digit_code' => '360'),
        92 => array ('country' => 'Iraq', 'alpha_2' => 'IQ', 'alpha_3' => 'IRQ', 'digit_code' => '368'),
        93 => array ('country' => 'Isle of Man', 'alpha_2' => 'IM', 'alpha_3' => 'IMN', 'digit_code' => '833'),
        94 => array ('country' => 'Israel', 'alpha_2' => 'IL', 'alpha_3' => 'ISR', 'digit_code' => '376'),
        95 => array ('country' => 'Italy', 'alpha_2' => 'IT', 'alpha_3' => 'ITA', 'digit_code' => '380'),
        96 => array ('country' => 'Jamaica', 'alpha_2' => 'JM', 'alpha_3' => 'JAM', 'digit_code' => '388'),
        97 => array ('country' => 'Japan', 'alpha_2' => 'JP', 'alpha_3' => 'JPN', 'digit_code' => '392'),
        98 => array ('country' => 'Jersey', 'alpha_2' => 'JE', 'alpha_3' => 'JEY', 'digit_code' => '832'),
        99 => array ('country' => 'Jordan', 'alpha_2' => 'JO', 'alpha_3' => 'JOR', 'digit_code' => '400'),
        100 => array ('country' => 'Kazakhstan', 'alpha_2' => 'KZ', 'alpha_3' => 'KAZ', 'digit_code' => '398'),
        101 => array ('country' => 'Kenya', 'alpha_2' => 'KE', 'alpha_3' => 'KEN', 'digit_code' => '404'),
        102 => array ('country' => 'Kiribati', 'alpha_2' => 'KI', 'alpha_3' => 'KIR', 'digit_code' => '296'),
        103 => array ('country' => 'Kuwait', 'alpha_2' => 'KW', 'alpha_3' => 'KWT', 'digit_code' => '414'),
        104 => array ('country' => 'Kyrgyzstan', 'alpha_2' => 'KG', 'alpha_3' => 'KGZ', 'digit_code' => '417'),
        105 => array ('country' => 'Latvia', 'alpha_2' => 'LV', 'alpha_3' => 'LVA', 'digit_code' => '428'),
        106 => array ('country' => 'Lebanon', 'alpha_2' => 'LB', 'alpha_3' => 'LBN', 'digit_code' => '422'),
        107 => array ('country' => 'Lesotho', 'alpha_2' => 'LS', 'alpha_3' => 'LSO', 'digit_code' => '426'),
        108 => array ('country' => 'Liberia', 'alpha_2' => 'LR', 'alpha_3' => 'LBR', 'digit_code' => '430'),
        109 => array ('country' => 'Libya', 'alpha_2' => 'LY', 'alpha_3' => 'LBY', 'digit_code' => '434'),
        110 => array ('country' => 'Liechtenstein', 'alpha_2' => 'LI', 'alpha_3' => 'LIE', 'digit_code' => '438'),
        111 => array ('country' => 'Lithuania', 'alpha_2' => 'LT', 'alpha_3' => 'LTU', 'digit_code' => '440'),
        112 => array ('country' => 'Luxembourg', 'alpha_2' => 'LU', 'alpha_3' => 'LUX', 'digit_code' => '442'),
        113 => array ('country' => 'Macao', 'alpha_2' => 'MO', 'alpha_3' => 'MAC', 'digit_code' => '446'),
        114 => array ('country' => 'Madagascar', 'alpha_2' => 'MG', 'alpha_3' => 'MDG', 'digit_code' => '450'),
        115 => array ('country' => 'Malawi', 'alpha_2' => 'MW', 'alpha_3' => 'MWI', 'digit_code' => '454'),
        116 => array ('country' => 'Malaysia', 'alpha_2' => 'MY', 'alpha_3' => 'MYS', 'digit_code' => '458'),
        117 => array ('country' => 'Maldives', 'alpha_2' => 'MV', 'alpha_3' => 'MDV', 'digit_code' => '462'),
        118 => array ('country' => 'Mali', 'alpha_2' => 'ML', 'alpha_3' => 'MLI', 'digit_code' => '466'),
        119 => array ('country' => 'Malta', 'alpha_2' => 'MT', 'alpha_3' => 'MLT', 'digit_code' => '470'),
        120 => array ('country' => 'Marshall Islands', 'alpha_2' => 'MH', 'alpha_3' => 'MHL', 'digit_code' => '584'),
        121 => array ('country' => 'Martinique', 'alpha_2' => 'MQ', 'alpha_3' => 'MTQ', 'digit_code' => '474'),
        122 => array ('country' => 'Mauritania', 'alpha_2' => 'MR', 'alpha_3' => 'MRT', 'digit_code' => '478'),
        123 => array ('country' => 'Mauritius', 'alpha_2' => 'MU', 'alpha_3' => 'MUS', 'digit_code' => '480'),
        124 => array ('country' => 'Mayotte', 'alpha_2' => 'YT', 'alpha_3' => 'MYT', 'digit_code' => '175'),
        125 => array ('country' => 'Mexico', 'alpha_2' => 'MX', 'alpha_3' => 'MEX', 'digit_code' => '484'),
        126 => array ('country' => 'Monaco', 'alpha_2' => 'MC', 'alpha_3' => 'MCO', 'digit_code' => '492'),
        127 => array ('country' => 'Mongolia', 'alpha_2' => 'MN', 'alpha_3' => 'MNG', 'digit_code' => '496'),
        128 => array ('country' => 'Montenegro', 'alpha_2' => 'ME', 'alpha_3' => 'MNE', 'digit_code' => '499'),
        129 => array ('country' => 'Montserrat', 'alpha_2' => 'MS', 'alpha_3' => 'MSR', 'digit_code' => '500'),
        130 => array ('country' => 'Morocco', 'alpha_2' => 'MA', 'alpha_3' => 'MAR', 'digit_code' => '504'),
        131 => array ('country' => 'Mozambique', 'alpha_2' => 'MZ', 'alpha_3' => 'MOZ', 'digit_code' => '508'),
        132 => array ('country' => 'Myanmar', 'alpha_2' => 'MM', 'alpha_3' => 'MMR', 'digit_code' => '104'),
        133 => array ('country' => 'Namibia', 'alpha_2' => 'NA', 'alpha_3' => 'NAM', 'digit_code' => '516'),
        134 => array ('country' => 'Nauru', 'alpha_2' => 'NR', 'alpha_3' => 'NRU', 'digit_code' => '520'),
        135 => array ('country' => 'Nepal', 'alpha_2' => 'NP', 'alpha_3' => 'NPL', 'digit_code' => '524'),
        136 => array ('country' => 'Netherlands', 'alpha_2' => 'NL', 'alpha_3' => 'NLD', 'digit_code' => '528'),
        137 => array ('country' => 'New Caledonia', 'alpha_2' => 'NC', 'alpha_3' => 'NCL', 'digit_code' => '540'),
        138 => array ('country' => 'New Zealand', 'alpha_2' => 'NZ', 'alpha_3' => 'NZL', 'digit_code' => '554'),
        139 => array ('country' => 'Nicaragua', 'alpha_2' => 'NI', 'alpha_3' => 'NIC', 'digit_code' => '558'),
        140 => array ('country' => 'Niger', 'alpha_2' => 'NE', 'alpha_3' => 'NER', 'digit_code' => '562'),
        141 => array ('country' => 'Nigeria', 'alpha_2' => 'NG', 'alpha_3' => 'NGA', 'digit_code' => '566'),
        142 => array ('country' => 'Niue', 'alpha_2' => 'NU', 'alpha_3' => 'NIU', 'digit_code' => '570'),
        143 => array ('country' => 'Norfolk Island', 'alpha_2' => 'NF', 'alpha_3' => 'NFK', 'digit_code' => '574'),
        144 => array ('country' => 'Northern Mariana Islands', 'alpha_2' => 'MP', 'alpha_3' => 'MNP', 'digit_code' => '580'),
        145 => array ('country' => 'Norway', 'alpha_2' => 'NO', 'alpha_3' => 'NOR', 'digit_code' => '578'),
        146 => array ('country' => 'Oman', 'alpha_2' => 'OM', 'alpha_3' => 'OMN', 'digit_code' => '512'),
        147 => array ('country' => 'Pakistan', 'alpha_2' => 'PK', 'alpha_3' => 'PAK', 'digit_code' => '586'),
        148 => array ('country' => 'Palau', 'alpha_2' => 'PW', 'alpha_3' => 'PLW', 'digit_code' => '585'),
        149 => array ('country' => 'Panama', 'alpha_2' => 'PA', 'alpha_3' => 'PAN', 'digit_code' => '591'),
        150 => array ('country' => 'Papua New Guinea', 'alpha_2' => 'PG', 'alpha_3' => 'PNG', 'digit_code' => '598'),
        151 => array ('country' => 'Paraguay', 'alpha_2' => 'PY', 'alpha_3' => 'PRY', 'digit_code' => '600'),
        152 => array ('country' => 'Peru', 'alpha_2' => 'PE', 'alpha_3' => 'PER', 'digit_code' => '604'),
        153 => array ('country' => 'Philippines', 'alpha_2' => 'PH', 'alpha_3' => 'PHL', 'digit_code' => '608'),
        154 => array ('country' => 'Pitcairn', 'alpha_2' => 'PN', 'alpha_3' => 'PCN', 'digit_code' => '612'),
        155 => array ('country' => 'Poland', 'alpha_2' => 'PL', 'alpha_3' => 'POL', 'digit_code' => '616'),
        156 => array ('country' => 'Portugal', 'alpha_2' => 'PT', 'alpha_3' => 'PRT', 'digit_code' => '620'),
        157 => array ('country' => 'Puerto Rico', 'alpha_2' => 'PR', 'alpha_3' => 'PRI', 'digit_code' => '630'),
        158 => array ('country' => 'Qatar', 'alpha_2' => 'QA', 'alpha_3' => 'QAT', 'digit_code' => '634'),
        159 => array ('country' => 'Romania', 'alpha_2' => 'RO', 'alpha_3' => 'ROU', 'digit_code' => '642'),
        160 => array ('country' => 'Russian Federation', 'alpha_2' => 'RU', 'alpha_3' => 'RUS', 'digit_code' => '643'),
        161 => array ('country' => 'Rwanda', 'alpha_2' => 'RW', 'alpha_3' => 'RWA', 'digit_code' => '646'),
        162 => array ('country' => 'Saint Kitts and Nevis', 'alpha_2' => 'KN', 'alpha_3' => 'KNA', 'digit_code' => '659'),
        163 => array ('country' => 'Saint Lucia', 'alpha_2' => 'LC', 'alpha_3' => 'LCA', 'digit_code' => '662'),
        164 => array ('country' => 'Saint Pierre and Miquelon', 'alpha_2' => 'PM', 'alpha_3' => 'SPM', 'digit_code' => '666'),
        165 => array ('country' => 'Saint Vincent and the Grenadines', 'alpha_2' => 'VC', 'alpha_3' => 'VCT', 'digit_code' => '670'),
        166 => array ('country' => 'Samoa', 'alpha_2' => 'WS', 'alpha_3' => 'WSM', 'digit_code' => '882'),
        167 => array ('country' => 'San Marino', 'alpha_2' => 'SM', 'alpha_3' => 'SMR', 'digit_code' => '674'),
        168 => array ('country' => 'Sao Tome and Principe', 'alpha_2' => 'ST', 'alpha_3' => 'STP', 'digit_code' => '678'),
        169 => array ('country' => 'Saudi Arabia', 'alpha_2' => 'SA', 'alpha_3' => 'SAU', 'digit_code' => '682'),
        170 => array ('country' => 'Senegal', 'alpha_2' => 'SN', 'alpha_3' => 'SEN', 'digit_code' => '686'),
        171 => array ('country' => 'Serbia', 'alpha_2' => 'RS', 'alpha_3' => 'SRB', 'digit_code' => '688'),
        172 => array ('country' => 'Seychelles', 'alpha_2' => 'SC', 'alpha_3' => 'SYC', 'digit_code' => '690'),
        173 => array ('country' => 'Sierra Leone', 'alpha_2' => 'SL', 'alpha_3' => 'SLE', 'digit_code' => '694'),
        174 => array ('country' => 'Singapore', 'alpha_2' => 'SG', 'alpha_3' => 'SGP', 'digit_code' => '702'),
        175 => array ('country' => 'Slovakia', 'alpha_2' => 'SK', 'alpha_3' => 'SVK', 'digit_code' => '703'),
        176 => array ('country' => 'Slovenia', 'alpha_2' => 'SI', 'alpha_3' => 'SVN', 'digit_code' => '705'),
        177 => array ('country' => 'Solomon Islands', 'alpha_2' => 'SB', 'alpha_3' => 'SLB', 'digit_code' => '090'),
        178 => array ('country' => 'Somalia', 'alpha_2' => 'SO', 'alpha_3' => 'SOM', 'digit_code' => '706'),
        179 => array ('country' => 'South Africa', 'alpha_2' => 'ZA', 'alpha_3' => 'ZAF', 'digit_code' => '710'),
        180 => array ('country' => 'South Georgia and the South Sandwich Islands', 'alpha_2' => 'GS', 'alpha_3' => 'SGS', 'digit_code' => '239'),
        181 => array ('country' => 'South Sudan', 'alpha_2' => 'SS', 'alpha_3' => 'SSD', 'digit_code' => '728'),
        182 => array ('country' => 'Spain', 'alpha_2' => 'ES', 'alpha_3' => 'ESP', 'digit_code' => '724'),
        183 => array ('country' => 'Sri Lanka', 'alpha_2' => 'LK', 'alpha_3' => 'LKA', 'digit_code' => '144'),
        184 => array ('country' => 'Sudan', 'alpha_2' => 'SD', 'alpha_3' => 'SDN', 'digit_code' => '729'),
        185 => array ('country' => 'Suriname', 'alpha_2' => 'SR', 'alpha_3' => 'SUR', 'digit_code' => '740'),
        186 => array ('country' => 'Svalbard and Jan Mayen', 'alpha_2' => 'SJ', 'alpha_3' => 'SJM', 'digit_code' => '744'),
        187 => array ('country' => 'Swaziland', 'alpha_2' => 'SZ', 'alpha_3' => 'SWZ', 'digit_code' => '748'),
        188 => array ('country' => 'Sweden', 'alpha_2' => 'SE', 'alpha_3' => 'SWE', 'digit_code' => '752'),
        189 => array ('country' => 'Switzerland', 'alpha_2' => 'CH', 'alpha_3' => 'CHE', 'digit_code' => '756'),
        190 => array ('country' => 'Syrian Arab Republic', 'alpha_2' => 'SY', 'alpha_3' => 'SYR', 'digit_code' => '760'),
        191 => array ('country' => 'Tajikistan', 'alpha_2' => 'TJ', 'alpha_3' => 'TJK', 'digit_code' => '762'),
        192 => array ('country' => 'Thailand', 'alpha_2' => 'TH', 'alpha_3' => 'THA', 'digit_code' => '764'),
        193 => array ('country' => 'Togo', 'alpha_2' => 'TG', 'alpha_3' => 'TGO', 'digit_code' => '768'),
        194 => array ('country' => 'Tokelau', 'alpha_2' => 'TK', 'alpha_3' => 'TKL', 'digit_code' => '772'),
        195 => array ('country' => 'Tonga', 'alpha_2' => 'TO', 'alpha_3' => 'TON', 'digit_code' => '776'),
        196 => array ('country' => 'Trinidad and Tobago', 'alpha_2' => 'TT', 'alpha_3' => 'TTO', 'digit_code' => '780'),
        197 => array ('country' => 'Tunisia', 'alpha_2' => 'TN', 'alpha_3' => 'TUN', 'digit_code' => '788'),
        198 => array ('country' => 'Turkey', 'alpha_2' => 'TR', 'alpha_3' => 'TUR', 'digit_code' => '792'),
        199 => array ('country' => 'Turkmenistan', 'alpha_2' => 'TM', 'alpha_3' => 'TKM', 'digit_code' => '795'),
        200 => array ('country' => 'Turks and Caicos Islands', 'alpha_2' => 'TC', 'alpha_3' => 'TCA', 'digit_code' => '796'),
        201 => array ('country' => 'Tuvalu', 'alpha_2' => 'TV', 'alpha_3' => 'TUV', 'digit_code' => '798'),
        202 => array ('country' => 'Uganda', 'alpha_2' => 'UG', 'alpha_3' => 'UGA', 'digit_code' => '800'),
        203 => array ('country' => 'Ukraine', 'alpha_2' => 'UA', 'alpha_3' => 'UKR', 'digit_code' => '804'),
        204 => array ('country' => 'United Arab Emirates', 'alpha_2' => 'AE', 'alpha_3' => 'ARE', 'digit_code' => '784'),
        205 => array ('country' => 'United Kingdom of Great Britain and Northern Ireland', 'alpha_2' => 'GB', 'alpha_3' => 'GBR', 'digit_code' => '826'),
        206 => array ('country' => 'United States of America', 'alpha_2' => 'US', 'alpha_3' => 'USA', 'digit_code' => '840'),
        207 => array ('country' => 'United States Minor Outlying Islands', 'alpha_2' => 'UM', 'alpha_3' => 'UMI', 'digit_code' => '581'),
        208 => array ('country' => 'Uruguay', 'alpha_2' => 'UY', 'alpha_3' => 'URY', 'digit_code' => '858'),
        209 => array ('country' => 'Uzbekistan', 'alpha_2' => 'UZ', 'alpha_3' => 'UZB', 'digit_code' => '860'),
        210 => array ('country' => 'Vanuatu', 'alpha_2' => 'VU', 'alpha_3' => 'VUT', 'digit_code' => '548'),
        211 => array ('country' => 'Viet Nam', 'alpha_2' => 'VN', 'alpha_3' => 'VNM', 'digit_code' => '704'),
        212 => array ('country' => 'Wallis and Futuna', 'alpha_2' => 'WF', 'alpha_3' => 'WLF', 'digit_code' => '876'),
        213 => array ('country' => 'Yemen', 'alpha_2' => 'YE', 'alpha_3' => 'YEM', 'digit_code' => '887'),
        214 => array ('country' => 'Zambia', 'alpha_2' => 'ZM', 'alpha_3' => 'ZMB', 'digit_code' => '894'),
        215 => array ('country' => 'Zimbabwe', 'alpha_2' => 'ZW', 'alpha_3' => 'ZWE', 'digit_code' => '716'),
    );

    /**
     * Get all countries
     *
     * @return array
     */
    public static function getCountries()
    {
        return self::$countries;
    }

    /**
     * Get country by ISO 3166-1 english name
     * @param $name
     * @return array|null
     */
    public static function getCountryByName($name)
    {
        foreach(self::$countries as $key => $val)
        {
            if(strtolower($val['country']) === strtolower($name))
                return self::$countries[$key];
        }
        return null;
    }

    /**
     * Get country by ISO 3166-1 alpha-2
     *
     * @param string $alpha_2
     * @return array|null
     */
    public static function getCountryByAlpha2($alpha_2)
    {
        foreach(self::$countries as $key => $val)
        {
            if($val['alpha_2'] === strtoupper($alpha_2))
                return self::$countries[$key];
        }
        return null;
    }

    /**
     * Get country by ISO 3166-1 alpha-3
     *
     * @param string $alpha_3
     * @return array|null
     */
    public static function getCountryByAlpha3($alpha_3)
    {
        foreach(self::$countries as $key => $val)
        {
            if($val['alpha_3'] === strtoupper($alpha_3))
                return self::$countries[$key];
        }
        return null;
    }

    /**
     * Get country by ISO 3166-1 numeric
     *
     * @param string $digit_code
     * @return array|null
     */
    public static function getCountryByDigitCode($digit_code)
    {
        foreach(self::$countries as $key => $val)
        {
            if($val['digit_code'] === $digit_code)
                return self::$countries[$key];
        }
        return null;
    }
}
