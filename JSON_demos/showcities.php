<html>
   <head>
      <script src="jquery-3.5.1.min.js"></script>
	  <script>
	      $(document).ready(function() {
		     $("a").click(function() {
			    var url = "getcustomers.php";
				var cnm = $(this).text();
				//alert(cnm);
				$.post(url,{"cnm":cnm},function(data,status){
				   if(status == "success");
				   {
					   var cs= JSON.parse(data);
					   str = "<table border=1>";
					   for(i=0;i<cs.length;i++)
					   {
                          str+="<tr>";	
                            str+="<td>"+cs[i].cid+"</td>";
							str+="<td>"+cs[i].add1+"</td>";
							str+="<td>"+cs[i].add2+"</td>";
							str+="<td>"+cs[i].deals+"</td>";
                          str+="</tr>";							  
					   }
					   str += "</table>";
					   alert(str);
					   $("#"+cnm).html(str);
				   }
				   
				});
			 });
		  });
	  </script>
   </head>
   
   <body>
       <?php
	     
			       $con=mysqli_connect("localhost","root","","test");
			       $result=mysqli_query($con,"select distinct city from customers");
				   
			       while($row= mysqli_fetch_assoc($result))
				   {
				      $cnm=$row["city"];
					  echo("<a href='#'>$cnm</a>");
					  echo("<div id='$cnm'></div>");
			       }
	    ?>
	   
   </body>
</html>