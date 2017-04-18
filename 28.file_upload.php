<!DOCTYPE html>
<html>
  <head>
    <title>File Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>File Upload</h1>

    <p>You can upload files to the server with PHP, however, you must be careful when allowing file uploads!</p>

    <hr />

    <h2>Configure the "php.ini" File</h2>

    <p>First, ensure that PHP is configured to allow file uploads.</p>

    <p>In your "php.ini" file, search for the file_uploads directive, and set it to On:</p>

    <pre><code>
      file_uploads = On
    </code></pre>

    <hr />

    <h2>Create HTML Form</h2>

    <p>Next, create an HTML form that allows users to choose the image file they want to upload:</p>

    <pre><code class="language-php">
      &lt;form action="upload.php" method="post" enctype="multipart/form-data"&gt;<br />
            Select Image to Upload:&lt;br /&gt;&lt;br /&gt;<br />
            &lt;input type="file" name="fileToUpload" id="fileToUpload" /&gt;&lt;br /&gt;&lt;br /&gt;<br />
            &lt;input type="submit" value="Upload Image" name="submit" /&gt;<br />
      &lt;/form&gt;
    </code></pre>



    <h3>Rules to follow for HTML Form</h3>

    <ul>
      <li>Always use <b>method="post"</b></li>
      <li>The form must have the following attribute: <b>enctype="multipart/form-data"</b>. This specifies which <b>content-type</b> to use when submitting the form.</li>
    </ul>

    <p>Without the requirements above, the file upload will NOT work.</p>

    <h3>Other things to notice:</h3>

    <ul>
      <li>The <b>type="file"</b> attribute of the input-tag shows the input field as a file-select control, with a "Browse" button next to the input control.</li>
    </ul>

    <p>The form above sends data to a file called "upload.php", which we will create next.</p>

    <hr />

    <h2>Create Upload File PHP Script</h2>

    <p>The "upload.php" file contains the code for uploading a file:</p>

    <p><strong>See "upload.php" file</strong></p>

    <h3>PHP Script explained:</h3>

    <ul>
      <li><b>$target_dir="uploads"</b> - this specifies the directory where the file is going to be placed.</li>
      <li><b>$target_file</b> - this specifies the path of the file to be uploaded.</li>
      <li><b>$uploadOk=1</b> - is not used yet, but will be used later.</li>
      <li><b>$imageFileType</b> - holds the file extension of the file.</li>
      <li><b>Next check if the image file is an actual image file or a "fake" image.</b></li>
    </ul>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p>You will need to create a <b>new directory called "uploads"</b> in the same directory where "upload.php" resides. The uploaded files will be saved there.</p>
    </div>

    <hr />

    <h2>Check if File Already Exists</h2>

    <p>Now we can add some restrictions.</p>

    <p>First, we will check if the file already exists in the "uploads" folder. If it does, an error message is displayed, and $uploadOk is set to 0:</p>

    <pre><code class="language-php">
      // Check if file already exists<br />
      if (file_exists($target_file)) {<br />
          echo "Sorry, file already exists.";<br />
          $uploadOk = 0;<br />
      }
    </code></pre>


    <hr />

    <h2>Limit File Size</h2>

    <p>The file input field in our HTML form above is named "fileToUpload".</p>

    <p>Now, we want to check the size of the file. If the file is larger than 500kb, an error message is displayed, and $uploadOk is set to 0:</p>

    <pre><code class="language-php">
      // Check file size<br />
      if ($_FILES["fileToUpload"]["size"] &gt; 500000) {<br />
          echo "Sorry, your file is too large.";<br />
          $uploadOk = 0;<br />
      }
    </code></pre>

    <hr />

    <h2>Limit File Type</h2>

    <p>The code below only allows users to upload JPG, JPEG, PG, and GIF files. All other file types give an error message before setting $uploadOk to 0:</p>

    <pre><code class="language-php">
      // Allow certain file formats<br />
      if($imageFileType != "jpg" &amp;&amp; $imageFileType != "png" &amp;&amp; $imageFileType != "jpeg"<br />
      &amp;&amp; $imageFileType != "gif" ) {<br />
          echo "Sorry, only JPG, JPEG, PNG &amp; GIF files are allowed.";<br />
          $uploadOk = 0;<br />
      }
    </code></pre>

  </body>
</html>
