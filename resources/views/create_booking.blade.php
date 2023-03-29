{{ Aire::open()
  ->route('create-booking') }}



{{ Aire::select(\App\Models\CinemaLocation::listify())
  ->id('cinema_location')}}

{{ Aire::select(\App\Models\Theatre::listify())
  ->id('theatre')}}

{{ Aire::select(\App\Models\Film::listify())
  ->id('film')}}
