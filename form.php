<!DOCTYPE html>
<!--
Form
Author: Ariful Islam Shohag
Email: shohagarif007@gmail.com
-->
<html>
    <head>
        <title>Form :::</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- for icon at tab -->
        <link rel="icon" href="images/form.png" type="image/x-icon">

        <!-- animation -->
        <link href="animate/animate.css" rel="stylesheet" type="text/css"/>
        <link href="animate/set.css" rel="stylesheet" type="text/css"/>

        <!-- bootstrap integration for css-->
        <link href="css/bootstrap-theme.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- html5 boilerplate integration -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/modernizr-2.8.3.min.js" type="text/javascript"></script>


        <!--font awesome integration--> 
        <script src="js/fontawesome-all.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">




        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- font integration -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,10000" rel="stylesheet">
        <link href="http://allfont.net/allfont.css?fonts=montserrat-light" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

        <!-- linking css file with html -->
        <link href="style.css" type="text/css" rel="stylesheet">

    </head>
    <body>
        <!-- body part start -->

        <!-- header part start -->

        <div class="container-fluid header_wrapper">
            <div class="row">

                <div class="header col-md-12 col-sm-12 col-xs-12">

                    <div class="header_left col-md-6 col-sm-6 col-xs-12">
                        <h3><i class="icon fab fa-facebook-f"></i>acebook</h3>
                    </div>
<form action="">
                    <div class="header_right col-md-6 col-sm-6 col-xs-12">
                        <p>
                        <label for="email">E-mail:</label>
                                <input name="email" type="text" placeholder="your e-mail address" required>
                                <label for="password">Password:</label>
                                <input name="password " type="password" placeholder="password" pattern=".{5,10}" required title="Password must be between 5 to 10 characters">
                        </p>
                        <p>  

                            
                            <button class="btn_1">Login</button>
                        </p> 
                    </div>
                    </form>
                </div>

            </div>
        </div>


        <!-- header part end -->

        <!-- form part start -->
        <div class="container-fluid form_wrapper">
            <div class="row">
                <div class="form col-md-12 col-sm-12 col-xs-12">

                    <div class="form_left text-center col-md-6 col-sm-6 col-xs-12">
                        <h1 class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</h1>

                    </div>

                    <div class="form_right col-md-6 col-sm-6 col-xs-12">
                        <h1>Create A New Account</h1>
                        <p>It's Free and always will be</p>
                        <form>
                            <label for="first">First Name:</label>
                            <input name="first" id="first" type="text" placeholder="Arif" required="">
                            <label for="last">Last Name:</label>
                            <input name="last" id="last" type="text" placeholder="Shohag" required="">
                            <p>
                                <label for="male">Male:</label>
                                <input name="gender" id="male" type="radio" value="male">
                                <label for="female">Female:</label>
                                <input name="gender" id="female" type="radio" value="female">
                                <label for="other">Other:</label>
                                <input name="gender" id="other" type="radio" value="other">
                            </p>
                            <p>
                                <label for="email">E-mail:</label>
                                <input name="email" type="text" placeholder="your e-mail address" required>
                                <label for="password">Password:</label>
                                <input name="password " type="password" placeholder="password" pattern=".{5,10}" required title="Password must be between 5 to 10 characters">
                            </p>
                            <p>
                                <label for="Birthday">Birthday:</label>
                                <select name="month">
                                    <option value="Month">Month</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="july">july</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                                <select name="day">
                                    <option value="Day">Day</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10</option>
                                    <option value="">11</option>
                                    <option value="">12</option>
                                    <option value="">13</option>
                                    <option value="">14</option>
                                    <option value="">15</option>
                                    <option value="">16</option>
                                    <option value="">17</option>
                                    <option value="">18</option>
                                    <option value="">19</option>
                                    <option value="">20</option>
                                    <option value="">21</option>
                                    <option value="">22</option>
                                    <option value="">23</option>
                                    <option value="">24</option>
                                    <option value="">25</option>
                                    <option value="">26</option>
                                    <option value="">27</option>
                                    <option value="">28</option>
                                    <option value="">29</option>
                                    <option value="">30</option>
                                    <option value="">31</option>
                                </select>
                                <select name="year">
                                    <option value="Year">Year</option>
                                    <option value="">2018</option>
                                    <option value="">2017</option>
                                    <option value="">2016</option>
                                    <option value="">2015</option>
                                    <option value="">2014</option>
                                    <option value="">2013</option>
                                    <option value="">2012</option>
                                    <option value="">2011</option>
                                    <option value="">2010</option>
                                    <option value="">2009</option>
                                    <option value="">2008</option>
                                    <option value="">2007</option>
                                    <option value="">2006</option>
                                    <option value="">2005</option>
                                    <option value="">2004</option>
                                    <option value="">2003</option>
                                    <option value="">2002</option>
                                    <option value="">2001</option>
                                    <option value="">2000</option>
                                    <option value="">1999</option>
                                    <option value="">1998</option>
                                    <option value="">1997</option>
                                    <option value="">1996</option>
                                    <option value="">1995</option>
                                    <option value="">1994</option>
                                    <option value="">1993</option>
                                    <option value="">1992</option>
                                </select>
                            </p>
                            <p>
                                I agree to the terms & conditions <input type="checkbox">
                            </p>
                            <button class="btn">Sign Up</button>

                        </form>


                    </div>

                </div>

            </div>
        </div>
        <!-- form part end -->
        <!-- body part end -->



        <!-- ::::: java script & jQuery integration ::::: -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>  
        <script>window.jQuery || document.write('<script src="js/jquery-1.12.4.min.js"><\/script>')</script>
        <script src="js/jquery-1.12.0.min.js"></script>

        <!-- bootstrap for js/jQuery -->   
        <script src="js/bootstrap.min.js"></script>

        <!-- html5 boilerplate for js/jQuery --> 
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script type="text/javascript">
        </script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                        function () {
                            (b[l].q = b[l].q || []).push(arguments)
                        });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = 'https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>




    </body>
</html>