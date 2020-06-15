@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@endif

@if (session()->has('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

@if (session()->has('unsuccess'))
<p class="alert alert-danger">{{ session('unsuccess') }}</p>
@endif

@if (session()->has('error'))
<p class="alert alert-danger">{{ session('error') }}</p>
@endif

@if (session()->has('message'))
<p class="alert alert-warning">{{ session('message') }}</p>
@endif