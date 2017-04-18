<!DOCTYPE html>
<html>
  <head>
    <title>Complete Form Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Complete Form Example</h1>

    <h2>Keep The Values in the Form</h2>

    <p>To show the values in the input fields after the user hits the submit button, we <b>add a little PHP script inside the value attribute of the following input fields: name, email, and website. In the comment textarea field, we put the script between the textarea-tags</b>. The little script outputs the value of the $name, $email, $website, and $comment variables.</p>

    <p>Then we also need to show which radio button was checked. For this, we must <b>manipulate the checked attribute (not the value attribute for radio buttons).</b></p>

      <h2>The PHP</h2>

      <pre><code class="language-php">
        &lt;!-- PHP --&gt;
        &lt;?php<br />
          // define variables and set to empty values<br />
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
  <br />
          function test_input($data)<br />
          {<br />
              $data = trim($data);<br />
              $data = stripslashes($data);<br />
              $data = htmlspecialchars($data);<br />
              return $data;<br />
          }<br />
        ?&gt;
      </code></pre>



      <h2>The HTML Form</h2>

      <pre><code class="language-php">
        &lt;!-- HTML --&gt;
        &lt;p&gt;&lt;span class="error"&gt;* required field.&lt;/span&gt;&lt;/p&gt;<br />
        &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;<br />
          Name: &lt;input type="text" name="name" value="&lt;?php echo $name;?&gt;"&gt;<br />
          &lt;span class="error"&gt;* &lt;?php echo $nameErr;?&gt;&lt;/span&gt;<br />
          &lt;br&gt;&lt;br&gt;<br />
          E-mail: &lt;input type="text" name="email" value="&lt;?php echo $email;?&gt;"&gt;<br />
          &lt;span class="error"&gt;* &lt;?php echo $emailErr;?&gt;&lt;/span&gt;<br />
          &lt;br&gt;&lt;br&gt;<br />
          Website: &lt;input type="text" name="website" value="&lt;?php echo $website;?&gt;"&gt;<br />
          &lt;span class="error"&gt;&lt;?php echo $websiteErr;?&gt;&lt;/span&gt;<br />
          &lt;br&gt;&lt;br&gt;<br />
          Comment: &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;?php echo $comment;?&gt;&lt;/textarea&gt;<br />
          &lt;br&gt;&lt;br&gt;<br />
          Gender:<br />
          &lt;input type="radio" name="gender" &lt;?php if (isset($gender) &amp;&amp; $gender=="female") {<br />
            echo "checked";<br />
        }?&gt; value="female"&gt;Female<br />
          &lt;input type="radio" name="gender" &lt;?php if (isset($gender) &amp;&amp; $gender=="male") {<br />
            echo "checked";<br />
        }?&gt; value="male"&gt;Male<br />
          &lt;span class="error"&gt;* &lt;?php echo $genderErr;?&gt;&lt;/span&gt;<br />
          &lt;br&gt;&lt;br&gt;<br />
          &lt;input type="submit" name="submit" value="Submit"&gt;<br />
        &lt;/form&gt;
      </code></pre>

      <h2>The Output</h2>

      <pre><code class="language-php">
        &lt;!-- Output --&gt;
        &lt;?php<br />
          echo "&lt;h2&gt;Your Input:&lt;/h2&gt;";<br />
          echo $name;<br />
          echo "&lt;br&gt;";<br />
          echo $email;<br />
          echo "&lt;br&gt;";<br />
          echo $website;<br />
          echo "&lt;br&gt;";<br />
          echo $comment;<br />
          echo "&lt;br&gt;";<br />
          echo $gender;<br />
        ?&gt;
      </code></pre>

      <hr />

      <h2>Also see example using external .php file!</h2>

  </body>
</html>
