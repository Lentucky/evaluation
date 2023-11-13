
<?php include('partials-front/menu.php'); 

    $participant_id=$_GET['id'];

    $username = $_SESSION['user'];

    if(isset($_SESSION['evaluator']))
    {
        //trying to fucking get the id
        $grabId = "SELECT user_id FROM tbl_users WHERE username='$username' ";
        $grabRes = $conn->query($grabId);

        if($grabRes){
            $grabRow = $grabRes->fetch_assoc();
    
            // Store the column value in a PHP variable
            $evaluator_id = $grabRow['user_id'];
        }
    }

    ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style>

  	.tbl-full td {
      padding: 10px; /* Adjust as needed */
    }

    /* Add spacing to radio buttons */
    .radio-buttons label {
      margin-right: 35px; /* Adjust as needed */
    }

    /* Add spacing to the text area */
    .input-responsive {
      margin-top: 10px; 
    }

  </style>
</head>
<body>
<form class="form" method="POST" action="">
  <div class="title">
    <h1>Evaluation Form</h1>
    <p>Evaluate Teacher</p>
  </div>

  <div class="form-box5">
    <table>

	<!-- ------------------------- -->


	<div class="main-content">
		<div class="wrapper">
			<table class="tbl-full">
				<tr>
					<td class="criteria">Learning Qualities</td>
				</tr>
				<tr>
					<td style="margin-bottom: 50px;" >1.1 I am engaged to think deeply with and about the important concepts and theories.</td>
					<td class="radio-buttons">
						<label >
						<input type="radio" name="q1" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q1" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q1" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q1" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q1" value="1">
						1 
						</label>
					</td>
					</tr>	

					<tr>
						<td >1.2 I have opportunities to create and generate new ideas.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q2" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q2" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q2" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q2" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q2" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>1.3 I have opportunities to create and generate new ideas.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q3" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q3" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q3" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q3" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q3" value="1">
						1 
						</label>
						</td>
					</tr>

					<tr>
						<td>1.4 I have opportunities to create and generate new ideas.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q4" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q4" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q4" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q4" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q4" value="1">
						1 
						</label>
					</td>
					<tr>
						<td>1.5 I have opportunities to create and generate new ideas.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q5" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q5" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q5" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q5" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q5" value="1">
						1 
						</label>
						</td>
					</tr>

					<tr>
						<td class="criteria">Teaching Qualities</td>
					</tr>
					
					<tr>
						<td>2.1 The teacher is knowledgeable in the subject matter.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q2_1" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q2_1" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q2_1" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q2_1" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q2_1" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>2.2 I have opportunities to create and generate new ideas.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q2_2" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q2_2" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q2_2" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q2_2" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q2_2" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>2.3 I have opportunities to create and generate new ideas.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q2_3" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q2_3" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q2_3" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q2_3" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q2_3" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>2.4 I have opportunities to create and generate new ideas.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q2_4" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q2_4" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q2_4" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q2_4" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q2_4" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>2.5 I have opportunities to create and generate new ideas.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q2_5" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q2_5" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q2_5" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q2_5" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q2_5" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td class="criteria">Classroom Managament</td>
					</tr>

					<tr>
						<td>3.1 The teacher observes class routines and procedures (e.g., class schedule, checking of attendance, and explanation of syllabus).</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q3_1" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q3_1" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q3_1" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q3_1" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q3_1" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>3.2 The teacher follows the required conduct of synchronous sessions.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q3_2" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q3_2" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q3_2" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q3_2" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q3_2" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>3.3 The teacher promotes proper behavior among us learners.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q3_3" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q3_3" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q3_3" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q3_3" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q3_3" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>3.4 The teacher recognizes each of us during class participation or activities.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q3_4" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q3_4" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q3_4" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q3_4" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q3_4" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>3.5 The teacher maintains my attention and engagement.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q3_5" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q3_5" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q3_5" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q3_5" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q3_5" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>3.6 The teacher provides clear instructions for all learning activities.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q3_6" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q3_6" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q3_6" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q3_6" value="2">
						2    
						</label>
						<label >
						<input type="radio" name="q3_6" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
						<td>3.7 The activities are done with very few interruptions.</td>
						<td class="radio-buttons">
						<label >
						<input type="radio" name="q3_7" value="5">
						5    
						</label>
						<label >
						<input type="radio" name="q3_7" value="4">
						4    
						</label>
						<label >
						<input type="radio" name="q3_7" value="3">
						3    
						</label>
						<label >
						<input type="radio" name="q3_7" value="2">
						2  
						</label>
						<label >
						<input type="radio" name="q3_7" value="1">
						1 
						</label>
					</td>
					</tr>

					<tr>
					<td>
						<br><br>
						<div class = "commenttext">
						Comments:
						</div>
						<br>
						<div class = "commentbox">
						<textarea name="comments" rows="14" cols="120" class="input-responsive"></textarea>
						</div>
					</td>
					</tr>

					<tr>
						<td colspan="2">
							<div class = "button_adj">
								<input type="submit" name="submit" value="Submit" class="button">
							</div>
						</td>
                	</tr>
			</table>
		</div>
	</div>
	</div>
</form>
</body>
</html>



<?php

    if (isset($_POST['submit'])) {

        $user_id = $participant_id;
        $Q1 = $_POST['q1'];
        $Q2 = $_POST['q2'];
        $Q3 = $_POST['q3'];
        $Q4 = $_POST['q4'];
        $Q5 = $_POST['q5'];
        $Q6 = $_POST['q2_1'];
        $Q7 = $_POST['q2_2'];
        $Q8 = $_POST['q2_3'];
        $Q9 = $_POST['q2_4'];
        $Q10 = $_POST['q2_5'];
		$Q11 = $_POST['q3_1'];
        $Q12 = $_POST['q3_2'];
        $Q13 = $_POST['q3_3'];
        $Q14 = $_POST['q3_4'];
        $Q15 = $_POST['q3_5'];
        $Q16 = $_POST['q3_6'];
        $Q17 = $_POST['q3_7'];
        $comment = $_POST['comments'];
		$date_taken = date("Y-m-d h:i:sa");

        //Save the Order in Databaase
        //Create SQL to save the data
        $sql = "INSERT INTO tbl_questionnaire SET 
            user_id = '$user_id',
            evaluator_id = '$evaluator_id',
            Q1 = $Q1,
            Q2 = $Q2,
            Q3 = $Q3,
            Q4 = $Q4,
            Q5 = $Q5,
            Q6 = $Q6,
            Q7 = $Q7,
            Q8 = $Q8,
            Q9 = $Q9,
            Q10 = $Q10,
			Q11 = $Q11,
            Q12 = $Q12,
            Q13 = $Q13,
            Q14 = $Q14,
            Q15 = $Q15,
            Q16 = $Q16,
            Q17 = $Q17,
            comment = '$comment',
			date_taken = '$date_taken'
        ";


        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether query executed successfully or not
        if($res==true)
        {
            //Query Executed and Order Saved
            $_SESSION['order'] = "<div class='success text-center'>Evaluated Successfully.</div>";
            header('location:'.SITEURL);
        }
        else
        {
            //Failed to Save Order
            $_SESSION['order'] = "<div class='error text-center'>Failed to Evaluate.</div>";
            header('location:'.SITEURL.'questionnaire.php');
        }

        ob_end_flush(); 
    }
?>

<?php include('partials-front/footer.php') ?>