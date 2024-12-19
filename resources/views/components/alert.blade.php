@if ($errors->any())
    <div class="mt-4 px-1">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>
    </div>
@endif
@if (session()->has('success'))
    <div class="mt-4 px-1">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
        </div>
    </div>
@endif
