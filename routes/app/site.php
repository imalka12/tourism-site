<?php

use Illuminate\Http\Request;

/**
 * ------------------------------------------------------
 * Site Routes File
 * ------------------------------------------------------
 *
 * This file contains the routes of the website front-end
 *
 * ------------------------------------------------------
 */

Route::get('/', 'Web\HomeController@showHomePage')->name('site.home');

# tours
Route::get('/holiday-destination/{destination}', 'Web\HolidayDestinationController@showHolidayDestinationPage')->name('site.holiday-destinations');
Route::get('/city/{city}', 'Web\CityController@showCityPage')->name('site.city');
Route::get('/activity/{activity}', 'Web\ActivityController@showActivityPage')->name('site.activity');
Route::get('/city-activity/{activity}', 'Web\ActivityController@showCityActivityPage')->name('site.city-activity');
Route::get('/tour-package/{itinerarySlug}', 'Web\ItineraryController@showItineraryPage')->name('site.itinerary');

Route::get('/tours-by-month', 'Web\ItineraryController@showToursByMonthPage')->name('site.tours-by-month');
Route::get('/tours-by-month/{month}', 'Web\ItineraryController@showToursForSelectedMonth')->name('site.tours-for-month');
Route::get('/offers', 'Web\DiscountOfferController@showDiscountOffersPage')->name('site.offers');
Route::get('/tours/{type}', 'Web\ItineraryController@showToursByTypePage')->name('site.tours-by-type');
// Route::get('/maldives-tours', 'Web\ItineraryController@showMaldives')->name('site.tours-by-type');
Route::get('/maldives-tours', 'Web\ItineraryController@showMaldives')->name('site.maldives-tours');

#about
Route::get('/our-team', 'Web\AboutController@showOurTeamPage')->name('site.our-team');
Route::get('/testimonials', 'Web\AboutController@showTestimonialsPage')->name('site.testimonials');
Route::get('/about-us', 'Web\AboutController@showAboutUsPage')->name('site.about');
Route::get('/travel-guide', 'Web\AboutController@showTravelGuidePage')->name('site.travel-guide');
Route::get('/contact', 'Web\ContactController@showContactUsPage')->name('site.contact');
Route::get('/privacy-policy', 'Web\HomeController@showPrivacyPolicyPage')->name('site.privacy-policy');
Route::get('/useful-links', 'Web\AboutController@showUsefulLinksPage')->name('site.useful-links');
Route::get('/transport-options', 'Web\AboutController@showTransportOptionsPage')->name('site.transport-options');
Route::get('/hotels', 'Web\AboutController@showHotelsPage')->name('site.hotels');

# plan your tour/tailor-made
Route::get('/plan-your-tour', 'Web\TourPlannerController@showPlanYourTourPage')->name('site.tailor-made');
Route::post('/plan-your-tour', 'Web\TourPlannerController@processTailorPadeSubmission')->name('site.tailor-made-submit');

# blog
Route::get('/blog', 'Web\BlogController@showHomePage')->name('site.blog-home');
Route::get('/blog/{slug}', 'Web\BlogController@showPostPage')->name('site.blog-post');
Route::get('/blog/category/{category}', 'Web\BlogController@showPostsByCategoryPage')->name('site.blog-category-posts');
Route::get('/blog-search', 'Web\BlogController@displayPostsSearchResultsPage')->name('site.blog-search-posts');

# printable
Route::get('/holiday-destination-download/{destinationId}', 'Web\HolidayDestinationController@downloadPrintablePage')->name('site.holiday-destination-download');

# quick inquiry
# Route::post('/quick-inquiry-submission', 'Common\InquiryController@processQuickInquiry')->name('site.quick-inquiry-submission');

# attractions
Route::get('/attractions/{type}', 'Web\AttractionsController@showAttractionsByTypePage')->name('site.attraction-type');
Route::get('/attraction/{slug}', 'Web\AttractionsController@showAttractionPage')->name('site.attraction');


# contact us request
Route::post('/contact/submit', 'Web\ContactController@processContactRequest')->name('site.contact-submit');

# home tour packages search form submission
Route::get('/tour-search', 'Web\HomeController@showTourSearchPage')->name('site.search-tours');

# tour type pages
Route::get('/tour-types', 'Web\TourTypeController@index')->name('site.tour-types');

# sustainable tourism
Route::get('/sustainable-tourism', 'Web\SustainableTourismController@index')->name('site.sustainable-tourism');

# csr programs
Route::get('/csr-programs', 'Web\CsrProgramsController@index')->name('site.csr-programs');
