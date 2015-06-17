
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hewar's Shuttle Service</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stylePage.css" rel="stylesheet">
    <script src="js/parallax.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/stylePage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php include 'php/contact.php';?>
    <![endif]-->
</head>
<body data-spy = "scroll" data-target=".navbar-collapse">

    <!-- navbar -->
    <div class = "container">
        <nav class = "navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div clsas ="navbar-header">
                <a href = "#Home" class = "navbar-brand" id = "companyName">Hewar's Shuttle PDX</a>
            </div>
            <div class="navbar-header">
                <button type="button" class = "navbar-toggle" data-toggle = "collapse"
                        data-target = ".navbar-collapse">
                    <span class = "sr-only"> Toggle Navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
            </div>
            <div class = "collapse navbar-collapse">
                <ul class = "nav navbar-nav navbar-static-top">
                    <li class = "active"><a href = "">Home</a></li>
                    <li><a href = "#servicePage">Services</a></li>
                    <li><a href = "#ratesPage">Rates</a></li>
                    <li class = "hidden-xs"><a href = "#testimonialPage">Testimonials</a></li>
                    <li><a href = "#contactPage">Contact</a></li>
                    <li>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle = "modal" data-target="#reservationModal" id = "reservationBtn">
                            Online Reservation
                        </button>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    <div class = "clear"></div>

    <!-- homepage text -->
    <div class="container-fluid">

    </div>

    <section class = "bg-1 text-center">
        <div class = "text-right text- text-uppercase homePageText">
            <p><span class = "ride">Ride with us</span></p>
            <p>& experience the beauty of</p>
            <p><span class = "ride">Portland</span> and its suburbs</p>

        </div>


    <div class = "container-fluid">

        <!-- background video -->
        <div class = "videoBackground" id="imageParallax">
            <video autoplay  poster="http://holykaw.alltop.com/wp-content/uploads/2013/03/Fotolia_40759988_Subscription_L.jpg" id="bgvid" loop muted="muted">
                <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
                <source class = "hidden-sm" src="media/stockVideo.mp4" type="video/webm">
                <source class = "hidden-sm" src="media/stockVideo.webm" type="video/mp4">
            </video>
        </div>
    </div>
    </section>

    <!-- service page -->
    <div class = "container-fluid imageContent" id = "servicePage">
        <div class = "space"></div>

        <div class = "jumbatron">
            <div id = "serviceSummary">
                <h2 id ="serviceInfoAbout">Our Service</h2>

                <p class = "lead">We guarantee a smooth and comfortable ride with our friendly licensed driver</p>
            </div>
            <div class="row center-block"  id = "serviceInfo">

                <!-- service icons -->
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-calendar text-center" id = "calendarService"></span>
                    <div>
                        <p>Flexible dates/time throughout the year</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-plane" id = "planeService"></span>
                    <div>
                        <p>Airport Pickup around the clock</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-map-marker" id = "mapService"></span>
                </div>
                <div >
                    <p>Destinations are up to 100 Miles</p>
                </div>
            </div>
        </div>
    </div>

    <!-- rates page -->
    <div class = "container-fluid center-block" id = "ratesPage">

        <div class = "row">
            <div class="col-sm-4 lead">
                <h2 class = "text-center">Low Prices.</h2>
                <h2 class = "text-center">Guaranteed.</h2>
                <p class = "text-center jumbotron">We guarantee to have the lowest prices or we price-match.</p>

            </div>
            <div class = "col-sm-8">
                <h1 class = "text-center">Rates:</h1>
                <table class="table table-striped table-bordered table-hover ">

                    <tr class="info">
                        <th>Service</th>
                        <th>Price</th>
                    </tr>

                    <tr>
                        <td>PDX Airport Pickup</td>
                        <td>$95</td>
                    </tr>

                    <tr>
                        <td>Portland Metro Area</td>
                        <td>$90</td>
                    </tr>
                    <tr>
                        <td>McMilville</td>
                        <td>$90</td>
                    </tr>
                    <tr>
                        <td>Salem</td>
                        <td>$140</td>
                    </tr>
                    <tr>
                        <td>Corvallis</td>
                        <td>$220</td>
                    </tr>

                    <tr>
                        <td>Eugene</td>
                        <td>$300</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <!-- background window -->
    <div class = "container-fluid parallaxWindow hidden-xs hidden-sm imageParallax">
        <p class = "text-center cleanComf lead">Clean & Comfortable</p>
    </div>

    <!-- TESTIMONIAL PAGE -->
    <div class = "container-fluid testimonialPage row" id = "testimonialPage">
        <div class = "container">

        <div class = "text-center">
            <div class = "container">
                <h2 class = "testimonialHeader">Testimonials</h2>
            </div>
            <div class = "row contactUsSection">
                <div class="col-sm-3">
                    <h3> Sean Memen</h3>
                    <p>"Picked up from the airport and driver was very friendly to deal with"</p>

                </div>
                <div class="col-sm-3">
                    <h3> Saleh Qadan</h3>
                    <p>"I really enjoyed talking to the driver"</p>
                </div>
                <div class="col-sm-3">
                    <h3> Marqus White</h3>
                    <p>"Enjoyed the ride! I will be using them again when I come back to town"</p>
                </div>
                <div class="col-sm-3">
                    <h3> Qadan</h3>
                    <p>"Great service!"</p>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- CONTACT US PAGE -->
    <div class = "container-fluid"  id = "contactPage">
        <div class = "container">

            <div class = "text-center">
                <div class = "container">
                    <h2 class = "text-center">Contact Us</h2>
                </div>
            </div>

        </div>


        <div class="row">


        <div class="col-md-12 contact-form">
            <form id="contact" method="post" class="form" role="form" >

                <div class="row" action="php/contact.php">
                    <div class="col-xs-6 col-md-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name*" type="text" required/>
                    </div>
                    <div class="col-xs-6 col-md-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email" required />
                    </div>
                </div>
                <textarea class="form-control" id="message" name="message" placeholder="Message*" rows="8"  required>
                </textarea>
                <br />
                <div class="row">
                    <div class="col-xs-12 col-md-12 form-group">
                        <button class="btn btn-success pull-right" type="submit" id = "contactSubmit" value="Send" >Submit</button>
                    </div>
                </div>
            </form>
        </div>
            <img id = "bottomImg" src="media/bottomImg.png" />
        </div>
    </div>




            <!--- RESERVATION FORM --->
    <div class = "modal fade " role="dialog" tabindex="-1" id="reservationModal" >
        <div class = "modal-dialog">
            <div class = "modal-content">
                <div class = "modal-header">
                    <button class = "close" data-dismiss = "modal"><span class = "glyphicon glyphicon-remove-circle" id = "xBtn"></span> </button>
                    <h3 class = "modal-title">Online Reservation</h3>
                </div>
                <div class="modal-body">
                    <div class="row container-fluid col-md-offset-1">
                        <div class = "col-lg-8" id = "saf">
                            <div class="form-horizontal" method = "post">
                                <div class="form-group">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" class="form-control" id="firstName">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name:</label>
                                    <input type="email" class="form-control" id="lastName">
                                </div>
                                <div class="form-group">
                                    <label for="phoneNumber">Contact Number:</label>
                                    <input type="number" class="form-control" id="phoneNumber">
                                </div>
                                <div class="form-group">
                                    <label for="reservationEmail">Email Address:</label>
                                    <input type="email" class="form-control" id="reservationEmail">
                                </div>
                                <div class="form-group">
                                    <label for="calendar">Pick up Date:</label>
                                    <input type="date" class="form-control" id="calendar">
                                </div>
                                <div class="form-group">
                                    <label for="time">Pick up Time:</label>
                                    <input type="time" class="form-control" id="time">
                                </div>
                                <div class="form-group">
                                    <div class = "radio-inline">
                                        <label>
                                        <input type="radio" name = "departureArrival" id = "departure" value="option1">
                                            Departure
                                        </label>
                                    </div>
                                    <div class = "radio-inline">
                                        <label>
                                            <input type="radio" name = "departureArrival" id = "arriving" value="option2">
                                            Arrival
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address">
                                </div>
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control" id="city">
                                </div>
                                <div class="form-group">
                                    <label for="state">State:</label>
                                    <input type="text" class="form-control" id="state">
                                </div>
                                <div class="form-group">
                                    <label for="airline">Airline:</label>
                                    <input type="text" class="form-control" id="airline">
                                </div>
                                <div class="form-group">
                                    <label for="flightNumber">Flight Number:</label>
                                    <input type="text" class="form-control" id="flightNumber">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success">Submit Reservation</button>
                </div>
            </div>
        </div>
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/backgroundVideo/backgroundVideo.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/js.js"></script>
</body>
</html>