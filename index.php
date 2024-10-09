 <!-- Include the header -->

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Home Page | HappyU Programming Competition</title>
     <link rel="stylesheet" href="css/styles.css" /> <!-- Link to external CSS -->
 </head>

 <body class="hide-scrollbar">
     <!-- Header -->
     <?php include 'includes/header.php'; ?>

     <div class="toc-hover-area"></div>
     <div id="toc" class="toc">
         <p>Table of Contents</p>
         <ul></ul> <!-- TOC will be populated here -->
     </div>

     <main>
         <section class="hero fade-in">
             <h1>Program the Future</h1>
             <p>Join the Happy U Programming Competition on October 25, 2024</p>
             <a href="register.php" target="_blank" class="btn">Register Now</a>
         </section>

         <section id="intro" class="fade-in">
             <div class="imageContainer">
                 <img src="media/images/programming.jpg" alt="programming" srcset="" class="img">
                 <div class="imageContent">
                     <h2>Introduction</h2>
                     <p>
                         Welcome to the Happy U Programming Competition, a platform designed to
                         showcase your coding skills and creativity. Whether you are a novice or an
                         experienced programmer, this competition invites participants to tackle
                         challenging problems that require innovative solutions. Join us for an
                         exciting journey of learning and competition, and stand a chance to win
                         amazing prizes!
                     </p>
                 </div>
             </div>
         </section>

         <section id="rules" class="fade-in">
             <div class="imageContainer">
                 <div class="imageContent">
                     <h2>Competition Rules</h2>
                     <ol>
                         <li><b>Eligibility</b>: Open to all students enrolled at Happy U, regardless of major or year.</li>
                         <li><b>Team Formation</b>: Participants can compete individually or in teams of up to three members.</li>
                         <li><b>Submission Guidelines</b>:
                             <ul>
                                 <li>Code submissions must be in Python, Java, or C++.</li>
                                 <li>All submissions should be original work. Plagiarism will not be tolerated.</li>
                                 <li>Each participant/team can submit their solutions for each problem only once. Late submissions will not be accepted.</li>
                             </ul>
                         </li>
                         <li><b>Judging Criteria</b>: Submissions will be evaluated based on correctness, efficiency, and originality of the solution.</li>
                         <li><b>Conduct</b>: All participants are expected to maintain a respectful and constructive environment throughout the competition.</li>
                     </ol>
                 </div>
                 <img src="media/images/chessboard.jpg" alt="programming" srcset="" class="img">
             </div>
         </section>

         <section id="prize" class="fade-in">
             <h2>Prize Details</h2>
             <ul>
                 <li><b>Grand Prize</b>: <span class="prize">$1,000</span> scholarship for the winning team.</li>
                 <li><b>Second Place</b>: <span class="prize">$500</span> scholarship for the runner-up team.</li>
                 <li><b>Honorable Mentions</b>: Certificates and swag bags for the top 10 teams.</li>
                 <li><b>Participation Certificates</b>: All participants will receive a certificate of participation.</li>
             </ul>
         </section>

         <section id="deadline" class="fade-in">
             <h2>Timeline/Deadlines</h2>
             <ul>
                 <li><b>Registration Opens</b>: September 1, 2024</li>
                 <li><b>Registration Closes</b>: October 15, 2024</li>
                 <li><b>Competition Date</b>: October 25, 2024</li>
                 <li><b>Results Announcement</b>: November 1, 2024</li>
                 <li><b>Award Ceremony</b>: November 15, 2024</li>
             </ul>
         </section>

         <section id="countdown-timer" class="countdown-section fade-in">
             <h2>Competition Countdown</h2>
             <div id="countdown">
                 <div class="countdown-item">
                     <span id="days"></span>
                     <p>Days</p>
                 </div>
                 <div class="countdown-item">
                     <span id="hours"></span>
                     <p>Hours</p>
                 </div>
                 <div class="countdown-item">
                     <span id="minutes"></span>
                     <p>Minutes</p>
                 </div>
                 <div class="countdown-item">
                     <span id="seconds"></span>
                     <p>Seconds</p>
                 </div>
             </div>
         </section>

         <section id="join" class="fade-in">
             <h2>What are you waiting for?</h2>
             <p>Come join us now! Who knows you might be the champion!</p>
             <a href="register.php" target="_blank" class="btn">Register Now</a>
         </section>
     </main>

     <!-- Footer -->
     <?php include 'includes/footer.php'; ?>

     <script src="js/script.js"></script>
 </body>

 </html>