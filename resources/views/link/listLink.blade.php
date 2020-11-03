@extends('../layout')


@section('content')
<h1>Bienvenue sur la page Link List oh oh </h1>

<p>
  
    Bonjour  , vous êtes italien
    
<p>
    <a href="{{ URL::route('addLink') }}">Link To add Route</a>   
</p>    
</p>
    
@endsection