<?php 
$title = 'Home';
session_start();
include_once('components/navbar.php');
require_once 'contactform/security.php';

$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>

    <!--==========================
    Home Section
  ============================-->
    <!--<div class="back-color-animation">-->
    <div>
        <section id="hero" class="wow fadeIn">
            <div class="hero-container">
                <div class="container">
                    <h1>Welcome to WDDTechnologies</h1>
                    <h2 style="color: white;">Looking to Create a Website, Mobile App or Need a Host, 
                    Checkout my FreeLancers and Hosting.</h2>
                    <div class="list-inline">
                        <div class="list-inline-item">
                            <a href="freelancer.php" class="btn-get-started scrollto" aria-label="Freelancepage">FreeLancers</a>
                        </div>
                        <div class="list-inline-item">
                            <a href="hosting.php" class="btn-get-started2 scrollto" aria-label="HostingPage">Hosting</a>
                        </div>
                    </div>
                    <div class="btns">
                        <a href="https://www.linkedin.com/in/wddtechnologies/" aria-label="LinkedIn" rel="noreferrer" target="_blank" style="color: white;"><i class="fa fa-linkedin hero-icons"></i></a>
                        <a href="https://www.facebook.com/louise.rennick.9" aria-label="Facebook" rel="noreferrer" target="_blank" style="color: white;"><i class="fa fa-facebook hero-icons"></i></a>
                    </div>
                </div>
            </div>
            <!--container-->
        </section><!-- #hero -->

    </div>
    <!--background gradient color animation-->
    <!--Home Section-->


    <!--==========================
    About us Section
  ============================-->

    <section id="about" class="padd-section wow fadeInUp">
        <div class="container">
            <div class="section-title text-center">
                <h2>What We Do</h2>
                <p>At WDDTechonologies we create websites and web apps that have <b>Responsive Desgin</b>, 
                    <b>User Friendly</b> touches and <b>SEO</b> that targets perfection. Our clients are always happy with
                    what they get. Looking for a specialist in either Web or Mobile developement? Check out my <a href="freelancer.php" rel="noreferrer" aria-label="FreelancePage">Freelancers.</a>
                    </p>
            </div>

            <div class="justify-content-center">
                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <img src="img/Ceo/Miss.webp" alt="Founder Image"
                            style="background-size: contain; 
                            background-repeat: no-repeat;
                            width: 200px; 
                            height: 200px;
                            float: left; 
                            padding-right: 50px;
                            object-fit: cover;
                            " />
                        <div class="card-title">
                            <h4>Louise Rennick - Founder</h4>
                        </div>
                        <div class="card-text">
                            <p>Louise Rennick is a Web Specialist with a diploma in Web Technologies. 
                            After graduating from triOS College in 2008 she ventured out as an Entrepreneur 
                            opening up her own company named WDDTechnologies. Creating multiple websites for 
                            her clients around the GTA. A few years later Louise joined 
                            the technology team at triOS College, and started teaching at the 
                            Mississauga Campus in 2012. She has since changed countless lives with 
                            her teaching and excellent character.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About us Section-->

    <!--==========================
    Contact Section
  ============================-->
    <section id="contact" class="padd-section wow fadeInUp" style="background: lightgrey;">

        <div class="container">
            <div class="section-title text-center">
                <h2>Contact</h2>
                <p class="separator">Fill out the form to set up a meeting or get a quote.</p>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-3 col-md-4">

                    <div class="info">
                        <div class="email">
                            <a href="#" aria-label="email">
                                <i class="fa fa-envelope"></i>
                                <p>info@example.com</p>
                            </a>
                        </div>

                        <div>
                            <a href="tel:5192153340" aria-label="Phone">
                                <i class="fa fa-phone"></i>
                                <p>(519) 215 - 3340</p>
                            </a>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="https://www.facebook.com/louise.rennick.9" aria-label="Facebook" rel="noreferrer" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/wddtechnologies/" aria-label="LinkedIn" rel="noreferrer" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-5 col-md-8">
                    <div class="form">
                        <div id="mymessage" style="color: #1c58c7; border: 1px solid #1c58c7; text-align: center; 
                        padding: 15px; font-weight: 600; margin-bottom: 15px; display: none;">
                            Your message has been sent. Thank you!
                        </div>
                        <div id="myerrormessage" style="color: red; border: 1px solid red; text-align: center; 
                        padding: 15px; font-weight: 600; margin-bottom: 15px; display: none;">
                            Please make sure all fields are filled out!
                        </div>
                        <form action="contactform/contactSubmit.php" method="post" class="contactForm">
                            <div class="form-group">
                                <input type="text" required name="name" class="form-control" id="name" placeholder="Your Name" 
                                minlength="4"
                                    <?php echo isset($fields['name']) ? '' : ''?>>
                            </div>

                            <div class="form-group">
                                <input type="email" required class="form-control" name="email" id="email"
                                    placeholder="Your Email"
                                    <?php echo isset($fields['email']) ? '' : ''?>>
                            </div>

                            <div class="form-group">
                                <input type="text" required class="form-control" name="subject" id="subject"
                                    placeholder="Subject"
                                    <?php echo isset($fields['subject']) ? '' : ''?>>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" required name="message" rows="5" placeholder="Message" id="message"><?php echo isset($fields['message']) ? '' : ''?></textarea>
                            </div>

                            <div class="text-center"><button id="btn" name="submit" onclick="test()" type="submit" aria-label="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #contact -->
    <!--testing-->
    <script>
        function test(){
        var name = document.getElementById('name');
        var email = document.getElementById('email');
        var subject = document.getElementById('subject');
        var message = document.getElementById('message');
            if(name.value != '' && email.value != '' && subject.value != '' && message.value != ''){
                document.getElementById("mymessage").style.display = "block"; 
                document.getElementById("myerrormessage").style.display = "none"; 
            }else{
                document.getElementById("mymessage").style.display = "none";
                document.getElementById("myerrormessage").style.display = "block"; 
            }
        }
    </script>
<?php 
    include_once('components/footer.php'); 
    unset($_SESSION['fields']);
?>
   