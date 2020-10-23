<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALStatistics | Home</title>
    <!--Ion Icons-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!--Our own stylesheet-->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesrounded.css">
    <?php
        function get_CURL($url){  //Membuat Fungsi agar efisien
            $curl = curl_init();  //Mengkoneksi ke server

            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);   //Agar data yang dikembalikan bentuknya adalah text
            $result = curl_exec($curl);   //Kembalian dari server API
            curl_close($curl);

            return json_decode($result, true);  //JSON diubah manjadi object
        }

        $result = get_CURL('api.openweathermap.org/data/2.5/weather?q=London,UKmp}}o&appid=3aea4ab0d1a07aadb36905aa31a3bea9&units=metric');
        $capitalUK = $result['name'];
        $capitalUKIcon = $result['weather'][0]['icon'];
        $capitalUKWeather = $result['weather'][0]['description'];
        $capitalUKSky = $result['weather'][0]['main'];
        $capitalUKCountry = $result['sys']['country'];
        $capitalUKTemperature = $result['main']['temp'];

        $result = get_CURL('api.openweathermap.org/data/2.5/group?id=2643123,2650225,2644210,2655984&appid=3aea4ab0d1a07aadb36905aa31a3bea9&units=metric');
        $listUK = $result['list'];


        $result = get_CURL('api.openweathermap.org/data/2.5/weather?q=Washington DC, United Statesmp}}o&appid=3aea4ab0d1a07aadb36905aa31a3bea9&units=metric');
        $capitalUS = $result['name'];
        $capitalUSIcon = $result['weather'][0]['icon'];
        $capitalUSWeather = $result['weather'][0]['description'];
        $capitalUSSky = $result['weather'][0]['main'];
        $capitalUSCountry = $result['sys']['country'];
        $capitalUSTemperature = $result['main']['temp'];

        $result = get_CURL('api.openweathermap.org/data/2.5/group?id=5128581,4887398,5368361,5419384&appid=3aea4ab0d1a07aadb36905aa31a3bea9&units=metric');
        $listUS = $result['list'];

        
        $result = get_CURL('api.openweathermap.org/data/2.5/group?id=2172517,292223,3451190,2988507,1850144,524901,745042,3369157&appid=3aea4ab0d1a07aadb36905aa31a3bea9&units=metric');
        $listCities = $result['list'];

        //For Profile
        $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC2_UA3UyVnxdKyypTBzCwEA&key=AIzaSyDOQVQiWZAool-FDT_wMY30-iJXxXQpg9U');
        $youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
        $youtubeSubscribers = $result['items'][0]['statistics']['subscriberCount'];
        $youtubeName = $result['items'][0]['snippet']['title'];

        // $result = get_CURL('api.openweathermap.org/data/2.5/weather?q=Los Angeles,CA,US&appid=3aea4ab0d1a07aadb36905aa31a3bea9&units=metric');

        // $result = get_CURL('api.openweathermap.org/data/2.5/group?id=2172517,2063523,2073124&appid=3aea4ab0d1a07aadb36905aa31a3bea9&units=metric');
        // $listAU = $result['list'];

        // $result = get_CURL('api.openweathermap.org/data/2.5/group?id=292968,292223,292672&appid=3aea4ab0d1a07aadb36905aa31a3bea9&units=metric');
        // $listUAE = $result['list'];

        // $result = get_CURL('api.openweathermap.org/data/2.5/group?id=524901,2013348,554234&appid=3aea4ab0d1a07aadb36905aa31a3bea9&units=metric');
        // $listRU = $result['list'];
    ?>
</head>
<body>

    <header>
        <div class="container">
            <nav>
                <div class="nav-brand">
                    <a href="#testimonial">
                        <img src="images/A.png" alt="">
                    </a>
                </div>

                <div class="menu-icons open">
                    <i class="icon ion-md-menu"></i>
                </div>

                <ul class="nav-list">
                    <div class="menu-icons close">
                        <i class="icon ion-md-close"></i>
                    </div>
                    <li class="nav-item">
                        <a href="#" class="nav-link current">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">NBA Stats</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Oxford Dictionaries</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">OMDb</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="main-message">
                    <h3>AL-Statistics</h3>
                    <h1>Weather Data</h1>
                    <p>
                        Check current weather of any location including over 200,000 cities around the world. 
                        The data is frequently updated based on global and local weather models, satellites, 
                        radars and vast network of weather stations.
                    </p>
                    <div class="cta">
                        <a href="#cities" class="btn">Cities</a>
                        <a href="#search-city" class="btn">Search City</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-plain" id="cities">
            <div class="container">
                <div class="title-heading">
                    <h3>Forecast</h3>
                    <h1>The Weather Data</h1>
                    <p>Current weather of Country's Capital and Major Cities.</p>
                </div>

                <!-- Two Column -->
                <div class="content-grid">
                    <div class="content">
                        <h1>United Kingdom of Great Britain and Northern Ireland</h1>
                        <hr>
                        <div class="capital">
                            <div class="cities-list">
                                <h2><?php echo $capitalUK?></h2>
                                <img src="http://openweathermap.org/img/wn/<?php echo $capitalUKIcon?>.png">
                                <h4><?php echo $capitalUKWeather?></h4>
                                <p><?php echo $capitalUKSky?></p>
                                <p><?php echo $capitalUKCountry?></p>
                                <p><?php echo $capitalUKTemperature?>&#8451</p>                                    
                            </div>
                        </div>
                        <div class="cities">
                            <?php foreach($listUK as $row): ?>
                                <div class="cities-list">
                                    <h2><?php echo $row['name']?></h2>
                                    <img src="http://openweathermap.org/img/wn/<?php echo $row['weather'][0]['icon']?>.png">
                                    <h4><?php echo $row['weather'][0]['description']?></h4>
                                    <p><?php echo $row['weather'][0]['main']?></p>
                                    <p><?php echo $row['sys']['country']?></p>
                                    <p><?php echo $row['main']['temp']?>&#8451</p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="content">
                        <h1>United States of America</h1>
                        <hr>
                        <div class="capital">
                            <div class="cities-list">
                                <h2><?php echo $capitalUS?></h2>
                                <img src="http://openweathermap.org/img/wn/<?php echo $capitalUSIcon?>.png">
                                <h4><?php echo $capitalUSWeather?></h4>
                                <p><?php echo $capitalUSSky?></p>
                                <p><?php echo $capitalUSCountry?></p>
                                <p><?php echo $capitalUSTemperature?>&#8451</p>                                    
                            </div>
                        </div>
                        <div class="cities">
                            <?php foreach($listUS as $row): ?>
                                <div class="cities-list">
                                    <h2><?php echo $row['name']?></h2>
                                    <img src="http://openweathermap.org/img/wn/<?php echo $row['weather'][0]['icon']?>.png">
                                    <h4><?php echo $row['weather'][0]['description']?></h4>
                                    <p><?php echo $row['weather'][0]['main']?></p>
                                    <p><?php echo $row['sys']['country']?></p>
                                    <p><?php echo $row['main']['temp']?>&#8451</p>
                                </div>
                            <?php endforeach; ?>
                        </div>                 
                    </div>
                </div>
                
                <!-- One Column -->
                <div class="content-grid">
                    <div class="content">
                        <h1>Capital and Major Cities</h1>
                        
                        <div class="cities">
                            <?php foreach($listCities as $row): ?>
                                <div class="cities-list">
                                    <h2><?php echo $row['name']?></h2>
                                    <img src="http://openweathermap.org/img/wn/<?php echo $row['weather'][0]['icon']?>.png">
                                    <h4><?php echo $row['weather'][0]['description']?></h4>
                                    <p><?php echo $row['weather'][0]['main']?></p>
                                    <p><?php echo $row['sys']['country']?></p>
                                    <p><?php echo $row['main']['temp']?>&#8451</p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>

                <!-- Search Section --> 
                <div class="content-grid" id="search-city">
                    <div class="content">
                        <input type="text" class="search" id="search" placeholder="Search any City">
                        <button class="button" id="button">Search</button>
                        <h2>Use a specific location for more accurate cities result, e.g : Kansas City, Missouri, US</h2>
                        <!-- <div class="cities-list resultbox" id="resultbox">
                            <h1>City Name</h1>
                            <img src="http://openweathermap.org/img/wn/02d.png">
                            <h4>Weather</h4>
                            <p>Sky</p>
                            <p>Country</p>
                            <p>Temperature</p>
                        </div> -->
                        <div class="cities">
                            <div class="cities-lists">
                                <div class="round-content" >
                                    <div class="round-menu resultbox" id="resultbox">
                                        <div class="round-weather">
                                            <img src="http://openweathermap.org/img/wn/02d.png">
                                            <h4>weather</h4>
                                        </div>
                                        <hr>
                                        <div class="round-descripton">
                                            <p>Sky</p>
                                        </div>
                                        <div class="round-city">
                                            <h1>City Name</h1>
                                        </div>
                                        <div class="round-country">
                                            <p>Country</p>
                                        </div>
                                        <hr>
                                        <div class="round-temperature">
                                            <p>Temp&#8451</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>         
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials" id="testimonial">
            <div class="container">
                <div class="testimonial">
                    <div class="testimonial-text-box">
                        <p>I always describe myself as a Country, I have a right, interest, identity, action and strength.</p>
                        <i class="icon ion-md-quote"></i>
                    </div>
                    <div class="testimonial-customer">
                        <img src="<?php echo $youtubeProfilePic?>" alt="">
                        <h1><?php echo $youtubeName?></h1>
                        <p><?php echo $youtubeSubscribers?> Subscribers.</p>
                        <div class="g-ytsubscribe" data-channelid="UC2_UA3UyVnxdKyypTBzCwEA" data-layout="default" data-count="hidden">Subscribe</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="message">
            <div class="container">
                <div class="title-heading">
                    <h3>Journey Begin Because</h3>
                    <h1>People Change</h1>
                    <p>"From the fields of Indiana, to the swamp of Lousiana, to the golden coast of Californ'(nia)"</p>
                </div>
                <div class="message-grid">
                    <!-- Message grid item #1-->
                    <div class="message-grid-item">
                        <p>
                        O say can you see, by the dawn's early light <br>
                        What so proudly we hailed at the twilight's last gleaming, <br>
                        Whose broad stripes and bright stars through the perilous fight <br>
                        O'er the ramparts we watched, were so gallantly streaming <br>
                        
                        </p>
                    </div>
                    <!-- Message grid item #2-->
                    <div class="message-grid-item">
                        <p>
                        And the rocket's red glare, the bombs bursting in air <br>
                        Gave proof through the night that our flag was still there <br>
                        O say does that star-spangled banner yet wave <br>
                        O'er the land of the free and the home of the brave. <br>
                        </p>
                    </div>
                </div>
                <a class="btn" href="#">Back to the top</a> 
            </div>
        </section>
    </main>

    <footer>
        <p>&copy;2020 Alfatah Wibisono. All rights reserved</p>
    </footer>

</body>
<script src="scripts.js"></script>
<script src="https://apis.google.com/js/platform.js"></script>
</html>