
<?php include('partials-front/menu.php'); 

    $participant_id=$_GET['id'];

    $username = $_SESSION['user'];

    Print_r ($_SESSION);

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

<form class="form" 	method="POST" action="">
		<div class="title">
			<h1>Evaluation Form</h1>
			<p>Evaluate Teacher</p>
		</div>

		<!-- ------------------------- -->


		<div class="main-content">


        <table class="tbl-full">
		<div class="main-content">
			<div class="Fname"> Learning Process <span class="required">*</span></div>

		    <div class="First-Questionnaire"> 1.1 I am engaged to think deeply with and about the important concepts and theories.</div>

		    <div class="choices-div">
		    	&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <div class="name"> Gender: </div> -->
			<label class="container">5 pts
			<input type="radio" name="q1" value="5">
			<span class="checkmark"></span>
			</label>

			<label class="container">4 pts
			<input type="radio" name="q1" value="4">
			<span class="checkmark"></span>
			</label>

			<label class="container">3 pts
			<input type="radio" name="q1" value="3">
			<span class="checkmark"></span>
			</label>

			<label class="container">2 pts
			<input type="radio" name="q1" value="2">
			<span class="checkmark"></span>
			</label>

			<label class="container">1 pts
			<input type="radio" name="q1" value="1">
			<span class="checkmark"></span>
			</label>

			</div>

&nbsp;
			<div class="First-Questionnaire">1.2 I have opportunities to create and generate new ideas.</div>



		    <div class="choices-div">
		    	&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <div class="name"> Gender: </div> -->
			<label class="container">5 pts
			<input type="radio" name="q2" value="5">
			<span class="checkmark"></span>
			</label>

			<label class="container">4 pts
			<input type="radio" name="q2" value="4">
			<span class="checkmark"></span>
			</label>

			<label class="container">3 pts
			<input type="radio" name="q2" value="3">
			<span class="checkmark"></span>
			</label>

			<label class="container">2 pts
			<input type="radio" name="q2" value="2">
			<span class="checkmark"></span>
			</label>

			<label class="container">1 pts
			<input type="radio" name="q2" value="1">
			<span class="checkmark"></span>
			</label>

			</div>

&nbsp;
			<div class="First-Questionnaire">1.3 I have opportunities to create and generate new ideas.</div>



		    <div class="choices-div">
		    	&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <div class="name"> Gender: </div> -->
			<label class="container">5 pts
			<input type="radio" name="q3" value="5">
			<span class="checkmark"></span>
			</label>

			<label class="container">4 pts
			<input type="radio" name="q3" value="4">
			<span class="checkmark"></span>
			</label>

			<label class="container">3 pts
			<input type="radio" name="q3" value="3">
			<span class="checkmark"></span>
			</label>

			<label class="container">2 pts
			<input type="radio" name="q3" value="2">
			<span class="checkmark"></span>
			</label>

			<label class="container">1 pts
			<input type="radio" name="q3" value="1">
			<span class="checkmark"></span>
			</label>

			</div>
&nbsp;
			<div class="First-Questionnaire">1.4 I have opportunities to create and generate new ideas.</div>



		    <div class="choices-div">
		    	&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <div class="name"> Gender: </div> -->
			<label class="container">5 pts
			<input type="radio" name="q4" value="5">
			<span class="checkmark"></span>
			</label>

			<label class="container">4 pts
			<input type="radio" name="q4" value="4">
			<span class="checkmark"></span>
			</label>

			<label class="container">3 pts
			<input type="radio" name="q4" value="3">
			<span class="checkmark"></span>
			</label>

			<label class="container">2 pts
			<input type="radio" name="q4" value="2">
			<span class="checkmark"></span>
			</label>

			<label class="container">1 pts
			<input type="radio" name="q4" value="1">
			<span class="checkmark"></span>
			</label>

			</div>

			&nbsp;
			<div class="First-Questionnaire">1.5 I have opportunities to create and generate new ideas.</div>



		    <div class="choices-div">
		    	&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <div class="name"> Gender: </div> -->
			<label class="container">5 pts
			<input type="radio" name="q5" value="5">
			<span class="checkmark"></span>
			</label>

			<label class="container">4 pts
			<input type="radio" name="q5" value="4">
			<span class="checkmark"></span>
			</label>

			<label class="container">3 pts
			<input type="radio" name="q5" value="3">
			<span class="checkmark"></span>
			</label>

			<label class="container">2 pts
			<input type="radio" name="q5" value="2">
			<span class="checkmark"></span>
			</label>

			<label class="container">1 pts
			<input type="radio" name="q5" value="1">
			<span class="checkmark"></span>
			</label>

			</div>

		</div>
		</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- ---------------------------- -->

		<div>
		<div class="Second - Questionnaire- div">
			<div class="Fname"> Teacher Qualities <span class="required">*</span></div>

			<div class="First-Questionnaire"> 2.1 The teacher is knowledgeable in the subject matter.</div>


		    <div class="choices-div">
		    	&nbsp;&nbsp;&nbsp;&nbsp;
			
			<label class="container">5 pts
			<input type="radio" name="q2_1" value="5">
			<span class="checkmark"></span>
			</label>

			<label class="container">4 pts
			<input type="radio" name="q2_1" value="4">
			<span class="checkmark"></span>
			</label>

			<label class="container">3 pts
			<input type="radio" name="q2_1" value="3">
			<span class="checkmark"></span>
			</label>

			<label class="container">2 pts
			<input type="radio" name="q2_1" value="2">
			<span class="checkmark"></span>
			</label>

			<label class="container">1 pts
			<input type="radio" name="q_1" value="1">
			<span class="checkmark"></span>
			</label>

			</div>

