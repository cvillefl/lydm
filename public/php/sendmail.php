<?
  $name = $_REQUEST['name'] ;
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'] ;
  $comments = $_REQUEST['comments'] ;

  mail( "LesYeuxLBR@aol.com, LesYeuxduMonde@aol.com", "Les Yeux Contact Us Form Results", "Name: $name \nEmail: $email \nPhone: $phone \nComments: $comments", "From: $email" );
  header( "Location: http://www.lesyeuxdumonde.com/contact/thank_you.html" );
?>

 

