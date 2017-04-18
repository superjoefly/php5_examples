<!DOCTYPE html>
<html>
  <head>
    <title>Validate Email and URL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Validate Email and URL</h1>

    <h2>Validate Name</h2>

    <p>The code below shows a simple way to check if the name field only contains letters and whitespace. If the value of the name field is not valid, then store an error message:</p>

    <pre><code>
      $name = test_input($_POST["name"]);
      if (!preg_match("/^[a-zA-Z]*$/",$name)) {
        $nameErr = "Only letters and whitespace allowed";
      }
    </code></pre>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.</strong></p>
    </div>

    <hr />

    <h2>Validate E-mail</h2>

    <p>The easiest and safest way to check whether an email address is well-formed is to use PHP's filter_var() function.</p>

    <p>In the code below, if the e-mail address is not well-formed, then store an error message.</p>

    <pre><code>
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    </code></pre>

    <hr />

    <h2>Validate URL</h2>

    <p>The code below shows a way to check if a URL address is valid (this regular expression also allows dashes in the URL). If the URL address syntax is not valid, then store an error message:</p>

    <pre><code>
      $website = test_input($_POST["website"]);
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
      }
    </code></pre>

    <hr />

    <h2>Validate Name, E-mail and URL</h2>

    <p>Now the script looks like this: (see code)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        //define variables and set to empty values<br />
        $nameErr = $emailErr = $genderErr = $websiteErr = "";<br />
        $name = $email = $gender = $comment = $website = "";<br />
  <br />
        if ($_SERVER["REQUEST_METHOD"] == "POST") {<br />
            if (empty($_POST["name"])) {<br />
                $nameErr = "Name is required";<br />
            } else {<br />
                $name = test_input($_POST["name"]);<br />
            // check if name only contains letters and whitespace<br />
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {<br />
                $nameErr = "Only letters and white space allowed";<br />
            }<br />
            }<br />
  <br />
            if (empty($_POST["email"])) {<br />
                $emailErr = "Email is required";<br />
            } else {<br />
                $email = test_input($_POST["email"]);<br />
            // check if e-mail address is well-formed<br />
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {<br />
                $emailErr = "Invalid email format";<br />
            }<br />
            }<br />
  <br />
            if (empty($_POST["website"])) {<br />
                $website = "";<br />
            } else {<br />
                $website = test_input($_POST["website"]);<br />
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)<br />
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&amp;@#\/%?=~_|!:,.;]*[-a-z0-9+&amp;@#\/%=~_|]/i", $website)) {<br />
                $websiteErr = "Invalid URL";<br />
            }<br />
            }<br />
  <br />
            if (empty($_POST["comment"])) {<br />
                $comment = "";<br />
            } else {<br />
                $comment = test_input($_POST["comment"]);<br />
            }<br />
  <br />
            if (empty($_POST["gender"])) {<br />
                $genderErr = "Gender is required";<br />
            } else {<br />
                $gender = test_input($_POST["gender"]);<br />
            }<br />
        }<br />
      ?&gt;
    </code></pre>

    <p>The next step is to show how to prevent the form from emptying all the input fields when the user submits the form.</p>

  </body>
</html>