&nbsp;
			<div class="Second-Questionnaire">2.2 I have opportunities to create and generate new ideas.</div>



		    <div class="choices-div">
		    	&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <div class="name"> Gender: </div> -->
			<label class="container">5 pts
			<input type="radio" name="q2_2" value="5">
			<span class="checkmark"></span>
			</label>

			<label class="container">4 pts
			<input type="radio" name="q2_2" value="4">
			<span class="checkmark"></span>
			</label>

			<label class="container">3 pts
			<input type="radio" name="q2_2" value="3">
			<span class="checkmark"></span>
			</label>

			<label class="container">2 pts
			<input type="radio" name="q2_2" value="2">
			<span class="checkmark"></span>
			</label>

			<label class="container">1 pts
			<input type="radio" name="q2_2" value="1">
			<span class="checkmark"></span>
			</label>

			</div>

&nbsp;
			<div class="Second-Questionnaire">2.3 I have opportunities to create and generate new ideas.</div>



		    <div class="choices-div">
		    	&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- <div class="name"> Gender: </div> -->
			<label class="container">5 pts
			<input type="radio" name="q2_3" value="5">
			<span class="checkmark"></span>
			</label>

			<label class="container">4 pts
			<input type="radio" name="q2_3" value="4">
			<span class="checkmark"></span>
			</label>

			<label class="container">3 pts
			<input type="radio" name="q2_3" value="3">
			<span class="checkmark"></span>
			</label>

			<label class="container">2 pts
			<input type="radio" name="q2_3" value="2">
			<span class="checkmark"></span>
			</label>

			<label class="container">1 pts
			<input type="radio" name="q2_3" value="1">
			<span class="checkmark"></span>
			</label>

			</div>
        &nbsp;
            <div class="Second-Questionnaire">2.4 I have opportunities to create and generate new ideas.</div>



                <div class="choices-div">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                <!-- <div class="name"> Gender: </div> -->
                <label class="container">5 pts
                <input type="radio" name="q2_4" value="5">
                <span class="checkmark"></span>
                </label>

                <label class="container">4 pts
                <input type="radio" name="q2_4" value="4">
                <span class="checkmark"></span>
                </label>

                <label class="container">3 pts
                <input type="radio" name="q2_4" value="3">
                <span class="checkmark"></span>
                </label>

                <label class="container">2 pts
                <input type="radio" name="q2_4" value="2">
                <span class="checkmark"></span>
                </label>

                <label class="container">1 pts
                <input type="radio" name="q2_4" value="1">
                <span class="checkmark"></span>
                </label>

                </div>

                &nbsp;

            <div class="Second-Questionnaire">2.5 I have opportunities to create and generate new ideas.</div>

                <div class="choices-div">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                
                    <label class="container">5 pts
                    <input type="radio" name="q2_5" value="5">
                    <span class="checkmark"></span>
                    </label>

                    <label class="container">4 pts
                    <input type="radio" name="q2_5" value="4">
                    <span class="checkmark"></span>
                    </label>

                    <label class="container">3 pts
                    <input type="radio" name="q2_5" value="3">
                    <span class="checkmark"></span>
                    </label>

                    <label class="container">2 pts
                    <input type="radio" name="q2_5" value="2">
                    <span class="checkmark"></span>
                    </label>

                    <label class="container">1 pts
                    <input type="radio" name="q2_5" value="1">
                    <span class="checkmark"></span>
                    </label>
                
                </div>
            </div>
            <div>
                <input type="text" name="comments" cols="30" rows="5" placeholder="Comments">
            </div>
		</div>

		&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
        <input type="submit" name="submit" value="Submit" class="btn-secondary">
		</div>

        </table>
</form>

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
        $comment = $_POST['comments'];

        //Save the Order in Databaase
        //Create SQL to save the data
        $sql = "INSERT INTO tbl_questionnaire SET 
            user_id = '$user_id',
            evaluator_id = $evaluator_id,
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
            comment = '$comment'
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
            header('location:'.SITEURL);
        }

        ob_end_flush(); 
    } else {
        echo "Error.";
    }

?>

<?php include('partials-front/footer.php') ?>