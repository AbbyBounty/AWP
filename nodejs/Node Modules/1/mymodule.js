exports.isPrime = function(x){
     var flag = false;	
     for(var i=2; i<x; i++)
     {
	  if(x/i == 0)
	  {
	       flag = true;
	       break; 	  
	  }	
     }	
     if(flag == false)
	return true;
     else
	return false;	
};

exports.calFact = function(x){
     var f = 1;
     while(x > 0)
     {
	  f *= x;
	  x--;
     }		
     return f;		
};

exports.isPerfect = function(x){
     var sum = 0;
     var temp = x;	
     for(var i=1; i<=x; i++)
     {
	  if(x/i == 0)
	  {
	       sum+=i;
	  }	
     }	
     if(sum == x)
	return true;
     else
	return false;	
};
