<?php

namespace App\Repositories;

use App\Repositories\Contracts\ActivityRepositoryInterface;
use App\Activity;
use App\City;
use App\CityActivity;

class ActivityRepository implements ActivityRepositoryInterface {

    /**
     * @inheritDoc
     */
    public function getActivityById($id) {
        Activity::find($id);
    }

    /**
     * @inheritDoc
     */
    public function getActivityBySlug(string $slug) {
        $activity = Activity::where('slug', $slug)->first();
        if (empty($activity)) {
            return null;
        }

        return $activity;
    }

    /**
     * @inheritDoc
     */
    public function getActivitiesListByCity($id) {
        $city = City::where('id', $id)->first();
        if (empty($city)) {
            return abort(404, 'City not found.');
        }

        return $city->activites;
    }

    /**
     * @inheritDoc
     */
    public function getActivityByCityActivitySlug(string $slug) {
        $cityActivity = CityActivity::where('slug', $slug)->first();
        if (empty($cityActivity)) {
            return null;
        }

        return $cityActivity->activity;
    }

    /**
     * @inheritDoc
     */
    public function getCityByCityActivitySlug(string $slug) {
        $cityActivity = CityActivity::where('slug', $slug)->first();
        if (empty($cityActivity)) {
            return null;
        }

        return $cityActivity->city;
    }

    /**
     * @inheritDoc
     */
    public function getCityActivitySlug(string $slug) {
        $cityActivity = CityActivity::where('slug', $slug)->first();
        if (empty($cityActivity)) {
            return null;
        }

        return $cityActivity;
    }
 
    /**
     * @inheritDoc
     */
    public function getActivityCities($activityId) {
        $cityActivities = CityActivity::where('activity_id', $activityId)->with('city')->get();
        if (count($cityActivities) == 0) {
            return null;
        }

        return $cityActivities;
    }

    /**
     * @inheritDoc
     */
    public function getActivitiesList() {
        $activities = Activity::all();
        return $activities;
    }

    /**
     * @inheritDoc
     */
    public function getCityActivitiesList() {
        $cityActivities = CityActivity::with(['activity', 'city'])->get();
        return $cityActivities;
    }

}
