<!DOCTYPE html>
<html>
  <head>
    <title>File Open/Read/Close</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>File Open/Read/Close</h1>

    <p>How to open, read and close a file on the server:</p>

    <h2>Open File - fopen()</h2>

    <p>A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.</p>

    <p>The firs parameter of the fopen() function contains the <b>name</b> of the file to be opened and the second parameter specifies in which <b>mode</b> the file should be opened. The following example also generates a message if the fopen() function is unable to open the specified file:</p>

    <pre><code>
      $myfile = fopen("webdictionary.txt", "x*") or die("Unable to open file!");
    </code></pre>

    <h3>Example: fopen(), fread(), fclose()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $myFile= fopen("webdictionary.txt", "r") or die("Unable to open file!");<br />
        echo fread($$myFile, filesize("webdictionary.txt"));<br />
        fclose($myFile);<br />
      ?&gt;
    </code></pre>

    <h2>Modes: The file may be opened in one of the following modes:</h2>

    <table class="w3-table-all">
      <tr>
        <th>Modes</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>r</td>
        <td><b>Open a file for read only:</b> file pointer starts at the beginning of the file</td>
      </tr>
      <tr>
        <td>w</td>
        <td><b>Open a file for write only:</b> erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file</td>
      </tr>
      <tr>
        <td>a</td>
        <td><b>Open a file for write only:</b> the existing data in the file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist</td>
      </tr>
      <tr>
        <td>x</td>
        <td><b>Creates a new file for write only:</b> returns FALSE and an error if the file already exists</td>
      </tr>
      <tr>
        <td>r+</td>
        <td><b>Open a file for read/write:</b> file pointer starts at the beginning of the file</td>
      </tr>
      <tr>
        <td>w+</td>
        <td><b>Open a file for read/write:</b> erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file</td>
      </tr>
      <tr>
        <td>a+</td>
        <td><b>Open a file for read/write:</b> the existing data in the file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist</td>
      </tr>
      <tr>
        <td>x+</td>
        <td><b>Creates a new file for read/write:</b> returns FALSE and an error if the file already exists</td>
      </tr>
    </table>

    <hr />

    <h2>Read File - fread()</h2>

    <p>The fread() function reads from an open file.</p>

    <p>The first parameter of fread() contains the name of the file to read from, and the second parameter specifies the maximum number of bytes to read.</p>

    <p>The following PHP code reads the "webdictionary.txt" file to the end.</p>

    <pre><code>
      fread($myfile,filesize("webdictionary.txt"));
    </code></pre>

    <hr />

    <h2>Close File - fclose()</h2>

    <p>The fclose() function is used to close an open file:</p>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p>It is a good practice to close all your files after finishing with them. You don't want an open file running on your server taking up resources.</p>
    </div>

    <p>The fclose() function requires the name of the file (or a variable that holds the filename) we want to close.</p>

    <pre><code>
      fclose($myfile);
    </code></pre>

    <hr />

    <h2>Read Single Line - fgets()</h2>

    <p>The fgets() function is used to read a single line from a file.</p>

    <h3>Example: output first line of "webdictionay.txt"</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $myFile = fopen("webdictionary.txt", "r") or die("Unable to read file!");<br />
        echo fgets($myFile);<br />
        fclose($myFile);<br />
      ?&gt;
    </code></pre>

    <p><strong>Note:</strong> after a call to the fgets() function, the file pointer has moved to the next line.</p>

    <hr />

    <h2>Check End-Of-File - feof()</h2>

    <p>The feof() function checks if the "end-of-file" (EOF) has been reached.</p>

    <p>The feof() function is useful for looping through data of unknown length.</p>

    <p>The example below reads "webdictionary.txt" file line by line, until end-of-file is reached:</p>

    <h3>Example: feof()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");<br />
        while (!feof($myFile)) {<br />
            echo fgets($myFile) . "&lt;br /&gt;";<br />
        }<br />
        fclose($myFile);<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Read Single Character - fgetc()</h2>

    <p>The fgetc() function is used to read a single character in a file.</p>

    <p>The example below reads the "webdictionary.txt" file character by character, until end of file is reached:</p>

    <h3>Example: fgetc()</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $myFile = fopen("webdictionary.txt", "r") or die("Unable to open file!");<br />
        while (!feof($myFile)) {<br />
            echo fgetc($myFile);<br />
        }<br />
        fclose($myFile);<br />
      ?&gt;
    </code></pre>

    <p><strong>Note:</strong> after a call to the fgetc() function, the file pointer moves to the next character.</p>

  </body>
</html>
