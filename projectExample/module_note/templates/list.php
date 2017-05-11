<?php
    
    echo "

<!DOCTYPE html>

<html>

<head>

    <meta charset='utf-8' />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>

    <!-- Optional theme -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' integrity='sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin='anonymous'>

    <!-- Latest compiled and minified JavaScript -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
    <title>Liste de notes</title>

</head>



<body style='background-color: green; font-size:30px; margin: 20px;'>

    <form action='/note/' method='post'>
    <p>Hack your life     </p> <input type='submit' name='saveNote' value='Save' style='color: white; background-color: black '>
    
    <div class='row'>
      <div class='col-xs-12 col-md-8'>
         <input type='hidden' name='csrfmiddlewaretoken' value='OJjdppQ60qnfJjTQbSeq98dxhOPbt85qmrezs7u08K8KkMO8YsIlazzK4VwdrNec' />
        <input type='text' name='titre' value='' required style='color: white; background-color: black '>
        <textarea cols='80' rows='100' name='content'  style='font-family:'Times New Roman', Times, serif; font-size: 24px; color: green; background-color: black;'></textarea>
    </div>
    </form>
    <div class='col-xs-6 col-md-4'>
        <ul >
            
                <li><a href='/note/6' style='color: black;'>Coucou Titite!</a></li>
            
                <li><a href='/note/8' style='color: black;'>Projects</a></li>
            
          
      </ul>
  </div>
</div>


</body>

</html>


    ";


?>