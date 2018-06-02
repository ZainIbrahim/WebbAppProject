<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Questions Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
 
<div class="container">
  <div class="panel panel-default">
      <h2>Please answer the following questions:</h2>

  
   <div class="panel panel-default">
    <h3>Section 1:Project Characteristics</h3>
    <form action="questionProcess.php" method ="POST">
     
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>1. What is the total project cost estimate?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question1" value ="1" required>$1-5 million</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question1" value ="2">$5-10 million</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question1"  value ="3">10-25 million</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question1"  value ="4">$25-100 million</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question1"  value ="5">over $100 million</label>
    </div>
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>2. What percentage of the total project cost estimate is for procurement? </b></div>
    	<div class="radio">
      <label><input type="radio" name="question2" value ="1" required>No procurement is required—answer "1" to all questions in the "Procurement risks" section (3.3).</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question2" value ="2">under 25 per cent</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question2"  value ="3">26-50 per cent</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question2"  value ="4">51-75 per cent</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question2"  value ="5">over 75 per cent</label>
    </div>
        
      <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>3. Relative to the average project in your organization, which of the following adjectives describes the total project cost estimate?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question3" value ="1" required>Small</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question3" value ="3">Medium</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question3"  value ="5">Large</label>
    </div>

    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>4. How many people (part-time or full-time on the project, including Government of Canada employees and individual contractors) are required to complete this project at its peak activity?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question4" value ="1" required>under 10</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question4" value ="2">10-25</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question4"  value ="3">26-100</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question4"  value ="4">101-250</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question4"  value ="5">over 250</label>
    </div>
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>5. From project definition to project close-out, what is the expected duration of the project?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question5" value ="1" required>under 12 months</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question5" value ="2">12-24 months</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question5"  value ="3">24-36 months</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question5"  value ="4">36-48 months</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question5"  value ="5">over 48 months</label>
    </div>
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>6. How many sponsoring or funding departments or agencies are involved?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question6" value ="1"required>The project involves only one department or agency.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question6" value ="2">The project involves another department or agency.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question6"  value ="3">The project involves two other departments or agencies.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question6"  value ="4">The project involves three other departments or agencies.</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question6"  value ="5">The project involves at least four other departments or agencies.</label>
    </div>
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>7. How will the outcome of this project change or directly affect business processes, sectors, branches and other departments and agencies?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question7" value ="1"required>The outcome of this project will affect one business process within a sector</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question7" value ="2">The outcome of this project will affect multiple business processes within a sector.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question7"  value ="3">The outcome of this project will affect multiple sectors.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question7"  value ="4">The outcome of this project will affect multiple branches</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question7"  value ="5">The outcome of this project will affect multiple departments or agencies.</label>
    </div>
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>8. The proposed or established project governance structure demonstrates adequate support for how many of the following project factors?<br>
            a) The proposed or established project governance structure demonstrates adequate support for how many of the following project factors?<br>
            b) documented decision-making processes<br>
            c) documented roles, responsibilities, and authorities within the governance structure<br>
            d) documented information requirements
        </b></div>
    	<div class="radio">
      <label><input type="radio" name="question8" value ="1"required>Support for all factors is demonstrated</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question8" value ="2">Support for three of the factors is demonstrated</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question8"  value ="3">Support for two of the factors is demonstrated.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question8"  value ="4">Support for one of the factors is demonstrated.</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question8"  value ="5">Support is not demonstrated for any of the factors.</label>
    </div>
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>9. In supporting the achievement of the expected outcomes, how many of the following criteria apply to the total project cost estimate (either indicative cost estimate or substantive cost estimate)?<br>
            a) Cost estimates are generated at the work-package level.<br>
            b) Cost estimates are based on historical data or industry benchmarks.</b></div>
    	<div class="radio">
      <label><input type="radio" name="question9" value ="1"required>Both criteria are met.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question9" value ="3">One of the two criteria is met.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question9"  value ="5"> None of the criteria are met.</label>
    </div>
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>10. In supporting the achievement of the expected outcomes, how many of the following criteria apply to the costing model?<br>
            a) The source of funds has been identified within departmental reference levels.<br>
            b) The funds have been internally committed.</b></div>
    	<div class="radio">
      <label><input type="radio" name="question10" value ="1"required>Both criteria are met.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question10" value ="3">One of the two criteria is met.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question10"  value ="5">None of the criteria are met.</label>
    </div>

    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>11. Is the project susceptible to time delays? Time delays can have a number of causes, such as the following:<br>
            a) Changes in technology<br>
            b) Requirements of participating organizations<br>
            c) Seasonal considerations<br>
            d) The need for policy approvals<br>
            e)External influences</b></div>
    	<div class="radio">
      <label><input type="radio" name="question11" value ="1"required> No, the project is not susceptible.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question11" value ="3">Yes, the project is moderately susceptible; time delays will have minor effects on the schedule.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question11"  value ="5">Yes, the project is highly susceptible; time delays will have major effects on the schedule.</label>
    </div>

    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>12. Do geographical considerations influence the manner in which the project is conducted? Consider the following statements:<br>
            a) Project activities or team members are distributed across a wide geographical area.<br>
            b) The project will be conducted in a remote or difficult location.</b></div>
    	<div class="radio">
      <label><input type="radio" name="question12" value ="1"required>Neither statement applies.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question12" value ="3">One statement is true.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question12"  value ="5">Both statements are true.</label>
    </div>

    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>13. Do environmental considerations influence the manner in which the project is conducted?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question13" value ="1"required>No</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question13"  value ="5">Yes</label>
    </div>   
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>14. Are there any socio-economic considerations that must be taken into account?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question14" value ="1"required>No</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question14"  value ="5">Yes</label>
    </div>
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>15. Consider how the availability of facilities will influence the manner in which the project is conducted:</b></div>
    	<div class="radio">
      <label><input type="radio" name="question15" value ="1"required>Appropriate facilities are available to conduct the project.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question15" value ="3">Facilities available to the project are inadequate.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question15"  value ="5">Facilities are unavailable for the project.</label>
    </div>

    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>16. Does public perception influence the manner in which the project is conducted?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question16" value ="1"required>No</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question16"  value ="5">Yes</label>
    </div>
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>17. Do considerations relating to Aboriginal people (including land claims and Aboriginal consultation obligations) influence the manner in which the project is conducted?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question17" value ="1"required>No</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question17"  value ="5">Yes</label>
    </div>
    <!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>18. Do health and safety requirements add significant complexity to the requirements for this project?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question18" value ="1"required>No</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question18"  value ="5">Yes</label>
    </div>
        <!--------------------------------------------------------------------------------------------->
        </div>         <!---Close section A panel--->


