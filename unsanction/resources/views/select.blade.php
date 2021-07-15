<!DOCTPE html>
<html>
<head>
<title>View  Sanctioned Customer  List</title>
</head>
<body>
<table>
<tr>
<td>First Name</td>
</tr>
@foreach ($sanction as $sanction)
<tr>
<td>{{ $sanction->CUSTOMER_NAME1 }}</td>
<!-- <td>{{ $user->last_name }}</td> -->
<!-- <td>{{ $user->city_name }}</td> -->
<!-- <td>{{ $user->email }}</td> -->
</tr>
@endforeach
</table>
</body>
</html>