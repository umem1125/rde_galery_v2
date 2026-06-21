<?php

use App\Models\Product;
use App\Models\Category;

it('can create a product with valid data', function () {
    $product = Product::factory()->create();

    expect($product->name)->toBeString()
        ->and($product->slug)->not->toBeNull() 
        ->and($product->category_id)->not->toBeNull()
        ->and($product->is_active)->toBeTrue();
});

it('product belongs to a category', function () {
    $category = Category::factory()->create();
    $product = Product::factory()->create(['category_id' => $category->id]);

    expect($product->category->id)->toBe($category->id);
});

it('inactive product can be created', function () {
    $product = Product::factory()->create(['is_active' => false]);

    expect($product->is_active)->toBeFalse();
});

it('product can have null price and stock', function () {
    $product = Product::factory()->create([
        'price' => null,
        'stock' => null,
    ]);

    expect($product->price)->toBeNull()
        ->and($product->stock)->toBeNull();
});