<!DOCTYPE html>
<html ln="en">

    <head>

        <?php
        include "meta.php";
        ?>
        
        <link rel="stylesheet" type="text/css" href="css/style_header.css">
        <link rel="stylesheet" type="text/css" href="css/style_footer.css">
        <link rel="stylesheet" type="text/css" href="css/style_academy.css">

    </head>

    <body>

     
            <?php include "header.php"?>

       

        <main>

            <div id="studentDiv">
                <div  id="divLogo">

                </div>
        
                <h2>Ktek Academy</h2>
            <form id="studentForm" action="" method="$_POST" id="userAcademy">
                <div>
                    <label for="studentPicUpload"><img id="studentPicProfile"src="Images/gallery/female_sample_photo.png" alt="profile_picture"/></label><br>
                    <input name="studentPicUpload" id="studentPicUpload" type="file" accept="image/jpeg, image/png, image/jpg"required/>
                        </div>
                
                <label for="studentReg">reg*</label><br>
                <input type="text" id="studentReg" name="studentReg" placeholder="K0001" required/><br>
                <label for="studentCourse">course*</label><br>
                <select id="studentCourse" name="studentCourse">
                    <option>full stack 1</option>
                    <option>full stack 2</option>
                    <option>full stack 3</option>
                    <option>python 1</option>
                    <option>python 2</option>
                    <option>python 3</option>
                </select><br>
                <label for="studentFirstName">first name*</label><br>
                <input type="text" id="studentFirstName" name="studentFirstName" placeholder="first name" required/><br>
                <label for="studentOtherName">other name <i>&nbsp;:if any</i></label><br>
                <input type="text" id="studentOtherName" name="studentOtherName" placeholder="other name" /><br>
                <label for="studentLastName">last name*</label><br>
                <input type="text" id="studentLastName" name="studentLastName" placeholder="last name" required/><br>
                <label for="studentSex">sex*</label><br>
                <select id="studentSex" name="studentSex">
                    <option>Male</option>
                    <option>Female</option>
                </select><br>
                <label for="studentPhoneNo">phone no*</label><br>
                <input type="text" id="studentPhoneNo" name="studentPhoneNo" placeholder="phone no" required/><br>
                <label for="studentEmail">email*</label><br>
                <input type="email" id="studentEmail" name="studentEmail" placeholder="email" required/><br>
                <label for="studentDOB">date of birth*</label><br>
                <input type="date" id="studentDOB" name="studentDOB" min="1944-01-01" max="2024-01-01" required/><br>
                <label for="studentNationality">nationality*</label><br>
                <input type="text" id="studentNationality" name="studentNationality" placeholder="nationality" required/><br>
                <label for="studentState">state*</label><br>
                <input type="text" id="studentState" name="studentState" placeholder="state" required/><br>
                <label for="studentAddress">address*</label><br>
                <textarea name="studentAddress" id="studentAddress" rows="2" placeholder="No:001 ktek complex"></textarea><br>
                <label for="studentDiscount">discount &#37;<i>&nbsp;:if any</i></label><br>
                <input type="text" id="studentDiscount" name="studentDiscount" placeholder="0%" required/><br>
                <label for="studentAmount">amount paid*</label><br>
                <section>
                <input type="radio" id="studentUSD" value="usd" name="studentCurrency" checked/><span>USD<sup>&#36;</sup></span>
          &emsp;<input type="radio" id="studentGBP" value="gbp" name="studentCurrency"/><span>GBP<sup>&#163;</sup></span>
          &emsp;<input type="radio" id="studentEUR" value="eur" name="studentCurrency"/><span>EUR<sup>&#8364;</sup></span>
          &emsp;<input type="radio" id="studentNGN" value="ngn" name="studentCurrency"/><span>NGN<sup>&#8358;</sup></span><br>
                </section>
          <input type="number" id="studentAmount" name="studentAmount" placeholder="200" required/><br>
          <button type="submit" id="studentBtn" name="studentBtn">Submit</button>
            </form>
            </div>
        </main>
        <div style="width: 100vw; height:1500px">

</div>
  
        <?php include "footer.php"?>
      

    </body>
    
        
    <script type="module" src="Javascript_files/javascript_academy.js"></script>

</html>