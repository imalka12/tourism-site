<?php

namespace App\Repositories;

use App\Category;
use App\Post;
use App\Repositories\Contracts\BlogRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getPosts($perPage = 3)
    {
        $posts = Post::paginate(3);
        $posts->withPath('blog');
        return $posts;
    }

    /**
     * @inheritDoc
     */
    public function getPostBySlug($slug)
    {
        return Post::where('slug', \trim($slug))->first();
    }

    /**
     * @inheritDoc
     */
    public function getPostById($id)
    {
        return Post::where('id', $id)->first();
    }

/**
 * @inheritDoc
 */
    public function getCategories()
    {
        return Category::all();
    }

    /**
     * @inheritDoc
     */
    public function getPostsByCategorySlug($slug, $perPage = 3)
    {
        $category = Category::where('slug', $slug)->first();
        if (!$category) {
            return null;
        }

        $posts = Post::where('category_id', $category->id)->paginate();
        $posts->withPath('blog/category/' . $category->slug);
        return $posts;
    }

    /**
     * @inheritDoc
     */
    public function getPostsByCategoryId($id, $perPage = 3)
    {
        $posts = Post::where('category_id', $category->id)->paginate();
        $posts->withPath('blog/category/' . $category->slug);
        return $posts;
    }

    /**
     * @inheritDoc
     */
    public function getPostsByMonth($month, $perPage = 3)
    {
        // unimplemented
    }

    /**
     * @inheritDoc
     */
    public function getCategoryById($id)
    {
        return Category::where('id', $id)->first();
    }

    /**
     * @inheritDoc
     */
    public function getCategoryBySlug($slug)
    {
        return Category::where('slug', $slug)->first();
    }

    /**
     * @inheritDoc
     */
    public function searchPosts($searchWords, $perPage = 3)
    {
        $results = Post::whereRaw('MATCH (title, body) AGAINST (?)', $searchWords)->paginate($perPage);
        $results->withPath('blog-search/?search_text=' . implode(' ', $searchWords));

        return $results;
    }

    /**
     * @inheritDoc
     */
    public function getAllBlogPosts() {
        return Post::all();
    }

}
