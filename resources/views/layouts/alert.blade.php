
@if ($errors->any())
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    <strong>Error!</strong> 
        @foreach ($errors->all() as $error)
        {{ $error }} <br>
        @endforeach
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
@endif

@if(session('success'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show mt-4">
    <strong>Success!</strong> 
    {{ session()->get('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif

@if(session('error'))
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
        <strong>Error!</strong> 
        {{ session()->get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
@endif