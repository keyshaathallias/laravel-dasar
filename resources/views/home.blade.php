@extends('layouts.layout')

@section('content')
  <div class="container mt-5">
    <form action="{{ route('store') }}" method="post" class="card">
        @csrf
      <div class="card-body">
        <h1>BELAJAR DASAR LARAVEL</h1>
        <div class="mb-3">
          <label for="title" class="form-label">Recipe Title</label>
          <input type="text" class="form-control" id="title" placeholder="Masukkan Nama Resep" name="title">
        </div>
        <div class="mb-3">
          <label for="method" class="form-label">Method</label>
          <textarea class="form-control" id="method" rows="3" name="method"></textarea>
        </div>
        <div class="mb-3">
          <label for="ingredients" class="form-label">Ingredients</label>
          <textarea class="form-control" id="ingredients" rows="3" name="ingredients"></textarea>
        </div>
        <div class="mb-3">
          <label for="categories" class="form-label">Categories</label>
          <select class="form-select" id="categories" aria-label="Default select example" name="categories">
            <option selected>Pilih Kategori</option>
            <option value="pasta">Pasta</option>
            <option value="dessert">Dessert</option>
            <option value="salad">Salad</option>
          </select>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-success">Simpan Resep</button>
        </div>
      </div>
    </form>
  </div>
@endsection
