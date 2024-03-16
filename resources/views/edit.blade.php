@extends('layouts.layout')

@section('content')
  <div class="container mt-5">
    <form action="{{ route('recipes.update', $recipe->id) }}" method="post" class="card">
      @csrf
      @method('put')
      <div class="card-body">
        <h1>EDIT RESEP</h1>
        <div class="mb-3">
          <label for="title" class="form-label">Recipe Title</label>
          <input type="text" value="{{ $recipe->title }}" class="form-control" id="title"
            placeholder="Masukkan Nama Resep" name="title">
        </div>
        <div class="mb-3">
          <label for="method" class="form-label">Method</label>
          <textarea class="form-control" id="method" rows="3" name="method">{{ $recipe->method }}</textarea>
        </div>
        <div class="mb-3">
          <label for="ingredients" class="form-label">Ingredients</label>
          <textarea class="form-control" id="ingredients" rows="3" name="ingredients">{{ $recipe->ingredients }}</textarea>
        </div>
        <div class="mb-3">
          <label for="categories" class="form-label">Categories</label>
          <select class="form-select" id="categories" aria-label="Default select example" name="categories">
            <option selected>Pilih Kategori</option>
            <option value="pasta" {{ $recipe->categories == 'pasta' ? 'selected' : '' }}>Pasta</option>
            <option value="dessert" {{ $recipe->categories == 'dessert' ? 'selected' : '' }}>Dessert</option>
            <option value="salad" {{ $recipe->categories == 'salad' ? 'selected' : '' }}>Salad</option>
          </select>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-success">Simpan Resep</button>
        </div>
      </div>
    </form>
  </div>
@endsection
