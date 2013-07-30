<?php

function myheader($title)
{
    $headerstring = <<< HERE
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="Content-Type" content=
    "text/html; charset=iso-8859-1">
    <meta name="Author" content="Richard Gourdeau">
    <title>
      ROBOOP -- ${title}
    </title>
    <link rel="stylesheet" href="roboop.css" type="text/css">
  </head>
  <body>
    <p>
    <h1>
      ROBOOP - A robotics object oriented package in C++
    </h1>
    <p>
      [ <a href="./">Welcome</a> | 
      <a href="whatsnew.php">What's New</a> | 
      <a href="http://sourceforge.net/p/roboop/wiki/Home/">Wiki</a> | 
      <a href="http://sourceforge.net/projects/roboop/files/">Download</a> | 
      <a href="htmldoc/">Documentation</a> | 
      <a href="roboop_doxy/">Doxygen Documentation</a> ]
    </p>
    <hr>
HERE;

  print($headerstring);
}

function myfooter($pagedate)
{

    $footerstring = <<< HERE
    <p>
      [ <a href="./">Welcome</a> | 
      <a href="whatsnew.php">What's New</a> | 
      <a href="http://sourceforge.net/p/roboop/wiki/Home/">Wiki</a> | 
      <a href="http://sourceforge.net/projects/roboop/files/">Download</a> | 
      <a href="htmldoc/">Documentation</a> | 
      <a href="roboop_doxy/">Doxygen Documentation</a> ]
    </p>
    <hr>
    <address><font size="-1">
      ROBOOP - A robotics object oriented package in C++ hosted at
      <a href="http://sourceforge.net/p/roboop/">SOURCEFORGE</a><br>
      <br>
    </font></address>
  </body>
</html>
HERE;

  print($footerstring);
}

?>