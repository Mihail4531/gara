@props(['product'])

<div class="card" style="width: 18rem;">
    <img height="230" src="{{ url ('storage', $product->image) }}" class="card-img-top" alt="{{ $product->name }}"
        style="object-fit: cover; object-position: center;">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Вес товара: {{ $product->weight }} гр.</li>
        <li class="list-group-item">Цвет товара: {{ $product->color }}</li>
        <li class="list-group-item">Материал: {{ $product->material }}</li>
        <li class="list-group-item">Бренд: {{ $product->brand->name }}</li>
        <li class="list-group-item">Цена: {{$product->prise}}₽</li>
    </ul>
</div>
