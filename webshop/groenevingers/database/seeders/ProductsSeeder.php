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
        DB::table('products')->insert([
         'api_id' => 1,
         'categorie_id' => 1,
         'name' => 'autem voluptas maxime',
         'description' => 'Omnis voluptatem ut nemo asperiores hic maxime repellendus. Possimus officiis temporibus soluta eos nobis veniam in. Qui eum deserunt beatae odit. Ipsum ex molestias cum rerum.',
         'price' => '331.62',
         'img_src' => 'https://via.placeholder.com/640x480.png/007722?text=corporis',
         'color' => 'MediumPurple',
         'height_cm' => '39',
         'width_cm' => '25',
         'depth_cm' => '11',
         'weight_gr' => '31',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 2,
         'categorie_id' => 1,
         'name' => 'minus suscipit omnis',
         'description' => 'Deleniti veniam unde quod ducimus. Blanditiis nesciunt eaque est distinctio sunt. Et aut sequi perspiciatis qui tempora.',
         'price' => '151.53',
         'img_src' => 'https://via.placeholder.com/640x480.png/0033cc?text=quae',
         'color' => 'MidnightBlue',
         'height_cm' => '27',
         'width_cm' => '70',
         'depth_cm' => '14',
         'weight_gr' => '37',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 3,
         'categorie_id' => 1,
         'name' => 'eaque consequuntur repellat',
         'description' => 'Nihil et exercitationem doloremque molestiae perspiciatis perspiciatis. Sed repellat harum distinctio est autem rem. Asperiores in aut vel aspernatur sed. Illum ut quas dignissimos nam.',
         'price' => '642.87',
         'img_src' => 'https://via.placeholder.com/640x480.png/00aa66?text=a',
         'color' => 'AntiqueWhite',
         'height_cm' => '57',
         'width_cm' => '98',
         'depth_cm' => '3',
         'weight_gr' => '65',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 4,
         'categorie_id' => 1,
         'name' => 'dolor excepturi quod',
         'description' => 'Eos voluptatem quia alias omnis quis. Aperiam vitae nobis eum quis tempore. Aspernatur laudantium nobis et ipsum. Ducimus occaecati in distinctio molestias omnis ea expedita rerum.',
         'price' => '899.95',
         'img_src' => 'https://via.placeholder.com/640x480.png/00bb00?text=rerum',
         'color' => 'Blue',
         'height_cm' => '3',
         'width_cm' => '73',
         'depth_cm' => '27',
         'weight_gr' => '21',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 5,
         'categorie_id' => 1,
         'name' => 'laudantium voluptatum et',
         'description' => 'Repellat facere odio nisi quaerat. Nihil doloribus rerum consequuntur aperiam aut. A magnam temporibus perferendis ratione atque. Qui at a et illum ratione modi.',
         'price' => '477.36',
         'img_src' => 'https://via.placeholder.com/640x480.png/0011ff?text=sunt',
         'color' => 'SlateBlue',
         'height_cm' => '51',
         'width_cm' => '85',
         'depth_cm' => '55',
         'weight_gr' => '14',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 6,
         'categorie_id' => 1,
         'name' => 'perferendis quia pariatur',
         'description' => 'Qui est commodi beatae dolor incidunt blanditiis ut. Voluptas repellendus odio repellat maxime et quas. Officiis natus fuga molestiae.',
         'price' => '991.04',
         'img_src' => 'https://via.placeholder.com/640x480.png/0077cc?text=deleniti',
         'color' => 'Snow',
         'height_cm' => '6',
         'width_cm' => '79',
         'depth_cm' => '40',
         'weight_gr' => '42',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 7,
         'categorie_id' => 1,
         'name' => 'vero exercitationem numquam',
         'description' => 'Exercitationem id repellendus quo consequuntur ab corporis esse. Molestias ipsam accusantium dolore dicta voluptatem qui dolor. Eaque alias aut ut vero eum.',
         'price' => '945.29',
         'img_src' => 'https://via.placeholder.com/640x480.png/00eecc?text=quo',
         'color' => 'Tan',
         'height_cm' => '38',
         'width_cm' => '34',
         'depth_cm' => '34',
         'weight_gr' => '72',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 8,
         'categorie_id' => 1,
         'name' => 'nisi cupiditate voluptatem',
         'description' => 'Est officia laboriosam excepturi eos et. Ad assumenda voluptatibus explicabo dicta. Tempore temporibus iusto praesentium sequi molestiae mollitia. Illo molestiae vitae qui pariatur quas provident.',
         'price' => '793.39',
         'img_src' => 'https://via.placeholder.com/640x480.png/0044dd?text=et',
         'color' => 'LightYellow',
         'height_cm' => '25',
         'width_cm' => '54',
         'depth_cm' => '72',
         'weight_gr' => '100',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 9,
         'categorie_id' => 1,
         'name' => 'in nihil consequuntur',
         'description' => 'Aut itaque delectus iusto est. Et et voluptate nisi voluptas et. Dolorem qui ut quia modi. Consequatur dolor et ut. Itaque ad accusantium molestiae temporibus omnis iusto deserunt.',
         'price' => '21.70',
         'img_src' => 'https://via.placeholder.com/640x480.png/00ffff?text=ullam',
         'color' => 'DarkOliveGreen',
         'height_cm' => '6',
         'width_cm' => '16',
         'depth_cm' => '8',
         'weight_gr' => '75',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 10,
         'categorie_id' => 1,
         'name' => 'modi quisquam quis',
         'description' => 'Atque autem omnis est ipsa ipsam itaque sint. Voluptas ducimus sapiente qui aut similique.',
         'price' => '720.23',
         'img_src' => 'https://via.placeholder.com/640x480.png/0088aa?text=nihil',
         'color' => 'FireBrick',
         'height_cm' => '83',
         'width_cm' => '74',
         'depth_cm' => '100',
         'weight_gr' => '48',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 11,
         'categorie_id' => 1,
         'name' => 'accusantium tenetur assumenda',
         'description' => 'Ut labore vero rem. Nemo totam temporibus libero voluptas hic possimus. Deleniti veritatis dolorem eum.',
         'price' => '60.94',
         'img_src' => 'https://via.placeholder.com/640x480.png/009988?text=iusto',
         'color' => 'Olive',
         'height_cm' => '10',
         'width_cm' => '44',
         'depth_cm' => '87',
         'weight_gr' => '100',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 12,
         'categorie_id' => 1,
         'name' => 'sint ut facilis',
         'description' => 'Quisquam eum molestias a ut. Voluptas maxime odit voluptatem quisquam reprehenderit. Corporis et tempore fugiat aut dolore.',
         'price' => '300.31',
         'img_src' => 'https://via.placeholder.com/640x480.png/0088ff?text=omnis',
         'color' => 'LightSalmon',
         'height_cm' => '49',
         'width_cm' => '17',
         'depth_cm' => '69',
         'weight_gr' => '46',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 13,
         'categorie_id' => 1,
         'name' => 'enim et quidem',
         'description' => 'Et molestiae eaque dolore aut. Natus nisi omnis quia optio. Soluta provident repudiandae ipsa sunt ut quia.',
         'price' => '203.51',
         'img_src' => 'https://via.placeholder.com/640x480.png/008877?text=dignissimos',
         'color' => 'SeaGreen',
         'height_cm' => '100',
         'width_cm' => '7',
         'depth_cm' => '33',
         'weight_gr' => '51',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 14,
         'categorie_id' => 1,
         'name' => 'praesentium consequatur iure',
         'description' => 'Mollitia nihil officia qui illo est mollitia dolores. Inventore et autem accusantium autem qui recusandae voluptas asperiores. Nostrum voluptate aut ut non. Veritatis dolorem mollitia et eius est.',
         'price' => '27.14',
         'img_src' => 'https://via.placeholder.com/640x480.png/00aa88?text=sit',
         'color' => 'MistyRose',
         'height_cm' => '60',
         'width_cm' => '32',
         'depth_cm' => '100',
         'weight_gr' => '16',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 15,
         'categorie_id' => 1,
         'name' => 'facere accusamus ducimus',
         'description' => 'Non velit veritatis et occaecati et ratione est cupiditate. Exercitationem impedit ut ea eum nulla sit. Vel non voluptatem dolorum harum quis.',
         'price' => '805.15',
         'img_src' => 'https://via.placeholder.com/640x480.png/005500?text=in',
         'color' => 'MidnightBlue',
         'height_cm' => '75',
         'width_cm' => '74',
         'depth_cm' => '81',
         'weight_gr' => '60',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 16,
         'categorie_id' => 1,
         'name' => 'et dolores officia',
         'description' => 'Enim dolor dolorem voluptas beatae aut. Commodi ut adipisci quos ab et quia dolores. Magnam deleniti voluptas sapiente ut laudantium nihil. Accusantium ut eligendi corrupti neque rerum.',
         'price' => '58.71',
         'img_src' => 'https://via.placeholder.com/640x480.png/00aaff?text=at',
         'color' => 'BurlyWood',
         'height_cm' => '18',
         'width_cm' => '56',
         'depth_cm' => '65',
         'weight_gr' => '66',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 17,
         'categorie_id' => 1,
         'name' => 'earum consectetur voluptas',
         'description' => 'Adipisci aliquid reprehenderit debitis quidem ipsam quisquam. Aut nesciunt illum odit voluptatibus et dolorem quo. Velit porro enim maiores impedit. Fuga porro accusamus nemo ut earum illo totam.',
         'price' => '443.10',
         'img_src' => 'https://via.placeholder.com/640x480.png/00ccdd?text=modi',
         'color' => 'Pink',
         'height_cm' => '93',
         'width_cm' => '76',
         'depth_cm' => '40',
         'weight_gr' => '96',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 18,
         'categorie_id' => 1,
         'name' => 'illum occaecati eveniet',
         'description' => 'Esse eum et et velit tenetur quia. Omnis voluptates quibusdam voluptates quo. Magnam non iusto et dignissimos dolorem atque.',
         'price' => '522.56',
         'img_src' => 'https://via.placeholder.com/640x480.png/000077?text=ab',
         'color' => 'Lavender',
         'height_cm' => '63',
         'width_cm' => '17',
         'depth_cm' => '5',
         'weight_gr' => '27',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 19,
         'categorie_id' => 1,
         'name' => 'nihil voluptatem delectus',
         'description' => 'Dolor perspiciatis saepe sunt nam totam possimus. Eveniet cum eius ea accusamus. Possimus eveniet minima et voluptas. Et repellendus iure totam aut.',
         'price' => '277.90',
         'img_src' => 'https://via.placeholder.com/640x480.png/00ee22?text=soluta',
         'color' => 'Purple',
         'height_cm' => '87',
         'width_cm' => '26',
         'depth_cm' => '25',
         'weight_gr' => '77',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 20,
         'categorie_id' => 1,
         'name' => 'quaerat est repellat',
         'description' => 'Eveniet quos enim sapiente. Omnis iure quasi et. Aut pariatur et laudantium et. Ut magni optio aperiam est voluptas repudiandae perferendis. Dolorem vitae ullam magni soluta deleniti nisi magnam.',
         'price' => '920.02',
         'img_src' => 'https://via.placeholder.com/640x480.png/0088aa?text=dolore',
         'color' => 'DarkKhaki',
         'height_cm' => '44',
         'width_cm' => '71',
         'depth_cm' => '15',
         'weight_gr' => '91',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 21,
         'categorie_id' => 1,
         'name' => 'dolores aliquam voluptatibus',
         'description' => 'Doloremque natus nihil tempora ea aliquam. Alias quo est quisquam aperiam fuga ratione. Illum aut nisi voluptas officia. Et voluptatem dolore minima numquam enim.',
         'price' => '198.68',
         'img_src' => 'https://via.placeholder.com/640x480.png/00aa55?text=amet',
         'color' => 'FireBrick',
         'height_cm' => '80',
         'width_cm' => '24',
         'depth_cm' => '80',
         'weight_gr' => '87',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 22,
         'categorie_id' => 1,
         'name' => 'iure et velit',
         'description' => 'Vitae illo ut sed id ullam. Consequuntur nam veritatis fuga hic aperiam consequatur. Nihil omnis aliquid nihil sed labore repellat delectus et. Eveniet ad itaque minus aut.',
         'price' => '161.27',
         'img_src' => 'https://via.placeholder.com/640x480.png/00bbdd?text=dolore',
         'color' => 'LightCyan',
         'height_cm' => '55',
         'width_cm' => '90',
         'depth_cm' => '52',
         'weight_gr' => '56',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 23,
         'categorie_id' => 1,
         'name' => 'cupiditate et veritatis',
         'description' => 'Nihil et optio harum a. Rerum non qui illo perferendis placeat exercitationem omnis voluptatem. Aut est voluptas et consequatur quibusdam. Odit vitae aut aliquam minus velit rerum culpa.',
         'price' => '987.67',
         'img_src' => 'https://via.placeholder.com/640x480.png/005522?text=saepe',
         'color' => 'OldLace',
         'height_cm' => '22',
         'width_cm' => '43',
         'depth_cm' => '72',
         'weight_gr' => '16',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 24,
         'categorie_id' => 1,
         'name' => 'sequi impedit sed',
         'description' => 'Ut libero qui quia quia molestiae dolor. Animi quo repellendus fuga excepturi asperiores. Quos et repellendus officia laborum aliquam repudiandae quibusdam quo.',
         'price' => '717.80',
         'img_src' => 'https://via.placeholder.com/640x480.png/000022?text=recusandae',
         'color' => 'SkyBlue',
         'height_cm' => '94',
         'width_cm' => '8',
         'depth_cm' => '60',
         'weight_gr' => '70',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 25,
         'categorie_id' => 1,
         'name' => 'nesciunt numquam voluptatem',
         'description' => 'Voluptatem autem voluptates architecto iure ex et. Mollitia dolores dolorem voluptates quisquam sit.',
         'price' => '846.90',
         'img_src' => 'https://via.placeholder.com/640x480.png/00ee88?text=vel',
         'color' => 'Navy',
         'height_cm' => '11',
         'width_cm' => '98',
         'depth_cm' => '61',
         'weight_gr' => '72',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 26,
         'categorie_id' => 1,
         'name' => 'accusamus consectetur in',
         'description' => 'Sunt sunt ipsam ipsam culpa. Reiciendis quisquam animi eligendi sint. Ex alias dolorem magni laborum ipsa temporibus possimus.',
         'price' => '193.84',
         'img_src' => 'https://via.placeholder.com/640x480.png/00ee11?text=id',
         'color' => 'BurlyWood',
         'height_cm' => '49',
         'width_cm' => '51',
         'depth_cm' => '78',
         'weight_gr' => '41',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 27,
         'categorie_id' => 1,
         'name' => 'veniam temporibus placeat',
         'description' => 'Libero sequi minus aspernatur nisi aut adipisci cum. Debitis ea illo deserunt odio. Qui hic doloremque doloremque non. Dolores id iusto saepe iste quasi excepturi. Eligendi molestiae et ratione.',
         'price' => '163.17',
         'img_src' => 'https://via.placeholder.com/640x480.png/00cc99?text=nihil',
         'color' => 'Thistle',
         'height_cm' => '77',
         'width_cm' => '5',
         'depth_cm' => '41',
         'weight_gr' => '17',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 28,
         'categorie_id' => 1,
         'name' => 'sed laborum aperiam',
         'description' => 'Ipsum recusandae dolores incidunt saepe laboriosam aliquid. Ut magnam unde aliquid dolores minima ut aut. Aut magni dolorum et. Qui nihil quam ut suscipit et consequatur.',
         'price' => '175.80',
         'img_src' => 'https://via.placeholder.com/640x480.png/006633?text=aut',
         'color' => 'DeepPink',
         'height_cm' => '13',
         'width_cm' => '11',
         'depth_cm' => '79',
         'weight_gr' => '99',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 29,
         'categorie_id' => 1,
         'name' => 'expedita sed nostrum',
         'description' => 'Consequatur excepturi consectetur id occaecati nihil rerum esse illum. Dolorum veritatis id corrupti.',
         'price' => '565.89',
         'img_src' => 'https://via.placeholder.com/640x480.png/000066?text=pariatur',
         'color' => 'SteelBlue',
         'height_cm' => '64',
         'width_cm' => '14',
         'depth_cm' => '70',
         'weight_gr' => '78',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 30,
         'categorie_id' => 1,
         'name' => 'nemo aut amet',
         'description' => 'Consectetur et pariatur atque velit odit reprehenderit. Ratione neque consequuntur dolores aspernatur non hic. Sit illo quibusdam delectus pariatur et.',
         'price' => '460.13',
         'img_src' => 'https://via.placeholder.com/640x480.png/006644?text=minus',
         'color' => 'Crimson',
         'height_cm' => '92',
         'width_cm' => '75',
         'depth_cm' => '43',
         'weight_gr' => '31',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 31,
         'categorie_id' => 1,
         'name' => 'dolorum voluptatibus pariatur',
         'description' => 'Earum distinctio inventore sit suscipit. Minima quos eos illo eligendi assumenda iusto.',
         'price' => '440.41',
         'img_src' => 'https://via.placeholder.com/640x480.png/003355?text=aspernatur',
         'color' => 'LightSlateGray',
         'height_cm' => '64',
         'width_cm' => '77',
         'depth_cm' => '28',
         'weight_gr' => '38',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 32,
         'categorie_id' => 1,
         'name' => 'nostrum dolor labore',
         'description' => 'Est est nam quas omnis. Voluptas est perferendis qui odio et. Sunt aliquid saepe ad. Quos sed qui animi molestiae sit. Necessitatibus nesciunt odio aut non quis exercitationem.',
         'price' => '42.39',
         'img_src' => 'https://via.placeholder.com/640x480.png/00ddaa?text=voluptatem',
         'color' => 'DarkBlue',
         'height_cm' => '83',
         'width_cm' => '94',
         'depth_cm' => '73',
         'weight_gr' => '21',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 33,
         'categorie_id' => 1,
         'name' => 'aut veritatis ut',
         'description' => 'Quam quis ducimus nihil ut doloribus rerum voluptate. Corporis occaecati et dolores non fugit officiis sunt. Dolorem doloremque eligendi ut minima nihil amet.',
         'price' => '231.69',
         'img_src' => 'https://via.placeholder.com/640x480.png/0088ff?text=illum',
         'color' => 'Tan',
         'height_cm' => '53',
         'width_cm' => '74',
         'depth_cm' => '56',
         'weight_gr' => '29',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 34,
         'categorie_id' => 1,
         'name' => 'pariatur vero ut',
         'description' => 'Dicta illum blanditiis quasi necessitatibus recusandae et reiciendis. Aut nihil autem optio pariatur dolorum qui. Quibusdam et rerum beatae repudiandae non odit aut.',
         'price' => '818.66',
         'img_src' => 'https://via.placeholder.com/640x480.png/008899?text=dolor',
         'color' => 'Cornsilk',
         'height_cm' => '9',
         'width_cm' => '89',
         'depth_cm' => '12',
         'weight_gr' => '94',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 35,
         'categorie_id' => 1,
         'name' => 'cumque ipsa in',
         'description' => 'Ratione earum et praesentium sint quisquam minus. Libero consequuntur consequuntur ratione neque culpa. Voluptates nostrum quos mollitia quisquam modi nulla aspernatur.',
         'price' => '132.60',
         'img_src' => 'https://via.placeholder.com/640x480.png/006677?text=est',
         'color' => 'PapayaWhip',
         'height_cm' => '18',
         'width_cm' => '80',
         'depth_cm' => '65',
         'weight_gr' => '77',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 36,
         'categorie_id' => 1,
         'name' => 'voluptatum consequatur sunt',
         'description' => 'Nobis omnis et unde aperiam. Odio quis et alias suscipit et architecto. Labore doloremque libero ipsum consequatur consectetur numquam fugiat sed. Totam quod sed dolorem ipsam tempore reprehenderit.',
         'price' => '726.07',
         'img_src' => 'https://via.placeholder.com/640x480.png/004499?text=et',
         'color' => 'Green',
         'height_cm' => '71',
         'width_cm' => '40',
         'depth_cm' => '63',
         'weight_gr' => '60',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 37,
         'categorie_id' => 1,
         'name' => 'dolore sunt quis',
         'description' => 'Iure voluptas dolorem commodi. Rerum ad iure omnis perspiciatis necessitatibus ad. Illum id modi accusantium veritatis occaecati iure.',
         'price' => '198.63',
         'img_src' => 'https://via.placeholder.com/640x480.png/00bb33?text=dicta',
         'color' => 'GhostWhite',
         'height_cm' => '99',
         'width_cm' => '70',
         'depth_cm' => '34',
         'weight_gr' => '87',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 38,
         'categorie_id' => 1,
         'name' => 'aut architecto vitae',
         'description' => 'Velit veritatis ut nulla ducimus. Qui modi ipsa et ducimus consectetur. Est doloremque dolores expedita est aut.',
         'price' => '860.31',
         'img_src' => 'https://via.placeholder.com/640x480.png/0033bb?text=enim',
         'color' => 'Navy',
         'height_cm' => '43',
         'width_cm' => '35',
         'depth_cm' => '91',
         'weight_gr' => '44',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 39,
         'categorie_id' => 1,
         'name' => 'architecto asperiores nulla',
         'description' => 'Modi sed architecto odit error. Tempora ipsam vel adipisci ut autem sunt. Ducimus cum sit voluptatem esse odit velit fugiat in. Esse doloremque nam molestias est atque voluptas et.',
         'price' => '307.49',
         'img_src' => 'https://via.placeholder.com/640x480.png/00bbdd?text=reprehenderit',
         'color' => 'DarkOliveGreen',
         'height_cm' => '78',
         'width_cm' => '76',
         'depth_cm' => '68',
         'weight_gr' => '30',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 40,
         'categorie_id' => 1,
         'name' => 'consequatur accusantium dolor',
         'description' => 'Corrupti et sint quia consectetur est sunt. Dolores id sed quae iure voluptas. Dolore magni eligendi ea.',
         'price' => '113.21',
         'img_src' => 'https://via.placeholder.com/640x480.png/003355?text=beatae',
         'color' => 'SlateGray',
         'height_cm' => '7',
         'width_cm' => '15',
         'depth_cm' => '1',
         'weight_gr' => '53',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 41,
         'categorie_id' => 1,
         'name' => 'a eius aspernatur',
         'description' => 'Vero quasi ratione consequatur eos ullam nobis. Quidem magnam consequatur sed voluptas corrupti eum numquam voluptas. Sed voluptatem dolorem animi fugit laboriosam.',
         'price' => '743.91',
         'img_src' => 'https://via.placeholder.com/640x480.png/00ee88?text=quam',
         'color' => 'OldLace',
         'height_cm' => '16',
         'width_cm' => '20',
         'depth_cm' => '26',
         'weight_gr' => '40',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 42,
         'categorie_id' => 1,
         'name' => 'temporibus et consectetur',
         'description' => 'Voluptatem quia recusandae voluptas repellat veniam. Rem amet atque non qui rem quaerat. Maiores quibusdam quaerat deserunt a explicabo. Quos similique error perspiciatis laboriosam cum error et.',
         'price' => '530.31',
         'img_src' => 'https://via.placeholder.com/640x480.png/00cc77?text=velit',
         'color' => 'SaddleBrown',
         'height_cm' => '85',
         'width_cm' => '31',
         'depth_cm' => '42',
         'weight_gr' => '78',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 43,
         'categorie_id' => 1,
         'name' => 'iusto porro ad',
         'description' => 'Ut mollitia illum dolor dolor eum. Dicta vero distinctio laborum. Aut est saepe rerum ut ut laborum.',
         'price' => '117.87',
         'img_src' => 'https://via.placeholder.com/640x480.png/000099?text=laborum',
         'color' => 'Gainsboro',
         'height_cm' => '31',
         'width_cm' => '73',
         'depth_cm' => '13',
         'weight_gr' => '34',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 44,
         'categorie_id' => 1,
         'name' => 'delectus tempora reprehenderit',
         'description' => 'Velit omnis at id voluptatem vel hic. Quaerat numquam nulla rerum laborum culpa expedita. Omnis debitis adipisci aliquid aut sit voluptates laborum consequatur.',
         'price' => '896.50',
         'img_src' => 'https://via.placeholder.com/640x480.png/005522?text=animi',
         'color' => 'Bisque',
         'height_cm' => '33',
         'width_cm' => '72',
         'depth_cm' => '66',
         'weight_gr' => '85',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 45,
         'categorie_id' => 1,
         'name' => 'saepe temporibus voluptas',
         'description' => 'Cupiditate aliquam nulla et. Id sed distinctio ut quidem est doloremque quod. Reiciendis quis et repudiandae numquam aut. Perspiciatis non hic provident ea eum eos veritatis.',
         'price' => '557.20',
         'img_src' => 'https://via.placeholder.com/640x480.png/0033ff?text=eveniet',
         'color' => 'PaleVioletRed',
         'height_cm' => '77',
         'width_cm' => '30',
         'depth_cm' => '61',
         'weight_gr' => '64',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 46,
         'categorie_id' => 1,
         'name' => 'facere totam dolore',
         'description' => 'Mollitia veritatis voluptatem possimus nobis consequatur omnis. Ullam error voluptatem ut sit quae cum maiores. Deleniti corporis consequatur qui incidunt dolor ex totam at.',
         'price' => '385.44',
         'img_src' => 'https://via.placeholder.com/640x480.png/00aa00?text=culpa',
         'color' => 'Azure',
         'height_cm' => '57',
         'width_cm' => '18',
         'depth_cm' => '19',
         'weight_gr' => '86',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 47,
         'categorie_id' => 1,
         'name' => 'qui dolores excepturi',
         'description' => 'Repellat cupiditate qui doloribus possimus omnis quidem. Dolorem praesentium nisi numquam in quia. Et tenetur aspernatur omnis.',
         'price' => '553.74',
         'img_src' => 'https://via.placeholder.com/640x480.png/00cc44?text=ab',
         'color' => 'MediumAquaMarine',
         'height_cm' => '83',
         'width_cm' => '73',
         'depth_cm' => '53',
         'weight_gr' => '98',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 48,
         'categorie_id' => 1,
         'name' => 'porro est earum',
         'description' => 'Non odio earum porro architecto. Consectetur doloribus qui occaecati ducimus. Et non aliquid reprehenderit earum suscipit.',
         'price' => '321.54',
         'img_src' => 'https://via.placeholder.com/640x480.png/00ff11?text=provident',
         'color' => 'DimGray',
         'height_cm' => '14',
         'width_cm' => '20',
         'depth_cm' => '25',
         'weight_gr' => '50',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 49,
         'categorie_id' => 1,
         'name' => 'porro laudantium at',
         'description' => 'Commodi cum dolorem voluptatem nemo et. In consequatur natus atque quis at ab. Eligendi explicabo laborum ut omnis.',
         'price' => '843.77',
         'img_src' => 'https://via.placeholder.com/640x480.png/00dd11?text=inventore',
         'color' => 'Silver',
         'height_cm' => '25',
         'width_cm' => '65',
         'depth_cm' => '2',
         'weight_gr' => '88',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        DB::table('products')->insert([
         'api_id' => 50,
         'categorie_id' => 1,
         'name' => 'non earum non',
         'description' => 'Non sed placeat sed atque deserunt id ut consequatur. Qui ex aut est aut soluta. Voluptatibus quia itaque in.',
         'price' => '529.10',
         'img_src' => 'https://via.placeholder.com/640x480.png/005599?text=optio',
         'color' => 'PeachPuff',
         'height_cm' => '2',
         'width_cm' => '45',
         'depth_cm' => '54',
         'weight_gr' => '3',
         'created_at' => Carbon::now(),
         'updated_at' => Carbon::now()
        ]);

        // DB::table('products')->insert([
        //  'api_id' => 51,
        //  'categorie_id' => 1,
        //  'name' => 'distinctio officia mollitia',
        //  'description' => 'Officiis et corporis aliquam quia harum. Rem blanditiis dolorum aperiam eos est harum.',
        //  'price' => '553.88',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa00?text=commodi',
        //  'color' => 'Beige',
        //  'height_cm' => '87',
        //  'width_cm' => '74',
        //  'depth_cm' => '9',
        //  'weight_gr' => '84',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 52,
        //  'categorie_id' => 1,
        //  'name' => 'distinctio recusandae id',
        //  'description' => 'Voluptatem ad rerum vel quia autem debitis quam. Distinctio expedita voluptas veritatis dolorem. Molestiae corrupti repellat autem.',
        //  'price' => '270.37',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011cc?text=neque',
        //  'color' => 'White',
        //  'height_cm' => '32',
        //  'width_cm' => '42',
        //  'depth_cm' => '52',
        //  'weight_gr' => '30',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 53,
        //  'categorie_id' => 1,
        //  'name' => 'et et quas',
        //  'description' => 'Aut ut quasi eum qui harum placeat laboriosam est. Ducimus earum in at necessitatibus maiores modi. Qui et labore tempora fugit autem.',
        //  'price' => '467.53',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ffbb?text=reiciendis',
        //  'color' => 'Chocolate',
        //  'height_cm' => '26',
        //  'width_cm' => '95',
        //  'depth_cm' => '32',
        //  'weight_gr' => '54',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 54,
        //  'categorie_id' => 1,
        //  'name' => 'ipsum ea natus',
        //  'description' => 'Laudantium rerum omnis voluptates et quisquam. Magnam odit quas neque exercitationem laudantium. Ullam consectetur tempore eum quia quisquam libero. Unde magnam autem est et.',
        //  'price' => '903.00',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007733?text=nobis',
        //  'color' => 'SlateGray',
        //  'height_cm' => '40',
        //  'width_cm' => '24',
        //  'depth_cm' => '87',
        //  'weight_gr' => '58',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 55,
        //  'categorie_id' => 1,
        //  'name' => 'autem totam nesciunt',
        //  'description' => 'Eius fugit illo in autem. Id nihil quis dolorem et. Earum et omnis non ut enim est soluta. Vero porro delectus tempore et quis et similique.',
        //  'price' => '130.03',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa99?text=eligendi',
        //  'color' => 'MediumAquaMarine',
        //  'height_cm' => '48',
        //  'width_cm' => '9',
        //  'depth_cm' => '45',
        //  'weight_gr' => '44',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 56,
        //  'categorie_id' => 1,
        //  'name' => 'aspernatur recusandae culpa',
        //  'description' => 'Veritatis ab aut nulla hic eius laborum. Perferendis itaque odit cum inventore exercitationem sed. Provident sed dolorum blanditiis omnis ex sit. Quis aliquam ipsum neque quo quas reprehenderit.',
        //  'price' => '402.47',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008877?text=recusandae',
        //  'color' => 'DarkCyan',
        //  'height_cm' => '67',
        //  'width_cm' => '67',
        //  'depth_cm' => '77',
        //  'weight_gr' => '94',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 57,
        //  'categorie_id' => 1,
        //  'name' => 'praesentium occaecati aliquam',
        //  'description' => 'Et et dolor quos sunt fuga aspernatur vel dolore. Quaerat perferendis sapiente repellat occaecati molestiae deleniti id. Quam soluta ad magnam.',
        //  'price' => '596.62',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa99?text=rem',
        //  'color' => 'SpringGreen',
        //  'height_cm' => '54',
        //  'width_cm' => '28',
        //  'depth_cm' => '57',
        //  'weight_gr' => '27',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 58,
        //  'categorie_id' => 1,
        //  'name' => 'rem doloremque ut',
        //  'description' => 'Incidunt maiores alias non enim. In omnis qui sit odit consequatur ut id voluptates. Animi illo dolorem voluptatem quidem. Voluptas quis pariatur ut. Iusto aut quibusdam earum omnis.',
        //  'price' => '900.00',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001111?text=repellat',
        //  'color' => 'Tomato',
        //  'height_cm' => '2',
        //  'width_cm' => '68',
        //  'depth_cm' => '71',
        //  'weight_gr' => '39',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 59,
        //  'categorie_id' => 1,
        //  'name' => 'qui in quis',
        //  'description' => 'Eaque animi modi dolorem consectetur. Consequatur ut sunt adipisci illum. Libero voluptatibus earum sequi cum architecto unde numquam.',
        //  'price' => '183.11',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009911?text=velit',
        //  'color' => 'MintCream',
        //  'height_cm' => '10',
        //  'width_cm' => '37',
        //  'depth_cm' => '76',
        //  'weight_gr' => '90',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 60,
        //  'categorie_id' => 1,
        //  'name' => 'ipsum nemo dicta',
        //  'description' => 'Molestiae quos maxime quia non vel nihil. Laudantium laboriosam sunt voluptas non eos quaerat sunt. Id quisquam omnis autem consequuntur quia sit.',
        //  'price' => '759.97',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011aa?text=rem',
        //  'color' => 'Purple',
        //  'height_cm' => '34',
        //  'width_cm' => '25',
        //  'depth_cm' => '82',
        //  'weight_gr' => '80',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 61,
        //  'categorie_id' => 1,
        //  'name' => 'vitae qui nobis',
        //  'description' => 'Occaecati et non libero ut. Laborum omnis dolorem quis vero quisquam non in. Tenetur at autem sit omnis ex impedit deserunt. Minima quia nobis in sed quis laborum amet possimus.',
        //  'price' => '74.44',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd99?text=voluptatem',
        //  'color' => 'Snow',
        //  'height_cm' => '74',
        //  'width_cm' => '4',
        //  'depth_cm' => '99',
        //  'weight_gr' => '53',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 62,
        //  'categorie_id' => 1,
        //  'name' => 'eveniet vitae dicta',
        //  'description' => 'Quo molestias sed eos ipsam exercitationem repellat. Corporis velit velit labore sed iure numquam rerum iusto. Eveniet tempora quas a quidem. At dolore incidunt pariatur qui at soluta debitis.',
        //  'price' => '929.75',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004488?text=et',
        //  'color' => 'DarkViolet',
        //  'height_cm' => '20',
        //  'width_cm' => '59',
        //  'depth_cm' => '84',
        //  'weight_gr' => '3',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 63,
        //  'categorie_id' => 1,
        //  'name' => 'error est hic',
        //  'description' => 'Molestias incidunt et nobis. Nostrum cupiditate maxime magni nobis aut dolorem. Dicta provident aut fugit neque.',
        //  'price' => '406.35',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa77?text=necessitatibus',
        //  'color' => 'Gainsboro',
        //  'height_cm' => '23',
        //  'width_cm' => '13',
        //  'depth_cm' => '47',
        //  'weight_gr' => '50',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 64,
        //  'categorie_id' => 1,
        //  'name' => 'enim aut dolorum',
        //  'description' => 'Dolor odit perferendis harum omnis beatae esse. Doloremque ratione sed ut voluptatibus assumenda sint. Tempora accusamus blanditiis sunt impedit eligendi animi dicta.',
        //  'price' => '499.52',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff33?text=corporis',
        //  'color' => 'Moccasin',
        //  'height_cm' => '37',
        //  'width_cm' => '67',
        //  'depth_cm' => '62',
        //  'weight_gr' => '33',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 65,
        //  'categorie_id' => 1,
        //  'name' => 'eaque veniam corrupti',
        //  'description' => 'Voluptates qui officia praesentium doloremque. Et odio eaque similique iusto consequatur dolorem mollitia. Praesentium et est ducimus explicabo laboriosam molestias.',
        //  'price' => '791.57',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066aa?text=ut',
        //  'color' => 'Cornsilk',
        //  'height_cm' => '76',
        //  'width_cm' => '15',
        //  'depth_cm' => '35',
        //  'weight_gr' => '84',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 66,
        //  'categorie_id' => 1,
        //  'name' => 'et quos ex',
        //  'description' => 'Vero incidunt molestiae at qui modi totam aperiam. Esse eum itaque consectetur est maiores enim. Aut saepe nesciunt iste exercitationem.',
        //  'price' => '420.10',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa11?text=quasi',
        //  'color' => 'BlueViolet',
        //  'height_cm' => '90',
        //  'width_cm' => '83',
        //  'depth_cm' => '32',
        //  'weight_gr' => '96',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 67,
        //  'categorie_id' => 1,
        //  'name' => 'enim accusantium error',
        //  'description' => 'Aut ullam sunt sit aliquam eius nihil architecto. Omnis numquam impedit rem delectus. Ut rerum blanditiis maxime sit tempore.',
        //  'price' => '436.96',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff33?text=esse',
        //  'color' => 'DarkBlue',
        //  'height_cm' => '37',
        //  'width_cm' => '67',
        //  'depth_cm' => '2',
        //  'weight_gr' => '10',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 68,
        //  'categorie_id' => 1,
        //  'name' => 'quibusdam nesciunt magni',
        //  'description' => 'Dolorem ut labore doloribus quidem voluptas vel distinctio. Rem impedit debitis labore qui.',
        //  'price' => '255.82',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbbb?text=ut',
        //  'color' => 'MistyRose',
        //  'height_cm' => '94',
        //  'width_cm' => '42',
        //  'depth_cm' => '87',
        //  'weight_gr' => '78',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 69,
        //  'categorie_id' => 1,
        //  'name' => 'dolores consequatur est',
        //  'description' => 'Architecto ipsa debitis sit reiciendis possimus magnam. Eum voluptates earum quis rerum. Harum explicabo incidunt quibusdam cum. Iusto sit temporibus et et.',
        //  'price' => '909.28',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007799?text=at',
        //  'color' => 'MediumAquaMarine',
        //  'height_cm' => '73',
        //  'width_cm' => '21',
        //  'depth_cm' => '98',
        //  'weight_gr' => '41',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 70,
        //  'categorie_id' => 1,
        //  'name' => 'assumenda ipsum unde',
        //  'description' => 'Quia voluptatem deleniti sed non. Rem labore accusamus perspiciatis voluptatibus. Ut est aut modi eos harum sint similique. Adipisci earum eaque expedita et.',
        //  'price' => '546.19',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd66?text=nam',
        //  'color' => 'DarkGoldenRod',
        //  'height_cm' => '4',
        //  'width_cm' => '24',
        //  'depth_cm' => '43',
        //  'weight_gr' => '35',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 71,
        //  'categorie_id' => 1,
        //  'name' => 'assumenda provident iusto',
        //  'description' => 'Consequatur et nisi ut doloribus voluptas recusandae qui provident. Amet tenetur nostrum optio est. Et itaque sit voluptatem et. Labore ducimus saepe et et ut et hic.',
        //  'price' => '979.61',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eeaa?text=molestiae',
        //  'color' => 'DarkTurquoise',
        //  'height_cm' => '44',
        //  'width_cm' => '49',
        //  'depth_cm' => '42',
        //  'weight_gr' => '16',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 72,
        //  'categorie_id' => 1,
        //  'name' => 'eum debitis enim',
        //  'description' => 'Provident repellendus qui error. Temporibus ut accusamus consequatur cupiditate quos. Porro eum omnis consectetur hic quaerat.',
        //  'price' => '118.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003377?text=qui',
        //  'color' => 'GhostWhite',
        //  'height_cm' => '47',
        //  'width_cm' => '83',
        //  'depth_cm' => '51',
        //  'weight_gr' => '38',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 73,
        //  'categorie_id' => 1,
        //  'name' => 'ut rerum necessitatibus',
        //  'description' => 'Qui tempora voluptatem sed quo eveniet perferendis deserunt. Laboriosam accusamus velit eos temporibus. Est natus consectetur mollitia qui.',
        //  'price' => '2.37',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000088?text=numquam',
        //  'color' => 'SpringGreen',
        //  'height_cm' => '51',
        //  'width_cm' => '44',
        //  'depth_cm' => '71',
        //  'weight_gr' => '13',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 74,
        //  'categorie_id' => 1,
        //  'name' => 'minus nisi beatae',
        //  'description' => 'Iure culpa non corporis veritatis maxime et. Est veniam explicabo repellat sint. Ab quia beatae quasi. Consequatur quibusdam rerum eos in amet incidunt ut.',
        //  'price' => '797.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066ff?text=provident',
        //  'color' => 'Tan',
        //  'height_cm' => '99',
        //  'width_cm' => '100',
        //  'depth_cm' => '13',
        //  'weight_gr' => '15',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 75,
        //  'categorie_id' => 1,
        //  'name' => 'corrupti fugiat adipisci',
        //  'description' => 'Tempora veritatis facere doloribus magni eos vel autem. Modi culpa ut magni ipsa vitae praesentium. Earum aut eaque possimus eos. Dolorem aperiam adipisci velit cumque.',
        //  'price' => '688.31',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0033dd?text=modi',
        //  'color' => 'NavajoWhite',
        //  'height_cm' => '92',
        //  'width_cm' => '11',
        //  'depth_cm' => '31',
        //  'weight_gr' => '19',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 76,
        //  'categorie_id' => 1,
        //  'name' => 'tenetur quis velit',
        //  'description' => 'Sed aut dicta ut minima cum. Modi cumque in est magni accusantium et. Est vero similique debitis.',
        //  'price' => '211.01',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd66?text=sit',
        //  'color' => 'Lavender',
        //  'height_cm' => '98',
        //  'width_cm' => '99',
        //  'depth_cm' => '1',
        //  'weight_gr' => '86',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 77,
        //  'categorie_id' => 1,
        //  'name' => 'nihil quaerat tempore',
        //  'description' => 'Autem dignissimos rerum sed possimus. Sit est consequatur quis autem nostrum voluptatem est deserunt. Dolorum omnis distinctio est quos ut omnis.',
        //  'price' => '75.57',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004411?text=et',
        //  'color' => 'ForestGreen',
        //  'height_cm' => '18',
        //  'width_cm' => '20',
        //  'depth_cm' => '85',
        //  'weight_gr' => '58',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 78,
        //  'categorie_id' => 1,
        //  'name' => 'eum dicta aliquam',
        //  'description' => 'Laudantium perferendis sed aut qui tempore. Facere earum ea optio ut atque autem ut quo. Quis est expedita quia minima est.',
        //  'price' => '30.73',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008877?text=laboriosam',
        //  'color' => 'RosyBrown',
        //  'height_cm' => '60',
        //  'width_cm' => '18',
        //  'depth_cm' => '51',
        //  'weight_gr' => '35',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 79,
        //  'categorie_id' => 1,
        //  'name' => 'distinctio eum quo',
        //  'description' => 'A voluptates fugit magnam nobis nulla laboriosam veniam. Minima voluptatibus in placeat aut aut amet. Occaecati impedit porro vero voluptate assumenda.',
        //  'price' => '470.93',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007788?text=provident',
        //  'color' => 'MediumOrchid',
        //  'height_cm' => '13',
        //  'width_cm' => '83',
        //  'depth_cm' => '67',
        //  'weight_gr' => '73',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 80,
        //  'categorie_id' => 1,
        //  'name' => 'iste minima qui',
        //  'description' => 'Ipsa optio incidunt molestiae veritatis maiores ipsa. Enim atque magnam in voluptatum eius. Itaque laborum aut voluptate iure aperiam voluptatem. Aut quaerat porro sequi rerum.',
        //  'price' => '391.71',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff88?text=molestiae',
        //  'color' => 'SkyBlue',
        //  'height_cm' => '49',
        //  'width_cm' => '52',
        //  'depth_cm' => '65',
        //  'weight_gr' => '42',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 81,
        //  'categorie_id' => 1,
        //  'name' => 'perferendis et qui',
        //  'description' => 'Est ipsa necessitatibus praesentium. At rerum ea aspernatur molestiae officiis. Rem assumenda explicabo eum. Et veniam blanditiis eos mollitia.',
        //  'price' => '526.65',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff44?text=consequatur',
        //  'color' => 'Azure',
        //  'height_cm' => '100',
        //  'width_cm' => '69',
        //  'depth_cm' => '100',
        //  'weight_gr' => '68',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 82,
        //  'categorie_id' => 1,
        //  'name' => 'minus et necessitatibus',
        //  'description' => 'Dignissimos atque quidem reprehenderit praesentium. Quidem perferendis quasi quia incidunt id ratione nesciunt. Quae iusto et et. A voluptatem nobis fuga esse repudiandae dolores ut.',
        //  'price' => '819.15',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000011?text=et',
        //  'color' => 'MediumOrchid',
        //  'height_cm' => '9',
        //  'width_cm' => '49',
        //  'depth_cm' => '36',
        //  'weight_gr' => '30',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 83,
        //  'categorie_id' => 1,
        //  'name' => 'sequi saepe ducimus',
        //  'description' => 'Quas soluta cum sunt sunt in. Dolorem repellendus sunt est dolores nemo. Inventore excepturi id accusamus distinctio voluptatem officiis aliquam iure. Et dolor et iusto aliquam porro excepturi quis.',
        //  'price' => '330.37',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009955?text=similique',
        //  'color' => 'MediumSeaGreen',
        //  'height_cm' => '36',
        //  'width_cm' => '42',
        //  'depth_cm' => '34',
        //  'weight_gr' => '7',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 84,
        //  'categorie_id' => 1,
        //  'name' => 'optio laudantium voluptate',
        //  'description' => 'Sunt odit accusamus quo. Eaque repudiandae aut distinctio aut. Vel recusandae culpa qui minima in.',
        //  'price' => '512.70',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077cc?text=autem',
        //  'color' => 'DeepPink',
        //  'height_cm' => '61',
        //  'width_cm' => '47',
        //  'depth_cm' => '67',
        //  'weight_gr' => '70',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 85,
        //  'categorie_id' => 1,
        //  'name' => 'amet fugiat culpa',
        //  'description' => 'Officiis nisi voluptatem temporibus ipsam magnam animi. Sit perferendis dolor est sunt asperiores. Quo quibusdam voluptas deserunt ab.',
        //  'price' => '987.69',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002288?text=inventore',
        //  'color' => 'Gray',
        //  'height_cm' => '31',
        //  'width_cm' => '22',
        //  'depth_cm' => '73',
        //  'weight_gr' => '45',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 86,
        //  'categorie_id' => 1,
        //  'name' => 'molestiae voluptatum sunt',
        //  'description' => 'Esse consequatur architecto facere quis et tenetur non quis. Ea libero eos iusto enim. Ab dicta qui sit harum aliquam.',
        //  'price' => '710.14',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ddff?text=sit',
        //  'color' => 'Yellow',
        //  'height_cm' => '52',
        //  'width_cm' => '51',
        //  'depth_cm' => '4',
        //  'weight_gr' => '37',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 87,
        //  'categorie_id' => 1,
        //  'name' => 'nobis atque delectus',
        //  'description' => 'Ipsum laborum aliquid illum similique ea necessitatibus qui. Et eius perspiciatis sit velit quisquam blanditiis. Aut omnis ad voluptatibus rerum voluptatem aut ea.',
        //  'price' => '652.29',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0099dd?text=ut',
        //  'color' => 'Thistle',
        //  'height_cm' => '89',
        //  'width_cm' => '9',
        //  'depth_cm' => '91',
        //  'weight_gr' => '83',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 88,
        //  'categorie_id' => 1,
        //  'name' => 'sit soluta optio',
        //  'description' => 'Cupiditate dicta voluptatem voluptatem natus ex sint fuga eos. Ipsam pariatur placeat voluptas corrupti voluptate. Eos hic dicta doloribus dolores. Ut sit fugit aliquid voluptas culpa voluptas.',
        //  'price' => '673.30',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004499?text=consequatur',
        //  'color' => 'MediumBlue',
        //  'height_cm' => '33',
        //  'width_cm' => '6',
        //  'depth_cm' => '6',
        //  'weight_gr' => '17',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 89,
        //  'categorie_id' => 1,
        //  'name' => 'magni reiciendis consectetur',
        //  'description' => 'Reiciendis voluptatem in nesciunt ea officia dolor nulla. Quia facilis fugiat ut repudiandae. Recusandae consectetur nihil velit consequuntur.',
        //  'price' => '558.64',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077ee?text=vero',
        //  'color' => 'LightCoral',
        //  'height_cm' => '1',
        //  'width_cm' => '18',
        //  'depth_cm' => '13',
        //  'weight_gr' => '77',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 90,
        //  'categorie_id' => 1,
        //  'name' => 'qui voluptates quam',
        //  'description' => 'Ea at sed exercitationem qui culpa maiores explicabo fugiat. Ad ipsum consequatur iusto dignissimos iure numquam rerum debitis.',
        //  'price' => '919.94',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088aa?text=non',
        //  'color' => 'PaleVioletRed',
        //  'height_cm' => '95',
        //  'width_cm' => '43',
        //  'depth_cm' => '88',
        //  'weight_gr' => '50',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 91,
        //  'categorie_id' => 1,
        //  'name' => 'alias porro fugit',
        //  'description' => 'Cumque vitae nobis velit a et magnam dolorem. Ex et fuga numquam mollitia. Cumque et rem ratione.',
        //  'price' => '232.58',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001155?text=omnis',
        //  'color' => 'SlateGray',
        //  'height_cm' => '53',
        //  'width_cm' => '48',
        //  'depth_cm' => '7',
        //  'weight_gr' => '46',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 92,
        //  'categorie_id' => 1,
        //  'name' => 'at ut voluptatem',
        //  'description' => 'Minima dolore autem et nesciunt. Qui vel nemo aut aut dicta qui autem. Qui natus et voluptates enim veritatis est.',
        //  'price' => '946.09',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004444?text=ex',
        //  'color' => 'LightSkyBlue',
        //  'height_cm' => '4',
        //  'width_cm' => '42',
        //  'depth_cm' => '11',
        //  'weight_gr' => '58',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 93,
        //  'categorie_id' => 1,
        //  'name' => 'est ducimus earum',
        //  'description' => 'Amet recusandae provident sed est a quas labore aut. Et quo quo voluptatem omnis molestiae enim. Corrupti dolorem aut quia corporis numquam.',
        //  'price' => '716.20',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022cc?text=dolor',
        //  'color' => 'IndianRed',
        //  'height_cm' => '65',
        //  'width_cm' => '61',
        //  'depth_cm' => '77',
        //  'weight_gr' => '40',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 94,
        //  'categorie_id' => 1,
        //  'name' => 'quia nesciunt eos',
        //  'description' => 'Saepe vel cumque ad rem. Eaque eligendi nihil sapiente sed molestias fugit eligendi. Ut sit expedita corporis molestiae quasi sit.',
        //  'price' => '606.57',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009900?text=non',
        //  'color' => 'DarkSlateGray',
        //  'height_cm' => '9',
        //  'width_cm' => '86',
        //  'depth_cm' => '20',
        //  'weight_gr' => '16',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 95,
        //  'categorie_id' => 1,
        //  'name' => 'consequatur impedit voluptatem',
        //  'description' => 'Minus velit quis repellendus cum blanditiis. Minima quo modi quam sit esse libero. Eligendi cupiditate aut eius sequi et. Velit quibusdam sit voluptatum ut repudiandae porro veritatis.',
        //  'price' => '499.25',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eedd?text=iure',
        //  'color' => 'LightSteelBlue',
        //  'height_cm' => '66',
        //  'width_cm' => '97',
        //  'depth_cm' => '81',
        //  'weight_gr' => '25',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 96,
        //  'categorie_id' => 1,
        //  'name' => 'similique adipisci animi',
        //  'description' => 'Animi adipisci vero deserunt ea. Perspiciatis et incidunt reprehenderit quaerat minus labore qui similique. Laboriosam quo eius quod non. Nobis deleniti enim quia consectetur in.',
        //  'price' => '208.35',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc66?text=rerum',
        //  'color' => 'MediumOrchid',
        //  'height_cm' => '12',
        //  'width_cm' => '30',
        //  'depth_cm' => '81',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 97,
        //  'categorie_id' => 1,
        //  'name' => 'voluptas quibusdam qui',
        //  'description' => 'Iusto nemo totam quo corrupti quaerat. Laudantium officiis illo est non exercitationem. Iusto qui culpa nulla enim.',
        //  'price' => '235.17',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbee?text=enim',
        //  'color' => 'PaleGoldenRod',
        //  'height_cm' => '62',
        //  'width_cm' => '18',
        //  'depth_cm' => '69',
        //  'weight_gr' => '26',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 98,
        //  'categorie_id' => 1,
        //  'name' => 'beatae et rerum',
        //  'description' => 'Ut repudiandae quia modi deserunt quibusdam molestiae. Reprehenderit veritatis natus sit fugiat et sed. Assumenda quod et dolorem qui vel. Vel dolor quia non magnam officiis.',
        //  'price' => '244.13',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008822?text=sed',
        //  'color' => 'Black',
        //  'height_cm' => '5',
        //  'width_cm' => '61',
        //  'depth_cm' => '10',
        //  'weight_gr' => '77',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 99,
        //  'categorie_id' => 1,
        //  'name' => 'molestiae unde magni',
        //  'description' => 'Sit doloribus eum sed et dolores ipsa a. Recusandae occaecati quod autem voluptas iste sit ipsa. Neque possimus eum ducimus eos.',
        //  'price' => '64.92',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009922?text=iste',
        //  'color' => 'MintCream',
        //  'height_cm' => '95',
        //  'width_cm' => '52',
        //  'depth_cm' => '29',
        //  'weight_gr' => '18',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 100,
        //  'categorie_id' => 1,
        //  'name' => 'aspernatur error commodi',
        //  'description' => 'Id error sequi officiis est. Perferendis vel qui illum perferendis ut laudantium. Repellat libero omnis vel non quasi qui sunt.',
        //  'price' => '172.36',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa33?text=dolorem',
        //  'color' => 'Plum',
        //  'height_cm' => '7',
        //  'width_cm' => '89',
        //  'depth_cm' => '79',
        //  'weight_gr' => '36',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 101,
        //  'categorie_id' => 1,
        //  'name' => 'facilis et aut',
        //  'description' => 'Dolore dolor esse architecto ut ut voluptas. Ipsa voluptatem voluptate nobis consequatur quia non sed. Optio dolorem non sit cumque tempora.',
        //  'price' => '38.06',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000044?text=amet',
        //  'color' => 'Maroon',
        //  'height_cm' => '71',
        //  'width_cm' => '53',
        //  'depth_cm' => '14',
        //  'weight_gr' => '70',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 102,
        //  'categorie_id' => 1,
        //  'name' => 'neque quos molestiae',
        //  'description' => 'Voluptas placeat qui dolorum aut. At nulla consectetur incidunt voluptas perferendis est. Libero qui maxime placeat est dolorum. Voluptas hic ullam autem molestiae.',
        //  'price' => '50.84',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0099cc?text=perferendis',
        //  'color' => 'BlueViolet',
        //  'height_cm' => '48',
        //  'width_cm' => '14',
        //  'depth_cm' => '17',
        //  'weight_gr' => '95',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 103,
        //  'categorie_id' => 1,
        //  'name' => 'sint quia fugit',
        //  'description' => 'Non fuga aut omnis qui eaque numquam nihil. Dolorem non aut modi voluptas aut modi.',
        //  'price' => '702.72',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003355?text=laborum',
        //  'color' => 'MistyRose',
        //  'height_cm' => '60',
        //  'width_cm' => '83',
        //  'depth_cm' => '98',
        //  'weight_gr' => '10',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 104,
        //  'categorie_id' => 1,
        //  'name' => 'occaecati corporis vel',
        //  'description' => 'Cumque natus minus dolor quia maiores quidem unde. Minima autem ut quod officia laboriosam voluptas ut.',
        //  'price' => '750.80',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ddbb?text=illo',
        //  'color' => 'Silver',
        //  'height_cm' => '28',
        //  'width_cm' => '86',
        //  'depth_cm' => '95',
        //  'weight_gr' => '20',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 105,
        //  'categorie_id' => 1,
        //  'name' => 'animi consequuntur sit',
        //  'description' => 'Est minima neque dolores vel. Voluptas saepe aliquid qui iure ex error inventore. Ut enim ratione quos eaque voluptas dolores. Delectus sed consequatur corrupti asperiores aliquid.',
        //  'price' => '866.64',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb77?text=veritatis',
        //  'color' => 'Magenta',
        //  'height_cm' => '91',
        //  'width_cm' => '15',
        //  'depth_cm' => '48',
        //  'weight_gr' => '21',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 106,
        //  'categorie_id' => 1,
        //  'name' => 'voluptatem aut ea',
        //  'description' => 'Quisquam est quia officia molestiae iste. Quasi repellat sunt adipisci dicta voluptas officia eius ipsam. Quos dolorum dignissimos quod at vitae et. Ipsam eum et non enim.',
        //  'price' => '542.04',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022ff?text=saepe',
        //  'color' => 'PaleVioletRed',
        //  'height_cm' => '18',
        //  'width_cm' => '93',
        //  'depth_cm' => '8',
        //  'weight_gr' => '34',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 107,
        //  'categorie_id' => 1,
        //  'name' => 'distinctio iure quis',
        //  'description' => 'Reiciendis et eum voluptatum velit. Nihil est veritatis eligendi soluta quo.',
        //  'price' => '122.47',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088cc?text=sed',
        //  'color' => 'Magenta',
        //  'height_cm' => '55',
        //  'width_cm' => '59',
        //  'depth_cm' => '81',
        //  'weight_gr' => '1',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 108,
        //  'categorie_id' => 1,
        //  'name' => 'sint nulla non',
        //  'description' => 'Qui doloribus et adipisci possimus atque eligendi. Placeat maxime nesciunt quasi eos. Minus voluptas dolorem est cum dolores. Consequatur nesciunt magnam id.',
        //  'price' => '729.56',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff99?text=tempora',
        //  'color' => 'SkyBlue',
        //  'height_cm' => '89',
        //  'width_cm' => '45',
        //  'depth_cm' => '72',
        //  'weight_gr' => '55',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 109,
        //  'categorie_id' => 1,
        //  'name' => 'expedita sit odit',
        //  'description' => 'Nisi quo ipsam impedit suscipit deleniti. Inventore ut deleniti officia dolores et consequatur. Fuga eveniet quod animi sapiente. Reiciendis recusandae aperiam qui dolore.',
        //  'price' => '828.23',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000011?text=ut',
        //  'color' => 'Cyan',
        //  'height_cm' => '43',
        //  'width_cm' => '9',
        //  'depth_cm' => '77',
        //  'weight_gr' => '2',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 110,
        //  'categorie_id' => 1,
        //  'name' => 'molestias nobis odit',
        //  'description' => 'Beatae laboriosam voluptatem quis. Unde est porro officiis officia. Dolorem alias veritatis eum quasi voluptatem provident. Repellendus aspernatur ea ad ducimus. Est et aut perspiciatis voluptates.',
        //  'price' => '165.16',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000044?text=dolorem',
        //  'color' => 'LightGreen',
        //  'height_cm' => '67',
        //  'width_cm' => '48',
        //  'depth_cm' => '49',
        //  'weight_gr' => '38',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 111,
        //  'categorie_id' => 1,
        //  'name' => 'et dignissimos fugit',
        //  'description' => 'Ea reprehenderit ea sed expedita quo nesciunt expedita doloribus. Iste eos officiis delectus est. Incidunt cum corrupti et.',
        //  'price' => '646.96',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000077?text=eos',
        //  'color' => 'AntiqueWhite',
        //  'height_cm' => '27',
        //  'width_cm' => '77',
        //  'depth_cm' => '13',
        //  'weight_gr' => '70',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 112,
        //  'categorie_id' => 1,
        //  'name' => 'praesentium quos velit',
        //  'description' => 'Ea praesentium repudiandae fuga ratione aut. Sit in officiis illo aut numquam minus architecto tempora.',
        //  'price' => '363.65',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008899?text=deleniti',
        //  'color' => 'MediumSeaGreen',
        //  'height_cm' => '72',
        //  'width_cm' => '85',
        //  'depth_cm' => '67',
        //  'weight_gr' => '79',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 113,
        //  'categorie_id' => 1,
        //  'name' => 'tempore optio sint',
        //  'description' => 'Animi ut sapiente facilis porro dicta voluptatem nihil. Saepe iure perferendis autem dignissimos sed. Omnis consequuntur quasi commodi.',
        //  'price' => '61.67',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003344?text=et',
        //  'color' => 'SteelBlue',
        //  'height_cm' => '88',
        //  'width_cm' => '77',
        //  'depth_cm' => '31',
        //  'weight_gr' => '13',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 114,
        //  'categorie_id' => 1,
        //  'name' => 'dolorem iusto voluptas',
        //  'description' => 'Sint dolor perferendis libero aliquid in. Enim ratione in aspernatur molestiae. Saepe accusantium neque expedita cumque ea deleniti tempora. Saepe autem tempore in sapiente.',
        //  'price' => '163.26',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011ee?text=dolorum',
        //  'color' => 'SlateGray',
        //  'height_cm' => '18',
        //  'width_cm' => '35',
        //  'depth_cm' => '6',
        //  'weight_gr' => '79',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 115,
        //  'categorie_id' => 1,
        //  'name' => 'voluptatem officia ipsam',
        //  'description' => 'Ipsum iste recusandae architecto laborum. Molestias quos vitae aut ut facilis est hic. Qui eius sunt ea quae id ut.',
        //  'price' => '883.27',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aaff?text=et',
        //  'color' => 'Gray',
        //  'height_cm' => '51',
        //  'width_cm' => '59',
        //  'depth_cm' => '50',
        //  'weight_gr' => '82',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 116,
        //  'categorie_id' => 1,
        //  'name' => 'aut explicabo occaecati',
        //  'description' => 'Laborum eum et dolorem dolorem. Quibusdam illum cum nulla in recusandae. Non ab deserunt culpa magni qui. Laboriosam et id sit laborum quod hic sapiente.',
        //  'price' => '497.49',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa44?text=rem',
        //  'color' => 'CadetBlue',
        //  'height_cm' => '90',
        //  'width_cm' => '95',
        //  'depth_cm' => '1',
        //  'weight_gr' => '55',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 117,
        //  'categorie_id' => 1,
        //  'name' => 'aperiam quam explicabo',
        //  'description' => 'Assumenda voluptas assumenda labore corporis eaque eligendi. Cumque esse magni rerum dicta. Maiores sunt velit incidunt et qui eum molestiae debitis.',
        //  'price' => '47.55',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077ff?text=ipsum',
        //  'color' => 'Chocolate',
        //  'height_cm' => '42',
        //  'width_cm' => '95',
        //  'depth_cm' => '9',
        //  'weight_gr' => '58',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 118,
        //  'categorie_id' => 1,
        //  'name' => 'qui et iure',
        //  'description' => 'Expedita quod quia aut occaecati amet necessitatibus deserunt veniam. Culpa non sed ex nostrum animi. Distinctio aut neque est vitae voluptates et.',
        //  'price' => '105.42',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbdd?text=animi',
        //  'color' => 'Orchid',
        //  'height_cm' => '33',
        //  'width_cm' => '72',
        //  'depth_cm' => '51',
        //  'weight_gr' => '75',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 119,
        //  'categorie_id' => 1,
        //  'name' => 'ex tenetur placeat',
        //  'description' => 'Incidunt dolores omnis sit similique dolore odio qui. Dignissimos molestias illo nobis optio. Saepe esse excepturi asperiores illum. Qui hic enim facere velit commodi blanditiis.',
        //  'price' => '269.36',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ccdd?text=quis',
        //  'color' => 'DarkSalmon',
        //  'height_cm' => '28',
        //  'width_cm' => '47',
        //  'depth_cm' => '39',
        //  'weight_gr' => '51',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 120,
        //  'categorie_id' => 1,
        //  'name' => 'id voluptatem ullam',
        //  'description' => 'Natus quis ut nam nisi blanditiis est cum. Ut enim eos impedit dolorem velit aut et.',
        //  'price' => '141.52',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004433?text=voluptates',
        //  'color' => 'Moccasin',
        //  'height_cm' => '12',
        //  'width_cm' => '30',
        //  'depth_cm' => '49',
        //  'weight_gr' => '84',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 121,
        //  'categorie_id' => 1,
        //  'name' => 'excepturi repellendus quia',
        //  'description' => 'Voluptatem perferendis qui est perferendis maxime. Voluptatem aut mollitia velit voluptas nihil rerum harum. Est ut quia sed voluptas et consectetur.',
        //  'price' => '666.80',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005522?text=eos',
        //  'color' => 'Bisque',
        //  'height_cm' => '47',
        //  'width_cm' => '29',
        //  'depth_cm' => '50',
        //  'weight_gr' => '84',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 122,
        //  'categorie_id' => 1,
        //  'name' => 'et ut quos',
        //  'description' => 'Vero nam dolorem est et. Libero a sed sequi. Dolores soluta maxime asperiores. Ipsam quam voluptatibus inventore quasi velit illo quasi est.',
        //  'price' => '981.24',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007711?text=qui',
        //  'color' => 'Chartreuse',
        //  'height_cm' => '74',
        //  'width_cm' => '85',
        //  'depth_cm' => '9',
        //  'weight_gr' => '20',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 123,
        //  'categorie_id' => 1,
        //  'name' => 'aliquid at atque',
        //  'description' => 'Vero odio dolor cum reiciendis placeat. Pariatur est officia quas voluptas culpa. Aut facilis veritatis dolore accusantium.',
        //  'price' => '662.71',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000044?text=sunt',
        //  'color' => 'Orchid',
        //  'height_cm' => '79',
        //  'width_cm' => '67',
        //  'depth_cm' => '42',
        //  'weight_gr' => '16',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 124,
        //  'categorie_id' => 1,
        //  'name' => 'corrupti voluptatem et',
        //  'description' => 'Nihil eius debitis provident accusamus quia doloremque in. Accusamus aut quia maxime corrupti. Nemo et minus adipisci assumenda rerum dolorum ut voluptatem.',
        //  'price' => '579.99',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa88?text=aut',
        //  'color' => 'LightSeaGreen',
        //  'height_cm' => '38',
        //  'width_cm' => '86',
        //  'depth_cm' => '59',
        //  'weight_gr' => '59',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 125,
        //  'categorie_id' => 1,
        //  'name' => 'ratione qui nam',
        //  'description' => 'Harum in quo dolore quia commodi commodi. Est unde sed nisi consequatur. Iusto omnis beatae sit odio. Sed natus quam ut.',
        //  'price' => '246.03',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001122?text=reiciendis',
        //  'color' => 'Gold',
        //  'height_cm' => '84',
        //  'width_cm' => '8',
        //  'depth_cm' => '98',
        //  'weight_gr' => '26',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 126,
        //  'categorie_id' => 1,
        //  'name' => 'ea minima quis',
        //  'description' => 'Rerum dicta illum et debitis sed rerum consequatur. Sed neque voluptatem minima explicabo. Est alias dolorum impedit et. Minima et dolorem qui deleniti.',
        //  'price' => '636.61',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff33?text=eligendi',
        //  'color' => 'Teal',
        //  'height_cm' => '22',
        //  'width_cm' => '10',
        //  'depth_cm' => '77',
        //  'weight_gr' => '17',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 127,
        //  'categorie_id' => 1,
        //  'name' => 'beatae aliquam libero',
        //  'description' => 'Tempora et a sunt sunt. Eius ut quo vero ipsum. Culpa dolores accusamus quas dolore. Nostrum in quia eos et nesciunt rerum dolores nam.',
        //  'price' => '993.09',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eebb?text=quas',
        //  'color' => 'MidnightBlue',
        //  'height_cm' => '28',
        //  'width_cm' => '68',
        //  'depth_cm' => '31',
        //  'weight_gr' => '83',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 128,
        //  'categorie_id' => 1,
        //  'name' => 'optio commodi non',
        //  'description' => 'Repellendus doloremque dignissimos vel aut ab et distinctio. Ea et qui veritatis assumenda.',
        //  'price' => '352.69',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd11?text=quos',
        //  'color' => 'Turquoise',
        //  'height_cm' => '4',
        //  'width_cm' => '31',
        //  'depth_cm' => '63',
        //  'weight_gr' => '92',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 129,
        //  'categorie_id' => 1,
        //  'name' => 'ut qui explicabo',
        //  'description' => 'Eos laudantium laborum magnam dolore animi commodi sed. Assumenda animi harum beatae eum. Hic consequatur ad alias qui facilis illum. Vero inventore nostrum vel vel voluptas consequuntur ut.',
        //  'price' => '450.69',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000033?text=est',
        //  'color' => 'LightSlateGray',
        //  'height_cm' => '93',
        //  'width_cm' => '70',
        //  'depth_cm' => '71',
        //  'weight_gr' => '37',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 130,
        //  'categorie_id' => 1,
        //  'name' => 'odit repellat rerum',
        //  'description' => 'Dicta nam quibusdam accusantium porro harum dolorem sit. Quos molestiae suscipit deleniti dolor numquam qui. Earum quo sequi occaecati eius et quos. Ea consequatur sunt ipsum enim voluptatibus omnis.',
        //  'price' => '297.08',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003333?text=perspiciatis',
        //  'color' => 'SaddleBrown',
        //  'height_cm' => '34',
        //  'width_cm' => '40',
        //  'depth_cm' => '91',
        //  'weight_gr' => '32',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 131,
        //  'categorie_id' => 1,
        //  'name' => 'natus est aperiam',
        //  'description' => 'Voluptatem laborum voluptas eum. Aut ducimus quis eum libero blanditiis consequuntur. Eligendi atque molestiae tempore labore.',
        //  'price' => '884.54',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0099bb?text=sed',
        //  'color' => 'AliceBlue',
        //  'height_cm' => '80',
        //  'width_cm' => '48',
        //  'depth_cm' => '67',
        //  'weight_gr' => '10',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 132,
        //  'categorie_id' => 1,
        //  'name' => 'reiciendis incidunt sint',
        //  'description' => 'Sit nam quia sit corporis explicabo fugiat. Corporis accusamus quis laborum est eius optio aspernatur. Et odit sunt quam esse eos. Voluptas provident quis est rerum dicta.',
        //  'price' => '120.06',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dddd?text=eum',
        //  'color' => 'Magenta',
        //  'height_cm' => '32',
        //  'width_cm' => '28',
        //  'depth_cm' => '13',
        //  'weight_gr' => '18',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 133,
        //  'categorie_id' => 1,
        //  'name' => 'voluptatem nesciunt voluptatem',
        //  'description' => 'Porro autem praesentium blanditiis ea sit sit impedit. Deleniti nam fugiat qui. Commodi doloribus nihil ab quos culpa cum. Atque earum autem eligendi. Aperiam et eos consequatur dolor iste.',
        //  'price' => '985.58',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002277?text=ab',
        //  'color' => 'DarkOliveGreen',
        //  'height_cm' => '11',
        //  'width_cm' => '6',
        //  'depth_cm' => '90',
        //  'weight_gr' => '9',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 134,
        //  'categorie_id' => 1,
        //  'name' => 'possimus ut eius',
        //  'description' => 'Voluptatem quia hic dolores aut laboriosam. Dolorem non blanditiis necessitatibus dolores ut eum earum. Accusamus odit ut excepturi ducimus sequi minus.',
        //  'price' => '545.07',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011ff?text=beatae',
        //  'color' => 'FireBrick',
        //  'height_cm' => '69',
        //  'width_cm' => '46',
        //  'depth_cm' => '25',
        //  'weight_gr' => '76',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 135,
        //  'categorie_id' => 1,
        //  'name' => 'velit dolor sit',
        //  'description' => 'Illum et beatae incidunt quis. Laborum ipsum nostrum est. Et illum velit sint autem. Vel harum molestias illo dolorem cupiditate alias. Natus vel aliquam est illo velit voluptatum cum.',
        //  'price' => '503.69',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066ff?text=iste',
        //  'color' => 'Beige',
        //  'height_cm' => '88',
        //  'width_cm' => '93',
        //  'depth_cm' => '92',
        //  'weight_gr' => '89',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 136,
        //  'categorie_id' => 1,
        //  'name' => 'incidunt rerum non',
        //  'description' => 'Est esse cumque iure amet. Totam reprehenderit suscipit dolores ratione esse.',
        //  'price' => '84.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0044cc?text=voluptatem',
        //  'color' => 'LightGreen',
        //  'height_cm' => '62',
        //  'width_cm' => '100',
        //  'depth_cm' => '59',
        //  'weight_gr' => '84',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 137,
        //  'categorie_id' => 1,
        //  'name' => 'aut ipsa facilis',
        //  'description' => 'Magni voluptatem in quasi nesciunt et corrupti quae nam. Rerum ratione velit nobis explicabo vel. Sit quis in aut nesciunt alias est.',
        //  'price' => '909.92',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb44?text=tenetur',
        //  'color' => 'MintCream',
        //  'height_cm' => '5',
        //  'width_cm' => '52',
        //  'depth_cm' => '34',
        //  'weight_gr' => '29',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 138,
        //  'categorie_id' => 1,
        //  'name' => 'molestiae dignissimos aut',
        //  'description' => 'Assumenda dolorem necessitatibus aut vel. Cum nulla mollitia cumque quo.',
        //  'price' => '350.92',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee33?text=dolorem',
        //  'color' => 'Blue',
        //  'height_cm' => '1',
        //  'width_cm' => '69',
        //  'depth_cm' => '65',
        //  'weight_gr' => '10',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 139,
        //  'categorie_id' => 1,
        //  'name' => 'possimus consectetur et',
        //  'description' => 'Quos numquam aliquid sed voluptate enim voluptatem qui libero. Incidunt vel aut autem quaerat qui ut aut. Illum sunt esse veniam. Rerum maxime nesciunt voluptas provident quibusdam et dignissimos.',
        //  'price' => '807.27',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa00?text=modi',
        //  'color' => 'Blue',
        //  'height_cm' => '13',
        //  'width_cm' => '47',
        //  'depth_cm' => '34',
        //  'weight_gr' => '2',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 140,
        //  'categorie_id' => 1,
        //  'name' => 'quia laudantium deserunt',
        //  'description' => 'Est enim quo nobis aut minima. Aliquam et quia ad. Et optio facilis repudiandae et et. Porro sunt repellat id repellendus et non est.',
        //  'price' => '250.91',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088ff?text=occaecati',
        //  'color' => 'Darkorange',
        //  'height_cm' => '2',
        //  'width_cm' => '5',
        //  'depth_cm' => '94',
        //  'weight_gr' => '20',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 141,
        //  'categorie_id' => 1,
        //  'name' => 'velit magnam minus',
        //  'description' => 'Dolor est porro voluptatem dolorem aspernatur dolorem. Non rerum magnam eum omnis corporis totam aut. Aut quam deserunt ex quae expedita. Doloribus harum voluptates voluptatum esse.',
        //  'price' => '183.51',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0000ff?text=eligendi',
        //  'color' => 'PapayaWhip',
        //  'height_cm' => '64',
        //  'width_cm' => '33',
        //  'depth_cm' => '4',
        //  'weight_gr' => '54',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 142,
        //  'categorie_id' => 1,
        //  'name' => 'velit porro quos',
        //  'description' => 'Omnis enim ut aut veritatis provident. Nulla in reiciendis iste in. Nobis voluptatem ullam quia sed vitae voluptas. Odit magni repellat doloremque voluptatibus.',
        //  'price' => '169.26',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001166?text=deserunt',
        //  'color' => 'Gray',
        //  'height_cm' => '75',
        //  'width_cm' => '83',
        //  'depth_cm' => '93',
        //  'weight_gr' => '17',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 143,
        //  'categorie_id' => 1,
        //  'name' => 'tempora culpa id',
        //  'description' => 'Rem id quia animi et ea. Ipsa dolorum suscipit minima voluptatibus eius pariatur velit. Recusandae laborum eos doloremque omnis deleniti nihil.',
        //  'price' => '175.09',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0000cc?text=incidunt',
        //  'color' => 'Khaki',
        //  'height_cm' => '20',
        //  'width_cm' => '33',
        //  'depth_cm' => '4',
        //  'weight_gr' => '67',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 144,
        //  'categorie_id' => 1,
        //  'name' => 'quidem saepe nobis',
        //  'description' => 'Enim ea totam odio consequuntur iure omnis hic. Nulla nam omnis velit vel consectetur quasi ut. Dicta voluptatibus natus nihil qui veritatis sed.',
        //  'price' => '286.82',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ddcc?text=hic',
        //  'color' => 'CornflowerBlue',
        //  'height_cm' => '79',
        //  'width_cm' => '52',
        //  'depth_cm' => '99',
        //  'weight_gr' => '65',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 145,
        //  'categorie_id' => 1,
        //  'name' => 'excepturi deserunt quia',
        //  'description' => 'Consectetur dignissimos rerum qui sunt aliquam. Impedit quo omnis et. Earum explicabo possimus non quis.',
        //  'price' => '997.87',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002244?text=quisquam',
        //  'color' => 'Turquoise',
        //  'height_cm' => '12',
        //  'width_cm' => '27',
        //  'depth_cm' => '50',
        //  'weight_gr' => '97',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 146,
        //  'categorie_id' => 1,
        //  'name' => 'ipsum unde sunt',
        //  'description' => 'Voluptatem non accusantium voluptates sint voluptatibus qui quos. Molestiae consectetur illo aut consequatur et aliquid. Sunt expedita debitis mollitia ea deleniti voluptates ut.',
        //  'price' => '477.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0044aa?text=amet',
        //  'color' => 'LawnGreen',
        //  'height_cm' => '11',
        //  'width_cm' => '34',
        //  'depth_cm' => '55',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 147,
        //  'categorie_id' => 1,
        //  'name' => 'cum dolorum blanditiis',
        //  'description' => 'Tenetur ducimus voluptatem sed omnis et voluptas. Vel doloremque ut dolor dicta voluptas. Quia et nostrum illum assumenda nemo eligendi odio. Quia quod a quos consequatur.',
        //  'price' => '99.99',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006666?text=doloribus',
        //  'color' => 'LavenderBlush',
        //  'height_cm' => '48',
        //  'width_cm' => '98',
        //  'depth_cm' => '81',
        //  'weight_gr' => '75',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 148,
        //  'categorie_id' => 1,
        //  'name' => 'ipsam dolorem incidunt',
        //  'description' => 'Alias voluptates ullam natus voluptatum accusamus eius. Libero sequi ipsum repellendus nulla.',
        //  'price' => '911.35',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000033?text=aspernatur',
        //  'color' => 'Tomato',
        //  'height_cm' => '100',
        //  'width_cm' => '22',
        //  'depth_cm' => '26',
        //  'weight_gr' => '51',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 149,
        //  'categorie_id' => 1,
        //  'name' => 'aliquid eos repellat',
        //  'description' => 'Deserunt aut quia dolorum voluptatem quia. Qui doloribus nulla aut aliquid. Sapiente esse sit saepe qui et sint. Ut modi est vitae maxime.',
        //  'price' => '397.30',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa44?text=reprehenderit',
        //  'color' => 'PaleTurquoise',
        //  'height_cm' => '68',
        //  'width_cm' => '21',
        //  'depth_cm' => '78',
        //  'weight_gr' => '68',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 150,
        //  'categorie_id' => 1,
        //  'name' => 'mollitia sint eius',
        //  'description' => 'Non voluptatem perspiciatis aperiam expedita quis animi perspiciatis. Possimus consequatur quia suscipit delectus. Ducimus sed velit qui enim.',
        //  'price' => '782.30',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007799?text=tenetur',
        //  'color' => 'GreenYellow',
        //  'height_cm' => '47',
        //  'width_cm' => '82',
        //  'depth_cm' => '4',
        //  'weight_gr' => '91',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 151,
        //  'categorie_id' => 1,
        //  'name' => 'dicta nobis aut',
        //  'description' => 'Et eaque corporis voluptates sint et. Molestiae et libero nam aspernatur minima omnis hic.',
        //  'price' => '636.54',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002200?text=doloremque',
        //  'color' => 'DarkOliveGreen',
        //  'height_cm' => '65',
        //  'width_cm' => '90',
        //  'depth_cm' => '12',
        //  'weight_gr' => '24',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 152,
        //  'categorie_id' => 1,
        //  'name' => 'quam qui nisi',
        //  'description' => 'Autem laborum ipsum et velit debitis reprehenderit omnis. Aut qui delectus consequuntur ut nostrum neque. Delectus voluptatibus officiis et ad aut harum perspiciatis harum.',
        //  'price' => '133.84',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008888?text=consectetur',
        //  'color' => 'LavenderBlush',
        //  'height_cm' => '35',
        //  'width_cm' => '87',
        //  'depth_cm' => '16',
        //  'weight_gr' => '19',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 153,
        //  'categorie_id' => 1,
        //  'name' => 'harum quia sit',
        //  'description' => 'Eum error commodi enim animi est aut modi quidem. Mollitia velit iste et ut quis. Perferendis nam quia consequatur distinctio repudiandae.',
        //  'price' => '534.00',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005511?text=non',
        //  'color' => 'SlateBlue',
        //  'height_cm' => '89',
        //  'width_cm' => '45',
        //  'depth_cm' => '13',
        //  'weight_gr' => '78',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 154,
        //  'categorie_id' => 1,
        //  'name' => 'dolor odio quia',
        //  'description' => 'Ducimus rem voluptatem nobis qui dolorum. Iste velit eius odio vel et dolorem. Optio qui quod voluptatem corrupti ullam.',
        //  'price' => '265.47',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088ff?text=assumenda',
        //  'color' => 'Bisque',
        //  'height_cm' => '86',
        //  'width_cm' => '61',
        //  'depth_cm' => '1',
        //  'weight_gr' => '25',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 155,
        //  'categorie_id' => 1,
        //  'name' => 'sit consequatur ab',
        //  'description' => 'Delectus ducimus eveniet qui. Aut consequatur sit eos. Perferendis velit dignissimos vel est a consequatur ut eligendi.',
        //  'price' => '925.58',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0000dd?text=corrupti',
        //  'color' => 'Thistle',
        //  'height_cm' => '41',
        //  'width_cm' => '16',
        //  'depth_cm' => '85',
        //  'weight_gr' => '81',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 156,
        //  'categorie_id' => 1,
        //  'name' => 'velit et ut',
        //  'description' => 'Nihil dolore quisquam nam ipsum sunt ipsa veritatis totam. Laudantium quia et accusantium provident reiciendis. Est rerum iste aut eligendi et et.',
        //  'price' => '728.11',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001177?text=architecto',
        //  'color' => 'Yellow',
        //  'height_cm' => '56',
        //  'width_cm' => '60',
        //  'depth_cm' => '56',
        //  'weight_gr' => '21',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 157,
        //  'categorie_id' => 1,
        //  'name' => 'sunt placeat quia',
        //  'description' => 'Iure non fuga et cum. Est sed in eos. Autem doloribus quia consequatur laborum tenetur sapiente.',
        //  'price' => '293.92',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005566?text=iusto',
        //  'color' => 'Magenta',
        //  'height_cm' => '31',
        //  'width_cm' => '22',
        //  'depth_cm' => '15',
        //  'weight_gr' => '97',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 158,
        //  'categorie_id' => 1,
        //  'name' => 'est quas quas',
        //  'description' => 'Qui asperiores sed aut qui cumque eius. Est pariatur velit ab sequi repellendus cum cupiditate. Qui sint quae et sapiente officiis.',
        //  'price' => '999.29',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aaff?text=est',
        //  'color' => 'GreenYellow',
        //  'height_cm' => '5',
        //  'width_cm' => '16',
        //  'depth_cm' => '74',
        //  'weight_gr' => '43',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 159,
        //  'categorie_id' => 1,
        //  'name' => 'mollitia quia ex',
        //  'description' => 'Quos modi sit ipsum sit sed cum. Atque exercitationem qui dolorem rerum consequuntur. In consequuntur dolor tempora laudantium.',
        //  'price' => '979.33',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022ff?text=sint',
        //  'color' => 'Lime',
        //  'height_cm' => '21',
        //  'width_cm' => '70',
        //  'depth_cm' => '79',
        //  'weight_gr' => '94',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 160,
        //  'categorie_id' => 1,
        //  'name' => 'distinctio excepturi velit',
        //  'description' => 'Repellendus enim sit odit. Quia quam nihil nihil sed. Vero dolor iusto vero labore dicta occaecati.',
        //  'price' => '904.12',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ccff?text=molestiae',
        //  'color' => 'AntiqueWhite',
        //  'height_cm' => '74',
        //  'width_cm' => '11',
        //  'depth_cm' => '94',
        //  'weight_gr' => '16',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 161,
        //  'categorie_id' => 1,
        //  'name' => 'eveniet ea distinctio',
        //  'description' => 'Ipsam doloremque quia totam a praesentium. Tempore autem velit in hic ullam. Vero omnis est asperiores natus. Quasi deleniti odit architecto doloribus sequi omnis.',
        //  'price' => '155.21',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077ee?text=doloremque',
        //  'color' => 'DarkSlateGray',
        //  'height_cm' => '70',
        //  'width_cm' => '47',
        //  'depth_cm' => '99',
        //  'weight_gr' => '49',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 162,
        //  'categorie_id' => 1,
        //  'name' => 'minima assumenda vitae',
        //  'description' => 'Praesentium itaque minima non sit. In error cumque qui harum animi cupiditate qui.',
        //  'price' => '543.48',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aaee?text=ipsam',
        //  'color' => 'Lime',
        //  'height_cm' => '4',
        //  'width_cm' => '72',
        //  'depth_cm' => '44',
        //  'weight_gr' => '27',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 163,
        //  'categorie_id' => 1,
        //  'name' => 'ut architecto explicabo',
        //  'description' => 'Quo aut labore ipsa. Impedit ut amet id recusandae officia. Quam similique voluptatibus nihil exercitationem tempora unde corporis.',
        //  'price' => '775.77',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000000?text=vel',
        //  'color' => 'PaleGoldenRod',
        //  'height_cm' => '100',
        //  'width_cm' => '40',
        //  'depth_cm' => '49',
        //  'weight_gr' => '20',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 164,
        //  'categorie_id' => 1,
        //  'name' => 'facere vitae repudiandae',
        //  'description' => 'Aut et ratione nesciunt laboriosam assumenda. Nemo sint sequi sed omnis aut quas quia tenetur. Non ut impedit velit possimus ipsa.',
        //  'price' => '486.91',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004477?text=accusantium',
        //  'color' => 'AntiqueWhite',
        //  'height_cm' => '44',
        //  'width_cm' => '77',
        //  'depth_cm' => '76',
        //  'weight_gr' => '20',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 165,
        //  'categorie_id' => 1,
        //  'name' => 'quis qui et',
        //  'description' => 'Mollitia ullam ipsum veniam beatae tenetur. Totam tempore esse dolorem quibusdam. Asperiores sequi occaecati molestiae et natus doloribus molestias.',
        //  'price' => '278.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff66?text=ipsa',
        //  'color' => 'Orange',
        //  'height_cm' => '62',
        //  'width_cm' => '41',
        //  'depth_cm' => '48',
        //  'weight_gr' => '99',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 166,
        //  'categorie_id' => 1,
        //  'name' => 'aspernatur sed temporibus',
        //  'description' => 'Necessitatibus sunt et inventore. Quia officiis beatae voluptatum ex ut voluptatum magnam. Qui voluptatem consequatur officia sed architecto. Facere veniam quae maiores placeat.',
        //  'price' => '638.14',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aaaa?text=sit',
        //  'color' => 'Tan',
        //  'height_cm' => '29',
        //  'width_cm' => '76',
        //  'depth_cm' => '8',
        //  'weight_gr' => '21',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 167,
        //  'categorie_id' => 1,
        //  'name' => 'est illo provident',
        //  'description' => 'Dolor eaque voluptas unde voluptatibus qui cum. Iusto sint sint voluptatem et corrupti et. Minima et voluptas quae sed. Ipsa totam qui ipsam et iusto id.',
        //  'price' => '476.20',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003311?text=perferendis',
        //  'color' => 'MistyRose',
        //  'height_cm' => '20',
        //  'width_cm' => '36',
        //  'depth_cm' => '4',
        //  'weight_gr' => '47',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 168,
        //  'categorie_id' => 1,
        //  'name' => 'odit et dolorem',
        //  'description' => 'Libero voluptate quia ut ut commodi labore odio. Voluptatum voluptatem est ea dolorum ipsa dolorem iste. Iusto accusantium qui rerum.',
        //  'price' => '609.27',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc00?text=inventore',
        //  'color' => 'MediumTurquoise',
        //  'height_cm' => '93',
        //  'width_cm' => '5',
        //  'depth_cm' => '52',
        //  'weight_gr' => '3',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 169,
        //  'categorie_id' => 1,
        //  'name' => 'voluptates unde itaque',
        //  'description' => 'Quo voluptatem asperiores ipsum est qui. Totam vel possimus possimus. Consequuntur animi autem vel voluptatem soluta est.',
        //  'price' => '705.02',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ddff?text=possimus',
        //  'color' => 'SteelBlue',
        //  'height_cm' => '14',
        //  'width_cm' => '74',
        //  'depth_cm' => '11',
        //  'weight_gr' => '85',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 170,
        //  'categorie_id' => 1,
        //  'name' => 'facilis officiis accusamus',
        //  'description' => 'Debitis quia neque eos quia sint vel. Nemo voluptatibus est ut unde est tempora rem omnis. Voluptates aut modi saepe est libero et aut. Minima quasi et vel.',
        //  'price' => '866.18',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009922?text=dolorum',
        //  'color' => 'BurlyWood',
        //  'height_cm' => '48',
        //  'width_cm' => '82',
        //  'depth_cm' => '70',
        //  'weight_gr' => '71',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 171,
        //  'categorie_id' => 1,
        //  'name' => 'veritatis et quasi',
        //  'description' => 'Assumenda numquam eius rerum ut. Facilis reprehenderit laborum et aut tempore et rerum. Dolore sunt doloremque voluptatum accusamus quam.',
        //  'price' => '501.66',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002233?text=eos',
        //  'color' => 'LightSkyBlue',
        //  'height_cm' => '55',
        //  'width_cm' => '10',
        //  'depth_cm' => '23',
        //  'weight_gr' => '33',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 172,
        //  'categorie_id' => 1,
        //  'name' => 'ullam repudiandae reprehenderit',
        //  'description' => 'Consequatur non minima ut. Dolor eligendi iure nemo enim maxime. Est debitis ex pariatur voluptatibus eum. Perferendis officiis beatae est dicta.',
        //  'price' => '716.17',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0099cc?text=ea',
        //  'color' => 'FireBrick',
        //  'height_cm' => '40',
        //  'width_cm' => '5',
        //  'depth_cm' => '32',
        //  'weight_gr' => '60',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 173,
        //  'categorie_id' => 1,
        //  'name' => 'omnis ab est',
        //  'description' => 'Sint praesentium blanditiis sunt temporibus unde fuga aspernatur. Iure tempore eos est cumque. Omnis aut corrupti natus dolorem dolor numquam sit. Quos velit aut eveniet nam nihil eos.',
        //  'price' => '637.65',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff00?text=reprehenderit',
        //  'color' => 'DarkSalmon',
        //  'height_cm' => '41',
        //  'width_cm' => '30',
        //  'depth_cm' => '28',
        //  'weight_gr' => '44',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 174,
        //  'categorie_id' => 1,
        //  'name' => 'itaque qui veritatis',
        //  'description' => 'Neque voluptas eum illum enim nisi eum. Aliquid et incidunt consequuntur nam eum est saepe. Soluta quod quia est cum tenetur blanditiis repellat.',
        //  'price' => '280.01',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003388?text=voluptatem',
        //  'color' => 'MediumPurple',
        //  'height_cm' => '19',
        //  'width_cm' => '11',
        //  'depth_cm' => '85',
        //  'weight_gr' => '96',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 175,
        //  'categorie_id' => 1,
        //  'name' => 'eaque suscipit accusantium',
        //  'description' => 'Officia quasi enim quasi aut iste sed. Deserunt recusandae similique id. Architecto praesentium quis rerum perspiciatis.',
        //  'price' => '293.55',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ccbb?text=velit',
        //  'color' => 'DeepPink',
        //  'height_cm' => '61',
        //  'width_cm' => '3',
        //  'depth_cm' => '76',
        //  'weight_gr' => '28',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 176,
        //  'categorie_id' => 1,
        //  'name' => 'ut laboriosam quis',
        //  'description' => 'Et nihil sint aut adipisci commodi magnam deleniti. Accusamus voluptatum earum libero voluptates distinctio. Excepturi alias voluptas ab aspernatur. Doloribus repellat voluptate id non quis.',
        //  'price' => '209.93',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009988?text=amet',
        //  'color' => 'Pink',
        //  'height_cm' => '30',
        //  'width_cm' => '49',
        //  'depth_cm' => '48',
        //  'weight_gr' => '82',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 177,
        //  'categorie_id' => 1,
        //  'name' => 'sequi sequi quos',
        //  'description' => 'Sit maiores et error vel eum aut fugit. Nihil sit molestiae et minima est velit et. Ad aspernatur neque aut ut tempore qui praesentium. Et dignissimos atque at sunt tempora inventore.',
        //  'price' => '337.84',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002299?text=et',
        //  'color' => 'BurlyWood',
        //  'height_cm' => '52',
        //  'width_cm' => '14',
        //  'depth_cm' => '40',
        //  'weight_gr' => '81',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 178,
        //  'categorie_id' => 1,
        //  'name' => 'incidunt ut soluta',
        //  'description' => 'Placeat dolorem soluta aut necessitatibus. Commodi praesentium molestiae suscipit eveniet nostrum sed. Sint inventore quibusdam sed iure.',
        //  'price' => '54.15',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007711?text=rerum',
        //  'color' => 'LightPink',
        //  'height_cm' => '100',
        //  'width_cm' => '35',
        //  'depth_cm' => '96',
        //  'weight_gr' => '55',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 179,
        //  'categorie_id' => 1,
        //  'name' => 'quis debitis quam',
        //  'description' => 'Architecto aut repellat qui exercitationem labore. Dolor qui voluptatem quia totam. Laborum nulla occaecati debitis in deleniti nesciunt.',
        //  'price' => '763.95',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088cc?text=deserunt',
        //  'color' => 'Sienna',
        //  'height_cm' => '57',
        //  'width_cm' => '73',
        //  'depth_cm' => '82',
        //  'weight_gr' => '50',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 180,
        //  'categorie_id' => 1,
        //  'name' => 'iusto recusandae vero',
        //  'description' => 'Sit voluptatum odit repellendus rerum dolore. Itaque ut maxime qui ut quasi enim. Maxime qui fuga quas laborum.',
        //  'price' => '37.03',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000099?text=error',
        //  'color' => 'Sienna',
        //  'height_cm' => '98',
        //  'width_cm' => '35',
        //  'depth_cm' => '29',
        //  'weight_gr' => '71',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 181,
        //  'categorie_id' => 1,
        //  'name' => 'eveniet rerum consequuntur',
        //  'description' => 'Et consequatur consequatur quidem atque quia debitis quia. Quae iusto ut qui non molestias at. Ut veritatis maxime omnis minima sapiente dolor.',
        //  'price' => '878.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee00?text=ex',
        //  'color' => 'Ivory',
        //  'height_cm' => '30',
        //  'width_cm' => '4',
        //  'depth_cm' => '78',
        //  'weight_gr' => '69',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 182,
        //  'categorie_id' => 1,
        //  'name' => 'similique est aliquid',
        //  'description' => 'Tempore nostrum ratione veritatis distinctio iure quo exercitationem. Nesciunt consequatur sint minima quod minima.',
        //  'price' => '251.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0033bb?text=placeat',
        //  'color' => 'Chocolate',
        //  'height_cm' => '60',
        //  'width_cm' => '62',
        //  'depth_cm' => '69',
        //  'weight_gr' => '65',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 183,
        //  'categorie_id' => 1,
        //  'name' => 'illo nesciunt nulla',
        //  'description' => 'Culpa deleniti nesciunt tempore consequatur. Et et facilis et qui et est quos. Quos rem molestias id quod officiis quo. Odit id quos est nisi. Sint molestias eum possimus tempora qui.',
        //  'price' => '269.68',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009922?text=quae',
        //  'color' => 'GreenYellow',
        //  'height_cm' => '79',
        //  'width_cm' => '43',
        //  'depth_cm' => '69',
        //  'weight_gr' => '55',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 184,
        //  'categorie_id' => 1,
        //  'name' => 'quibusdam vero ipsa',
        //  'description' => 'In sapiente explicabo quaerat harum. Aut earum voluptas animi quam nam asperiores. Facere unde voluptas voluptatem sint ea iusto. Eveniet soluta facilis omnis est.',
        //  'price' => '901.98',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088cc?text=modi',
        //  'color' => 'SteelBlue',
        //  'height_cm' => '55',
        //  'width_cm' => '62',
        //  'depth_cm' => '74',
        //  'weight_gr' => '32',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 185,
        //  'categorie_id' => 1,
        //  'name' => 'veritatis accusantium sed',
        //  'description' => 'Qui et provident earum ipsa non porro molestiae. Sed harum quasi cumque doloribus rerum eligendi eos. Tenetur voluptas iusto laborum odit dolorem. Officia velit maxime recusandae qui aperiam ab.',
        //  'price' => '993.95',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc77?text=quo',
        //  'color' => 'Violet',
        //  'height_cm' => '63',
        //  'width_cm' => '1',
        //  'depth_cm' => '3',
        //  'weight_gr' => '20',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 186,
        //  'categorie_id' => 1,
        //  'name' => 'voluptatem in quae',
        //  'description' => 'Consequatur soluta quasi possimus et vero est. Quod quod placeat dolorem eum. Illum voluptas voluptas et doloremque laudantium ea. At dolorem dolores enim eaque.',
        //  'price' => '780.27',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc11?text=cumque',
        //  'color' => 'NavajoWhite',
        //  'height_cm' => '95',
        //  'width_cm' => '80',
        //  'depth_cm' => '50',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 187,
        //  'categorie_id' => 1,
        //  'name' => 'incidunt totam nesciunt',
        //  'description' => 'Quam qui esse eos hic sunt. Id vero et quia maxime reprehenderit aut sed qui. Maxime quaerat voluptatibus eveniet et cum. Ut et nam omnis omnis ad. Quia pariatur rerum asperiores.',
        //  'price' => '740.36',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005555?text=a',
        //  'color' => 'Cornsilk',
        //  'height_cm' => '37',
        //  'width_cm' => '16',
        //  'depth_cm' => '51',
        //  'weight_gr' => '14',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 188,
        //  'categorie_id' => 1,
        //  'name' => 'aut aut iure',
        //  'description' => 'Impedit id ipsum sapiente beatae maiores aspernatur saepe voluptatem. Quod enim est ipsum aut quod. Aut qui mollitia voluptatem aut quam omnis.',
        //  'price' => '306.86',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000022?text=possimus',
        //  'color' => 'SteelBlue',
        //  'height_cm' => '28',
        //  'width_cm' => '38',
        //  'depth_cm' => '88',
        //  'weight_gr' => '52',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 189,
        //  'categorie_id' => 1,
        //  'name' => 'nostrum ipsam sit',
        //  'description' => 'Reiciendis tempora sit sequi et. Soluta commodi voluptatem rem. Dolor dolore ullam animi sapiente modi voluptatibus sint. Laborum labore nisi non odio dignissimos eligendi aut.',
        //  'price' => '655.15',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eeee?text=eaque',
        //  'color' => 'DimGray',
        //  'height_cm' => '34',
        //  'width_cm' => '2',
        //  'depth_cm' => '82',
        //  'weight_gr' => '43',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 190,
        //  'categorie_id' => 1,
        //  'name' => 'ratione iure quas',
        //  'description' => 'Nihil aspernatur non labore possimus. Dolorum ipsa est veritatis et aliquid. Aperiam voluptatem fuga quisquam ullam accusantium eveniet.',
        //  'price' => '259.43',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003322?text=placeat',
        //  'color' => 'LightSteelBlue',
        //  'height_cm' => '65',
        //  'width_cm' => '37',
        //  'depth_cm' => '75',
        //  'weight_gr' => '36',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 191,
        //  'categorie_id' => 1,
        //  'name' => 'ut aut et',
        //  'description' => 'Pariatur deserunt vitae quo perferendis reiciendis ad minima. Ut fugit nihil cupiditate in nihil. Ad cupiditate cumque mollitia est. Consequatur rerum voluptatem error ipsa sequi et.',
        //  'price' => '979.86',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff66?text=nam',
        //  'color' => 'PaleVioletRed',
        //  'height_cm' => '22',
        //  'width_cm' => '13',
        //  'depth_cm' => '39',
        //  'weight_gr' => '66',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 192,
        //  'categorie_id' => 1,
        //  'name' => 'numquam aut molestiae',
        //  'description' => 'Rerum omnis cupiditate amet ipsa magnam eos. Enim nesciunt dolore perspiciatis architecto non quibusdam. Ut dolor et quia architecto ad minus.',
        //  'price' => '980.90',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd33?text=id',
        //  'color' => 'Thistle',
        //  'height_cm' => '91',
        //  'width_cm' => '49',
        //  'depth_cm' => '61',
        //  'weight_gr' => '19',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 193,
        //  'categorie_id' => 1,
        //  'name' => 'quam qui veritatis',
        //  'description' => 'Exercitationem quia id deserunt earum rerum. Nemo aperiam facilis ut aut ut. Rerum quae earum quia aut quis in asperiores. In nostrum et pariatur non totam sit labore qui.',
        //  'price' => '219.74',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002266?text=non',
        //  'color' => 'SlateGray',
        //  'height_cm' => '41',
        //  'width_cm' => '13',
        //  'depth_cm' => '9',
        //  'weight_gr' => '5',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 194,
        //  'categorie_id' => 1,
        //  'name' => 'beatae aut tempore',
        //  'description' => 'Et sapiente in exercitationem aperiam non labore necessitatibus. Sit quia doloremque veritatis dicta. Pariatur esse ut velit modi.',
        //  'price' => '788.36',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb33?text=commodi',
        //  'color' => 'LightSeaGreen',
        //  'height_cm' => '98',
        //  'width_cm' => '24',
        //  'depth_cm' => '17',
        //  'weight_gr' => '23',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 195,
        //  'categorie_id' => 1,
        //  'name' => 'dolorem amet accusantium',
        //  'description' => 'Corrupti perspiciatis provident quis aliquam saepe. Aut voluptas qui sit magnam iste. Et eos hic ipsa. Perferendis officiis cum nesciunt molestiae. Nesciunt sed ut perferendis.',
        //  'price' => '585.91',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0055ee?text=laborum',
        //  'color' => 'LightGoldenRodYellow',
        //  'height_cm' => '69',
        //  'width_cm' => '98',
        //  'depth_cm' => '74',
        //  'weight_gr' => '83',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 196,
        //  'categorie_id' => 1,
        //  'name' => 'et enim voluptas',
        //  'description' => 'Id qui voluptas voluptatem magni aut quidem neque. Et error voluptas ut sapiente. Eaque dolor atque ut corrupti. Pariatur dolorum vel ut esse a totam quam. Et impedit eaque aut qui aut cumque.',
        //  'price' => '66.88',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee11?text=possimus',
        //  'color' => 'DarkSlateBlue',
        //  'height_cm' => '8',
        //  'width_cm' => '90',
        //  'depth_cm' => '66',
        //  'weight_gr' => '41',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 197,
        //  'categorie_id' => 1,
        //  'name' => 'veniam eveniet rerum',
        //  'description' => 'Explicabo consequatur nulla sed sunt. Et quia quaerat ipsam odit ipsum nulla est. Accusamus qui velit laborum veritatis.',
        //  'price' => '160.69',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eeee?text=aperiam',
        //  'color' => 'Indigo',
        //  'height_cm' => '28',
        //  'width_cm' => '30',
        //  'depth_cm' => '18',
        //  'weight_gr' => '10',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 198,
        //  'categorie_id' => 1,
        //  'name' => 'porro magni ab',
        //  'description' => 'Aut excepturi earum voluptatem et harum. Odit et aliquid enim placeat.',
        //  'price' => '703.35',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006688?text=explicabo',
        //  'color' => 'DarkViolet',
        //  'height_cm' => '46',
        //  'width_cm' => '98',
        //  'depth_cm' => '9',
        //  'weight_gr' => '16',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 199,
        //  'categorie_id' => 1,
        //  'name' => 'deserunt ex ratione',
        //  'description' => 'Hic consectetur repudiandae delectus aut repudiandae mollitia fugit quia. Aliquid accusamus et facere qui ullam qui tempora debitis. Quasi expedita sed atque fugit quod et tempore autem.',
        //  'price' => '74.22',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004466?text=consequatur',
        //  'color' => 'Brown',
        //  'height_cm' => '29',
        //  'width_cm' => '6',
        //  'depth_cm' => '99',
        //  'weight_gr' => '76',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 200,
        //  'categorie_id' => 1,
        //  'name' => 'ipsam odit enim',
        //  'description' => 'Non optio aliquam fugiat sint. Sit id omnis perferendis quis eos excepturi aspernatur perspiciatis. Ducimus vitae nemo in temporibus earum fugiat.',
        //  'price' => '271.97',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0055ee?text=quia',
        //  'color' => 'MidnightBlue',
        //  'height_cm' => '84',
        //  'width_cm' => '60',
        //  'depth_cm' => '84',
        //  'weight_gr' => '69',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 201,
        //  'categorie_id' => 1,
        //  'name' => 'aut pariatur et',
        //  'description' => 'Iusto omnis molestiae magnam perspiciatis cumque cum placeat. Libero magni quae et placeat. Doloribus nostrum fugiat libero veritatis quia. Numquam id saepe quod.',
        //  'price' => '173.96',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc55?text=voluptatem',
        //  'color' => 'Black',
        //  'height_cm' => '16',
        //  'width_cm' => '51',
        //  'depth_cm' => '58',
        //  'weight_gr' => '50',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 202,
        //  'categorie_id' => 1,
        //  'name' => 'tenetur ut repellat',
        //  'description' => 'Animi autem consectetur quam modi. Quia incidunt mollitia provident enim est. Nulla ratione ad iste. Aperiam quia sapiente consequuntur aut qui numquam.',
        //  'price' => '19.55',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000044?text=quam',
        //  'color' => 'Olive',
        //  'height_cm' => '93',
        //  'width_cm' => '56',
        //  'depth_cm' => '52',
        //  'weight_gr' => '90',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 203,
        //  'categorie_id' => 1,
        //  'name' => 'sit voluptates eius',
        //  'description' => 'Dolor aut ea a id enim nam soluta commodi. Dolor totam suscipit dolor. Voluptas id pariatur et commodi. Illum veniam et est ullam.',
        //  'price' => '126.15',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006622?text=sapiente',
        //  'color' => 'SaddleBrown',
        //  'height_cm' => '64',
        //  'width_cm' => '14',
        //  'depth_cm' => '60',
        //  'weight_gr' => '55',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 204,
        //  'categorie_id' => 1,
        //  'name' => 'officia suscipit quo',
        //  'description' => 'Recusandae voluptatem voluptas sed. Maiores eius expedita inventore. Mollitia commodi velit earum dolores sed quo fuga.',
        //  'price' => '778.41',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001133?text=omnis',
        //  'color' => 'LimeGreen',
        //  'height_cm' => '35',
        //  'width_cm' => '57',
        //  'depth_cm' => '33',
        //  'weight_gr' => '30',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 205,
        //  'categorie_id' => 1,
        //  'name' => 'aut quia et',
        //  'description' => 'A distinctio consequatur commodi libero dicta error. Nam nemo deleniti autem voluptatibus eius. Saepe consequuntur pariatur beatae qui exercitationem.',
        //  'price' => '452.35',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd66?text=quasi',
        //  'color' => 'DarkSeaGreen',
        //  'height_cm' => '6',
        //  'width_cm' => '1',
        //  'depth_cm' => '76',
        //  'weight_gr' => '93',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 206,
        //  'categorie_id' => 1,
        //  'name' => 'amet asperiores atque',
        //  'description' => 'Est eum aut laboriosam quo error nisi. Aliquam vero at dignissimos voluptatibus. Iusto iste sed beatae natus excepturi.',
        //  'price' => '630.85',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aaff?text=itaque',
        //  'color' => 'SlateGray',
        //  'height_cm' => '46',
        //  'width_cm' => '100',
        //  'depth_cm' => '90',
        //  'weight_gr' => '63',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 207,
        //  'categorie_id' => 1,
        //  'name' => 'nemo atque voluptas',
        //  'description' => 'Minus qui repellat deleniti ut repellendus laudantium. Repudiandae doloremque eveniet dolore est neque. Est nobis sunt et exercitationem fugit. Voluptatem et ut quia iure officiis est iste quia.',
        //  'price' => '759.08',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee11?text=consequatur',
        //  'color' => 'Orange',
        //  'height_cm' => '47',
        //  'width_cm' => '53',
        //  'depth_cm' => '50',
        //  'weight_gr' => '45',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 208,
        //  'categorie_id' => 1,
        //  'name' => 'quaerat aliquam dolorem',
        //  'description' => 'Corrupti exercitationem nulla qui est velit magnam quam. Officia qui id sit sed in aliquam. Aspernatur est possimus accusantium. Error officiis ipsum et delectus.',
        //  'price' => '179.17',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eeee?text=totam',
        //  'color' => 'LightSkyBlue',
        //  'height_cm' => '39',
        //  'width_cm' => '65',
        //  'depth_cm' => '96',
        //  'weight_gr' => '26',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 209,
        //  'categorie_id' => 1,
        //  'name' => 'sint nesciunt sint',
        //  'description' => 'Error vel hic alias deserunt. Saepe eaque minima voluptas laudantium vel explicabo.',
        //  'price' => '448.35',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088bb?text=alias',
        //  'color' => 'Snow',
        //  'height_cm' => '71',
        //  'width_cm' => '79',
        //  'depth_cm' => '93',
        //  'weight_gr' => '35',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 210,
        //  'categorie_id' => 1,
        //  'name' => 'autem sit est',
        //  'description' => 'Nobis vel ab dolor nesciunt voluptatem totam quam. Consequatur quia aliquam earum expedita. Quos laudantium nam sit et.',
        //  'price' => '64.32',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005588?text=earum',
        //  'color' => 'NavajoWhite',
        //  'height_cm' => '99',
        //  'width_cm' => '40',
        //  'depth_cm' => '21',
        //  'weight_gr' => '57',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 211,
        //  'categorie_id' => 1,
        //  'name' => 'minima earum rerum',
        //  'description' => 'Repellendus qui neque maxime blanditiis molestias ratione rerum. Sunt aspernatur vitae eveniet voluptatem beatae. Facilis sapiente asperiores ex iste numquam est enim. Quia itaque dolorum id itaque.',
        //  'price' => '671.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aabb?text=cumque',
        //  'color' => 'MediumBlue',
        //  'height_cm' => '27',
        //  'width_cm' => '27',
        //  'depth_cm' => '29',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 212,
        //  'categorie_id' => 1,
        //  'name' => 'sed recusandae distinctio',
        //  'description' => 'Et fugiat magnam quia at dolor vitae et sequi. Dolorem saepe ipsa explicabo ut est corrupti molestiae. Facere accusamus sint vitae et recusandae fugit. Magnam eveniet sit ut labore aut nam.',
        //  'price' => '622.96',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc33?text=repudiandae',
        //  'color' => 'AliceBlue',
        //  'height_cm' => '31',
        //  'width_cm' => '27',
        //  'depth_cm' => '40',
        //  'weight_gr' => '4',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 213,
        //  'categorie_id' => 1,
        //  'name' => 'placeat aperiam modi',
        //  'description' => 'Dignissimos doloribus sunt beatae. Doloremque distinctio consectetur est facere sed eveniet. Aliquid repellendus ratione ullam nesciunt laboriosam.',
        //  'price' => '324.34',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ccdd?text=qui',
        //  'color' => 'Turquoise',
        //  'height_cm' => '60',
        //  'width_cm' => '59',
        //  'depth_cm' => '32',
        //  'weight_gr' => '75',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 214,
        //  'categorie_id' => 1,
        //  'name' => 'tempore repudiandae optio',
        //  'description' => 'Velit in velit odio similique quis non. Doloremque et sunt alias. Eum neque non in quod. Facilis deserunt ut et aspernatur ut.',
        //  'price' => '505.11',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002233?text=quidem',
        //  'color' => 'Bisque',
        //  'height_cm' => '19',
        //  'width_cm' => '100',
        //  'depth_cm' => '75',
        //  'weight_gr' => '41',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 215,
        //  'categorie_id' => 1,
        //  'name' => 'cupiditate rem ex',
        //  'description' => 'Quis omnis quam ut id et quo ut. Animi maiores autem sunt id dolorem. Est aperiam fugiat impedit a exercitationem. Ea beatae iste nostrum inventore. Animi non harum culpa in.',
        //  'price' => '305.18',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbcc?text=dicta',
        //  'color' => 'Azure',
        //  'height_cm' => '63',
        //  'width_cm' => '43',
        //  'depth_cm' => '58',
        //  'weight_gr' => '59',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 216,
        //  'categorie_id' => 1,
        //  'name' => 'et neque earum',
        //  'description' => 'Voluptates qui non ipsum. Hic cupiditate aut dolores numquam ipsa unde et. Vel fugiat impedit illum placeat eos. Beatae sunt molestiae necessitatibus numquam quos.',
        //  'price' => '74.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008866?text=beatae',
        //  'color' => 'AliceBlue',
        //  'height_cm' => '21',
        //  'width_cm' => '25',
        //  'depth_cm' => '92',
        //  'weight_gr' => '47',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 217,
        //  'categorie_id' => 1,
        //  'name' => 'quia consequuntur repellendus',
        //  'description' => 'Molestiae molestiae itaque quam facere. Cum esse accusantium reiciendis modi nesciunt laudantium quas. Necessitatibus quis quam blanditiis quo.',
        //  'price' => '944.70',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbbb?text=asperiores',
        //  'color' => 'MediumAquaMarine',
        //  'height_cm' => '20',
        //  'width_cm' => '99',
        //  'depth_cm' => '82',
        //  'weight_gr' => '39',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 218,
        //  'categorie_id' => 1,
        //  'name' => 'cum quia enim',
        //  'description' => 'Est sit vero est non. Veniam tenetur cum ea consequatur. Iure at autem delectus ipsa non ut. Est non ullam reiciendis omnis.',
        //  'price' => '893.31',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066dd?text=omnis',
        //  'color' => 'MintCream',
        //  'height_cm' => '93',
        //  'width_cm' => '80',
        //  'depth_cm' => '92',
        //  'weight_gr' => '78',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 219,
        //  'categorie_id' => 1,
        //  'name' => 'velit dignissimos fuga',
        //  'description' => 'Est id sed esse. Provident quibusdam expedita aut. Et sed perferendis ad sapiente.',
        //  'price' => '496.90',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0044bb?text=omnis',
        //  'color' => 'Blue',
        //  'height_cm' => '81',
        //  'width_cm' => '7',
        //  'depth_cm' => '82',
        //  'weight_gr' => '60',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 220,
        //  'categorie_id' => 1,
        //  'name' => 'dolorum excepturi ut',
        //  'description' => 'Cupiditate ipsam et ut. Esse ad quam vero consequatur quia impedit non. Odit qui possimus id sunt est.',
        //  'price' => '314.68',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005588?text=placeat',
        //  'color' => 'Chartreuse',
        //  'height_cm' => '96',
        //  'width_cm' => '39',
        //  'depth_cm' => '83',
        //  'weight_gr' => '57',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 221,
        //  'categorie_id' => 1,
        //  'name' => 'vel vel numquam',
        //  'description' => 'Eos recusandae voluptates reiciendis in accusantium. Amet deserunt omnis ratione enim provident iste dolorem. Est tempora magni quia.',
        //  'price' => '430.54',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003344?text=doloremque',
        //  'color' => 'GoldenRod',
        //  'height_cm' => '13',
        //  'width_cm' => '47',
        //  'depth_cm' => '23',
        //  'weight_gr' => '34',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 222,
        //  'categorie_id' => 1,
        //  'name' => 'qui harum ab',
        //  'description' => 'Ea vero quisquam rerum ut id alias. Ducimus doloribus soluta dolorem. Delectus dolorum aut recusandae quia minima et aut.',
        //  'price' => '194.18',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa77?text=nihil',
        //  'color' => 'Ivory',
        //  'height_cm' => '2',
        //  'width_cm' => '83',
        //  'depth_cm' => '14',
        //  'weight_gr' => '91',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 223,
        //  'categorie_id' => 1,
        //  'name' => 'recusandae optio enim',
        //  'description' => 'Illo quisquam voluptas debitis asperiores minus. Ut qui natus omnis sed consequatur quibusdam vel ratione. Voluptate voluptatem minima hic vero. Minima ut dolor voluptatem libero suscipit.',
        //  'price' => '170.95',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077cc?text=necessitatibus',
        //  'color' => 'Silver',
        //  'height_cm' => '79',
        //  'width_cm' => '4',
        //  'depth_cm' => '18',
        //  'weight_gr' => '56',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 224,
        //  'categorie_id' => 1,
        //  'name' => 'quae inventore id',
        //  'description' => 'Iste perspiciatis sint cum nisi non. Voluptates saepe quam beatae incidunt blanditiis qui ut.',
        //  'price' => '228.55',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003355?text=vel',
        //  'color' => 'Sienna',
        //  'height_cm' => '82',
        //  'width_cm' => '47',
        //  'depth_cm' => '46',
        //  'weight_gr' => '97',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 225,
        //  'categorie_id' => 1,
        //  'name' => 'culpa quaerat autem',
        //  'description' => 'Tenetur consequatur quas maxime impedit. Amet sed ab et perferendis vel. Quae vero dolore quia quibusdam modi doloremque. Porro rem incidunt est sed.',
        //  'price' => '934.89',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0033ff?text=facere',
        //  'color' => 'LightGray',
        //  'height_cm' => '41',
        //  'width_cm' => '95',
        //  'depth_cm' => '96',
        //  'weight_gr' => '83',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 226,
        //  'categorie_id' => 1,
        //  'name' => 'eos aut nostrum',
        //  'description' => 'Occaecati veniam tempora magnam. Vero consequatur praesentium similique labore id non. Doloremque non qui est sed atque aut.',
        //  'price' => '32.80',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ccbb?text=eveniet',
        //  'color' => 'Plum',
        //  'height_cm' => '1',
        //  'width_cm' => '19',
        //  'depth_cm' => '10',
        //  'weight_gr' => '89',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 227,
        //  'categorie_id' => 1,
        //  'name' => 'rem rerum aliquam',
        //  'description' => 'Sit maiores vel ut aliquid. Ratione blanditiis ducimus amet quo mollitia voluptatum quos. Sed quasi dolorum exercitationem id quidem enim non nihil. Molestias et quas et ut quis.',
        //  'price' => '709.32',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088dd?text=laudantium',
        //  'color' => 'SeaShell',
        //  'height_cm' => '67',
        //  'width_cm' => '69',
        //  'depth_cm' => '24',
        //  'weight_gr' => '61',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 228,
        //  'categorie_id' => 1,
        //  'name' => 'reprehenderit velit modi',
        //  'description' => 'Optio et molestias illum commodi corporis exercitationem. Quia et sit illum voluptatem. Quidem omnis sed occaecati hic. Repellat sapiente nisi cupiditate pariatur expedita porro.',
        //  'price' => '20.67',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011ff?text=quia',
        //  'color' => 'WhiteSmoke',
        //  'height_cm' => '1',
        //  'width_cm' => '46',
        //  'depth_cm' => '6',
        //  'weight_gr' => '64',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 229,
        //  'categorie_id' => 1,
        //  'name' => 'ut est rerum',
        //  'description' => 'A asperiores harum necessitatibus similique commodi odit repellat. Sed neque omnis omnis. Magni quod voluptas nisi id vel harum reprehenderit.',
        //  'price' => '881.50',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd55?text=eum',
        //  'color' => 'MediumSeaGreen',
        //  'height_cm' => '73',
        //  'width_cm' => '26',
        //  'depth_cm' => '27',
        //  'weight_gr' => '9',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 230,
        //  'categorie_id' => 1,
        //  'name' => 'velit quas culpa',
        //  'description' => 'Repudiandae perferendis dolor dolor aliquid voluptate ab. Rem iusto eos aut excepturi. Officiis quis ducimus est cumque qui inventore.',
        //  'price' => '202.58',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd44?text=enim',
        //  'color' => 'Brown',
        //  'height_cm' => '65',
        //  'width_cm' => '82',
        //  'depth_cm' => '13',
        //  'weight_gr' => '67',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 231,
        //  'categorie_id' => 1,
        //  'name' => 'illum aut vero',
        //  'description' => 'Impedit soluta consequatur in molestiae ad. Voluptatem ipsum soluta veritatis et. Quis est labore velit cumque nulla sed.',
        //  'price' => '344.78',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077ee?text=nesciunt',
        //  'color' => 'DarkGoldenRod',
        //  'height_cm' => '99',
        //  'width_cm' => '6',
        //  'depth_cm' => '5',
        //  'weight_gr' => '65',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 232,
        //  'categorie_id' => 1,
        //  'name' => 'totam nulla qui',
        //  'description' => 'Autem et saepe fugiat. Eum libero saepe ea est qui minus. Eius blanditiis esse qui repudiandae libero quo ut. Animi voluptas incidunt itaque sed.',
        //  'price' => '732.34',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ccbb?text=maiores',
        //  'color' => 'BlanchedAlmond',
        //  'height_cm' => '6',
        //  'width_cm' => '74',
        //  'depth_cm' => '42',
        //  'weight_gr' => '15',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 233,
        //  'categorie_id' => 1,
        //  'name' => 'culpa aut et',
        //  'description' => 'Quos aut quasi eos tempora voluptas. Pariatur earum et ex velit eos mollitia. In provident quas aut nesciunt ut natus. Omnis repellendus voluptates amet et nihil.',
        //  'price' => '753.74',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbbb?text=et',
        //  'color' => 'Gold',
        //  'height_cm' => '59',
        //  'width_cm' => '67',
        //  'depth_cm' => '24',
        //  'weight_gr' => '73',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 234,
        //  'categorie_id' => 1,
        //  'name' => 'ut quam consequatur',
        //  'description' => 'Et et assumenda nam corrupti. Et quae iure omnis ratione ipsam. Est et a qui excepturi aliquam nemo doloribus.',
        //  'price' => '157.21',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ffee?text=non',
        //  'color' => 'LightGray',
        //  'height_cm' => '49',
        //  'width_cm' => '76',
        //  'depth_cm' => '77',
        //  'weight_gr' => '56',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 235,
        //  'categorie_id' => 1,
        //  'name' => 'eius et explicabo',
        //  'description' => 'Delectus ipsum ut vero occaecati recusandae nesciunt. Laboriosam repellendus dolorem illum facilis. Totam veniam recusandae et natus perferendis dolor quis. Quia aperiam a rerum magnam eum.',
        //  'price' => '256.29',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008855?text=ut',
        //  'color' => 'Navy',
        //  'height_cm' => '74',
        //  'width_cm' => '77',
        //  'depth_cm' => '24',
        //  'weight_gr' => '15',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 236,
        //  'categorie_id' => 1,
        //  'name' => 'consequatur tenetur delectus',
        //  'description' => 'Quasi eum nobis autem ipsa. Illum dolorum dolorum neque saepe sit. Earum nihil et est facere necessitatibus excepturi aut. Sint repellat velit aliquid ipsam laboriosam aspernatur.',
        //  'price' => '824.10',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011aa?text=omnis',
        //  'color' => 'LightSalmon',
        //  'height_cm' => '95',
        //  'width_cm' => '49',
        //  'depth_cm' => '35',
        //  'weight_gr' => '33',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 237,
        //  'categorie_id' => 1,
        //  'name' => 'illum enim nobis',
        //  'description' => 'Voluptate numquam ut voluptas earum. Molestiae voluptatibus cupiditate dolorem quis numquam et. Sit delectus quia qui voluptas suscipit. Quia et enim in libero necessitatibus.',
        //  'price' => '18.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002266?text=et',
        //  'color' => 'LightBlue',
        //  'height_cm' => '64',
        //  'width_cm' => '39',
        //  'depth_cm' => '80',
        //  'weight_gr' => '5',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 238,
        //  'categorie_id' => 1,
        //  'name' => 'velit inventore aut',
        //  'description' => 'Aspernatur eius consequatur voluptate a. Quas totam est quibusdam. Sequi et eos quidem. Inventore non facere sapiente iste.',
        //  'price' => '802.94',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ccff?text=qui',
        //  'color' => 'Green',
        //  'height_cm' => '94',
        //  'width_cm' => '67',
        //  'depth_cm' => '92',
        //  'weight_gr' => '76',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 239,
        //  'categorie_id' => 1,
        //  'name' => 'laudantium quisquam natus',
        //  'description' => 'Consequatur minima minima eos est quisquam id sit animi. Ducimus maxime inventore reprehenderit dicta quisquam doloremque. Velit et amet et quia.',
        //  'price' => '604.74',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088bb?text=distinctio',
        //  'color' => 'SaddleBrown',
        //  'height_cm' => '6',
        //  'width_cm' => '66',
        //  'depth_cm' => '50',
        //  'weight_gr' => '91',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 240,
        //  'categorie_id' => 1,
        //  'name' => 'assumenda ex eum',
        //  'description' => 'Qui velit atque excepturi et illum quibusdam. Eum labore eaque reiciendis voluptatem voluptates alias. Minus voluptas est aut qui.',
        //  'price' => '353.96',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003300?text=odit',
        //  'color' => 'ForestGreen',
        //  'height_cm' => '83',
        //  'width_cm' => '30',
        //  'depth_cm' => '61',
        //  'weight_gr' => '46',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 241,
        //  'categorie_id' => 1,
        //  'name' => 'ea aut dignissimos',
        //  'description' => 'Dolor non ullam id cumque maiores ipsam quia. Nihil molestiae optio ipsum suscipit. Et ex tempore voluptates beatae facere.',
        //  'price' => '457.70',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc11?text=qui',
        //  'color' => 'LightGoldenRodYellow',
        //  'height_cm' => '25',
        //  'width_cm' => '6',
        //  'depth_cm' => '60',
        //  'weight_gr' => '5',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 242,
        //  'categorie_id' => 1,
        //  'name' => 'accusantium animi reprehenderit',
        //  'description' => 'Corrupti enim ea vel vitae nam et non autem. Non a nostrum id esse aperiam. Nihil sit sequi incidunt sapiente aut tempora ut.',
        //  'price' => '355.11',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006600?text=et',
        //  'color' => 'Yellow',
        //  'height_cm' => '32',
        //  'width_cm' => '55',
        //  'depth_cm' => '90',
        //  'weight_gr' => '80',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 243,
        //  'categorie_id' => 1,
        //  'name' => 'sapiente fuga quis',
        //  'description' => 'At ratione impedit aut mollitia architecto nihil. Distinctio ducimus quia voluptate autem et aut. Rerum quisquam quos ut fugit et quam.',
        //  'price' => '80.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001155?text=non',
        //  'color' => 'Turquoise',
        //  'height_cm' => '40',
        //  'width_cm' => '1',
        //  'depth_cm' => '90',
        //  'weight_gr' => '53',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 244,
        //  'categorie_id' => 1,
        //  'name' => 'non aliquid quia',
        //  'description' => 'Repudiandae numquam sunt autem animi et tempore. Molestiae aut beatae vitae aspernatur consequatur non. Dolorem voluptatem occaecati laudantium ut possimus quidem.',
        //  'price' => '664.80',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0033ff?text=facilis',
        //  'color' => 'AntiqueWhite',
        //  'height_cm' => '11',
        //  'width_cm' => '44',
        //  'depth_cm' => '4',
        //  'weight_gr' => '46',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 245,
        //  'categorie_id' => 1,
        //  'name' => 'quo ad esse',
        //  'description' => 'Est id quos corporis rerum sit. Aut repellendus ut exercitationem rerum ea dolor accusamus. Culpa ut et et ut repellat qui dolor.',
        //  'price' => '44.76',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009900?text=harum',
        //  'color' => 'AliceBlue',
        //  'height_cm' => '60',
        //  'width_cm' => '60',
        //  'depth_cm' => '17',
        //  'weight_gr' => '46',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 246,
        //  'categorie_id' => 1,
        //  'name' => 'omnis ut hic',
        //  'description' => 'Quia sed facilis nulla dolores. Corporis placeat odit autem dolorum error soluta odio. Et adipisci sint facilis optio commodi molestiae ut.',
        //  'price' => '163.27',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003399?text=dolorum',
        //  'color' => 'SlateGray',
        //  'height_cm' => '48',
        //  'width_cm' => '27',
        //  'depth_cm' => '56',
        //  'weight_gr' => '85',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 247,
        //  'categorie_id' => 1,
        //  'name' => 'expedita voluptas aut',
        //  'description' => 'Minus inventore architecto libero sit est deleniti reprehenderit. Libero omnis voluptatem nemo officia hic.',
        //  'price' => '598.84',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009988?text=ducimus',
        //  'color' => 'WhiteSmoke',
        //  'height_cm' => '4',
        //  'width_cm' => '22',
        //  'depth_cm' => '18',
        //  'weight_gr' => '27',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 248,
        //  'categorie_id' => 1,
        //  'name' => 'consequatur sed nobis',
        //  'description' => 'Vitae nulla error et nihil ut eum. Nesciunt voluptas dolor aspernatur necessitatibus quas dolores soluta.',
        //  'price' => '694.19',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000066?text=at',
        //  'color' => 'MediumPurple',
        //  'height_cm' => '50',
        //  'width_cm' => '66',
        //  'depth_cm' => '100',
        //  'weight_gr' => '14',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 249,
        //  'categorie_id' => 1,
        //  'name' => 'aut voluptatem et',
        //  'description' => 'Magni architecto dolorem et doloremque iure iusto. Aspernatur ut quam autem rerum officia. Illum hic aliquid fuga exercitationem sapiente.',
        //  'price' => '789.53',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0044ff?text=id',
        //  'color' => 'Cornsilk',
        //  'height_cm' => '82',
        //  'width_cm' => '65',
        //  'depth_cm' => '56',
        //  'weight_gr' => '77',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 250,
        //  'categorie_id' => 1,
        //  'name' => 'ipsa labore vel',
        //  'description' => 'Voluptatem voluptate omnis cum facere cum. Exercitationem odio sint dolor dicta repudiandae eos voluptas vel. Qui iste laudantium alias odit.',
        //  'price' => '288.18',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0055bb?text=qui',
        //  'color' => 'White',
        //  'height_cm' => '77',
        //  'width_cm' => '60',
        //  'depth_cm' => '21',
        //  'weight_gr' => '62',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 251,
        //  'categorie_id' => 1,
        //  'name' => 'sequi eius soluta',
        //  'description' => 'Laudantium magnam et voluptatem officia et ut repellat dolore. Voluptatum voluptate voluptatem aut quibusdam tempore beatae eos.',
        //  'price' => '968.37',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0044ee?text=eum',
        //  'color' => 'White',
        //  'height_cm' => '47',
        //  'width_cm' => '11',
        //  'depth_cm' => '30',
        //  'weight_gr' => '85',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 252,
        //  'categorie_id' => 1,
        //  'name' => 'sequi rerum enim',
        //  'description' => 'Non harum ut et dolores quaerat quis labore. Placeat et et sed. Voluptatem qui error sint voluptatem. Reprehenderit modi aut modi laborum est laudantium in. Magni aut facilis eligendi corporis.',
        //  'price' => '778.41',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa44?text=tenetur',
        //  'color' => 'DarkSalmon',
        //  'height_cm' => '56',
        //  'width_cm' => '58',
        //  'depth_cm' => '50',
        //  'weight_gr' => '7',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 253,
        //  'categorie_id' => 1,
        //  'name' => 'nobis mollitia quia',
        //  'description' => 'Reiciendis beatae beatae dignissimos consequatur. Ad eveniet possimus deleniti dicta. Hic vero qui adipisci repudiandae aut velit.',
        //  'price' => '565.24',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb77?text=unde',
        //  'color' => 'Olive',
        //  'height_cm' => '92',
        //  'width_cm' => '72',
        //  'depth_cm' => '4',
        //  'weight_gr' => '12',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 254,
        //  'categorie_id' => 1,
        //  'name' => 'incidunt voluptatibus qui',
        //  'description' => 'Possimus exercitationem deleniti qui aut et nihil. Et magni magnam vel velit suscipit. Labore nulla quia et voluptatem consequatur aut.',
        //  'price' => '609.45',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbdd?text=explicabo',
        //  'color' => 'Orange',
        //  'height_cm' => '99',
        //  'width_cm' => '18',
        //  'depth_cm' => '16',
        //  'weight_gr' => '46',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 255,
        //  'categorie_id' => 1,
        //  'name' => 'aut voluptas autem',
        //  'description' => 'Qui culpa magni voluptatibus atque. Cum fugit non quam iste velit eligendi qui. Illum delectus aliquid nisi atque velit porro autem. Quia vel voluptatem nisi aliquid ut amet omnis.',
        //  'price' => '851.79',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002299?text=dicta',
        //  'color' => 'Plum',
        //  'height_cm' => '42',
        //  'width_cm' => '69',
        //  'depth_cm' => '37',
        //  'weight_gr' => '78',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 256,
        //  'categorie_id' => 1,
        //  'name' => 'est dolor aspernatur',
        //  'description' => 'Dolores doloremque velit veniam eaque et. Eius temporibus vero tempora voluptas exercitationem dolores enim. Sit atque aperiam et architecto. Nihil sed nisi voluptatum.',
        //  'price' => '24.71',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa00?text=rerum',
        //  'color' => 'DarkSalmon',
        //  'height_cm' => '94',
        //  'width_cm' => '90',
        //  'depth_cm' => '48',
        //  'weight_gr' => '22',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 257,
        //  'categorie_id' => 1,
        //  'name' => 'enim ea praesentium',
        //  'description' => 'Optio quasi eos saepe explicabo. Adipisci dolor ut repellendus rem perferendis. Quasi quam est voluptatem assumenda.',
        //  'price' => '312.09',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa44?text=repellat',
        //  'color' => 'DimGray',
        //  'height_cm' => '7',
        //  'width_cm' => '64',
        //  'depth_cm' => '66',
        //  'weight_gr' => '63',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 258,
        //  'categorie_id' => 1,
        //  'name' => 'aut et recusandae',
        //  'description' => 'Suscipit qui amet repellendus excepturi voluptates quas nisi. Ad quia libero ut qui aut et.',
        //  'price' => '971.77',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066dd?text=exercitationem',
        //  'color' => 'OldLace',
        //  'height_cm' => '64',
        //  'width_cm' => '95',
        //  'depth_cm' => '19',
        //  'weight_gr' => '59',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 259,
        //  'categorie_id' => 1,
        //  'name' => 'praesentium nobis ut',
        //  'description' => 'Sint harum reiciendis asperiores est nemo. Beatae quas eligendi qui et. Sunt sunt itaque consequuntur nihil deleniti consequatur.',
        //  'price' => '708.45',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0099ff?text=ipsa',
        //  'color' => 'YellowGreen',
        //  'height_cm' => '88',
        //  'width_cm' => '27',
        //  'depth_cm' => '37',
        //  'weight_gr' => '53',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 260,
        //  'categorie_id' => 1,
        //  'name' => 'animi molestiae molestias',
        //  'description' => 'Deserunt suscipit autem reiciendis ex quia molestiae. Ea vitae corporis reprehenderit fugit inventore. Nisi et voluptas praesentium et beatae eaque est.',
        //  'price' => '95.71',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088cc?text=voluptas',
        //  'color' => 'SandyBrown',
        //  'height_cm' => '1',
        //  'width_cm' => '81',
        //  'depth_cm' => '71',
        //  'weight_gr' => '8',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 261,
        //  'categorie_id' => 1,
        //  'name' => 'fugiat necessitatibus ut',
        //  'description' => 'Ex excepturi debitis commodi repellat omnis amet. Esse eveniet nihil eum et id. Nam voluptatem consequatur voluptatem qui quasi quia officiis natus. Earum quae quisquam eum ut et.',
        //  'price' => '882.98',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006688?text=commodi',
        //  'color' => 'Silver',
        //  'height_cm' => '81',
        //  'width_cm' => '24',
        //  'depth_cm' => '89',
        //  'weight_gr' => '54',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 262,
        //  'categorie_id' => 1,
        //  'name' => 'quo eligendi nostrum',
        //  'description' => 'Sit voluptas est ut pariatur voluptas voluptas sint. Quibusdam omnis odit eligendi illum voluptatem quibusdam omnis. Et repellat numquam vero ipsa et ut nihil ex.',
        //  'price' => '797.55',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007777?text=autem',
        //  'color' => 'SeaGreen',
        //  'height_cm' => '24',
        //  'width_cm' => '70',
        //  'depth_cm' => '62',
        //  'weight_gr' => '50',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 263,
        //  'categorie_id' => 1,
        //  'name' => 'libero nam provident',
        //  'description' => 'Quia in sequi est eum enim totam officiis. Consequatur quo sed consequatur occaecati. Ea sunt quia sit qui delectus voluptates repellendus.',
        //  'price' => '302.42',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011ff?text=vel',
        //  'color' => 'Ivory',
        //  'height_cm' => '93',
        //  'width_cm' => '15',
        //  'depth_cm' => '11',
        //  'weight_gr' => '23',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 264,
        //  'categorie_id' => 1,
        //  'name' => 'non nobis eum',
        //  'description' => 'Officia natus quas nemo nesciunt est. Assumenda quis dolorem nam quia. Et dignissimos dolorem asperiores sit consequatur et quia.',
        //  'price' => '5.01',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005544?text=possimus',
        //  'color' => 'LimeGreen',
        //  'height_cm' => '26',
        //  'width_cm' => '87',
        //  'depth_cm' => '22',
        //  'weight_gr' => '34',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 265,
        //  'categorie_id' => 1,
        //  'name' => 'et atque porro',
        //  'description' => 'Tempora fugit et numquam ad et. Ut cupiditate quo commodi ut voluptatibus aut velit. Cumque voluptatem vel ad nobis sunt. Voluptatem impedit rerum impedit et totam est fugiat qui.',
        //  'price' => '514.36',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002255?text=aut',
        //  'color' => 'MediumPurple',
        //  'height_cm' => '13',
        //  'width_cm' => '22',
        //  'depth_cm' => '28',
        //  'weight_gr' => '36',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 266,
        //  'categorie_id' => 1,
        //  'name' => 'vitae velit ut',
        //  'description' => 'Consequatur nihil culpa deleniti perferendis qui ut. Corporis saepe placeat deleniti error. Autem enim esse eligendi blanditiis rem.',
        //  'price' => '144.06',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009933?text=ea',
        //  'color' => 'DarkGoldenRod',
        //  'height_cm' => '67',
        //  'width_cm' => '17',
        //  'depth_cm' => '76',
        //  'weight_gr' => '19',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 267,
        //  'categorie_id' => 1,
        //  'name' => 'in eligendi eveniet',
        //  'description' => 'Recusandae non ut labore deserunt corporis dicta voluptatem. Quae illum minima autem deleniti corporis sint modi. Et et et atque possimus cumque et.',
        //  'price' => '416.64',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee33?text=reprehenderit',
        //  'color' => 'HotPink',
        //  'height_cm' => '27',
        //  'width_cm' => '39',
        //  'depth_cm' => '17',
        //  'weight_gr' => '67',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 268,
        //  'categorie_id' => 1,
        //  'name' => 'veritatis aliquam in',
        //  'description' => 'Est sit id qui reprehenderit. Vero voluptatem in nihil inventore. Numquam nobis id omnis similique tempore. Ullam provident non eos qui corporis maiores.',
        //  'price' => '102.03',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc99?text=ut',
        //  'color' => 'Brown',
        //  'height_cm' => '42',
        //  'width_cm' => '11',
        //  'depth_cm' => '4',
        //  'weight_gr' => '9',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 269,
        //  'categorie_id' => 1,
        //  'name' => 'dicta dolor et',
        //  'description' => 'Quas adipisci aut corporis. Doloremque rerum et rem blanditiis aut ipsa adipisci fugiat. Rem cum nesciunt quos consectetur dolores adipisci. Consequatur ipsam aspernatur iure libero sint et.',
        //  'price' => '351.42',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cccc?text=dolore',
        //  'color' => 'SkyBlue',
        //  'height_cm' => '32',
        //  'width_cm' => '47',
        //  'depth_cm' => '32',
        //  'weight_gr' => '49',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 270,
        //  'categorie_id' => 1,
        //  'name' => 'expedita id sint',
        //  'description' => 'Quasi magni fugit est qui facere. Et qui laborum quaerat ut eveniet iusto aperiam eos. Reprehenderit possimus placeat quos optio repudiandae.',
        //  'price' => '219.03',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aaff?text=eos',
        //  'color' => 'HotPink',
        //  'height_cm' => '54',
        //  'width_cm' => '18',
        //  'depth_cm' => '82',
        //  'weight_gr' => '72',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 271,
        //  'categorie_id' => 1,
        //  'name' => 'animi quam molestiae',
        //  'description' => 'Aliquam dolore magnam omnis voluptatum inventore qui est. Harum quia aut non. Culpa distinctio suscipit iste quibusdam non unde saepe.',
        //  'price' => '236.12',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001166?text=magnam',
        //  'color' => 'LightYellow',
        //  'height_cm' => '86',
        //  'width_cm' => '14',
        //  'depth_cm' => '1',
        //  'weight_gr' => '5',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 272,
        //  'categorie_id' => 1,
        //  'name' => 'rerum numquam distinctio',
        //  'description' => 'Cum et natus ut eos minus quo. Aut eius eligendi ab eligendi expedita omnis quod. Quis pariatur neque commodi sed veniam eaque.',
        //  'price' => '210.83',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc66?text=impedit',
        //  'color' => 'MediumSlateBlue',
        //  'height_cm' => '89',
        //  'width_cm' => '5',
        //  'depth_cm' => '3',
        //  'weight_gr' => '57',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 273,
        //  'categorie_id' => 1,
        //  'name' => 'quia facere ut',
        //  'description' => 'Ad omnis aut dolor veritatis occaecati. Qui magni ea dolorem quis vel delectus eveniet accusamus. Fugiat modi voluptate rerum nobis.',
        //  'price' => '131.15',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd44?text=et',
        //  'color' => 'Olive',
        //  'height_cm' => '52',
        //  'width_cm' => '42',
        //  'depth_cm' => '48',
        //  'weight_gr' => '28',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 274,
        //  'categorie_id' => 1,
        //  'name' => 'ex ad id',
        //  'description' => 'Aut accusantium quos non temporibus dolor occaecati sint sit. Omnis minima itaque dolores est at.',
        //  'price' => '758.49',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066aa?text=est',
        //  'color' => 'IndianRed',
        //  'height_cm' => '7',
        //  'width_cm' => '77',
        //  'depth_cm' => '74',
        //  'weight_gr' => '55',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 275,
        //  'categorie_id' => 1,
        //  'name' => 'voluptates molestiae saepe',
        //  'description' => 'Odit beatae debitis error. Soluta esse at eaque dolorum voluptate cupiditate. Ipsam atque exercitationem dolorem assumenda doloremque molestias.',
        //  'price' => '911.62',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066ee?text=fugit',
        //  'color' => 'SlateGray',
        //  'height_cm' => '85',
        //  'width_cm' => '51',
        //  'depth_cm' => '2',
        //  'weight_gr' => '75',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 276,
        //  'categorie_id' => 1,
        //  'name' => 'molestiae veniam et',
        //  'description' => 'Recusandae rem porro eveniet vitae nisi. Distinctio laudantium quasi molestiae voluptatibus. Autem repellat provident vero natus.',
        //  'price' => '851.40',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004411?text=saepe',
        //  'color' => 'Gold',
        //  'height_cm' => '52',
        //  'width_cm' => '92',
        //  'depth_cm' => '60',
        //  'weight_gr' => '88',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 277,
        //  'categorie_id' => 1,
        //  'name' => 'reiciendis aut omnis',
        //  'description' => 'Et veniam soluta accusantium vel. Temporibus doloribus quam eum. Ut dolorum omnis aut eligendi. Illo ut sed a omnis.',
        //  'price' => '965.73',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001199?text=atque',
        //  'color' => 'DarkSlateGray',
        //  'height_cm' => '27',
        //  'width_cm' => '97',
        //  'depth_cm' => '99',
        //  'weight_gr' => '6',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 278,
        //  'categorie_id' => 1,
        //  'name' => 'voluptates vel necessitatibus',
        //  'description' => 'Aut illum aut consequuntur numquam. Architecto adipisci accusamus sint doloribus incidunt explicabo aut et. Et tempora fugit voluptatum. Odit iure architecto consequatur in laboriosam harum et.',
        //  'price' => '743.40',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0000bb?text=aliquid',
        //  'color' => 'DarkTurquoise',
        //  'height_cm' => '71',
        //  'width_cm' => '60',
        //  'depth_cm' => '88',
        //  'weight_gr' => '30',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 279,
        //  'categorie_id' => 1,
        //  'name' => 'provident ducimus libero',
        //  'description' => 'Est recusandae quo pariatur voluptatum. Repellat voluptate non in quasi.',
        //  'price' => '887.50',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0000cc?text=quasi',
        //  'color' => 'Pink',
        //  'height_cm' => '23',
        //  'width_cm' => '56',
        //  'depth_cm' => '88',
        //  'weight_gr' => '70',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 280,
        //  'categorie_id' => 1,
        //  'name' => 'optio nobis qui',
        //  'description' => 'Ea minima repellendus nihil ipsum est. Commodi similique dolore sit quidem praesentium voluptatum laboriosam quia.',
        //  'price' => '494.88',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cccc?text=et',
        //  'color' => 'Maroon',
        //  'height_cm' => '52',
        //  'width_cm' => '23',
        //  'depth_cm' => '44',
        //  'weight_gr' => '44',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 281,
        //  'categorie_id' => 1,
        //  'name' => 'itaque occaecati sapiente',
        //  'description' => 'At cupiditate mollitia natus saepe harum et iusto est. Consequatur quae doloribus sint eligendi dolorum ullam ullam. Et earum architecto in est error sint.',
        //  'price' => '746.35',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff77?text=ut',
        //  'color' => 'MidnightBlue',
        //  'height_cm' => '5',
        //  'width_cm' => '34',
        //  'depth_cm' => '54',
        //  'weight_gr' => '85',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 282,
        //  'categorie_id' => 1,
        //  'name' => 'in non tenetur',
        //  'description' => 'Nemo sed sint voluptas ullam aut. Quis porro voluptas qui non eos optio inventore. Expedita quo enim illum qui nisi. Reiciendis omnis libero saepe harum.',
        //  'price' => '695.84',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eedd?text=nulla',
        //  'color' => 'Tomato',
        //  'height_cm' => '11',
        //  'width_cm' => '66',
        //  'depth_cm' => '46',
        //  'weight_gr' => '35',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 283,
        //  'categorie_id' => 1,
        //  'name' => 'quidem beatae aliquid',
        //  'description' => 'Sed ut eligendi est est fuga. Excepturi est et ut fugiat doloribus. Voluptatum expedita voluptatibus rerum a.',
        //  'price' => '353.91',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022dd?text=officia',
        //  'color' => 'DarkBlue',
        //  'height_cm' => '2',
        //  'width_cm' => '64',
        //  'depth_cm' => '12',
        //  'weight_gr' => '80',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 284,
        //  'categorie_id' => 1,
        //  'name' => 'vitae et sunt',
        //  'description' => 'Aperiam voluptates iste officiis ut officiis. Deserunt ut repudiandae delectus. Sunt sequi distinctio veritatis alias illum quia.',
        //  'price' => '127.97',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa99?text=eligendi',
        //  'color' => 'MediumPurple',
        //  'height_cm' => '90',
        //  'width_cm' => '78',
        //  'depth_cm' => '7',
        //  'weight_gr' => '12',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 285,
        //  'categorie_id' => 1,
        //  'name' => 'omnis consequatur deleniti',
        //  'description' => 'Ad omnis atque sequi incidunt. Non explicabo nemo ipsam vitae ipsum reiciendis. Assumenda autem quis sequi aut expedita ea.',
        //  'price' => '467.28',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eeee?text=ducimus',
        //  'color' => 'LawnGreen',
        //  'height_cm' => '52',
        //  'width_cm' => '45',
        //  'depth_cm' => '48',
        //  'weight_gr' => '3',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 286,
        //  'categorie_id' => 1,
        //  'name' => 'sit rem ipsa',
        //  'description' => 'Voluptate tempore id excepturi similique earum aspernatur. Ut eum asperiores voluptatem et. Id reiciendis officia nemo dolorum vel at est.',
        //  'price' => '451.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004411?text=eius',
        //  'color' => 'LightSlateGray',
        //  'height_cm' => '40',
        //  'width_cm' => '37',
        //  'depth_cm' => '59',
        //  'weight_gr' => '12',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 287,
        //  'categorie_id' => 1,
        //  'name' => 'cupiditate placeat laborum',
        //  'description' => 'Non ut aut consequuntur omnis voluptatem et. Tempore porro maxime ex aut libero. Quibusdam quia vitae numquam soluta et aspernatur in.',
        //  'price' => '316.66',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009900?text=rerum',
        //  'color' => 'Fuchsia',
        //  'height_cm' => '30',
        //  'width_cm' => '96',
        //  'depth_cm' => '48',
        //  'weight_gr' => '35',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 288,
        //  'categorie_id' => 1,
        //  'name' => 'vero est et',
        //  'description' => 'Recusandae non non molestias nihil. Sed sapiente veritatis cupiditate quasi. Tenetur hic eligendi quo dolor eum sapiente. Sed iure assumenda voluptatem non aliquam reprehenderit id inventore.',
        //  'price' => '431.02',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009988?text=quia',
        //  'color' => 'Black',
        //  'height_cm' => '56',
        //  'width_cm' => '100',
        //  'depth_cm' => '24',
        //  'weight_gr' => '46',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 289,
        //  'categorie_id' => 1,
        //  'name' => 'voluptates sunt assumenda',
        //  'description' => 'Saepe labore repellat est voluptatem eos. Consequuntur dolorem est dolorum rerum error dolores natus. Recusandae cumque dolor doloribus iste voluptatem.',
        //  'price' => '679.83',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa77?text=est',
        //  'color' => 'MediumPurple',
        //  'height_cm' => '85',
        //  'width_cm' => '28',
        //  'depth_cm' => '71',
        //  'weight_gr' => '91',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 290,
        //  'categorie_id' => 1,
        //  'name' => 'atque veniam aperiam',
        //  'description' => 'Repellat eos aut iste blanditiis eum quaerat voluptatem. Dolor vel facere est at culpa quaerat voluptas asperiores.',
        //  'price' => '117.86',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa33?text=aspernatur',
        //  'color' => 'LightGray',
        //  'height_cm' => '87',
        //  'width_cm' => '45',
        //  'depth_cm' => '62',
        //  'weight_gr' => '54',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 291,
        //  'categorie_id' => 1,
        //  'name' => 'dolor earum repellat',
        //  'description' => 'Consequatur nam tenetur deserunt tempore quasi. Officia consequatur alias animi quo repudiandae facilis. Commodi rem eaque perspiciatis sunt voluptatibus minus.',
        //  'price' => '323.65',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011ff?text=voluptatem',
        //  'color' => 'Sienna',
        //  'height_cm' => '65',
        //  'width_cm' => '9',
        //  'depth_cm' => '87',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 292,
        //  'categorie_id' => 1,
        //  'name' => 'magnam debitis id',
        //  'description' => 'Accusantium qui saepe minus beatae non minima id quam. Exercitationem ex ut ut optio et dolorum. Animi quia est est consequatur voluptas itaque dicta.',
        //  'price' => '196.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066bb?text=aut',
        //  'color' => 'HoneyDew',
        //  'height_cm' => '83',
        //  'width_cm' => '99',
        //  'depth_cm' => '62',
        //  'weight_gr' => '5',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 293,
        //  'categorie_id' => 1,
        //  'name' => 'beatae ipsum dignissimos',
        //  'description' => 'Consectetur similique velit sint provident maiores. Aliquid doloremque consequatur cum expedita. Sunt ullam ducimus rerum totam. Ducimus tempora cum sit asperiores.',
        //  'price' => '462.61',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022aa?text=accusantium',
        //  'color' => 'Coral',
        //  'height_cm' => '40',
        //  'width_cm' => '34',
        //  'depth_cm' => '76',
        //  'weight_gr' => '2',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 294,
        //  'categorie_id' => 1,
        //  'name' => 'aut recusandae natus',
        //  'description' => 'Harum eum repellat dolorum ut sint. Fugiat aut minima voluptates. Odio et hic dolores quas provident fugit. Harum cumque iure suscipit sit culpa omnis.',
        //  'price' => '128.63',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb44?text=numquam',
        //  'color' => 'Silver',
        //  'height_cm' => '3',
        //  'width_cm' => '68',
        //  'depth_cm' => '65',
        //  'weight_gr' => '42',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 295,
        //  'categorie_id' => 1,
        //  'name' => 'recusandae commodi possimus',
        //  'description' => 'Et ut aliquid deleniti omnis beatae voluptatem. Expedita consequatur ut tempora voluptate dolorem amet. Minima optio debitis iusto qui. Harum neque quam enim quis est incidunt aperiam.',
        //  'price' => '924.76',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc44?text=sed',
        //  'color' => 'PaleVioletRed',
        //  'height_cm' => '87',
        //  'width_cm' => '43',
        //  'depth_cm' => '42',
        //  'weight_gr' => '1',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 296,
        //  'categorie_id' => 1,
        //  'name' => 'officiis perspiciatis laudantium',
        //  'description' => 'Odit vitae non architecto rerum perferendis repellat tempore. Ea numquam ut optio qui hic et. Vero nesciunt nulla in tempora aut.',
        //  'price' => '499.74',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa11?text=modi',
        //  'color' => 'YellowGreen',
        //  'height_cm' => '87',
        //  'width_cm' => '41',
        //  'depth_cm' => '79',
        //  'weight_gr' => '79',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 297,
        //  'categorie_id' => 1,
        //  'name' => 'quod occaecati quasi',
        //  'description' => 'Aliquam perspiciatis adipisci nemo temporibus. Quaerat quia et pariatur qui repellendus eaque. Sed non sint provident. Quis eos illum quibusdam iste.',
        //  'price' => '387.07',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff22?text=consectetur',
        //  'color' => 'SandyBrown',
        //  'height_cm' => '88',
        //  'width_cm' => '42',
        //  'depth_cm' => '18',
        //  'weight_gr' => '14',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 298,
        //  'categorie_id' => 1,
        //  'name' => 'laboriosam neque non',
        //  'description' => 'Assumenda ut quidem aut. Voluptatem totam nobis quam ut quidem aut autem. Ad mollitia excepturi ut cum repellendus est architecto. Aut et et ut accusantium distinctio.',
        //  'price' => '258.13',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aacc?text=laudantium',
        //  'color' => 'FloralWhite',
        //  'height_cm' => '65',
        //  'width_cm' => '8',
        //  'depth_cm' => '82',
        //  'weight_gr' => '59',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 299,
        //  'categorie_id' => 1,
        //  'name' => 'minima earum assumenda',
        //  'description' => 'Ut cum id eveniet hic. Quis sed illo est. Ratione ut dolore ipsa blanditiis rem qui. Omnis ullam eveniet nihil ut omnis.',
        //  'price' => '934.11',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0044dd?text=magnam',
        //  'color' => 'Magenta',
        //  'height_cm' => '2',
        //  'width_cm' => '98',
        //  'depth_cm' => '18',
        //  'weight_gr' => '75',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 300,
        //  'categorie_id' => 1,
        //  'name' => 'et qui rerum',
        //  'description' => 'Voluptatem cumque qui eum aliquid vitae voluptatem quod. Quia aut dolorum nemo ex ut et voluptas.',
        //  'price' => '752.69',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff00?text=dolor',
        //  'color' => 'Aqua',
        //  'height_cm' => '96',
        //  'width_cm' => '35',
        //  'depth_cm' => '60',
        //  'weight_gr' => '78',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 301,
        //  'categorie_id' => 1,
        //  'name' => 'id laboriosam qui',
        //  'description' => 'Consequatur qui suscipit sed et sit. Adipisci facere blanditiis non aut quibusdam expedita illum.',
        //  'price' => '349.58',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002266?text=voluptas',
        //  'color' => 'PaleTurquoise',
        //  'height_cm' => '99',
        //  'width_cm' => '17',
        //  'depth_cm' => '54',
        //  'weight_gr' => '74',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 302,
        //  'categorie_id' => 1,
        //  'name' => 'numquam maiores exercitationem',
        //  'description' => 'Occaecati fugiat asperiores doloremque molestiae amet. Ut consequatur quidem aut vero sit omnis ut. Quam incidunt omnis adipisci sunt dolor occaecati qui.',
        //  'price' => '657.86',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff33?text=quos',
        //  'color' => 'Tomato',
        //  'height_cm' => '93',
        //  'width_cm' => '39',
        //  'depth_cm' => '53',
        //  'weight_gr' => '82',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 303,
        //  'categorie_id' => 1,
        //  'name' => 'reprehenderit corrupti aliquam',
        //  'description' => 'Earum incidunt ut magni eius aut veritatis corporis. Rem in repellat ea modi dolorum tempore. Soluta velit omnis voluptatem id quod alias et. Sapiente possimus dolorem dicta optio minima qui.',
        //  'price' => '915.89',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eedd?text=quis',
        //  'color' => 'OldLace',
        //  'height_cm' => '81',
        //  'width_cm' => '76',
        //  'depth_cm' => '40',
        //  'weight_gr' => '22',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 304,
        //  'categorie_id' => 1,
        //  'name' => 'qui rerum explicabo',
        //  'description' => 'Et eligendi occaecati veniam praesentium et voluptatem. Sit vitae reprehenderit autem natus ipsum quis veritatis.',
        //  'price' => '429.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd11?text=eum',
        //  'color' => 'MediumBlue',
        //  'height_cm' => '100',
        //  'width_cm' => '93',
        //  'depth_cm' => '3',
        //  'weight_gr' => '37',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 305,
        //  'categorie_id' => 1,
        //  'name' => 'officiis nihil nihil',
        //  'description' => 'Quia repellat magni eum suscipit temporibus. Tempora maiores ipsum quod dicta. Non est rem ut aut perferendis.',
        //  'price' => '726.84',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007766?text=odit',
        //  'color' => 'Wheat',
        //  'height_cm' => '26',
        //  'width_cm' => '89',
        //  'depth_cm' => '17',
        //  'weight_gr' => '80',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 306,
        //  'categorie_id' => 1,
        //  'name' => 'saepe vitae est',
        //  'description' => 'Necessitatibus et tenetur consequuntur accusantium ea et. Officiis sed in accusantium qui autem. Non explicabo exercitationem ea laborum autem. Nulla omnis suscipit tempora et ea non ut rerum.',
        //  'price' => '268.97',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007744?text=voluptatem',
        //  'color' => 'Purple',
        //  'height_cm' => '88',
        //  'width_cm' => '58',
        //  'depth_cm' => '20',
        //  'weight_gr' => '88',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 307,
        //  'categorie_id' => 1,
        //  'name' => 'vel natus optio',
        //  'description' => 'Ex veritatis animi dolore impedit consectetur. Dolores totam tempora fuga sint. Corporis quia id delectus tenetur. Necessitatibus et quia impedit provident.',
        //  'price' => '916.54',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088cc?text=quis',
        //  'color' => 'FloralWhite',
        //  'height_cm' => '86',
        //  'width_cm' => '47',
        //  'depth_cm' => '55',
        //  'weight_gr' => '26',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 308,
        //  'categorie_id' => 1,
        //  'name' => 'aut repellat sed',
        //  'description' => 'Omnis modi cum et et veritatis rem. In fugit autem eos voluptatem unde. Unde repellendus laudantium velit id et numquam qui unde.',
        //  'price' => '446.92',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aaaa?text=eaque',
        //  'color' => 'Chocolate',
        //  'height_cm' => '56',
        //  'width_cm' => '88',
        //  'depth_cm' => '2',
        //  'weight_gr' => '97',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 309,
        //  'categorie_id' => 1,
        //  'name' => 'iste pariatur optio',
        //  'description' => 'Laborum qui a asperiores quia nesciunt cum necessitatibus. Nostrum est minus harum et non similique possimus. Est non cupiditate consequatur facilis sunt velit. Quo facere beatae officiis.',
        //  'price' => '299.67',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc88?text=earum',
        //  'color' => 'Darkorange',
        //  'height_cm' => '76',
        //  'width_cm' => '8',
        //  'depth_cm' => '66',
        //  'weight_gr' => '63',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 310,
        //  'categorie_id' => 1,
        //  'name' => 'modi maxime aut',
        //  'description' => 'In natus modi qui necessitatibus dolores et consequuntur non. Voluptatibus maxime voluptatum sunt in. Assumenda error eveniet quasi voluptas quia voluptatum consequatur.',
        //  'price' => '16.58',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077bb?text=et',
        //  'color' => 'DarkSeaGreen',
        //  'height_cm' => '43',
        //  'width_cm' => '18',
        //  'depth_cm' => '10',
        //  'weight_gr' => '44',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 311,
        //  'categorie_id' => 1,
        //  'name' => 'mollitia enim ullam',
        //  'description' => 'Vitae temporibus quam veritatis pariatur fugiat. Natus quasi consequatur est numquam. Pariatur quis vitae numquam occaecati quaerat hic. Dolor deleniti earum et eius odio.',
        //  'price' => '55.07',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001111?text=enim',
        //  'color' => 'LightPink',
        //  'height_cm' => '45',
        //  'width_cm' => '14',
        //  'depth_cm' => '31',
        //  'weight_gr' => '2',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 312,
        //  'categorie_id' => 1,
        //  'name' => 'quas doloremque id',
        //  'description' => 'Nam rerum sit ut. Cupiditate aut aut eveniet blanditiis ea veritatis adipisci. Sed et iste voluptatem est aut. Aut tempora sunt cumque adipisci distinctio rerum.',
        //  'price' => '774.33',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa77?text=laudantium',
        //  'color' => 'MediumVioletRed',
        //  'height_cm' => '48',
        //  'width_cm' => '7',
        //  'depth_cm' => '75',
        //  'weight_gr' => '79',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 313,
        //  'categorie_id' => 1,
        //  'name' => 'perspiciatis molestiae ad',
        //  'description' => 'Consequatur et veniam explicabo labore blanditiis. Porro nostrum optio temporibus deserunt distinctio dolores similique. Voluptatem maxime ducimus sed et et ut et.',
        //  'price' => '10.19',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000033?text=vitae',
        //  'color' => 'BlueViolet',
        //  'height_cm' => '25',
        //  'width_cm' => '12',
        //  'depth_cm' => '84',
        //  'weight_gr' => '3',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 314,
        //  'categorie_id' => 1,
        //  'name' => 'officiis illum tempore',
        //  'description' => 'Aut eos est dolorem ad. Et consectetur et nam sit quae aut. Esse id incidunt sint.',
        //  'price' => '873.13',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008844?text=dolorem',
        //  'color' => 'Linen',
        //  'height_cm' => '15',
        //  'width_cm' => '33',
        //  'depth_cm' => '66',
        //  'weight_gr' => '39',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 315,
        //  'categorie_id' => 1,
        //  'name' => 'nostrum quasi sunt',
        //  'description' => 'Sit adipisci et nulla earum. Recusandae ut fuga architecto est sint a facere. Omnis omnis totam ex aut nostrum earum. Praesentium veritatis repellendus molestiae dolor ducimus.',
        //  'price' => '662.55',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007766?text=qui',
        //  'color' => 'PapayaWhip',
        //  'height_cm' => '29',
        //  'width_cm' => '57',
        //  'depth_cm' => '29',
        //  'weight_gr' => '59',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 316,
        //  'categorie_id' => 1,
        //  'name' => 'dolorem repellendus occaecati',
        //  'description' => 'Numquam sequi nihil aut magni. Magnam dolorem suscipit aut libero laboriosam tempore. Atque est cum quis aut sunt consectetur sit voluptatum.',
        //  'price' => '516.10',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000044?text=dolores',
        //  'color' => 'CadetBlue',
        //  'height_cm' => '49',
        //  'width_cm' => '48',
        //  'depth_cm' => '39',
        //  'weight_gr' => '78',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 317,
        //  'categorie_id' => 1,
        //  'name' => 'omnis similique odio',
        //  'description' => 'Excepturi architecto eum sit rerum eos. Consequuntur ut soluta est minima.',
        //  'price' => '407.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003388?text=eius',
        //  'color' => 'Gold',
        //  'height_cm' => '5',
        //  'width_cm' => '86',
        //  'depth_cm' => '24',
        //  'weight_gr' => '57',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 318,
        //  'categorie_id' => 1,
        //  'name' => 'et ut et',
        //  'description' => 'Est vero et corrupti ex. Quo autem officia aliquid fugiat ullam necessitatibus est. Quia non adipisci explicabo accusamus corporis sunt illo harum. Rem dolor voluptatum aut.',
        //  'price' => '897.09',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000088?text=fugit',
        //  'color' => 'LightGray',
        //  'height_cm' => '29',
        //  'width_cm' => '4',
        //  'depth_cm' => '85',
        //  'weight_gr' => '54',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 319,
        //  'categorie_id' => 1,
        //  'name' => 'consequatur quia sed',
        //  'description' => 'Dolores aut ex tempora qui sint qui expedita. Rerum perferendis consequatur quas quis voluptatem. Quidem adipisci eos nisi sit voluptas. Sapiente reprehenderit laborum optio magni natus dignissimos.',
        //  'price' => '608.73',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022bb?text=nostrum',
        //  'color' => 'Aqua',
        //  'height_cm' => '14',
        //  'width_cm' => '6',
        //  'depth_cm' => '57',
        //  'weight_gr' => '68',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 320,
        //  'categorie_id' => 1,
        //  'name' => 'excepturi culpa quia',
        //  'description' => 'Enim ullam accusantium numquam consequatur. Animi autem repellendus ut velit. Facere expedita tempore repellendus praesentium non.',
        //  'price' => '11.37',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff11?text=tempore',
        //  'color' => 'Green',
        //  'height_cm' => '2',
        //  'width_cm' => '47',
        //  'depth_cm' => '83',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 321,
        //  'categorie_id' => 1,
        //  'name' => 'aliquid ut nihil',
        //  'description' => 'Dolor eaque ratione totam enim. Voluptas distinctio nobis quia sed temporibus facere laborum. In nihil assumenda vel. Laudantium doloremque animi modi rerum repellat nihil cupiditate.',
        //  'price' => '546.93',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc11?text=eos',
        //  'color' => 'LightSlateGray',
        //  'height_cm' => '70',
        //  'width_cm' => '80',
        //  'depth_cm' => '71',
        //  'weight_gr' => '78',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 322,
        //  'categorie_id' => 1,
        //  'name' => 'amet quibusdam doloribus',
        //  'description' => 'Qui consequatur eveniet voluptatem earum soluta. Qui labore ut beatae debitis sequi autem. Voluptatibus quibusdam et cumque ad in.',
        //  'price' => '325.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb66?text=ullam',
        //  'color' => 'Black',
        //  'height_cm' => '27',
        //  'width_cm' => '38',
        //  'depth_cm' => '31',
        //  'weight_gr' => '30',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 323,
        //  'categorie_id' => 1,
        //  'name' => 'atque nam veritatis',
        //  'description' => 'Qui porro porro perspiciatis ut nostrum placeat modi fugit. Natus ut eius molestias rerum ea. Ut quibusdam occaecati facere corporis quia. Temporibus est unde non est.',
        //  'price' => '409.68',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0033dd?text=sed',
        //  'color' => 'Gold',
        //  'height_cm' => '42',
        //  'width_cm' => '68',
        //  'depth_cm' => '60',
        //  'weight_gr' => '57',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 324,
        //  'categorie_id' => 1,
        //  'name' => 'expedita non ut',
        //  'description' => 'Quisquam totam voluptatum illo a cumque sint. Qui eos a quo est. Delectus dicta minus sed quo corporis et.',
        //  'price' => '116.87',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004422?text=fugiat',
        //  'color' => 'Sienna',
        //  'height_cm' => '20',
        //  'width_cm' => '70',
        //  'depth_cm' => '38',
        //  'weight_gr' => '71',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 325,
        //  'categorie_id' => 1,
        //  'name' => 'odit totam iure',
        //  'description' => 'Maiores labore molestias est sint doloribus. Consequuntur excepturi sit aut. Consequatur doloremque labore blanditiis explicabo ipsa qui corporis.',
        //  'price' => '513.17',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee44?text=aut',
        //  'color' => 'Aquamarine',
        //  'height_cm' => '70',
        //  'width_cm' => '89',
        //  'depth_cm' => '30',
        //  'weight_gr' => '79',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 326,
        //  'categorie_id' => 1,
        //  'name' => 'quo qui blanditiis',
        //  'description' => 'Sequi dicta qui repellat sed quo corrupti. Cupiditate aut eius voluptates fugit.',
        //  'price' => '952.61',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc11?text=laboriosam',
        //  'color' => 'PaleTurquoise',
        //  'height_cm' => '71',
        //  'width_cm' => '37',
        //  'depth_cm' => '37',
        //  'weight_gr' => '50',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 327,
        //  'categorie_id' => 1,
        //  'name' => 'quia fugiat sed',
        //  'description' => 'Animi sint eum et quae animi suscipit. Quo expedita iure aut maiores minima. Nobis fugiat beatae aut sint et aut aperiam. Amet nihil quod in dolorem. Vitae sunt quidem molestiae ut ad nostrum omnis.',
        //  'price' => '129.69',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011cc?text=ut',
        //  'color' => 'Sienna',
        //  'height_cm' => '8',
        //  'width_cm' => '41',
        //  'depth_cm' => '1',
        //  'weight_gr' => '8',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 328,
        //  'categorie_id' => 1,
        //  'name' => 'dolor enim laudantium',
        //  'description' => 'Molestiae nobis dolorum ea harum laudantium fugiat. Quia quae dolores mollitia. Ex saepe ipsam nihil deleniti deserunt.',
        //  'price' => '168.07',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb77?text=voluptas',
        //  'color' => 'Gainsboro',
        //  'height_cm' => '2',
        //  'width_cm' => '46',
        //  'depth_cm' => '30',
        //  'weight_gr' => '97',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 329,
        //  'categorie_id' => 1,
        //  'name' => 'qui sed sed',
        //  'description' => 'Amet molestias dolorem deleniti est et. Non dolorum perferendis tempore voluptatem non iure quia. Amet ut aut ullam fuga perferendis ab. Quis corporis beatae tenetur.',
        //  'price' => '865.03',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006622?text=necessitatibus',
        //  'color' => 'LimeGreen',
        //  'height_cm' => '84',
        //  'width_cm' => '3',
        //  'depth_cm' => '47',
        //  'weight_gr' => '43',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 330,
        //  'categorie_id' => 1,
        //  'name' => 'qui aliquid laborum',
        //  'description' => 'Id inventore voluptatibus possimus necessitatibus. Provident ea veritatis soluta tempore. Non architecto cupiditate fugit ipsum voluptas. Sunt illum necessitatibus explicabo.',
        //  'price' => '903.87',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006688?text=minima',
        //  'color' => 'LightSlateGray',
        //  'height_cm' => '48',
        //  'width_cm' => '25',
        //  'depth_cm' => '93',
        //  'weight_gr' => '68',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 331,
        //  'categorie_id' => 1,
        //  'name' => 'laudantium facilis illum',
        //  'description' => 'Nulla porro quo quaerat magnam. Quia amet asperiores ut magni possimus cum. At delectus doloribus et rerum omnis illo. Nisi iusto sint dolor consectetur.',
        //  'price' => '37.76',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088aa?text=qui',
        //  'color' => 'SaddleBrown',
        //  'height_cm' => '46',
        //  'width_cm' => '90',
        //  'depth_cm' => '82',
        //  'weight_gr' => '93',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 332,
        //  'categorie_id' => 1,
        //  'name' => 'dolorem et et',
        //  'description' => 'Exercitationem doloribus deserunt voluptate possimus rerum ipsam pariatur. Fugiat modi saepe exercitationem nihil. Ut harum deleniti quia beatae magnam et.',
        //  'price' => '225.02',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb99?text=sunt',
        //  'color' => 'Brown',
        //  'height_cm' => '14',
        //  'width_cm' => '71',
        //  'depth_cm' => '81',
        //  'weight_gr' => '17',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 333,
        //  'categorie_id' => 1,
        //  'name' => 'dolor pariatur ducimus',
        //  'description' => 'Consectetur asperiores molestiae repellendus placeat minus ipsum. Iure quia quidem autem quis repellendus nulla quidem nobis. Ab velit modi consequatur quis recusandae optio.',
        //  'price' => '870.50',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee00?text=esse',
        //  'color' => 'DarkRed',
        //  'height_cm' => '100',
        //  'width_cm' => '77',
        //  'depth_cm' => '39',
        //  'weight_gr' => '52',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 334,
        //  'categorie_id' => 1,
        //  'name' => 'eos voluptas repellendus',
        //  'description' => 'Ad et ut earum sequi tempore nihil accusantium. Fugiat optio voluptatum excepturi delectus quaerat dignissimos et. Beatae distinctio aut doloribus explicabo veniam.',
        //  'price' => '814.20',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee33?text=rerum',
        //  'color' => 'Chocolate',
        //  'height_cm' => '20',
        //  'width_cm' => '42',
        //  'depth_cm' => '22',
        //  'weight_gr' => '68',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 335,
        //  'categorie_id' => 1,
        //  'name' => 'sunt vero amet',
        //  'description' => 'Alias praesentium inventore vero ipsum aliquid ut cum voluptatem. Optio sint dolorem quam animi. Minus aut ab neque et sit quaerat. Laboriosam quo molestiae sint eos quis.',
        //  'price' => '390.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa66?text=eligendi',
        //  'color' => 'Magenta',
        //  'height_cm' => '6',
        //  'width_cm' => '92',
        //  'depth_cm' => '44',
        //  'weight_gr' => '6',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 336,
        //  'categorie_id' => 1,
        //  'name' => 'tempore nesciunt fuga',
        //  'description' => 'Laborum facere et aut et amet asperiores et et. Dolorum non asperiores nostrum praesentium neque tenetur temporibus aut.',
        //  'price' => '32.96',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011cc?text=dignissimos',
        //  'color' => 'LightPink',
        //  'height_cm' => '95',
        //  'width_cm' => '88',
        //  'depth_cm' => '46',
        //  'weight_gr' => '7',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 337,
        //  'categorie_id' => 1,
        //  'name' => 'modi id ab',
        //  'description' => 'Distinctio aperiam autem est sint necessitatibus similique sit. Quaerat dolor ipsum similique qui. Perferendis optio consectetur ratione laudantium odit recusandae nemo. Non eligendi id eius sed.',
        //  'price' => '563.67',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011ff?text=iste',
        //  'color' => 'LightSkyBlue',
        //  'height_cm' => '5',
        //  'width_cm' => '16',
        //  'depth_cm' => '12',
        //  'weight_gr' => '12',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 338,
        //  'categorie_id' => 1,
        //  'name' => 'recusandae atque id',
        //  'description' => 'Quas laudantium eaque et autem quam velit quia. Tempore voluptas quia quia esse. Nihil inventore quia impedit dolores.',
        //  'price' => '345.95',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc33?text=laudantium',
        //  'color' => 'Chocolate',
        //  'height_cm' => '83',
        //  'width_cm' => '29',
        //  'depth_cm' => '78',
        //  'weight_gr' => '62',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 339,
        //  'categorie_id' => 1,
        //  'name' => 'pariatur id labore',
        //  'description' => 'Eum harum repudiandae esse. Voluptatibus autem dolorum voluptatem libero debitis quo. Placeat id deserunt beatae vitae. Ratione aut fugit quasi sit in ipsum.',
        //  'price' => '699.75',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088ff?text=sint',
        //  'color' => 'DodgerBlue',
        //  'height_cm' => '17',
        //  'width_cm' => '4',
        //  'depth_cm' => '93',
        //  'weight_gr' => '19',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 340,
        //  'categorie_id' => 1,
        //  'name' => 'iste qui laboriosam',
        //  'description' => 'At ratione et quis quas odio. Neque est aspernatur eos provident. Vel et quo quaerat eum fugiat quaerat. Facere voluptates illum ut quaerat est repellendus excepturi.',
        //  'price' => '729.41',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088bb?text=est',
        //  'color' => 'PaleTurquoise',
        //  'height_cm' => '74',
        //  'width_cm' => '54',
        //  'depth_cm' => '82',
        //  'weight_gr' => '37',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 341,
        //  'categorie_id' => 1,
        //  'name' => 'odio doloremque rem',
        //  'description' => 'Et temporibus nostrum ut et. Consectetur id aut dicta repudiandae aliquid quasi ut quis.',
        //  'price' => '629.88',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011cc?text=et',
        //  'color' => 'Snow',
        //  'height_cm' => '9',
        //  'width_cm' => '80',
        //  'depth_cm' => '95',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 342,
        //  'categorie_id' => 1,
        //  'name' => 'qui vel aut',
        //  'description' => 'Asperiores quis esse omnis aliquid. Iusto cupiditate distinctio ea ad. Et ut natus quo.',
        //  'price' => '972.42',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb66?text=distinctio',
        //  'color' => 'PapayaWhip',
        //  'height_cm' => '47',
        //  'width_cm' => '76',
        //  'depth_cm' => '58',
        //  'weight_gr' => '84',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 343,
        //  'categorie_id' => 1,
        //  'name' => 'facilis sed aut',
        //  'description' => 'Aliquam itaque sint dolores repudiandae ea voluptas tempora. Vel harum nihil ducimus labore eaque beatae. Quia aut maiores minima dolore reprehenderit. Deserunt consectetur voluptates voluptate rem.',
        //  'price' => '527.38',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007766?text=esse',
        //  'color' => 'PowderBlue',
        //  'height_cm' => '33',
        //  'width_cm' => '10',
        //  'depth_cm' => '41',
        //  'weight_gr' => '72',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 344,
        //  'categorie_id' => 1,
        //  'name' => 'est in deserunt',
        //  'description' => 'Aperiam nesciunt nulla possimus voluptatem eum id. Eaque autem eos mollitia inventore velit voluptate. Quod qui natus incidunt quisquam dolor distinctio. Quidem et odio praesentium corrupti ipsam.',
        //  'price' => '115.90',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008833?text=dolorem',
        //  'color' => 'ForestGreen',
        //  'height_cm' => '96',
        //  'width_cm' => '1',
        //  'depth_cm' => '85',
        //  'weight_gr' => '51',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 345,
        //  'categorie_id' => 1,
        //  'name' => 'consectetur consectetur deleniti',
        //  'description' => 'Autem omnis est rerum est qui. Eaque voluptatem quia accusamus provident totam numquam. Ab expedita ut repellat animi occaecati a aut.',
        //  'price' => '138.99',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eedd?text=consequuntur',
        //  'color' => 'Black',
        //  'height_cm' => '66',
        //  'width_cm' => '55',
        //  'depth_cm' => '29',
        //  'weight_gr' => '98',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 346,
        //  'categorie_id' => 1,
        //  'name' => 'temporibus sint non',
        //  'description' => 'Et eum unde sed nisi molestiae autem. Illum sit adipisci eligendi id unde. Et vel repellat earum necessitatibus praesentium.',
        //  'price' => '96.73',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009988?text=ipsum',
        //  'color' => 'NavajoWhite',
        //  'height_cm' => '61',
        //  'width_cm' => '77',
        //  'depth_cm' => '18',
        //  'weight_gr' => '58',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 347,
        //  'categorie_id' => 1,
        //  'name' => 'iusto eligendi aliquid',
        //  'description' => 'Dicta eos autem perferendis et aut eius ullam. Libero excepturi est cumque provident et enim. Nobis ut ad possimus.',
        //  'price' => '886.76',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee00?text=soluta',
        //  'color' => 'Gainsboro',
        //  'height_cm' => '74',
        //  'width_cm' => '27',
        //  'depth_cm' => '71',
        //  'weight_gr' => '2',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 348,
        //  'categorie_id' => 1,
        //  'name' => 'ratione cupiditate labore',
        //  'description' => 'Unde hic consequatur eius et iusto. Atque aspernatur natus pariatur. Quo sunt mollitia veritatis id eveniet.',
        //  'price' => '368.78',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0000cc?text=quis',
        //  'color' => 'DodgerBlue',
        //  'height_cm' => '23',
        //  'width_cm' => '5',
        //  'depth_cm' => '63',
        //  'weight_gr' => '69',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 349,
        //  'categorie_id' => 1,
        //  'name' => 'dolores dolorum omnis',
        //  'description' => 'Enim in enim quo eius. Veniam expedita fugiat fugiat eos repudiandae asperiores praesentium. Est praesentium velit labore veniam ratione. Ut aut magni quia velit quia eum magni.',
        //  'price' => '890.31',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009955?text=provident',
        //  'color' => 'SpringGreen',
        //  'height_cm' => '60',
        //  'width_cm' => '52',
        //  'depth_cm' => '40',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 350,
        //  'categorie_id' => 1,
        //  'name' => 'accusantium natus labore',
        //  'description' => 'Corrupti labore adipisci voluptas dicta pariatur. Libero corrupti illum sint ullam dolor. Sit soluta harum error ut.',
        //  'price' => '227.28',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb66?text=consectetur',
        //  'color' => 'DarkSlateBlue',
        //  'height_cm' => '41',
        //  'width_cm' => '54',
        //  'depth_cm' => '25',
        //  'weight_gr' => '87',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 351,
        //  'categorie_id' => 1,
        //  'name' => 'quam dolore quisquam',
        //  'description' => 'Qui consequatur qui fugit eius animi magni. Id ut fuga unde et eveniet. In possimus optio autem quod cumque nihil. Quis cum velit minima dolore voluptatibus odit amet.',
        //  'price' => '885.63',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008844?text=est',
        //  'color' => 'Bisque',
        //  'height_cm' => '3',
        //  'width_cm' => '27',
        //  'depth_cm' => '67',
        //  'weight_gr' => '15',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 352,
        //  'categorie_id' => 1,
        //  'name' => 'sunt natus enim',
        //  'description' => 'Ea ab nesciunt in deserunt aut et. Aut qui repellat facere quaerat eum. Omnis sint ad aspernatur. Non aut labore et.',
        //  'price' => '718.40',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ffbb?text=nisi',
        //  'color' => 'MediumSpringGreen',
        //  'height_cm' => '28',
        //  'width_cm' => '66',
        //  'depth_cm' => '52',
        //  'weight_gr' => '73',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 353,
        //  'categorie_id' => 1,
        //  'name' => 'modi aut fugiat',
        //  'description' => 'Repellat fuga amet sed dicta. Repudiandae ex molestiae eaque possimus voluptatem. Cum est eum culpa sed.',
        //  'price' => '184.83',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003300?text=voluptatem',
        //  'color' => 'SpringGreen',
        //  'height_cm' => '5',
        //  'width_cm' => '52',
        //  'depth_cm' => '78',
        //  'weight_gr' => '99',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 354,
        //  'categorie_id' => 1,
        //  'name' => 'perferendis quidem provident',
        //  'description' => 'Dolores sint illo et. Repellendus aut qui sequi officia dolore corrupti.',
        //  'price' => '298.88',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa66?text=veritatis',
        //  'color' => 'DarkBlue',
        //  'height_cm' => '98',
        //  'width_cm' => '70',
        //  'depth_cm' => '86',
        //  'weight_gr' => '79',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 355,
        //  'categorie_id' => 1,
        //  'name' => 'explicabo ut corrupti',
        //  'description' => 'Et occaecati odit quos hic. Voluptas quia et autem veritatis aut sit maiores. Tenetur quo cupiditate corporis illum reiciendis.',
        //  'price' => '318.34',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002222?text=aut',
        //  'color' => 'BlanchedAlmond',
        //  'height_cm' => '75',
        //  'width_cm' => '36',
        //  'depth_cm' => '63',
        //  'weight_gr' => '29',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 356,
        //  'categorie_id' => 1,
        //  'name' => 'nihil vero nulla',
        //  'description' => 'Dolores labore id ut ipsum rerum provident temporibus. Ut dolores qui atque ab quod soluta occaecati.',
        //  'price' => '628.11',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001122?text=autem',
        //  'color' => 'Aquamarine',
        //  'height_cm' => '74',
        //  'width_cm' => '60',
        //  'depth_cm' => '90',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 357,
        //  'categorie_id' => 1,
        //  'name' => 'et possimus officia',
        //  'description' => 'Voluptas et adipisci maxime. Explicabo eos libero ipsa cupiditate quia et molestiae. Eum nihil ipsam fugit repudiandae. Et et mollitia odio corporis ipsa fugit nesciunt laboriosam.',
        //  'price' => '904.77',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee00?text=quia',
        //  'color' => 'Silver',
        //  'height_cm' => '31',
        //  'width_cm' => '34',
        //  'depth_cm' => '82',
        //  'weight_gr' => '36',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 358,
        //  'categorie_id' => 1,
        //  'name' => 'voluptatem est quidem',
        //  'description' => 'Voluptates quis aut quis harum. Omnis rem alias quam non. In dolorem aut ipsam magnam fugiat culpa.',
        //  'price' => '656.97',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005599?text=itaque',
        //  'color' => 'DarkSeaGreen',
        //  'height_cm' => '15',
        //  'width_cm' => '40',
        //  'depth_cm' => '44',
        //  'weight_gr' => '49',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 359,
        //  'categorie_id' => 1,
        //  'name' => 'qui et sapiente',
        //  'description' => 'Deleniti iusto commodi ipsam sit minus nostrum sed. Quae et nostrum ullam dolorem perspiciatis qui ut non. Doloremque sit est sunt magnam aut porro voluptatem.',
        //  'price' => '854.49',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005599?text=similique',
        //  'color' => 'Tomato',
        //  'height_cm' => '86',
        //  'width_cm' => '68',
        //  'depth_cm' => '69',
        //  'weight_gr' => '88',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 360,
        //  'categorie_id' => 1,
        //  'name' => 'sed iure et',
        //  'description' => 'Esse repellat vel voluptate et hic nulla cupiditate. Ut voluptatem incidunt molestiae sed et non commodi qui. Vitae aut velit asperiores eius consectetur deserunt et.',
        //  'price' => '845.43',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb22?text=ducimus',
        //  'color' => 'DarkSlateBlue',
        //  'height_cm' => '53',
        //  'width_cm' => '41',
        //  'depth_cm' => '46',
        //  'weight_gr' => '31',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 361,
        //  'categorie_id' => 1,
        //  'name' => 'et voluptatum officia',
        //  'description' => 'Ut vel in et eligendi neque. Non corrupti explicabo non ad. Consequatur inventore debitis qui officiis voluptatem assumenda ipsam.',
        //  'price' => '553.77',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0088ee?text=necessitatibus',
        //  'color' => 'LightSlateGray',
        //  'height_cm' => '83',
        //  'width_cm' => '30',
        //  'depth_cm' => '58',
        //  'weight_gr' => '30',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 362,
        //  'categorie_id' => 1,
        //  'name' => 'aut praesentium ut',
        //  'description' => 'Adipisci deserunt asperiores quo aspernatur odio tempore. Magnam alias accusantium qui saepe quaerat.',
        //  'price' => '739.33',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0055bb?text=et',
        //  'color' => 'MintCream',
        //  'height_cm' => '23',
        //  'width_cm' => '44',
        //  'depth_cm' => '69',
        //  'weight_gr' => '44',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 363,
        //  'categorie_id' => 1,
        //  'name' => 'nisi ab cupiditate',
        //  'description' => 'Porro distinctio sapiente odio inventore. Vel blanditiis quae dicta. Voluptatibus laborum occaecati qui. Ut a ratione provident repellat hic. Ipsum illo quo quisquam rerum voluptas.',
        //  'price' => '967.78',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa11?text=in',
        //  'color' => 'Chocolate',
        //  'height_cm' => '58',
        //  'width_cm' => '92',
        //  'depth_cm' => '95',
        //  'weight_gr' => '66',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 364,
        //  'categorie_id' => 1,
        //  'name' => 'ut reprehenderit aliquam',
        //  'description' => 'Vitae velit ipsum numquam iure animi vitae. Tenetur facilis in dolorem sit omnis quas consectetur. Iure eaque aut omnis.',
        //  'price' => '422.65',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005500?text=nam',
        //  'color' => 'HoneyDew',
        //  'height_cm' => '77',
        //  'width_cm' => '21',
        //  'depth_cm' => '65',
        //  'weight_gr' => '34',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 365,
        //  'categorie_id' => 1,
        //  'name' => 'nobis nostrum tenetur',
        //  'description' => 'Vel officiis ea quis in ullam nihil distinctio. Autem aspernatur omnis voluptatem et sit dicta. Non labore repellendus dolorem aut. Ex est ipsum aspernatur nihil sit error at est.',
        //  'price' => '643.05',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa77?text=totam',
        //  'color' => 'Orchid',
        //  'height_cm' => '69',
        //  'width_cm' => '2',
        //  'depth_cm' => '46',
        //  'weight_gr' => '13',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 366,
        //  'categorie_id' => 1,
        //  'name' => 'et magnam qui',
        //  'description' => 'Quas voluptas ipsam officia. Magnam consequuntur iusto eligendi. Iusto rerum commodi nam rerum quasi sint vel. Voluptate repellendus deserunt ut illum recusandae eum.',
        //  'price' => '260.24',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000033?text=ipsam',
        //  'color' => 'RoyalBlue',
        //  'height_cm' => '65',
        //  'width_cm' => '28',
        //  'depth_cm' => '81',
        //  'weight_gr' => '36',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 367,
        //  'categorie_id' => 1,
        //  'name' => 'mollitia ducimus quis',
        //  'description' => 'Aperiam dolor amet repudiandae aperiam. Recusandae vel eos est et. Perferendis ut delectus laborum. Ex sapiente reprehenderit culpa.',
        //  'price' => '743.15',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ddaa?text=provident',
        //  'color' => 'Tan',
        //  'height_cm' => '63',
        //  'width_cm' => '41',
        //  'depth_cm' => '69',
        //  'weight_gr' => '81',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 368,
        //  'categorie_id' => 1,
        //  'name' => 'nostrum assumenda itaque',
        //  'description' => 'Magni minus expedita molestias accusamus pariatur sit. Placeat voluptatum enim consectetur id autem. Molestiae nobis ea voluptatem sint sed nesciunt aut. Alias iure earum commodi hic eligendi.',
        //  'price' => '269.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001155?text=sequi',
        //  'color' => 'MistyRose',
        //  'height_cm' => '80',
        //  'width_cm' => '58',
        //  'depth_cm' => '13',
        //  'weight_gr' => '47',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 369,
        //  'categorie_id' => 1,
        //  'name' => 'expedita non laudantium',
        //  'description' => 'Dolorum ad iusto vitae. Aut et quibusdam cumque perferendis porro iure provident. Suscipit impedit ex ullam repellat enim vel sed. Quos consequatur non officiis tempora quam fuga voluptas.',
        //  'price' => '4.16',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb77?text=et',
        //  'color' => 'SkyBlue',
        //  'height_cm' => '16',
        //  'width_cm' => '14',
        //  'depth_cm' => '14',
        //  'weight_gr' => '1',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 370,
        //  'categorie_id' => 1,
        //  'name' => 'eos ut vero',
        //  'description' => 'Ab accusamus quaerat ut. Placeat fuga repellendus veniam qui. Natus quidem harum et. Doloremque sequi consequatur autem expedita eos.',
        //  'price' => '477.34',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa66?text=voluptatem',
        //  'color' => 'DarkSlateBlue',
        //  'height_cm' => '90',
        //  'width_cm' => '50',
        //  'depth_cm' => '63',
        //  'weight_gr' => '25',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 371,
        //  'categorie_id' => 1,
        //  'name' => 'cumque eveniet quia',
        //  'description' => 'Minima eveniet eius ipsum. Odit vitae aspernatur cupiditate aut. Provident sit molestiae quidem ut voluptates id quam.',
        //  'price' => '759.95',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003311?text=asperiores',
        //  'color' => 'DarkTurquoise',
        //  'height_cm' => '92',
        //  'width_cm' => '21',
        //  'depth_cm' => '28',
        //  'weight_gr' => '4',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 372,
        //  'categorie_id' => 1,
        //  'name' => 'officiis odit fugit',
        //  'description' => 'Sit voluptatem qui eligendi quaerat. Ad fugit aut eligendi. Quibusdam aut ab cupiditate sit at. Itaque sit accusantium qui et provident facere nam.',
        //  'price' => '107.20',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eeaa?text=est',
        //  'color' => 'Green',
        //  'height_cm' => '29',
        //  'width_cm' => '95',
        //  'depth_cm' => '70',
        //  'weight_gr' => '30',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 373,
        //  'categorie_id' => 1,
        //  'name' => 'perspiciatis et quis',
        //  'description' => 'Ut rem quos iste aut. Et debitis consequatur voluptatem sit repellat. Et ab omnis eum ut quia et. Dolores nostrum atque voluptates qui voluptatem. Excepturi velit facilis doloremque maxime.',
        //  'price' => '915.24',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbee?text=accusantium',
        //  'color' => 'MidnightBlue',
        //  'height_cm' => '49',
        //  'width_cm' => '70',
        //  'depth_cm' => '71',
        //  'weight_gr' => '32',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 374,
        //  'categorie_id' => 1,
        //  'name' => 'sed qui quia',
        //  'description' => 'Sit omnis tenetur accusamus quo et ipsa. Nihil deleniti vel minima sit aut et exercitationem. Tenetur blanditiis quod sed doloremque nam.',
        //  'price' => '741.51',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008877?text=non',
        //  'color' => 'Chartreuse',
        //  'height_cm' => '55',
        //  'width_cm' => '58',
        //  'depth_cm' => '21',
        //  'weight_gr' => '54',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 375,
        //  'categorie_id' => 1,
        //  'name' => 'error rerum voluptatem',
        //  'description' => 'Nemo eos sed aliquid. Quam ipsa ut consectetur quas. Voluptatem occaecati est accusantium saepe reprehenderit. Molestias labore est alias accusamus consequatur voluptatem et.',
        //  'price' => '837.12',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022aa?text=dolore',
        //  'color' => 'LightGoldenRodYellow',
        //  'height_cm' => '40',
        //  'width_cm' => '18',
        //  'depth_cm' => '58',
        //  'weight_gr' => '12',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 376,
        //  'categorie_id' => 1,
        //  'name' => 'itaque voluptas hic',
        //  'description' => 'Velit ad harum ad aspernatur atque occaecati omnis. In dolorum sit nemo aut voluptas assumenda. Totam adipisci a velit delectus vel. Nesciunt ut est ut et quo consequatur atque.',
        //  'price' => '277.80',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ccff?text=maiores',
        //  'color' => 'Chocolate',
        //  'height_cm' => '36',
        //  'width_cm' => '28',
        //  'depth_cm' => '11',
        //  'weight_gr' => '46',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 377,
        //  'categorie_id' => 1,
        //  'name' => 'suscipit ipsam ratione',
        //  'description' => 'Dolorem blanditiis molestias non porro non asperiores. Aliquid dolor hic itaque eaque omnis. Amet dolorem magni vitae qui non alias est.',
        //  'price' => '648.86',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbaa?text=porro',
        //  'color' => 'DarkSeaGreen',
        //  'height_cm' => '21',
        //  'width_cm' => '51',
        //  'depth_cm' => '53',
        //  'weight_gr' => '43',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 378,
        //  'categorie_id' => 1,
        //  'name' => 'omnis veniam tempora',
        //  'description' => 'Placeat temporibus ut corrupti et molestiae qui. Odit fugiat neque ab at neque. Voluptatem ea ea sed nam qui.',
        //  'price' => '55.38',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eeff?text=dolore',
        //  'color' => 'Navy',
        //  'height_cm' => '74',
        //  'width_cm' => '49',
        //  'depth_cm' => '23',
        //  'weight_gr' => '100',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 379,
        //  'categorie_id' => 1,
        //  'name' => 'sint minus reprehenderit',
        //  'description' => 'Asperiores est deserunt dignissimos pariatur iusto. Explicabo et quidem error aut fugit tempore. Qui dolores earum omnis eaque aut est minus. Non quia nisi ea libero beatae.',
        //  'price' => '931.35',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000000?text=dolorem',
        //  'color' => 'Yellow',
        //  'height_cm' => '33',
        //  'width_cm' => '86',
        //  'depth_cm' => '7',
        //  'weight_gr' => '71',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 380,
        //  'categorie_id' => 1,
        //  'name' => 'et numquam enim',
        //  'description' => 'Omnis et dolor possimus fugiat. Sit distinctio ad tempore eos earum. Et qui dicta sit nihil exercitationem.',
        //  'price' => '420.05',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001100?text=non',
        //  'color' => 'MediumPurple',
        //  'height_cm' => '24',
        //  'width_cm' => '91',
        //  'depth_cm' => '79',
        //  'weight_gr' => '87',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 381,
        //  'categorie_id' => 1,
        //  'name' => 'voluptas labore id',
        //  'description' => 'Fugit ut dolorem vero enim sed. Quia quod eum dolorem atque. Voluptas vitae sunt dicta inventore. Ut consectetur quo vitae sed quae ut et.',
        //  'price' => '236.20',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff33?text=aut',
        //  'color' => 'Linen',
        //  'height_cm' => '11',
        //  'width_cm' => '4',
        //  'depth_cm' => '31',
        //  'weight_gr' => '28',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 382,
        //  'categorie_id' => 1,
        //  'name' => 'vitae sed suscipit',
        //  'description' => 'Ut unde aperiam ut aut sunt quas ex. Aut unde id id esse. Assumenda vel vel laboriosam sequi praesentium omnis dolor.',
        //  'price' => '820.03',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002288?text=in',
        //  'color' => 'Salmon',
        //  'height_cm' => '94',
        //  'width_cm' => '1',
        //  'depth_cm' => '25',
        //  'weight_gr' => '73',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 383,
        //  'categorie_id' => 1,
        //  'name' => 'illum recusandae possimus',
        //  'description' => 'Magnam in non ad sed pariatur necessitatibus similique omnis. Sunt eius impedit fuga nam blanditiis reiciendis non incidunt. Similique voluptatem veritatis consectetur vel repellendus.',
        //  'price' => '424.05',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc99?text=dignissimos',
        //  'color' => 'LightSlateGray',
        //  'height_cm' => '21',
        //  'width_cm' => '21',
        //  'depth_cm' => '56',
        //  'weight_gr' => '19',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 384,
        //  'categorie_id' => 1,
        //  'name' => 'similique perferendis doloribus',
        //  'description' => 'Rerum expedita nostrum fugit nisi facere dignissimos neque reiciendis. Est omnis esse commodi. Nemo consequatur quia amet maxime aut qui sit dolor.',
        //  'price' => '704.00',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009988?text=vitae',
        //  'color' => 'PaleGoldenRod',
        //  'height_cm' => '8',
        //  'width_cm' => '95',
        //  'depth_cm' => '63',
        //  'weight_gr' => '71',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 385,
        //  'categorie_id' => 1,
        //  'name' => 'ut dolorum qui',
        //  'description' => 'Qui quisquam tempore dicta perspiciatis minima deleniti dolore. Cumque alias et incidunt quis perspiciatis eum.',
        //  'price' => '621.17',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008811?text=unde',
        //  'color' => 'SeaShell',
        //  'height_cm' => '54',
        //  'width_cm' => '51',
        //  'depth_cm' => '37',
        //  'weight_gr' => '2',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 386,
        //  'categorie_id' => 1,
        //  'name' => 'libero autem quia',
        //  'description' => 'Quam sit explicabo ducimus. Vel dolores adipisci ut distinctio et aut debitis veritatis. Velit et a omnis et.',
        //  'price' => '310.70',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0099ee?text=expedita',
        //  'color' => 'Beige',
        //  'height_cm' => '35',
        //  'width_cm' => '90',
        //  'depth_cm' => '82',
        //  'weight_gr' => '12',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 387,
        //  'categorie_id' => 1,
        //  'name' => 'et id qui',
        //  'description' => 'Doloribus reiciendis vel corrupti quo. Dignissimos architecto libero enim aut. Et incidunt aperiam dolorum voluptate. Sit vitae eaque et ea.',
        //  'price' => '292.91',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006677?text=iusto',
        //  'color' => 'LightBlue',
        //  'height_cm' => '43',
        //  'width_cm' => '7',
        //  'depth_cm' => '23',
        //  'weight_gr' => '77',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 388,
        //  'categorie_id' => 1,
        //  'name' => 'velit suscipit exercitationem',
        //  'description' => 'Sit ut nobis molestiae eaque inventore mollitia quis. Ab est voluptas vel aliquid inventore. Provident quo ut assumenda natus voluptas molestias. Eveniet quisquam dolorem sit eos totam vel.',
        //  'price' => '852.55',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001111?text=nobis',
        //  'color' => 'LavenderBlush',
        //  'height_cm' => '68',
        //  'width_cm' => '85',
        //  'depth_cm' => '94',
        //  'weight_gr' => '3',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 389,
        //  'categorie_id' => 1,
        //  'name' => 'ut et soluta',
        //  'description' => 'Unde eveniet qui quisquam non et eveniet aut. Omnis fugiat quas id assumenda aut blanditiis rerum dolorem. Dolorem enim nihil dicta quam non nesciunt. Harum nesciunt corrupti fuga cumque mollitia id.',
        //  'price' => '682.42',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011ff?text=blanditiis',
        //  'color' => 'Beige',
        //  'height_cm' => '37',
        //  'width_cm' => '36',
        //  'depth_cm' => '48',
        //  'weight_gr' => '3',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 390,
        //  'categorie_id' => 1,
        //  'name' => 'magnam aspernatur repellendus',
        //  'description' => 'Consectetur eius ipsum et nostrum a. Enim dolorem in vero omnis. Error laudantium sit rerum aperiam. Quasi sint eius sit error. Occaecati esse dolores eius sit voluptas beatae voluptatem.',
        //  'price' => '7.05',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006699?text=porro',
        //  'color' => 'Linen',
        //  'height_cm' => '15',
        //  'width_cm' => '57',
        //  'depth_cm' => '96',
        //  'weight_gr' => '95',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 391,
        //  'categorie_id' => 1,
        //  'name' => 'non molestias animi',
        //  'description' => 'Non sint porro repellendus inventore ut. Veniam autem porro odio accusantium sed. Dignissimos impedit provident sit dolores et. Temporibus tempore accusantium sunt.',
        //  'price' => '407.15',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006677?text=facere',
        //  'color' => 'SeaShell',
        //  'height_cm' => '42',
        //  'width_cm' => '33',
        //  'depth_cm' => '67',
        //  'weight_gr' => '68',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 392,
        //  'categorie_id' => 1,
        //  'name' => 'sunt nesciunt aut',
        //  'description' => 'Aspernatur tenetur incidunt consequuntur eum veritatis. Omnis dolor deserunt facilis tempora magnam ad reprehenderit. Architecto similique et quia consequatur. Porro officia eum esse.',
        //  'price' => '673.78',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0000aa?text=quos',
        //  'color' => 'Darkorange',
        //  'height_cm' => '77',
        //  'width_cm' => '10',
        //  'depth_cm' => '52',
        //  'weight_gr' => '21',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 393,
        //  'categorie_id' => 1,
        //  'name' => 'et dolor dolores',
        //  'description' => 'Inventore et officia architecto qui explicabo optio. Repellat quo adipisci sed dolore aut. Magnam ipsum non ipsam molestias.',
        //  'price' => '9.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009944?text=quia',
        //  'color' => 'LightSkyBlue',
        //  'height_cm' => '31',
        //  'width_cm' => '25',
        //  'depth_cm' => '6',
        //  'weight_gr' => '21',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 394,
        //  'categorie_id' => 1,
        //  'name' => 'nobis consequatur repudiandae',
        //  'description' => 'Soluta ea eum magni et animi. Quos qui aspernatur velit quam. Animi et quod quaerat et doloremque. Est voluptas cumque deserunt quo minus. Eum et ex consequuntur repellendus neque.',
        //  'price' => '849.35',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0099ff?text=facere',
        //  'color' => 'FloralWhite',
        //  'height_cm' => '70',
        //  'width_cm' => '38',
        //  'depth_cm' => '37',
        //  'weight_gr' => '34',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 395,
        //  'categorie_id' => 1,
        //  'name' => 'aspernatur ratione cum',
        //  'description' => 'Alias nesciunt officiis ea nam ipsam ducimus in aperiam. Debitis qui maxime rem pariatur ea. Ducimus totam voluptas velit commodi perspiciatis. Molestiae eum mollitia reiciendis facilis commodi.',
        //  'price' => '925.64',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee11?text=voluptate',
        //  'color' => 'PaleVioletRed',
        //  'height_cm' => '34',
        //  'width_cm' => '4',
        //  'depth_cm' => '23',
        //  'weight_gr' => '86',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 396,
        //  'categorie_id' => 1,
        //  'name' => 'quis repellat voluptas',
        //  'description' => 'Aut temporibus et sit minus architecto voluptatem doloribus. Ut illo omnis enim ut commodi. Est tempore iste aliquid id voluptatem quis.',
        //  'price' => '180.10',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003333?text=animi',
        //  'color' => 'OliveDrab',
        //  'height_cm' => '36',
        //  'width_cm' => '89',
        //  'depth_cm' => '46',
        //  'weight_gr' => '55',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 397,
        //  'categorie_id' => 1,
        //  'name' => 'magnam voluptatem et',
        //  'description' => 'Molestias dolorem nisi explicabo eius qui nihil consequatur dicta. Corrupti occaecati sit aut dolorem excepturi veniam odio. Earum at laudantium cupiditate vel laboriosam et quaerat.',
        //  'price' => '612.08',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ffee?text=aut',
        //  'color' => 'DarkGreen',
        //  'height_cm' => '32',
        //  'width_cm' => '86',
        //  'depth_cm' => '47',
        //  'weight_gr' => '24',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 398,
        //  'categorie_id' => 1,
        //  'name' => 'omnis fugit omnis',
        //  'description' => 'Vel et totam architecto. Aut ex beatae rerum ut vel officiis. Molestias aut eius hic praesentium. Reiciendis laborum et soluta et molestiae qui dolor.',
        //  'price' => '638.89',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003300?text=dolor',
        //  'color' => 'Aqua',
        //  'height_cm' => '45',
        //  'width_cm' => '45',
        //  'depth_cm' => '73',
        //  'weight_gr' => '59',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 399,
        //  'categorie_id' => 1,
        //  'name' => 'id voluptatem voluptate',
        //  'description' => 'Amet accusamus aut temporibus aspernatur. Est nam molestiae et quos ducimus aut aut.',
        //  'price' => '488.45',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022aa?text=asperiores',
        //  'color' => 'DeepSkyBlue',
        //  'height_cm' => '35',
        //  'width_cm' => '49',
        //  'depth_cm' => '49',
        //  'weight_gr' => '12',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 400,
        //  'categorie_id' => 1,
        //  'name' => 'eius illum ut',
        //  'description' => 'Qui consequatur impedit aut consequatur. Ab temporibus dolorum dolor odio libero mollitia.',
        //  'price' => '285.84',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee77?text=temporibus',
        //  'color' => 'Bisque',
        //  'height_cm' => '73',
        //  'width_cm' => '40',
        //  'depth_cm' => '41',
        //  'weight_gr' => '69',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 401,
        //  'categorie_id' => 1,
        //  'name' => 'et suscipit assumenda',
        //  'description' => 'Atque adipisci commodi non veritatis maiores sed consectetur eum. Saepe sunt voluptas consectetur occaecati. Sed ut excepturi quia dolores non. Soluta corporis non id.',
        //  'price' => '764.17',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee11?text=optio',
        //  'color' => 'LightSeaGreen',
        //  'height_cm' => '77',
        //  'width_cm' => '58',
        //  'depth_cm' => '98',
        //  'weight_gr' => '77',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 402,
        //  'categorie_id' => 1,
        //  'name' => 'perferendis suscipit ut',
        //  'description' => 'Dolores ut est debitis nam eum. Mollitia ea necessitatibus et provident. Ab est voluptatum eligendi odio.',
        //  'price' => '440.91',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022bb?text=voluptas',
        //  'color' => 'DarkSeaGreen',
        //  'height_cm' => '46',
        //  'width_cm' => '82',
        //  'depth_cm' => '32',
        //  'weight_gr' => '59',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 403,
        //  'categorie_id' => 1,
        //  'name' => 'sit nihil quae',
        //  'description' => 'Laudantium id officiis laborum placeat. Laboriosam perferendis qui hic distinctio sequi quo.',
        //  'price' => '369.56',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0033bb?text=illo',
        //  'color' => 'Gainsboro',
        //  'height_cm' => '83',
        //  'width_cm' => '99',
        //  'depth_cm' => '92',
        //  'weight_gr' => '33',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 404,
        //  'categorie_id' => 1,
        //  'name' => 'vitae velit consectetur',
        //  'description' => 'Rerum sit dolores consectetur dolores blanditiis. Minima adipisci sint ea repellat at reprehenderit. Illum aut molestiae quis et nisi cumque culpa. Non mollitia vitae et placeat et aut veritatis.',
        //  'price' => '241.64',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee11?text=aut',
        //  'color' => 'CadetBlue',
        //  'height_cm' => '13',
        //  'width_cm' => '55',
        //  'depth_cm' => '22',
        //  'weight_gr' => '41',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 405,
        //  'categorie_id' => 1,
        //  'name' => 'sint iusto eius',
        //  'description' => 'Maiores ea molestiae aut deserunt qui aut. Pariatur sed deleniti voluptatem. Quia vitae eos nemo est. Sapiente illo et blanditiis consequatur tempore.',
        //  'price' => '215.12',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066dd?text=accusantium',
        //  'color' => 'YellowGreen',
        //  'height_cm' => '57',
        //  'width_cm' => '16',
        //  'depth_cm' => '9',
        //  'weight_gr' => '36',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 406,
        //  'categorie_id' => 1,
        //  'name' => 'ut suscipit reprehenderit',
        //  'description' => 'Aut non deleniti sint et architecto et soluta similique. Quas sint eos qui numquam amet recusandae eum. Magnam voluptatum vel optio ut vel labore qui.',
        //  'price' => '517.09',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff00?text=rerum',
        //  'color' => 'LightSteelBlue',
        //  'height_cm' => '62',
        //  'width_cm' => '99',
        //  'depth_cm' => '29',
        //  'weight_gr' => '20',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 407,
        //  'categorie_id' => 1,
        //  'name' => 'ratione adipisci consequatur',
        //  'description' => 'Incidunt modi eius aut enim et. Sed iusto doloremque vitae at aut corrupti. Nostrum itaque quod autem et magni. Quae debitis et omnis optio asperiores atque.',
        //  'price' => '321.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077aa?text=omnis',
        //  'color' => 'PaleVioletRed',
        //  'height_cm' => '35',
        //  'width_cm' => '90',
        //  'depth_cm' => '97',
        //  'weight_gr' => '55',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 408,
        //  'categorie_id' => 1,
        //  'name' => 'praesentium quidem consequatur',
        //  'description' => 'Nesciunt rem ut mollitia odit. Voluptates ea occaecati ut quisquam quasi. Quia aut velit deleniti sunt libero et cumque beatae. Rerum impedit reiciendis neque doloremque ut vel.',
        //  'price' => '688.61',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022ff?text=ut',
        //  'color' => 'AntiqueWhite',
        //  'height_cm' => '64',
        //  'width_cm' => '56',
        //  'depth_cm' => '78',
        //  'weight_gr' => '96',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 409,
        //  'categorie_id' => 1,
        //  'name' => 'molestias ut quisquam',
        //  'description' => 'At dolore similique doloribus et voluptas non. Impedit error minus quia qui sequi ut sit. Sit porro alias consectetur autem sed saepe. Porro iste iure expedita alias ipsum.',
        //  'price' => '179.88',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005599?text=animi',
        //  'color' => 'DarkMagenta',
        //  'height_cm' => '69',
        //  'width_cm' => '32',
        //  'depth_cm' => '25',
        //  'weight_gr' => '83',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 410,
        //  'categorie_id' => 1,
        //  'name' => 'pariatur labore eum',
        //  'description' => 'Debitis aliquid nulla ratione earum quia veritatis. Unde enim veniam reiciendis. Necessitatibus fugiat similique est soluta nihil corporis nam.',
        //  'price' => '207.52',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0099dd?text=fuga',
        //  'color' => 'Beige',
        //  'height_cm' => '4',
        //  'width_cm' => '1',
        //  'depth_cm' => '81',
        //  'weight_gr' => '61',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 411,
        //  'categorie_id' => 1,
        //  'name' => 'non itaque modi',
        //  'description' => 'Libero qui animi aut ut non. Voluptatibus enim minima consectetur est voluptate earum. Placeat voluptatem quia nostrum voluptatibus nesciunt est et est. Et quis modi mollitia autem cum provident et.',
        //  'price' => '738.93',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb00?text=amet',
        //  'color' => 'CornflowerBlue',
        //  'height_cm' => '78',
        //  'width_cm' => '60',
        //  'depth_cm' => '35',
        //  'weight_gr' => '37',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 412,
        //  'categorie_id' => 1,
        //  'name' => 'quia architecto officia',
        //  'description' => 'Accusantium animi iure eligendi. Alias aut dolore et nesciunt molestias. Alias voluptates aut voluptas.',
        //  'price' => '905.26',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc22?text=minima',
        //  'color' => 'PaleGreen',
        //  'height_cm' => '30',
        //  'width_cm' => '29',
        //  'depth_cm' => '78',
        //  'weight_gr' => '60',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 413,
        //  'categorie_id' => 1,
        //  'name' => 'ea impedit consequatur',
        //  'description' => 'Corrupti enim aut cum nihil ipsa fugiat doloremque ut. Magnam doloribus est impedit architecto aliquam. Aut praesentium aut corporis unde esse veritatis.',
        //  'price' => '168.48',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009922?text=iste',
        //  'color' => 'Turquoise',
        //  'height_cm' => '33',
        //  'width_cm' => '64',
        //  'depth_cm' => '28',
        //  'weight_gr' => '71',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 414,
        //  'categorie_id' => 1,
        //  'name' => 'eum maxime quis',
        //  'description' => 'Odio et amet in consequatur ipsa. Eum est molestiae officiis nihil quam sequi in vel. In repellat eum aliquam eos ut. Nostrum culpa aut rerum ut.',
        //  'price' => '528.75',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0055dd?text=eum',
        //  'color' => 'PaleVioletRed',
        //  'height_cm' => '26',
        //  'width_cm' => '86',
        //  'depth_cm' => '12',
        //  'weight_gr' => '64',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 415,
        //  'categorie_id' => 1,
        //  'name' => 'qui officia autem',
        //  'description' => 'Atque sint praesentium placeat dolor perspiciatis non. Reprehenderit explicabo a nulla eaque quas. Id nesciunt et esse eos enim debitis natus.',
        //  'price' => '799.79',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009988?text=maxime',
        //  'color' => 'DarkSlateGray',
        //  'height_cm' => '79',
        //  'width_cm' => '67',
        //  'depth_cm' => '46',
        //  'weight_gr' => '47',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 416,
        //  'categorie_id' => 1,
        //  'name' => 'adipisci praesentium similique',
        //  'description' => 'Corporis est omnis dolorem consequatur. Suscipit deserunt laudantium sit autem commodi. Consequatur voluptates enim eligendi corporis. Et reiciendis repellendus est porro est sit itaque.',
        //  'price' => '963.31',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007700?text=nisi',
        //  'color' => 'SpringGreen',
        //  'height_cm' => '46',
        //  'width_cm' => '40',
        //  'depth_cm' => '7',
        //  'weight_gr' => '90',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 417,
        //  'categorie_id' => 1,
        //  'name' => 'dolore rem sequi',
        //  'description' => 'Sit fugiat vel nesciunt praesentium. Et ut labore adipisci alias consequatur aperiam molestiae hic. Aut non at et quod quae numquam.',
        //  'price' => '952.10',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009955?text=soluta',
        //  'color' => 'Aquamarine',
        //  'height_cm' => '20',
        //  'width_cm' => '59',
        //  'depth_cm' => '18',
        //  'weight_gr' => '43',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 418,
        //  'categorie_id' => 1,
        //  'name' => 'facere et autem',
        //  'description' => 'Sed voluptatem quod perferendis quo rerum eligendi voluptatem. Earum praesentium enim sequi tenetur. Beatae nesciunt fugiat maiores repellat.',
        //  'price' => '535.23',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011aa?text=nulla',
        //  'color' => 'GoldenRod',
        //  'height_cm' => '66',
        //  'width_cm' => '45',
        //  'depth_cm' => '85',
        //  'weight_gr' => '26',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 419,
        //  'categorie_id' => 1,
        //  'name' => 'voluptatem possimus enim',
        //  'description' => 'Architecto quasi est distinctio placeat maxime. Qui vel molestiae natus repellat facilis. Sequi tempore deserunt rerum quisquam necessitatibus. Nihil suscipit officia unde praesentium.',
        //  'price' => '253.84',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb33?text=doloremque',
        //  'color' => 'DarkViolet',
        //  'height_cm' => '43',
        //  'width_cm' => '53',
        //  'depth_cm' => '80',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 420,
        //  'categorie_id' => 1,
        //  'name' => 'laudantium sunt nostrum',
        //  'description' => 'Unde eligendi pariatur ea atque. Veritatis sed eum error nostrum sequi perspiciatis impedit. Animi et ipsam neque alias.',
        //  'price' => '829.21',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aacc?text=sed',
        //  'color' => 'LimeGreen',
        //  'height_cm' => '66',
        //  'width_cm' => '11',
        //  'depth_cm' => '44',
        //  'weight_gr' => '40',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 421,
        //  'categorie_id' => 1,
        //  'name' => 'laudantium qui eaque',
        //  'description' => 'Non nemo doloribus deserunt expedita voluptatibus minus facilis ut. Est reiciendis sit non delectus est neque sunt.',
        //  'price' => '617.05',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004433?text=et',
        //  'color' => 'Blue',
        //  'height_cm' => '48',
        //  'width_cm' => '82',
        //  'depth_cm' => '24',
        //  'weight_gr' => '5',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 422,
        //  'categorie_id' => 1,
        //  'name' => 'et fugiat minus',
        //  'description' => 'Accusamus consequatur quasi fugiat. Ut quaerat voluptatibus dicta aut quidem. Et esse aut iste eveniet. Libero rem ex omnis repellendus fugiat. Quia voluptatem eaque nihil voluptatem impedit.',
        //  'price' => '371.64',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006633?text=nihil',
        //  'color' => 'Olive',
        //  'height_cm' => '77',
        //  'width_cm' => '82',
        //  'depth_cm' => '20',
        //  'weight_gr' => '79',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 423,
        //  'categorie_id' => 1,
        //  'name' => 'deserunt eveniet totam',
        //  'description' => 'Illo sed quam dolorem et. Sequi iste aspernatur quisquam id sed beatae consequuntur. Laboriosam est maxime voluptas mollitia quasi sit.',
        //  'price' => '55.56',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007733?text=dolores',
        //  'color' => 'Olive',
        //  'height_cm' => '99',
        //  'width_cm' => '72',
        //  'depth_cm' => '1',
        //  'weight_gr' => '24',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 424,
        //  'categorie_id' => 1,
        //  'name' => 'aspernatur facilis incidunt',
        //  'description' => 'Et cum accusamus vitae atque omnis mollitia amet in. Quos sed laboriosam et optio tempora. Ipsum non dicta repellendus omnis ut ullam.',
        //  'price' => '298.87',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ffcc?text=et',
        //  'color' => 'SandyBrown',
        //  'height_cm' => '75',
        //  'width_cm' => '71',
        //  'depth_cm' => '67',
        //  'weight_gr' => '15',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 425,
        //  'categorie_id' => 1,
        //  'name' => 'modi quia deleniti',
        //  'description' => 'Et aut non possimus aut quibusdam quaerat quis. Rerum eum quidem velit qui blanditiis aut. Facilis iure aut unde quia voluptatem accusamus. Praesentium ab odio quis voluptate veritatis aperiam autem.',
        //  'price' => '50.40',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0033ff?text=voluptas',
        //  'color' => 'Navy',
        //  'height_cm' => '18',
        //  'width_cm' => '96',
        //  'depth_cm' => '30',
        //  'weight_gr' => '62',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 426,
        //  'categorie_id' => 1,
        //  'name' => 'dicta aliquam voluptatem',
        //  'description' => 'Delectus consequuntur nobis neque quisquam natus sit ducimus laboriosam. Provident dolor sint voluptatum laboriosam quos ratione eum autem. Sed non non quis est facere sit consequatur ab.',
        //  'price' => '92.52',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000099?text=ut',
        //  'color' => 'Olive',
        //  'height_cm' => '10',
        //  'width_cm' => '80',
        //  'depth_cm' => '79',
        //  'weight_gr' => '50',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 427,
        //  'categorie_id' => 1,
        //  'name' => 'facilis enim iure',
        //  'description' => 'Incidunt deleniti nihil tenetur nostrum ut sit recusandae. Et ex cumque nobis. Vitae et explicabo distinctio eum dolor. Nesciunt quasi blanditiis provident impedit. Voluptate est aperiam neque est.',
        //  'price' => '84.58',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011bb?text=dignissimos',
        //  'color' => 'Crimson',
        //  'height_cm' => '7',
        //  'width_cm' => '52',
        //  'depth_cm' => '70',
        //  'weight_gr' => '36',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 428,
        //  'categorie_id' => 1,
        //  'name' => 'officia repellendus dolor',
        //  'description' => 'Atque voluptas omnis eligendi occaecati est tenetur. A atque aut voluptatum sit eligendi est saepe omnis. Non id vel et incidunt nostrum possimus voluptatem aut.',
        //  'price' => '442.71',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000022?text=hic',
        //  'color' => 'DarkCyan',
        //  'height_cm' => '31',
        //  'width_cm' => '58',
        //  'depth_cm' => '62',
        //  'weight_gr' => '93',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 429,
        //  'categorie_id' => 1,
        //  'name' => 'odio harum assumenda',
        //  'description' => 'Enim quia nobis quis alias sed aut. Quia dignissimos vel quis. Optio numquam ut eum consectetur quisquam hic. Non molestiae dolorem quia assumenda necessitatibus et.',
        //  'price' => '254.16',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa55?text=fuga',
        //  'color' => 'DarkMagenta',
        //  'height_cm' => '63',
        //  'width_cm' => '93',
        //  'depth_cm' => '94',
        //  'weight_gr' => '91',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 430,
        //  'categorie_id' => 1,
        //  'name' => 'eos sed occaecati',
        //  'description' => 'Omnis possimus asperiores quo aut facilis vel. Expedita dolor voluptas et unde. Sed voluptatum et eligendi voluptas nemo. Quibusdam est dolor impedit voluptas nemo.',
        //  'price' => '187.24',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ffaa?text=voluptatem',
        //  'color' => 'DarkSlateBlue',
        //  'height_cm' => '17',
        //  'width_cm' => '77',
        //  'depth_cm' => '40',
        //  'weight_gr' => '29',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 431,
        //  'categorie_id' => 1,
        //  'name' => 'labore dolor molestiae',
        //  'description' => 'Quaerat delectus reiciendis et soluta nisi. Non quos consequatur id illum ut id. Soluta et in cumque occaecati dolores ab quisquam.',
        //  'price' => '45.64',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001199?text=molestiae',
        //  'color' => 'Darkorange',
        //  'height_cm' => '8',
        //  'width_cm' => '64',
        //  'depth_cm' => '76',
        //  'weight_gr' => '64',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 432,
        //  'categorie_id' => 1,
        //  'name' => 'eum vero nam',
        //  'description' => 'Enim deleniti facilis nisi enim ut veritatis. Sed quam enim placeat assumenda dolorum asperiores laudantium aut. Dolores vero autem illo. Facilis voluptas cum debitis deserunt.',
        //  'price' => '218.54',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077bb?text=qui',
        //  'color' => 'MistyRose',
        //  'height_cm' => '54',
        //  'width_cm' => '98',
        //  'depth_cm' => '95',
        //  'weight_gr' => '50',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 433,
        //  'categorie_id' => 1,
        //  'name' => 'dicta odio nihil',
        //  'description' => 'Fuga dolor ut voluptas ut quaerat. Ipsum ipsam neque ea ex soluta aliquam culpa. Repellat quo explicabo nulla culpa consequatur animi.',
        //  'price' => '4.95',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006666?text=dolor',
        //  'color' => 'Orange',
        //  'height_cm' => '77',
        //  'width_cm' => '78',
        //  'depth_cm' => '45',
        //  'weight_gr' => '86',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 434,
        //  'categorie_id' => 1,
        //  'name' => 'sed delectus quos',
        //  'description' => 'Et maiores et velit sed delectus qui nam. Et magni praesentium dolorem autem voluptatem itaque. Sint ab excepturi nobis incidunt vel alias qui.',
        //  'price' => '613.54',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ccff?text=corrupti',
        //  'color' => 'MediumOrchid',
        //  'height_cm' => '25',
        //  'width_cm' => '19',
        //  'depth_cm' => '56',
        //  'weight_gr' => '36',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 435,
        //  'categorie_id' => 1,
        //  'name' => 'delectus qui in',
        //  'description' => 'Nihil vero aut in culpa. Qui dolorem explicabo ipsa ullam nisi sed sint. Similique suscipit et fugiat. Officiis quam fugiat facere eos qui et hic. Mollitia provident ad voluptas totam enim quo.',
        //  'price' => '583.70',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022ee?text=voluptatibus',
        //  'color' => 'Red',
        //  'height_cm' => '36',
        //  'width_cm' => '11',
        //  'depth_cm' => '89',
        //  'weight_gr' => '97',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 436,
        //  'categorie_id' => 1,
        //  'name' => 'eum quia sit',
        //  'description' => 'Id sequi deserunt sed molestias sapiente molestiae. Quod id doloribus non cupiditate. Voluptatem voluptates in dolor consequatur et distinctio officiis. Voluptatem et sit accusantium sequi.',
        //  'price' => '240.08',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ddee?text=placeat',
        //  'color' => 'Silver',
        //  'height_cm' => '9',
        //  'width_cm' => '87',
        //  'depth_cm' => '92',
        //  'weight_gr' => '75',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 437,
        //  'categorie_id' => 1,
        //  'name' => 'excepturi et eum',
        //  'description' => 'Nisi sequi ipsum sed voluptatibus. Repellendus consequatur nisi sed quod et cupiditate asperiores. Eaque sunt expedita vel sed.',
        //  'price' => '684.42',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006699?text=eius',
        //  'color' => 'MediumSeaGreen',
        //  'height_cm' => '72',
        //  'width_cm' => '43',
        //  'depth_cm' => '91',
        //  'weight_gr' => '56',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 438,
        //  'categorie_id' => 1,
        //  'name' => 'minus quia reprehenderit',
        //  'description' => 'Iusto et qui labore autem sed. Non possimus quisquam architecto vel culpa dolorem quibusdam. Id ex est omnis autem.',
        //  'price' => '137.74',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aa11?text=non',
        //  'color' => 'DarkCyan',
        //  'height_cm' => '79',
        //  'width_cm' => '71',
        //  'depth_cm' => '15',
        //  'weight_gr' => '8',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 439,
        //  'categorie_id' => 1,
        //  'name' => 'quia ea alias',
        //  'description' => 'Ut et in qui quam. Vitae beatae quos velit autem. Ut numquam est aut at aut assumenda dolor non. Qui eum quia libero libero eveniet aut. Libero voluptatibus dolores tenetur in molestiae maiores qui.',
        //  'price' => '906.84',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000088?text=velit',
        //  'color' => 'MediumBlue',
        //  'height_cm' => '38',
        //  'width_cm' => '71',
        //  'depth_cm' => '44',
        //  'weight_gr' => '26',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 440,
        //  'categorie_id' => 1,
        //  'name' => 'qui est ut',
        //  'description' => 'Itaque id et eligendi modi. Aut et repellat at ut ut aut. Tempora sit rerum et ducimus voluptates et nihil. Et ex sit accusamus molestias aspernatur vel porro.',
        //  'price' => '736.46',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001111?text=voluptas',
        //  'color' => 'MediumVioletRed',
        //  'height_cm' => '89',
        //  'width_cm' => '48',
        //  'depth_cm' => '39',
        //  'weight_gr' => '41',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 441,
        //  'categorie_id' => 1,
        //  'name' => 'ullam vero omnis',
        //  'description' => 'Fugit facere ipsa alias esse et aperiam nulla. Nihil et alias et sit nulla expedita voluptatem eos. Voluptatem eveniet fugit cupiditate eos tenetur. Aspernatur ut numquam quia quo et.',
        //  'price' => '582.33',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0000dd?text=repudiandae',
        //  'color' => 'Gold',
        //  'height_cm' => '84',
        //  'width_cm' => '12',
        //  'depth_cm' => '7',
        //  'weight_gr' => '15',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 442,
        //  'categorie_id' => 1,
        //  'name' => 'et voluptates voluptate',
        //  'description' => 'Repellat consequatur dolores et. Fugit quisquam distinctio quibusdam veniam quia vel.',
        //  'price' => '721.40',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dd77?text=porro',
        //  'color' => 'Gray',
        //  'height_cm' => '11',
        //  'width_cm' => '29',
        //  'depth_cm' => '43',
        //  'weight_gr' => '20',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 443,
        //  'categorie_id' => 1,
        //  'name' => 'sit repellendus consequuntur',
        //  'description' => 'Veniam ut atque neque et nostrum delectus. Quisquam mollitia autem beatae earum. Quasi accusantium consequuntur quis eum laborum.',
        //  'price' => '931.20',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000077?text=dolorem',
        //  'color' => 'DarkKhaki',
        //  'height_cm' => '22',
        //  'width_cm' => '40',
        //  'depth_cm' => '24',
        //  'weight_gr' => '5',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 444,
        //  'categorie_id' => 1,
        //  'name' => 'culpa deleniti quia',
        //  'description' => 'Doloribus et animi voluptatem et architecto. Quos nesciunt ducimus architecto vel. Temporibus ut sunt nesciunt ea amet iusto nostrum.',
        //  'price' => '901.14',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006633?text=ab',
        //  'color' => 'PaleGoldenRod',
        //  'height_cm' => '91',
        //  'width_cm' => '33',
        //  'depth_cm' => '10',
        //  'weight_gr' => '80',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 445,
        //  'categorie_id' => 1,
        //  'name' => 'ipsa provident voluptas',
        //  'description' => 'Aut nostrum est quia fugit voluptas voluptas sed. Veniam deserunt sit corrupti ea nostrum possimus. In sed tempore at tempora. Sed amet in facere omnis.',
        //  'price' => '452.84',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0055ff?text=laudantium',
        //  'color' => 'Coral',
        //  'height_cm' => '40',
        //  'width_cm' => '51',
        //  'depth_cm' => '73',
        //  'weight_gr' => '61',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 446,
        //  'categorie_id' => 1,
        //  'name' => 'porro quasi eum',
        //  'description' => 'Repellat quas iusto doloremque accusantium nostrum aut. Et rerum et voluptatem nisi dolor accusantium. Quis libero corrupti non. Rerum architecto est sunt et.',
        //  'price' => '598.14',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005566?text=iure',
        //  'color' => 'Chocolate',
        //  'height_cm' => '80',
        //  'width_cm' => '72',
        //  'depth_cm' => '58',
        //  'weight_gr' => '71',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 447,
        //  'categorie_id' => 1,
        //  'name' => 'laudantium adipisci itaque',
        //  'description' => 'Velit repellendus vitae sed quia. Autem voluptatibus reiciendis laboriosam sed. Eligendi ut ut cupiditate nesciunt iure et a.',
        //  'price' => '961.11',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ccee?text=voluptatem',
        //  'color' => 'LightSteelBlue',
        //  'height_cm' => '66',
        //  'width_cm' => '17',
        //  'depth_cm' => '49',
        //  'weight_gr' => '20',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 448,
        //  'categorie_id' => 1,
        //  'name' => 'consectetur quaerat dolor',
        //  'description' => 'Voluptatibus dignissimos assumenda sunt qui et magnam. Consectetur consequatur illum voluptatem eum et aperiam quibusdam. Non provident impedit in officia velit nostrum atque culpa.',
        //  'price' => '429.23',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/001199?text=rerum',
        //  'color' => 'LightGreen',
        //  'height_cm' => '99',
        //  'width_cm' => '11',
        //  'depth_cm' => '4',
        //  'weight_gr' => '70',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 449,
        //  'categorie_id' => 1,
        //  'name' => 'omnis consequatur cumque',
        //  'description' => 'Sint minima sequi perferendis incidunt. Placeat incidunt et deleniti nulla dolor ex nam eum. Eos esse et eligendi rerum recusandae temporibus. Debitis odio autem deserunt est dolor.',
        //  'price' => '518.96',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/006655?text=veritatis',
        //  'color' => 'Tomato',
        //  'height_cm' => '85',
        //  'width_cm' => '54',
        //  'depth_cm' => '31',
        //  'weight_gr' => '8',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 450,
        //  'categorie_id' => 1,
        //  'name' => 'nemo et laudantium',
        //  'description' => 'Eum vel et est. Soluta consequatur facere perferendis tempore sed occaecati. Temporibus placeat assumenda voluptatem et. Autem neque voluptatibus saepe.',
        //  'price' => '940.69',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aadd?text=perspiciatis',
        //  'color' => 'Peru',
        //  'height_cm' => '25',
        //  'width_cm' => '33',
        //  'depth_cm' => '76',
        //  'weight_gr' => '2',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 451,
        //  'categorie_id' => 1,
        //  'name' => 'quos repellendus nostrum',
        //  'description' => 'Suscipit dolorum nam incidunt. Excepturi quibusdam quidem assumenda sit aut possimus. Sed quas iusto atque corporis reprehenderit qui.',
        //  'price' => '539.52',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004411?text=tempore',
        //  'color' => 'SeaShell',
        //  'height_cm' => '99',
        //  'width_cm' => '60',
        //  'depth_cm' => '72',
        //  'weight_gr' => '53',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 452,
        //  'categorie_id' => 1,
        //  'name' => 'nostrum aut consectetur',
        //  'description' => 'Consequuntur illo eos ea facere rerum. Temporibus et fugit nesciunt veniam quae aut ea. Voluptatem tenetur officia ut.',
        //  'price' => '759.45',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0033dd?text=quibusdam',
        //  'color' => 'AliceBlue',
        //  'height_cm' => '95',
        //  'width_cm' => '11',
        //  'depth_cm' => '12',
        //  'weight_gr' => '90',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 453,
        //  'categorie_id' => 1,
        //  'name' => 'iusto porro aut',
        //  'description' => 'Soluta voluptatum consequatur modi praesentium harum. Voluptatum error quos quas. Omnis cumque architecto sint id. Minus hic sed cumque illum.',
        //  'price' => '21.11',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbdd?text=nihil',
        //  'color' => 'PaleGoldenRod',
        //  'height_cm' => '60',
        //  'width_cm' => '29',
        //  'depth_cm' => '20',
        //  'weight_gr' => '79',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 454,
        //  'categorie_id' => 1,
        //  'name' => 'doloremque id minima',
        //  'description' => 'Quaerat voluptas aut fugiat accusamus laboriosam et tempora doloribus. Perferendis corporis deserunt dolor voluptatibus dignissimos in eveniet similique.',
        //  'price' => '331.94',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbff?text=nisi',
        //  'color' => 'Gainsboro',
        //  'height_cm' => '26',
        //  'width_cm' => '3',
        //  'depth_cm' => '73',
        //  'weight_gr' => '55',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 455,
        //  'categorie_id' => 1,
        //  'name' => 'fugiat qui quo',
        //  'description' => 'Consectetur nisi ut voluptatem ratione nemo libero rerum. Enim ex ducimus nihil qui molestiae quia. Quam id non dolorem quam repellat quasi eum.',
        //  'price' => '84.07',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee11?text=beatae',
        //  'color' => 'CornflowerBlue',
        //  'height_cm' => '31',
        //  'width_cm' => '25',
        //  'depth_cm' => '83',
        //  'weight_gr' => '8',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 456,
        //  'categorie_id' => 1,
        //  'name' => 'voluptatem id placeat',
        //  'description' => 'Nemo et eum illo vitae omnis. Quisquam alias odio repellendus provident molestias. Ad asperiores sapiente molestiae. Alias officiis ratione magni sit.',
        //  'price' => '27.01',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0033dd?text=fugiat',
        //  'color' => 'Silver',
        //  'height_cm' => '12',
        //  'width_cm' => '48',
        //  'depth_cm' => '8',
        //  'weight_gr' => '52',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 457,
        //  'categorie_id' => 1,
        //  'name' => 'est rem voluptatum',
        //  'description' => 'Vel quos est laborum corporis numquam. Temporibus vero sequi dolorum est nisi voluptates rem. Omnis repudiandae deserunt consequuntur. Asperiores nihil et libero amet distinctio hic neque.',
        //  'price' => '80.95',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0055ff?text=alias',
        //  'color' => 'CornflowerBlue',
        //  'height_cm' => '89',
        //  'width_cm' => '1',
        //  'depth_cm' => '97',
        //  'weight_gr' => '86',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 458,
        //  'categorie_id' => 1,
        //  'name' => 'cum sunt nesciunt',
        //  'description' => 'Similique illo rerum pariatur natus mollitia dicta aliquid. Minima architecto exercitationem itaque. Autem eligendi repellat natus.',
        //  'price' => '270.94',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011dd?text=omnis',
        //  'color' => 'LightSalmon',
        //  'height_cm' => '96',
        //  'width_cm' => '23',
        //  'depth_cm' => '79',
        //  'weight_gr' => '81',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 459,
        //  'categorie_id' => 1,
        //  'name' => 'quasi qui velit',
        //  'description' => 'Accusamus in vero rerum dolorum non ab itaque. Dolor rem et et suscipit inventore. Sit vitae dolor corrupti qui magni maiores sit ducimus.',
        //  'price' => '438.79',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/005511?text=voluptate',
        //  'color' => 'Snow',
        //  'height_cm' => '18',
        //  'width_cm' => '33',
        //  'depth_cm' => '47',
        //  'weight_gr' => '97',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 460,
        //  'categorie_id' => 1,
        //  'name' => 'quis velit aut',
        //  'description' => 'Odio vel harum consequatur eum sit. Harum amet voluptas debitis et autem est. Dolor maiores esse est odit aliquid veritatis.',
        //  'price' => '569.08',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011ee?text=debitis',
        //  'color' => 'Indigo',
        //  'height_cm' => '12',
        //  'width_cm' => '44',
        //  'depth_cm' => '57',
        //  'weight_gr' => '65',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 461,
        //  'categorie_id' => 1,
        //  'name' => 'excepturi quis molestiae',
        //  'description' => 'Ipsum corrupti tempora sequi ea at aut. Incidunt quia optio quo voluptate aut sit maiores.',
        //  'price' => '949.05',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff66?text=non',
        //  'color' => 'LawnGreen',
        //  'height_cm' => '30',
        //  'width_cm' => '90',
        //  'depth_cm' => '25',
        //  'weight_gr' => '70',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 462,
        //  'categorie_id' => 1,
        //  'name' => 'dolore maxime nesciunt',
        //  'description' => 'Quidem qui pariatur omnis repellat est perferendis. Molestiae sunt architecto blanditiis minus ut. Et tempore ut magnam sequi.',
        //  'price' => '295.14',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077cc?text=quia',
        //  'color' => 'Chocolate',
        //  'height_cm' => '10',
        //  'width_cm' => '43',
        //  'depth_cm' => '5',
        //  'weight_gr' => '29',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 463,
        //  'categorie_id' => 1,
        //  'name' => 'voluptatem autem facere',
        //  'description' => 'Cupiditate ratione nobis placeat. Eos ut dolorem placeat sunt. Quidem suscipit dolorem vel consequatur nisi.',
        //  'price' => '427.12',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066cc?text=sequi',
        //  'color' => 'Black',
        //  'height_cm' => '49',
        //  'width_cm' => '50',
        //  'depth_cm' => '56',
        //  'weight_gr' => '91',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 464,
        //  'categorie_id' => 1,
        //  'name' => 'repudiandae et atque',
        //  'description' => 'Quaerat nihil sunt eaque sapiente tempore. Facilis aut dolorum quam. Fugiat aliquid impedit hic eligendi. Non nesciunt hic nihil inventore minus.',
        //  'price' => '781.73',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb88?text=numquam',
        //  'color' => 'White',
        //  'height_cm' => '78',
        //  'width_cm' => '64',
        //  'depth_cm' => '20',
        //  'weight_gr' => '30',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 465,
        //  'categorie_id' => 1,
        //  'name' => 'voluptatem quae id',
        //  'description' => 'Blanditiis quia sint suscipit nesciunt. Ea totam voluptates temporibus consequatur rerum voluptas. Possimus voluptatem et nulla aut illum qui. Eius non animi qui non rerum harum error.',
        //  'price' => '569.33',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb11?text=nihil',
        //  'color' => 'Maroon',
        //  'height_cm' => '46',
        //  'width_cm' => '51',
        //  'depth_cm' => '59',
        //  'weight_gr' => '48',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 466,
        //  'categorie_id' => 1,
        //  'name' => 'dolorum omnis officiis',
        //  'description' => 'Consectetur eius asperiores consequatur vitae. Ut voluptates et dolor. In porro doloremque tenetur ea aut. Dolorum est aliquam expedita eos.',
        //  'price' => '692.53',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003366?text=sit',
        //  'color' => 'DarkGreen',
        //  'height_cm' => '33',
        //  'width_cm' => '100',
        //  'depth_cm' => '94',
        //  'weight_gr' => '15',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 467,
        //  'categorie_id' => 1,
        //  'name' => 'blanditiis possimus dolorum',
        //  'description' => 'At enim repellat voluptas qui sunt alias aspernatur. Et alias est aperiam. Consequuntur quidem ut perspiciatis voluptatem et sequi nisi. Iusto ipsum enim debitis eum.',
        //  'price' => '442.23',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bbbb?text=similique',
        //  'color' => 'Orange',
        //  'height_cm' => '30',
        //  'width_cm' => '95',
        //  'depth_cm' => '99',
        //  'weight_gr' => '41',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 468,
        //  'categorie_id' => 1,
        //  'name' => 'assumenda unde velit',
        //  'description' => 'Molestiae dicta perspiciatis sint sunt officia asperiores voluptatem est. Aliquid minus adipisci in enim culpa ex nihil harum. Cupiditate maxime consequatur commodi aut commodi.',
        //  'price' => '532.49',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009988?text=aliquam',
        //  'color' => 'LightBlue',
        //  'height_cm' => '65',
        //  'width_cm' => '99',
        //  'depth_cm' => '98',
        //  'weight_gr' => '64',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 469,
        //  'categorie_id' => 1,
        //  'name' => 'aliquam tempora voluptatem',
        //  'description' => 'Porro sequi beatae sit aut quis. Nesciunt aperiam est qui ea aperiam totam. Velit iste nam suscipit ut. Enim quia magni molestiae cum aut id sit. Odio qui ut error quae ipsa dolorem.',
        //  'price' => '729.00',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc00?text=unde',
        //  'color' => 'DarkRed',
        //  'height_cm' => '69',
        //  'width_cm' => '52',
        //  'depth_cm' => '16',
        //  'weight_gr' => '6',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 470,
        //  'categorie_id' => 1,
        //  'name' => 'culpa quia consequatur',
        //  'description' => 'Vel est enim nobis nesciunt hic cupiditate ex. Recusandae et maxime assumenda quod rerum. Non ex autem modi facilis aperiam. Molestias sed aliquid explicabo ratione ut officia.',
        //  'price' => '991.38',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00eecc?text=molestiae',
        //  'color' => 'FloralWhite',
        //  'height_cm' => '64',
        //  'width_cm' => '18',
        //  'depth_cm' => '79',
        //  'weight_gr' => '13',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 471,
        //  'categorie_id' => 1,
        //  'name' => 'perferendis dolorem unde',
        //  'description' => 'Consequatur similique maxime dolorem iusto. Rerum qui dolorem aperiam omnis modi. Voluptas nostrum deleniti aperiam velit repudiandae debitis.',
        //  'price' => '277.13',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/000000?text=reiciendis',
        //  'color' => 'Black',
        //  'height_cm' => '77',
        //  'width_cm' => '19',
        //  'depth_cm' => '11',
        //  'weight_gr' => '20',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 472,
        //  'categorie_id' => 1,
        //  'name' => 'soluta voluptas minima',
        //  'description' => 'Sed fuga odit quae et vel vel aut. Ut aut neque ab blanditiis aut. Nulla voluptate repellat itaque corporis et placeat. Nemo et quaerat repudiandae eius.',
        //  'price' => '18.91',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003322?text=qui',
        //  'color' => 'MediumAquaMarine',
        //  'height_cm' => '100',
        //  'width_cm' => '18',
        //  'depth_cm' => '82',
        //  'weight_gr' => '10',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 473,
        //  'categorie_id' => 1,
        //  'name' => 'dolor aut sit',
        //  'description' => 'Aperiam quam rerum soluta minima. Mollitia voluptatem veniam inventore aut voluptas reprehenderit. Dicta consequatur cum hic.',
        //  'price' => '934.65',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/007744?text=incidunt',
        //  'color' => 'DarkSeaGreen',
        //  'height_cm' => '21',
        //  'width_cm' => '83',
        //  'depth_cm' => '21',
        //  'weight_gr' => '94',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 474,
        //  'categorie_id' => 1,
        //  'name' => 'vel quo cumque',
        //  'description' => 'Hic repellendus accusamus eaque neque. Distinctio sapiente consectetur dolorum id animi velit quasi delectus. Rerum earum quo voluptatum et et accusantium. Saepe consequuntur fugit amet quis.',
        //  'price' => '164.68',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008888?text=aut',
        //  'color' => 'Khaki',
        //  'height_cm' => '30',
        //  'width_cm' => '58',
        //  'depth_cm' => '68',
        //  'weight_gr' => '40',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 475,
        //  'categorie_id' => 1,
        //  'name' => 'et sapiente cum',
        //  'description' => 'Vel tempore totam id autem vel harum. Perferendis ut qui provident dolor est. Nam est sit numquam est neque ullam. Odit unde molestiae iste dolorem quo.',
        //  'price' => '538.40',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aaaa?text=dolorum',
        //  'color' => 'SkyBlue',
        //  'height_cm' => '88',
        //  'width_cm' => '38',
        //  'depth_cm' => '9',
        //  'weight_gr' => '18',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 476,
        //  'categorie_id' => 1,
        //  'name' => 'nostrum quod praesentium',
        //  'description' => 'Quos totam fugiat maxime excepturi tempora. Rerum perspiciatis laboriosam molestiae veniam et ea. Quia laboriosam dolores dolor odio. Non porro iusto non.',
        //  'price' => '920.49',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066bb?text=consequatur',
        //  'color' => 'AliceBlue',
        //  'height_cm' => '81',
        //  'width_cm' => '75',
        //  'depth_cm' => '39',
        //  'weight_gr' => '67',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 477,
        //  'categorie_id' => 1,
        //  'name' => 'ipsum ut aut',
        //  'description' => 'Fugit iusto nam ipsam ipsam ullam quo. Vel natus nesciunt consequuntur omnis quisquam. Repellendus provident in et illum voluptas delectus ad. Doloribus sunt qui nam ut reiciendis.',
        //  'price' => '67.15',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00dddd?text=consequatur',
        //  'color' => 'Lavender',
        //  'height_cm' => '71',
        //  'width_cm' => '97',
        //  'depth_cm' => '95',
        //  'weight_gr' => '35',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 478,
        //  'categorie_id' => 1,
        //  'name' => 'amet suscipit consequuntur',
        //  'description' => 'Dolorem odio neque deserunt sint atque laudantium id dolore. Numquam earum quasi quod et vel cupiditate nostrum. Id quos numquam suscipit esse accusantium fugiat.',
        //  'price' => '578.32',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/004466?text=aut',
        //  'color' => 'LimeGreen',
        //  'height_cm' => '14',
        //  'width_cm' => '93',
        //  'depth_cm' => '93',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 479,
        //  'categorie_id' => 1,
        //  'name' => 'qui quaerat dicta',
        //  'description' => 'Rem minus illo dolore harum vero et ut. Illum voluptatibus voluptatem laboriosam culpa. Hic dolores nam distinctio.',
        //  'price' => '488.31',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cc33?text=dolor',
        //  'color' => 'DimGrey',
        //  'height_cm' => '20',
        //  'width_cm' => '98',
        //  'depth_cm' => '55',
        //  'weight_gr' => '52',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 480,
        //  'categorie_id' => 1,
        //  'name' => 'ut deleniti quia',
        //  'description' => 'Voluptatem praesentium laboriosam cumque ut assumenda minus. Quibusdam accusantium deserunt quod suscipit inventore id officia. Officia culpa velit harum quis quidem ratione impedit.',
        //  'price' => '647.30',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ee22?text=adipisci',
        //  'color' => 'Plum',
        //  'height_cm' => '47',
        //  'width_cm' => '44',
        //  'depth_cm' => '21',
        //  'weight_gr' => '11',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 481,
        //  'categorie_id' => 1,
        //  'name' => 'blanditiis modi molestiae',
        //  'description' => 'Laborum qui quo rerum nihil rerum dolore. Eveniet fugiat et non suscipit suscipit illum. Aut ea pariatur quaerat necessitatibus placeat non.',
        //  'price' => '162.72',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb11?text=ut',
        //  'color' => 'MediumPurple',
        //  'height_cm' => '40',
        //  'width_cm' => '82',
        //  'depth_cm' => '35',
        //  'weight_gr' => '80',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 482,
        //  'categorie_id' => 1,
        //  'name' => 'dolorem facilis voluptate',
        //  'description' => 'Dolorem sed ab eaque eum. Corrupti laborum velit possimus. Cum exercitationem assumenda qui ipsam magnam fuga.',
        //  'price' => '589.15',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00aadd?text=modi',
        //  'color' => 'DarkGray',
        //  'height_cm' => '24',
        //  'width_cm' => '96',
        //  'depth_cm' => '87',
        //  'weight_gr' => '98',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 483,
        //  'categorie_id' => 1,
        //  'name' => 'sit voluptas iure',
        //  'description' => 'Vel et ea vitae sit impedit est adipisci minima. Ut architecto est ex quia est rerum ut. Suscipit qui dignissimos facere. Necessitatibus voluptatum earum enim suscipit ut molestiae.',
        //  'price' => '732.39',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00cccc?text=qui',
        //  'color' => 'Plum',
        //  'height_cm' => '3',
        //  'width_cm' => '62',
        //  'depth_cm' => '25',
        //  'weight_gr' => '49',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 484,
        //  'categorie_id' => 1,
        //  'name' => 'autem voluptatibus assumenda',
        //  'description' => 'Facere eum molestias pariatur repellat. Voluptatem voluptates qui omnis hic consectetur. Sunt dolores sint eum eos qui ex.',
        //  'price' => '671.98',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0099bb?text=fugiat',
        //  'color' => 'LightSlateGray',
        //  'height_cm' => '49',
        //  'width_cm' => '53',
        //  'depth_cm' => '38',
        //  'weight_gr' => '53',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 485,
        //  'categorie_id' => 1,
        //  'name' => 'dolor occaecati amet',
        //  'description' => 'Dolorem ut hic alias ut dolorum illo voluptatum. Rerum voluptas laboriosam illum beatae maxime vitae. Veritatis ducimus non ipsum. In culpa quos debitis harum odit quisquam ipsam.',
        //  'price' => '767.03',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ddbb?text=aut',
        //  'color' => 'Aqua',
        //  'height_cm' => '7',
        //  'width_cm' => '23',
        //  'depth_cm' => '4',
        //  'weight_gr' => '73',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 486,
        //  'categorie_id' => 1,
        //  'name' => 'itaque accusantium consequatur',
        //  'description' => 'Soluta ut ut nihil minima. Error facere non consectetur possimus eius voluptate. Tempora quis ut doloribus quam saepe est.',
        //  'price' => '316.33',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002288?text=labore',
        //  'color' => 'DarkGoldenRod',
        //  'height_cm' => '32',
        //  'width_cm' => '51',
        //  'depth_cm' => '82',
        //  'weight_gr' => '10',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 487,
        //  'categorie_id' => 1,
        //  'name' => 'explicabo ipsa rerum',
        //  'description' => 'Dolor ullam est dolores dolores consequatur rerum. Expedita eveniet eaque facilis pariatur. Vel minima tempore cupiditate dolorem sed ex id. Distinctio minima aut beatae deleniti pariatur.',
        //  'price' => '833.35',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0066aa?text=voluptatibus',
        //  'color' => 'OliveDrab',
        //  'height_cm' => '18',
        //  'width_cm' => '79',
        //  'depth_cm' => '25',
        //  'weight_gr' => '44',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 488,
        //  'categorie_id' => 1,
        //  'name' => 'iure laboriosam qui',
        //  'description' => 'Fuga explicabo expedita blanditiis animi. Nobis officia quaerat distinctio et vel. Laboriosam amet quam a consequatur dolor id rerum. Temporibus quod aut in doloribus.',
        //  'price' => '634.89',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0011cc?text=soluta',
        //  'color' => 'Linen',
        //  'height_cm' => '62',
        //  'width_cm' => '29',
        //  'depth_cm' => '66',
        //  'weight_gr' => '80',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 489,
        //  'categorie_id' => 1,
        //  'name' => 'pariatur voluptatem impedit',
        //  'description' => 'Dolore voluptatem illo unde dolores cupiditate dicta esse. Qui ducimus tenetur quo excepturi eveniet in modi. Debitis veritatis vel qui velit.',
        //  'price' => '958.65',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/002200?text=dolorum',
        //  'color' => 'Plum',
        //  'height_cm' => '71',
        //  'width_cm' => '88',
        //  'depth_cm' => '99',
        //  'weight_gr' => '62',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 490,
        //  'categorie_id' => 1,
        //  'name' => 'cumque officiis eveniet',
        //  'description' => 'Qui optio similique asperiores illum sequi accusamus tempore illum. Facere delectus sed cumque sit quas occaecati asperiores maxime. Quae omnis exercitationem quae facere debitis sunt.',
        //  'price' => '903.02',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00bb33?text=assumenda',
        //  'color' => 'MidnightBlue',
        //  'height_cm' => '96',
        //  'width_cm' => '19',
        //  'depth_cm' => '21',
        //  'weight_gr' => '25',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 491,
        //  'categorie_id' => 1,
        //  'name' => 'ipsam aut odit',
        //  'description' => 'Qui nisi porro et quo consectetur. Pariatur earum fugiat dignissimos omnis. Est cum aperiam non mollitia provident omnis.',
        //  'price' => '954.24',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/00ff77?text=nisi',
        //  'color' => 'MediumPurple',
        //  'height_cm' => '78',
        //  'width_cm' => '35',
        //  'depth_cm' => '1',
        //  'weight_gr' => '60',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 492,
        //  'categorie_id' => 1,
        //  'name' => 'autem vel qui',
        //  'description' => 'Nam et similique aliquam. Earum reprehenderit sed omnis nihil. Eos voluptatem reprehenderit voluptatem quis aspernatur quod id id.',
        //  'price' => '690.44',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0077ee?text=ipsam',
        //  'color' => 'Snow',
        //  'height_cm' => '48',
        //  'width_cm' => '93',
        //  'depth_cm' => '12',
        //  'weight_gr' => '62',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 493,
        //  'categorie_id' => 1,
        //  'name' => 'expedita non fugiat',
        //  'description' => 'Quia ut odit et. Totam minus eos vero sunt quidem quisquam. Earum ipsam sunt sint ab ut vel fuga dicta.',
        //  'price' => '850.67',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/009922?text=similique',
        //  'color' => 'LightSkyBlue',
        //  'height_cm' => '96',
        //  'width_cm' => '54',
        //  'depth_cm' => '49',
        //  'weight_gr' => '39',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 494,
        //  'categorie_id' => 1,
        //  'name' => 'iure explicabo quam',
        //  'description' => 'Sit similique totam eveniet nobis sit consequuntur. Eos assumenda et omnis unde molestiae dolor. Eius delectus nesciunt dolores.',
        //  'price' => '850.00',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0099cc?text=aspernatur',
        //  'color' => 'Navy',
        //  'height_cm' => '15',
        //  'width_cm' => '60',
        //  'depth_cm' => '19',
        //  'weight_gr' => '14',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 495,
        //  'categorie_id' => 1,
        //  'name' => 'doloribus corporis ratione',
        //  'description' => 'Perspiciatis delectus corporis eum error sed at ipsa aut. Exercitationem debitis ratione quidem consectetur et. Libero repudiandae rem enim. Quis ut quam omnis.',
        //  'price' => '316.12',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0022ff?text=ea',
        //  'color' => 'Red',
        //  'height_cm' => '83',
        //  'width_cm' => '82',
        //  'depth_cm' => '96',
        //  'weight_gr' => '56',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 496,
        //  'categorie_id' => 1,
        //  'name' => 'molestias fugiat earum',
        //  'description' => 'Id esse iste quod veritatis earum possimus. Sed quia qui et ex reiciendis. Et temporibus minus illum saepe id ut sit est.',
        //  'price' => '723.02',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/0000ee?text=officia',
        //  'color' => 'Maroon',
        //  'height_cm' => '59',
        //  'width_cm' => '24',
        //  'depth_cm' => '46',
        //  'weight_gr' => '26',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 497,
        //  'categorie_id' => 1,
        //  'name' => 'omnis voluptas consectetur',
        //  'description' => 'Dolores odio deserunt tempora non. Veritatis similique eos possimus repellat quo. Magnam tempore qui consectetur laborum enim. Qui ullam dolor recusandae tempore ut ipsam.',
        //  'price' => '893.61',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003311?text=aut',
        //  'color' => 'BurlyWood',
        //  'height_cm' => '38',
        //  'width_cm' => '85',
        //  'depth_cm' => '37',
        //  'weight_gr' => '41',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 498,
        //  'categorie_id' => 1,
        //  'name' => 'qui quas accusantium',
        //  'description' => 'Dolorem dicta laudantium enim aut. Eos facere harum excepturi eum. Ea numquam distinctio quia rem voluptates ut et.',
        //  'price' => '659.86',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/003355?text=id',
        //  'color' => 'WhiteSmoke',
        //  'height_cm' => '32',
        //  'width_cm' => '55',
        //  'depth_cm' => '36',
        //  'weight_gr' => '50',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //  'api_id' => 499,
        //  'categorie_id' => 1,
        //  'name' => 'ea tempore temporibus',
        //  'description' => 'Ex sequi et qui soluta. Deserunt sit dolor quasi excepturi perferendis nesciunt quo eveniet. Dolorem numquam adipisci esse explicabo exercitationem sed ut. Quae recusandae natus quia itaque id.',
        //  'price' => '675.98',
        //  'img_src' => 'https://via.placeholder.com/640x480.png/008866?text=tempora',
        //  'color' => 'PaleTurquoise',
        //  'height_cm' => '24',
        //  'width_cm' => '81',
        //  'depth_cm' => '15',
        //  'weight_gr' => '54',
        //  'created_at' => Carbon::now(),
        //  'updated_at' => Carbon::now()
        // ]);

        // DB::table('products')->insert([
        //     'api_id' => 0,
        //     'categorie_id' => 0,
        //     'name' => '',
        //     'description' => '',
        //     'price' => '',
        //     'img_src' => '',
        //     'color' => '',
        //     'height_cm' => '',
        //     'width_cm' => '',
        //     'depth_cm' => '',
        //     'weight_gr' => '',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
    }
}
