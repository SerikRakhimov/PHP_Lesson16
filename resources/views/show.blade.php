@extends('layouts.app')
<div class="mb-3 btn-group btn-group-sm">

        <a class="btn btn-info" href="{{ route('order.edit', $order) }}">Изменить</a>

        <a class="btn btn-danger delete-link" href="{{route('order.delete', $order)}}" class ="delete-link" data-target="delete-form">
            Удалить
            <form action="{{route('order.delete', $order)}}" method= "POST" style = "display:none;" id = 'delete-form'>
                @csrf
                @method('DELETE');
            </form>
        </a>
    <a class="btn btn-primary" href="{{ route('order.index', $order) }}">Список заявок</a>
</div>

<h1>{{$order->info}}</h1>
<p>{{$order->language}}</p>
<p>{{$order->sum}}</p>
<p>{{$order->customer}}</p>
<script>
    let link = document.querySelector('.delete-link');
    let target = link.dataset.target;

    link.addEventListener('click', function (event) {
        event.preventDefault();
        document.getElementById(target).submit();

    })

</script>