<!DOCTYPE html> 
<html lang="en"> 
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<meta charset="UTF-8"> 
<title>Title</title> 
</head> 
<style > 
body 
{ 
background: url(https://image.freepik.com/free-photo/no-translate-detected_1962-94.jpg) no-repeat; 
background-size: 100%; 
} 
#l1{
	padding: 100px;
}
</style> 
<form method = "POST" action="check_button.php" align = "center"> 
<button type="submit" name = "Museum" value="2" class="btn btn-secondary btn-lg active">What is in our Museum</button><br><br>
<button type="submit" name = "date_Session" value="3" class="btn btn-secondary btn-lg active">View the date of the session</button> 
</form> 
<body> 
	<div align="center" id="l1">
<div id="posts"> 
<div> 
<form id="commentForm"> 
<div> 
<h2><label for="comment">
leave your review about the museum</label></h2> 
</div> 
<div> 
<textarea name="comment" id="comment"></textarea> 
</div> 
<button type="submit" name="button" class="btn btn-secondary btn-lg active">Send</button>  
</form> 
</div> 
<div id="comments"> 
<h2>
User Comments</h2> 
<div class="commentItem"> 
<h4><p class="commentText"> 
Your comments will be displayed here:
</p></h4> 
</div> 

</div> 
</div> 
<input id="showAll" type="submit" value="showAllComments" class="btn btn-secondary btn-lg active">
<div id="SHOW"></div>
<script src="showAll.js"></script>

<script src="Comment.js"> </script> 

</body> 
</html>