<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luca Ibragimov</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!---Begin Menu-->
  <section>
      
    <div class="container">
      <div class="navbar">
        <div class="menu">
          <h3 class="logo">Luca<span> Ibragimov</span></h3>
          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </div>

      <div class="main-container">
        <div class="main">
          <header>
            <div class="overlay">
                <section class="contact" id="contact_">
                    <div class="containerC">
                      <div class="contact-boxC">
                        <div class="leftC"></div>
                        <div class="rightC">
                          <form form method="post" name="contact_form" action="contact-form-handler.php">
                          <h2 class="contactf">Contact Me</h2>
                          <input id="name" type="text" class="fieldC" placeholder="Your Name" name="name">
                          <input id="email" type="text" class="fieldC" placeholder="Email" name="email">
                          <textarea id="message" name="message" placeholder="Message" class="fieldC" ></textarea>
                          <button value="Submit" name="submit" class="btnC">Send</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </body>
                
                </section>
            </div>
          </header>
        </div>

        <script language="JavaScript">
        var frmvalidator  = new Validator("contactform");
        frmvalidator.addValidation("name","req","Please provide your name");
        frmvalidator.addValidation("email","req","Please provide your email");
        frmvalidator.addValidation("email","email",
        "Please enter a valid email address");
        </script>


        <div class="shadow one"></div>
        <div class="shadow two"></div>
      </div>

      <div class="links">
        <ul>
        <li>
            <a href="index.html" style="--i: 0.25s;">Home</a>
          </li>
          <li>
            <a href="about.html" style="--i: 0.375s;">About me</a>
          </li>
          <li>
            <a href="projects.html" style="--i: 0.5s;">Projects</a>
          </li>
        </ul>
      </div>
    </div>
    <!---End Menu-->

<script src="main.js"></script>     
</body>
</html>