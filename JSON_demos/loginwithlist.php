<html>
   <head>
      <script src="jquery-3.5.1.min.js"></script>
      <script>
          $(document).ready(function() {
			  $("#uid").keyup(function() {
				 // alert($(this).val());
				 var key = $(this).val();
				 $.get("getuids.php?start="+key , function(data,status){
					 if(status == "success")
					 {
						 var obj = JSON.parse(data);
						 var uids = obj.uids;
						 str="";
						 alert(data);
						 for(i=0;i<uids.length;i++)
						 {
							 str+="<option>"+uids[i]+"</option>";
						 }
						 $("#names").html(str);
					 }
				 });
			  });
		  });
      </script>
   </head>
<body>
	   <form action="" method="get">
	        UID:<input type="text" name="uid" id="uid" list="names" /><br/>
			PWD:<input type="password" name="pwd" /><br/>
		   
           <input type="submit"  value="login" />		   
	   </form>
	   
	   <datalist id="names">
	   
	   </datalist>
</body>

</html>