<?php

if($_POST["submit"]) {
    $recipient="royzhang7603@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exalton</title>
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script defer src="/js/index.js"></script>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
</head>

<body>
    <div class="bg-nav">
    <nav>
        <a id="link" href="html/about.html">About</a>
        <a id="link" href="html/product.html">Product</a>
        <a href="#">
        <img class="nav-icon" src="images/logo.svg" alt="logo">
        </a>
        <a id="link" href="html/pricing.html">Pricing</a>
        <a id="link" class="cont-modal" href="#">Contact</a>
    </nav>
</div>

<!-- Contact Modal -->

<div class="contact-form">
    <button type="button" id="contact-close">
        <img src="/images/close.svg" id="close-icon">
    </button>
    <h1 id="white">Want to learn more?</h1>
    <h2 id="gray">We'd love to answer any questions you have.</h2>

    <form method="post" action="contact.php" id="contact">
        <div class="name">
        <input type="text" name="sender" id="half" class="gap" placeholder="First Name">
        <input type="text" id="half" placeholder="Last Name">
        </div>
        <div class="org">
        <input type="text" id="half" class ="gap" placeholder="Organization">
        <input type="text" id="half"placeholder="Industry">
        </div>
        <input type="text" name="senderEmail" id="full" placeholder="Email Address">
        <input type="text" name="message" id="large"placeholder="How may we help?">
        <input class="btn" type="submit" value="Send">
    </form>
</div>

<!-- Hero -->
<div class="bg-1">
    <div class="content-wrapper">
        <div class="landing-hero">
            <div id="in-dev">
                <p class="top-border"><span class="border-this">Currently in proof-of-concept: In Development - Expected Sept 2019</span></p>
            </div>
            <div id="hero-header">
                <h1>Innovation Through Collaboration</h1>
            </div>
            <div id="hero-subtext">
                <h3>Exalton is the file management platform that is leveraging emerging technologies <br> to bring in a
                    new wave of collaboration.</h3>
            </div>
            <div id="hero-image">
                <img id="hero-buildings" src="images/home-hero.svg">
            </div>
        </div>
        </div>
   

        <div class="what-is-exalton">
            <div class="wrapper-1">
                <img id="control" src="images/home-control.svg">
                <div class="text-wrapper">
                    <h2 id="white">You're in control now. </br> Real control.</h2>
                    <div class="bar light"></div>
                    <h3>We get it, you're working with sensitve files and you don't want them <br>
                        getting in the wrong hands. Maybe your current file management platform is <br>
                        confusing or frustrating to work with — we get that too. <br><br>
                        That's why we built exalton, so you can focus on building the next big thing<br>
                        with whomever, wherever.</h3>
                    <div id="learn-more">
                    <a id="text-link" href="html/product.html">Learn More </a>
                    <a id="arrow" href="html/product.html">
                        <img id="more-arrow" src="images/arrow-right.svg">
                        </a>
                        </div>
                </div>
            </div>

            <div class="pillars">
                <div id="security">
                    <img id="lock" src="images/home-security2.png">
                    <h2 id="white">Security</h2>
                    <h3>By leveraging state-of-the-art asset encryption, <br>
                        traceability, and identity management, <br>
                        your files are secured wherever they are.</h3>
                </div>
                <div id="collab">
                    <img id="puzzle" src="images/home-collab2.png">
                    <h2 id="white">Collaboration</h2>
                    <h3>Our platform's design let's you build your<br>
                        collaboration environment with as little effort<br>
                        as possible.</h3>
                </div>
                <div id="efficiency">
                    <img id="clock" src="images/home-efficiency2.png">
                    <h2 id="white">Efficiency</h2>
                    <h3>And for the first time on any file management<br>
                        platform, high-powered, distributed & automated<br>
                        workflows enabled by smart contracts.</h3>
                </div>
                </div>
            </div>
        </div>

        <div class="problem">
            <div class="problem-wrapper">
                <h2 id="blue">But why should you care?</h2>
                <div class="bar2"></div>
                <h3 id="black">Across all industries, billions of dollars are lost globally<br>
                    to the piracy of intellectual property and corporate espionag.<br>
                    Without a proper way to securely and easily manage critical<br>
                    files, distributed collaboration bottlenecks with trust.<br><br>
                    It's about time there was a file manager that gave you <br>
                    absolute confidence in your file management.</h3>
            </div>
            <div class="problem-mock">
                <img id="laptop-mock" src="images/home-mock-new.svg">
            </div>
        </div>

        <div class="use-cases">
            <div class="use-wrapper">
                <h2 id="white" class="header">A secure and collaborative platform.</h2>
                <div class="bar3"></div>
                <div class="life-sci">
                    <img id="use-icon" src="images/home-life.svg">
                    <div class="use-content">
                    <h2 id="orange">Life Sciences</h2>
                    <h3 id="black" >Work together on exploring new drug targets and the therapeutics with scientists from around<br>
                        the world without a worry.<br><br>
                        Whether you're a small biotech, an academic lab or a scientist with a brilliant idea, you don't
                        <br>
                        have to be scared anymore to collaborate with the right people.<br><br>
                    With the highest level of encryption used for research files, you can be sure that your data is <br>
                    in the safe hands.<br><br>
                    Instantaenous transfer of data, funds or equity . can be written into modular smart contracts,
                    allowing<br>
                    for you to focus more on your development.</h3>
                    </div>
                </div>
                <div class="healthcare">
                    <img id="use-icon" src="images/home-health.svg">
                    <div class="use-content">
                    <h2 id="blue">Heathcare</h2>
                    <h3 id="black">Ensure that your patient data is secured and always falls in the right hands, increasing
                        your<br>
                        reliability and gaining the trust of your valued communities.<br><br>
                        Work freely with other healthcare organizations in generating large cross-organization data <br>
                        sets or governing institutions.<br><br>
                        HIPAA compliance along with our state of the art encryption ensures that your patient data <br>
                        is never out of your control. <br><br>
                        Smart contracts can be used to transfer IP, patient data and funds if the right input is <br>
                        received, while generating legally binding nomenclature as well.</h3>
                        </div>
                </div>
                <div class="rnd">
                    <img id="use-icon" src="images/home-edu.svg">
                    <div class="use-content">
                    <h2 id="orange">Education/R&D</h2>
                    <h3 id="black">Academic institutions and corporate R&D lie at the heart of each wave of technological
                        evolution. <br>
                        Unfortunately, only 18% of academic researchers are actively collaborating with one another
                        because <br>
                        there lacks the proper technology to facilitate trust.<br><br>
                        Like never before, collaborate with your internal and external teammates with authentication and
                        work<br>
                        attribution to ensure that your collective work is more focused on your research than
                        politics.<br><br>
                        With complete visibility and total control over sharing permissions, you run the show. You'll
                        never have<br>
                        to worry about what happens to your digital assets because you'll be looped in at any time,
                        anywhere.<br><br>
                    </h3>
                    </div>
                </div>
                <div class="legal">
                    <img id="use-icon" src="images/home-legal.svg">
                    <div class="use-content">
                    <h2 id="blue">Legal</h2>
                    <h3 id="black">Work seamlessly with your clients without worrying about wasting hours or exposing your <br>
                        team to unnecessary risk.<br><br>
                        Collaborating with your clients in all industries and forms can be complex, and thus be time
                        consuming <br>
                        and expensive. By leveraging Exalton's distributed workspace, you can easily link workflows and<br>
                        digital asset
                        management with absolute transparency and confidence.<br><br>
                        Asset traceability provides full transparency to auditors that need detailed reports on asset
                        development. <br><br>
                        Streamline establishing NDA contractual agreements between organizations where the terms<br> are
                        immediately
                        translated into executable permissions that define which assets each organization<br> has access to,
                        can
                        distribute, and to develop.
                    </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="connect">
            <img id="big-logo" src="images/logo.png">
            <h2 id="blue">Do better work, together.</h2>
            <h3 id="black">Stay up to date with what we've been up to.</h3>

            <div class="input">
                <div class="input-container">
                    <input type="email" class="input-field" placeholder="Enter your email address" />
                    <div class="input-field-shadow"></div>
                </div>
                <div class="submit-container">
                    <input type="submit" class="submit-btn" />
                    <div class="submit-btn-shadow"></div>
                </div>
            </div>
            <!-- <div class="form-container">
                    <form>
                        <input type="text"  id="email-field" placeholder="Your email address">
                        <button type="submit" id="sub-button">Subscribe</button>
                    </form>
                    </div> -->
        </div>
    </div>


    <footer>
        <div class="foot-wrapper">
            <div class="logo">
                <img class="foot-icon" src="images/logo.svg" alt="logo">
                <h3>exalton</h3>
            </div>
            <div class="contact-us">
                <h2>Have any questions? Get in touch with us!</h2>
                <button type="button" id="cont-button">Contact Us</button>
            </div>
            <div class="footer-links">
                <a id="link" href="html/about.html">About</a>
                <a id="link" href="html/product.html">Product</a>
                <a id="link" href="html/pricing.html">Pricing</a>
                <a id="link" href="html/contact.html">Contact</a>
            </div>
        </div>
    </footer>
</body>

</html>