<!DOCTYPE html>
<html>
  <head>
    <title>Filters</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Filters</h1>

  <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p>Validating Data = determine if the data is in proper form</p>
      <p>Sanitizing Data = remove any illegal characters</p>
  </div>

  <h2>Filter Extension</h2>

  <p>PHP filters are used to validate and sanitize external input.</p>

  <p>The PHP filter extension has many of the functions needed for checking user input, and is designed to make data validation easier and quicker.</p>

  <p>The filter_list() function can be used to list what the PHP filter extension offers:</p>

  <pre><code class="language-php">
    &lt;table class="w3-table-all"&gt;<br />
        &lt;tr&gt;<br />
          &lt;td&gt;Filter Name&lt;/td&gt;<br />
          &lt;td&gt;Filter ID&lt;/td&gt;<br />
        &lt;/tr&gt;<br />
        &lt;?php<br />
        foreach (filter_list() as $id =&gt;$filter) {<br />
            echo '&lt;tr&gt;&lt;td&gt;' .$filter . '&lt;/td&gt;&lt;td&gt;' .filter_id($filter) .'&lt;/td&gt;&lt;/tr&gt;';<br />
        }<br />
        ?&gt;
    &lt;/table&gt;
  </code></pre>




  <hr />

  <h2>Why Use Filters?</h2>

  <p>Many web applications receive external input. External input/data can be:</p>

  <ul>
    <li>user input from a form</li>
    <li>cookies</li>
    <li>web services data</li>
    <li>server variables</li>
    <li>database query results</li>
  </ul>

  <div class="w3-panel w3-border-orange w3-rightbar w3-pale-yellow">
    <h3>You should always validate external data!</h3>

    <p>Invalid submitted data can lead to security problems and break your webpage!</p>
    <p>By using PHP filters, you can be sure your applications get the correct input!</p>
  </div>

  <hr />

  <h2>PHP filter_var() Function</h2>

  <p>The filter_var() function both validates and sanitizes data.</p>

  <p>The filter_var() function filters a single variable with a specified filter. It takes two pieces of data:</p>

  <ul>
    <li>the variable you want to check</li>
    <li>the type of check to use</li>
  </ul>

  <hr />

  <h2>Sanitize a String</h2>

  <h3>Example: filter_var($str, FILTER_SANITIZE_STRING) - remove all HTML tags from a string:</h3>

  <pre><code class="language-php">
    &lt;?php<br />
      $str = "&lt;h1&gt;Hello There!&lt;/h1&gt;";<br />
      $newstr = filter_var($str, FILTER_SANITIZE_STRING);<br />
      echo $newstr;<br />
    ?&gt;
  </code></pre>

  <hr />

  <h2>Validate an Integer</h2>

  <p>The next example uses the filter_var() function to check if the variable $int is an integer. If $int is an integer, the output of the code below will be: "Integer is valid". If $int is not an integer, the output will be: "Integer is not valid":</p>

  <h2>Example: filter_var($int, FILTER_VALIDATE_INT)</h2>

  <pre><code class="language-php">
    &lt;?php<br />
    $int = 100;<br />
  <br />
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {<br />
        echo("Integer is valid");<br />
    } else {<br />
        echo("Integer is not valid");<br />
    }<br />
    ?&gt;
  </code></pre>

  <hr />

  <h2>Tip: filter_var() and Problem With O</h2>

  <p>In the example above, if $int was set to 0, the function above will return "Integer is not valid". To solve this problem, use the code below:</p>

  <pre><code class="language-php">
    &lt;?php<br />
    $int = 0;<br />
  <br />
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {<br />
        echo("Integer is valid");<br />
    } else {<br />
        echo("Integer is not valid");<br />
    }<br />
    ?&gt;
  </code></pre>



  <hr />

  <h2>Validate an IP Address</h2>

  <p>The following example uses the filter_var() function to check if the variable $ip is a valid IP address:</p>

  <h3>Example: filter_var($ip, FILTER_VALIDATE_IP)</h3>


  <pre><code class="language-php">
    &lt;?php<br />
    $ip = "127.0.0.1";<br />
  <br />
    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {<br />
        echo("$ip is a valid IP address");<br />
    } else {<br />
        echo("$ip is not a valid IP address");<br />
    }<br />
    ?&gt;
  </code></pre>


  <hr />

  <h2>Sanitize and Validate an Email Address</h2>

  <p>The following example uses the filter_var() function to first remove all illegal characters from the $email variable, then check if it is a valid email address:</p>

  <h3>Example: filter_var($email, FILTER_SANITIZE_EMAIL)</h3>


  <pre><code class="language-php">
    &lt;?php<br />
    $email = "john.doe@example.com";<br />
  <br />
    //remove illegal characters<br />
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);<br />
  <br />
    //validate email<br />
    if (!filter_var($email, FILTER_SANITIZE_EMAIL) === false) {<br />
        echo("$email is a valid email address");<br />
    } else {<br />
        echo("$emai is not a valid email address");<br />
    }<br />
    ?&gt;
  </code></pre>

  <hr />

  <h2>Sanitize and Validate a URL</h2>

  <p>The following example uses the filter_var() function to first remove any illegal characters from a URL, then check if $url is a valid URL:</p>

  <h3>Example: filter_var($url, FILTER_VALIDATE_URL)</h3>

  <pre><code class="language-php">
    &lt;?php<br />
    $url = "https://www.bing.com";<br />
  <br />
    //remove illegal characters<br />
    $url = filter_var($url, FILTER_SANITIZE_URL);<br />
  <br />
    //validate url<br />
    if (!filter_var($url, FILTER_SANITIZE_URL) === false) {<br />
        echo("$url is a valid URL");<br />
    } else {<br />
        echo("$url is not a valid URL");<br />
    }<br />
    ?&gt;
  </code></pre>

  </body>
</html>
