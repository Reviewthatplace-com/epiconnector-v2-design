<?php

return json_encode(
    $data = array(
        [
            'id' => 1,
            'latitude' => 40.72807182,
            'longitude' => -73.85735035,
            'featured' => 1,
            'title' => "Marky's Restaurant",
            'location' => "63 Birch Street",
            'city' => 1,
            'phone' => "361-492-2356",
            'email' => "hello@markys.com",
            'website' => "http://www.markys.com",
            'category' => "Restaurant",
            'rating' => "4",
            'reviews_number' => "6",
            'marker_image' => "assets/img/items/1.jpg",
            'gallery' => array(
                "assets/img/items/1.jpg",
                "assets/img/items/2.jpg",
                "assets/img/items/12.jpg"
            ),
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'additional_info' => "Average price $30",
            'url' => "detail.html",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis, arcu non hendrerit imperdiet, metus odio scelerisque elit, sed lacinia odio est ac felis. Nam ullamcorper hendrerit ullamcorper. Praesent quis arcu quis leo posuere ornare eu in purus. Nulla ornare rutrum condimentum. Praesent eu pulvinar velit. Quisque non finibus purus, eu auctor ipsum.",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'opening_hours' => array(
                "08:00am - 11:00pm",
                "08:00am - 11:00pm",
                "12:00am - 11:00pm",
                "08:00am - 11:00pm",
                "03:00pm - 02:00am",
                "03:00pm - 02:00am",
                "Closed"
            ),
            'marker_color' => "#000000"
        ],

        [
            'id' => 2,
            'latitude' => 40.73925841,
            'longitude' => -73.85348797,
            'featured' => 0,
            'title' => "Ironapple",
            'location' => "4209 Glenview Drive",
            'city' => 1,
            'contact' => "989-410-0777",
            'category' => "Restaurant",
            'rating' => "3",
            'reviews_number' => "12",
            'marker_image' => "assets/img/items/2.jpg",
            'gallery' => array(
                "assets/img/items/2.jpg",
                "assets/img/items/4.jpg",
                "assets/img/items/12.jpg"
            ),
            'additional_info' => "",
            'url' => "detail.html",
            'description' => "Aliquam vel turpis sagittis, semper tellus eget, aliquam turpis. Cras aliquam, arcu",
            'today_menu' => array(
                [
                    'meal_type' => "Starter",
                    'meal' => "Smoked Salmon, Classic Condiments, Brioche"
                ],
                [
                    'meal_type' => "Soup",
                    'meal' => "Roasted Golden Beets, Goat Cheese, Hazelnut Granola"
                ],
                [
                    'meal_type' => "Main course",
                    'meal' => "Napoleon of Rabbit Loin, Braised Leek, Fava Bean Puree"
                ]
            ),
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'marker_color' => "#c92e2e"
        ],

        [
            'id' => 3,
            'address' => "Forest Hills, Queens, NY 11375, USA",
            'featured' => 0,
            'title' => "Food Festival",
            'location' => "23 Hillhaven Drive",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>323-843-4729",
            'category' => "Event",
            'rating' => "5",
            'reviews_number' => "15",
            'marker_image' => "assets/img/items/4.jpg",
            'gallery' => array(
                "assets/img/items/4.jpg",
                "assets/img/items/2.jpg",
                "assets/img/items/12.jpg"
            ),
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'ribbon' => "Last Tickets!",
            'additional_info' => "Starts at 19:00",
            'url' => "detail.html",
            'description' => "Sed ac dolor auctor, elementum lacus vitae, efficitur magna. Quisque sed semper tellus",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
            'marker_color' => "#f1a400"
        ],

        [
            'id' => 4,
            'latitude' => 40.709016,
            'longitude' => -73.844969,
            'featured' => 0,
            'title' => "Cosmopolit",
            'location' => "4209 Glenview Drive",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>323-843-4729",
            'category' => "Wellness",
            'rating' => "5",
            'reviews_number' => "28",
            'marker_image' => "assets/img/items/5.jpg",
            'gallery' => array(
                "assets/img/items/5.jpg",
                "assets/img/items/2.jpg",
                "assets/img/items/12.jpg"
            ),
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'additional_info' => "",
            'url' => "detail.html",
            'description' => "Sed ac dolor auctor, elementum lacus vitae, efficitur magna. Quisque sed semper tellus",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'opening_hours' => array(
                "08:00am - 11:00pm",
                "08:00am - 11:00pm",
                "12:00am - 11:00pm",
                "08:00am - 11:00pm",
                "03:00pm - 02:00am",
                "03:00pm - 02:00am",
                "Closed"
            ),
            'marker_color' => "#c92e2e"
        ],

        [
            'id' => 5,
            'latitude' => 47.8043117,
            'longitude' => 13.0356014,
            'featured' => 0,
            'title' => "Enjoy a small meal",
            'location' => "Monchstein",
            'city' => 2,
            'contact' => "<i class='fa fa-phone'></i>",
            'category' => "Restaurant",
            'rating' => "",
            'reviews_number' => "",
            'marker_image' => "assets/img/items/6.jpg",
            'gallery' => array(
                "https://experio.at/monchstein.jpg",
                "https://experio.at/monchstein.jpg",
                "https://experio.at/monchstein.jpg"
            ),
            'tags' => array(
                "Romantic",
                "Scenic",
                "Culinary",
                "Partners"
            ),
            'ribbon' => "Sale",
            'additional_info' => "",
            'url' => "detail.html",
            'description' => "The smallest restaurant in the world.  Enjoz a romatic gourmet pakage for 2.  This package includes a panoram view over Salzburg with a welcome Prosecco drink, followed by a 5 course menu-of-the-day accompanied by wine, and coffee and pralines to conclude.",
            'description_list' => array(
                [
                    'title' => "Bathrooms",
                    'value' => 3,
                ],
                [
                    'title' => "Bedrooms",
                    'value' => 4,
                ],
                [
                    'title' => "Area",
                    'value' => "458m<sup>2</sup>",
                ],
                [
                    'title' => "Garages",
                    'value' => 2,
                ],
                [
                    'title' => "Status",
                    'value' => "Sale",
                ],
            ),
            'marker_color' => "#1d7e5f"
        ],

        [
            'id' => 6,
            'address' => "1721 Corcoran St NW Washington, DC",
            'featured' => 1,
            'title' => "Stand Up Show",
            'location' => "534 Sycamore Road",
            'city' => 2,
            'contact' => "<i class='fa fa-phone'></i>352-383-7435",
            'category' => "Sport",
            'rating' => "4",
            'reviews_number' => "8",
            'marker_image' => "assets/img/items/6.jpg",
            'gallery' => array(
                "assets/img/items/6.jpg",
                "assets/img/items/12.jpg",
                "assets/img/items/5.jpg"
            ),
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'additional_info' => "Free entry",
            'url' => "detail.html",
            'description' => "Phasellus at facilisis est. Sed dignissim porttitor aliquam. Quisque fermentum mollis diam id porttitor. Maecenas pulvinar, lacus non egestas finibus, nibh lectus ornare massa, id lacinia est nunc quis ante. Cras non nisl enim. Sed sodales volutpat nisl. Phasellus dictum lacus eu volutpat venenatis. Ut commodo massa ac sagittis finibus. ",
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
        ],

        [
            'id' => 7,
            'latitude' => 40.75408424,
            'longitude' => -73.87666225,
            'featured' => 0,
            'title' => "University Day",
            'location' => "Central Town University",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>925-585-2459",
            'category' => "Relax",
            'rating' => "5",
            'reviews_number' => "10",
            'marker_image' => "assets/img/items/12.jpg",
            'gallery' => array(
                "assets/img/items/12.jpg",
                "assets/img/items/9.jpg",
                "assets/img/items/11.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Duis nec lobortis massa. Mauris tempus vitae augue eu tempus",
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'video' => "<iframe src='https://player.vimeo.com/video/184360631' width='640' height='360' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>"

        ],

        [
            'id' => 8,
            'latitude' => 40.75479944,
            'longitude' => -73.89786243,
            'featured' => 0,
            'title' => "City Tour",
            'location' => "Downtown center",
            'city' => 1,
            'contact' => "<i class='fa fa-envelope'></i>reservation@citytours.com",
            'category' => "Sport",
            'rating' => "5",
            'reviews_number' => "17",
            'marker_image' => "assets/img/items/10.jpg",
            'gallery' => array(
                "assets/img/items/10.jpg",
                "assets/img/items/4.jpg",
                "assets/img/items/8.jpg"
            ),
            'additional_info' => "Get to know your city!",
            'url' => "",
            'description' => "Integer mattis nibh ante, vel vulputate tortor iaculis a. Aenean iaculis aliquam magna eget fermentum. Nulla euismod, arcu in aliquet vestibulum, justo quam ultricies mauris, eget elementum ex odio ut nulla. Suspendisse neque tellus, varius nec tortor consectetur, gravida ullamcorper magna. Sed ut enim dui.",
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "12:00",
                    'location_title' => "Town Square",
                    'location_address' => ""
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => ""
                ]
            ),
        ],

        [
            'id' => 9,
            'latitude' => 40.74654168,
            'longitude' => -73.90515804,
            'featured' => 1,
            'title' => "High Mountain Trip",
            'location' => "East Alps",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>hello@mountaintrip.com",
            'category' => "Sport",
            'rating' => "4",
            'reviews_number' => "9",
            'marker_image' => "assets/img/items/13.jpg",
            'gallery' => array(
                "assets/img/items/13.jpg",
                "assets/img/items/2.jpg",
                "assets/img/items/12.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Duis sed consectetur sem. Nam vitae laoreet mi. Praesent vel quam massa. Nulla vitae nisi leo.",
            'tags' => array(
                "Adrenaline",
                "Skialp",
                "Climbing",
                "Tourism"
            ),
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
            'marker_color' => "#1d7e5f"
        ],

        [
            'id' => 10,
            'latitude' => 40.73203937,
            'longitude' => -73.8216877,
            'featured' => 1,
            'title' => "Hyundai i30",
            'location' => "580 Briarhill Lane",
            'city' => 1,
            'phone' => "325-990-8452",
            'category' => "Car Rental",
            'rating' => "",
            'reviews_number' => "",
            'marker_image' => "assets/img/items/29.jpg",
            'gallery' => array(
                "assets/img/items/29.jpg",
                "assets/img/items/11.jpg",
                "assets/img/items/12.jpg"
            ),
            'price' => "$28.000",
            'tags' => array(
                "Diesel",
                "First Owner",
                "4x4",
                "Air Conditioning"
            ),
            'additional_info' => "",
            'url' => "detail.html",
            'description' => "Vivamus vitae lacus accumsan, gravida orci sit amet, convallis erat. Sed at porttitor quam. Proin faucibus lacus et massa tempus, sed mattis justo elementum. Proin mauris felis, laoreet quis lacus non, mattis venenatis massa. ",
            'description_list' => array(
                [
                    'title' => "Engine",
                    'value' => "Diesel",
                ],
                [
                    'title' => "Mileage",
                    'value' => 14500,
                ],
                [
                    'title' => "Max Speed",
                    'value' => "220 Mph",
                ],
                [
                    'title' => "marker_color",
                    'value' => "Dark Brown",
                ],
                [
                    'title' => "Status",
                    'value' => "Sale",
                ],
            ),
            'marker_color' => "#45ad00"
        ],

        [
            'id' => 11,
            'latitude' => 40.72787669,
            'longitude' => -73.90992165,
            'featured' => 1,
            'title' => "Thai Massage",
            'location' => "1360 Meadowbrook Mall Road",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>+21 310-877-5920",
            'category' => "Wellness",
            'rating' => "5",
            'reviews_number' => "23",
            'marker_image' => "assets/img/items/15.jpg",
            'gallery' => array(
                "assets/img/items/15.jpg",
                "assets/img/items/6.jpg",
                "assets/img/items/11.jpg"
            ),
            'ribbon' => "Hot",
            'additional_info' => "Relax your body",
            'url' => "",
            'description' => "Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam et elit faucibus, fringilla sapien"
        ],

        [
            'id' => 12,
            'address' => "63-0-63-98 Woodbine Street, Ridgewood, NY 11385, USA",
            'featured' => 0,
            'title' => "Senior C# Developer",
            'location' => "ERF Solutions",
            'city' => 1,
            'contact' => "<i class='fa fa-envelope'></i>developers@erf.com",
            'tags' => array(
                "Java",
                "C#",
                "Developer",
                "Big Company",
                "Benefits"
            ),
            'category' => "Job",
            'rating' => "",
            'reviews_number' => "",
            'marker_image' => "assets/img/items/16.jpg",
            'gallery' => array(
                "assets/img/items/16.jpg",
            ),
            'additional_info' => "Payment from $1.200",
            'url' => "",
            'description' => "Proin feugiat eget erat ut euismod. Nulla vitae fringilla ligula. Ut laoreet malesuada elit, imperdiet gravida ante dignissim sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et orci quis mi luctus gravida id eu nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. "
        ],

        [
            'id' => 13,
            'latitude' => 40.76191849,
            'longitude' => -73.83419752,
            'featured' => 0,
            'title' => "The Brooklyns & Hosts",
            'location' => "Town Hall",
            'city' => 1,
            'contact' => "<i class='fa fa-envelope'></i>reservations@tickets.com",
            'category' => "Concert",
            'rating' => "5",
            'reviews_number' => "17",
            'marker_image' => "assets/img/items/17.jpg",
            'gallery' => array(
                "assets/img/items/17.jpg",
                "assets/img/items/2.jpg",
                "assets/img/items/12.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Vivamus nec commodo lorem. Morbi mattis et quam eu elementum.",
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
        ],

        [
            'id' => 14,
            'latitude' => 40.76299115,
            'longitude' => -73.82361889,
            'featured' => 1,
            'title' => "How to Draw Better",
            'location' => "Central Gallery",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>402-565-1871",
            'category' => "Course",
            'rating' => "3",
            'reviews_number' => "12",
            'marker_image' => "assets/img/items/18.jpg",
            'gallery' => array(
                "assets/img/items/18.jpg",
                "assets/img/items/6.jpg",
                "assets/img/items/8.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Ut blandit tortor vitae laoreet convallis. Nulla facilisi. Phasellus nec scelerisque sem",
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
        ],

        [
            'id' => 15,
            'latitude' => 40.73659201,
            'longitude' => -73.80778313,
            'featured' => 0,
            'title' => "Bambi Planet Houseboat Bar & Grill",
            'location' => "White River Dock",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>",
            'category' => "Wellness",
            'rating' => "4",
            'reviews_number' => "6",
            'marker_image' => "assets/img/items/3.jpg",
            'gallery' => array(
                "assets/img/items/3.jpg",
                "assets/img/items/2.jpg",
                "assets/img/items/12.jpg"
            ),
            'additional_info' => "Special menu this week!",
            'url' => "detail.html",
            'description' => "Nulla elit libero, dapibus quis ultrices a, luctus ut arcu. Pellentesque iaculis nec ipsum vel malesuada. Curabitur blandit erat non eros tincidunt malesuada. Etiam vulputate viverra hendrerit. Sed tempus lacinia lacinia",
            'today_menu' => array(
                [
                    'meal_type' => "Starter",
                    'meal' => "Smoked Salmon, Classic Condiments, Brioche"
                ],
                [
                    'meal_type' => "Soup",
                    'meal' => "Roasted Golden Beets, Goat Cheese, Hazelnut Granola"
                ],
                [
                    'meal_type' => "Main course",
                    'meal' => "Napoleon of Rabbit Loin, Braised Leek, Fava Bean Puree"
                ]
            ),
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'opening_hours' => array(
                "08:00am - 11:00pm",
                "08:00am - 11:00pm",
                "12:00am - 11:00pm",
                "08:00am - 11:00pm",
                "03:00pm - 02:00am",
                "03:00pm - 02:00am",
                "Closed"
            )
        ],

        [
            'id' => 16,
            'latitude' => 40.72891738,
            'longitude' => -73.78855705,
            'featured' => 0,
            'title' => "Paris Trip",
            'location' => "Saturn Hotel Eiffel Square",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>",
            'category' => "Trip",
            'rating' => "5",
            'reviews_number' => "9",
            'marker_image' => "assets/img/items/19.jpg",
            'gallery' => array(
                "assets/img/items/19.jpg",
                "assets/img/items/1.jpg",
                "assets/img/items/11.jpg"
            ),
            'additional_info' => "$59/night",
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'url' => "",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non purus mattis, lobortis tellus blandit, fringilla erat. Phasellus finibus suscipit felis a pellentesque. Proin nec viverra magna. Integer euismod nisl eget ipsum imperdiet, tincidunt imperdiet lacus dignissim. Sed sodales id tortor id porta",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
        ],

        [
            'id' => 17,
            'latitude' => 40.72592534,
            'longitude' => -73.93910408,
            'featured' => 1,
            'title' => "Big Pizza for Couples",
            'location' => "Riccardo Pizza House",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>",
            'category' => "Restaurant",
            'rating' => "4",
            'reviews_number' => "7",
            'marker_image' => "assets/img/items/22.jpg",
            'gallery' => array(
                "assets/img/items/22.jpg",
                "assets/img/items/8.jpg",
                "assets/img/items/10.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Etiam ac hendrerit mi, vitae hendrerit diam. Mauris porttitor justo ac pulvinar bibendum. Ut ex orci, hendrerit ut lectus ac, dapibus cursus neque. Pellentesque eleifend quam nulla, ut blandit purus rutrum eget. ",
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'opening_hours' => array(
                "08:00am - 11:00pm",
                "08:00am - 11:00pm",
                "12:00am - 11:00pm",
                "08:00am - 11:00pm",
                "03:00pm - 02:00am",
                "03:00pm - 02:00am",
                "Closed"
            ),
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
        ],

        [
            'id' => 18,
            'latitude' => 40.76000064,
            'longitude' => -73.93069267,
            'featured' => 0,
            'title' => "Healthy Breakfast",
            'location' => "Mom's Kitchen",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>",
            'category' => "Relax",
            'rating' => "5",
            'reviews_number' => "12",
            'marker_image' => "assets/img/items/20.jpg",
            'gallery' => array(
                "assets/img/items/20.jpg",
                "assets/img/items/21.jpg",
                "assets/img/items/10.jpg"
            ),
            'additional_info' => "Start your delicious day",
            'url' => "",
            'description' => "Donec eget nunc sed velit vehicula vehicula et ut turpis. Curabitur sem ipsum, fermentum eu mattis quis, condimentum ut enim. Curabitur consequat, diam ac faucibus pulvinar, eros sem dapibus dolor, ac malesuada justo ex non nunc.",
            'opening_hours' => array(
                "08:00am - 11:00pm",
                "08:00am - 11:00pm",
                "12:00am - 11:00pm",
                "08:00am - 11:00pm",
                "03:00pm - 02:00am",
                "03:00pm - 02:00am",
                "Closed"
            ),
            'today_menu' => array(
                [
                    'meal_type' => "Starter",
                    'meal' => "Smoked Salmon, Classic Condiments, Brioche"
                ],
                [
                    'meal_type' => "Soup",
                    'meal' => "Roasted Golden Beets, Goat Cheese, Hazelnut Granola"
                ],
                [
                    'meal_type' => "Main course",
                    'meal' => "Napoleon of Rabbit Loin, Braised Leek, Fava Bean Puree"
                ]
            ),
        ],

        [
            'id' => 19,
            'latitude' => 40.76546147,
            'longitude' => -73.88348579,
            'featured' => 0,
            'title' => "Coffee Break",
            'location' => "35 High Street",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>",
            'category' => "Coffee",
            'rating' => "3",
            'reviews_number' => "6",
            'marker_image' => "assets/img/items/23.jpg",
            'gallery' => array(
                "assets/img/items/23.jpg",
                "assets/img/items/9.jpg",
                "assets/img/items/12.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Nulla auctor, metus vel congue facilisis, ante orci tempus nibh, a dictum libero purus nec enim. Nullam at eleifend lorem, consectetur posuere sem. Nam molestie tincidunt ligula vel vehicula. Vivamus eleifend quam non volutpat aliquam.",
            'opening_hours' => array(
                "08:00am - 11:00pm",
                "08:00am - 11:00pm",
                "12:00am - 11:00pm",
                "08:00am - 11:00pm",
                "03:00pm - 02:00am",
                "03:00pm - 02:00am",
                "Closed"
            ),
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
        ],

        [
            'id' => 20,
            'latitude' => 40.75857035,
            'longitude' => -73.86185646,
            'featured' => 1,
            'title' => "Weekend in Venice",
            'location' => "Venice Hotel****",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>",
            'category' => "Trip",
            'rating' => "5",
            'reviews_number' => "23",
            'marker_image' => "assets/img/items/27.jpg",
            'gallery' => array(
                "assets/img/items/27.jpg",
                "assets/img/items/25.jpg",
                "assets/img/items/10.jpg"
            ),
            'additional_info' => "$99/Weekend",
            'url' => "",
            'description' => "Nulla et diam magna. Pellentesque accumsan turpis a mi pulvinar aliquam. Pellentesque tempor blandit sapien, efficitur hendrerit nisi tristique a. Vivamus vitae convallis eros. Sed a mi faucibus, cursus erat vel, molestie sapien",
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
        ],

        [
            'id' => 21,
            'latitude' => 40.75408424,
            'longitude' => -73.87666225,
            'featured' => 0,
            'title' => "Tree Therapy",
            'location' => "Eastpark Forest",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>",
            'category' => "Therapy",
            'rating' => "5",
            'reviews_number' => "6",
            'marker_image' => "assets/img/items/26.jpg",
            'gallery' => array(
                "assets/img/items/26.jpg",
                "assets/img/items/4.jpg",
                "assets/img/items/12.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Mauris porttitor justo ac pulvinar bibendum. Ut ex orci, hendrerit ut lectus ac, dapibus cursus neque. Pellentesque eleifend quam nulla, ut blandit purus rutrum eget. Maecenas orci dolor, efficitur porta pharetra eu, cursus at ex. Donec mattis ipsum id dui rutrum malesuada",
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
        ],

        [
            'id' => 22,
            'latitude' => 40.71929033,
            'longitude' => -73.8737011,
            'featured' => 0,
            'title' => "Gourman Festival",
            'location' => "Station Square",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>",
            'category' => "Relax",
            'rating' => "",
            'reviews_number' => "0",
            'marker_image' => "assets/img/items/21.jpg",
            'gallery' => array(
                "assets/img/items/21.jpg",
                "assets/img/items/2.jpg",
                "assets/img/items/12.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Nulla auctor, metus vel congue facilisis, ante orci tempus nibh, a dictum libero purus nec enim. Nullam at eleifend lorem, consectetur posuere sem. Nam molestie tincidunt ligula vel vehicula. Vivamus eleifend quam non volutpat aliquam",
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
            'tags' => array(
                "Wi-Fi",
                "Parking",
                "TV",
                "Vegetarian"
            ),
            'marker_color' => "#1d7e5f"
        ],

        [
            'id' => 23,
            'address' => "12055 Queens Boulevard, Kew Gardens, NY 11415, USA",
            'featured' => 1,
            'title' => "Nascar Racing",
            'location' => "London Airport",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>541-435-6211",
            'category' => "Relax",
            'rating' => "5",
            'reviews_number' => "11",
            'marker_image' => "assets/img/items/11.jpg",
            'gallery' => array(
                "assets/img/items/11.jpg",
                "assets/img/items/5.jpg",
                "assets/img/items/7.jpg"
            ),
            'additional_info' => "",
            'url' => "detail.html",
            'description' => "Sed ac dolor auctor, elementum lacus vitae, efficitur magna. Quisque sed semper tellus",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Century Cup",
                    'location_address' => "Nascar Ring"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "24/7 Rally",
                    'location_address' => "Nascar Ring"
                ]
            ),
        ],

        [
            'id' => 24,
            'latitude' => 40.7486875,
            'longitude' => -73.91451359,
            'featured' => 1,
            'title' => "Golf Lessons",
            'location' => "49 Lance Golf Club",
            'city' => 1,
            'contact' => "<i class='fa fa-phone'></i>+1 317-598-2912",
            'category' => "Sport",
            'rating' => "5",
            'reviews_number' => "17",
            'marker_image' => "assets/img/items/14.jpg",
            'gallery' => array(
                "assets/img/items/14.jpg",
                "assets/img/items/6.jpg",
                "assets/img/items/9.jpg"
            ),
            'additional_info' => "Starts form $49",
            'url' => "",
            'description' => "Donec sed odio tempus, accumsan lectus eget, lobortis ligula. Sed sollicitudin urna et justo cursus imperdiet. Nullam semper est urna. Mauris nec volutpat lectus, quis commodo libero. In sed sagittis mauris, vitae feugiat magna.",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'schedule' => array(
                [
                    'date' => "24.03.2017",
                    'time' => "16:00",
                    'location_title' => "Town Square",
                    'location_address' => "458 Brigth Street London"
                ],
                [
                    'date' => "03.04.2017",
                    'time' => "18:00",
                    'location_title' => "Bristol Gallery",
                    'location_address' => "87 Yellow Lane, Manhattan"
                ]
            ),
            'video' => "<iframe src='https://player.vimeo.com/video/16688587?title=0&byline=0&portrait=0' width='640' height='272' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>"
        ],

        [
            'id' => 25,
            'latitude' => 51.508111,
            'longitude' => -0.132533,
            'featured' => 1,
            'title' => "Tennis for Beginners",
            'location' => "Tennis Center",
            'city' => 3,
            'contact' => "<i class='fa fa-phone'></i>+1 317-598-2912",
            'category' => "Sport",
            'rating' => "4",
            'reviews_number' => "17",
            'marker_image' => "assets/img/items/8.jpg",
            'gallery' => array(
                "assets/img/items/8.jpg",
                "assets/img/items/6.jpg",
                "assets/img/items/9.jpg"
            ),
            'additional_info' => "Starts form $49",
            'url' => "",
            'description' => "Donec sed odio tempus, accumsan lectus eget, lobortis ligula. Sed sollicitudin urna et justo cursus imperdiet. Nullam semper est urna. Mauris nec volutpat lectus, quis commodo libero. In sed sagittis mauris, vitae feugiat magna.",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'video' => ""
        ],

        [
            'id' => 26,
            'latitude' => 51.505867,
            'longitude' => -0.136954,
            'featured' => 1,
            'title' => "Red Ear Restaurant",
            'location' => "48 Josh Lane",
            'city' => 3,
            'contact' => "<i class='fa fa-phone'></i>+1 457-48-6846",
            'category' => "Restaurant",
            'rating' => "5",
            'reviews_number' => "5",
            'marker_image' => "assets/img/items/3.jpg",
            'gallery' => array(
                "assets/img/items/3.jpg",
                "assets/img/items/6.jpg",
                "assets/img/items/9.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Donec sed odio tempus, accumsan lectus eget, lobortis ligula. Sed sollicitudin urna et justo cursus imperdiet. Nullam semper est urna. Mauris nec volutpat lectus, quis commodo libero. In sed sagittis mauris, vitae feugiat magna.",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'video' => ""
        ],

        [
            'id' => 27,
            'latitude' => 48.859092,
            'longitude' => 2.355140,
            'featured' => 1,
            'title' => "Paris st. Restaurant",
            'location' => "Rue La Fayette",
            'city' => 4,
            'contact' => "<i class='fa fa-phone'></i>+6 457-48-6846",
            'category' => "Restaurant",
            'rating' => "5",
            'reviews_number' => "5",
            'marker_image' => "assets/img/items/6.jpg",
            'gallery' => array(
                "assets/img/items/6.jpg",
                "assets/img/items/6.jpg",
                "assets/img/items/9.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Donec sed odio tempus, accumsan lectus eget, lobortis ligula. Sed sollicitudin urna et justo cursus imperdiet. Nullam semper est urna. Mauris nec volutpat lectus, quis commodo libero. In sed sagittis mauris, vitae feugiat magna.",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'video' => ""
        ],

        [
            'id' => 28,
            'latitude' => 48.874022,
            'longitude' => 2.360880,
            'featured' => 1,
            'title' => "Manoir Wellness & Spa",
            'location' => "Quai de Valmy",
            'city' => 4,
            'contact' => "<i class='fa fa-phone'></i>+6 3548-189-4455",
            'category' => "Wellness",
            'rating' => "5",
            'reviews_number' => "6",
            'marker_image' => "assets/img/items/2.jpg",
            'gallery' => array(
                "assets/img/items/2.jpg",
                "assets/img/items/6.jpg",
                "assets/img/items/9.jpg"
            ),
            'additional_info' => "",
            'url' => "",
            'description' => "Donec sed odio tempus, accumsan lectus eget, lobortis ligula. Sed sollicitudin urna et justo cursus imperdiet. Nullam semper est urna. Mauris nec volutpat lectus, quis commodo libero. In sed sagittis mauris, vitae feugiat magna.",
            'reviews' => array(
                [
                    'author_name' => "Jane Doe",
                    'author_image' => "assets/img/person-01.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Morbi varius orci in rhoncus posuere. Sed cursus urna ut sem rhoncus lacinia. Praesentac velit dignissim, mollis purus quis, sollicitudin eros"
                ],
                [
                    'author_name' => "Norma Brown",
                    'author_image' => "assets/img/person-02.jpg",
                    'date' => '09.05.2016',
                    'rating' => 4,
                    'review_text' => "Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis"
                ]
            ),
            'video' => ""
        ],

        [
            'id' => 29,
            'latitude' => 47.4497732,
            'longitude' => 12.2513095,
            'featured' => 0,
            'title' => "Spend the night in an igloo!",
            'location' => "Alpeniglu",
            'city' => 2,
            'contact' => "<i class='fa fa-phone'></i>",
            'category' => "Hotel",
            'rating' => "",
            'reviews_number' => "",
            'marker_image' => "assets/img/items/6.jpg",
            'gallery' => array(
                "https://www.experio.at/alpeniglu.JPG",
                "https://www.experio.at/alpeniglu.JPG",
                "https://www.experio.at/alpeniglu.JPG"
            ),
            'tags' => array(
                "Partners",
                "Scenic",
                "Winter",
                "Tyrol"
            ),
            'ribbon' => "Sale",
            'additional_info' => "",
            'url' => "detail.html",
            'description' => "The Alpeniglu villiage in Tirol: an igloo village with hotel, ice bar, art and experiences.  Located in the heart of ski resort SkiWelt Wilder Kaiser - Brixental.",
            'description_list' => array(
                [
                    'title' => "Bathrooms",
                    'value' => 3,
                ],
                [
                    'title' => "Bedrooms",
                    'value' => 4,
                ],
                [
                    'title' => "Area",
                    'value' => "458m<sup>2</sup>",
                ],
                [
                    'title' => "Garages",
                    'value' => 2,
                ],
                [
                    'title' => "Status",
                    'value' => "Sale",
                ],
            ),
        ],

    )
);

