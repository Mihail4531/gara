<x-product>
    <x-container>
    <x-slot:title>{{ $titlePage }}</x-slot:title>
    <h1 style="text-align: center">Продукты</h1>
    <livewire:product-list :products='$products'/>
</x-container>
</x-product>
