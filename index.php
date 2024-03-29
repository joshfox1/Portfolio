<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Fargo Web Development, Fargo Web Dev, FargoWebDev, Web Development, Website Development, FoxWebDev, Fox Web Dev, Fox Web Development">
    <meta name="description" content="Website Development, Freelancer, Portfolio, FoxWebDev">

    <meta name="author" content="Josh Fox">


    <title>Fox Web Dev | Web Development</title>

    <script src="https://kit.fontawesome.com/d0f5647036.js"></script>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1100px" href="/css/widescreen.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="/css/mobile.css">
    <link rel="stylesheet" media="screen and (max-width: 325px" href="/css/smallest.css">

</head>
<body>
    <div class="container">

        <!-- Mobile Hamburger Navigation Menu -->
<div class="mobile-nav">
            <nav  role="navigation">
                <div id="menuToggle">
                  <!--
                  A fake / hidden checkbox is used as click reciever,
                  so you can use the :checked selector on it.
                  -->
                  <input type="checkbox" />
                  
                  <!--
                  Some spans to act as a hamburger.
                  
                  They are acting like a real hamburger,
                  not that McDonalds stuff.
                  -->
                  <span></span>
                  <span></span>
                  <span></span>
                  
                  <!--
                  Too bad the menu has to be inside of the button
                  but hey, it's pure CSS magic.
                  -->
                  <ul id="menu">
                    <a href="#home"><li>Home</li></a>
                    <a href="#about"><li>About</li></a>
                    <a href="#projects"><li>Projects</li></a>
                    <a href="#contact"><li>Contact</li></a>
                  </ul>
                </div>
              </nav>
</div>
              <!-- Desktoo and widescreen nav bar -->

        <nav class="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <section id="home">
            
                    <h1>I Am Josh Fox The
                        <span class="txt-type" data-wait="3000" data-words='["Developer", "Programmer", "Freelancer", "App Creator"]'></span>
                    </h1>
                    <h2>Web Developer, Programmer, App Creator, & Entrepreneur</h2>
                
        </section>

        <section id="about">
            <div class="box-left">
                <div class="picture-box"></div>
                <div class="paragraph-box">
                    <p>Hello! My name is Josh. I am a self-taught Web Developer from Fargo, ND. When I am not working I enjoy things like traveling, camping, and eating at our local Food Trucks. I am knowledgable in front-end Web Development, and am currently studying App Development and Java.
                    </p>
                </div>
            </div>
            
            <div class="box-right"> 
            
                <div>
                    <h2>My Skills</h2>
                </div>
            
                <div>
                    <p class="wide">HTML 5</p>
                    <div class="back skillbar clearfix" data-percent="80%">
                        <div class="skill skillbar-bar" style="height:28px;width:0%;">80%</p></div>
                    </div>
                </div>
            
                <div>
                    <p class="wide">CSS 3</p>
                    <div class="back skillbar clearfix" data-percent="70%">
                        <div class="skill skillbar-bar" style="height:28px;width:0%;">70%</div>
                    </div>
                </div>
                
                <div>
                    <p class="wide">Javascript</p>
                    <div class="back skillbar clearfix" data-percent="40%">
                        <div class="skill skillbar-bar" style="height:28px;width:0%">40%</div>
                    </div>
                </div>
                
                <div>
                    <p class="wide">App Development</p>
                    <div class="back skillbar clearfix" data-percent="30%">
                        <div class="skill skillbar-bar" style="height:28px;width:0%">30%</div>
                    </div>
                </div>

                <div>
                    <p class="wide">Java</p>
                    <div class="back skillbar clearfix" data-percent="10%">
                        <div class="skill skillbar-bar" style="height:28px;width:0%">10%</div>
                    </div>
                </div>
                
            </div>    
        </section>

        <section id="projects">
            <div class="projects-title">
                <div>
                    <h2>MY <span>Work</span></h2>
                </div>
                <div>
                    <p>Check out some of my work...</p>    
                </div>
            </div>
        
            <div class="center-showcase">

            <div class="projects-showcase">

                <div class="item-1">
                    <div class="box1"></div>
                    <a href="https://joshfox1.github.io/ModellasCoffee/#menu" class="btn btn-light">
                        <i class="fas fa-eye"></i>Project
                    </a>

                    <a href="https://github.com/joshfox1/ModellasCoffee" class="btn btn-dark">
                        <i class="fab fa-github"></i>Github
                    </a>
                </div>

                <div class="item-2">
                    <div class="box"></div>
                    <a href="#" class="btn btn-light">
                        <i class="fas fa-eye"></i>Project
                    </a>

                    <a href="#" class="btn btn-dark">
                        <i class="fab fa-github"></i>Github
                    </a>
                </div>
                
                <div class="item-3">
                    <div class="box"></div>
                    <a href="#" class="btn btn-light">
                        <i class="fas fa-eye"></i>Project
                    </a>

                    <a href="#" class="btn btn-dark">
                        <i class="fab fa-github"></i>Github
                    </a>
                </div>
                
                <div class="item-4">
                    <div class="box"></div>
                    <a href="#" class="btn btn-light">
                        <i class="fas fa-eye"></i>Project
                    </a>

                    <a href="#" class="btn btn-dark">
                        <i class="fab fa-github"></i>Github
                    </a>
                </div>

                <div class="item-5">
                    <div class="box"></div>
                    <a href="#" class="btn btn-light">
                        <i class="fas fa-eye"></i>Project
                    </a>

                    <a href="#" class="btn btn-dark">
                        <i class="fab fa-github"></i>Github
                    </a>
                </div>

                <div class="item-6">
                    <div class="box"></div>
                    <a href="#" class="btn btn-light">
                        <i class="fas fa-eye"></i>Project
                    </a>

                    <a href="#" class="btn btn-dark">
                        <i class="fab fa-github"></i>Github
                    </a>
                </div>
                
            </div>

        </div>

        </section>

        <section id="contact">
            <div class="contact-title">
               <h1> Contact Me</h1>
            </div>

            <div class="contact-form">
                <form id="contact-form" method="post"  action="process.php">

                    <input name="name" type="text" class="form-control" placeholder="Your Name..." required>
                    <br>
                    <input name="email" type="email" class="form-control" placeholder="Your Email..." required>
                    <br>
                    <textarea name="message" class="form-control" placeholder="Message..." rows="4" required></textarea>
                    <br>
                    <input type="submit" class="form-control submit" value="Send Message">

                </form>
            </div>

        </section>

    </div>


    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="main.js"></script>    

</body>
</html>