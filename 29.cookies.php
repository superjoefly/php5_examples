<!DOCTYPE html>
<html>
  <head>
    <title>Cookies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Cookies</h1>

    <p>A cookie is often used to identify a user.</p>

    <hr />

    <h2>What is a Cookie?</h2>

    <p>A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.</p>

    <hr />

    <h2>Create Cookies</h2>

    <p>A cookie is created with the setcookie() function:</p>

    <pre><code>
      setcookie(name, value, expire, path, domain, secure, httponly);
    </code></pre>

    <p>Only the name parameter is required; all other paramters are optional.</p>

    <hr />

    <h2>Create/Retrieve a Cookie</h2>

    <h3>Example: create and retrieve a cookie</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        if (!isset($_cookie[$cookie_name])) {<br />
            echo "Cookie named '" . $cookie_name . "' is not set!";<br />
        } else {<br />
            echo "Cookie '" . $cookie_name . "' is set!&lt;br /&gt;";<br />
            echo "Value is: " . $_COOKIE[$cookie_name];<br />
        }<br />
      ?&gt;<br />
    </code></pre>


    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>Note:</strong> The setcookie() function MUST appear BEFORE the opening html-tag</p>
    </div>

    <p><strong>Note:</strong> The value of the cookie is automatically URLencoded when sending the cookie, and automatically decoded when received (to prevent URLencoding, use <b>setrawcookie()</b> instead).</p>

    <hr />

    <h2>Modify a Cookie Value</h2>

    <p>To modify a cookie, just set (again) the cookie using the setcookie() function:</p>

    <hr />

    <h2>Delete a Cookie</h2>

    <p>To delete a cookie, use the setcookie() function with an expiration date in the past:</p>

    <h3>Example: delete cookie</h3>

    <pre><code class="language-php">
      //Place before opening html-tag
      &lt;!-- set and delete cookies examples --&gt;<br />
      &lt;?php<br />
        $cookie_name = "user";<br />
        $cookie_value = "Joe Row";<br />
        setcookie($cookie_name, $cookie_value, time() + (3600 * 30), "/"); // 86400 = 1 day<br />
      ?&gt;<br />
    </code></pre>

    <pre><code class="language-php">
      //echo confirmation in body
      &lt;?php<br />
        echo "Cookie 'user' is deleted.";<br />
      ?&gt;<br />
    </code></pre>

    <hr />

    <h2>Check if Cookies are Enabled</h2>

    <h3>Example: check if cookies are enabled</h3>

    <pre><code class="language-php">
      //Place before opening html-tag
      &lt;!-- check if cookies are enabled example --&gt;<br />
      &lt;?php<br />
      setcookie("test_cookie", "test", time() + 3600, '/');<br />
      ?&gt;
    </code></pre>

    <pre><code class="language-php">
      //Echo result in body
      &lt;?php<br />
        if (count($_COOKIE) &gt; 0) {<br />
            echo "Cookies are enabled.";<br />
        } else {<br />
            echo "Cookies are disabled.";<br />
        }<br />
      ?&gt;
    </code></pre>

  </body>
</html>
