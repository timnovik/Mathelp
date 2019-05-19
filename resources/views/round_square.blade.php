@extends('layouts.main')

@section('content')
<h1>Площадь круга</h1>

@if ($square != INF)
    <p>Ответ: <i>{{ $square }}</i></p>
@endif

<p>
    Точность: 3 знака после запятой. Работает только с целыми числами.<br>Пожалуйста, введите радиус в поле ниже
</p>

<form class="form-inline">
    @csrf
    <div class="form-group mx-sm-3 mb-2">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="number" class="form-control" id="inputPassword" name="radius" placeholder="Радиус">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Вычислить</button>
</form>
@endsection
