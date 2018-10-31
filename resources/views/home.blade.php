@include('home.service')

<div class="album py-5 bg-light">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('home.tournaments')

    @include('home.updates')

    @include('home.pricing')

</div>