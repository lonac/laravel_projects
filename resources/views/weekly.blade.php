	@extends('masterchurch')
	@section('title','weekly timetable')
	<!--TimeTable creation-->
	@section('content')
	<div class="container col-md-6 col-md-offset-3">
    <div class="well well bs-component">
	<div class="table-responsive">
		<table class="table">
			<caption> <p><h4>MyChurch Weekly  TimeTable</h4></p> </caption>
				<thead>
					<tr>
						<th>DAY</th>
						<th>START TIME</th>
						<th>AM/PM</th>
						<th>END TIME</th>
						<th>AM/PM</th>
						<th> SESSION/SERVICE</th>
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<td>MONDAY</td>
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<input type="text" maxlegth="100" placeholder="what's all about" name="mondSession" class="form-control">
						</td>
						
					</tr>
					
					<tr class="success">
						<td>TUESDAY</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<input type="text" maxlegth="100" placeholder="what's all about" name="mondSession" class="form-control">
						</td>
						
					</tr>
					
					<tr>
						<td>WEDNESDAY</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<input type="text" maxlegth="100" placeholder="what's all about" name="mondSession" class="form-control">
						</td>
						
					</tr>
					
					<tr class="danger">
						<td>THURSDAY</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<input type="text" maxlegth="100" placeholder="what's all about" name="mondSession" class="form-control">
						</td>
						
					</tr>
					
					<tr >
						<td>FRIDAY</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<input type="text" maxlegth="100" placeholder="what's all about" name="mondSession" class="form-control">
						</td>
						
					</tr>
					
					<tr class="warning">
						<td>SATURDAY</td>
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<input type="text" maxlegth="100" placeholder="what's all about" name="mondSession" class="form-control">
						</td>
						
					</tr>
						<tr class="warning">
						<td></td>
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<input type="text" maxlegth="100" placeholder="what's all about" name="mondSession" class="form-control">
						</td>
						
					</tr>
					
					<tr class="success">
						<td>SUNDAY</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<input type="text" maxlegth="100" placeholder="what's all about" name="mondSession" class="form-control">
						</td>
						
					</tr>
					<tr class="success">
						<td></td>
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>1<option>2<option>3<option>4<option>5<option>6<option>7<option>8<option>9<option>10<option>11<option>12
							</select>
						</td>
						
						<td>
							<select class="form-control">
								<option><option>AM<option>PM</option></option></option>
							</select>
						</td>
						
						<td>
							<input type="text" maxlegth="100" placeholder="what's all about" name="mondSession" class="form-control">
						</td>
					</tr>

				</tbody>
	
		</table>
	</div>
	</div>
	</div>
@endsection