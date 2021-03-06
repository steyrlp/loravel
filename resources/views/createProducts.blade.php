@extends('templates.main')


@section('content')

	<h2>Add new Product</h2>
			
	{!! Form::open(['url' => 'products','files'=>true]) !!}
		<fielset>
			{!! Form::label('name', 'Product name');!!}
			{!! Form::text('name') !!}
			{!! $errors->first('name','<p class="error">:message<p>')!!}

			{!! Form::label('type_id', 'Product type') !!}
			{!! Form::select('type_id',\App\Models\Type::lists("name","id")) !!}

			{!! Form::label('description', 'Description');!!}
			{!! Form::textarea('description') !!}
			{!! $errors->first('description','<p class="error">:message<p>')!!}

			{!! Form::label('price', 'Price');!!}
			{!! Form::text('price') !!}
			{!! $errors->first('price','<p class="error">:message<p>')!!}

			{!! Form::label('photo', 'Photo') !!}
			{!! Form::file('photo') !!}

			<input type="submit" value="Create product">
		</fielset>
	{!! Form::close() !!}
	
@stop			