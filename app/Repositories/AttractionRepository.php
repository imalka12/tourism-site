<?php

namespace App\Repositories;

use App\Repositories\Contracts\AttractionRepositoryInterface;
use App\AttractionType;
use App\Attraction;

class AttractionRepository implements AttractionRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function getAttractionTypesList()
    {
        return AttractionType::select('id', 'title', 'description', 'image', 'slug')->get();
    }

    /**
     * @inheritDoc
     */
    public function getAttractionTypeById($id) {
        return AttractionType::where('id', $id)->first();
    }

    /**
     * @inheritDoc
     */
    public function getAttractionTypeBySlug($slug) {
        return AttractionType::where('slug', $slug)->first();
    }

    /**
     * @inheritDoc
     */
    public function getAttractionsByAttractionTypeId($id)
    {
        return Attraction::where('attraction_type_id', $id)->get();
    }

    /**
     * @inheritDoc
     */
    public function getAttractionById($id)
    {
        return Attraction::where('id', $id)->first();
    }

    /**
     * @inheritDoc
     */
    public function getAttractionBySlug($slug)
    {
        return Attraction::where('slug', $slug)->first();
    }

}
