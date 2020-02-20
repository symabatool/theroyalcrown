<?php /* Template Name: Rooms */ 

require("header.php");
?>
            <section class="rooms-bg-img">
                <div class="container">
                    <div class="rooms-logo">
                        <h2>Rooms</h2>
                    </div>
                </div>
            </section>
            <section class="rooms-section">
                <div class="container">
                    <div class="line"></div>
                    <div class="rooms-heading">
                        <div class="rooms-text">
                            <h3>Choose a Room</h3>
                            <p>Choose from an arena of 288 rooms and suites as you check in at the ﬁve-star hotel.
                                Whether contemporary or classic, each room category promises you the comforts of your
                                home, away from home.</p>
                        </div>
                    </div>
                    <div class="rooms-details">
                        <div class="deluxe-room rooms">
                            <div class="dr-image">
                                <div class="room-price">
                                    <p class="price-from">From $200 per night</p>
                                </div>

                                <div class="room-text">
                                    <div class="line"></div>

                                    <h4>Deluxe Room</h4>
                                    <p>Our Deluxe room offers chicly embellished decor fused with contemporary design
                                        and modern amenities to ensure that you enjoy a relaxed and comfortable stay.
                                    </p>
                                </div>
                                <div class="read-more">
                                    <a href="#deluxe-section">Read More..</a>
                                </div>
                            </div>
                        </div>
                        <div class="double-room rooms">
                            <div class="ds-image">
                                <div class="room-price">
                                    <p class="price-from">From $150 per night</p>
                                </div>

                                <div class="room-text">
                                    <div class="line"></div>

                                    <h4>Double Suit</h4>
                                    <p>Offering an aesthetically pleasing and contemporary décor, our Double Room is
                                        furnished with a king sized bed, spacious bathroom, writing desk and mini
                                        kitchen.</p>
                                </div>
                                <div class="read-more">
                                    <a href="#double-section">Read More..</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-room rooms">
                            <div class="sr-image">
                                <div class="room-price">
                                    <p class="price-from">From $100 per night</p>
                                </div>

                                <div class="room-text">
                                    <div class="line"></div>

                                    <h4>Single Room</h4>
                                    <p>Offering pure and luxury class, the Single room adorns elegant, earthy tones and
                                        luxurious textures offering gorgeous city views.This is the perfect blend of
                                        comfort.</p>
                                </div>
                                <div class="read-more">
                                    <a href="#single-section">Read More..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="deluxe-section">
                <div class="container">
                    <div class="deluxe-heading">
                        <div class="line"></div>
                        <h3>Deluxe Room</h3>
                    </div>
                    <div class="slider">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/deluxe1.jpg" alt="deluxe1">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/deluxe2.jpg" alt="deluxe2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/deluxe3.jpg" alt="deluxe3">
                    </div>
                    <div class="deluxe-details">
                        <h3>Our Room Facilities</h3>
                    </div>
                    <div id="tabs">
                        <ul>
                            <li><a href="#tabs-1">Room Amenities</a></li>
                            <li><a href="#tabs-2">Room Overview</a></li>
                            <li><a href="#tabs-3">House Rules</a></li>
                        </ul>
                        <div id="tabs-1" class="tabs-1">
                            <div class="icons">
                                <i class="fas fa-wifi"></i>
                                <p>Internet</p>
                            </div>
                            <div class="icons">
                                <i class="fas fa-car"></i>
                                <p>Airport Pick n Drop</p>
                            </div>
                            <div class="icons">
                                <i class="fas fa-beer"></i>
                                <p>Bed Tea/Coffee</p>
                            </div>
                            <div class="icons">
                                <i class="fas fa-bed"></i>
                                <p>1 King Size Bed</p>
                            </div>
                            <div class="icons">
                                <i class="fas fa-concierge-bell"></i>
                                <p>Room Services</p>
                            </div>
                            <div class="icons">
                                <i class="fas fa-restroom"></i>
                                <p>2 People</p>
                            </div>

                        </div>
                        <div id="tabs-2" class="tabs-2">
                            <p>The Deluxe Rooms pay tribute to fashion and craftsmanship. The rooms are approximately
                                19m2 with beautiful greenery outside.The selection and pairing of materials has been
                                carefully chosen to give you a cool experience. The super soft bed topper is simply
                                extravagant! Every room is different but the colour palette uses unique and expertly
                                matched hues. An openwork brass screen separates the bathroom from the bedroom. This
                                original feature helps make every room your very own cosy and peaceful haven. Bathrobes,
                                slippers and SOTHYS toiletries are provided in the bathroom to pamper you.</p>
                            <ul>
                                <li>More Features</li>
                                <li>Airport pick and drop service by separate car</li>
                                <li>Express check-in / check-out</li>
                                <li>Separate Living Area</li>
                                <li>Express Lounge access</li>
                                <li>Welcome drink upon arrival</li>
                                <li>Daily fruit platter in room</li>
                                <li>Express Laundry Service at no extra charge</li>
                                <li>Complimentary use of health club facilities</li>
                                <li>Safe Lockers in room</li>
                                <li>Complimentary bottled water</li>
                                <li>Coffee maker/tea service</li>
                                <li>LCD/LED TV</li>
                                <li>Mini-refrigerator</li>
                                <li>Writing desk and chair</li>
                                <li>Executive Lounge facilities</li>
                                <li>Butler service</li>
                                <li>Buffet Breakfast</li>
                                <li>Bathroom amenities</li>
                                <li>Cable/Satellite Channels</li>
                            </ul>
                        </div>
                        <div id="tabs-3" class="tabs-3">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Check In</th>
                                        <td>14:00-22:00</td>
                                    </tr>
                                    <tr>
                                        <th>Check Out</th>
                                        <td>14:00-22:00</td>
                                    </tr>
                                    <tr>
                                        <th>Cancellation/Prepayment</th>
                                        <td>Cancellation and prepayment policies vary according to room type. Please
                                            enter the dates of your stay and check the conditions of your required room.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Children and extra beds</th>
                                        <td>
                                            <p>All children are welcome.</p>
                                            <p>There is no capacity for extra beds in the room.</p>
                                            <p>Supplements are not calculated automatically in the total costs and will
                                                have to be paid for separately during your stay.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pets</th>
                                        <td>Pets are not allowed.</td>
                                    </tr>
                                    <tr>
                                        <th>Additional info</th>
                                        <td>
                                            <p>Please note that parking spaces cannot be reserved or guaranteed.</p>
                                            <p>For a group booking more than 5 rooms up to 4 weeks prior to arrival
                                                cancellation is 100% free of charge, within 2 until 4 weeks 50% free of
                                                charge, and within 2 weeks the property will charge you in full.</p>
                                            <p>Please note that the credit card that is used for the booking needs to be
                                                present at check-in. When this credit card is not available please bring
                                                a photocopy of the credit card with authorization of the owner.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section id="double-section">
                <div class="container">
                    <div class="line"></div>
                    <div class="double-heading">
                        <h3>Double Suit</h3>
                    </div>
                    <div class="slider">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/double1.jpg" alt="double1">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/double2.jpg" alt="double2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/double3.jpg" alt="double3">
                    </div>
                    <div class="double-details">
                        <h3>Our Room Facilities</h3>
                    </div>
                    <div id="tabs2">
                        <ul>
                            <li><a href="#tabs-4">Room Amenities</a></li>
                            <li><a href="#tabs-5">Room Overview</a></li>
                            <li><a href="#tabs-6">House Rules</a></li>
                        </ul>
                        <div id="tabs-4" class="tabs-1">
                            <div class="icons">
                                <i class="fas fa-wifi"></i>
                                <p>Internet</p>
                            </div>
                            <div class="icons">
                                <i class="fas fa-car"></i>
                                <p>Airport Pick n Drop</p>
                            </div>
                            <div class="icons">
                                <i class="fas fa-beer"></i>
                                <p>Bed Tea/Coffee</p>
                            </div>
                            <div class="icons">
                                <i class="fas fa-bed"></i>
                                <p>1 King Size Bed</p>
                            </div>
                            <div class="icons">
                                <i class="fas fa-concierge-bell"></i>
                                <p>Room Services</p>
                            </div>
                            <div class="icons">
                                <i class="fas fa-restroom"></i>
                                <p>2 People</p>
                            </div>

                        </div>
                        <div id="tabs-5" class="tabs-2" >
                            <p>The Double Suit offers modishness embellished decor fused with contemporary design and
                                modern amenities to ensure that you enjoy a relaxed and comfortable stay</p>
                            <ul>
                                <li>More Features</li>
                                <li>Airport pick and drop service by van or coaster upon request</li>
                                <li>Express check-in / check-out</li>
                                <li>Express Lounge access</li>
                                <li>Welcome drink upon arrival</li>
                                <li>Daily fruit platter in room</li>
                                <li>Express Laundry Service at no extra charge</li>
                                <li>Safe Lockers in room</li>
                                <li>Complimentary bottled water</li>
                                <li>Coffee maker/tea service</li>
                                <li>LCD/LED TV</li>
                                <li>Mini-refrigerator</li>
                                <li>Writing desk and chair</li>
                                <li>Executive Lounge facilities</li>
                                <li>Butler service</li>
                                <li>Buffet Breakfast</li>
                                <li>Bathroom amenities</li>
                                <li>Cable/Satellite Channels</li>
                            </ul>
                        </div>
                        <div id="tabs-6" class="tabs-3">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Check In</th>
                                        <td>14:00-22:00</td>
                                    </tr>
                                    <tr>
                                        <th>Check Out</th>
                                        <td>14:00-22:00</td>
                                    </tr>
                                    <tr>
                                        <th>Cancellation/Prepayment</th>
                                        <td>Cancellation and prepayment policies vary according to room type. Please
                                            enter the dates of your stay and check the conditions of your required room.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Children and extra beds</th>
                                        <td>
                                            <p>All children are welcome.</p>
                                            <p>There is no capacity for extra beds in the room.</p>
                                            <p>Supplements are not calculated automatically in the total costs and will
                                                have to be paid for separately during your stay.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pets</th>
                                        <td>Pets are not allowed.</td>
                                    </tr>
                                    <tr>
                                        <th>Additional info</th>
                                        <td>
                                            <p>Please note that parking spaces cannot be reserved or guaranteed.</p>
                                            <p>For a group booking more than 5 rooms up to 4 weeks prior to arrival
                                                cancellation is 100% free of charge, within 2 until 4 weeks 50% free of
                                                charge, and within 2 weeks the property will charge you in full.</p>
                                            <p>Please note that the credit card that is used for the booking needs to be
                                                present at check-in. When this credit card is not available please bring
                                                a photocopy of the credit card with authorization of the owner.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <section id="single-section">
                <div class="container">
                    <div class="line"></div>
                    <div class="single-heading">
                        <h3>Single Rooms</h3>
                    </div>
                    <div class="slider">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/single1.jpg" alt="single1">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/single2.jpg" alt="single2">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/single3.jpg" alt="single3">
                    </div>
                    <div class="single-details">
                        <h3>Our Room Facilities</h3>
                    </div>
                    <div id="tabs3">
                        <ul>
                            <li><a href="#tabs-7">Room Amenities</a></li>
                            <li><a href="#tabs-8">Room Overview</a></li>
                            <li><a href="#tabs-9">House Rules</a></li>
                        </ul>
                        <div id="tabs-7" class="tabs-1">
                            <div class="icons icons2">
                                <i class="fas fa-wifi"></i>
                                <p>Internet</p>
                            </div>

                            <div class="icons icons2">
                                <i class="fas fa-beer"></i>
                                <p>Bed Tea/Coffee</p>
                            </div>
                            <div class="icons icons2">
                                <i class="fas fa-bed"></i>
                                <p>1 Single Bed</p>
                            </div>
                            <div class="icons icons2">
                                <i class="fas fa-concierge-bell"></i>
                                <p>Room Services</p>
                            </div>
                            <div class="icons icons2">
                                <i class="fas fa-male"></i>
                                <p>1 Person</p>
                            </div>

                        </div>
                        <div id="tabs-8" class="tabs-2">
                            <p>Our comfortable Single Rooms are just the right size if you are travelling alone. Similar
                                to all the other rooms in the The Royal Crown Hotel, the Single Room is fully equipped
                                with all comforts.</p>
                            <ul>
                                <li>More Features</li>
                                <li>Welcome drink upon arrival</li>
                                <li>Daily fruit platter in room</li>
                                <li>Express Laundry Service at no extra charge</li>
                                <li>Safe Lockers in room</li>
                                <li>Complimentary bottled water</li>
                                <li>Coffee maker/tea service</li>
                                <li>LCD/LED TV</li>
                                <li>Mini-refrigerator</li>
                                <li>Writing desk and chair</li>
                                <li>Executive Lounge facilities</li>
                                <li>Butler service</li>
                                <li>Bathroom amenities</li>
                                <li>Cable/Satellite Channels</li>
                            </ul>
                        </div>
                        <div id="tabs-9" class="tabs-3">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Check In</th>
                                        <td>14:00-22:00</td>
                                    </tr>
                                    <tr>
                                        <th>Check Out</th>
                                        <td>14:00-22:00</td>
                                    </tr>
                                    <tr>
                                        <th>Cancellation/Prepayment</th>
                                        <td>Cancellation and prepayment policies vary according to room type. Please
                                            enter the dates of your stay and check the conditions of your required room.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Children and extra beds</th>
                                        <td>
                                            <p>All children are welcome.</p>
                                            <p>There is no capacity for extra beds in the room.</p>
                                            <p>Supplements are not calculated automatically in the total costs and will
                                                have to be paid for separately during your stay.</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Pets</th>
                                        <td>Pets are not allowed.</td>
                                    </tr>
                                    <tr>
                                        <th>Additional info</th>
                                        <td>
                                            <p>Please note that parking spaces cannot be reserved or guaranteed.</p>
                                            <p>For a group booking more than 5 rooms up to 4 weeks prior to arrival
                                                cancellation is 100% free of charge, within 2 until 4 weeks 50% free of
                                                charge, and within 2 weeks the property will charge you in full.</p>
                                            <p>Please note that the credit card that is used for the booking needs to be
                                                present at check-in. When this credit card is not available please bring
                                                a photocopy of the credit card with authorization of the owner.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        <?php require("footer.php");
        ?>