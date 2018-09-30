<?php
//render the header and navigation
$title='About me';
include ('./Components/header.php');
?>

  <main id="about">
    <h1 class="lg-heading">
      About
      <span class="text-secondary">Me</span>
    </h1>
    <h2 class="sm-heading">
      Let me tell you a few things...
    </h2>
    <div class="about-info">
      <img src="img/jing.jpg" alt="John Doe" class="bio-image">

      <div class="bio">
        <h3 class="text-secondary">PROFILE SUMMARY</h3>
        <p>Expertise includes cloud including Amazon Web Services and Agile/Scrum development Methodology. 
          Hardworking and technically proficient developer who thrives when facing challenges and tackling complex problems. Technical skills include MySQL database, java, PHP…
          Seeking a job as a software developer or software engineering. 
          </p>
      </div>
    

      <div class="jumbotron">
          <h3 class="display-6">SKILL SUMMARY</h3>
          <hr class="my-4">
          <h6>Technical skills:</h6>
          <p>Language: Java, C, PHP, HTML, JavaScript (Node.js), ECMAScript and CSS </p>
          <p>Frameworks: Angular, React</p>
          <p>Technologies: Amazon Web Service (EC2, RDS, S3, SNS, CloudFormation)</p>
          <p>Databases: MySQL, NoSQL</p>
          <p>Methodology: Agile/Scrum methodology (Version control tools, CI, Project Management tools)</p>
          <p>Extra skills: JMeter and Junit testing tools</p>
          <hr class="my-4">
          <h6>Soft skills:</h6>
          <p>Communication: finds common ground to build rapport</p>
          <p>Team work: 2 years of collaboration in academic and work projects</p>
          <p>Time and project management</p>
          <p>Problem solving: strong analytical and independent thinker</p>
        </div>

      <div class="jumbotron">
        <h3 class="display-6">EDUCATION</h3>
        <hr class="my-4">
        <h6>AUCKLAND UNIVERSITY OF TECHNOLOGY - BACHELOR OF COMPUTER AND INFORMATION SCIENCE – SOFTWARE DEVELOPMENT MAJOR</h6>
        <p>February 2017 – current (Final year)</p>
        <p>Average mark – A- (GPA7.7/9.0)</p>
        <h6>QUEENS ACADEMIC GROUP —DIPLOMA IN BUSINESS IT (LEVEL 7)</h6>
        <p>June 2015 – October 2016</p>
        <p>Average mark – A- (GPA7.3/9.0)</p>
      </div>

      <div class="jumbotron">
        <h3 class="display-6">WORK EXPERIENCE</h3>
        <hr class="my-4">
        <h6>R&D PROJECT TEAM MEMBER, BULLETPROOF LTD, FREEMANS BAY AUCKLAND</h6>
        <p>Dates From 03/2018 – current</p>
        <p>Configure the settings in AWS console and build AWS CloudFormation Templates for clients based on their requirements, such as fault tolerance infrastructure and spike of viewing volume.  </p>
        <h6>HELP DESK TECHNICIAN, HTC CYBER CAFÉ (PART TIME), AUCKLAND CBD</h6>
        <p>Dates From 10/2015– 11/2017</p>
        <p>Provide networking and desktop support, account maintenance and printing assistance to customers. Troubleshoot and resolve technology problems as the “go-to” person for IT issues.  </p>
      </div>

      <div class="jumbotron">
        <h3 class="display-6">PROJECTS COMPLETED IN UNI</h3>
        <hr class="my-4">
        <h6>3D ESCAPE GAME</h6>
        <p>As a team, we built a 3D game that player can walk around the locked room in a first character view to find all items that can help to escape the room. In this development process, we used some tools that include Unity Game Engine, GitHub and Trello. The language that we used is JavaScript.</p>
        <h6>AI-BASED CHATBOT (WEBSITE AND MESSENGER WEBHOOK)</h6>
        <p>As a team, we built a AI-based chatbot, which included a website hosted on Heroku (a Paas) and a web hook connected to Facebook Messenger that user can also ask questions through Messenger. The tools included Dialogflow (AI framework), GitHub, CircleCI, Heroku and Facebook for developer.</p>
      </div>

      <div class="jumbotron">
        <h3 class="display-6">ACCOMPLISHMENT</h3>
        <hr class="my-4">
        <h6>ISTQB CTFL</h6>
        <p>ISTQB CTFL (International Software Testing Qualifications Board, ANZ Testing Board, Foundation Certificate in Software Testing), Achieved on 17 July 2018
          </p>
      </div>

    </div>
  </main>

<?php
//render the footer
include ('./Components/footer.php');
?>