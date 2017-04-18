<!DOCTYPE html>
<html>
  <head>
    <title>Error Handling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Error Handling</h1>

    <p>The default error handling in PHP is very simple. An error message with filename, line number and a message describing the error is sent to the browser.</p>

    <hr />

    <h2>Error Handling</h2>

    <p>When creating scripts and web applications, error handling is an important part. If your code lacks error checking code, your program may look very unprofessional and you may be open to security risks.</p>

    <p>This tutorial contains some of the most common error checking methods in PHP.</p>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <h3>Different Error Handling Methods:</h3>
      <ul>
        <li>Simple "die()" statements</li>
        <li>custrom errors and error triggers</li>
        <li>error reporting</li>
      </ul>
    </div>

    <hr />

    <h2>Basic Error Handling: Using the die() function</h2>

    <h3>Example: die() function</h3>

    <p>This example shows a script that opens a text file:</p>

    <pre><code class="language-php">
      &lt;?php<br />
      $file=fopen("welcome.txt", "r");<br />
      ?&gt;
    </code></pre>

    <p>If the file does not exist, you may get an error message like this:</p>

    <pre><code>
      Warning: fopen(welcome.txt) [function.fopen]: failed to open stream:
      No such file or directory in C:\webfolder\test.php on line 2
    </code></pre>

    <p>To prevent the user from getting an error message like the one above, we test whether the file exists before we try to access it.</p>

    <pre><code class="language-php">
      &lt;?php<br />
      //Stops the script<br />
  <br />
      if (!file_exists("welcome.txt")) {<br />
          die("File not found");<br />
      } else {<br />
          $file = fopen("welcome.txt", "r");<br />
      }<br />
      ?&gt;
    </code></pre>

    <p>The second code is more efficient because it uses a simple handling mechanism to stop the script after the error.</p>

    <p>However, simply stopping the script is not always the right way to go. Lets take a look at alternative PHP functions for handling errors.</p>

    <hr />

    <h2>Custom Error Handler</h2>

    <p>To create a custom error handler, create a special function that can be called when an error occurs in PHP.</p>

    <p>The function must be able to handle a minimum of two parameters (error level and error message) but can accept up to five parameters (optionally: file, line-number, and error context):</p>

    <pre><code>
      error_function(error_level, error_message
      error_file, error_line, error_context)
    </code></pre>

    <table class="w3-table-all">
      <tr>
        <th>Parameter</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>error_level</td>
        <td>required; specifes the error report level for the user-defined error. Must be a value number.</td>
      </tr>
      <tr>
        <td>error_message</td>
        <td>required; specifies the error message for the user-defined error</td>
      </tr>
      <tr>
        <td>error_file</td>
        <td>optional; specifies the filename in which the error occurred</td>
      </tr>
      <tr>
        <td>error_line</td>
        <td>optional; specifies the line number in which the error occurred</td>
      </tr>
      <tr>
        <td>error_context</td>
        <td>optional; specifies an array containing every variable, and their values, in use when the error occurred</td>
      </tr>
    </table>

    <hr />

    <h2>Error Report Levels</h2>

    <p>These error report levels are the different type of errors the user-defined error handler can be used for:</p>

    <table class="w3-table-all">
      <tr>
        <th>Value</th>
        <th>Constant</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>2</td>
        <td>E-WARNING</td>
        <td>non-fatal run-time errors; execution of the script is not halted</td>
      </tr>
      <tr>
        <td>8</td>
        <td>E_NOTICE</td>
        <td>run-time notices; the script found something that might be an error, but could also happen when running a script normally</td>
      </tr>
      <tr>
        <td>256</td>
        <td>E_USER_ERROR</td>
        <td>fatal user-generated error; this is like an E_ERROR set by the programmer using the PHP function trigger_error()</td>
      </tr>
      <tr>
        <td>512</td>
        <td>E_USER_WARNING</td>
        <td>non-fatal user-generated warning; this is like an E_WARNING set by the programmer using the PHP function trigger_error()</td>
      </tr>
      <tr>
        <td>1024</td>
        <td>E_USER_NOTICE</td>
        <td>user-generated notice; this is like an E_NOTICE set by the programmer using the PHP function trigger_error()</td>
      </tr>
      <tr>
        <td>4096</td>
        <td>E_RECOVERABLE_ERROR</td>
        <td>catchable fatal error; this is like an E_ERROR but can be caught by a user defined handle (see also set_error_handler())</td>
      </tr>
      <tr>
        <td>8191</td>
        <td>E_ALL</td>
        <td>all errors and warnings (E_STRICT became a part of E_ALL in PHP 5.4)</td>
      </tr>
    </table>

    <p>Now, lets create a function to handle errors:</p>

    <pre><code>
      function customError($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr";
          echo "Ending Script";
          die();
      }
    </code></pre>

    <p>The code above is a simple error handling function. When it is triggered, it gets the error level of an error message. It then outputs the error level and message and terminates the script.</p>

    <p>Now we need to decide when the error handling function will be triggered.</p>

    <hr />

    <h2>Set Error Handler</h2>

    <p>The default error handler for PHP is the built in error handler. We are going to make the function above the default error handler for the duration of the script.</p>

    <p>It is possible to change the error handler to apply for only some errors, that way the script can handle different errors in different ways. However, in this example we are going to use our custom error handler for all errors:</p>

    <pre><code>
      set_error_handler("customError");
    </code></pre>

    <p>Since we want our custom function to handle all errors, the set_error_handler() only needs one parameter, a second parameter could be added to specify an error level.</p>

    <h3>Example: test the error handler by trying to output a variable that does not exist:</h3>

    <!-- Note: this can be used at the beginning of the document to produce/display errors in the browser while using Atom's php-server. -->

    <pre><code class="language-php">
      &lt;?php<br />
      // error handler function<br />
      function customError($errno, $errstr)<br />
      {<br />
          echo "&lt;b&gt;Error: &lt;/b&gt; [$errno] $errstr";<br />
      }<br />
      <br />
      //set error handler<br />
      set_error_handler("customError");<br />
      ?&gt;<br />
  <br />
      &lt;?php<br />
      //trigger error<br />
      echo($test);<br />
      ?&gt;
    </code></pre>

    <p>The output of the code above should be something like this:</p>

    <pre><code>
      Error: [8] Undefined variable: test
    </code></pre>

    <hr />

    <h2>Triggering an Error</h2>

    <p>In a script where users can input data, it is useful to trigger errors when an illegal input occurs. In PHP, this is done by the trigger_error() function.</p>

    <h3>Example: trigger_error()</h3>

    <p>In this example, an error occurs if the "test" variable is bigger than "1":</p>

    <pre><code class="language-php">
      &lt;?php<br />
      $test=2;<br />
      if ($test &gt; 1) {<br />
          trigger_error("Value must be 1 or below");<br />
      }<br />
      ?&gt;
    </code></pre>

    <p>The output of the code above should be something like this:</p>

    <pre><code>
      Notice: Value must be 1 or below
      in ...
    </code></pre>

    <p>An error can be triggered anywhere you wish in a script, and by adding a second parameter, you can specify what error level is triggered.</p>

    <p>Possible error types:</p>

    <ul>
      <li>E_USER_ERROR - Fatal user-generated run-time error; errors that cannot be recovered from. Execution of script is halted.</li>
      <li>E_USER_WARNING - Non-fatal user-generated run-time warning; execution of the script is not halted.</li>
      <li>E_USER_NOTICE - Default; User-generated run-time notice; the script found something that might be an error, but could also happen when running a script normally.</li>
    </ul>

    <hr />

    <h3>Example: E_USER_WARNING</h3>

    <p>In this example, an E_USER_WARNING occurs if the "test" variable is bigger than "1". If an E_USER_WARNING occurs, we will use our custom error handler and end the script:</p>

    <pre><code class="language-php">
      &lt;?php<br />
      //error handler function<br />
      function customError($errno, $errstr)<br />
      {<br />
          echo "&lt;b&gt;Error: &lt;/b&gt; [$errno] $errstr&lt;br /&gt;";<br />
          echo "Ending Script";<br />
          die();<br />
      }<br />
      <br />
      //set error handler<br />
      set_error_handler("customError", E_USER_WARNING);<br />
      <br />
      //trigger error<br />
      $test=2;<br />
      if ($test &gt; 1) {<br />
          trigger_error("Value must be 1 or below", E_USER_WARNING);<br />
      }<br />
      ?&gt;
    </code></pre>

    <p>The output of the code above should be something like this:</p>

    <pre><code>
      Error: [512] Value must be 1 or below
      Ending Script
    </code></pre>

    <p>Now that we have learned how to create our own errors and how to handle them, lets take a look at error logging.</p>

    <hr />

    <h2>Error Logging</h2>

    <p>By default, PHP sends an error log to the server's logging system or a file, depending on how the error_log configuration is set in the php.ini file. By using the error_log() function you can send error logs to a specified file or a remote destination.</p>

    <hr />

    <h2>Send Error Message by Email</h2>

    <h3>Example: send email with an error message and end the script, if a specific error occurs:</h3>

    <pre><code class="language-php">
      &lt;?php<br />
      //error handler function<br />
      function customError($errno, $errstr)<br />
      {<br />
          echo "&lt;b&gt;Error: &lt;/b&gt; [$errno] $errstr&lt;br /&gt;";<br />
          echo "Webmaster has been notified";<br />
          error_log("Error: [$errno] $errstr", 1, "superjoefly@gmail.com", "From: admin@test.com");<br />
      }<br />
  <br />
      //set error handler<br />
      set_error_handler("customError", E_USER_WARNING);<br />
  <br />
      //trigger error<br />
      $test=2;<br />
      if ($test&gt;=1) {<br />
          trigger_error("Value must be 1 or below", E_USER_WARNING);<br />
      }<br />
      ?&gt;
    </code></pre>

    <p>The output of the code above should be something like this:</p>

    <pre><code>
      Error: [512] Value must be 1 or below
      Webmaster has been notified
    </code></pre>

    <p>And the mail received from the code above looks like this:</p>

    <pre><code>
      Error: [512] Value must be 1 or below
    </code></pre>

    <p><strong>This should not be used with all errors. Regular errors should be logged on the server using the default PHP logging system.</strong></p>

  </body>
</html>
