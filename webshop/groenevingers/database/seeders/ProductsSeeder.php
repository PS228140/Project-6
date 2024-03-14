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
            "api_id" => 1,
            "categorie_id" => 1,
            "name" => "autem voluptas maxime",
            "description" =>
                "Omnis voluptatem ut nemo asperiores hic maxime repellendus. Possimus officiis temporibus soluta eos nobis veniam in. Qui eum deserunt beatae odit. Ipsum ex molestias cum rerum.",
            "price" => "331.62",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/007722?text=corporis",
            "color" => "MediumPurple",
            "height_cm" => "39",
            "width_cm" => "25",
            "depth_cm" => "11",
            "weight_gr" => "31",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 2,
            "categorie_id" => 1,
            "name" => "minus suscipit omnis",
            "description" =>
                "Deleniti veniam unde quod ducimus. Blanditiis nesciunt eaque est distinctio sunt. Et aut sequi perspiciatis qui tempora.",
            "price" => "151.53",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/0033cc?text=quae",
            "color" => "MidnightBlue",
            "height_cm" => "27",
            "width_cm" => "70",
            "depth_cm" => "14",
            "weight_gr" => "37",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 3,
            "categorie_id" => 1,
            "name" => "eaque consequuntur repellat",
            "description" =>
                "Nihil et exercitationem doloremque molestiae perspiciatis perspiciatis. Sed repellat harum distinctio est autem rem. Asperiores in aut vel aspernatur sed. Illum ut quas dignissimos nam.",
            "price" => "642.87",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00aa66?text=a",
            "color" => "AntiqueWhite",
            "height_cm" => "57",
            "width_cm" => "98",
            "depth_cm" => "3",
            "weight_gr" => "65",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 4,
            "categorie_id" => 1,
            "name" => "dolor excepturi quod",
            "description" =>
                "Eos voluptatem quia alias omnis quis. Aperiam vitae nobis eum quis tempore. Aspernatur laudantium nobis et ipsum. Ducimus occaecati in distinctio molestias omnis ea expedita rerum.",
            "price" => "899.95",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00bb00?text=rerum",
            "color" => "Blue",
            "height_cm" => "3",
            "width_cm" => "73",
            "depth_cm" => "27",
            "weight_gr" => "21",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 5,
            "categorie_id" => 1,
            "name" => "laudantium voluptatum et",
            "description" =>
                "Repellat facere odio nisi quaerat. Nihil doloribus rerum consequuntur aperiam aut. A magnam temporibus perferendis ratione atque. Qui at a et illum ratione modi.",
            "price" => "477.36",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/0011ff?text=sunt",
            "color" => "SlateBlue",
            "height_cm" => "51",
            "width_cm" => "85",
            "depth_cm" => "55",
            "weight_gr" => "14",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 6,
            "categorie_id" => 1,
            "name" => "perferendis quia pariatur",
            "description" =>
                "Qui est commodi beatae dolor incidunt blanditiis ut. Voluptas repellendus odio repellat maxime et quas. Officiis natus fuga molestiae.",
            "price" => "991.04",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/0077cc?text=deleniti",
            "color" => "Snow",
            "height_cm" => "6",
            "width_cm" => "79",
            "depth_cm" => "40",
            "weight_gr" => "42",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 7,
            "categorie_id" => 1,
            "name" => "vero exercitationem numquam",
            "description" =>
                "Exercitationem id repellendus quo consequuntur ab corporis esse. Molestias ipsam accusantium dolore dicta voluptatem qui dolor. Eaque alias aut ut vero eum.",
            "price" => "945.29",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00eecc?text=quo",
            "color" => "Tan",
            "height_cm" => "38",
            "width_cm" => "34",
            "depth_cm" => "34",
            "weight_gr" => "72",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 8,
            "categorie_id" => 1,
            "name" => "nisi cupiditate voluptatem",
            "description" =>
                "Est officia laboriosam excepturi eos et. Ad assumenda voluptatibus explicabo dicta. Tempore temporibus iusto praesentium sequi molestiae mollitia. Illo molestiae vitae qui pariatur quas provident.",
            "price" => "793.39",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/0044dd?text=et",
            "color" => "LightYellow",
            "height_cm" => "25",
            "width_cm" => "54",
            "depth_cm" => "72",
            "weight_gr" => "100",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 9,
            "categorie_id" => 1,
            "name" => "in nihil consequuntur",
            "description" =>
                "Aut itaque delectus iusto est. Et et voluptate nisi voluptas et. Dolorem qui ut quia modi. Consequatur dolor et ut. Itaque ad accusantium molestiae temporibus omnis iusto deserunt.",
            "price" => "21.70",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00ffff?text=ullam",
            "color" => "DarkOliveGreen",
            "height_cm" => "6",
            "width_cm" => "16",
            "depth_cm" => "8",
            "weight_gr" => "75",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 10,
            "categorie_id" => 1,
            "name" => "modi quisquam quis",
            "description" =>
                "Atque autem omnis est ipsa ipsam itaque sint. Voluptas ducimus sapiente qui aut similique.",
            "price" => "720.23",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/0088aa?text=nihil",
            "color" => "FireBrick",
            "height_cm" => "83",
            "width_cm" => "74",
            "depth_cm" => "100",
            "weight_gr" => "48",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 11,
            "categorie_id" => 1,
            "name" => "accusantium tenetur assumenda",
            "description" =>
                "Ut labore vero rem. Nemo totam temporibus libero voluptas hic possimus. Deleniti veritatis dolorem eum.",
            "price" => "60.94",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/009988?text=iusto",
            "color" => "Olive",
            "height_cm" => "10",
            "width_cm" => "44",
            "depth_cm" => "87",
            "weight_gr" => "100",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 12,
            "categorie_id" => 1,
            "name" => "sint ut facilis",
            "description" =>
                "Quisquam eum molestias a ut. Voluptas maxime odit voluptatem quisquam reprehenderit. Corporis et tempore fugiat aut dolore.",
            "price" => "300.31",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/0088ff?text=omnis",
            "color" => "LightSalmon",
            "height_cm" => "49",
            "width_cm" => "17",
            "depth_cm" => "69",
            "weight_gr" => "46",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 13,
            "categorie_id" => 1,
            "name" => "enim et quidem",
            "description" =>
                "Et molestiae eaque dolore aut. Natus nisi omnis quia optio. Soluta provident repudiandae ipsa sunt ut quia.",
            "price" => "203.51",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/008877?text=dignissimos",
            "color" => "SeaGreen",
            "height_cm" => "100",
            "width_cm" => "7",
            "depth_cm" => "33",
            "weight_gr" => "51",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 14,
            "categorie_id" => 1,
            "name" => "praesentium consequatur iure",
            "description" =>
                "Mollitia nihil officia qui illo est mollitia dolores. Inventore et autem accusantium autem qui recusandae voluptas asperiores. Nostrum voluptate aut ut non. Veritatis dolorem mollitia et eius est.",
            "price" => "27.14",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00aa88?text=sit",
            "color" => "MistyRose",
            "height_cm" => "60",
            "width_cm" => "32",
            "depth_cm" => "100",
            "weight_gr" => "16",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 15,
            "categorie_id" => 1,
            "name" => "facere accusamus ducimus",
            "description" =>
                "Non velit veritatis et occaecati et ratione est cupiditate. Exercitationem impedit ut ea eum nulla sit. Vel non voluptatem dolorum harum quis.",
            "price" => "805.15",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/005500?text=in",
            "color" => "MidnightBlue",
            "height_cm" => "75",
            "width_cm" => "74",
            "depth_cm" => "81",
            "weight_gr" => "60",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 16,
            "categorie_id" => 1,
            "name" => "et dolores officia",
            "description" =>
                "Enim dolor dolorem voluptas beatae aut. Commodi ut adipisci quos ab et quia dolores. Magnam deleniti voluptas sapiente ut laudantium nihil. Accusantium ut eligendi corrupti neque rerum.",
            "price" => "58.71",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00aaff?text=at",
            "color" => "BurlyWood",
            "height_cm" => "18",
            "width_cm" => "56",
            "depth_cm" => "65",
            "weight_gr" => "66",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 17,
            "categorie_id" => 1,
            "name" => "earum consectetur voluptas",
            "description" =>
                "Adipisci aliquid reprehenderit debitis quidem ipsam quisquam. Aut nesciunt illum odit voluptatibus et dolorem quo. Velit porro enim maiores impedit. Fuga porro accusamus nemo ut earum illo totam.",
            "price" => "443.10",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00ccdd?text=modi",
            "color" => "Pink",
            "height_cm" => "93",
            "width_cm" => "76",
            "depth_cm" => "40",
            "weight_gr" => "96",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 18,
            "categorie_id" => 1,
            "name" => "illum occaecati eveniet",
            "description" =>
                "Esse eum et et velit tenetur quia. Omnis voluptates quibusdam voluptates quo. Magnam non iusto et dignissimos dolorem atque.",
            "price" => "522.56",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/000077?text=ab",
            "color" => "Lavender",
            "height_cm" => "63",
            "width_cm" => "17",
            "depth_cm" => "5",
            "weight_gr" => "27",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 19,
            "categorie_id" => 1,
            "name" => "nihil voluptatem delectus",
            "description" =>
                "Dolor perspiciatis saepe sunt nam totam possimus. Eveniet cum eius ea accusamus. Possimus eveniet minima et voluptas. Et repellendus iure totam aut.",
            "price" => "277.90",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00ee22?text=soluta",
            "color" => "Purple",
            "height_cm" => "87",
            "width_cm" => "26",
            "depth_cm" => "25",
            "weight_gr" => "77",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 20,
            "categorie_id" => 1,
            "name" => "quaerat est repellat",
            "description" =>
                "Eveniet quos enim sapiente. Omnis iure quasi et. Aut pariatur et laudantium et. Ut magni optio aperiam est voluptas repudiandae perferendis. Dolorem vitae ullam magni soluta deleniti nisi magnam.",
            "price" => "920.02",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/0088aa?text=dolore",
            "color" => "DarkKhaki",
            "height_cm" => "44",
            "width_cm" => "71",
            "depth_cm" => "15",
            "weight_gr" => "91",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 21,
            "categorie_id" => 1,
            "name" => "dolores aliquam voluptatibus",
            "description" =>
                "Doloremque natus nihil tempora ea aliquam. Alias quo est quisquam aperiam fuga ratione. Illum aut nisi voluptas officia. Et voluptatem dolore minima numquam enim.",
            "price" => "198.68",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00aa55?text=amet",
            "color" => "FireBrick",
            "height_cm" => "80",
            "width_cm" => "24",
            "depth_cm" => "80",
            "weight_gr" => "87",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 22,
            "categorie_id" => 1,
            "name" => "iure et velit",
            "description" =>
                "Vitae illo ut sed id ullam. Consequuntur nam veritatis fuga hic aperiam consequatur. Nihil omnis aliquid nihil sed labore repellat delectus et. Eveniet ad itaque minus aut.",
            "price" => "161.27",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00bbdd?text=dolore",
            "color" => "LightCyan",
            "height_cm" => "55",
            "width_cm" => "90",
            "depth_cm" => "52",
            "weight_gr" => "56",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 23,
            "categorie_id" => 1,
            "name" => "cupiditate et veritatis",
            "description" =>
                "Nihil et optio harum a. Rerum non qui illo perferendis placeat exercitationem omnis voluptatem. Aut est voluptas et consequatur quibusdam. Odit vitae aut aliquam minus velit rerum culpa.",
            "price" => "987.67",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/005522?text=saepe",
            "color" => "OldLace",
            "height_cm" => "22",
            "width_cm" => "43",
            "depth_cm" => "72",
            "weight_gr" => "16",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 24,
            "categorie_id" => 1,
            "name" => "sequi impedit sed",
            "description" =>
                "Ut libero qui quia quia molestiae dolor. Animi quo repellendus fuga excepturi asperiores. Quos et repellendus officia laborum aliquam repudiandae quibusdam quo.",
            "price" => "717.80",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/000022?text=recusandae",
            "color" => "SkyBlue",
            "height_cm" => "94",
            "width_cm" => "8",
            "depth_cm" => "60",
            "weight_gr" => "70",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 25,
            "categorie_id" => 1,
            "name" => "nesciunt numquam voluptatem",
            "description" =>
                "Voluptatem autem voluptates architecto iure ex et. Mollitia dolores dolorem voluptates quisquam sit.",
            "price" => "846.90",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00ee88?text=vel",
            "color" => "Navy",
            "height_cm" => "11",
            "width_cm" => "98",
            "depth_cm" => "61",
            "weight_gr" => "72",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 26,
            "categorie_id" => 1,
            "name" => "accusamus consectetur in",
            "description" =>
                "Sunt sunt ipsam ipsam culpa. Reiciendis quisquam animi eligendi sint. Ex alias dolorem magni laborum ipsa temporibus possimus.",
            "price" => "193.84",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00ee11?text=id",
            "color" => "BurlyWood",
            "height_cm" => "49",
            "width_cm" => "51",
            "depth_cm" => "78",
            "weight_gr" => "41",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 27,
            "categorie_id" => 1,
            "name" => "veniam temporibus placeat",
            "description" =>
                "Libero sequi minus aspernatur nisi aut adipisci cum. Debitis ea illo deserunt odio. Qui hic doloremque doloremque non. Dolores id iusto saepe iste quasi excepturi. Eligendi molestiae et ratione.",
            "price" => "163.17",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00cc99?text=nihil",
            "color" => "Thistle",
            "height_cm" => "77",
            "width_cm" => "5",
            "depth_cm" => "41",
            "weight_gr" => "17",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 28,
            "categorie_id" => 1,
            "name" => "sed laborum aperiam",
            "description" =>
                "Ipsum recusandae dolores incidunt saepe laboriosam aliquid. Ut magnam unde aliquid dolores minima ut aut. Aut magni dolorum et. Qui nihil quam ut suscipit et consequatur.",
            "price" => "175.80",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/006633?text=aut",
            "color" => "DeepPink",
            "height_cm" => "13",
            "width_cm" => "11",
            "depth_cm" => "79",
            "weight_gr" => "99",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 29,
            "categorie_id" => 1,
            "name" => "expedita sed nostrum",
            "description" =>
                "Consequatur excepturi consectetur id occaecati nihil rerum esse illum. Dolorum veritatis id corrupti.",
            "price" => "565.89",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/000066?text=pariatur",
            "color" => "SteelBlue",
            "height_cm" => "64",
            "width_cm" => "14",
            "depth_cm" => "70",
            "weight_gr" => "78",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 30,
            "categorie_id" => 1,
            "name" => "nemo aut amet",
            "description" =>
                "Consectetur et pariatur atque velit odit reprehenderit. Ratione neque consequuntur dolores aspernatur non hic. Sit illo quibusdam delectus pariatur et.",
            "price" => "460.13",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/006644?text=minus",
            "color" => "Crimson",
            "height_cm" => "92",
            "width_cm" => "75",
            "depth_cm" => "43",
            "weight_gr" => "31",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 31,
            "categorie_id" => 1,
            "name" => "dolorum voluptatibus pariatur",
            "description" =>
                "Earum distinctio inventore sit suscipit. Minima quos eos illo eligendi assumenda iusto.",
            "price" => "440.41",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/003355?text=aspernatur",
            "color" => "LightSlateGray",
            "height_cm" => "64",
            "width_cm" => "77",
            "depth_cm" => "28",
            "weight_gr" => "38",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 32,
            "categorie_id" => 1,
            "name" => "nostrum dolor labore",
            "description" =>
                "Est est nam quas omnis. Voluptas est perferendis qui odio et. Sunt aliquid saepe ad. Quos sed qui animi molestiae sit. Necessitatibus nesciunt odio aut non quis exercitationem.",
            "price" => "42.39",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00ddaa?text=voluptatem",
            "color" => "DarkBlue",
            "height_cm" => "83",
            "width_cm" => "94",
            "depth_cm" => "73",
            "weight_gr" => "21",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 33,
            "categorie_id" => 1,
            "name" => "aut veritatis ut",
            "description" =>
                "Quam quis ducimus nihil ut doloribus rerum voluptate. Corporis occaecati et dolores non fugit officiis sunt. Dolorem doloremque eligendi ut minima nihil amet.",
            "price" => "231.69",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/0088ff?text=illum",
            "color" => "Tan",
            "height_cm" => "53",
            "width_cm" => "74",
            "depth_cm" => "56",
            "weight_gr" => "29",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 34,
            "categorie_id" => 1,
            "name" => "pariatur vero ut",
            "description" =>
                "Dicta illum blanditiis quasi necessitatibus recusandae et reiciendis. Aut nihil autem optio pariatur dolorum qui. Quibusdam et rerum beatae repudiandae non odit aut.",
            "price" => "818.66",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/008899?text=dolor",
            "color" => "Cornsilk",
            "height_cm" => "9",
            "width_cm" => "89",
            "depth_cm" => "12",
            "weight_gr" => "94",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 35,
            "categorie_id" => 1,
            "name" => "cumque ipsa in",
            "description" =>
                "Ratione earum et praesentium sint quisquam minus. Libero consequuntur consequuntur ratione neque culpa. Voluptates nostrum quos mollitia quisquam modi nulla aspernatur.",
            "price" => "132.60",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/006677?text=est",
            "color" => "PapayaWhip",
            "height_cm" => "18",
            "width_cm" => "80",
            "depth_cm" => "65",
            "weight_gr" => "77",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 36,
            "categorie_id" => 1,
            "name" => "voluptatum consequatur sunt",
            "description" =>
                "Nobis omnis et unde aperiam. Odio quis et alias suscipit et architecto. Labore doloremque libero ipsum consequatur consectetur numquam fugiat sed. Totam quod sed dolorem ipsam tempore reprehenderit.",
            "price" => "726.07",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/004499?text=et",
            "color" => "Green",
            "height_cm" => "71",
            "width_cm" => "40",
            "depth_cm" => "63",
            "weight_gr" => "60",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 37,
            "categorie_id" => 1,
            "name" => "dolore sunt quis",
            "description" =>
                "Iure voluptas dolorem commodi. Rerum ad iure omnis perspiciatis necessitatibus ad. Illum id modi accusantium veritatis occaecati iure.",
            "price" => "198.63",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00bb33?text=dicta",
            "color" => "GhostWhite",
            "height_cm" => "99",
            "width_cm" => "70",
            "depth_cm" => "34",
            "weight_gr" => "87",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 38,
            "categorie_id" => 1,
            "name" => "aut architecto vitae",
            "description" =>
                "Velit veritatis ut nulla ducimus. Qui modi ipsa et ducimus consectetur. Est doloremque dolores expedita est aut.",
            "price" => "860.31",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/0033bb?text=enim",
            "color" => "Navy",
            "height_cm" => "43",
            "width_cm" => "35",
            "depth_cm" => "91",
            "weight_gr" => "44",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 39,
            "categorie_id" => 1,
            "name" => "architecto asperiores nulla",
            "description" =>
                "Modi sed architecto odit error. Tempora ipsam vel adipisci ut autem sunt. Ducimus cum sit voluptatem esse odit velit fugiat in. Esse doloremque nam molestias est atque voluptas et.",
            "price" => "307.49",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00bbdd?text=reprehenderit",
            "color" => "DarkOliveGreen",
            "height_cm" => "78",
            "width_cm" => "76",
            "depth_cm" => "68",
            "weight_gr" => "30",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 40,
            "categorie_id" => 1,
            "name" => "consequatur accusantium dolor",
            "description" =>
                "Corrupti et sint quia consectetur est sunt. Dolores id sed quae iure voluptas. Dolore magni eligendi ea.",
            "price" => "113.21",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/003355?text=beatae",
            "color" => "SlateGray",
            "height_cm" => "7",
            "width_cm" => "15",
            "depth_cm" => "1",
            "weight_gr" => "53",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 41,
            "categorie_id" => 1,
            "name" => "a eius aspernatur",
            "description" =>
                "Vero quasi ratione consequatur eos ullam nobis. Quidem magnam consequatur sed voluptas corrupti eum numquam voluptas. Sed voluptatem dolorem animi fugit laboriosam.",
            "price" => "743.91",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00ee88?text=quam",
            "color" => "OldLace",
            "height_cm" => "16",
            "width_cm" => "20",
            "depth_cm" => "26",
            "weight_gr" => "40",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 42,
            "categorie_id" => 1,
            "name" => "temporibus et consectetur",
            "description" =>
                "Voluptatem quia recusandae voluptas repellat veniam. Rem amet atque non qui rem quaerat. Maiores quibusdam quaerat deserunt a explicabo. Quos similique error perspiciatis laboriosam cum error et.",
            "price" => "530.31",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00cc77?text=velit",
            "color" => "SaddleBrown",
            "height_cm" => "85",
            "width_cm" => "31",
            "depth_cm" => "42",
            "weight_gr" => "78",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 43,
            "categorie_id" => 1,
            "name" => "iusto porro ad",
            "description" =>
                "Ut mollitia illum dolor dolor eum. Dicta vero distinctio laborum. Aut est saepe rerum ut ut laborum.",
            "price" => "117.87",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/000099?text=laborum",
            "color" => "Gainsboro",
            "height_cm" => "31",
            "width_cm" => "73",
            "depth_cm" => "13",
            "weight_gr" => "34",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 44,
            "categorie_id" => 1,
            "name" => "delectus tempora reprehenderit",
            "description" =>
                "Velit omnis at id voluptatem vel hic. Quaerat numquam nulla rerum laborum culpa expedita. Omnis debitis adipisci aliquid aut sit voluptates laborum consequatur.",
            "price" => "896.50",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/005522?text=animi",
            "color" => "Bisque",
            "height_cm" => "33",
            "width_cm" => "72",
            "depth_cm" => "66",
            "weight_gr" => "85",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 45,
            "categorie_id" => 1,
            "name" => "saepe temporibus voluptas",
            "description" =>
                "Cupiditate aliquam nulla et. Id sed distinctio ut quidem est doloremque quod. Reiciendis quis et repudiandae numquam aut. Perspiciatis non hic provident ea eum eos veritatis.",
            "price" => "557.20",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/0033ff?text=eveniet",
            "color" => "PaleVioletRed",
            "height_cm" => "77",
            "width_cm" => "30",
            "depth_cm" => "61",
            "weight_gr" => "64",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 46,
            "categorie_id" => 1,
            "name" => "facere totam dolore",
            "description" =>
                "Mollitia veritatis voluptatem possimus nobis consequatur omnis. Ullam error voluptatem ut sit quae cum maiores. Deleniti corporis consequatur qui incidunt dolor ex totam at.",
            "price" => "385.44",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00aa00?text=culpa",
            "color" => "Azure",
            "height_cm" => "57",
            "width_cm" => "18",
            "depth_cm" => "19",
            "weight_gr" => "86",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 47,
            "categorie_id" => 1,
            "name" => "qui dolores excepturi",
            "description" =>
                "Repellat cupiditate qui doloribus possimus omnis quidem. Dolorem praesentium nisi numquam in quia. Et tenetur aspernatur omnis.",
            "price" => "553.74",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00cc44?text=ab",
            "color" => "MediumAquaMarine",
            "height_cm" => "83",
            "width_cm" => "73",
            "depth_cm" => "53",
            "weight_gr" => "98",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 48,
            "categorie_id" => 1,
            "name" => "porro est earum",
            "description" =>
                "Non odio earum porro architecto. Consectetur doloribus qui occaecati ducimus. Et non aliquid reprehenderit earum suscipit.",
            "price" => "321.54",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00ff11?text=provident",
            "color" => "DimGray",
            "height_cm" => "14",
            "width_cm" => "20",
            "depth_cm" => "25",
            "weight_gr" => "50",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 49,
            "categorie_id" => 1,
            "name" => "porro laudantium at",
            "description" =>
                "Commodi cum dolorem voluptatem nemo et. In consequatur natus atque quis at ab. Eligendi explicabo laborum ut omnis.",
            "price" => "843.77",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/00dd11?text=inventore",
            "color" => "Silver",
            "height_cm" => "25",
            "width_cm" => "65",
            "depth_cm" => "2",
            "weight_gr" => "88",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        DB::table("products")->insert([
            "api_id" => 50,
            "categorie_id" => 1,
            "name" => "non earum non",
            "description" =>
                "Non sed placeat sed atque deserunt id ut consequatur. Qui ex aut est aut soluta. Voluptatibus quia itaque in.",
            "price" => "529.10",
            "img_src" =>
                "https://via.placeholder.com/640x480.png/005599?text=optio",
            "color" => "PeachPuff",
            "height_cm" => "2",
            "width_cm" => "45",
            "depth_cm" => "54",
            "weight_gr" => "3",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
