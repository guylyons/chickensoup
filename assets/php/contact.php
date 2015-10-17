<?php
/* Set e-mail recipient */
$myemail  = "doug@chicken3000.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
$subject  = "You've got Chicken Mail!";
$email    = check_input($_POST['email']);
$comments = check_input($_POST['comments'], "Write your comments");

$success =
print "<h1>Your message has been sent!</h1> <br>
   
    Name: $name <br>
    E-mail: $email <br>

    Comments: <br>
    $comments <br>

    End of message <br>"
;

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
