<?php

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            "title" => "Mangrove Restoration for Coastal Protection",
            "description" => "The goal of the project is to create 10 hectares mangrove buffer zone through planting and regenerating 100000 mangrove together with local",
            "place" => "Bangladesh",
            "image" => "uploads/events/images/pict_original.jpg",
            "time" => "12:12",
            "event_date" => "2021-06-20",
        ]);


        Event::create([
            "title" => "Free-of-cost School for Underprivileged Children ",
            "description" => "The JAAGO Foundation aims to use education as a weapon to break through the cycle of poverty, creating opportunities for income, growth",
            "place" => "Bangladesh",
            "image" => "uploads/events/images/pict_original2.jpg",
            "time" => "02:39",
            "event_date" => "2021-01-01",
        ]);

        Event::create([
            "title" => "Drinking Water for coastal people in Bangladesh ",
            "description" => "Around 73 percent of the people in the Sundarbans coastal region of Bangladesh are deprived of drinking water. It is a massive crisis in the",
            "place" => "Bangladesh",
            "image" => "uploads/events/images/pict_original3.jpg",
            "time" => "13:30",
            "event_date" => "2020-02-01",
        ]);
        Event::create([
            "title" => "Support Coastal families in response to COVID-19",
            "description" => "Better home for better life is an idea to improve the socio economic condition and to ensure the food security and food safety of the local",
            "place" => "Bangladesh",
            "image" => "uploads/events/images/pict_original4.jpg",
            "time" => "01:23",
            "event_date" => "2019-05-09",
        ]);
        Event::create([
            "title" => "Safe Haven for Rohingya Refugee Children",
            "description" => "Rohingya from Rakhaine State - Myanmar became the biggest humanitarian crisis in the 21st Century. Since August, 2017 they have faced violen",
            "place" => "Bangladesh",
            "image" => "uploads/events/images/pict_original5.jpg",
            "time" => "23:20",
            "event_date" => "2021-06-06",
        ]);

        Event::create([
            "title" => "Education for Blind Children of Bangladesh",
            "description" => "The project will provide residential care and education to 100 poor and blind children in Bangladesh which will guarantee a dignified and me",
            "place" => "Bangladesh",
            "image" => "uploads/events/images/pict_original6.jpg",
            "time" => "20:21",
            "event_date" => "2021-04-06",
        ]);
    }
}
