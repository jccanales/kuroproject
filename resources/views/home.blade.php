@extends('layouts.app')


@section('content')


<div class="container">

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Saved Quotes</h1>
            <p class="lead">
                Aqui puedes ver los links que guardaste, asi como crear nuevos.
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="{{action('QuotesController@create')}}">New</a>
            </p>
            <div class="row py-2">
                <div class="col-sm-4">
                    <input type="search" placeholder="Buscar..." name="search" class="form-control searchbox-input"
                        required="">
                </div>
            </div>
        </div>
    </div>



    <div class="row justify-content-center">

        @if(!empty($quotes))

        <div class="card-columns col-md-12">

            @foreach ($quotes as $quote)

            @include('quote', $quote)


            @endforeach

        </div>

        @else
        Save something here!
        @endif
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.searchbox-input').on('keyup', function () {

            $('.card').removeClass('d-none');
            var filter = $(this).val(); // get the value of the input, which we filter on
            console.log(filter);
            $('.container').find(".card-title:not(:contains(" + filter + "))").parent().parent().addClass('d-none');
        });
    });

</script>


@endsection
