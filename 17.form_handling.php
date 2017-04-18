<!DOCTYPE html>
<html>
  <head>
    <title>Form Handling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Form Handling</h1>

    <p>The PHP superglobals $_GET and $_POST are used to collect form-data.</p>

    <hr />

    <h2>A simple HTML Form</h2>

    <p>When a user fills out the form and clicks the submit button, the form data is sent for processing to a PHP file named "demo_welcome.php". The form data is sent with the HTTP POST method:</p>

    <h3>Example: $_POST Method (external processing)</h3>

    <pre><code class="language-php">
      &lt;form action="demo_welcome.php" method="post"&gt;<br />
        Name: &lt;input type="text" name="name" required/&gt;&lt;br /&gt;&lt;br /&gt;<br />
        Email: &lt;input type="text" name="email" required/&gt;&lt;br /&gt;&lt;br /&gt;<br />
        &lt;input type="submit" /&gt;<br />
      &lt;/form&gt;
    </code></pre>

    <h3>Example: $_POST Method (internal processing)</h3>

    <p>To display the submitted data on this page, simply echo all the variables:</p>

    <pre><code class="language-php">
      &lt;form action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;" method="post"&gt;<br />
        Name: &lt;input type="text" name="name" required/&gt;&lt;br /&gt;&lt;br /&gt;<br />
        Email: &lt;input type="text" name="email" required/&gt;&lt;br /&gt;&lt;br /&gt;<br />
        &lt;input type="submit" /&gt;<br />
      &lt;/form&gt;<br />
      <br />
      Welcome &lt;?php echo $_POST["name"]; ?&gt;&lt;br&gt;<br />
      Your email address is: &lt;?php echo $_POST["email"]; ?&gt;
    </code></pre>



    <hr />

    <h2>The same result can be achieved using the HTTP GET method:</h2>

    <h3>Example: $_GET Method (external processing)</h3>

    <pre><code class="language-php">
      &lt;form action="demo_welcome.php" method="get"&gt;<br />
        Name: &lt;input type="text" name="name" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
        Email: &lt;input type="email" name="email" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
        &lt;input type="submit" /&gt;<br />
      &lt;/form&gt;
    </code></pre>



    <h3>Example: $_GET Method (internal processing)</h3>

    <p>To display the submitted data on this page, simply echo all the variables:</p>

    <pre><code class="language-php">
      &lt;form action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;" method="get"&gt;<br />
        Name: &lt;input type="text" name="name" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
        Email: &lt;input type="email" name="email" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
        &lt;input type="submit" /&gt;<br />
      &lt;/form&gt;<br />
  <br />
      Welcome &lt;?php echo $_GET["name"]; ?&gt;&lt;br /&gt;<br />
      Your email address is: &lt;?php echo $_GET["email"]; ?&gt;
    </code></pre>

    <hr />

    <p>The code above is simple, however the most important thing is missing. You need to validate form data to protect your script from malicious code.</p>

    <div class="w3-panel w3-leftbar w3-border-red w3-pale-blue">
      <h3>Think SECURITY when processing PHP forms!</h3>

      <p>The next pages will show how to process PHP forms with security in mind. Proper validation of form data is important to protect your form from hackers and spammers!</p>
    </div>

    <hr />

    <h2>Get vs Post</h2>

    <p>Both GET and POST create an array (e.g. array(key=>value, key2=>value2, key3=>value3, ...)). This array holds key/value pairs, where keys are the names of the form controls, and values are the input data from the user.</p>

    <p>Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.</p>

    <p>$_GET is an array of variables passed to the current script via the URL parameters.</p>

    <p>$_POST is an array of variables passed to the current script via the HTTP POST method.</p>

    <hr />

    <h2>When to use GET?</h2>

    <p>Information sent from a form with the GET method is <b>visible to everyone!</b> (all variable values and names are displayed in the URL). GET also has limits on the amount of information to send. The limit is about 2000 characters. However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.</p>

    <p>GET may be used for sending <b>non-sensitive data</b>.</p>

    <p><strong>NOTE: GET should never be used for sending passwords or other sensitive information!</strong></p>

    <hr />

    <h2>When to use POST?</h2>

    <div class="w3-panel w3-leftbar w3-border-red w3-pale-blue">
      Developers prefer POST for sending form data!
    </div>

    <p>Info sent from a form with the POST method is <b>invisible to others!</b> (all name/values are embedded within the body of the HTTP request). The POST method has <b>no limits</b> on the amount of information to send.</p>

    <p>Moreover, POST supports advanced functionalit such as support for multi-party binary input while uploading files to the server.</p>

    <p>However, because variables are not displayed in the URL, it is not possible to bookmark the page.</p>

  </body>
</html>
