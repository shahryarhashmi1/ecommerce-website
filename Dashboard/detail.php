<?php

    include "conn.php";

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Pakistan Travels (Details)
        </title>

        <link rel="stylesheet" href="detail.css">

        <link rel="icon" href="images/icon.png">

        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <style>
        html {
            scroll-behavior: smooth;
        }
        </style>
    </head>

    <body>
        <nav class="navbar">
            <div class="navbar-container container">
                <input type="checkbox" name="" id="">

                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>

                <ul class="menu-items">
                    <li>
                        <a href="index.php">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="tour.php">
                            Tour Packege
                        </a>
                    </li>
                </ul>

                <h1 class="logo">
                    <a href="index.php">
                        PT
                    </a>
                </h1>
            </div>
        </nav>

        <section id="about" style="background:whitesmoke;">
            <div class="about-wrapper container">
                <div class="about-text">
                    <?php

                        include 'conn.php';

                        $p_id = $_GET["p_id"];

                        $q = "SELECT * FROM `detail` INNER JOIN `punjab` ON `punjab`.`id` = `detail`.`id` WHERE `p_id`= '".$p_id."' ";

                        $query = $conn->query($q);

                        $result = $query->fetch_assoc();

                    ?>

                    <p class="small" style="color: red; font-weight: bold;">
                        Details
                    </p>

                    <h2>
                        <?php echo $result['heading'];?>
                    </h2>

                    <p style="text-align: justify;">
                        <?php echo $result['long_desc']; ?>
                    </p>

                    <br>

                    <p style="font-weight:400px; color:crimson;">
                        Departure & Return location :
                    </p>

                    <p style="font-weight:300px;">
                        <?php echo $result['depart_loc']; ?>
                    </p>

                    <br>

                    <p style="font-weight:400px; color:crimson;">
                        Departure time :
                    </p>

                    <p style="font-weight:300px;">
                        <?php echo $result['return_loc']; ?>
                    </p>
                </div>

                <div class="about-img">
                    <img src="upload/<?=$result['my_image']?>" alt="food" style="border-radius: 10px;">
                </div>
            </div>
        </section>

        <section class="text-gray-600 py-20 body-font" style="background:white;">
            <h2
                style="color: green; font-weight: 600; text-align: center; font-size: 2.5rem; margin-bottom: 40px; text-transform: uppercase;">
                DAYS DETAILS
            </h2>

            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/wp1882761.jpg"
                                alt="blog"> -->
                            <div class="p-6">
                                <center>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3"
                                        style="font-size:30px; color:crimson;">
                                        DAY 1
                                    </h1>
                                </center>

                                <br>

                                <p class="leading-relaxed mb-3" style="text-align: justify;">
                                    <?php echo $result['day_one']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="images/2017-honda-civic-type-r-hatchback-prototype-by-civicx-02.jpg" alt="blog"> -->
                            <div class="p-6">
                                <center>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3"
                                        style="font-size:30px; color:crimson;">
                                        DAY 2
                                    </h1>
                                </center>

                                <br>

                                <p class="leading-relaxed mb-3" style="text-align: justify;">
                                    <?php echo $result['day_two']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="images/2022_Honda_BR-V_Presulttige_with_Honda_Sensing_1.5_DG3_(20220429).jpg" alt="blog"> -->
                            <div class="p-6">
                                <center>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3"
                                        style="font-size:30px; color:crimson;">
                                        DAY 3
                                    </h1>
                                </center>

                                <br>

                                <p class="leading-relaxed mb-3" style="text-align: justify;">
                                    <?php echo $result['day_three']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 py-20 body-font" style="background:whitesmoke;">
            <h2
                style="color: green; font-weight: 600; text-align: center; font-size: 2.5rem; margin-bottom: 40px; text-transform: uppercase;">
                PRICE DETAILS
            </h2>

            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/wp1882761.jpg"
                                alt="blog"> -->
                            <div class="p-6">
                                <center>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3"
                                        style="font-size:30px; color:crimson;">
                                        Price Include
                                    </h1>
                                </center>

                                <br>

                                <p class="leading-relaxed mb-3" style="text-align: justify;">
                                    <?php echo $result['price_include']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="images/2017-honda-civic-type-r-hatchback-prototype-by-civicx-02.jpg" alt="blog"> -->
                            <div class="p-6">
                                <center>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3"
                                        style="font-size:30px; color:crimson;">
                                        Price Exclude
                                    </h1>
                                </center>

                                <br>

                                <p class="leading-relaxed mb-3" style="text-align: justify;">
                                    <?php echo $result['price_exclude']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="images/2022_Honda_BR-V_Presulttige_with_Honda_Sensing_1.5_DG3_(20220429).jpg" alt="blog"> -->
                            <div class="p-6">
                                <center>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3"
                                        style="font-size:30px; color:crimson;">
                                        Complementries
                                    </h1>
                                </center>
                                <br>

                                <p class="leading-relaxed mb-3" style="text-align: justify;">
                                    <?php echo $result['complementries']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 py-20 body-font" style="background:white;">
            <h2
                style="color: green; font-weight: 600; text-align: center; font-size: 2.5rem; margin-bottom: 40px; text-transform: uppercase;">
                HOTEL DETAILS
            </h2>

            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/wp1882761.jpg"
                                alt="blog"> -->
                            <div class="p-6">
                                <center>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3"
                                        style="font-size:30px; color:crimson;">
                                        Standard <br><br> Services
                                    </h1>
                                </center>

                                <br>

                                <p class="leading-relaxed mb-3" style="text-align: justify;">
                                    <?php echo $result['vip']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <!-- <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="images/2017-honda-civic-type-r-hatchback-prototype-by-civicx-02.jpg" alt="blog"> -->
                            <div class="p-6">
                                <center>
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3"
                                        style="font-size:30px; color:crimson;">
                                        VIP <br><br> Serivces
                                    </h1>
                                </center>

                                <br>

                                <p class="leading-relaxed mb-3" style="text-align: justify;">
                                    <?php echo $result['standard']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <center>
                <button
                    class="bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded"
                    style="transition: 1s all;" onclick="location.href='book-form.php';">
                    Book Now ⋙
                </button>
            </center>
        </section>

        <?php
        
        ?>

    </body>
</html>