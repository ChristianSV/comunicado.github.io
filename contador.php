<?php
        session_start();
        $counter_name = "counter.txt";

        // Check if a text file exists.
        // If not create one and initialize it to zero.


        // Read the current value of our counter file
        $f = fopen($counter_name,"r");
        $counterVal = fread($f, filesize($counter_name));
        fclose($f);

        // Has visitor been counted in this session?
        // If not, increase counter value by one
        if(!isset($_SESSION['hasVisited'])){
          $_SESSION['hasVisited']="yes";
          $counterVal++;
          $f = fopen($counter_name, "w");
          fwrite($f, $counterVal);
          fclose($f);
        }

        echo "You are visitor number $counterVal to this site";
    ?>