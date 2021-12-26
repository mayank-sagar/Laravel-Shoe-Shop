<?php
namespace App\Services;
use App\Models\Category;

class CategoryService {

    function getCategoryShoes($id,$isPaginate=true) {
        $category = Category::find($id);
        if($category) {
            if(!$isPaginate) {
                return $category->products;
            }
            return $category->products()->orderBy('created_at','desc')->paginate();
        }
        return [];
    }

    function getLatestCategoryShoes($id,$limit) {
        $category = Category::find($id);
        if($category) {
            return $category->products()->orderBy('created_at','desc')->limit($limit)->get();
        }
        return [];
    }

}