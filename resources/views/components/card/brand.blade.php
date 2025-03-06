@props(['brand'])
<div class="card" style="width: 100%;">
    <img height="230" src="{{ url ( 'storage', $brand->image) }}" class="card-img-top" alt="{{ $brand->name }}" style="object-fit: cover; object-position: center;">
    <div class="card-body">
        <h5 class="card-title">{{ $brand->name }}</h5>
        <a href="{{ route('brand.showOrBrand', $brand->id) }}" class="btn btn-primary">{{ __('Перейти к продуктам') }}</a>
    </div>
</div>