<div class="panel panel-default">
    <h3>Section 2: Strategic Management Risks</h3>
    		

    <!--------------------------------------------------------------------------------------------->
    <div class="panel-body"><b>19. How well and how clearly does the project align with the organization's mandate and strategic outcomes?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question19" value ="1"required>The project is directly aligned and it explicity contributes to the strategic outcomes of the organization or program.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question19" value ="2">There is good alignment with the strategic outcome and there is an indirect contribution to the strategic outcomes of the organization or program.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question19"  value ="5">There is a weak alignment with the strategic outcomes, or the strategic outcomes have not been established.</label>
    </div>
 
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>20. What level of priority is the project to the organization? </b></div>
    	<div class="radio">
      <label><input type="radio" name="question20" value ="1"required>The project is a critical priority: all resources necessary will be allocated to it.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question20" value ="5">The project is a normal priority: resources may be shared with a project of equal or higher priority.</label>
    </div>

    <!--------------------------------------------------------------------------------------------->
    <div class="panel-body"><b>21. How thoroughly does the project business case demonstrate the value of the project to the organization?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question21" value ="1"required>The business case is compelling, and value is extensively documented, OR a business case is not required.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question21" value ="2">The business case provides a good demonstration of value; some details require further clarification.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question21"  value ="5">The business case does not demonstrate value or is not complete.</label>
    </div>    
    <!--------------------------------------------------------------------------------------------->
    <div class="panel-body"><b>22. To what degree is the organization's management and relevant stakeholders aware of the project?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question22" value ="1"required>There is consistent, clear, and comprehensive understanding of the project at all relevant levels.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question22" value ="2">There is good general awareness of the project, its implications, and its budget</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question22"  value ="5">There is minimal awareness of the project in relevant levels of the organization.</label>
    </div>     
    <!--------------------------------------------------------------------------------------------->
    <div class="panel-body"><b>23. Does the project have a communications plan?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question23" value ="1"required>Yes, there is a project communications plan.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question23" value ="2">The project communications plan has not yet been completed.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question23"  value ="5">No, a project communications plan does not exist.</label>
    </div>     
    
     <div class="panel-body"><b>24. How extensive is the commitment of the organization's senior executive management, stakeholders, partners, and project sponsors to the timely and successful completion of this project? Consider the following criteria:
             a) A senior project sponsor or management champion is engaged.<br>
             b) Stakeholders and partners are willing to reallocate resources if necessary.<br>
             c) Senior executive management oversight is in place.<br>
             d) Commitment from all stakeholders is confirmed.</b></div>
    	<div class="radio">
      <label><input type="radio" name="question24" value ="1"required>All four criteria are met.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question24" value ="2">Three of the four criteria are met.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question24"  value ="3">Two of the four criteria are met.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question24"  value ="4">One of the four criteria is met.</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question24"  value ="5">None of the four criteria are met.</label>
    </div>   
        <!--------------------------------------------------------------------------------------------->
        </div>         <!---Close section B panel--->
        
