<!DOCTYPE html>
<html>
  <head>
    <title>Required Fields</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Required Fields</h1>

    <p>From the validation rules on the previous page, we can see that the "Name", "E-mail", and "Gender" fields are required. These fields cannot be empty and must be filled out in the HTML form.</p>

    <table class="w3-table-all">
      <tr>
        <th>Field</th>
        <th>Validation Rules</th>
      </tr>
      <tr>
        <td>Name</td>
        <td>Required + Must only contain letters and white space</td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td>Required + Must contain a valid email address (with @ and .)</td>
      </tr>
      <tr>
        <td>Website</td>
        <td>Optional. If present must contain a valid URL</td>
      </tr>
      <tr>
        <td>Comment</td>
        <td>Optional. Multi-line input field (textarea)</td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>Required + Must select one</td>
      </tr>
    </table>

    <p>In the following code we have added some new variables: $nameErr, $emailErr, $genderErr, and $websiteErr. These error variables will hold error messages for the required fields. We have also added an if else statement for each $_POST variable. This checks if the $_POST variable is empty (with the PHP empty() function). If it is empty, an error message is stored in the different error variables, and if it is not empty, it sends the user input data through the test_input() function:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        //define variables and set to empty values<br />
        $nameErr = $eamilErr = $genderErr = $websiteErr = "";<br />
        $name = $emai = $gender = $comment = $website = "";<br />
  <br />
        if ($_SERVER["REQUEST_METHOD"] == "POST") {<br />
            if (empty($_POST["name"])) {<br />
                $nameErr = "Name is required";<br />
            } else {<br />
                $name = test_input($_POST["name"]);<br />
            }<br />
  <br />
            if (empty($_POST["email"])) {<br />
                $emailErr = "Email is required";<br />
            } else {<br />
                $email = test_input($_POST["email"]);<br />
            }<br />
  <br />
            if (empty($_POST["website"])) {<br />
                $website = "";<br />
            } else {<br />
                $website = test_input($_POST["website"]);<br />
            }<br />
  <br />
            if (empty($_POST["comment"])) {<br />
                $comment = "";<br />
            } else {<br />
                $comment = test_input($_POST["comment"]);<br />
            }<br />
  <br />
            if (empty($_POST["gender"])) {<br />
                $genderErr = "Gender is required";<br />
            } else {<br />
                $gender = test_input($_POST["gender"]);<br />
            }<br />
        }<br />
      ?&gt;
    </code></pre>



    <hr />

    <h2>Display the Error Messages</h2>

    <p>Then in the HTML form, we add a little script after each required field, which generatest the correct error message if needed (if the user tries to submit the form without filling out the required fields):</p>

    <pre><code class="language-php">
      &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;<br />
  <br />
      Name: &lt;input type="text" name="name"&gt;<br />
      &lt;span class="error"&gt;* &lt;?php echo $nameErr;?&gt;&lt;/span&gt;<br />
      &lt;br&gt;&lt;br&gt;<br />
      E-mail:<br />
      &lt;input type="text" name="email"&gt;<br />
      &lt;span class="error"&gt;* &lt;?php echo $emailErr;?&gt;&lt;/span&gt;<br />
      &lt;br&gt;&lt;br&gt;<br />
      Website:<br />
      &lt;input type="text" name="website"&gt;<br />
      &lt;span class="error"&gt;&lt;?php echo $websiteErr;?&gt;&lt;/span&gt;<br />
      &lt;br&gt;&lt;br&gt;<br />
      Comment: &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;/textarea&gt;<br />
      &lt;br&gt;&lt;br&gt;<br />
      Gender:<br />
      &lt;input type="radio" name="gender" value="female"&gt;Female<br />
      &lt;input type="radio" name="gender" value="male"&gt;Male<br />
      &lt;span class="error"&gt;* &lt;?php echo $genderErr;?&gt;&lt;/span&gt;<br />
      &lt;br&gt;&lt;br&gt;<br />
      &lt;input type="submit" name="submit" value="Submit"&gt;<br />
      <br />
      &lt;/form&gt;
    </code></pre>

    <p>The next step is to validate the input data, that is "does the input field meet all the required specifications...white space, characters, valid email syntax, valid URL etc..."</p>

  </body>
</html>
