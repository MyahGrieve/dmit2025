<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>PHP Forms</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- intitalize form variables
        if the user has already submitted something, we'll use that
        if the value isnt set (user hasnt submitted anything) we'll give them a defualt value -->
    <?php
        $username = isset($_POST["username"]) ? $_POST["username"] : 'YOUR NAME';
        $job = isset($_POST["job"]) ? $_POST["job"] : 'WEB DEVELOPER';
        $phone = isset($_POST["phone"]) ? $_POST["phone"] : '123 456 7890';
        $location = isset($_POST["location"]) ? $_POST["location"] : 'CITY, PROVINCE';
        $email = isset($_POST["email"]) ? $_POST["email"] : 'YOURUSERNAME@EMAIL.COM';
        $website = isset($_POST["website"]) ? $_POST["website"] : 'http://www.yourwebsite.com';
    ?>
    <main>
        <section class="form">
            <!-- 
                    A form's action attribute tells the browser _where_ the data goes when the user hits submit. This can be another page that processes (validates, sanitises, etc.) the data before displaying it, manipulating it, or sending it to a database.

                    A form can use the GET or POST method.

                    The GET method transmits data as part of the URL. 

                    The POST method requires additional processing (either using a script on the page or through another page). The contents of the data are not revealed to the user.
                 -->
            <form action="<?php echo $SERVER["PHP_SELF"]; ?>" method="POST">
                <fieldset>
                    <h2>Fill In Your Info PLEASE</h2>
                    <p>Please fill out the information in the form below. When you're finished, press 'Ready!' to see
                        the final result.</p>
                </fieldset>
                <fieldset>
                    <div class="form-control">
                        <!-- Each input MUST have a name attribute so that the receiving script can access the value that the user inputs. If an input doesn't have a name, we can't access it. -->
                        <input type="text" name="username" id="username" value=<?php echo $username; ?>>
                        <label for="username">Your Name</label>
                    </div>
                    <div class="form-control">
                        <input type="text" name="job" id="job" value=<?php echo $job; ?>>
                        <label for="job">Job Title</label>
                    </div>
                    <div class="form-control">
                        <input type="tel" name="phone" id="phone value=<?php echo $phone; ?>">
                        <label for="phone">Phone Number</label>
                    </div>
                    <div class="form-control">
                        <input type="text" name="location" id="location" value=<?php echo $location; ?>>
                        <label for="location">City &amp; Province</label>
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" id="email" value=<?php echo $email; ?>>
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-control">
                        <input type="url" name="website" id="website" value=<?php echo $website; ?>>
                        <label for="website">Your Website</label>
                    </div>
                </fieldset>
                <!-- Submit Button -->
                <input type="submit" value="Ready! OR NOT">
            </form>
        </section>
        <section class="card">
            <div class="front-side">
                <div class="color-grid">
                    <div class="black"></div>
                    <div class="red1"></div>
                    <div class="red2"></div>
                    <div class="green"></div>
                </div>
                <info class="grid">
                    <div class="name">
                        <h2> <?php echo $username; ?> </h2>
                        <h5> <?php echo $job; ?></h5>
                    </div>
                    <div class="address">
                       <img src="img/location.svg" alt="">
                        <p> <?php echo $location; ?></p>
                    </div>
                    <div class="phone-no">
                        <img src="img/phone.svg" alt="">
                        <?php echo $phone; ?>
                    </div>
                    <div class="email">
                        <img src="img/phone.svg" alt="">
                       <p class="email"> <?php echo $email; ?></p>
                       <p class="web"> <?php echo $website; ?></p>
                    </div>
                        
                </info>
            </div>
            <div class="back-side">
                <div class="color-grid">
                    <div class="black">
                    </div>
                    <div class="red1"></div>
                    <div class="red2"></div>
                    <div class="green"></div>
                </div>
                <div class="name-tag">
                    <h2> <?php echo $username; ?> </h2>
                    <p> <?php echo $job; ?></p>
                </div>
        </section>
    </main>

</body>

</html>