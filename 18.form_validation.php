<!DOCTYPE html>
<html>
  <head>
    <title>Form Validation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Form Validation</h1>

    <div class="w3-panel w3-leftbar w3-border-red w3-pale-blue">
      <h3>Think SECURITY when processing PHP forms!</h3>
      <p>These pages will show how to process PHP forms with security in mind. Proper validation of form data is important to protect your form from hackers and spammers!</p>
    </div>

    <h3>Example: PHP Form Validation</h3>

    <pre><code class="language-php">
      &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;<br />
        Name: &lt;input type="text" name="name" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
        Email: &lt;input type="text" name="email" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
        Website: &lt;input type="text" name="website" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
        Comment: &lt;br /&gt;&lt;textarea name="comment" rows="5" cols="40"&gt;&lt;/textarea&gt;&lt;br /&gt;&lt;br /&gt;<br />
        Gender:<br />
        &lt;input type="radio" name="gender" value="female" /&gt;Female<br />
        &lt;input type="radio" name="gender" value="male" /&gt;Male<br />
      &lt;/form&gt;
    </code></pre>



    <p>When the form is submitted, the form data is sent with method="post".</p>

    <div class="w3-panel w3-leftbar w3-border-red w3-pale-blue">
      <h3>$_SERVER["PHP_SELF"] Variable</h3>
      <p>This is a superglobal variable that returns the filename of the currently executing script.</p>
    </div>

    <p>So the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of sending it to a different php file. This way, the user will get error messages on the same page as the form.</p>

    <div class="w3-panel w3-leftbar w3-border-red w3-pale-blue">
      <h3>htmlspecialchars()</h3>
      <p>This function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with "& lt;" and "& gt;"...This prevents attackers from exploiting the code by injecting HTML or JavaScript code (cross-site scripting attacks) in forms.</p>
    </div>

    <hr />

    <h2>Big Note on PHP Form Security</h2>

    <p>The $_SERVER["PHP_SELF"] variable can be used by hackers!</p>

    <p>If PHP_SELF is used in your page then a user can enter a slash (/) and then some cross-site scripting (XSS) commands to execute.</p>

    <div class="w3-panel w3-leftbar w3-border-left w3-pale-blue">
      <h4>Cross-site scripting (XSS) is a type of computer security vulnerability typically found in web applications. XSS enables attackers to inject client side script into Web pages viewed by other users.</h4>
    </div>

    <h3>Be aware that using $_SERVER["PHP_SELF"] can be changed and manipulated with JavaScript which can result in malicious behavior.</h3>

    <hr />

    <h2>How to Avoid $_SERVER["PHP_SELF"] Eploits:</h2>

    <h3 style="color: orange;">$_SERVER["PHP_SELF"] exploits can be avoided by using the htmlspecialchars() function.</h3>

    <p>The form code should look like this: (see code)</p>

    <pre><code class="language-php">
    &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;
    </code></pre>

    <p>The htmlspecialchars() function coverts special characters to HTML entities. Now if the user tries to exploit the PHP_SELF variable, it will result in the following output: (see code)</p>

    <pre><code class="language-php">
    &lt;form method="post" action="test_form.php/&amp;quot;&amp;gt;&amp;lt;script&amp;gt;alert('hacked')&amp;lt;/script&amp;gt;"&gt;&lt;/form&gt;
    </code></pre>

    <p>The exploit attemp fails, and no harm is done!</p>

    <hr />

    <h2>Validate Form Data with PHP</h2>

    <p>First, pass all variables through PHP's <b>htmlspecialchars()</b> function.</p>

    <p>Then, strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP <b>trim()</b> function)</p>

    <p>Also, remove backslashes (\) from the user input data (with the PHP <b>stripslashes()</b> function)</p>

    <p>The next step is to create a function that will do all the checking for us (this is much more convenient than writing the same code over and over again.)</p>

    <p>We will name the test function <b>test_input()</b>.</p>

    <p>Now, we can check each $_POST variable with the <b>test_input()</b> function...the script looks like this: (see code)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        //define variables and set to empty values<br />
        $name = $email = $gender = $comment = $website = "";<br />
  <br />
        if ($_SERVER["REQUEST_METHOD"] == "POST") {<br />
            $name = test_input($_POST["name"]);<br />
            $email = test_input($_POST["email"]);<br />
            $website = test_input($_POST["website"]);<br />
            $comment = test_input($_POST["comment"]);<br />
            $gender = test_input($_POST["gender"]);<br />
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

    <p>At the start of the script, we check whether the form has been submitted using $_SERVER["REQUEST_METHOD"]. If the REQUEST_METHOD is POST, then the form has been submitted - and it should be validated. If it has not been submitted, skip the validation and display a blank form.</p>

    <p>However, in the example above, all input fields are optional. The script works fine even if the user doesn't enter any data. The next step is to make input fields required, and to display error messages if needed.</p>

  </body>
</html>
