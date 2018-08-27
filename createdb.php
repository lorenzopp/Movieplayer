<html>
  <?php
    $con = mysqli_connect("localhost", "root","");
        if(!$con)
        { 
            die("Could not connect :" . mysqli_error($con));
        }
        
        if(mysqli_query($con,"CREATE DATABASE IF NOT EXISTS movieplayer"))
        {
            
            if(mysqli_select_db($con, "movieplayer"))
            {
                $sql="CREATE TABLE IF NOT EXISTS film(
                filmID int NOT NULL AUTO_INCREMENT,
                PRIMARY KEY(filmID),
                trama varchar(500),
                durata int(4),
                );";
                mysqli_query($con,$sql);   
            }
            else
            {
                echo "error". mysqli_error($sql);
            }
        }
        else
        {
            echo "Error creating database:" . mysqli_error($con);
        }
  ?>
</html>
