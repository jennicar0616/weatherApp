@extends('tourist/layout')
@section('content')
<div id="weatherDetails"></div>

@endsection

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function(){
        var baseUrl = "{{ url('/tourist/weather') }}";
        $(document).on('click', 'a.city', function(e){
            e.preventDefault();
            var cityId = $(this).attr('id');
            $.get(baseUrl + '/' + cityId).then(function(data){
                $('#weatherDetails').html(data);
            }, function(){

            });
        })
    });
</script>
