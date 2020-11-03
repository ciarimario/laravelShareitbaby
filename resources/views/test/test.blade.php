@extends('../layout')


@section('content')
<h1>Bienvenue sur la page Test</h1>

<p>
    @if($name == 'mario')
    Bonjour {{ $name }} , vous êtes italien
    @else
    Bonjour, vous n'êtes pas Mario mais {{ $name }} !
    @endif
</p>
    
@endsection