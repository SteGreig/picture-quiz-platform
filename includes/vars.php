<?php

/* Your quiz answers are defined in js/answers.js */



//Type of Quiz
//------------------------------------------------------------------------------------
// for STANDARD PICTURE QUIZ use 'pics'
// for PICTURE QUIZ WITH 2 ANSWERS FOR EACH PICTURE use 'pics2'
// for TEXT/TRIVIA QUIZ use 'text'
$quizType = "pics";



//Number of Questions
//------------------------------------------------------------------------------------
//If each question requires two answers, then this should be taken into account
//E.g. if there are 8 questions & 2 answers for each, you should use a value of 16
$totalQs = 8;



//Variables for <head> tag
//------------------------------------------------------------------------------------
$quizTitle  = "Title of Quiz"; //Used for first part of Page Title
$clientName = "Client Name";   //Used for second part of Page Title
$pageTitle  = "";              //Use if you want a different Page Title

$metaDesc   = "";              //Description <meta> tag content



//Page Intro/Instructions
//------------------------------------------------------------------------------------
$intro = "Think you know the world you live in? Take a look at the images below and see if you know which countries each of the famouse landmarks belong to&hellip;";



//Placeholder Text
//------------------------------------------------------------------------------------
//If left blank, placeholder text will default to 'Answer'
//If you don't want any placeholder text, use a single space
$placeholder  = " ";
$placeholder2 = " "; //Placeholder for 2nd input field if 2 answers are required






//Questions for text based quiz
//------------------------------------------------------------------------------------
$qs[0] = "What is the capital of Egypt?";
$qs[1] = "What is the capital of Egypt2?";
$qs[2] = "What is the capital of Egypt3?";
$qs[3] = "What is the capital of Egypt4?";
$qs[4] = "What is the capital of Egypt5?";
$qs[5] = "What is the capital of Egypt6?";
$qs[6] = "What is the capital of Egypt7?";
$qs[7] = "What is the capital of Egypt8?";



/* Your quiz answers are defined in js/answers.js */



?>