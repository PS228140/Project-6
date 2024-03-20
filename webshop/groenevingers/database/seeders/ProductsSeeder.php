<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            "api_id" => 600,
            "categorie_id" => 1,
            "name" => "Varen",
            "description" => "De varen is een groep van ongeveer 10.560 bekende nog levende soorten vaatplanten.",
            "price" => "9.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Blue",
            "height_cm" => 60,
            "width_cm" => 30,
            "depth_cm" => 30,
            "weight_gr" => 150,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 601,
            "categorie_id" => 2,
            "name" => "Gras",
            "description" => "Gras is een belangrijke familie van monocot planten, graslanden bedekken ongeveer 20% van de aardse vegetatie.",
            "price" => "2.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Silver",
            "height_cm" => 40,
            "width_cm" => 10,
            "depth_cm" => 10,
            "weight_gr" => 80,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 602,
            "categorie_id" => 1,
            "name" => "Bamboe",
            "description" => "Bamboe is een snelgroeiend gras in de familie Poaceae.",
            "price" => "7.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "DarkSalmon",
            "height_cm" => 180,
            "width_cm" => 50,
            "depth_cm" => 10,
            "weight_gr" => 500,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 603,
            "categorie_id" => 2,
            "name" => "Klimop",
            "description" => "Klimop is een geslacht van 12-15 soorten klimmende of kruipende altijd groenblijvende houtige planten.",
            "price" => "5.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Ivory",
            "height_cm" => 100,
            "width_cm" => 20,
            "depth_cm" => 5,
            "weight_gr" => 200,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 604,
            "categorie_id" => 1,
            "name" => "Aloe Vera",
            "description" => "Aloë vera is een succulente plantensoort die vermoedelijk afkomstig is uit het Arabische schiereiland.",
            "price" => "4.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Gold",
            "height_cm" => 30,
            "width_cm" => 15,
            "depth_cm" => 15,
            "weight_gr" => 120,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 605,
            "categorie_id" => 2,
            "name" => "Ficus",
            "description" => "Ficus is een geslacht van ongeveer 850 soorten houtige bomen, struiken en klimplanten in de familie Moraceae.",
            "price" => "8.79",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Snow",
            "height_cm" => 120,
            "width_cm" => 40,
            "depth_cm" => 40,
            "weight_gr" => 400,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 606,
            "categorie_id" => 4,
            "name" => "Geranium",
            "description" => "Geranium is een geslacht van 422 soorten vaste planten die voorkomen in gematigde streken van de wereld.",
            "price" => "6.29",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "AntiqueWhite",
            "height_cm" => 50,
            "width_cm" => 25,
            "depth_cm" => 25,
            "weight_gr" => 250,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 607,
            "categorie_id" => 2,
            "name" => "Olijfboom",
            "description" => "De olijfboom, Olea europaea, is een kleine boom in de familie Oleaceae.",
            "price" => "11.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "SeaGreen",
            "height_cm" => 180,
            "width_cm" => 60,
            "depth_cm" => 60,
            "weight_gr" => 600,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 608,
            "categorie_id" => 1,
            "name" => "Chrysant",
            "description" => "De chrysant, oftewel Chrysanthemum, is een geslacht van kruidachtige, overblijvende planten.",
            "price" => "5.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "SandyBrown",
            "height_cm" => 60,
            "width_cm" => 30,
            "depth_cm" => 30,
            "weight_gr" => 300,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 609,
            "categorie_id" => 2,
            "name" => "Spar",
            "description" => "De spar, of Fijnspar, is een groenblijvende naaldboom in het geslacht Picea.",
            "price" => "9.29",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Plum",
            "height_cm" => 200,
            "width_cm" => 50,
            "depth_cm" => 50,
            "weight_gr" => 500,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 610,
            "categorie_id" => 2,
            "name" => "Palmboom",
            "description" => "De palmboom is een boom die behoort tot de familie van de palmen.",
            "price" => "12.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "HotPink",
            "height_cm" => 300,
            "width_cm" => 80,
            "depth_cm" => 80,
            "weight_gr" => 800,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 611,
            "categorie_id" => 2,
            "name" => "Azalea",
            "description" => "De azalea is een geslacht van bloeiende planten uit de heidefamilie.",
            "price" => "7.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "MidnightBlue",
            "height_cm" => 50,
            "width_cm" => 20,
            "depth_cm" => 20,
            "weight_gr" => 150,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 612,
            "categorie_id" => 1,
            "name" => "Cactus",
            "description" => "De cactus is een lid van de familie Cactaceae.",
            "price" => "6.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "YellowGreen",
            "height_cm" => 40,
            "width_cm" => 30,
            "depth_cm" => 30,
            "weight_gr" => 200,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 613,
            "categorie_id" => 1,
            "name" => "Fuchsia",
            "description" => "Fuchsia is een geslacht van bloeiende planten uit de familie Onagraceae.",
            "price" => "8.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "DimGray",
            "height_cm" => 70,
            "width_cm" => 25,
            "depth_cm" => 25,
            "weight_gr" => 300,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 614,
            "categorie_id" => 1,
            "name" => "Viool",
            "description" => "De viool is een geslacht van bloeiende planten uit de familie Violaceae.",
            "price" => "5.29",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Tan",
            "height_cm" => 45,
            "width_cm" => 15,
            "depth_cm" => 15,
            "weight_gr" => 100,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 615,
            "categorie_id" => 2,
            "name" => "Krokus",
            "description" => "De krokus is een bolgewas uit de lissenfamilie.",
            "price" => "3.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Silver",
            "height_cm" => 30,
            "width_cm" => 10,
            "depth_cm" => 10,
            "weight_gr" => 50,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 616,
            "categorie_id" => 2,
            "name" => "Begonia",
            "description" => "Begonia is een geslacht van kruidachtige bloeiende planten.",
            "price" => "9.79",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "SeaGreen",
            "height_cm" => 60,
            "width_cm" => 40,
            "depth_cm" => 40,
            "weight_gr" => 400,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 617,
            "categorie_id" => 1,
            "name" => "Sneeuwklokje",
            "description" => "Het sneeuwklokje is een bolgewas uit de narcisfamilie.",
            "price" => "4.29",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Gold",
            "height_cm" => 20,
            "width_cm" => 5,
            "depth_cm" => 5,
            "weight_gr" => 20,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 618,
            "categorie_id" => 1,
            "name" => "Lavendel",
            "description" => "Lavendel is een plant uit de lipbloemenfamilie.",
            "price" => "6.59",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "AntiqueWhite",
            "height_cm" => 40,
            "width_cm" => 30,
            "depth_cm" => 30,
            "weight_gr" => 150,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 619,
            "categorie_id" => 4,
            "name" => "Klimroos",
            "description" => "De klimroos is een plant uit de rozenfamilie.",
            "price" => "11.19",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Plum",
            "height_cm" => 250,
            "width_cm" => 60,
            "depth_cm" => 60,
            "weight_gr" => 600,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 620,
            "categorie_id" => 2,
            "name" => "Olijfboom",
            "description" => "De olijfboom, Olea europaea, is een kleine boom in de familie Oleaceae.",
            "price" => "13.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "YellowGreen",
            "height_cm" => 220,
            "width_cm" => 70,
            "depth_cm" => 70,
            "weight_gr" => 700,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 621,
            "categorie_id" => 1,
            "name" => "Krokus",
            "description" => "De krokus is een bolgewas uit de lissenfamilie.",
            "price" => "4.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "MidnightBlue",
            "height_cm" => 35,
            "width_cm" => 15,
            "depth_cm" => 15,
            "weight_gr" => 80,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 622,
            "categorie_id" => 2,
            "name" => "Dahlia",
            "description" => "De dahlia is een geslacht van meestal vaste planten uit de composietenfamilie.",
            "price" => "8.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "SlateBlue",
            "height_cm" => 60,
            "width_cm" => 25,
            "depth_cm" => 25,
            "weight_gr" => 150,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 623,
            "categorie_id" => 1,
            "name" => "Hibiscus",
            "description" => "De hibiscus is een geslacht van circa 200-220 soorten bloeiende planten uit de familie Malvaceae.",
            "price" => "7.79",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Snow",
            "height_cm" => 55,
            "width_cm" => 20,
            "depth_cm" => 20,
            "weight_gr" => 100,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 624,
            "categorie_id" => 1,
            "name" => "Geranium",
            "description" => "Geranium is een geslacht van 422 soorten vaste planten die voorkomen in gematigde streken van de wereld.",
            "price" => "5.89",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "AntiqueWhite",
            "height_cm" => 45,
            "width_cm" => 20,
            "depth_cm" => 20,
            "weight_gr" => 120,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 625,
            "categorie_id" => 2,
            "name" => "Fuchsia",
            "description" => "Fuchsia is een geslacht van bloeiende planten uit de familie Onagraceae.",
            "price" => "9.29",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "DarkSalmon",
            "height_cm" => 70,
            "width_cm" => 30,
            "depth_cm" => 30,
            "weight_gr" => 180,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 626,
            "categorie_id" => 2,
            "name" => "Bamboe",
            "description" => "Bamboe is een snelgroeiend gras in de familie Poaceae.",
            "price" => "6.69",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "HotPink",
            "height_cm" => 180,
            "width_cm" => 40,
            "depth_cm" => 40,
            "weight_gr" => 400,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 627,
            "categorie_id" => 1,
            "name" => "Amaryllis",
            "description" => "Amaryllis is een geslacht van bolgewassen uit de narcisfamilie.",
            "price" => "11.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Plum",
            "height_cm" => 65,
            "width_cm" => 15,
            "depth_cm" => 15,
            "weight_gr" => 120,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 628,
            "categorie_id" => 2,
            "name" => "Tulp",
            "description" => "De tulp is een bolgewas behorende tot de leliefamilie.",
            "price" => "3.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "SeaGreen",
            "height_cm" => 40,
            "width_cm" => 10,
            "depth_cm" => 10,
            "weight_gr" => 50,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 629,
            "categorie_id" => 2,
            "name" => "Lelie",
            "description" => "De lelie is een geslacht van bloeiende planten.",
            "price" => "9.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Gold",
            "height_cm" => 80,
            "width_cm" => 30,
            "depth_cm" => 30,
            "weight_gr" => 200,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 630,
            "categorie_id" => 2,
            "name" => "Aardbei",
            "description" => "De aardbei is een plant uit de rozenfamilie.",
            "price" => "2.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "DimGray",
            "height_cm" => 20,
            "width_cm" => 10,
            "depth_cm" => 10,
            "weight_gr" => 50,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 631,
            "categorie_id" => 2,
            "name" => "Eik",
            "description" => "De eik is een geslacht van loofbomen.",
            "price" => "15.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "AntiqueWhite",
            "height_cm" => 300,
            "width_cm" => 100,
            "depth_cm" => 100,
            "weight_gr" => 1000,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 632,
            "categorie_id" => 1,
            "name" => "Lavendel",
            "description" => "Lavendel is een plant uit de lipbloemenfamilie.",
            "price" => "8.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Snow",
            "height_cm" => 40,
            "width_cm" => 20,
            "depth_cm" => 20,
            "weight_gr" => 80,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 633,
            "categorie_id" => 1,
            "name" => "Klaproos",
            "description" => "De klaproos is een geslacht uit de papaverfamilie.",
            "price" => "4.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "HotPink",
            "height_cm" => 30,
            "width_cm" => 10,
            "depth_cm" => 10,
            "weight_gr" => 40,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        DB::table("products")->insert([
            "api_id" => 634,
            "categorie_id" => 2,
            "name" => "Vijgenboom",
            "description" => "De vijgenboom, Ficus carica, is een plant uit de moerbeifamilie.",
            "price" => "11.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Gold",
            "height_cm" => 200,
            "width_cm" => 80,
            "depth_cm" => 80,
            "weight_gr" => 800,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        DB::table("products")->insert([
            "api_id" => 635,
            "categorie_id" => 1,
            "name" => "Kers",
            "description" => "De kers is een plant uit de rozenfamilie.",
            "price" => "6.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "SlateBlue",
            "height_cm" => 50,
            "width_cm" => 30,
            "depth_cm" => 30,
            "weight_gr" => 150,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        DB::table("products")->insert([
            "api_id" => 636,
            "categorie_id" => 2,
            "name" => "Lelie",
            "description" => "De lelie is een geslacht van bloeiende planten.",
            "price" => "9.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "SeaGreen",
            "height_cm" => 80,
            "width_cm" => 40,
            "depth_cm" => 40,
            "weight_gr" => 200,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
            
        DB::table("products")->insert([
            "api_id" => 637,
            "categorie_id" => 2,
            "name" => "Tomaat",
            "description" => "De tomaat is een plant uit de nachtschadefamilie.",
            "price" => "3.99",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Silver",
            "height_cm" => 40,
            "width_cm" => 20,
            "depth_cm" => 20,
            "weight_gr" => 100,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
            
        DB::table("products")->insert([
            "api_id" => 638,
            "categorie_id" => 2,
            "name" => "Bamboe",
            "description" => "Bamboe is een snelgroeiend gras in de familie Poaceae.",
            "price" => "7.49",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "YellowGreen",
            "height_cm" => 100,
            "width_cm" => 50,
            "depth_cm" => 50,
            "weight_gr" => 500,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        
        DB::table("products")->insert([
            "api_id" => 639,
            "categorie_id" => 2,
            "name" => "Olijfboom",
            "description" => "De olijfboom, Olea europaea, is een kleine boom in de familie Oleaceae.",
            "price" => "14.00",
            "img_src" => "https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg",
            "color" => "Plum",
            "height_cm" => 250,
            "width_cm" => 60,
            "depth_cm" => 60,
            "weight_gr" => 600,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}