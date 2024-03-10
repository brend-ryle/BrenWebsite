<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0deab4da48.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="B.png" class="logo">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="header-text">
                <p>UI/UX Designer </p>
                <h1>Hi, I'm<span> Brendan</span><br> Rylee Francisco</h1>
            </div>
        </div>
    </div>
    <!-- ------------about-------------- -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="B1.jpg">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p> You can call me Bren or Ryle, Im 21 yrs old studying at NU Fairview with the course of Information
                        Technology and this is my 2nd year/sophomore year. My hobbies are playing basketball, online games, 
                        and drawing some art expression using traditional method.</p>

                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                            <p class="tab-links" onclick="opentab('experience')">Experience</p>
                            <p class="tab-links" onclick="opentab('education')">Education</p>
                        </div>
                    
                        <div class="tab-contents active-tab" id="skills">
                            <ul>
                                <li><span>UI/UX</span><br>Designing Web/App Interface</li>
                                <li><span>Web Development</span><br>Web App Development</li>
                                <li><span>App Development</span><br>Building Android/iOS apps</li>
                            </ul>
                        </div>
                    
                        <div class="tab-contents" id="experience">
                            <ul>
                                <li><span>CAT OFFICER</span><br>Citizenship Advancement Training</li>
                                <li><span>SHOOTING GUARD</span><br>High School Varsity Team</li>
                                <li><span>MYTHICAL FIVE</span><br>Internship at ML</li>
                                <li><span>SMALL FORWARD</span><br>Senior High School Varsity Team</li>
                            </ul>
                        </div>
                    
                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>2022 - PRESENT </span><br>(COLLEGE )National University </li>
                                <li><span>2019 - 2021</span><br>(SHS) Lagro High School </li>
                                <li><span>2015 - 2019</span><br> (HS) Saint Vincent Institute of Arts and Sciences </li>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------services-------------- -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-calculator"></i>
                    <h2>Math Tutoring</h2>
                    <p>My expertise is the Mathematical Solutions</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-pencil"></i>
                    <h2>Art Drawing</h2>
                    <p>I excel really good in arts and designs, for example traditional drawing and digital drawings</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-basketball"></i>
                    <h2>Basketball</h2>
                    <p>I can train newbies in basketball for extra allowance for my school.</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    
<!-- ------------portfolio-------------- -->
<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My Work</h1>
        <div class="work-list">
            <div class="work">
                <img src="work1.jpg">
                <div class="layer">
                    <h3>Drawing # 1</h3>
                    <p>This is my drawing that I worked on for about 3 hours</p>
                    <a href="#"><i class="fa-sharp fa-solid fa-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="work2.jpg">
                <div class="layer">
                    <h3>Drawing # 2</h3>
                    <p>This is my drawing that I worked on for about 4 1/2 hours</p>
                    <a href="#"><i class="fa-sharp fa-solid fa-up-right-from-square"></i></a>
                </div>
        </div>
        <div class="work">
            <img src="work3.jpg">
            <div class="layer">
                <h3>Drawing # 3</h3>
                <p>This is my drawing that I worked on during the pandemic</p>
                <a href="#"><i class="fa-sharp fa-solid fa-up-right-from-square"></i></a>
            </div>
    </div>
</div>

<a href="#" class="btn">See More</a>
</div>
</div>
<!-- ------------contact-------------- -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class="fas fa-paper-plane"></i> brendan26frans@gmail.com</p>
                <p><i class="fas fa-square-phone"></i> 09289567937</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/brendan.francisco.5?mibextid=ZbWKwL"  target="_blank" ><i class="fab fa-facebook"></i></a>
                    <a href="https://github.com/brend-ryle"  target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://www.instagram.com/bryle_frans?igsh=MTNzajhyN3ZkNXZqNA=="  target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
                <a href="Brendan.pdf"  target="_blank" download class="btn btn2">Download CV</a>
            </div>

            <div class="contact-right">
                <form>
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="Message" rows="6" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="copyright">
    <p>Copyright © Brendan Rylee Francisco <i class="far fa-hand-peace"></i></p>
</div>



<script src="script.js"></script>
</body>
</html>
