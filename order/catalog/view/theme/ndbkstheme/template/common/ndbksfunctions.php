<?php

  // PHP functions
  // use with care


  // this will steal the mlp snippet from textpattern and show it here
  function mlp_snippet($nameofkey,$lang) {
    $result = mysql_query("SELECT * FROM txp_lang WHERE lang='".$lang."' AND 
                          name = '".$nameofkey."'");
    $row = mysql_fetch_assoc($result);
    echo $row["data"];
  }
?>
