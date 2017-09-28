@extends('layouts.master')

@section('content')

<div class="container col-xs-12">
	<div class="col-xs-4">
		{!! Form::label('l_trail','Trail',array('class'=>'col-xs-8 control-label')) !!}
		<tr id='filter_col5'>{!! Form::select('trailName', [''=>null,'Mount LamLam'=>'Mount LamLam','Sella Bay'=>'Sella Bay', 'Lost Pond'=>'Lost Pond'], null, array('required','class'=>'form-control col-xs-4 column_filter', 'id'=>'col6_filter', 'data-column'=>'6')) !!}</tr>
		{!! Form::label('l_scentificSearch','Search by Scientific Name',array('class'=>'col-xs-8 control-label')) !!}
		<tr id='filter_col0'>{!! Form::text('scientificSearch', null, array('required','class'=>'form-control col-xs-4 column_filter','placeholder'=>'Scientific Name', 'id'=>'col0_filter', 'data-column'=>'0')) !!}</tr>
		{!! Form::label('l_commonNameSearch','Search by Common Name',array('class'=>'col-xs-8 control-label')) !!}
		<tr id='filter_col1'>
		{!! Form::text('commonNameSearch', null, array('required','class'=>'form-control col-xs-2 column_filter','placeholder'=>'Common Name', 'id'=>'col1_filter', 'data-column'=>'1')) !!}	</tr>
	<div class="form-group col-xs-3">
		{!! Form::label('l_tepals','Tepals',array('class'=>'col-xs-3 control-label')) !!}
		<tr id='filter_col2'>{!! Form::select('hasTepals', [''=>null,'3'=>'3','4'=>'4', '5'=>'5'], null, array('required','class'=>'form-control col-xs-1 column_filter', 'id'=>'col2_filter', 'data-column'=>'2')) !!}</tr>
	</div>
	<div class="form-group col-xs-3">
		{!! Form::label('l_petalBase','PetBase',array('class'=>'col-xs-3 control-label')) !!}
		<tr id='filter_col3'>{!! Form::select('petalBase', [''=>null,'3'=>'3','4'=>'4', '5'=>'5'], null, array('required','class'=>'form-control col-xs-1 column_filter', 'id'=>'col3_filter', 'data-column'=>'3')) !!}</tr>
	</div> 
	<div class="form-group col-xs-3">
		{!! Form::label('l_colorOfPetals','Color',array('class'=>'col-xs-2 control-label')) !!}
		<tr id='filter_col4'>{!! Form::select('colorOfPetals', [''=>null, 'White'=>'White','Red'=>'Red','Blue'=>'Blue', 'Black'=>'Black'], null, array('required','class'=>'form-control col-xs-1 column_filter', 'id'=>'col4_filter', 'data-column'=>'4')) !!}</tr>
	</div> 		
	<div class="form-group col-xs-3">
		{!! Form::label('l_stamenBase','Stamen',array('class'=>'col-xs-2 control-label')) !!}
		<tr id='filter_col5'>{!! Form::select('stamenBase', [''=>null, '3'=>'3','4'=>'4','5'=>'5'], null, array('required','class'=>'form-control col-xs-1 column_filter', 'id'=>'col5_filter', 'data-column'=>'5')) !!}</tr>	
	</div> 	
	</div>
	<div class="col-xs-8">
		<div id="map">
		
		</div>
	</div>
	
</div>

<div class="container col-xs-12">
			<table id="selectedPlants" class="table table-striped">
	  
			<thead>
			  <tr>
			    <th>Scientific Name</th>
				<th>Common Name</th>
				<th>Tepals</th>
				<th>Petal Base</th>
				<th>Color of Petals</th>
				<th>Stamen Base</th>
				<th>Trail</th>
			  </tr>
			</thead>
			<tbody>
			@foreach($plants as $plant)
				@foreach($plant->trails as $trail)
			<tr>
				<td style="text-align:left">{{$plant->sciName}}</td> 
				<td style="text-align:left">{{$plant->comName}}</td> 	
				<td style="text-align:left">{{$plant->tepals}}</td>
				<td style="text-align:left">{{$plant->petBase}}</td> 	
				<td style="text-align:left">{{$plant->petalColor}}</td> 	
				<td style="text-align:left">{{$plant->stamen}}</td>
				<td style="text-align:left">{{$trail->trailName}}</td>
			</tr>
				@endforeach
			@endforeach
			</tbody>
		  </table>
		  
</div>

<script>
function filterColumn ( i ) {
    $('#selectedPlants').DataTable().column( i ).search(
        $('#col'+i+'_filter').val()
    ).draw();
}
$(document).ready(function(){
	$('#selectedPlants').DataTable();
	$('input.column_filter').on( 'keyup click', function () {
		console.log('type');
		console.log($(this).attr('data-column'))
		filterColumn( $(this).attr('data-column'));
	});		
	$('select.column_filter').on( 'keyup click', function () {
		console.log('type');
		console.log($(this).attr('data-column'))
		filterColumn( $(this).attr('data-column'));
	});		
});
</script>
@endsection