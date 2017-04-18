<!DOCTYPE html>
<html>
  <head>
    <title>Arrays</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Arrays</h1>

    <p>An array stores multiple values in one single variable:</p>

    <h3>Example: array</h3>

    <pre><code class="language-php">
      &lt;?php<br />
            $cars = array("Volvo", "BMW", "Toyota");<br />
            echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";<br />
          ?&gt;<br />
    </code></pre>



    <hr />

    <h2>What is an Array?</h2>

    <p>An array is a special variable which can hold more than one value at a time.</p>

    <p>If you have a list of items (a list of car names for example), storing the cars in single variables could look like this:</p>

    <pre><code>
      $cars1 = "Volvo";
      $cars2 = "BMW";
      $cars3 = "Toyota";
    </code></pre>

    <p>In order to loop through the cars to find a specific one, especially in cases when you have many items, the solution is to create an array.</p>

    <p>An array can hold many values under a single name, and you can access the values by referring to an index number.</p>

    <hr />

    <h2>Create an Array</h2>

    <p>In PHP, the array() function is used to create an array:</p>

    <pre><code>
      array();
    </code></pre>

    <p>In PHP, there are three types of arrays:</p>

    <ul>
      <li>indexed arrays: arrays with a numeric index</li>
      <li>associative arrays: arrays with named keys</li>
      <li>multidimensional arrays: arrays containing one or more arrays</li>
    </ul>

    <hr />

    <h2>Indexed Arrays</h2>

    <p>There are two ways to create indexed arrays:</p>

    <p>The index can be assigned automatically (index always starts at 0), like this:</p>

    <pre><code>
      $cars = array("Volvo", "BMW", "Toyota");
    </code></pre>

    <p>or the index can be assigned manually like this:</p>

    <pre><code>
      $cars[0] = "Volvo";
      $cars[1] = "BMW";
      $cars[2] = "Toyota";
    </code></pre>

    <h3>Example: create an indexed array and print its values:</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $cars = array("Volvo", "BMW", "Toyota");<br />
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "!";<br />
      ?&gt;<br />

    </code></pre>

    <hr />

    <h2>Array Length</h2>

    <p>The count() function is used to get the length (the number of elements) of an array:</p>

    <h3>Example: get the length of an array:</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $cars = array("Volvo", "BMW", "Toyota");<br />
        echo count($cars);<br />
      ?&gt;<br />
    </code></pre>



    <hr />

    <h2>Loop Through an Indexed Array</h2>

    <p>To loop through and print the values of an indexed array, use a for loop:</p>

    <h3>Example: loop through indexed array:</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $cars = array("Volvo", "BMW", "Toyota");<br />
        $arraylength = count($cars);<br />
  <br />
        for ($x = 0; $x &lt; $arraylength; $x++) {<br />
            echo $cars[$x];<br />
            echo "&lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Associative Arrays</h2>

    <p>Associative arrays are arrays that use named keys that you assign to them.</p>

    <p>There are two ways to create an associative array:</p>

    <pre><code>
      $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    </code></pre>

    or...

    <pre><code>
      $age['peter'] = "35";
      $age['Ben'] = "37";
      $age['Joe'] = "43";
    </code></pre>

    <p>The named keys can then be used in a script:</p>

    <h3>Example: associative array</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $age = array("Peter"=&gt;"35", "Ben"=&gt;"37", "Joe"=&gt;"43");<br />
        echo "Peter is " . $age['Peter']. " years old.";<br />
      ?&gt;
    </code></pre>

    <hr />

    <h2>Loop Through Assiociative Array</h2>

    <p>To loop through the values of an associative array, use a foreach loop:</p>

    <h3>Example: loop through values of associative array:</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $age = array("Peter"=&gt;"35", "Ben"=&gt;"37", "Joe"=&gt;"43");<br />
  <br />
        foreach ($age as $x =&gt; $x_value) {<br />
            echo "Key=" . $x . ", Value=" . $x_value;<br />
            echo "&lt;br /&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

    <hr />

    <h3>Multidimensional arrays are explained in the advanced php secion.</h3>

  </body>
</html>
