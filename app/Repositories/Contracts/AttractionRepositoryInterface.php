<?php

namespace App\Repositories\Contracts;

interface AttractionRepositoryInterface
{

    /**
     * Get attraction types list
     * 
     * @return Collection<AttractionType> $attractionTypes
     */
    public function getAttractionTypesList();

    /**
     * Get attraction type by id
     * 
     * @return AttractionType $attractionType
     */
    public function getAttractionTypeById($id);

    /**
     * Get attraction type by slug
     * 
     * @return AttractionType $attractionType
     */
    public function getAttractionTypeBySlug($slug);

    /**
     * Get attractions by attraction type id
     * 
     * @param string|int $id
     * 
     * @return Collection<Attraction> $attractions
     */
    public function getAttractionsByAttractionTypeId($id);

    /**
     * Get attraction by id
     * 
     * @param string|int $id
     * Id value of the Attraction
     * 
     * @return Attraction $attraction
     */
    public function getAttractionById($id);

    /**
     * Get attraction by slug
     * 
     * @param string $slug
     * Slug value of the Attraction
     * 
     * @return Attraction $attraction
     */
    public function getAttractionBySlug($slug);
}
