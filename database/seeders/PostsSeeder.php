<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'img_src' => 'img/posts/anita.jpg',
            'img_alt' => 'Anita and Michael at the foodtruck',
            'title' => 'Ein Besuch von Private Taste by Anita',
            'short_description' => "Im Februar besuchte uns die Food-Bloggerin 'Private Taste by Anita' am Le Bistro Foodtruck. Ihre Worte über unsere frischen, handgemachten Burger und die familiäre Atmosphäre haben uns zutiefst berührt. Lesen Sie ihren Bericht und erfahren Sie mehr über ihre Erfahrungen bei uns!",
            'content' => 'Am 14. Februar 2023 hatten wir das Vergnügen, Anita von Private Taste by Anita bei unserem Foodtruck am Flötzerweg 184 im Linzer Süden zu begrüßen. Ihre Leidenschaft ist das Essen, und obwohl sie zugegeben hat, dass Burger sie nur selten kulinarisch einfangen und begeistern können, hat unser Angebot sie beeindruckt! Anita hatte die Gelegenheit, unseren Gründer Michael Vodovic kennenzulernen. Michael, der in der Nähe lebt und arbeitet, hat eine beeindruckende Laufbahn in der Gastronomie hinter sich. Er war Teil des Sieger-Teams beim Lehrlings-Bundeswettbewerb der Köche und hat sowohl im Novotel als Koch als auch auf einem Schiff wertvolle Erfahrungen gesammelt. 2019 wagte er den Schritt in die Selbstständigkeit und eröffnete das sehr erfolgreiche Le Bistro in Neuhofen. burger mit pommes Etwas, das uns sehr am Herzen liegt, ist die Qualität unserer Zutaten. Unsere Burger-Patties stammen vom WagyuHof, und wir bereiten sie selbst vor. Bei uns gibt es keine TK-Burger Patties! Wir sind stolz darauf, dass unsere Burger-Buns vom ortsansässigen Bäcker kommen und dass wir jeden Burger liebevoll und frisch zubereiten. Anita war begeistert von unserem Angebot, insbesondere von unseren Trüffel-Pommes, und wir sind stolz darauf, dass wir sogar sie zum Burger-Fan machen konnten! Sie genoss auch ein köstliches Trumer-Bier zu ihrem Essen. Für diejenigen, die nicht vor Ort vorbeischauen können oder möchten, bieten wir einen Lieferservice über Foodora, NINJAS.JETZT, Lieferando und Hungry Lama an, der unsere köstlichen Burger im Linzer Raum zustellt. Unser Foodtruck ist Montag bis Sonntag von 17:00 bis 22:00 Uhr für Sie da. Und nicht zu vergessen, unser Foodtruck kann auch für Feste jeder Art gebucht werden! Wir danken Anita von Private Taste by Anita für ihren Besuch und ihre wundervolle Bewertung. Wir freuen uns darauf, auch Sie bald bei Le Bistro Foodtruck zu begrüßen! Adresse: Flötzerweg 184, 4030 Linz',
        ]);
    }
}
