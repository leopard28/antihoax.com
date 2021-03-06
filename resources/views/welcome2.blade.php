
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ANTI-HOAX!</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/bootstrap.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/agency.css') }}">

    <!-- Custom Sendiri -->
    {{-- <link rel="stylesheet" href="{{ asset('/frontend/css/custom.css') }}"> --}}

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <!-- <a class="navbar-brand page-scroll" href="#page-top">HOME</a> -->
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <img style="height:55px;width:55px;margin-right: 30px;" src="frontend/img/logo.png">
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="page-scroll" href="#page-top">HOME</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#detect">Hoax Detector</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#example">Example of Hoax</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#recent">Recent Search</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#tips">How to Detect Hoax</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Anti Hoax Website</div>
                <div class="intro-heading">Let's broke the Hoax!</div>
            </div>
        </div>
    </header>

    <!-- detect Section -->
    <section id="detect" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Hoax Detector</h2>
                </div>
            </div>
            <div class="row text-center">
<!--                    <h4 class="text-muted">Insert the link below</h4>-->
                    <div class="col-lg-12" style="margin:auto">
                        <div class="col-lg-2">
                        </div>

                        <form method="get" action="{{ url('search') }}">
                            <div class="col-lg-7">
                                <input id="website" style="float:right;width:90%;height: 40px;" type="text" class="form-control"  placeholder="Search" name="search"/>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm">Go</button>
                            {{-- <div class="col-lg-2">
                                <a href="javascript:getHref();">
                                    <img src="{{asset('/frontend/img/wwwfind.png')}}" style="float:left; max-width:64px; max-height:64px" class="btn btn-info">
                                </a>
                            </div> --}}
                        </form>

                    </div>
            </div>


                

            <br>
            <?php
                if(isset($_GET['website']) && $_GET['website']!=''){
                    echo '
                    <div class="row">
                    <h4 class="text-center">-------------------------------------------------------------------------------------------------------------</h4>
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table id="materialPlate" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>NAME</th>
                          <th>DESCRIPTION</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>URL</td>
                                <td>aaaaaaaaaaaaaaa.com</td>
                            </tr>
                            <tr>
                                <td>OWNER</td>
                                <td>AAAAA</td>
                            </tr>
                            <tr>
                                <td>TITLE</td>
                                <td>AAAA AAAA AAAAA</td>
                            </tr>
                            <tr>
                                <td>SCORE</td>
                                <td>80% HOAX</td>
                            </tr>
                        </tbody>
                        </table>
                        <h4> REFERENCE: </h4>
                        <h5>News 1 Title 1 (www.news1.com)</h5>
                        <h7>This is the news description. You can chek here if you want</h7>
                        <h5>News 2 Title 2 (www.news2.com)</h5>
                        <h7>This is the news description. You can chek here if you want</h7>
                        <h5>News 3 Title 3 (www.news3.com)</h5>
                        <h7>This is the news description. You can chek here if you want</h7>
                        <h5>News 4 Title 4 (www.news4.com)</h5>
                        <h7>This is the news description. You can chek here if you want</h7>
                        <h5>News 5 Title 5 (www.news5.com)</h5>
                        <h7>This is the news description. You can chek here if you want</h7>
                    </div>
                </div>
                    ';
                }
            ?>
        </div>
    </section>
    
    <!-- Example Section -->
    <section id="example">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Example of Hoax</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="frontend/img/hoax.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <h4>HOAX 1</h4>
                        <p class="text-muted">Description Hoax 1</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="frontend/img/hoax.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <h4>HOAX 2</h4>
                        <p class="text-muted">Description Hoax 2</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="frontend/img/hoax.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <h4>HOAX 3</h4>
                        <p class="text-muted">Description Hoax 3</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="frontend/img/hoax.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <h4>HOAX 4</h4>
                        <p class="text-muted">Description Hoax 4</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="frontend/img/hoax.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <h4>HOAX 5</h4>
                        <p class="text-muted">Description Hoax 5</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                        <img src="frontend/img/hoax.jpg" class="img-responsive" alt="">
                    <div class="portfolio-caption">
                        <h4>HOAX 6</h4>
                        <p class="text-muted">Description Hoax 6</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a  href="{{route('hoaxexample.index')}}" class="btn btn-info">See More...</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Report Section -->
    <section id="recent" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Recent Search of Hoax</h2>
                    <a href="{{route('recentreport.index')}}" class="btn btn-info">See More...</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- How Detect Section -->
    <section id="tips">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-heading text-center" style="margin-bottom:40px">How to detect Hoax</h2>
                    
                    <div class="col-lg-4" style="margin-bottom:20px">
                        <img style="width:220px; height:220px" src="frontend/img/checkurl.png">
                        <h3> 1. Check the URL</h3>
                    </div>
                    <div class="col-lg-4" style="margin-bottom:20px">
                        <img style="width:220px; height:220px" src="frontend/img/about-icon.png">
                        <h3> 2. Read the About page</h3>
                    </div>
                    <div class="col-lg-4" style="margin-bottom:20px">
                        <img style="width:220px; height:220px" src="frontend/img/quote.png">
                        <h3> 3. Check the quote</h3>
                    </div>
                    <div class="col-lg-4">
                        <img style="width:220px; height:220px" src="frontend/img/checklink.png">
                        <h3> 4. Check the link inside the pages</h3>
                    </div>
                    <div class="col-lg-4">
                        <img style="width:220px; height:220px" src="frontend/img/reverse.png">
                        <h3> 5. Do reverse image search</h3>
                    </div>
                    <div class="col-lg-4">
                        <img style="width:220px; height:220px" src="frontend/img/calm.jpg">
                        <h3> 6. If it seems so perfect, slow down!</h3>
                    </div>
                    <br>                    
                </div>
            </div>
            
        </div>
    </section>
    
    <!-- About Us Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About Us</h2>
                    
                    <h3 style="margin-bottom:60px">"We concern to prevent the spread of fake news around the world."</h3>
                    
                    <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">M. Hendri Febriansyah</h4>
                    <h4 class="service-heading">5114100036</h4>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Andy Yohanes H</h4>
                    <h4 class="service-heading">5114100064</h4>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Prasetyo Nugrohadi</h4>
                    <h4 class="service-heading">5114100070</h4>
                </div>
                  
                </div>
            </div>
            
        </div>
    </section>
    
    <footer>
        <div class="container" class="bg-light-gray">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; ANOX TEAM 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="{{ asset('/frontend/js/jquery.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/frontend/js/bootstrap.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('/frontend/js/classie.js') }}"></script>
    <script src="{{ asset('/frontend/js/cbpAnimatedHeader.js') }}"></script>
    <!-- Contact Form JavaScript -->
    <script src="{{ asset('/frontend/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/frontend/js/contact_me.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/frontend/js/agency.js') }}"></script>
    {{-- <script>
        function httpGet(theUrl)
        {
            var xmlHttp = new XMLHttpRequest();
            var website = document.getElementById("website").value;
            var send = "website="+website;
            //alert(send);
            xmlHttp.open("GET", theUrl+"?"+website, true); // false for synchronous request
            xmlHttp.send(website);
            return xmlHttp.responseText;
        }
        function getHref()
        {
            var link = ".?website="+document.getElementById("website").value
            location = link;
            return false;
        }
    </script>

    <script>
            $(document).ready(function() {
                // if text input field value is not empty show the "X" button
                $("#field").keyup(function() {
                    $("#x").fadeIn();
                    if ($.trim($("#field").val()) == "") {
                        $("#x").fadeOut();
                    }
                });
                // on click of "X", delete input field value and hide "X"
                $("#x").click(function() {
                    $("#field").val("");
                    $(this).hide();
                });
            });

    </script> --}}
</body>
</html>