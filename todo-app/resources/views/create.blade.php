@extends('layout.master')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="{{ route('index') }}">Todo Uygulaması</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

@if(session('success'))
    <div class="alert alert-success mt-3">{{ session('success') }}</div>
@endif
<style>

    /* Breadcrumb */
   .breadcrumb {
    display: flex;
    justify-content: left;
    align-items: left;
    gap: 8px;
    margin-left: 379px;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 10px;

   }
</style>
<!-- Breadcrumb Ekleme -->
<nav aria-label="breadcrumb" class=" justify-content-left">
    <ol class="breadcrumb"> 
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Ana Sayfa</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ isset($todo) ? 'Todo Düzenleme' : 'Todo Ekleme' }}</li>
    </ol>
</nav>

<form action="{{ isset($todo) ? route('update', $todo->id) : route('store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-xl-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($todo) ? 'Todo Düzenleme Sayfası' : 'Todo Ekleme Sayfası' }}</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Todo Başlığı</label>
                        <input type="text" class="form-control" name="title" value="{{ isset($todo) ? $todo->title : '' }}" >
                        @error('title')
                        <div class="invalid-feedback d-block">
                        Başlık kısmı boş kalamaz.
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Todo Açıklaması</label>
                        <textarea class="form-control" name="description">{{ isset($todo) ? $todo->description : '' }}</textarea>
                        @error('description')
                        <div class="invalid-feedback d-block">
                        Açıklama kısmı boş kalamaz.
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Yapıldı Mı</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="completedSwitch" name="completed" value="1" {{ isset($todo) && $todo->completed ? 'checked' : '' }}>
                            <label class="form-check-label" for="completedSwitch"></label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ isset($todo) ? 'Güncelle' : 'Todo Ekle' }}</button>
                </div>
            </div>
            <div class="text-start mb-3 ms-3 mt-3">
                <a href="{{ route('index') }}" class="btn btn-success">Geri Dön</a> 
            </div>
        </div>
    </div>
</form>
@endsection
