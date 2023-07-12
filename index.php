<!-- index.php -->
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h1>Welcome <?php echo $row["name"]; ?></h1>
  </ody>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content=""
    />

    <!-- Always include this line of code!!! -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="manifest" href="manifest.webmanifest" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="maingeneral.css" />
    <link rel="stylesheet" href="mainstyle.css" />
    <link rel="stylesheet" href="mainqueries.css" />
    <style>
      .hello{
        padding: 1.2rem 2.4rem;
        border-radius: 9px;
        color: #fff;
        background-color: #e67e22;
        font-weight:800;
        font-size:13px
      }
      .logo{
        width:80px;
        height: 80px;
      }
    </style>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>

    <script
      defer
      src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"
    ></script>
    <script defer src="mainscript.js"></script>

    <title>Sign Language Detection &mdash;</title>
  </head>
  <body>
    <header class="header">
        <img class="logo" alt="Sign Language Detection" src="Logo.png" />

      <nav class="main-nav">
        <ul class="main-nav-list">
          <li><a class="main-nav-link" href="#how">About Us</a></li>
          <li><a class="main-nav-link" href="#meals">Features</a></li>
          <li>
            <a class="main-nav-link" href="#testimonials">Testimonials</a>
          </li>
          <li><a class="main-nav-link" href="#pricing">Learn</a></li>
          <!-- <li><a class="main-nav-link nav-cta" href="#cta">Sign Up</a></li> -->
          <a class="hello" href="logout.php">Logout</a>

        </ul>
      </nav>

      <button class="btn-mobile-nav">
        <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
      </button>
    </header>

    <main>
      <section class="section-hero">
        <div class="hero">
          <div class="hero-text-box">
            <h1 class="heading-primary">
              SignARity
            </h1>
            <p class="hero-description">
            
              Our goal is to break down barriers for non-verbal communicators. to have the experience of voice to voice conversation. We believe everyone has an opinion and opportunities should be for all.
            </p>
            <a href="indexAR.php" class="btn btn--full margin-right-sm">Start Training</a>
            >

            <a href="#how" class="btn btn--outline">Learn more &darr;</a>
            <div class="delivered-meals">

              <p class="delivered-text">
                <span>250,000+</span> people tried it last year!
              </p>
            </div>
          </div>
          <div class="hero-img-box">


              <img
                src="pexels-cottonbro-studio-6321925 (1).png"
                class="hero-img"
                alt="Woman "
              />
            
          </div>
        </div>
      </section>
      
      <!-- <section class="section-featured">
        <div class="container">
          <h2 class="heading-featured-in">As featured in</h2>
          <div class="logos">
            <img src="img/logos/techcrunch.png" alt="Techcrunch logo" />
            <img
              src="img/logos/business-insider.png"
              alt="Business Insider logo"
            />
            <img
              src="img/logos/the-new-york-times.png"
              alt="The New York Times logo"
            />
            <img src="img/logos/forbes.png" alt="Forbes logo" />
            <img src="img/logos/usa-today.png" alt="USA Today logo" />
          </div>
        </div>
      </section> -->

      <section class="section-how" id="how">
        <div class="container">
          <span class="subheading">About us </span>
          <h2 class="heading-secondary">
            We are inspired to augmented reality to create an experience for those who are hearing and speech impaired to be able to communicate via video and text.
          </h2>
        </div>

        <div class="container grid grid--2-cols grid--center-v">
          <!-- STEP 01 -->
          <div class="step-text-box">
            <p class="step-number">01</p>
            <h3 class="heading-tertiary">
              Try Our AI Model
            </h3>
            <p class="step-description">
              AI-based sign language recognition systems can accurately recognize and translate sign language into text, making communication more accessible for people who are deaf or disabled.
            </p>
          </div>

          <div class="step-img-box">
            <img
              src="pexels-kevin-malik-9017018 (1).jpg"
              class="step-img"
              alt="iPhone app
            preferences selection screen"
            />
          </div>

          <!-- STEP 02 -->
          <div class="step-img-box">
            <img
              src="pexels-shvets-production-7516363.png"
              class="step-img"
              alt="iPhone app
            meal approving plan screen"
            />
          </div>
          <div class="step-text-box">
            <p class="step-number">02</p>
            <h3 class="heading-tertiary">Augmented Reality</h3>
            <p class="step-description">
             AR is used to translate text into a Real-Time 3-D Model which helps to explain the gestures and hand movements. It allows the user to learn Sign Language so that they could communicate with the deaf or disabled with ease.
            </p>
          </div>

          <!-- STEP 03 -->
          <div class="step-text-box">
            <p class="step-number">03</p>
            <h3 class="heading-tertiary">Implement</h3>
            <p class="step-description">
            Our technology has the potential to significantly improve the way sign language is taught and communicated. By making it easier for people to learn and understand sign language, SignARity can help bridge the communication gap between the deaf and hearing communities.
            </p>
          </div>
          <div class="step-img-box">
            <img
              src="https://images.pexels.com/photos/10031280/pexels-photo-10031280.jpeg?auto=compress&cs=tinysrgb&w=800"
              class="step-img"
              alt="iPhone app
            delivery screen"
            />
          </div>
        </div>
      </section>

      <section class="section-meals" id="meals">
        <div class="container center-text">
          <span class="subheading" ><u>Features</u></span>
          <h2 class="heading-secondary">
            
          </h2>
        </div>

        <div class="container grid grid--3-cols margin-bottom-md">
          <div class="meal">
            <img
              src="https://images.pexels.com/photos/7869248/pexels-photo-7869248.jpeg?auto=compress&cs=tinysrgb&w=800"
              class="meal-img"
              alt="Japanese Gyozas"
            />
            <div class="meal-content">
              <div class="meal-tags">
                <span class="tag tag--vegetarian" ></span>
              </div>
              <p class="meal-title">Augmented reality</p>
              <ul class="meal-attributes">
                <li class="meal-attribute">
                  
                  <ul>Multi-modal communication</ul>
                
                <li class="meal-attribute">
                  <ul>Personalization</ul>
                </li>
                <li class="meal-attribute">
                  
                  <ul>Immersive Experience</ul>
                </li>
              </ul>
            </div>
          </div>

          <div class="meal">
            <img
              src="https://images.pexels.com/photos/3913025/pexels-photo-3913025.jpeg?auto=compress&cs=tinysrgb&w=800"
              class="meal-img"
              alt="Avocado Salad"
            />
            <div class="meal-content">
              <div class="meal-tags">
                <span class="tag tag--vegan"></span>
                <span class="tag tag--paleo"> </span>
              </div>
              <p class="meal-title">AIML</p>
              <ul class="meal-attributes">
                <li class="meal-attribute">
                  
                  <ul>Gesture Recognition</ul>
                </li>
                <li class="meal-attribute">
                  <ul>Real-time interpretation</ul>
                </li>
                <li class="meal-attribute">
                  
                  <ul>Continuous learning</ul>
                </li>
              </ul>
            </div>
          </div>

          <div class="diets">
            <h3 class="heading-tertiary">Applications</h3>
            <ul class="list">
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Accessibilty</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Educatiom</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Healthcare</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Entertainment</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Telecommunications</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Translation</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Assistive Technology</span>
              </li>

              </li>
            </ul>
          </div>
        </div>

        <div class="container all-recipes">
          <a href="#" class="link">Go Top &rarr;</a>
        </div>
      </section>

      <section class="section-testimonials" id="testimonials">
        <div class="testimonials-container">
          <span class="subheading">Testimonials</span>
          <h2 class="heading-secondary">Once you try it, you can't go back</h2>

          <div class="testimonials">
            <figure class="testimonial">
              <img
                class="testimonial-img"
                alt=""
                src=""
              />
              <blockquote class="testimonial-text">
                One of the best Websites to learn American and Indian Sign Language both at the same Time.
                 Cheers to the team
              </blockquote>
              <p class="testimonial-name">&mdash; Dave Bryson</p>
            </figure>

            <figure class="testimonial">
              <img
                class="testimonial-img"

              />
              <blockquote class="testimonial-text">
                A Friend Recommended this website and its a total success, was able to learn sign language with their AI model very easy.
              </blockquote>
              <p class="testimonial-name">&mdash; Ben Hadley</p>
            </figure>

            <!-- <figure class="testimonial">
              <img
                class="testimonial-img"
                alt="Photo of customer Steve Miller"
                src="img/customers/steve.jpg"
              />
              <blockquote class="testimonial-text">
                Omnifood is a life saver! I just started a company, so there's
                no time for cooking. I couldn't live without my daily meals now!
              </blockquote>
              <p class="testimonial-name">&mdash; Steve Miller</p>
            </figure>

            <figure class="testimonial">
              <img
                class="testimonial-img"
                alt="Photo of customer Hannah Smith"
                src="img/customers/hannah.jpg"
              />
              <blockquote class="testimonial-text">
                I got Omnifood for the whole family, and it frees up so much
                time! Plus, everything is organic and vegan and without plastic.
              </blockquote>
              <p class="testimonial-name">&mdash; Hannah Smith</p>
            </figure> -->
          </div>
        </div>

        <div class="gallery">
          <figure class="gallery-item">
            <img
              src="https://images.pexels.com/photos/4629625/pexels-photo-4629625.jpeg?auto=compress&cs=tinysrgb&w=800"
              alt="Photo"
            />
            <!-- <figcaption>Caption</figcaption> -->
          </figure>
          <figure class="gallery-item">
            <img
              src="https://images.pexels.com/photos/4629624/pexels-photo-4629624.jpeg?auto=compress&cs=tinysrgb&w=800"
              alt="Photo"
            />
          </figure>
          <figure class="gallery-item">
            <img
              src="https://images.pexels.com/photos/4629633/pexels-photo-4629633.jpeg?auto=compress&cs=tinysrgb&w=800"
              alt="Photo"
            />
          </figure>
          <figure class="gallery-item">
            <img
              src="https://images.pexels.com/photos/4629626/pexels-photo-4629626.jpeg?auto=compress&cs=tinysrgb&w=800"
              alt="Photo"
            />
          </figure>
          <figure class="gallery-item">
            <img
              src="https://images.pexels.com/photos/4629623/pexels-photo-4629623.jpeg?auto=compress&cs=tinysrgb&w=800"
              alt="Photo"
            />
          </figure>
          <figure class="gallery-item">
            <img
              src="https://images.pexels.com/photos/4629622/pexels-photo-4629622.jpeg?auto=compress&cs=tinysrgb&w=800"
              alt="Photo"
            />

        </div>
      </section>
      
      <section class="section-pricing" id="pricing">
        <div class="container">
          <span class="subheading">Learn</span>
          <h2 class="heading-secondary">
            Test Yourself Here
          </h2>
        </div>

        <div class="container grid grid--2-cols margin-bottom-md">
          <div class="pricing-plan pricing-plan--starter">
            <header class="plan-header">
              <p class="plan-name">Communicate</p>
              <p class="plan-price"><span></span>Machine Learning Model</p>
              <p class="plan-text"></p>
            </header>
            <ul class="list">
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Real Time Recognition</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>InceptionV3</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Gestures, ASL, ISL</span>
              </li>
  
            </ul>
            <div class="plan-sing-up">
              <a class="btn btn--full" href="http://localhost:3000/" >Open Camera</a>
            </div>
          </div>

          <div class="pricing-plan pricing-plan--complete">
            <header class="plan-header">
              <p class="plan-name">Learn ASL, ISL</p>
              <p class="plan-price"><span></span>Augmented Reality</p>
              <p class="plan-text"></p>
            </header>
            <ul class="list">
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span><strong></strong>Marker-Based AR Model </span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Text to AR</span>
              </li>
              <li class="list-item">
                <ion-icon class="list-icon" name="checkmark-outline"></ion-icon>
                <span>Interactive AR Experience</span>
              </li>

            </ul>
            <div class="plan-sing-up">
              <a href="indexAR.php" class="btn btn--full">Open Sign AR</a>
            </div>
          </div>
        </div>

        <!-- <div class="container grid grid--4-cols">
          <div class="feature">
            <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
            <p class="feature-title">Never cook again!</p>
            <p class="feature-text">
              Our subscriptions cover 365 days per year, even including major
              holidays.
            </p>
          </div>
          <div class="feature">
            <ion-icon class="feature-icon" name="nutrition-outline"></ion-icon>
            <p class="feature-title">Local and organic</p>
            <p class="feature-text">
              Our cooks only use local, fresh, and organic products to prepare
              your meals.
            </p>
          </div>
          <div class="feature">
            <ion-icon class="feature-icon" name="leaf-outline"></ion-icon>
            <p class="feature-title">No waste</p>
            <p class="feature-text">
              All our partners only use reusable containers to package all your
              meals.
            </p>
          </div>
          <div class="feature">
            <ion-icon class="feature-icon" name="pause-outline"></ion-icon>
            <p class="feature-title">Pause anytime</p>
            <p class="feature-text">
              Going on vacation? Just pause your subscription, and we refund
              unused days.
            </p>
          </div> 
        </div>
      </section>-->

        <!-- <section class="section-cta" id="cta">
          <div class="container">
            <div class="cta">
              <div class="cta-text-box">
                <h2 class="heading-secondary">Try Us </h2>
                <p class="cta-text">
                  SignUp for a better Experience
                </p>

                <form class="cta-form" name="sign-up" action="page1.php" method="POST">
                  <div>
                    
                    <tr>
                      <td>
                      <label>Enter First Name</label></td>
                      <td><input type="text" name="first_name"></td>
                    </tr>
                  </div>
                  <div>
                    <tr>
                      <td>
                      <label>Enter Email</label></td>
                      <td><input type="email" name="email"></td>
                    </tr>
                  </div>
                  <div>
                    <tr>
                      <td>
                      <label>Enter Phone</label></td>
                      <td><input type="phone" name="phone"></td>
                    </tr>
                  </div> -->

