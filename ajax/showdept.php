<html>
   <head>
      <script>
	    function makeRequest(did)
		{
	        ajax = createAjaxObject();  
			divid = did+"emps";
			
			if(ajax)
			alert("created");
		
			alert(did);
			alert(divid);
			ajax.open("GET","getemps.php?dept=" + did,true);
			
			ajax.send("");
			
			ajax.onreadystatechange = updatePage; //func pointer
	    }
	  
	     function updatePage() {
            if (ajax.readyState == 4) {
                alert(ajax.responseText);
                //document.write(ajax.responseText);
                document.getElementById(divid).innerHTML = ajax.responseText;
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
     <?php
	 
        $con=mysqli_connect("localhost","root","","test");
	    $result=mysqli_query($con,"select * from dept");
	       while($row= mysqli_fetch_assoc($result))
		    {
	   		 $did= $row["deptno"];
    		  $dnm= $row["dname"];
			  echo("<a href='#' onclick='makeRequest(this.id)' id='$did'>$dnm</a> <br/>");
 			  $divid= $did."emps";
			  echo("<div id='$divid'>emps..</div>");
			}
     ?>
   </body>
</html>