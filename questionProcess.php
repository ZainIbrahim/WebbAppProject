<?PHP
session_start();
error_reporting(0);
ini_set('display_errors', 0);

//connect to the database
require 'db_connection.php';

//get values from index.php
$question1= $_POST['question1'];$question2= $_POST['question2'];$question3= $_POST['question3'];$question4= $_POST['question4'];
$question5= $_POST['question5'];$question6= $_POST['question6'];$question7= $_POST['question7'];$question8= $_POST['question8'];
$question9= $_POST['question9'];$question10= $_POST['question10'];$question11= $_POST['question11'];$question12= $_POST['question12'];
$question13= $_POST['question13'];$question14= $_POST['question14'];$question15= $_POST['question15'];$question16= $_POST['question16'];
$question17= $_POST['question17'];$question18= $_POST['question18'];$question19= $_POST['question19'];$question20= $_POST['question20'];
$question21= $_POST['question21'];$question22= $_POST['question22'];$question23= $_POST['question23'];$question24= $_POST['question24'];$question25= $_POST['question25'];
$question26= $_POST['question26'];$question27= $_POST['question27'];$question28= $_POST['question28'];$question29= $_POST['question29'];
$question30= $_POST['question30'];$question31= $_POST['question31'];$question32= $_POST['question32'];$question33= $_POST['question33'];
$question34= $_POST['question34'];$question35= $_POST['question35'];$question36= $_POST['question36'];$question37= $_POST['question37'];
$question38= $_POST['question38'];$question39= $_POST['question39'];$question40= $_POST['question40'];$question41= $_POST['question41'];
$question42= $_POST['question42'];$question43= $_POST['question43'];$question44= $_POST['question44'];$question45= $_POST['question45'];
$question46= $_POST['question46'];$question47= $_POST['question47'];$question48= $_POST['question48'];$question49= $_POST['question49'];
$question50= $_POST['question50'];$question51= $_POST['question51'];$question52= $_POST['question52'];$question53= $_POST['question53'];
$question54= $_POST['question54'];$question55= $_POST['question55'];$question56= $_POST['question56'];$question57= $_POST['question57'];
$question58= $_POST['question58'];$question59= $_POST['question59'];$question60= $_POST['question60'];$question61= $_POST['question61'];
$question62= $_POST['question62'];$question63= $_POST['question63'];$question64= $_POST['question64'];

//set session 
$username=  $_SESSION["login"] ;
$projectName=  $_SESSION["projectNameForDb"] ;


  
        
$section1= $_POST['question1']+$_POST['question2']+$_POST['question3']+$_POST['question4']+$_POST['question5']
        +$_POST['question6']+$_POST['question7']+$_POST['question8']+$_POST['question9']+$_POST['question10']
        +$_POST['question11']+$_POST['question12']+$_POST['question13']+$_POST['question14']+$_POST['question15']
        +$_POST['question16']+$_POST['question17']+$_POST['question18'];
$section2= $_POST['question19']+$_POST['question20']
        +$_POST['question21']+$_POST['question22']+$_POST['question23']+$_POST['question24'];

$section3= $_POST['question25']
        +$_POST['question26']+$_POST['question27']+$_POST['question28']+$_POST['question29']+$_POST['question30']
        +$_POST['question31']+$_POST['question32']+$_POST['question33'];
$section4= $_POST['question34']+$_POST['question35']
        +$_POST['question36']+$_POST['question37']+$_POST['question38'];
$section5= $_POST['question39']+$_POST['question40']
        +$_POST['question41']+$_POST['question42']+$_POST['question43'];
$section6= $_POST['question44']+$_POST['question45']
        +$_POST['question46']+$_POST['question47']+$_POST['question48']+$_POST['question49'];
$section7= $_POST['question50']
        +$_POST['question51']+$_POST['question52']+$_POST['question53']+$_POST['question54']+$_POST['question55']
        +$_POST['question56']+$_POST['question57']+$_POST['question58']+$_POST['question59']+$_POST['question60']
        +$_POST['question61']+$_POST['question62']+$_POST['question63']+$_POST['question64'];
$total = $section1+$section2+$section3+$section4+$section5+$section6+$section7;

//validating database
	$result= "INSERT INTO qestions (score,username,projectName,section1,section2,section3,section4,section5,section6,section7) VALUES ('$total','$username','$projectName','$section1','$section2','$section3','$section4','$section5','$section6','$section7')";
					mysqli_query($conn, $result);


					echo "Your data has been sent!";



?>

<!DOCTYPE HTML>
<html>
    <body>
        <p>Back To Manager Page</p>
        <a href="projectManager.php"><input type="submit" value="Back" name="Back" /></a>
     
    </body>
</html>