<!DOCTYPE html>
<html>
  <head>
    <title>Date and Time</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Date and Time</h1>

    <p>The PHP date() function is used to format date and/or time.</p>

    <p>The PHP date() function formats a timestamp to a more readable date and time.</p>

    <pre><code>
      date(format,timestamp)
    </code></pre>

    <table class="w3-table-all">
      <tr>
        <th>Parameter</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>format</td>
        <td>required; specifies the formate of the timestamp</td>
      </tr>
      <tr>
        <td>timestamp</td>
        <td>optional, specifies a timestamp...default is current date and time</td>
      </tr>
    </table>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p>A timestamp is a sequence of characters, denoting the date and/or time at which a certain event occured.</p>
    </div>

    <hr />

    <h2>Get Date</h2>

    <p>The required format parameter of the date() function specifies how to format the date (or time).</p>

    <h3>Examples:</h3>

    <ul>
      <li>d - represents day of month (01-31)</li>
      <li>m - represents a month (01-12)</li>
      <li>Y - represents a year (in four digits)</li>
      <li>lowercase 'L' - represents day of week</li>
    </ul>

    <p>Other characters like "/", ".", or "-" can also be inserted between the characters to add additional formatting.</p>

    <h3>Format Todays Date (3 different ways)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo "Today is " . date("Y/m/d") . "&lt;br /&gt;";<br />
        echo "Today is " . date("Y.m.d") . "&lt;br /&gt;";<br />
        echo "Today is " . date("Y-m-d") . "&lt;br /&gt;";<br />

        //to hard code
        echo "Today is " . date("1");<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Automatic Copyright Year</h2>

    <p>Use the date() function to automatically update the copyright year on your website:</p>

    <pre><code class="language-php">
      &lt;p&gt;Copyright &amp;copy; 2010 - &lt;?php echo date("Y");?&gt;&lt;/p&gt;
    </code></pre>

    <hr />

    <h2>Get Time</h2>

    <p>Here are some characters that are commonly used for time:</p>

    <ul>
      <li>h - 12-hour format of an hour with leading zeros (01-12)</li>
      <li>i - minutes with leading zeros (00-59)</li>
      <li>s - seconds with leading zeros (00-59)</li>
      <li>a - lowercase Ante meridiem and Post meridiem (am or pm)</li>
    </ul>

    <h3>Example: simple time</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        echo "The time is " . date("h:i:sa");<br />
      ?&gt;
    </code></pre>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p>The PHP date() function returns the current date/time of the server!</p>
    </div>

    <hr />

    <h2>Get Time Zone</h2>

    <p>If the time you get back from the code is not the right time, it's probably because your server is in another country or set up for a different time zone.</p>

    <p>If you need the time to be correct according to a specific location, you can set a time zone to use.</p>

    <h3>Example: set time zone</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        date_default_timezone_set("America/New_York");<br />
        echo "The time is " . date("h:i:sa");<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Create a Date with mktime()</h2>

    <p>The optional timestamp parameter in the date() function specifies a timestamp. If you do not specify a timestamp, the current date and time will be used.</p>

    <p>The mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.</p>

    <pre><code>
      mktime(hour, minute, second, month, day, year)
    </code></pre>

    <h3>Example: mktime()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $d = mktime(11, 14, 54, 8, 12, 2014);<br />
        echo "Created date is " . date("Y-m-d h:i:sa", $d);<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Create Date from String using strtotime()</h2>

    <p>The PHP strtotime() function is used to convert a human readable string to Unix time.</p>

    <pre><code>
      strtotime(time, now)
    </code></pre>

    <h3>Example: strtotime()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $d = strtotime("10:30pm April 15 2014");<br />
        echo "Created date is " . date("Y-m-d h:i:sa");<br />
      ?&gt;
    </code></pre>

    <p>PHP is clever about converting a string to a date, so you can put in vairous values:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $d = strtotime("tomorrow");<br />
        echo date("Y-m-d h:i:sa", $d) . "&lt;br /&gt;";<br />
  <br />
        $d = strtotime("next Saturday");<br />
        echo date("Y-m-d h:i:sa", $d) . "&lt;br /&gt;";<br />
  <br />
        $d = strtotime("+3 Months");<br />
        echo date("Y-m-d h:i:sa", $d) . "&lt;br /&gt;";<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>More Date Examples</h2>

    <h3>Example: dates for the next six Saturdays</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $startdate = strtotime("Saturday");<br />
        $enddate = strtotime("+6 weeks", $startdate);<br />
  <br />
        while ($startdate &lt; $enddate) {<br />
            echo date("M d", $startdate) . "&lt;br /&gt;";<br />
            $startdate = strtotime("+1 week", $startdate);<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h3>Example: number of days until 4th of July</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $d1 = strtotime("July 04");<br />
        $d2 = ceil(($d1-time())/60/60/24);<br />
        echo "There are " . $d2 . " days until 4th of July.";<br />
      ?&gt;
    </code></pre>

  </body>
</html>