<!-- 
                  <div>
                    <label for="select-where">Where did you hear from us?</label>
                    <select id="select-where" name="select-where" required>
                      <option value="">Please choose one option:</option>
                      <option value="friends">Friends and family</option>
                      <option value="youtube">YouTube video</option>
                      <option value="podcast">Podcast</option>
                      <option value="ad">Facebook ad</option>
                      <option value="others">Others</option>
                    </select>
                  </div> -->


                  <!-- <input type="checkbox" />
                  <input type="number" />  -->
                <!-- </form>
              </div>
              <button class="btn btn-danger" type="submit" name="save" value="Submit"><a href="page2.php">Sign up now</a></button> -->

              <!-- <div
                class="cta-img-box"
                role="img"
                aria-label="Woman enjoying food"
              ></div> -->
            <!-- </div>
          </div>
        </section>
    </main> -->

    <footer class="footer">
      <div class="container grid grid--footer">
        <div class="logo-col">
          <a href="#" class="footer-logo">
          <img class="logo" alt="Sign Language Detection" src="Logo.png" />
          </a>

          <ul class="social-links">
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-instagram"></ion-icon
              ></a>
            </li>
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-facebook"></ion-icon
              ></a>
            </li>
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-twitter"></ion-icon
              ></a>
            </li>
          </ul>

          <p class="copyright">
            Copyright &copy; <span class="year">2027</span> by Sign Language, Inc.
            All rights reserved.
          </p>
        </div>

        <div class="address-col">
          <p class="footer-heading">Contact Us</p>
          <address class="contacts">
            <p class="address">
              Symbiosis Institute of Technology
            </p>
            <p>
              <a class="footer-link" href="tel:415-201-6370">415-201-6370</a
              ><br />
              <a class="footer-link" href="https://mail.google.com/mail/u/0/#inbox"
                >pkpn@gmail.com</a
              >
            </p>
          </address>
        </div>

        <nav class="nav-col">
          <p class="footer-heading">Account</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">Create account</a></li>
            <li><a class="footer-link" href="#">Sign in</a></li>
            <li><a class="footer-link" href="#">iOS app</a></li>
            <li><a class="footer-link" href="#">Android app</a></li>
          </ul>
        </nav>

        <nav class="nav-col">
          <p class="footer-heading">Company</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">About Us</a></li>
            <li><a class="footer-link" href="#">For Business</a></li>
            <li><a class="footer-link" href="#">Partners</a></li>
            <li><a class="footer-link" href="#">Careers</a></li>
          </ul>
        </nav>

        <nav class="nav-col">
          <p class="footer-heading">Resources</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">Directory </a></li>
            <li><a class="footer-link" href="#">Help center</a></li>
            <li><a class="footer-link" href="#">Privacy & terms</a></li>
          </ul>
        </nav>
      </div>
    </footer>

  </body>
</html>



