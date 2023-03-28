{{ Aire::open()
  ->route('create-booking') }}



{{ Aire::input('given_name', 'First/Given Name')
  ->id('given_name')
  ->autoComplete('off')}}

{{ Aire::input('family_name', 'Last/Family Name')
  ->id('family_name')
  ->autoComplete('off') }}
