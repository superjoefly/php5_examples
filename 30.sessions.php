<!DOCTYPE html>
<html>
  <head>
    <title>Sessions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">

    <!-- Prism.js -->
    <link href="prism.css" rel="stylesheet" />
    <script src="prism.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>
  <body class="w3-margin">

    <h1>Sessions</h1>

    <p>A session is a way to store information (in variables) to be used across multiple pages.</p>

    <p>Unlike a cookie, the information is not stored on the user's computer.</p>

    <hr />

    <h2>What is a PHP Session?</h2>

    <p>A web server does not know who the user is because the HTTP address does not maintain state. To solve this, session variables store user information to be used across multiple pages (e.g. username, favorite color, etc). By default sessions variables last until the user closes the browser.</p>

    <p>In short: session variables hold information about one single user, and are available to all pages in one application.</p>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>Tip:</strong> if you need a permanent storage, you may want to store the data in a database.</p>
    </div>

    <hr />

    <h2>Start a Session</h2>

    <p>A session is started with the session_start() function.</p>

    <p>Session variables are set with the PHP global variable: $_SESSION.</p>

    <h3>Example: creating a session</h3>

    <p>Create a new page called "demo_session1.php", start a new session and set some session variables:</p>

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <p><strong>Note:</strong> The session_start() function MUST BE THE VERY FIRST THING IN YOUR DOCUMENT...before any HTML tags.</p>
    </div>

    <hr />

    <h2>Get Session Values</h2>

    <p>Next, create another page called "demo_session2.php". From this page we will access the session information we set on the first page ("demo_session1.php").</p>

    <p>Notice that session variables are not passed individually to each new page, instead <b>they are retrieved from the session we open at the beginning of each page (session_start()).</b></p>

    <hr />

    <p>Another way to show all the session variable values for a user session is to run the following code:</p>

    <p><strong>See "demo_session3.php"</strong></p>

    <hr />

    <div class="w3-panel w3-border-red w3-leftbar w3-pale-blue">
      <h3>How It Works</h3>
      <p>Most sessions set a user-key on the user's computer that looks something like: 765487cf34ert8dede5a562e4f3a7e12. Then, when a session is opened on another page, it scans the computer for a user-key. If there is a match, it accesses that session, if not, it starts a new session.</p>
    </div>

    <hr />

    <h2>Modify a Session Variable</h2>

    <p>To modify a session variable, just overwrite it: (see "demo_session1.php")</p>

    <hr />

    <h2>Destroy a Session</h2>

    <p>To remove all global session variables, and destroy the session, use the session_unset() and session_destroy() functions.</p>

  </body>
</html>
