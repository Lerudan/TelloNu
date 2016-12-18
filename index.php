<!DOCTYPE html>
<?php


$to      = 'a@example.com'; //set recieving mail here
?>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TelloNu</title>

    <!-- Bootstrap core CSS -->
    <link href="static/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <div class="blog-header">

      </div>

      <div class="row">

        <div class="col-sm-8 blog-main sidebar-module">
<?php 
if(isset($_POST['msg'])) 
{
?>
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Danke!</strong> Deine Nachricht wurde verschickt.
        </div>
<?php 
}
?>

                 <h2 class="blog-post-title">Anunyme Box</h2>
                <p class="lead blog-post-meta">Hinterlasse, was du willst</p>
            <!-- <h3 class="blog-post-title">Hier ist die Box</h3> -->
            
            <form action="index.php" method="post"><div class="form-horizontal">
              <div class="form-group">           
                <textarea class="form-control" rows="5"i name="msg"></textarea>
              </div>
             <div class="form-group">
                <div class="text-center"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span> Abschicken</button></div>
              </div>
            </div>
            </form>
        
<?php 

if(isset($_POST['msg'])) {

$message = (string) $_POST['msg'];

$subject = 'Neuer Tell';
$message = wordwrap($message, 70, "\r\n");
$headerz = 'From: ' . $to' . "\r\n" .
    'Date: ' . date("D, d M Y H:m:s") .
    'Reply-To: ' $to  . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headerz);


}
?> 
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
            <h3>das Kleingedruckte</h3>
              <p> Alles, was du hier eingibst, wird Nu per Email zugeschickt.</p>
              <p> Außer dem Inhalt der Nachricht wird nichts gespeichert oder verschickt.</p>
              <p> Nu hat keine Möglichkeit zuzuordnen, wer eine Nachricht verschickt hat.</p>
              <p> Falls du eine Antwort möchtest, vermerke das, ich gehe dann vielleicht drauf ein.</p>
              

           
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Anonyme Dingsbox für das Nu</p>
      <p>Gebaut mit <a href="http://getbootstrap.com">Bootstrap</a></p>
      <p>Gelitten unter <a hreft="https://php.net/">PHP</a></p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/jquery.min.js"></script>
    <script src="static/bootstrap.js"></script>
  </body>
</html>
