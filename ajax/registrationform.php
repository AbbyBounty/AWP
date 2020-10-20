<html>
    <head>
	  <script>
	     function makeRequest()
		 {
			 //1.create ajax object
			 ajax = createAjaxObject();
			 
			 ajax.onreadystatechange = updatePage;
			 /*if(ajax)
				 alert("created");*/
			 var sid= document.getElementById("state").value;
			 var url = "getcities.php?state="+sid;
			 
			 //2.Request initialization
			 alert(url);
			 ajax.open("GET",url,true);
			 //3.Sending request
			 ajax.send("");
			 //4.Checking response has come back
			 
		 }
		 
		 function updatePage()
		 {
			 alert(ajax.readyState);
			 if(ajax.readyState == 4)
			 {
				 alert(ajax.responseText);
				 document.getElementById("city").innerHTML = ajax.responseText;
			 }
		 }
		 
		 
		 function createAjaxObject()
		 {
			 try
			 {
				 var doc = new ActiveXObject("Microsoft.XMLHTTP");
				 return doc;
			 }
			 catch(e)
			 {
				 try
				 {
					 var doc = new XMLHttpRequest();
					 return doc;
				 }
				 catch(e)
				 {
					 alert("ajax not supported");
				 }
			 }
		 }
	  </script>
	</head>	
	
	<body>
	   <form>
	   Enter uid:<input type="text" name="uid" /> <br/>
	       Select state: <select name="state" id="state" onchange="makeRequest()">
		   
		       <?php
			       $con=mysqli_connect("localhost","root","","statecitydb");
			       $result=mysqli_query($con,"select * from state");
			       while($row= mysqli_fetch_assoc($result))
				   {
				      $sid= $row["stateid"];
					  $snm= $row["name"];
					  echo("<option value='$sid'>$snm</option>");
			       }
			   ?>
	         </select></br>
			 Select city: <select name="city" id="city">
			    </select> <br/>
				
					<input type="submit" value="Register" />
	   </form>
	</body>

</html>