<div class="panel panel-default">
    <h3>Section 3: Procurement Risks</h3>
    		

    <!--------------------------------------------------------------------------------------------->
    <div class="panel-body"><b>25. The documented project procurement strategy:</b></div>
    	<div class="radio">
      <label><input type="radio" name="question25" value ="1"required>addresses all project requirements.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question25" value ="2">is high-level and adequately describes required procurement activities.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question25"  value ="5">is incomplete or inappropriate for the project.</label>
    </div>
 
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>26. What is the supplier availability and willingness? </b></div>
    	<div class="radio">
      <label><input type="radio" name="question26" value ="1"required>There are qualified suppliers in the market willing to work with the Government of Canada.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question26" value ="3">There is a limited number of qualified suppliers in the market or some suppliers are reluctant to work with the Government of Canada.</label>
    </div>    
    <div class="radio">
      <label><input type="radio" name="question26" value ="5">There is only one supplier or there are no qualified suppliers that can meet the requirements.</label>
    </div>
        <!--------------------------------------------------------------------------------------------->
        
   <div class="panel-body"><b>27. Will the appropriate products, goods, or services be supplied in a timely manner (according to specified contract delivery dates or required delivery dates) within the expected cost envelope by a qualified supplier?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question27" value ="1"required>There is no potential for products, goods, or services not being readily supplied.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question27" value ="3">There is a slight potential for slippage of project schedule due to procurement complexity or vendor challenges.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question27"  value ="5">There is a potential that the project deliverables, schedule, or budget may be seriously affected by limited qualified bidders, significant request-for-proposal process delays, or extended challenges.</label>
    </div>

        <!--------------------------------------------------------------------------------------------->
        
        <div class="panel-body"><b>28. How many of the following statements are true?<br>
                a) The personnel involved in the project's procurement component have expertise in writing specifications or contracts.<br>
                b) The personnel involved in the project's procurement component have subject-matter expertise in the goods or services being procured.<br>
                c) There is a robust review process for contract award.</b></div>
    	<div class="radio">
      <label><input type="radio" name="question28" value ="1"required>All statements are true.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question28" value ="2">Two statements are true.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question28"  value ="4">One statement is true.</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question28"  value ="5">None of the statements are true.</label>
    </div>   
           <!--------------------------------------------------------------------------------------------->
           
   <div class="panel-body"><b>29. How many separate contracts associated with key deliverables are planned for this project?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question29" value ="1"required>One contract.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question29" value ="2">Two contracts.n</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question29"  value ="3">Three contracts.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question29"  value ="4">Four contracts.</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question29"  value ="5">Five or more contracts.</label>
    </div>
           <!--------------------------------------------------------------------------------------------->
           
           <div class="panel-body"><b>30. How many of the following statements are true?<br>
                   a) The firm or individual obtaining the contract will subcontract to other companies<br>
                   b) Contracts are subject to trade agreements<br>
                   c) The results of the contract are dependent on the results of another contract.
               </b></div>
    	<div class="radio">
      <label><input type="radio" name="question30" value ="1"required>None of the statements are true.n</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question30" value ="2">One statement is true.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question30"  value ="4">Two statements are true.</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question30"  value ="5">All of the statements are true.</label>
    </div>
        <!--------------------------------------------------------------------------------------------->
        
   <div class="panel-body"><b>31. Based on the contract, consider the degree of control over supplier selection and anticipated contract style.</b></div>
    	<div class="radio">
      <label><input type="radio" name="question31" value ="1"required>directed (sole-source, Advance Contract Award Notice - ACAN).</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question31" value ="2"> a standing offer call-up.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question31"  value ="4">a supply arrangement procurement.</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question31"  value ="5">a public tender (request for quotation, invitation to tender, request for proposal).</label>
    </div>   
         <!--------------------------------------------------------------------------------------------->
         
         <div class="panel-body"><b>32. How many of the following statements pertaining to contract management are true?<br>
                 a) The personnel who wrote the contract are involved in the management of the contract.<br>
                 b) There is a standardized acceptance process for the review of the completion of contracts (e.g. peer reviewing or field trials).<br>
                 c) The lines of communication between the contract authority and the contractor are well-defined and regularized.<br>
                 d) There is a standardized process for reporting progress (e.g. punctual evaluation or regular meetings).<br>
                 e) There is a mechanism in place to address any contractual disagreements between parties regarding the completion of a contract.</b></div>
    	<div class="radio">
      <label><input type="radio" name="question32" value ="1"required>All statements are true.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question32" value ="2">Four statements are true.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question32"  value ="3">Three statements are true.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question32"  value ="4">Two statements are true.</label>
    </div> 
    <div class="radio ">
      <label><input type="radio" name="question32"  value ="5">One or none of the statements are true.</label>
    </div>
         <!--------------------------------------------------------------------------------------------->
         
   <div class="panel-body"><b>33. Has PWGSC or a delegated contracting authority been formally engaged through a service agreement to provide adequate support for the procurement process?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question33" value ="1"required> Yes, or not required.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question33"  value ="3">This is planned but not yet in place</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question33"  value ="5">No.</label>
    </div>    
        <!--------------------------------------------------------------------------------------------->
        </div>         <!---Close section C panel--->

