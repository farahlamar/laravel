@extends ("default")
@section('title',$title)

@section('content')
    <h1>{!! $title !!} </h1>
    <p>Salut tout le monde ! </p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed ut sapien ac lectus facilisis pulvinar. Vivamus interdum pretium lorem. Etiam lacus lorem, ornare eu, varius in, mattis id, sem. Duis aliquet interdum purus. Sed et lectus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed ut sapien ac lectus facilisis pulvinar. Vivamus interdum pretium lorem. Etiam lacus lorem, ornare eu, varius in, mattis id, sem. Duis aliquet interdum purus. Sed et lectus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed ut sapien ac lectus facilisis pulvinar. Vivamus interdum pretium lorem. Etiam lacus lorem, ornare eu, varius in, mattis id, sem. Duis aliquet interdum purus. Sed et lectus.</p>
    
    <ul>
        @forelse($numbers as $number)
        <li>{{ $number }}</li>
        @empty
        <li>Aucun chiffre</li>
        @endforelse
       
    </ul>
@endsection


@section('sidebar')

@parent
<h3> Apropos de farah </h3>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed ut sapien ac lectus facilisis pulvinar. Vivamus interdum pretium lorem. Etiam lacus lorem, ornare eu, varius in, mattis id, sem. Duis aliquet interdum purus. Sed et lectus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed ut sapien ac lectus facilisis pulvinar. Vivamus interdum pretium lorem. Etiam lacus lorem, ornare eu, varius in, mattis id, sem. Duis aliquet interdum purus. Sed et lectus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed ut sapien ac lectus facilisis pulvinar. Vivamus interdum pretium lorem. Etiam lacus lorem, ornare eu, varius in, mattis id, sem. Duis aliquet interdum purus. Sed et lectus.</p>
   
@endsection