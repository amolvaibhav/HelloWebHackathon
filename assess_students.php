<html>
<body>
	<h1>Correct Answers by the student</h1>
	<?php
		$h=mysql_connect("localhost","root","") or die("Connection Failed..");
		mysql_select_db("db_mozilla");
		$query="select q.question_number,q.rightoption,a.attempted_answer from quesset q,answset a where q.question_number=a.question_number && q.rightoption=a.attempted_answer;";
		$q=mysql_query($query);
		$res=mysql_affected_rows();
		echo "<form method='post'>";
		if(mysql_affected_rows()>0)
		{
			echo "<table width='100%' align='center'>";
			echo "
					<tr>
						<th>Question Number</th>
						<th>Correct Option</th>
						<th>Opted Option</th>
					</tr>";
			while($qry= mysql_fetch_array($q))
			{
				echo "<tr><td><center>$qry[0]</center></td><td><center>$qry[1]</center></td><td><center>$qry[2]</center></td></tr>";
			}
			
			echo "</table>";
			echo "<br><br>";
			
			echo "</form>";

			$query="select * from questions;";
			$q=mysql_query($query);
			$total_ques=mysql_affected_rows();
			echo "total questions: $total_ques";
			echo "<br><br>";
			echo "correct answers: $res";
			mysql_close($h);
		}
?>

</body>
</html>