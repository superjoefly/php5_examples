<!DOCTYPE html>
<html>
  <head>
    <title>Superglobals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Superglobals</h1>

    <p>Superglobals are built-in globals that are always available in all scopes.</p>

    <p>Several predefined globals in PHP are "superglobals", which means they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.</p>

    <p>The PHP superglobal variables are:</p>

    <ul>
      <li>$GLOBALS</li>
      <li>$_SERVER</li>
      <li>$_REQUEST</li>
      <li>$_POST</li>
      <li>$_GET</li>
      <li>$_FILES</li>
      <li>$_ENV</li>
      <li>$_COOKIE</li>
      <li>$_SESSION</li>
    </ul>

    <hr />

    <h2>$GLOBALS</h2>

    <p>$GLOBALS is a PHP superglobal variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods).</p>

    <p>PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.</p>

    <h3>Example: $GLOBALS</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 75;<br />
        $y = 25;<br />
  <br />
        function addition()<br />
        {<br />
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];<br />
        }<br />
  <br />
        addition();<br />
        echo $z;<br />
      ?&gt;
    </code></pre>

    <p><strong>Note:</strong> since z is a variable present within the $GLOBALS array, it is also accessible from outside the function.</p>

    <hr />

    <h2>$_SERVER</h2>

    <p>$_SERVER is a PHP superglobal variable which holds information about headers, paths, and script locations.</p>

    <h3>Example: $_SERVER</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo $_SERVER['PHP_SELF'];<br />
        echo "&lt;br /&gt;";<br />
        echo $_SERVER['SERVER_NAME'];<br />
        echo "&lt;br /&gt;";<br />
        echo $_SERVER['HTTP_HOST'];<br />
        echo "&lt;br /&gt;";<br />
        echo $_SERVER['HTTP_REFERER'];<br />
        echo "&lt;br /&gt;";<br />
        echo $_SERVER['HTTP_USER_AGENT'];<br />
        echo "&lt;br /&gt;";<br />
        echo $_SERVER['SCRIPT_NAME'];<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>$_REQUEST</h2>

    <p>PHP $_REQUEST is used to collect data after submitting an HTML form.</p>

    <h3>Example: $_REQUEST</h3>

    <p>This example uses this php file to process the form data:</p>

    <pre><code class="language-php">
      //PHP FILE
      &lt;form method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;"&gt;<br />
        Name: &lt;input type="text" name="fname" /&gt;<br />
        &lt;input type="submit" /&gt;<br />
      &lt;/form&gt;
    </code></pre>

    <pre><code class="language-php">
      &lt;?php<br />
        if ($_SERVER["REQUEST_METHOD"] == "POST") {<br />
            // collect value of input field<br />
          $name = htmlspecialchars($_REQUEST['fname']);<br />
            if (empty($name)) {<br />
                echo "Name is empty";<br />
            } else {<br />
                echo $name;<br />
            }<br />
        }<br />
      ?&gt;
    </code></pre>



    <p>Same as above but using external PHP file for processing:</p>

    <pre><code class="language-php">
      //PHP FILE
      &lt;form method="post" action="demo_request.php"&gt;<br />
        Name: &lt;input type="text" name="fname" /&gt;<br />
        &lt;input type="submit" /&gt;<br />
      &lt;/form&gt;
    </code></pre>

    <hr />

    <h2>$_POST</h2>

    <p>PHP $_POST is widely used to collect form data after submitting and HTML form with <b>method=post</b>.</p>

    <h3>Example: $_POST</h3>

    <p>$_POST is also widely used to pass variables.</p>

    <p>This example uses this PHP file to process the data:</p>

    <pre><code class="language-php">
      //PHP FILE
      &lt;form method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?&gt;"&gt;<br />
        Name: &lt;input type="text" name="fname" /&gt;<br />
        &lt;input type="submit" /&gt;<br />
      &lt;/form&gt;<br />
    </code></pre>

    <pre><code class="language-php">
      &lt;?php<br />
        if ($_SERVER["REQUEST_METHOD"] == "POST") {<br />
            //collect value of input field<br />
          $name = $_POST['fname'];<br />
            if (empty($name)) {<br />
                echo "Name is empty";<br />
            } else {<br />
                echo $name;<br />
            }<br />
        }<br />
      ?&gt;
    </code></pre>



    <p>Same as above except using an external PHP file for processing:</p>

    <pre><code class="language-php">
      // PHP File<br />
      &lt;form method="post" action="demo_post.php"&gt;<br />
        Name: &lt;input type="text" name="fname" /&gt;<br />
        &lt;input type="submit" /&gt;<br />
      &lt;/form&gt;
    </code></pre>



    <hr />

    <h2>$_GET</h2>

    <p>PHP $_GET can also be used to collect form data after submitting an HTML form with <b>method=get</b>.</p>

    <p>$_GET can also collect data sent in the URL.</p>

    <p>Assume we have an HTML page that contains a hyperlink with parameters:</p>

    <pre><code class="language-php">
      &lt;html&gt;<br />
      &lt;body&gt;<br />
      &lt;a href="test_get.php?subject=PHP  web=w3schools.com"&gt;test $GET&lt;/a&gt;<br />
      &lt;/body&gt;<br />
      &lt;/html&gt;
    </code></pre>

    <p>When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to the "test_get.php", and then you can access their values in "test_get.php" with $_GET.</p>

    <a href="test_get.php">Test $GET</a>

    <p><strong>You will learn more about $_POST and $_GET in the PHP Forms chapter...</strong></p>

  </body>
</html>
