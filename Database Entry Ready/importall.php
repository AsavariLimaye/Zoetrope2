<?php

    // Use PDO to connect to the DB
    $dsn = 'mysql:dbname=zoetrope;host=localhost';
    $user = 'root';
    $password = 'Asavari2';

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    /*
    $handle = fopen("English Movies.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
    $sql = "INSERT into movies (name,summary,posterlink,rdate,director,producer,composer,language,runtime,rating,genre) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",str_to_date(\"" .   $data[3] . "\",'%d-%m-%Y'),\"" . $data[4]. "\",\"" . $data[5]."\",\"" . $data[6]. "\",\"" . $data[7]. "\"," . $data[8]. "," . $data[9].",\"" . $data[10]. "\");";      
          
           print $sql;
            $dbh->exec($sql);
    }
    $handle = fopen("Hindi Movies.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
    $sql = "INSERT into movies (name,summary,posterlink,rdate,director,producer,composer,language,runtime,rating,genre) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",str_to_date(\"" .   $data[3] . "\",'%d-%m-%Y'),\"" . $data[4]. "\",\"" . $data[5]."\",\"" . $data[6]. "\",\"" . $data[7]. "\"," . $data[8]. "," . $data[9].",\"" . $data[10]. "\");";      
          
           print $sql;
            $dbh->exec($sql);
    }
    
    $handle = fopen("Kannada Movies.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
    $sql = "INSERT into movies (name,summary,posterlink,rdate,director,producer,composer,language,runtime,rating,genre) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",str_to_date(\"" .   $data[3] . "\",'%d-%m-%Y'),\"" . $data[4]. "\",\"" . $data[5]."\",\"" . $data[6]. "\",\"" . $data[7]. "\"," . $data[8]. "," . $data[9].",\"" . $data[10]. "\");";      
          
           print $sql;
            $dbh->exec($sql);
    }
    
    $handle = fopen("Malyalam Movies.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
    $sql = "INSERT into movies (name,summary,posterlink,rdate,director,producer,composer,language,runtime,rating,genre) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",str_to_date(\"" .   $data[3] . "\",'%d-%m-%Y'),\"" . $data[4]. "\",\"" . $data[5]."\",\"" . $data[6]. "\",\"" . $data[7]. "\"," . $data[8]. "," . $data[9].",\"" . $data[10]. "\");";      
          
           print $sql;
            $dbh->exec($sql) ;
    }
    
    $handle = fopen("Tamil Movies.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
    $sql = "INSERT into movies (name,summary,posterlink,rdate,director,producer,composer,language,runtime,rating,genre) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2] . "\",str_to_date(\"" .   $data[3] . "\",'%d-%m-%Y'),\"" . $data[4]. "\",\"" . $data[5]."\",\"" . $data[6]. "\",\"" . $data[7]. "\"," . $data[8]. "," . $data[9].",\"" . $data[10]. "\");";      
          
           print $sql;
            $dbh->exec($sql) ;
    }
    
    $handle = fopen("TV Shows.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
            $sql = "INSERT into TvShows (name,posterlink,director,rating,runtime,startdate,genre,seasons,summary) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2]. "\"," . $data[3]. "," . $data[4].",\"" .   $data[5] . "\",\"". $data[6]. "\"," . $data[7]. ",\"" . $data[8]. "\");"; 
            $dbh->exec($sql);
    }
    
    $handle = fopen("Actors.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
            $sql = "INSERT into Actors (name,description,link,place,dob) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2]. "\",\"" . $data[3]. "\",\"" . $data[4]."\");"; 
            print $sql;
            $dbh->exec($sql); //or die("actor");
    }
    
    $handle = fopen("Hindi Actors.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
            $sql = "INSERT into Actors (name,description,link,place,dob) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2]. "\",\"" . $data[3]. "\",\"" . $data[4]."\");"; 
            
            //$sql = "INSERT into Actors (name,description,link,place,dob) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2]. "\",\"" . $data[3]. "\",str_to_date('" . $data[4]."','%d-%m-%Y'));"; 
            print $sql;
            $dbh->exec($sql);
    }
    
    $handle = fopen("South Actors.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
            $sql = "INSERT into Actors (name,description,link,place,dob) values (\"" . $data[0] . "\",\"" .$data[1] . "\",\"" .$data[2]. "\",\"" . $data[3]. "\",\"" . $data[4]."\");"; 
            print $sql;
            $dbh->exec($sql) ;
    }
    
    $handle = fopen("Cast.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
            $sql = "INSERT into mcast values (" . $data[0] . "," .$data[1].");"; 
            $dbh->exec($sql) ;
            $sql = "INSERT into mcast values (" . $data[0] . "," .$data[2].");"; 
            $dbh->exec($sql) ;
            $sql = "INSERT into mcast values (" . $data[0] . "," .$data[3].");"; 
            $dbh->exec($sql) ;
    }
    
    $handle = fopen("TV Cast.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
            $sql = "INSERT into tvcast values (" . $data[0] . "," .$data[1].");"; 
            $dbh->exec($sql) ;
            $sql = "INSERT into tvcast values (" . $data[0] . "," .$data[2].");"; 
            $dbh->exec($sql) ;
            $sql = "INSERT into tvcast values (" . $data[0] . "," .$data[3].");"; 
            $dbh->exec($sql) ;
            $sql = "INSERT into tvcast values (" . $data[0] . "," .$data[4].");"; 
            $dbh->exec($sql) ;
            $sql = "INSERT into tvcast values (" . $data[0] . "," .$data[5].");"; 
            $dbh->exec($sql) ;
    }
    
    $handle = fopen("Movie Reviews.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
            $sql = "INSERT into mreview values (" . $data[0] . "," .$data[1] . ",\"" .$data[2]. "\");"; 
            print $sql;
            $dbh->exec($sql) ;
    }
    $handle = fopen("Movie Ratings.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
            $sql = "INSERT into movierating values (" . $data[0] . "," .$data[1] . "," .$data[2]. ");"; 
            print $sql;
            $dbh->exec($sql) ;
    }
    
    $handle = fopen("TV Review.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
            $sql = "INSERT into tvreview values (" . $data[0] . "," .$data[1] . ",\"" .$data[2]. "\");"; 
            print $sql;
            $dbh->exec($sql) ;
    }
    $handle = fopen("TV Rating.csv", "r") or die("Unable to open file!");
    for($i =1;($data = fgetcsv($handle, 10000, ",")) !== FALSE; $i++)
        {
            $sql = "INSERT into tvshowrating values (" . $data[0] . "," .$data[1] . "," .$data[2]. ");"; 
            print $sql;
            $dbh->exec($sql) ;
    }
    */
?>