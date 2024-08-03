<?php 

namespace App\Repositories\Contracts;

interface BlogRepositoryInterface {

    /**
     * Get posts list - paginated
     * 
     * @param int $perPage
     * Posts per page
     * 
     * @return $posts
     */
    public function getPosts($perPage = 3);

    /** 
     * Get post by slug
     * 
     * Get post identified by the URL slug
     * 
     * @param string $slug
     * The URL slug value of the post entry
     * 
     * @return App\Post $post
     */
    public function getPostBySlug($slug);

    /** 
     * Get post by id
     * 
     * Get post identified by the id
     * 
     * @param string|int $id
     * ID of the post entry
     * 
     * @return App\Post $post
     */
    public function getPostById($id);

    /**
     * Get categories
     * 
     * Get the list of category entries
     * 
     * @return Collection<App\Category> $categories
     */
    public function getCategories();

    /**
     * Get posts by category slug
     * 
     * Get the list of posts belong to the category identified the slug value
     * 
     * @param string $slug
     * Slug value of the category entry
     * 
     * @param int $perPage
     * No. of posts per page
     * 
     * @return Collection<App\Post> $posts
     * A collection of Posts
     */
    public function getPostsByCategorySlug($slug, $perPage = 3);

    /**
     * Get posts by category id
     *
     * Get the list of posts belong to the category identified the id
     *
     * @param string|int $id
     * Id value of the category entry
     *
     * @param int $perPage
     * No. of posts per page
     *
     * @return Collection<App\Post> $posts
     * A collection of Posts
     */
    public function getPostsByCategoryId($id, $perPage = 3);

    /** 
     * Not implemented yet
     */
    public function getPostsByMonth($month, $perPage = 3);

    /**
     * Get category by id
     * 
     * @param string|int $id
     * Id of the Category
     * 
     * @return App\Category $category
     */
    public function getCategoryById($id);
    
    /**
     * Get category by slug
     * 
     * @param string $slug
     * Slug value of te category
     * 
     * @return App\Category $category
     */
    public function getCategoryBySlug($slug);

    /**
     * Search posts
     * 
     * @param string $saerchText
     * Search words
     * 
     * @param int $perPage
     * Posts per page
     * 
     * @return Collection<App\Post> $posts
     */
    public function searchPosts($searchText, $perPage = 3);

    /** 
     * Get all blog posts
     * 
     * Get all blog posts as an unpaginated list
     * 
     * @return Collection<App\Post> $posts
     */
    public function getAllBlogPosts();

}