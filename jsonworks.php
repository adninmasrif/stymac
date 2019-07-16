<!DOCTYPE html>
<html>
<head>
	<title>Json WOrks</title>

	<script type="text/javascript">
		var text = '{ "employees" : [' +
'{ "firstName":"John" , "lastName":"Doe" },' +
'{ "firstName":"Anna" , "lastName":"Smith" },' +
'{ "firstName":"Peter" , "lastName":"Jones" } ]}'; 

		var obj = JSON.parse(text); 

	</script>
</head>
<body>
	 <p id="demo"></p>

<script>
document.getElementById("demo").innerHTML =
obj.employees[1].firstName + " " + obj.employees[1].lastName;
</script> 

</body>
</html>