<div class="panel panel-default">
    <h3>Section 4:  Human Resources Risks</h3>
    		

    <!--------------------------------------------------------------------------------------------->
    <div class="panel-body"><b>34. Does the organization anticipate a shortage of available personnel with appropriate skills during a significant period of the project?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question34" value ="1"required> No</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question34"  value ="5"> Yes</lal>
    </div>
 
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>35. What is the predicted stability of the project team? Consider the following criteria: <br>
                a) The project team has previously worked together.<br>
                b) A low rate of turnover is expected<br>
                c) It is expected that a suitable replacement will be readily available.</b></div>
     	<div class="radio">
      <label><input type="radio" name="question35" value ="1"required>All three criteria are met.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question35" value ="2">Two of the three criteria are met.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question35"  value ="4">One of the three criteria is met.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question35"  value ="5">None of the three criteria are met.</label>
    </div> 
        
       <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>36. What percentage of the project team is assigned full-time to the project?</b></div>
     	<div class="radio">
      <label><input type="radio" name="question36" value ="1"required>over 80 per cent</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question36" value ="2">61-80 per cent</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question36" value ="3">41-60 per cent</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question36"  value ="4">20-40 per cent</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question36"  value ="5">under 20 per cent or all part-time</label>
    </div> 
       <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>37. Consider the following criteria regarding knowledge and experience: <br>
                a) The project will use a proven approach.<br>
                b) This type of project has been done before in the Government of Canada.<br>
                c) The project will use resources that have been applied to this type of project before.</b></div>
     	<div class="radio">
      <label><input type="radio" name="question37" value ="1"required>All three criteria are met.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question37" value ="2">Two of the three criteria are met.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question37"  value ="4">One of the three criteria is met.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question37"  value ="5">None of the three criteria are met.</label>
    </div> 
              <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>38. Has the assigned project manager worked on a project of this size and complexity before?</b></div>
     	<div class="radio">
      <label><input type="radio" name="question38" value ="1"required>Yes</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question38"  value ="5">No</label>
    </div> 

    
    
    
    
        <!--------------------------------------------------------------------------------------------->
        </div>         <!---Close section D panel--->
