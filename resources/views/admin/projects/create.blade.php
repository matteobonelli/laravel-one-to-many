@extends('layouts.app')
@section('content')
    <section class="container">
        <h1 class="my-3">Crea Progetto</h1>
        <form action="{{route('admin.projects.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    required maxlength="200" minlength="3" value="{{old('title')}}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                      cols="30" rows="10">{{old('description')}}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex mb-3">
                <div class="me-3">
                    <img src="https://placehold.co/600x400" id="uploadPreview" width="100" alt="preview">
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value={{old('image')}}
                        >
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
            </div>

            <div class="mb-3">
                <label for="creation_date">Data creazione</label>
                <input type="date" class="form-control @error('creation_date') is-invalid @enderror" name="creation_date" id="creation_date" value={{old('creation_date')}}
                    >
                @error('creation_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection