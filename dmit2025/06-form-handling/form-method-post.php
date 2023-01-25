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
        
        <main>
            <section>
                <!-- 
                    A form's action attribute tells the browser _where_ the data goes when the user hits submit. This can be another page that processes (validates, sanitises, etc.) the data before displaying it, manipulating it, or sending it to a database.

                    A form can use the GET or POST method.

                    The GET method transmits data as part of the URL. 

                    The POST method requires additional processing (either using a script on the page or through another page). The contents of the data are not revealed to the user.
                 -->
                <form action="process.php" method="POST">
                    <fieldset>
                        <h2>Fill In Your Info please</h2>
                        <p>Please fill out the information in the form below. When you're finished, press 'Ready!' to see the final result.</p>
                    </fieldset>
                    <fieldset>
                        <div class="form-control">
                            <!-- Each input MUST have a name attribute so that the receiving script can access the value that the user inputs. If an input doesn't have a name, we can't access it. -->
                            <input type="text" name="username" id="username">
                            <label for="username">Your Name</label>
                        </div>
                        <div class="form-control">
                            <input type="text" name="job" id="job">
                            <label for="job">Job Title</label>
                        </div>
                        <div class="form-control">
                            <input type="tel" name="phone" id="phone">
                            <label for="phone">Phone Number</label>
                        </div>
                        <div class="form-control">
                            <input type="text" name="location" id="location">
                            <label for="location">City &amp; Province</label>
                        </div>
                        <div class="form-control">
                            <input type="email" name="email" id="email">
                            <label for="email">Email Address</label>
                        </div>
                        <div class="form-control">
                            <input type="url" name="website" id="website">
                            <label for="website">Your Website</label>
                        </div>
                    </fieldset>
                    <!-- Submit Button -->
                    <input type="submit" value="Ready!">
                </form>
            </section>
        </main>

    </body>
</html>