<div class="container-fluid text-center container-sm text-white mt-5">
    <div class="weather-country">{{ $temp->name }}</div>
    <div class="celsius-temparature">
        <small> min: {{ $temp->main->temp_min }} </small> |
        <small> max: {{ $temp->main->temp_max }} </small> |
        <small> humidity: {{ $temp->main->humidity }} </small>
    </div>
      <div class="weather-container">
        <div class="celsius">
          <strong class="celsius-digit">{{ $temp->main->temp }} °C</strong>
        </div>
        <div class="weather-condition">{{ $weather }} <i class="wi wi-night-alt-lightning"></i></div>
      </div>
</div>

<div class="container-fluid container-sm text-left text-white">
    <div class="city-info container-sm mt-4 p-4">
        @foreach ($venues as $key => $venue)
        <div class="venue-list">
            <p><strong>{{ $venue->name }}</strong></p>
            <span id="{{ $venue->id }}"> </span>

            @if($venue->location)
            <small class="venue" id="{{ $venue->id }}" >Location:
                {{ $venue->location->city }} ,
                {{ $venue->location->state }} ,
                {{ $venue->location->country }}
            </small>
            @endif
        </div>
        @endforeach
    </div>
</div>

