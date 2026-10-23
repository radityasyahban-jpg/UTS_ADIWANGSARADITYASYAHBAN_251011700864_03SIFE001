<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shoe;

class ShoeSeeder extends Seeder
{
    public function run(): void
    {
        $shoes = [
            [
                'name' => 'Air Running Pro',
                'brand' => 'Nike',
                'price' => 850000,
                'size_range' => '39-44',
                'image' => 'AIR RUNNING PRO.jpg',
                'sport_type' => 'Running',
            ],
            [
                'name' => 'Speed Court',
                'brand' => 'Adidas',
                'price' => 750000,
                'size_range' => '38-43',
                'image' => 'ADIDAS SPEEDCOURT.jpg',
                'sport_type' => 'Training',
            ],
            [
                'name' => 'Street Sport',
                'brand' => 'Puma',
                'price' => 650000,
                'size_range' => '39-44',
                'image' => 'puma street sport.avif',
                'sport_type' => 'Lifestyle',
            ],
            [
                'name' => 'Revolution Run',
                'brand' => 'Nike',
                'price' => 799000,
                'size_range' => '39-44',
                'image' => 'revolution-run.jpg',
                'sport_type' => 'Running',
            ],
            [
                'name' => 'Ultraboost Active',
                'brand' => 'Adidas',
                'price' => 1250000,
                'size_range' => '39-44',
                'image' => 'ultraboost-active.jpg',
                'sport_type' => 'Running',
            ],
            [
                'name' => 'Puma Velocity',
                'brand' => 'Puma',
                'price' => 899000,
                'size_range' => '39-44',
                'image' => 'puma-velocity.jpg',
                'sport_type' => 'Running',
            ],
            [
                'name' => 'Court Vision',
                'brand' => 'Nike',
                'price' => 950000,
                'size_range' => '39-44',
                'image' => 'court-vision.jpg',
                'sport_type' => 'Basketball',
            ],
            [
                'name' => 'Adizero Sprint',
                'brand' => 'Adidas',
                'price' => 1100000,
                'size_range' => '39-44',
                'image' => 'adizero-sprint.jpg',
                'sport_type' => 'Running',
            ],
            [
                'name' => 'Puma Court Rider',
                'brand' => 'Puma',
                'price' => 875000,
                'size_range' => '39-44',
                'image' => 'puma-court-rider.jpg',
                'sport_type' => 'Basketball',
            ],
            [
                'name' => 'Flex Training',
                'brand' => 'Nike',
                'price' => 825000,
                'size_range' => '39-44',
                'image' => 'flex-training.jpg',
                'sport_type' => 'Training',
            ],
            [
                'name' => 'Runfalcon Sport',
                'brand' => 'Adidas',
                'price' => 699000,
                'size_range' => '38-44',
                'image' => 'runfalcon-sport.jpg',
                'sport_type' => 'Running',
            ],
            [
                'name' => 'Puma Flyer Runner',
                'brand' => 'Puma',
                'price' => 729000,
                'size_range' => '39-44',
                'image' => 'puma-flyer-runner.jpg',
                'sport_type' => 'Running',
            ],
            [
                'name' => 'Precision Play',
                'brand' => 'Nike',
                'price' => 1050000,
                'size_range' => '40-44',
                'image' => 'precision-play.jpg',
                'sport_type' => 'Basketball',
            ],
            [
                'name' => 'Response Runner',
                'brand' => 'Adidas',
                'price' => 779000,
                'size_range' => '39-44',
                'image' => 'response-runner.jpg',
                'sport_type' => 'Running',
            ],
            [
                'name' => 'Puma Speedcat',
                'brand' => 'Puma',
                'price' => 1599000,
                'size_range' => '39-44',
                'image' => 'puma-speedcat.jpg',
                'sport_type' => 'Lifestyle',
            ],
            [
                'name' => 'New Balance 2002R',
                'brand' => 'New Balance',
                'price' => 1899000,
                'size_range' => '39-44',
                'image' => 'new-balance-2002r.jpg',
                'sport_type' => 'Lifestyle',
            ],
            [
                'name' => 'New Balance 740 v2',
                'brand' => 'New Balance',
                'price' => 1599000,
                'size_range' => '39-44',
                'image' => 'new-balance-740-v2.jpg',
                'sport_type' => 'Lifestyle',
            ],
            [
                'name' => 'New Balance 530',
                'brand' => 'New Balance',
                'price' => 1499000,
                'size_range' => '39-44',
                'image' => 'new-balance-530.jpg',
                'sport_type' => 'Lifestyle',
            ],
        ];

        foreach ($shoes as $shoe) {
            Shoe::updateOrCreate(
                ['name' => $shoe['name']],
                $shoe
            );
        }
    }
}
