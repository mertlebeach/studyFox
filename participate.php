<html>
<? include("header.php");
    
?>

<style>
.fat{
max-width: 55%;
padding: 15px;
align-self: center;
margin-left: auto;
margin-right: auto;}

h2{
padding-top:15px;
text-align:center;
}    

</style>
    <header>
    <h2>Participate and make yourself available to other study foxes.</h2>
    </header>
<body>
<form  method="POST" action="savecomment.php">
<div class="fat">
    <div class="form-group row">
	<label for "name-input" class="col-2 col-form-label">Name:</label>
	   <div class="col-10">
		<input class="form-control" type="text" id="name-input" name="name">
	   </div>
    </div>

    
    
    
    
    
    
    <div class="form-group row">
        
	  
        <label for ="sell"> Class:</label>
           <select class="form-control"  id="sell" name="class">
               <option>CS 121</option>
               <option>CS 221</option>
           </select>
	    
    </div>
    <div class="form-group row">
        <label for "email-input" class="col-2 col-form-label">Email:</label>
        <div class="col-10">
        <input class="form-control" type="email" id="email-input" name="email">
        </div>
    </div>
        <div class="form-group row">
        <label for "availability" class="col-2 col-form-label">Availability:</label>
        <input class="form-control" type="text" id="availability" name="availability">
            
    </div>
   <!-- <div class="form-group row">
        <label for "availability" class="col-2 col-form-label">Availability:</label>

        <div class="checkbox">
            <label class="checkbox-inline"><input type="checkbox" name="monday" value ="Monday">Monday</label>
            <label class="checkbox-inline"><input type="checkbox" name="tuesday" value ="Tuesday">Tuesday</label>
            <label class="checkbox-inline"><input type="checkbox" name="wedneday" value ="Wednesday">Wednesday</label>
            <label class="checkbox-inline"><input type="checkbox" name="thursday" value ="Thursday">Thursday</label>
            <label class="checkbox-inline"><input type="checkbox" name="friday" value ="Friday">Friday</label>
            <label class="checkbox-inline"><input type="checkbox" name="saturday" value="Saturday">Saturday</label>
            <label class="checkbox-inline"><input type="checkbox" name="sunday" value = "Sunday">Sunday</label>
        </div>
    </div>-->
    <div class="form-group row">
        <label for "comment"  class="col-2 col-form-label">Additional Comments:</label>
        <div class="col-10">
        <input class="form-control" type="text" id="comment" name="comment">
             </div>

    </div>
    <div class ="form-group row">
        <input type="submit" class="btn btn-warning" value="Submit">
        
    </div>
</div>
</form>
     <div class="container text-center">
 <img src="lonelyfox.png" class = "img-fluid" class="img-responsive" alt="lonely_fox" style="width:325px; height:500px;"></div>
</body>
<?php
    include("footer.php");
?>

</html>
