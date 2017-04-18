<!DOCTYPE html>
<html>
  <head>
    <title>File Create/Write</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>File Create/Write</h1>

    <p>How to create and write to a file on the server:</p>

    <h2>Create File - fopen()</h2>

    <p>The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.</p>

    <p>If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).</p>

    <h3>Example: create a file with fopen()</h3>

    <pre><code>
      $myFile = fopen("testfile.txt", "w") or die("Unable to open file!");
    </code></pre>

    <pre><code class="language-php">
      &lt;?php<br />
        $myFile = fopen("testfile.txt", "w") or die("Unable to open file!");<br />
        fclose($myFile);<br />
      ?&gt;
    </code></pre>



    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <h3>File Permissions</h3>
      <p>If you get an error while trying to open/create a file, check that you have granted your PHP file access to write information to the hard drive.</p>
    </div>

    <hr />

    <h2>Write to File - fwrite()</h2>

    <p>The fwrite() function is used to write to a file.</p>

    <p>The first parameter of fwrite() contains the name of the file to write to, and the second parameter is the string to be written.</p>

    <h3>Example: fopen(), fwrite(), fread()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        //open/create a file<br />
        $myFile = fopen("testfile.txt", "w") or die("Unable to open file!");<br />
  <br />
        //write to the file<br />
        $txt = "John Doe\n";<br />
        fwrite($myFile, $txt);<br />
  <br />
        $txt = "Jane Doe\n";<br />
        fwrite($myFile, $txt);<br />
        fclose($myFile);<br />
      ?&gt;
    </code></pre>

    <pre><code class="language-php">
    &lt;?php<br />
      //open and read the file // echo it out<br />
      $myFile = fopen("testfile.txt", "r") or die("Cannot open file!");<br />
      echo fread($myFile, filesize("testfile.txt"));<br />
      fclose($myFile);<br />
    ?&gt;
    </code></pre>



    <p>Notice that we wrote to the file "testfile.txt" twice. Each time we wrote to the file, we sent the string $txt that first contained "John Doe" and second contained "Jane Doe". After we finished writing, we closed the file using the fclose() function.</p>

    <p>If we open and look at the "testfile.txt" file, it would look like this:</p>

    <pre><code>
      John Doe
      Jane Doe
    </code></pre>

    <hr />

    <h2>Overwriting</h2>

    <p>Now that "testfile.txt" contains some data, we can show what happens when we open an existing file for writing. Using (w) all the existing data will be erased. Using (a) existing data will be preserved and new data will be appended.</p>

    <h3>Example: overwriting (w)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $myFile = fopen("testfile.txt", "w") or die("Unable to open file!");<br />
        $txt = "Mickey Mouse\n";<br />
        fwrite($myFile, $txt);<br />
        $txt = "Minnie Mouse\n";<br />
        fwrite($myFile, $txt);<br />
        fclose($myFile);<br />
      ?&gt;
    </code></pre>

  </body>
</html>
