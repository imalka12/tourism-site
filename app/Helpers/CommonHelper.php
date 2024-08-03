<?php

if (!function_exists('image_url')) {
    /**
     * Returns a image processor URL of a storage image file from a path
     *
     * @param string $image_path
     * Path of the image in the storage directory
     *
     * @return string $url
     * the url to the image via the image processor
     *
     * */
    function imageUrl($imagePath, $filters = [])
    {
        $defaults = ['q' => config('images.quality'), 'fm' => config('images.format')];
        // image/webp -> 37422 | HwrdIMERhlx4AYnZvqRj.jpg
        // image/jpeg -> 60289 | HwrdIMERhlx4AYnZvqRj.jpg

        $_merged = array_merge($filters, $defaults);

        $__parts = [];

        foreach ($_merged as $key => $value) {
            $__parts[] = sprintf('%s=%s', $key, $value);
        }

        $__qrystr = implode('&', $__parts);

        $__img_url = sprintf("img/%s?%s", $imagePath, $__qrystr);

        return url($__img_url);
    }
}

if (!function_exists('destinations_list')) {
    function destinations_list()
    {
        $repository = resolve('App\Repositories\HolidayDestinationRepository');
        return $repository->getHolidayDestinationsList();
    }
}

if (!function_exists('activity_list')) {
    function activity_list()
    {
        $repository = resolve('App\Repositories\ActivityRepository');
        return $repository->getActivitiesList();
    }
}

if (!function_exists('itinerary_list')) {
    function itinerary_list()
    {
        $repository = resolve('App\Repositories\ItineraryRepository');
        return $repository->getItinerariesList();
    }
}

if (!function_exists('tour_types_list')) {
    function tour_types_list()
    {
        $repository = resolve('App\Repositories\ItineraryRepository');
        return $repository->getTourTypesList();
    }
}

if (!function_exists('breadcrumbs')) {
    function breadcrumbs($items)
    {
        $__crumb_count = count($items);
        $__index = 1;

        $__crumbs = '<ol class="breadcrumb">';
        foreach ($items as $item) {
            $__crumbs .= '<li class="breadcrumb-item">';
            if (!empty($item['link'])) {
                $__crumbs .= sprintf('<a href="%s">', $item['link']);
            }

            $__crumbs .= sprintf('<span class="breadcrumb-text">%s%s%s</span>',
                ($__index === $__crumb_count ? '<strong>' : ''),
                $item['title'],
                ($__index === $__crumb_count ? '</strong>' : ''));

            if (!empty($item['link'])) {
                $__crumbs .= '</a>';
            }
            $__crumbs .= '</li>';
            $__index++;
        }
        $__crumbs .= '</ol>';
        return $__crumbs;
    }
}

if (!function_exists('country_list')) {
    function country_list()
    {
        return array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
    }
}

if (!function_exists('user_ip_address')) {
    function user_ip_address()
    {
        $address = $_SERVER['REMOTE_ADDR'];

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $address = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        return $address;
    }
}

if (!function_exists('get_user_ip')) {
    // Function to get the user IP address
    function get_user_ip()
    {
        $userIP = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $userIP = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $userIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $userIP = $_SERVER['HTTP_X_FORWARDED'];
        } elseif (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
            $userIP = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $userIP = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
            $userIP = $_SERVER['HTTP_FORWARDED'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $userIP = $_SERVER['REMOTE_ADDR'];
        } else {
            $userIP = 'UNKNOWN';
        }
        return $userIP;
    }

    if (!function_exists('rating_stars')) {
        function rating_stars($count = 1, $classNames = [], $element = 'span') {
            $starTemplate = sprintf('<%s class="fa fa-star %s"></%s>', $element, implode(' ', $classNames), $element);
            $stars = [];
            for ($i = 0; $i < $count; $i++) {
                $stars[] = $starTemplate;
            }
            return implode('', $stars);
        }
    }

    function itinerary_list_by_tour_types() {
        $itineraryList = itinerary_list();
        $tourTypesList = tour_types_list();

        $itineraryListByTourTypes = [];

        foreach ($tourTypesList as $tourType) {
            $itineraryListByTourTypes[$tourType->id] = [
                'type' => $tourType,
                'itineraries' => []
            ];
        }

        foreach ($itineraryList as $itinerary) {
            $itineraryListByTourTypes[$itinerary->tour_type_id]['itineraries'][] = $itinerary;
        }

        return $itineraryListByTourTypes;
    }

}
