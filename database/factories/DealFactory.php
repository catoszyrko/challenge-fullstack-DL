<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deal>
 */
class DealFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "internalName" => $this->faker->word(),
            "title" => $this->faker->word(),
            "metacriticLink" => $this->faker->url(),
            "dealID" => $this->faker->numerify('####'),
            "storeID" => $this->faker->numerify('####'),
            "gameID" => $this->faker->numerify('####'),
            "salePrice" => $this->faker->numerify('##'),
            "normalPrice" => $this->faker->numerify('##'),
            "isOnSale" => $this->faker->randomElement([true, false]),
            "savings" => "90.045023",
            "metacriticScore" => '0',
            "steamRatingText" => $this->faker->sentence(),
            "steamRatingPercent" => $this->faker->numerify('##'),
            "steamRatingCount" => $this->faker->numerify('##'),
            "steamAppID" => $this->faker->numerify('######'),
            "releaseDate" => 1611532800,
            "lastChange" => 1625531581,
            "dealRating" => $this->faker->numerify('#.#'),
            "thumb" => "https://cdn.cloudflare.steamstatic.com/steam/apps/289620/capsule_sm_120.jpg?t=1618414871"
        ];
    }
}
