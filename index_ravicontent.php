<?php 
if(isset($_POST['submit'])){
    $to = "ravi292008@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //	echo "alert('Mail Sent. Thank you " . $name . ", we will contact you shortly.')";
    echo "<script type='text/javascript'>alert('Mail Sent. Thank you " . $name . ", we will contact you shortly.');</script>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Zunelo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Zunelo Demo Page" name="keywords">
    <meta content="Zunelo Demo Page" name="description">

    <!-- Favicon -->
    <link href="img/sampleLogo1.png" rel="icon" width="50">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
    
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <section class="hero">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <a class="hero-brand" href="index.html" title="Home"><img style="max-width: 33%;" class="img-responsive" alt="zunelo Logo" src="img/zunelo.png"></a>
          </div>
           <div class="col-md-4"></div>
        </div>

        <div class="col-md-12">
          <h1>
           Salesforce Solutions that meet your needs
          </h1>

          <p class="tagline">
            zunelo offers you the only full featured solution that meets every sales team’s needs – from prospecting to lead engagement.</p>
          <a class="btn btn-full" href="#about">Know Us</a>
        </div>
      </div>
    </section>
    
  <!-- Header -->
  <header id="header">
    <div class="container">
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#about">Home</a></li>
          <li><a href="#solutions">Solutions</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#resources">Resources</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
      
      <nav class="nav social-nav pull-right hidden-sm-down">
         <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
      </nav>
    </div>
  </header><!-- #header -->
  
    <!-- About -->

    <section class="about" id="about">
      <div class="container text-center">
        <h2>
          About Us
        </h2>

        <p>
         Zunelo is a team of passionate IT professionals with two decades of experience in consulting that covers the entire lifecycle of a software implementation process. We perform business analysis and complete requirement gathering to device a development approach for a tailored solution that meets our client's individual needs. We have extensive expertise in working with many fortune 500 global clients on different levels from small projects all the way up to long-term implementation cycles.
        </p>
        <p>
          As Stephen Hawking said "Intelligence is the ability to adapt to change" and we have leveraged our extensive application development experience in order to deliver best in class solutions on latest technology platforms like SalesForce, JAVA/JEE Development, cloud based solutions and Big Data analytics. 
        </p>

        <div class="row stats-row">
          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">232</span> Satisfied Customers
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">79</span> Released Projects
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">1,463</span> Hours Of Support
            </div>
          </div>

          <div class="stats-col text-center col-md-3 col-sm-6">
            <div class="circle">
              <span class="stats-no" data-toggle="counter-up">15</span> Hard Workers
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /About -->
    <!-- solutions -->

    <section class="features" id="solutions">
      <div class="container">
        <h2 class="text-center">
          Solutions
        </h2>

        <div class="row">
          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-rocket"></span>
                </div>
              </div>

              <div>
                <h3>
                  Custom Design
                </h3>

                <p>
                  A...B...C...
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-envelope"></span>
                </div>
              </div>

              <div>
                <h3>
                  Responsive Layout
                </h3>

                <p>
                A...B...C...
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-bell"></span>
                </div>
              </div>

              <div>
                <h3>
                  Innovative Ideas
                </h3>

                <p>
                   A...B...C...
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-database"></span>
                </div>
              </div>

              <div>
                <h3>
                  Good Documentation
                </h3>

                <p>
                    A...B...C...
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-cutlery"></span>
                </div>
              </div>

              <div>
                <h3>
                  Excellent Features
                </h3>

                <p>
                    A...B...C...
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <span class="fa fa-dashboard"></span>
                </div>
              </div>

              <div>
                <h3>
                  Retina Ready
                </h3>

                <p>
                    A...B...C...
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Solutions -->

    <!-- services -->
    <section class="portfolio" id="services">
      <div class="container text-center">
        <h2>
          Services
        </h2>

        <p>
         The key to getting the project done on time and within budget is a carefully constructed implementation plan. We develop a professional, proactive, and collaborative partnership with our clients with a thorough project management methodology to ensure a successful implementation.
         Zunelo specializes in software development and software services. Our comprehensive service  includes:
        </p>
      </div>

      <div class="portfolio-grid">
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img alt="" src="img/services/technology.jpg">
                
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Salesforce Customization
                  </h3>

                  <p class="card-text">
                   We  have extensive expertise with Salesforce CRM and Force.com. Zunelo enables you to maximize returns from your investment in Salesforce.com and reap the rewards of successful customer relationship management and Salesforce automation. We ensure greater client satisfaction and provide best user experience through best-in-class UI/UX team at Zunelo.
                  </p>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img alt="" src="img/services/mouse.jpg">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Java/JEE Software Development
                  </h3>

                  <p class="card-text">
                   Zunelo offers exceptional Java/JEE programming services to meet your enterprise, web and mobile application development needs. Our application development service is scalable and easy to implement. We have skilled and experienced developers with years of experience in developing robust cross platform based applications. Our team stays current with the latest trends and developments in various technologies to offer the best business solutions for your needs. We have vast experience in working with global clients and also offer an onshore and  offshore model.
                  </p>
                </div>
              </div></a>
            </div>
          </div>
             <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img alt="" src="img/services/macbook.jpg">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    System Integrations Services
                  </h3>

                  <p class="card-text">
                    Organizations are hesitant to replace their legacy systems even with the proliferation of newer technologies, both faster hardware and new generation software. The reason for this is very simple; their systems have been running for so long and many companies are anxious to substitute them for various reasons. The reason for the hesitation stems from an aversion to change and an anxiety about using unknown technology or software, and avoiding an increase in operating costs.

				When the decision is made for your organization or company to replace your legacy system with a new system, we will work in tandem with you as a partner, offering continuous support.Since synchronization is crucial during the process of integration, specific client requirements such as search and throughput times etc must be met.   It is a challenge during the transaction processing to achieve specific standards or norms, as heterogeneous technologies, by their very nature being incompatible, must now work together.

                  </p>
                </div>
              </div></a>
            </div>
          </div>
        </div>

        <div class="row">
           <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img alt="" src="img/services/ipad.jpg">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Database Design Development
                  </h3>

                  <p class="card-text">
                    Zunelo has a team of committed database developers and application programmers with extensive domain knowledge.. At Zunelo, we recognize that each business has its own growth potential that can be hampered by specific limitations and challenges.  As a consequence, we work closely with you to understand your current needs, as well as to anticipate your needs in the future, before developing any solution
                  </p>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img alt="" src="img/services/ipad2.jpg">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Big Data 
                  </h3>

                  <p class="card-text">
                    Data generation is increasing exponentially in volume, variety and complexity, due to the evolution and proliferation of data channels and devices.At Zunelo, we understand the importance of addressing Big Data challenges in order to manage data from various sources.  Through the implementation of specific technologies, help with the aggregation, integration and validation of data will provide meaningful insights as well as real-time business value.

Our expertise in Big Data technology implementation allows companies to focus on the maximization of revenue, as well as improving operational efficiencies. 
Our broad spectrum of Big Data services cover consulting, implementing, big data service providers and supporting services.

                  </p>
                </div>
              </div></a>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="card card-block">
              <a href="#"><img alt="" src="img/services/man.jpg">
              <div class="portfolio-over">
                <div>
                  <h3 class="card-title">
                    Code Review
                  </h3>

                  <p class="card-text">
                    A..B..C..
                  </p>
                </div>
              </div></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Services -->
    <!-- resources -->

    <section class="team" id="resources">
      <div class="container">
        <h2 class="text-center">
          Resources
        </h2>
        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="img/team1.jpeg">
              <div class="card-title-wrap">
                <span class="card-title">ABC</span> <span class="card-text">UI Developer</span>
              </div>
              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>
                <nav class="social-nav">
                   <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>
                <p></p>
              </div></a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="img/team1.jpeg">
              <div class="card-title-wrap">
                <span class="card-title">XYZ</span> <span class="card-text">Dot Net Developer</span>
              </div>
              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>
                <nav class="social-nav">
                   <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>
                <p></p>
              </div></a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="img/team1.jpeg">
              <div class="card-title-wrap">
                <span class="card-title"> ABC</span> <span class="card-text">Java Developer</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>
                <nav class="social-nav">
                   <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>
                <p></p>
              </div></a>
            </div>
          </div>

          <div class="col-sm-3 col-xs-6">
            <div class="card card-block">
              <a href="#"><img alt="" class="team-img" src="img/team1.jpeg">
              <div class="card-title-wrap">
                <span class="card-title"> XYZ</span> <span class="card-text">SAP Consultant</span>
              </div>
              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>
                <nav class="social-nav">
                   <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-envelope"></i></a>
                </nav>
                <p></p>
              </div></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /resources -->
    <!-- @component: footer -->

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-5 text-center">
            <h2 class="section-title">Contact Us</h2>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-lg-5 text-center">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="contact.php" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit" name="submit" value="Submit">Send Message</button></div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </section>
      
    <footer class="site-footer">
      <div class="bottom">
        <div class="container">
          <div class="row">

            <div class="col-lg-6 col-xs-12 text-lg-left text-center"></div>
            
            <div class="col-lg-6 col-xs-12 text-lg-right text-center">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#about">Home</a>
                </li>

                <li class="list-inline-item">
                  <a href="#solutions">Solutions</a>
                </li>

                <li class="list-inline-item">
                  <a href="#services">Services</a>
                </li>

                <li class="list-inline-item">
                  <a href="#resources">Resources</a>
                </li>

                <li class="list-inline-item">
                  <a href="#contact">Contact Us</a>
                </li>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
    <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>
     <!-- JavaScript-->

    <!-- Required JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/tether/js/tether.min.js"></script>
    <script src="lib/stellar/stellar.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/easing/easing.js"></script>
    <script src="lib/stickyjs/sticky.js"></script>
    <script src="lib/parallax/parallax.js"></script>
    <script src="lib/lockfixed/lockfixed.min.js"></script>
    
    <!-- Template Specisifc Custom Javascript File -->
    <script src="js/custom.js"></script>
    
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>