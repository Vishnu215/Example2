<!DOCTYPE HTML>
<html>
<body>
<script type="text/javascript">
var str = prompt("enter the input", "");
if(!(isNaN(str)))
{
	var num, sum=0,remainder;
	num=parseInt(str);
	while(num!=0)
	{
	remainder =num%10;
	sum=sum*10+remainder;
	num=parseInt(num/10);
	
	}
	alert("reverse of "+str+" is" +rev);
}
else
{
	str=str.toUpperCase();
	for(var i=0;i<str.length;i++)
	{
	var chr= str.charAt(i);
	if(chr=='A'|| chr=='E' || chr=='I' || chr=='O' || chr=='U')
	break;
	}
	if(i<str.length)
	alert("the position of the left most vowel is" +(i+1));
	else
	alert("no vowel found in the entered string");
}
</script>
</body>
</html>