<?php
  session_start();
?>

<head>
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <nav>
      <div class="wrapper">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../topics.php">Topics</a></li>
          <?php
            if(isset($_SESSION["useruid"])) {
              echo "<li><a href='../includes/logout.inc.php'>Logout</a></li>";
            }
            else {
              echo "<li><a href='../signup.php'>Sign Up</a></li>";
              echo "<li><a href='../login.php'>Log In</a></li>";
            }
          ?>
        </ul>
      </div>
    </nav>

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

/* Style the content */
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

<header>
  <h2>Section 1 - Components of a Computer Quiz</h2>
</header>

</body>
</html>
	
<?php
	if (!empty($_POST)) {
		$ans1 = $_POST['ans1'];
		$ans2 = $_POST['ans2'];
		$ans3 = $_POST['ans3'];
		$ans4 = $_POST['ans4'];
		$ans5 = $_POST['ans5'];
		$ans6 = $_POST['ans6'];
		$ans7 = $_POST['ans7'];
		$ans8 = $_POST['ans8'];
		$ans9 = $_POST['ans9'];
		$ans10 = $_POST['ans10'];
		$correct = 0;
			if ($ans1 == 'Arithmetic Logic Unit') {
				$correct++;	
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans2 == 'Central Processing Unit') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans3 == 'Data Bus') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans4 == 'Address Bus') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans5 == 'Control Bus') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans6 == 'Control Unit') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans7 == 'Cache Memory') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans8 == 'Co-Processor') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans9 == 'Radio Frequency Identification') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans10 == 'Yes') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			echo "<p>You got $correct correct!</p>";
			$grade = ($correct / 10) * 100;
			if ($correct == 0) {
				echo"<p>You got 0/10!</p>";
			} elseif ($correct == 1) {
				echo "<p>You got 1/10!</p>";
			} elseif ($correct == 2) {
				echo "<p>You got 2/10!</p>";
			} elseif ($correct == 3) {
				echo "<p>You got 3/10!</p>";
			} elseif ($correct == 4) {
				echo "<p>You got 4/10!</p>";
			} elseif ($correct == 5) {
				echo "<p>You got 5/10!</p>";
			} elseif ($correct == 6) {
				echo "<p>You got 6/10!</p>";
			} elseif ($correct == 7) {
				echo "<p>You got 7/10!</p>";
			} elseif ($correct == 8) {
				echo "<p>You got 8/10!</p>";
			} elseif ($correct == 9) {
				echo "<p>You got 9/10!</p>";	
			} else {
				echo "<p>Great job! You aced it! 10/10</p>";
			}
		}

?>
	<form action="test1.php" method="post">
		<p>What does ALU stand for?</p>
		<input type="varchar" name="ans1">
		</p>What does CPU stand for?</p>
		<input type="varchar" name="ans2">
		<p>What bus begins with D?</p>
		<input type="varchar" name="ans3">
		<p>What bus begins with A?</p>
		<input type="varchar" name="ans4">
		<p>What bus begins with C?</p>
		<input type="varchar" name="ans5">
		<p>What does CU stand for?</p>
		<input type="varchar" name="ans6">
		<p>What is a small type of memory located on the CPU?</p>
		<input type="varchar" name="ans7">
		<p>What type of processor is a GPU?</p>
		<input type="varchar" name="ans8">
		<p>What does RFID stand for?</p>
		<input type="varchar" name="ans9">
		<p>Is RAM volatile?</p>
		<input type="varchar" name="ans10">
		<p>Click submit to see your results!</p>
		<input type="submit">
	</form>