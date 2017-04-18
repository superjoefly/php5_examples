<!DOCTYPE html>
<html>
  <head>
    <title>Filters Advanced</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Filters Advanced</h1>

    <h2>Validate an Integer Within a Range</h2>

    <p>The following example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200:</p>

    <h3>Example: check if valid integer and within a range:</h3>

    <pre><code class="language-php">
      &lt;?php<br />
      $int = 122;<br />
      $min = 1;<br />
      $max = 200;<br />
  <br />
      if (filter_var($int, FILTER_VALIDATE_INT, array("options" =&gt; array("min_range" =&gt; $min, "max_range" =&gt; $max))) === false) {<br />
          echo("Variable value is not within the legal range");<br />
      } else {<br />
          echo("Variable value is within the leagal range");<br />
      }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Validate IPv^ Address</h2>

    <p>The following example uses the filter_var() function to check if the variable $ip is a valid IPv6 address:</p>

    <h3>Example: check if valid IPv6</h3>

    <pre><code class="language-php">
      &lt;?php<br />
      $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";<br />
  <br />
      if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {<br />
          echo("$ip is a valid IPv6 address");<br />
      } else {<br />
          echo("$ip is not a valid IPv6 address");<br />
      }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Validat URL - Must Contain QueryString</h2>

    <p>The following example uses the filter_var() function to check if the variable $url is a URL with a querystring:</p>

    <h3>Example: does $url have querystring</h3>

    <pre><code class="language-php">
      &lt;?php<br />
      $url = "https://www.google.com";<br />
  <br />
      if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {<br />
          echo("$url is a valid URL");<br />
      } else {<br />
          echo("$url is not a valid URL");<br />
      }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Remove Characters with ASC11 Value > 127</h2>

    <p>The following example uses the filter_var() function to sanitize a string. It will remove all HTML tags, and all characters with ASC11 value > 127, from the string.</p>

    <h3>Example: remove ASC11 characters</h3>

    <pre><code class="language-php">
      &lt;?php<br />
      $str = "&lt;h1&gt;Hello ThereÆØÅ!&lt;/h1&gt;";<br />
  <br />
      $newStr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);<br />
      echo $newStr;<br />
      ?&gt;
    </code></pre>

  </body>
</html>
