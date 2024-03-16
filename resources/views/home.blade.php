@extends('layouts.layout')

@section('content')
  <div class="container mt-5">
    <form action="{{ route('recipes.store') }}" method="post" class="card">
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

    <table class="table my-5 table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Recipe Title</th>
          <th scope="col">Method</th>
          <th scope="col">Ingredients</th>
          <th scope="col">Categories</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($recipes as $item)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->title }}</td>
            <td>{{ $item->method }}</td>
            <td>{{ $item->ingredients }}</td>
            <td>{{ $item->categories }}</td>
            <td>
              <a href="{{ route('recipes.edit', $item->id) }}" class="btn btn-warning">Edit</a>
              <a href="{{ route('recipes.destroy', $item->id) }}" class="btn btn-danger"
                data-confirm-delete="true">Delete</a>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection
