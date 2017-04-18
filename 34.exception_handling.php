<!DOCTYPE html>
<html>
  <head>
    <title>Exception Handling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Exception Handling</h1>

    <p>Exceptions are used to change the normal flow of a script if a specified error (exceptional) occurs.</p>

    <p>This is what normally happens when an exception is triggered:</p>

    <ul>
      <li>The current code state is saved</li>
      <li>The code execution will switch to a predefined (custom) exception handler function</li>
      <li>Depending on the situation, the handler may then resume the execution from the saved code state, terminate the script execution or continue the script from a different location in the code</li>
    </ul>

    <p>We will show different error handling methods:</p>

    <ul>
      <li>Basic use of exceptions</li>
      <li>Creating a custom exception handler</li>
      <li>Multiple exceptions</li>
      <li>Re-throwing an exception</li>
      <li>Setting a top level exception handler</li>
    </ul>

    <p><strong>Note:</strong> Exceptions should only be used with error conditions, and should not be used to jump to another place in the code at a specified point.</p>

    <hr />

    <h2>Basic Use of Exceptions</h2>

    <p>When an exception is thrown, the code following it will not be executed, and PHP will try to find the matching "catch" block.</p>

    <p>If an exception is not caught, a fatal error will be issued with an "Uncaught Exception" message.</p>

    <p>Here, we throw an exception without catching it:</p>


    <pre><code class="language-php">
      &lt;?php<br />
      //create function with an exception<br />
      function checkNum($number)<br />
      {<br />
          if ($number&gt;1) {<br />
              throw new Exception("Value must be 1 or below");<br />
          }<br />
          return true;<br />
      }<br />
      <br />
      //trigger exception<br />
      checkNum(2);<br />
      ?&gt;
    </code></pre>

    <p>The code above will get an error like this:</p>

    <pre><code>
      Fatal error: Uncaught exception 'Exception'
      with message 'Value must be 1 or below' in C:\webfolder\test.php:6
      Stack trace: #0 C:\webfolder\test.php(12):
      checkNum(28) #1 {main} thrown in C:\webfolder\test.php on line 6
    </code></pre>

    <hr />

    <h2>Try, throw and catch</h2>

    <p>To avoid the error from the example above, we need to create the proper code to handle the exception.</p>

    <p>Proper exception code should include:</p>

    <ul>
      <li>Try - a function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However, if the exception triggers, an exception is "thrown"</li>
      <li>Throw - this is how you trigger an exception. Each "throw" must have at least one "catch"</li>
      <li>Catch - a "catch" block retrieves an exception and creates an object containing the exception information</li>
    </ul>

    <p>Now we will try to trigger an exception with valid code:</p>

    <h3>Example: try, throw, catch</h3>

    <pre><code class="language-php">
      &lt;?php<br />
      //create function with an exception<br />
      function checkNum($number)<br />
      {<br />
          if ($number&gt;1) {<br />
              throw new Exception("Value must be 1 or below");<br />
          }<br />
          return true;<br />
      }<br />
      <br />
      //trigger exception in a "try" block<br />
      try {<br />
          checkNum(2);<br />
        // if the exception is thrown, this text will not be shown<br />
        echo 'If you see this the number is 1 or below';<br />
      }<br />
      <br />
      //catch exception<br />
      catch (Exception $e) {<br />
          echo 'Message: ' . $e-&gt;getMessage();<br />
      }<br />
      ?&gt;
    </code></pre>

    <p>The code above will produce the following error:</p>

    <pre><code>
      Message: Value must be 1 or below
    </code></pre>

    <h2>Example Explained</h2>

    <p>The code above throws an exception and catches it:</p>

    <ol>
      <li>The checkNum() function is created. It checks if a number is greater than 1. If it is, then an exception is thrown.</li>
      <li>The checkNum() function is called in a "try" block.</li>
      <li>The exception within the checkNum() function is thrown.</li>
      <li>The "catch" block retrieves the exception and creates and object ($e) containing the excepiton information.</li>
      <li>The error message from the exception is echoed by calling $e->getMessage() from the exception object.</li>
    </ol>

    <p>However, one way to get around the "every throw must have a catch" rule is to set a top level exception handler to change errors that slip through.</p>

    <hr />

    <h2>Creating a Custom Exception Class</h2>

    <p>To create a custom exception handler you must create a special class with functions that can be called when an exception occurs in PHP. The class must be an extension of the exception class.</p>

    <p>The custom exception class inherits the properties from PHP's exception class and you can add custom functions to it.</p>

    <p>Here we create an exception class:</p>

    <h3>Example: customException</h3>

    <pre><code class="language-php">
      &lt;?php<br />
      class customException extends Exception<br />
      {<br />
          public function errorMessage()<br />
          {<br />
              //error message<br />
          $errorMsg = 'Error on line ' . $this-&gt;getLine() . ' in ' . $this-&gt;getFile() . ': &lt;b&gt;' . $this-&gt;getMessage() . '&lt;/b&gt; is not a valid E-Mail address';<br />
              return $errorMsg;<br />
          }<br />
      }<br />
      <br />
      $email = "someone@example...com";<br />
      <br />
      try {<br />
          //check if<br />
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {<br />
            //throw exception if email is not valid<br />
          throw new customException($email);<br />
        }<br />
      } catch (customException $e) {<br />
          //display custom message<br />
        echo $e-&gt;errorMessage();<br />
      }<br />
      ?&gt;
    </code></pre>

    <p>The new class is a copy of the old exception class with an addition of the errorMessage() function. Since it is a copy of the old class, and it inherits the properties and methods from the old class, we can use the exception class methods like getLine() and getFile() and getMessage().</p>

    <h2>Example Explained:</h2>

    <p>The code above throws an exception and catches it with a custom exception class:</p>

    <ol>
      <li>The customException() class is created as an extension of the old exception class. This way it inherits all methods and properties from the old exception class.</li>
      <li>The errorMessage() is created. This function returns an error message if an email address is invalid.</li>
      <li>The $email variable is set to a string that is not a valid email address.</li>
      <li>The "try" block is executed, and an exception is thrown since the email address is invalid.</li>
      <li>The "catch" block catches the exception and displays the error message.</li>
    </ol>

    <hr />

    <h2>Multiple Exceptions</h2>

    <p>It is possible for a script to use multiple exceptions to check for multiple conditions.</p>

    <p>It is possible to use several if...else blocks, a switch, or nest multiple exceptions. These exceptions can use different exception classes and return different error messages:</p>

    <h3>Example: multiple exceptions</h3>

    <pre><code class="language-php">
      &lt;?php<br />
      class customException extends Exception<br />
      {<br />
          public function errorMessage()<br />
          {<br />
              //error message<br />
          $errorMsg = 'Error on line ' . $this-&gt;getLine() . ' in ' .$this-&gt;getFile() . ': &lt;b&gt;' . $this-&gt;getMessage() . '&lt;/b&gt; is not a valid email address';<br />
              return $errorMsg;<br />
          }<br />
      }<br />
      <br />
      $email = "someone@example.com";<br />
      <br />
      try {<br />
          //check if<br />
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {<br />
            //throw exception if email is not valid<br />
          throw new customException($email);<br />
        }<br />
        //check for "example" in mail address<br />
        if (strpos($email, "example") !==false) {<br />
            throw new Exception("$email is an example e-mail");<br />
        }<br />
      } catch (customException $e) {<br />
          echo $e-&gt;errorMessage();<br />
      } catch (Exception $e) {<br />
          echo $e-&gt;getMessage();<br />
      }<br />
      ?&gt;
    </code></pre>

    <h2>Example Explained</h2>

    <p>The code above tests two conditions and throws an exception if any of the conditions are not met:</p>

    <ol>
      <li>The customException() class is created as an extension of the old exception class. This way it inherits all methods and properties from the old exception class</li>
      <li>The errorMessage() function is created. This function returns an error message if an e-mail address is invalid</li>
      <li>The $email variable is set to a string that is a valid e-mail address, but contains the string "example"</li>
      <li>The "try" block is executed and an exception is not thrown on the first condition</li>
      <li>The second condition triggers an exception since the e-mail contains the string "example"</li>
      <li>The "catch" block catches the exception and displays the correct error message</li>
    </ol>

    <p>If the exception thrown were of the class customException and there were no customException catch, only the base exceptionCatch, the exception would be handled there.</p>

    <h3>Re-throwing Exceptions</h3>

    <p>Sometimes when an exception is thrown, you may want to handle it differently than the standard way. It is possible to throw an exception a second time with a "catch" block.</p>

    <p>A script should hide system errors from users. System errors may be important for the coder, but are of no interest to the user. To make things easier for the user, you can re-throw the exception with a user-friendly message:</p>

    <h3>Example: re-throw exception with user-friendly message</h3>

    <pre><code class="language-php">
      &lt;?php<br />
      class customException extends Exception<br />
      {<br />
          public function errorMessage()<br />
          {<br />
              //error message<br />
          $errorMsg = $this-&gt;getMessage() . ' is not a valid email address.';<br />
              return $errorMsg;<br />
          }<br />
      }<br />
      <br />
      $email = "someone@example.com";<br />
      <br />
      try {<br />
          try {<br />
              //check for "example" in mail address<br />
          if (strpos($email, "example") !== false) {<br />
              //throw exception if email is not valid<br />
            throw new Exception($email);<br />
          }<br />
          } catch (Exception $e) {<br />
              //re-throw exception<br />
          throw new customException($email);<br />
          }<br />
      } catch (customException $e) {<br />
          //display custom message<br />
        echo $e-&gt;errorMessage();<br />
      }<br />
      ?&gt;
    </code></pre>

    <h2>Example Explained</h2>

    <p>The code above tests if the email address contains the string "example" in it...if it does, the exception is re-thrown:</p>

    <ol>
      <li>The customException() class is created as an extension of the old exception class. This way it inherits all methods and properties from the old exception class</li>
      <li>The errorMessage() function is created. This function returns an error message if an e-mail address is invalid</li>
      <li>The $email variable is set to a string that is a valid e-mail address, but contains the string "example"</li>
      <li>The "try" block contains another "try" block to make it possible to re-throw the exception</li>
      <li>The exception is triggered since the e-mail contains the string "example"</li>
      <li>The "catch" block catches the exception and re-throws a "customException"</li>
      <liThe "customException" is caught and displays an error message></liThe>
    </ol>

    <p>If the exception is not caught in its current "try" block, it will search for a catch block on "higher levels".</p>

    <hr />

    <h2>Set Top Level Exception Handler</h2>

    <p>The set_exception_handler() function sets a user-defined function to handle all uncaught exceptions.</p>

    <h3>Example: top level exception handler</h3>

    <pre><code class="language-php">
      &lt;?php<br />
      function myException($exception)<br />
      {<br />
          echo "&lt;b&gt;Exception:&lt;/b&gt; " . $exception-&gt;getMessage();<br />
      }<br />
      <br />
      set_exception_handler('myException');<br />
      <br />
      throw new Exception('Uncaught Exception Occured');<br />
      ?&gt;
    </code></pre>

    <p>In the code above there was no "catch" block. Instead, the top-level exception handler triggered. This function should be used to catch uncaught exceptions.</p>

    <hr />

    <h2>Rules for Exeptions</h2>

    <ul>
      <li>Code may be surrounded in a try block, to help catch potential exceptions</li>
      <li>Each try block or "throw" must have at least one corresponding catch block</li>
      <li>Multiple catch blocks can be used to catch different classes of exceptions</li>
      <li>Exceptions can be thrown (or re-thrown) in a catch block within a try block</li>
    </ul>

    <p><strong>A simple rule is: if you throw something, you have to catch it!</strong></p>

  </body>
</html>
