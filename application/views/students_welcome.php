<head>
<title></title>
</head>
<body>
<h1>Welcome Students! </h1>
<table>
<thead>	
	<tr>
		<th>ID NO.</th>
		<th>LASTNAME</th>
		<th>FIRSTNAME</th>
		<th>MIDDLENAME</th>
		<th>SEX</th>
		<th>COURSE</th>
		<th>ACTION</th>
	</tr>
</thead>
<tbody>
<?php
$students = array();
$dummy = array('idno'=>'15-037-024','lastname'=>'Noda','firstname'=>'Giane',
			'middlename'=>'Chua','sex'=>'F','course'=>'BSIT'
				);
$students[] = $dummy;				
if( isset($students) ){
	foreach($students as $s){
		echo ' <tr>
					<td>'.$s['idno'].'</td>
					<td>'.$s['lastname'].'</td>
					<td>'.$s['firstname'].'</td>
					<td>'.$s['middlename'].'</td>
					<td>'.$s['sex'].'</td>
					<td>'.$s['course'].'</td>
					<td><a href="'.base_url('students/profile/').$s['idno'].'">View</a></td>
				</tr>	';
	}
} ?>
</table>
</body>
</html>
