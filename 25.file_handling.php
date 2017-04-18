<!DOCTYPE html>
<html>
  <head>
    <title>File Handling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>File Handling</h1>

    <p>File handling is an important part of any web application. You often need to open and process a file for different tasks.</p>

    <hr />

    <h2>Manipulating Files</h2>

    <p>PHP has several functions for creating, reading, uploading and editing files.</p>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <h3>Be careful when manipulating files!</h3>
      <p>You can do damage if you do something wrong. Common errors are: editing the wrong file, filling a hard drive with garbage data, and deleting the content of a file by accident.</p>
    </div>

    <hr />

    <h2>readfile() Function</h2>

    <p>The readfile() function reads a file and writes it to the output buffer.</p>

    <p>Assume we have a text file called "webdictionary.txt", stored on the server, that looks like this:</p>

    <pre><code>
      AX = Asynchronous JavaScript and XML
      CSS = Cascading Style Sheets
      HTML = Hyper Text Markup Language
      PHP = PHP Hypertext Preprocessor
      SQL = Structured Query Language
      SVG = Scalable Vector Graphics
      XML = EXtensible Markup Language
    </code></pre>

    <p>The PHP code to read the file and write it to the output buffer is as follows: (the readfile() function returns the number of bytes read on success)</p>

    <pre><code class="language-php">
      &lt;?php<br />
        echo readfile("webdictionary.txt");<br />
      ?&gt;
    </code></pre>

    <p>The readfile() function is useful if all you want to do is open up a file and read its contents.</p>

  </body>
</html>
