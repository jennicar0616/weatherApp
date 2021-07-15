<div class="container-fluid text-center">
      <div class="weather-container text-white">
        <div class="weather-condition">{{ $weather }} <i class="wi wi-night-alt-lightning"></i></div>

        <div class="celsius">
          <strong class="celsius-digit">{{ $temp->main->temp }} °C</strong>
<!--             <small> min: {{ $temp->main->temp_min }} </small>
            <small> max: {{ $temp->main->temp_max }} </small>
            <small> humidity: {{ $temp->main->humidity }} </small> -->
        </div>
        <div class="weather-country">{{ $temp->name }}</div>
      </div>
<!--       <button type="button" class="btn btn-outline-warning mt-3">See Details</button> -->
</div>

<div class="container-fluid text-left">
    <div class="city-info container-md mt-4 p-4">
        @foreach ($venues as $key => $venue)
            <h4>{{ $venue->name }}</h4>
            <div id="{{ $venue->id }}"> </div>

            @if($venue->location)
            <p class="venue" id="{{ $venue->id }}" >Location:
                {{ $venue->location->city }} ,
                {{ $venue->location->state }} ,
                {{ $venue->location->country }}
            </p>
            @endif

        @endforeach
    </div>
</div>

<!-- <script type="text/javascript">
    $(document).ready(function(){
        var baseUrl = "{{ url('/tourist/venue') }}";
        $('.venue').each(function(){
            var venueId = $(this).attr('id');
            $.get(baseUrl + '/' + venueId).then(function(data){
                var img = document.createElement('img');
                img.src = data;
                document.getElementById(venueId).appendChild(img);
            }, function(res){

            });
        })
    });
</script> -->
