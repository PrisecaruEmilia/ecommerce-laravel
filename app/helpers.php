<?php

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function productImage($path)
{
    // return ($path->image != null) && file_exists('storage/'.$path->image) ? asset('storage/'.$path->image) : asset('img/image-not-found.jpg');

    return ($path != null) && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/image-not-found.jpg');
}

function getStock($quantity)
    {
        if($quantity > setting('site.stock_threshold')) {
            $inStock = '<p class="badge badge-success">In Stock</p>';
        } elseif($quantity < setting('site.stock_threshold') && $quantity > 0) {
            $inStock = '<p class="badge badge-warning">Low Stock</p>';
        } else {
            $inStock = '<p class="badge badge-danger">Not available</p>';
        }

        return $inStock;
    }
