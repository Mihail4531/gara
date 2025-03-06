<x-brand>
    <div class="flex flex-col">
        <x-slot:title>{{ $titlePage }}</x-slot:title>
        <h1>Это страница записей определенного бренда</h1>
        <livewire:product-list :products="$products" />
        <a href="{{route('product.index')}}" class="link">Все продукты</a>
    </div>
</x-brand>
