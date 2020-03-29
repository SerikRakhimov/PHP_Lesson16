@extends('layouts.app')
<?php
$update = isset($order);
?>
<form action ="{{$update ? route('order.update',$order):route('order.store')}}" method="POST" class="card card-body mb-3">
    @csrf

    @if ($update)
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="info">Описание заявки<span class="text-danger">*</span></label>
        <input type="text"
               name="info"
               id="info"
               class="form-control @error('info') is-invalid @enderror"
               placeholder="Введите описание заявки"
               value="{{ old('info') ?? ($order->info ?? '') }}">
        @error('info')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="language">Языки перевода <span class="text-danger">*</span></label>
        <input type="text"
               name="language"
               id="language"
               class="form-control @error('language') is-invalid @enderror"
               placeholder="Введите языки перевода (например: анг-рус)"
               value="{{ old('language') ?? ($order->language ?? '') }}">
        @error('language')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <label for="sum">Стоимость заявки<span class="text-danger">*</span></label>
        <input type="number"
               step="0.01"
               name="sum"
               id="sum"
               class="form-control @error('sum') is-invalid @enderror"
               placeholder="Введите стоимость заявки"
               value="{{ old('sum') ?? ($order->sum ?? '') }}">
        @error('sum')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


    <div class="form-group">
        <label for="customer">Автор заявки<span class="text-danger">*</span></label>
        <input type="text"
               name="customer"
               id="customer"
               class="form-control @error('customer') is-invalid @enderror"
               placeholder="Введите ФИО автора заявки"
               value="{{ old('customer') ?? ($order->customer ?? '') }}">
        @error('customer')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


    <button>Сохранить</button>
</form>