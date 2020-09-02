@extends('layouts.front')

@section('content')

<h2>Submit your shop</h2>
<form action="{{route('reports.store') }}" method="post">
@csrf
<div class="form-group">
<label for="name">title</label>
<input type="text" name="particular" class="form-control" placeholder="">
</div>
<div class="form-group">
<label for="description">Description</label>
<input type="text" name="description" class="form-control" placeholder="">
</div>

<button type="submit" class="btm btn-primary">submit</button>
</form>
@endsection