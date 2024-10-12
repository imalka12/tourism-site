<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\ActivityController;
use App\Http\Controllers\Web\AttractionsController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\CityController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\CsrProgramsController;
use App\Http\Controllers\Web\DiscountOfferController;
use App\Http\Controllers\Web\HolidayDestinationController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ItineraryController;
use App\Http\Controllers\Web\SustainableTourismController;
use App\Http\Controllers\Web\TourPlannerController;
use App\Http\Controllers\Web\TourTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'showHomePage'])->name('site.home');

# tours
Route::get('/holiday-destination/{destination}', [HolidayDestinationController::class, 'showHolidayDestinationPage'])->name('site.holiday-destinations');
Route::get('/city/{city}', [CityController::class, 'showCityPage'])->name('site.city');
Route::get('/activity/{activity}', [ActivityController::class, 'showActivityPage'])->name('site.activity');
Route::get('/city-activity/{activity}', [ActivityController::class, 'showCityActivityPage'])->name('site.city-activity');
Route::get('/tour-package/{itinerarySlug}', [ItineraryController::class, 'showItineraryPage'])->name('site.itinerary');

Route::get('/tours-by-month', [ItineraryController::class, 'showToursByMonthPage'])->name('site.tours-by-month');
Route::get('/tours-by-month/{month}', [ItineraryController::class, 'showToursForSelectedMonth'])->name('site.tours-for-month');
Route::get('/offers', [DiscountOfferController::class, 'showDiscountOffersPage'])->name('site.offers');
Route::get('/tours/{type}', [ItineraryController::class, 'showToursByTypePage'])->name('site.tours-by-type');
// Route::get('/maldives-tours', [ItineraryController::class],'showMaldives')->name('site.tours-by-type');
Route::get('/maldives-tours', [ItineraryController::class, 'showMaldives'])->name('site.maldives-tours');

#about
Route::get('/our-team', [AboutController::class, 'showOurTeamPage'])->name('site.our-team');
Route::get('/testimonials', [AboutController::class, 'showTestimonialsPage'])->name('site.testimonials');
Route::get('/about-us', [AboutController::class, 'showAboutUsPage'])->name('site.about');
Route::get('/travel-guide', [AboutController::class, 'showTravelGuidePage'])->name('site.travel-guide');
Route::get('/contact', [ContactController::class, 'showContactUsPage'])->name('site.contact');
Route::get('/privacy-policy', [HomeController::class, 'showPrivacyPolicyPage'])->name('site.privacy-policy');
Route::get('/useful-links', [AboutController::class, 'showUsefulLinksPage'])->name('site.useful-links');
Route::get('/transport-options', [AboutController::class, 'showTransportOptionsPage'])->name('site.transport-options');
Route::get('/hotels', [AboutController::class, 'showHotelsPage'])->name('site.hotels');

# plan your tour/tailor-made
Route::get('/plan-your-tour', [TourPlannerController::class, 'showPlanYourTourPage'])->name('site.tailor-made');
Route::post('/plan-your-tour', [TourPlannerController::class, 'processTailorPadeSubmission'])->name('site.tailor-made-submit');

# blog
Route::get('/blog', [BlogController::class, 'showHomePage'])->name('site.blog-home');
Route::get('/blog/{slug}', [BlogController::class, 'showPostPage'])->name('site.blog-post');
Route::get('/blog/category/{category}', [BlogController::class, 'showPostsByCategoryPage'])->name('site.blog-category-posts');
Route::get('/blog-search', [BlogController::class, 'displayPostsSearchResultsPage'])->name('site.blog-search-posts');

# printable
Route::get('/holiday-destination-download/{destinationId}', [HolidayDestinationController::class, 'downloadPrintablePage'])->name('site.holiday-destination-download');

# quick inquiry
# Route::post('/quick-inquiry-submission', 'Common\InquiryController@processQuickInquiry')->name('site.quick-inquiry-submission');

# attractions
Route::get('/attractions/{type}', [AttractionsController::class, 'showAttractionsByTypePage'])->name('site.attraction-type');
Route::get('/attraction/{slug}', [AttractionsController::class, 'showAttractionPage'])->name('site.attraction');


# contact us request
Route::post('/contact/submit', [ContactController::class, 'processContactRequest'])->name('site.contact-submit');

# home tour packages search form submission
Route::get('/tour-search', [HomeController::class, 'showTourSearchPage'])->name('site.search-tours');

# tour type pages
Route::get('/tour-types', [TourTypeController::class, 'index'])->name('site.tour-types');

# sustainable tourism
Route::get('/sustainable-tourism', [SustainableTourismController::class, 'index'])->name('site.sustainable-tourism');

# csr programs
Route::get('/csr-programs', [CsrProgramsController::class, 'index'])->name('site.csr-programs');

Route::get('/openai/test', [AboutController::class, 'testoai']);
Route::get('/openai/models', [AboutController::class, 'models']);
