@extends('layouts.app')

@section('content')
<head>
	<title>Only Ghosals'</title>

	<style>
		body {
			background-color: lightblue;
		}
	</style>
</head>

<body>
	<center>
		
		<h3>
			Upload RT-PCR Negative Test Report
			Or Two Dose Of Vaccine Certificate
		</h3>
		
		<h3>***Booking Only For Today***</h3>
		</br></br>

		<form method="POST" action="{{ route('input') }}">
            @csrf
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name"
						required /><br /><br />
					</td>
				</tr>
				<tr>
					<td>Total Number Of Customer:</td>
					<td><input type="text" name="number"
						required /><br /><br />
					</td>
				</tr>
				<tr>
					<td>Time (12 Hours Format):</td>
					<td><input type="text" name="time"
						required /><br /><br />
					</td>
				</tr>
				<tr>
					<td>
						Upload Certificates Or Test
						Reports(Merged Files):
					</td>
					<td><input type="file" id="myfile"
						name="file" required /><br /><br />
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"
						value="Submit" />
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
@endsection
