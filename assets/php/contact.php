<?php
/* Set e-mail recipient */
$myemail  = "doug@chicken3000.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
$subject  = "You've got Chicken Mail!";
$email    = check_input($_POST['email']);
$comments = check_input($_POST['comments'], "Write your comments");

$success =

print "<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<h1>Thanks for writing us!</h1>

name: $name <br>
email: $email <br>

Comments: <br>
$comments <br>

<br>
<h2>Like us on Facebook and stay up to date on all things Chicken 3000!</h2>
<div class="fb-like" data-href="https://www.facebook.com/chicken3000design?fref=ts" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>";

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
    {
        show_error("This is not a valid e-mail address. Please try again.");
    }

/* Let's prepare the message for the e-mail */
$message = "Chicken Mail:

    Name: $name
E-mail: $email
Subject: $subject

Comments:
    $comments

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    else { echo $success; }
    return $data;
}

function show_error($myError)
{
?>
  <html>
    <body>

      <em>Correct the following error:</em>
      <br>
      <?php echo $myError; ?>

    </body>
  </html>
  <?php
  exit();
  }
  ?>