<div class="panel panel-default">
    <h3>Section 5: Business Risks</h3>
    		

<!--------------------------------------------------------------------------------------------->

    <div class="panel-body"><b>39. Describe the overall effect of this project on the organization:</b></div>
    	<div class="radio">
      <label><input type="radio" name="question39" value ="1"required>Project will fit with the organization's current processes, use existing workforce and skills, and not require substantial changes to technology and other infrastructure.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question39"  value ="3">Some changes to processes, staffing models, or technology will be required.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question39"  value ="5">Significant restructuring of business processes, staffing requirements, partner relationships, and infrastructure will be required.</label>
    </div>
 
        <!--------------------------------------------------------------------------------------------->
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>40. Does the project have a change management plan? </b></div>
    	<div class="radio">
      <label><input type="radio" name="question40" value ="1"required>Change management will be required and a change management plan has been prepared. Alternatively, there are no significant change management requirements.</label>
    </div>
      <div class="radio ">
      <label><input type="radio" name="question40"  value ="3">Change management will be required and preparation of a change management plan is incorporated or included in the project management plan.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question40"  value ="5">Change management will be required but there are no plans to establish a change management plan.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>41. What is the level of public involvement required to achieve expected outcomes? </b></div>
    	<div class="radio">
      <label><input type="radio" name="question41" value ="1"required>No public participation is required for project success.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question41" value ="2">Limited public participation is required for project success.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question41"  value ="4"> Moderate public participation is required for project success.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question41"  value ="5"> Extensive public participation is required for project success.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>42. What level of legal risk will be introduced by this project through the addition of new liabilities, regulatory requirements, and legislative changes? </b></div>
    	<div class="radio">
      <label><input type="radio" name="question42" value ="1"required> No legal review is required; no legislative changes are required; legal costs and effort are assessed as low.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question42" value ="2">One or more risk events will likely occur resulting in legal costs and effort; a legal review has been completed.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question42"  value ="3">One or more risk events will likely occur resulting in legal costs and effort; a legal review has not been completed.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question42"  value ="4">There is a high probability of liability and other legal risks; extensive legal resources will be required during the project; legislative change is required to implement the project; a legal review has been completed.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question42"  value ="5">There is a high probability of liability and other legal risks; extensive legal resources will be required during the project; legislative change is required to implement the project; a legal review has not been completed.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>43. Are there expected challenges to ensure that this project complies with relevant Treasury Board policy requirements, such as those regarding security, accessibility, common look and feel standards for the Internet, and management of government information? </b></div>
    	<div class="radio">
      <label><input type="radio" name="question43" value ="1"required>The project fully complies with all applicable policies. Alternatively, the project is not subject to any of these policies.</label>
    </div>
        <div class="radio ">
      <label><input type="radio" name="question43"  value ="3"> There are some challenges associated with policy requirements, but the project team is adequately equipped to address these.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question43"  value ="5">There are some challenges associated with policy requirements and there is a lack of confidence that policy requirements can be met on schedule and within the budget.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        </div>         <!---Close section E panel--->
        
