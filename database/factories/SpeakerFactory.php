<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Speaker>
 */
class SpeakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'bio' => $this->faker->paragraph(),
            'photo' => $this->faker->imageUrl(),
            'twitter' => $this->faker->optional()->userName(),
            'linkedin' => $this->faker->optional()->userName(),
            'github' => $this->faker->optional()->userName(),
            'country' => $this->faker->optional()->countryCode(),
            'city' => $this->faker->optional()->city(),
            'event_id' => Event::pluck('id')->random(),
        ];
    }
}
