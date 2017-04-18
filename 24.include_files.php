<!DOCTYPE html>
<html>
  <head>
    <title>Include Files</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Include Files</h1>

    <p>The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.</p>

    <p>Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.</p>

    <hr />

    <h2>Include and Require Statements</h2>

    <p>It is possible to insert the content of one PHP file into another PHP file (before the server executes it), with the include or require statement.</p>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <h4>The include and require statements are identical, except upon failure:</h4>

      <ul>
        <li>require will produce a fatal error (E_COMPILE_ERROR) and stop the script</li>
        <li>include will only produce a warning (E_WARNING) and the script will continue</li>
      </ul>
    </div>

    <p>So, if you want the execution to go on and show users the output, even if the include file is missing, use the include statement. Otherwise, in case of FrameWork, CMS, or a complex PHP application coding, always use the require statement to include a key file to the flow of execution. This will help avoid compromising your application's security and integrity, just in-case one key file is accidentally missing.</p>

    <p>Including files saves a lot of work. This means that you can create a standard header, footer, or menu file for all your webpages. Then when the header needs to be updated, you only have to update the header include file.</p>

    <pre><code>
      include 'filename';
      //or
      require 'filename';
    </code></pre>

    <hr />

    <h2>PHP include Examples</h2>

    <h3>Example 1: include footer.php</h3>

    <p>Assume we have a file called footer.php with a footer in it. To include the footer in other pages, use the include statement:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        include 'footer.php';<br />
      ?&gt;
    </code></pre>



    <hr />

    <h3>Example 2: include menu.php</h3>

    <p>Assume we have a menu.php file that has a menu in it. To include the menu in other pages, use the include statement:</p>

    <pre><code class="language-php">
      &lt;div class="menu"&gt;<br />
      &lt;?php<br />
        include 'menu.php'<br />
      ?&gt;<br />
      &lt;/div&gt;
    </code></pre>

    <hr />

    <h3>Example 3: include vars.php</h3>

    <p>Assume we have a file called vars.php that has variables already defined. If we include the vars.php file, the variables can be used in the calling file:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        include 'vars.php';<br />
        echo "I have a $color $car";<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>PHP Include vs Require</h2>

    <p>The require statement is also used to include a file into the PHP code.</p>

    <p>There is one big difference between include and require...when a file is included with the <b>include</b> statement, and PHP cannot find it, the script will continue to execute:</p>

    <h3>Example: including file that doesn't exist</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        include 'noFileExists.php';<br />
        echo "I have a $color $car";<br />
      ?&gt;
    </code></pre>

    <hr />

    <p>If we do the same example using a <b>require</b> statement, the echo statement will not be executed because the script execution dies after the require statement returns a fatal error:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        require 'noFileExists.php';<br />
        echo "I have a $color $car";<br />
      ?&gt;
    </code></pre>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p>Use <b>require</b> when the file is required by the application.</p>

      <p>Use <b>include</b> when the file is NOT required and the application should continue when file is not found.</p>
    </div>

  </body>
</html>
