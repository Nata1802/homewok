<?php

session_start();


    ?>
      <form action="" method="GET"><br> <br>
     <input name="name" value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?>"> <br> <br>
     <input name="surname" value="<?php if(isset($_SESSION['surname'])) echo $_SESSION['surname']; ?>" > <br> <br>
    <input type="submit" name="submit">
</form>
