<!DOCTYPE html>
<html>
  <head>
    <title>Data Types</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Data Types</h1>

    <p>Variables can store data of different types, and different data types can do different things.</p>

    <p>PHP supports the following data types:</p>

    <ul>
      <li>string</li>
      <li>integer</li>
      <li>float (floating point numbers - also called double)</li>
      <li>boolean</li>
      <li>array</li>
      <li>object</li>
      <li>null</li>
      <li>resource</li>
    </ul>

    <hr />

    <h2>PHP String</h2>

    <p>A string is a sequence of characters like "Hello World!".</p>

    <p>A string can be any text inside quotes. You can use single or double quotes.</p>

    <h3>Example (string)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = "Hello World!";<br />
        $y = 'Hello World!';<br />
  <br />
        echo $x;<br />
        echo "&lt;br /&gt;";<br />
        echo $y;<br />
      ?&gt;<br />
  <br />
    </code></pre>

    <hr />

    <h2>PHP Integer</h2>

    <p>An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.</p>

    <p>Rules for integers:</p>

    <ul>
      <li>An integer must have at least one digit</li>
      <li>An integer must not have a decimal point</li>
      <li>An integer can be either positive or negative</li>
      <li>Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with Ox), or octal (8-based - prefixed with O)</li>
    </ul>

    <h3>Example: (integer using var_dump() function to return data-type and value)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 3545;<br />
        var_dump($x);<br />
      ?&gt;<br />
  <br />
  <br />
    </code></pre>

    <hr />

    <h2>PHP Float</h2>

    <p>A float (floating point number) is a number with a decimal point or a number in exponential form.</p>

    <h3>Example (float using var_dump() function to return data-type and value)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = 3.14;<br />
        var_dump($x);<br />
      ?&gt;<br />
  <br />
    </code></pre>

    <hr />

    <h2>PHP Boolean</h2>

    <p>A boolean represents two possible states: TRUE or FALSE.</p>

    <pre><code class="language-php">
      $x = true;<br />
      $y = false;
    </code></pre>

    <p>Booleans are often used in conditional testing.</p>

    <hr />

    <h2>PHP Array</h2>

    <p>An array stores multiple values in one single variable.</p>

    <h3>Example (array using var_dump() function to display data-type and value)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $cars = array("BMW", "Audi", "Porche");<br />
        var_dump($cars);<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>PHP Object</h2>

    <p>An object is a data type which stores data and information on how to process that data.</p>

    <p>In PHP an object must be explicityly declared.</p>

    <p>First we must declare a class of object. For this, we use the class keyword. A class is a structure that can contain properties and methods.</p>

    <h3>Example (object)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        //declare a class of object<br />
        class Car<br />
        {<br />
            public function Car()<br />
            {<br />
                $this-&gt;model = "VW";<br />
            }<br />
        }<br />
  <br />
        //create an object<br />
        $herbie = new Car();<br />
  <br />
        //show object properties<br />
        echo $herbie-&gt;model;<br />
      ?&gt;<br />
    </code></pre>

    <hr />

    <h2>PHP Null Value</h2>

    <p>Null is a special data type which can have only one value: NULL</p>

    <p>A variable of data type NULL is a variable that has no value assigned to it.</p>

    <p><strong>Tip:</strong> if a variable is created without a value, it is automatically assigned a value of NULL.</p>

    <p>Variables can also be emptied by setting the value to NULL:</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $x = "Hello World!";<br />
        $x = null;<br />
        var_dump($x);<br />
      ?&gt;<br />

    </code></pre>

    <hr />

    <h2>PHP Resource</h2>

    <p>The special resource type is not an actual data-type. It is the storing of a reference to functions and resources that are external to PHP.</p>

    <p>A common example of using the resource data-type is a database call.</p>

  </body>
</html>
