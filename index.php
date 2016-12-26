<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600,700,400italic&subset=latin-ext" />
    <link rel="stylesheet" type="text/css" href="style.css" />

    <script type="text/javascript">
        var close = function ( className )
        {
            document.getElementsByClassName( className )[0].hidden=true;
        }
    </script>

    <title>TelloNu</title>
  </head>

  <body>
    <div class="main">

<?php 
if(isset($_GET['success'])) 
{
?>
        <div class="success">
          <a href="javascript:close('success');" class="close">x</a>
          <strong>Danke!</strong> Deine Nachricht wurde verschickt.
        </div>
<?php 
}

if(isset($_GET['error'])) 
{
?>
        <div class="error">
          <a href="javascript:close('error');" class="close">x</a>
          <strong>Ups!</strong> Da hat etwas nicht geklappt.
        </div>
<?php 
}
?>
        <div class="content">
                 <h2>Anunyme Box</h2>
                <h3>Hinterlasse, was du willst</h3>
            <!-- <h3 class="blog-post-title">Hier ist die Box</h3> -->
            
            <form action="nutello_send.php" method="post"><div class="form-horizontal">
                <textarea class="editor" rows="5" name="msg"></textarea>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span> Abschicken</button>
            </div>
            </form>
         </div>
        <!-- /.blog-main -->
          <div class="sidebar">
            <h3>das Kleingedruckte</h3>
              <p> Alles, was du hier eingibst, wird Nu per Email zugeschickt.</p>
              <p> Außer dem Inhalt der Nachricht wird nichts gespeichert oder verschickt.</p>
              <p> Nu hat keine Möglichkeit zuzuordnen, wer eine Nachricht verschickt hat.</p>
              <p> Falls du eine Antwort möchtest, vermerke das, ich gehe dann vielleicht drauf ein.</p>
          </div>
          
    <div class="footer">
      <font>Anonyme Dingsbox für das Nu<br />
      Gelitten unter <a href="https://php.net/">PHP</a></font>
    </div>
    </div>
    <script type="text/javascript">
        document.body.addEventListener('keydown', function(e) {
            if(!(e.keyCode == 13 && (e.metaKey || e.ctrlKey))) return;
	        var target = e.target;
	        if(target.form) {
	    	    target.form.submit();
          	}
        });
    </script>
  </body>
</html>
