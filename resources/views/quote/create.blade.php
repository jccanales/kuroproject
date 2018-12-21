@extends('layouts.app')

@section('content')

<div class="col-md-6 mx-auto">


    {!! Form::open(['action' => 'QuotesController@store']) !!}


    <div class="form-group">
        {{ Form::label('urlLabel', 'URL', ['class' => 'control-label']) }}
        {{ Form::text('urlToSave', $data->urlToSave, ['class' => 'form-control', 'placeholder' => 'http://example.com'])}}
    </div>

    <div class="form-group">
        {{ Form::label('quoteLabel', 'Quote', ['class' => 'control-label']) }}
        {{ Form::text('textToSave', $data->textToSave, ['class' => 'form-control', 'placeholder' => 'Lorem Ipsum'])}}
    </div>

    {{ Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    
    {!! Form::close() !!}

</div>

@endsection
