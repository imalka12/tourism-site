<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\BlogRepository;

class BlogController extends Controller
{
    private $blogRepository;

    public function __construct(BlogRepository $blogRepository) {
        $this->blogRepository = $blogRepository;
    }

    public function showHomePage(Request $request)
    {
        $pageHeading = 'Blog';
        $pageSubHeading = 'Explore Thaprobana';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Blog', 'link' => ''],
        ];

        $categories = $this->blogRepository->getCategories();
        $blogPosts = $this->blogRepository->getPosts();

        return view('pages.blog-home', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'blogPosts', 'categories'));
    }

    public function showPostPage(Request $request, $slug)
    {
        $categories = $this->blogRepository->getCategories();
        $post = $this->blogRepository->getPostBySlug($slug);

        $pageHeading = 'Blog';
        $pageSubHeading = 'Explore Thaprobana';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Blog', 'link' => route('site.blog-home')],
            ['title' => $post->title, 'link' => ''],
        ];
        return view('pages.blog-post', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'categories', 'post'));
    }

    public function showPostsByCategoryPage(Request $request, $category)
    {
        $pageHeading = 'Blog';
        $pageSubHeading = 'Explore Thaprobana';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Blog', 'link' => ''],
        ];

        $category = $this->blogRepository->getCategoryBySlug($category);
        $categories = $this->blogRepository->getCategories();
        $blogPosts = $this->blogRepository->getPostsByCategorySlug($category->slug);

        return view('pages.blog-category', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'blogPosts', 'categories', 'category'));
    }

    public function showPostsByMonthPage()
    {
        
    }

    public function displayPostsSearchResultsPage(Request $request)
    {
        $search_text = $request->get('search_text');

        // separate search words
        $words = explode(' ', $search_text);

        $pageHeading = 'Blog';
        $pageSubHeading = 'Explore Thaprobana';
        $breadcrumbs = [
            ['title' => 'Home', 'link' => route('site.home')],
            ['title' => 'Blog', 'link' => route('site.blog-home')],
            ['title' => 'Search', 'link' => ''],
        ];

        $categories = $this->blogRepository->getCategories();
        $blogPosts = $this->blogRepository->searchPosts($words);

        return view('pages.blog-search-results', compact('pageHeading', 'pageSubHeading', 'breadcrumbs', 'blogPosts', 'categories', 'search_text'));


    }

}