<div class="panel panel-default">
    <h3>Section 6: Project Management Integration Risks</h3>
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>44. How many of the following elements are defined in the project management plan?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question44" value ="1"required>All elements are defined.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question44" value ="2">Five or six elements are defined.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question44"  value ="3">Three or four elements are defined.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question44"  value ="4">One or two elements are defined.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question44"  value ="5">No plan has been completed.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>45. To indicate the extent of the project team's being appropriately organized to undertake a project of this scope, how many of these criteria are met? </b></div>
    	<div class="radio">
      <label><input type="radio" name="question45" value ="1"required>All three criteria are met.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question45" value ="2">Two of the three criteria are met.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question45"  value ="4">One of the three criteria is met.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question45"  value ="5"> None of the three criteria are met.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>46. Has a project reporting and control process appropriate for the project been documented? </b></div>
    	<div class="radio">
      <label><input type="radio" name="question46" value ="1"required>Yes</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question46"  value ="3"> The development of a project reporting and control process is a planned activity, but not yet completed.</label>
    </div>
 
    <div class="radio ">
      <label><input type="radio" name="question46"  value ="5">No</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>47. How many of the following disciplines will, or does the project employ?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question47" value ="1"required>All four disciplines.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question47" value ="2">Three of the disciplines.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question47"  value ="3">Two of the disciplines.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question47"  value ="4">One of the disciplines.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question47"  value ="5"> None of the disciplines.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>48. Has a risk management plan been completed, and to what degree have appropriate contingency plans been included which respond to the risks as identified in the plan? </b></div>
    	<div class="radio">
      <label><input type="radio" name="question48" value ="1"required>All three criteria are met, OR a risk management plan is not required.</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="question48" value ="2">Two of the three criteria are met.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question48"  value ="4">One of the three criteria is met.</label>
    </div>
   
    <div class="radio ">
        <label><input type="radio" name="question48"  value ="5">None of the three criteria are met.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>49. Is an appropriate information management (IM) process planned or in place to collect, distribute, and protect relevant and important project information, such as designs, project plans, baseline, and registers?</b></div>
    	<div class="radio">
            <label><input type="radio" name="question49" value ="1"required>Comprehensive information management practices are in place or planned to support the project throughout its life cycle.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question49"  value ="3">Standard IM practices are planned or in place and resourced.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question49"  value ="5">Minimal IM practices are in place or planned within the project.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        </div>         <!---Close section F panel--->   
 <div class="panel panel-default">
    <h3>Section 7: Project Requirements Risks</h3>
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>50. How many of the following statements are true?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question50" value ="1"required>None of the statements are true.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question50" value ="2">One of the statements is true.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question50"  value ="3">Two of the statements are true.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question50"  value ="4">Three of the statements are true.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question50"  value ="5">  All of the statements are true.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>51. In defining project requirements, how many of the following statements are true?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question51" value ="1"required>Four of the statements are true</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question51" value ="2">Three of the statements are true.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question51"  value ="3">Two of the statements are true.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question51"  value ="4">One of the statements is true.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question51"  value ="5">  None of the statements are true.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>52. To what extent have available sources/methods been employed and verified to provide information for this project as applicable (e.g. research, consultations, workshops, surveys, and existing documentation)?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question52" value ="1"required>All sources/methods have been employed and verified.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question52" value ="2">All sources/methods have been employed but have not been verified.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question52"  value ="3">Some sources/methods have been employed.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question52"  value ="4">Few sources/methods have been employed.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question52"  value ="5"> No information has been gathered or is available.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>53. Have the business requirements been validated with users with an appropriate technique, such as walk-throughs, workshops, and independent verification and validation?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question53" value ="1"required>Yes</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question53" value ="2">Three of the disciplines.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question53"  value ="3">Validation is a planned activity but has not yet been completed.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question53"  value ="4">One of the disciplines.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question53"  value ="5"> No</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>54. Have feasibility studies been conducted, and is there confidence in the assumptions made in the feasibility studies?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question54" value ="1"required>Feasibility studies are not required, because none of the requirements are technically difficult to implement.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question54" value ="2">Feasibility studies were conducted and there is confidence in the assumptions made.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question54"  value ="3">Two of the disciplines.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question54"  value ="4">Feasibility studies were conducted, but there is not complete confidence in the assumptions made.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question54"  value ="5">  Feasibility studies were necessary but not conducted.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>55. What percentage of tasks cannot be fully defined until the completion of previous tasks? These are tasks that may be understood but cannot be documented in detail due to dependency on results from a previous task.</b></div>
    	<div class="radio">
      <label><input type="radio" name="question55" value ="1"required>under 10 per cent</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question55" value ="2">20 per cent</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question55"  value ="3">30 per cent</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question55"  value ="4">40 per cent</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question55"  value ="5"> over 40 per cent</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>56. To what extent are the project's requirements clear, completed, and communicated?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question56" value ="1"required>All requirements are clear, complete, and communicated.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question56"  value ="3">Up to 10 per cent of total requirements are not complete or are undocumented.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question56"  value ="5"> More than 10 per cent of total requirements are not complete or are unclear.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>57. How many of the following project characteristics are expected to remain stable?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question57" value ="1"required> All of the project characteristics are expected to remain stable.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question57" value ="2">Five of the six project characteristics are expected to remain stable</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question57"  value ="3"> Four of the six project characteristics are expected to remain stable.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question57"  value ="4">Three of the six project characteristics are expected to remain stable.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question57"  value ="5"> Two or less of the project characteristics are expected to remain stable.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>58. Are any other projects dependent on outputs or outcomes of this project?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question58" value ="1"required> No</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question58"  value ="5"> yes</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>59. Are outcomes of this project dependent on the outputs and/or outcomes of any other projects?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question59" value ="1"required> No</label>
        </div>
   
    <div class="radio ">
      <label><input type="radio" name="question59"  value ="5"> Yes </label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>60. What degree of integration with externalities, such as other projects, systems, infrastructure, or organizations, is required?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question60" value ="1"required>There are few complex integration requirements; activities to specify integration are included in the project management plan.</label>
    </div>

    <div class="radio ">
      <label><input type="radio" name="question60"  value ="3">There is adequate understanding and planning for integration.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question60"  value ="5"> There are highly complex or numerous integration requirements and insufficient planning of required activities.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>61. What degree of integration is required within the project?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question61" value ="1"required>There are few complex integration requirements; activities to specify integration are included in the project management plan.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question61"  value ="3">There is adequate understanding and planning for integration.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question61"  value ="5"> There are highly complex or numerous integration requirements and insufficient planning of required activities.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>62. Relative to the average (typical) project in your organization, which of the following adjectives describes the number of tasks, elements, or deliverables in the work breakdown structure?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question62" value ="1"required> Small</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question62"  value ="3"> Medium</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question62"  value ="5"> Large</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>63. Does the project schedule accommodate the critical path of the project, including appropriate contingencies?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question63" value ="1"required> Yes</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question63"  value ="5">  No, OR no critical path analysis has been performed.</label>
    </div>
    
    
        <!--------------------------------------------------------------------------------------------->
        
        <!--------------------------------------------------------------------------------------------->

        <div class="panel-body"><b>64. What is the effect on the project of the requirement for scarce resources or resources that are in very high demand?</b></div>
    	<div class="radio">
      <label><input type="radio" name="question64" value ="1"required>No scarce resources are required OR not applicable.</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="question64" value ="2">The project will incur minor delays or minor cost overruns due to scarcity of resources.</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="question64"  value ="3"> The project will incur moderate delays or moderate cost overruns due to scarcity of resources.</label>
    </div>
    
    <div class="radio ">
      <label><input type="radio" name="question64"  value ="4">The project will incur significant delays or significant cost overruns due to scarcity of resources and must return to Treasury Board for revised approval.</label>
    </div>
   
    <div class="radio ">
      <label><input type="radio" name="question64"  value ="5"> The success of the project is critically dependent on scarce resources.</label>
    </div>

        <!--------------------------------------------------------------------------------------------->
        </div>         <!---Close section G panel--->       

        <!--------------------------------------------------------------------------------------------->
          <div>  <input type="submit" value="Submit" /></div>
       
      
    </form>

     </div>
  </div>  


</body>
</html>

