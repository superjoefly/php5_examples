<!DOCTYPE html>
<html>
  <head>
    <title>Multidimensional Arrays</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Multidimensional Arrays</h1>

    <p>So far we've discussed arrays that are a single list of key/value pairs.</p>

    <p>However, sometimes you want to store values with more than one key.</p>

    <p>This can be done with multidimensional arrays.</p>

    <hr />

    <h2>Multidinensional Arrays</h2>

    <p>These types of arrays contain more than one array.</p>

    <p>PHP understands multidimensional arrays that are two, three, four, five or more levels deep. Arrays more than three levels deep are hard to manage for most people.</p>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <h3>The dimension of an array indicates the number of indices you need to select an element.</h3>

      <ul>
        <li>For a two-dimensional array, you need two indices to select an element</li>
        <li>For a three-dimensional array, you need three indeces to select an element</li>
      </ul>
    </div>

    <h3>Example: first look at the table:</h3>

    <table class="w3-table-all">
      <tr>
        <th>Name</th>
        <th>Stock</th>
        <th>Sold</th>
      </tr>
      <tr>
        <td>Volvo</td>
        <td>22</td>
        <td>18</td>
      </tr>
      <tr>
        <td>BMW</td>
        <td>15</td>
        <td>13</td>
      </tr>
      <tr>
        <td>Saab</td>
        <td>5</td>
        <td>2</td>
      </tr>
      <tr>
        <td>Land Rover</td>
        <td>17</td>
        <td>15</td>
      </tr>
    </table>

    <p>We can store the data from the table above in a two-dimensional array, like this:</p>

    <pre><code>
      $cars = array (
      array("Volvo",22,18),
      array("BMW",15,13),
      array("Saab",5,2),
      array("Land Rover",17,15)
      );
    </code></pre>

    <p>Now, the two-dimensional $cars array contains four arrays, and it has two indices: row and column.</p>

    <p>To get access to the elements of the $cars array, we must point to the two indices (row and column):</p>

    <h3>Example: accessing the elements (see code!)</h3>

    <pre><code class="language-php">
      &lt;?php<br />
        $cars = array(<br />
        array("Volvo",22,18),<br />
        array("BMW",15,13),<br />
        array("Saab",5,2),<br />
        array("Land Rover",17,15)<br />
        );<br />
  <br />
  <br />
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".&lt;br /&gt;";<br />
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".&lt;br /&gt;";<br />
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".&lt;br /&gt;";<br />
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".&lt;br /&gt;";<br />
      ?&gt;
    </code></pre>



    <h3>Example: accessing array elements using For loops</h3>
    <p>We can also put a For loop inside another For loop to get the elements of the $cars array (we still have to point to the two indices):</p>

    <pre><code class="language-php">
      &lt;?php<br />
        $cars = array(<br />
          array("Volvo",22,18),<br />
          array("BMW",15,13),<br />
          array("Saab",5,2),<br />
          array("Land Rover",17,15)<br />
          );<br />
  <br />
        for ($row = 0; $row &lt; 4; $row++) {<br />
          echo "&lt;p&gt;&lt;b&gt;Row number $row&lt;/b&gt;&lt;/p&gt;";<br />
          echo "&lt;ul&gt;";<br />
          for ($col = 0; $col &lt; 3; $col++) {<br />
              echo "&lt;li&gt;".$cars[$row][$col]."&lt;/li&gt;";<br />
          }<br />
          echo "&lt;/ul&gt;";<br />
        }<br />
      ?&gt;
    </code></pre>

  </body>
</html>
