<!DOCTYPE html>
<html ln="en">
    <head>
    <?php
        include "meta.php";
        ?>


<link rel="stylesheet" type="text/css" href="css/style_header.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style_footer.css">

        
    </head>

    <body>
        <header>
            <?php 
            include "header.php";
            ?>

         </header>

        <main>

        <div id="div_intro">

        <h2>kkktek Technology at is Best</h2>
        <img src="Images/logo/big_logo.png" alt="ktek_logo">

            <p>
At KKK we are pioneers in the intersection of automation,
 electrical and electronic engineering, software development, and the design and construction of robots and mechanical systems. Our mission is to revolutionize industries through innovative technologies and solutions. Whether you're a startup looking to streamline your operations or a large corporation aiming to stay ahead of the curve, we have the expertise and experience to meet your needs.
</p>
        </div>

<!-- .......................................... service -->
      <section id="service">
            <hr>
            <h2>
                <a href="index.php" style="color:aqua;">Service</a>
            </h2>
            <hr>
                <div>
                <article>
            <h3>Automation Solutions</h3>
            <p>From process automation to industrial robotics, we offer tailored automation solutions to optimize efficiency and productivity in your operations.</p>
                <p>Our team of experts specializes in PLC programming, SCADA systems, HMI development, and more, ensuring seamless integration and reliable performance.</p>
                <img class="ktek_img_display" src="Images/gallery/img3.jpg" alt="image Automation solutions"></img>
            </article>

            <article>
            <h3>Electrical and Electronic Engineering</h3>
            <p>
            - Harness the power of cutting-edge electrical and electronic technologies with our comprehensive engineering services.</p>
            <p> - We provide circuit design, PCB layout, electronic prototyping, and firmware development, delivering solutions that are robust, efficient, and scalable.</p>
            <img class="ktek_img_display" src="Images/gallery/img4.jpg" alt="image Electrical & Electronics"/>
            </article>
               
            <article>
            <h3>Software Development</h3>
            <p>Transform your ideas into reality with our custom software development services.</p>
            <p>From web and mobile applications to enterprise solutions, we leverage the latest technologies and agile methodologies to deliver software that drives innovation and business growth.</p>
            <img class="ktek_img_display" src="Images/gallery/img5.jpg" alt="image Software Development"/>    
        </article>

                </div>

                <div>
                <article>
            <h3>Mechanical Design</h3>
            <p>Bring your mechanical concepts to life with our expert mechanical design services.</p>
                <p>   - Whether it's product design, CAD modeling, or simulation analysis, our team excels in creating solutions that are functional, ergonomic, and aesthetically pleasing.</p>
                <img class="ktek_img_display" src="Images/gallery/img6.jpg" alt="image Mechanical Design"/>   
            </article>

            <article>
            <h3>Robotics</h3>
            <p>Explore the future of automation with our robotics expertise.</p>
            <p>From humanoid robots to autonomous drones, we design and build robotic systems that redefine possibilities in various industries,  including security and surveillance, manufacturing, healthcare, and logistics.</p>
            <img class="ktek_img_display" src="Images/gallery/img7.jpg" alt="image Mechanical Design"/>      
        </article>
                </div>    
                </section>

<!-- ...........................................about -->
                
                <section id="about">
              
            <hr>
            <h2>
                <a href="index.php" style="color:aqua;">About</a>
            </h2>
            <hr>
            <div  id="about_nav_img">
                <p>Is all about Tech</p>
            </div>
         
        <article>
      
        <p>KKKTek is a dynamic and innovative technology company established just last year. Despite our recent inception, we are focusing on emerging as one of the leading player in the fields of programming and 
    robotics, driven by our passion for pushing the boundaries of technological innovation.</p>
        <div id="about_div">
        <div class="about_img ktek_img_display2" id="about_img8"></div>
        <div class="about_img ktek_img_display2" id="about_img9"></div>
        <div class="about_img ktek_img_display2" id="about_img10"></div>
        <div class="about_img ktek_img_display2" id="about_img13"></div>
        <div class="about_img ktek_img_display2" id="about_img14"></div>
        <div class="about_img ktek_img_display2" id="about_img15"></div>
        </div>

        </article>    
    </section>

<!-- ...........................................contact us -->

                <section id="contact">
                <hr>

                <h2>
                <a href="index.php" style="color:aqua;">Contact us</a>
            </h2>
             
                <hr>

                <div id="contact_div">
                    <div>

                    
            <address id="contact_address">
            <h2>Head Office</h2>

            <h3>Phone:</h3>
            <p>+234 (80) 3214 8943</p>
            <p>+234 (80) 3214 8943</p>

            <h3>Email:</h3>

            <p>info@kkktek.com</p>
            <p>kkktek@gmail.com</p>

            <h3>Address:</h3>    
            <p>Visit us at:<br>

            No:4 Chucks Terrace<br>
            At Raimi Akinyele Street<br> 
            Ilaje-Ajah, Lagos.

            </address>
     </div>

        
 <div>
            <form action="Includes/contactform_inc.php" method="post" id="userContact">
                <span >First Name:</span> <input id="userFirstName" name="userFirstName"type="text" placeholder="First Name" /><br>
                <span >Last Name:</span>&nbsp; <input id="userLastName" name="userLastName"type="text" placeholder="Last Name" /><br>
                <span>Phone_no:&nbsp;&nbsp;</span> <input id="userTel" name="userTel" type="tel" placeholder="phone number" /><br>
                <span>Reason:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <select id="userInfo" name="userInfo">
                <option value="request">request</option>
                <option value="complaint">complaint</option>
                <option value="enquiriy">enquiriy</option>
                <option value="other_enquiriy">others</option>
                    </select><br>
                <span>Email:&emsp;&emsp;&nbsp;&nbsp;</span><input id="userEmail" name="userEmail" type="email" placeholder="enter email" /><br>
                <span>Message:&emsp;&nbsp;</span><textarea name="userMsg" id="userMsg" placeholder="write a message" ></textarea><br>
                <button type="submit" id="userBtn" name="userBtn">Submit</button>
                
            </form>

            
        </div>




                </div>
                
                </section>
                <div style="width: 100%; height:200px;">

</div>
            

        </main>

        </body>

     

         <?php 
            include "footer.php"         
         ?>
   

<!-- ........................................ -->

        <div class="image_display_container">
            <img id="img_disp" src="Images/gallery/img11.jpg" alt="images display from click">

        </div>
<!-- .................................. -->
  

    <script type="module" src="Javascript_files/javascript.js"></script>

</html>
