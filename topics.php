<?php
	include_once 'header.php';
?>

<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

header {
  background-color: #666;
  padding: 2px;
  text-align: center;
  font-size: 35px;
  color: white;
}

nav {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  background: #ccc;
  padding: 20px;
}

article {
  -webkit-flex: 3;
  -ms-flex: 3;
  flex: 3;
  background-color: #f1f1f1;
  padding: 10px;
}

}
</style>
</head>
<body>

<style>
.dropbtn {
  background-color: dimgray;
  color: white;
  text-align: center;
  position: relative;
  left: 40px;
  top: 40px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #A9A9A9}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #778899;
}

.dropdown-content {
  left: 200px;
  bottom: 445px;
}
</style>
</head>
<body>

<div class="dropdown">
  <button class="dropbtn">Section 1 - 
<br>
  Components of a Computer</button>
  <div class="dropdown-content">
  <a href="/pages.php?chapterID=1>
  $_GET['chapterTitle, chapterContent']">Chapter 1 - Processor Components</a>
  <a href="topicpages/chapter2.php">Chapter 2 - Processor Performance</a>
  <a href="topicpages/chapter3.php">Chapter 3 - Types of Processors</a>
  <a href="topicpages/chapter4.php">Chapter 4 - Input Devices</a>
  <a href="topicpages/chapter5.php">Chapter 5 - Output Devices</a>
  <a href="topicpages/chapter6.php">Chapter 6 - Storage Devices</a>
  </div>
</div>

<style>
.dropbtn2 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 570px;
  top: 40px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown2 {
  position: absolute;
  display: inline-block;
}

.dropdown2-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown2-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown2-content a:hover {background-color: #A9A9A9}

.dropdown2:hover .dropdown2-content {
  display: block;
}

.dropdown2:hover .dropbtn2 {
  background-color: #778899;
}

.dropdown2-content {
  left: 610px;
  bottom: 530px;
}
</style>
</head>
<body>

<div class="dropdown2">
  <button class="dropbtn2">Section 2 - 
<br>
  Systems Software</button>
  <div class="dropdown2-content">
  <a href="topicpages/chapter7.php">Chapter 7 - Functions of an Operating System</a>
  <a href="topicpages/chapter8.php">Chapter 8 - Types of Operating Systems</a>
  <a href="topicpages/chapter8.php">Chapter 9 - The nature of applications</a>
  <a href="topicpages/chapter10.php">Chapter 10 - Programming Language Translators</a>
  </div>
</div>
</style>

<style>
.dropbtn3 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 975px;
  top: 40px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown3 {
  position: absolute;
  display: inline-block;
}

.dropdown3-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown3-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown3-content a:hover {background-color: #A9A9A9}

.dropdown3:hover .dropdown3-content {
  display: block;
}

.dropdown3:hover .dropbtn3 {
  background-color: #778899;
}

.dropdown3-content {
  left: 1000px;
  bottom: 510px;
}
</style>
</head>
<body>

<div class="dropdown3">
  <button class="dropbtn3">Section 3 - 
<br>
  Software Development</button>
  <div class="dropdown3-content">
  <a href="topicpages/chapter11.php">Chapter 11 - Systems Analysis Methods</a>
  <a href="topicpages/chapter12.php">Chapter 12 - Writing and Following Methods</a>
  <a href="topicpages/chapter13.php">Chapter 13 - Programming Paardigms</a>
  <a href="topicpages/chapter14.php">Chapter 14 - Assembly Language</a>
  </div>
</div>
</style>

<style>
.dropbtn4 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 1450px;
  top: 40px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown4 {
  position: absolute;
  display: inline-block;
}

.dropdown4-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown4-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown4-content a:hover {background-color: #A9A9A9}

.dropdown4:hover .dropdown4-content {
  display: block;
}

.dropdown4:hover .dropbtn4 {
  background-color: #778899;
}

.dropdown4-content {
  left: 1460px;
  bottom: 440px;
}
</style>
</head>
<body>

<div class="dropdown4">
  <button class="dropbtn4">Section 4 - 
<br>
  Exchanging Data</button>
  <div class="dropdown4-content">
  <a href="topicpages/chapter15.php">Chapter 15 - Compression, Encryption and Hashing</a>
  <a href="topicpages/chapter16.php">Chapter 16 - Database Concepts</a>
  <a href="topicpages/chapter17.php">Chapter 17 - Relational Databases and Normalisation</a>
  <a href="topicpages/chapter18.php">Chapter 18 - Introduction to SQL</a>
  <a href="topicpages/chapter19.php">Chapter 19 - Defining and Updating tables using SQL</a>
  <a href="topicpages/chapter20.php">Chapter 20 - Transaction Processing</a>
  </div>
</div>
</style>

<style>
.dropbtn5 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 40px;
  top: 250px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown5 {
  position: absolute;
  display: inline-block;
}

.dropdown5-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown5-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown5-content a:hover {background-color: #A9A9A9}

.dropdown5:hover .dropdown5-content {
  display: block;
}

.dropdown5:hover .dropbtn5 {
  background-color: #778899;
}

.dropdown5-content {
  left: 200px;
  bottom: 180px;
}
</style>
</head>
<body>

<div class="dropdown5">
  <button class="dropbtn5">Section 5 - 
<br>
  Network and Web Technologies</button>
  <div class="dropdown5-content">
  <a href="topicpages/chapter21.php">Chapter 21 - Structure of the Internet</a>
  <a href="topicpages/chapter22.php">Chapter 22 - Internet Communication</a>
  <a href="topicpages/chapter23.php">Chapter 23 - Network Security and Threats</a>
  <a href="topicpages/chapter24.php">Chapter 24 - HTML and CSS</a>
  <a href="topicpages/chapter25.php">Chapter 25 - Web Forms and JavaScript</a>
  <a href="topicpages/chapter26.php">Chapter 26 - Search Engine Indexing</a>
  <a href="topicpages/chapter27.php">Chapter 27 - Client-Server and Peer-to-Peer</a>
  </div>
</div>
</style>

<style>
.dropbtn6 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 620px;
  top: 250px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown6 {
  position: absolute;
  display: inline-block;
}

.dropdown6-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown6-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown6-content a:hover {background-color: #A9A9A9}

.dropdown6:hover .dropdown6-content {
  display: block;
}

.dropdown6:hover .dropbtn6 {
  background-color: #778899;
}

.dropdown6-content {
  left: 600px;
  bottom: 270px;
}
</style>
</head>
<body>

<div class="dropdown6">
  <button class="dropbtn6">Section 6 - 
<br>
  Data Types</button>
  <div class="dropdown6-content">
  <a href="topicpages/chapter28.php">Chapter 28 - Primitive Data Types, binary and Hexadecimal</a>
  <a href="topicpages/chapter29.php">Chapter 29 - ASCII and Unicode</a>
  <a href="topicpages/chapter30.php">Chapter 30 - Binary Arithmetic</a>
  <a href="topicpages/chapter31.php">Chapter 31 - Floating Point Arithmetic</a>
  <a href="topicpages/chapter32.php">Chapter 32 - Bitwise Manipulation and Masks</a>
  </div>
</div>
</style>

<style>
.dropbtn7 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 940px;
  top: 250px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown7 {
  position: absolute;
  display: inline-block;
}

.dropdown7-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown7-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown7-content a:hover {background-color: #A9A9A9}

.dropdown7:hover .dropdown7-content {
  display: block;
}

.dropdown7:hover .dropbtn7 {
  background-color: #778899;
}

.dropdown7-content {
  left: 1000px;
  bottom: 190px;
}
</style>
</head>
<body>

<div class="dropdown7">
  <button class="dropbtn7">Section 7 - 
<br>
  Data Structures</button>
  <div class="dropdown7-content">
  <a href="topicpages/chapter33.php">Chapter 33 - Arrays, Tuples and Records</a>
  <a href="topicpages/chapter34.php">Chapter 34 - Queues</a>
  <a href="topicpages/chapter35.php">Chapter 35 - Lists and Linked Lists</a>
  <a href="topicpages/chapter36.php">Chapter 36 - Stacks</a>
  <a href="topicpages/chapter37.php">Chapter 37 - Hash Tables</a>
  <a href="topicpages/chapter38.php">Chapter 38 - Graphs</a>
  <a href="topicpages/chapter39.php">Chapter 39 - Trees</a>
  </div>
</div>
</style>

<style>
.dropbtn8 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 1310px;
  top: 250px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown8 {
  position: absolute;
  display: inline-block;
}

.dropdown8-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown8-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown8-content a:hover {background-color: #A9A9A9}

.dropdown8:hover .dropdown8-content {
  display: block;
}

.dropdown8:hover .dropbtn8 {
  background-color: #778899;
}

.dropdown8-content {
  left: 1350px;
  bottom: 310px;
}
</style>
</head>
<body>

<div class="dropdown8">
  <button class="dropbtn8">Section 8 - 
<br>
  Boolean Algebra</button>
  <div class="dropdown8-content">
  <a href="topicpages/chapter40.php">Chapter 40 - Logic Gates and Truth Tables</a>
  <a href="topicpages/chapter41.php">Chapter 41 - Simplifying Boolean Expressions</a>
  <a href="topicpages/chapter42.php">Chapter 42 - Karnaugh Maps</a>
  <a href="topicpages/chapter43.php">Chapter 43 - Adders and D-type flip-flops</a>
  </div>
</div>
</style>

<style>
.dropbtn9 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 40px;
  top: 460px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown9 {
  position: absolute;
  display: inline-block;
}

.dropdown9-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown9-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown9-content a:hover {background-color: #A9A9A9}

.dropdown9:hover .dropdown9-content {
  display: block;
}

.dropdown9:hover .dropbtn9 {
  background-color: #778899;
}

.dropdown9-content {
  left: 200px;
  bottom: 140px;
}
</style>
</head>
<body>

<div class="dropdown9">
  <button class="dropbtn9">Section 9 - 
<br>
  Legal, Moral, Ethical and Cultural Issues</button>
  <div class="dropdown9-content">
  <a href="topicpages/chapter44.php">Chapter 44 - Computing Related Legislation</a>
  <a href="topicpages/chapter45.php">Chapter 45 - Ethical, Moral and Cultural Issues</a>
  <a href="topicpages/chapter46.php">Chapter 46 - Privacy and Censorship</a>
  </div>
</div>
</style>

<style>
.dropbtn10 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 750px;
  top: 460px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown10 {
  position: absolute;
  display: inline-block;
}

.dropdown10-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown10-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown10-content a:hover {background-color: #A9A9A9}

.dropdown10:hover .dropdown10-content {
  display: block;
}

.dropdown10:hover .dropbtn10 {
  background-color: #778899;
}

.dropdown10-content {
  left: 780px;
  bottom: 20px;
}
</style>
</head>
<body>

<div class="dropdown10">
  <button class="dropbtn10">Section 10 - 
<br>
  Computational Thinking</button>
  <div class="dropdown10-content">
  <a href="topicpages/chapter47.php">Chapter 47 - Thinking Abstractly</a>
  <a href="topicpages/chapter48.php">Chapter 48 - Thinking Ahead</a>
  <a href="topicpages/chapter49.php">Chapter 49 - Thinking Procedurally</a>
  <a href="topicpages/chapter50.php">Chapter 50 - Thinking Logically, Thinking Concurrently</a>
  <a href="topicpages/chapter51.php">Chapter 51 - Problem Recognition</a>
  <a href="topicpages/chapter52.php">Chapter 52 - Problem Solving</a>
  </div>
</div>
</style>

<style>
.dropbtn11 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 1250px;
  top: 460px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown11 {
  position: absolute;
  display: inline-block;
}

.dropdown11-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown11-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown11-content a:hover {background-color: #A9A9A9}

.dropdown11:hover .dropdown11-content {
  display: block;
}

.dropdown11:hover .dropbtn11 {
  background-color: #778899;
}

.dropdown11-content {
  left: 1300px;
  bottom: 20px;
}
</style>
</head>
<body>

<div class="dropdown11">
  <button class="dropbtn11">Section 11 - 
<br>
  Programming Techniques</button>
  <div class="dropdown11-content">
  <a href="topicpages/chapter53.php">Chapter 53 - Programming Basics</a>
  <a href="topicpages/chapter54.php">Chapter 54 - Selection</a>
  <a href="topicpages/chapter55.php">Chapter 55 - Iteration</a>
  <a href="topicpages/chapter56.php">Chapter 56 - Subroutines and recurison</a>
  <a href="topicpages/chapter57.php">Chapter 57 - Use of an IDE</a>
  <a href="topicpages/chapter58.php">Chapter 58 - Use of Object-Oriented Techniques</a>
  </div>
</div>
</style>

<style>
.dropbtn12 {
  background-color: dimgray;
  color: white;
  position: relative;
  left: 700px;
  top: 670px;
  padding: 50px 75px;
  font-size: 30px;
  border-style: solid;
  border-color: black;
  cursor: pointer;
}

.dropdown12 {
  position: absolute;
  display: inline-block;
}

.dropdown12-content {
  display: none;
  position: fixed;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown12-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown12-content a:hover {background-color: #A9A9A9}

.dropdown12:hover .dropdown12-content {
  display: block;
}

.dropdown12:hover .dropbtn12 {
  background-color: #778899;
}

.dropdown12-content {
  left: 1000px;
  bottom: 20px;
}
</style>
</head>
<body>

<div class="dropdown12">
  <button class="dropbtn12">Section 12 - 
<br>
  Algorithms</button>
  <div class="dropdown12-content">
  <a href="topicpages/chapter59.php">Chapter 59 - Analysis and Design of Algorithms</a>
  <a href="topicpages/chapter60.php">Chapter 60 - Searching Algorithms</a>
  <a href="topicpages/chapter61.php">Chapter 61 - Bubble Sort and Insertion Sort</a>
  <a href="topicpages/chapter62.php">Chapter 62 - Merge Sort and Quick Sort</a>
  <a href="topicpages/chapter63.php">Chapter 63 - Graph Traversal ALgorithms</a>
  <a href="topicpages/chapter64.php">Chapter 64 - Optimisation Algorithms</a>
  </div>
</div>
</style>

<?php
	include_once 'footer.php';
?>