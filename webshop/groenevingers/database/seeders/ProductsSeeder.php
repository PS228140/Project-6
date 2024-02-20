<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Pannenkoekenplant (Pilea peperomoides)',
            'categorie_id' => 1,
            'description' => '<h3>Herkomst</h3><p>De Pilea vind je in de meeste tropische gebieden, met uitzondering van Australië. Er zijn ruim 600 verschillende planten binnen het geslacht Pilea.Hij is makkelijk te verzorgen en helpt zelfs een klein beetje mee om lucht te zuiveren in huis.</p><h3>Kenmerken en verzorging</h3><p>De meest bekende Pilea op dit moment is de Pilea peperomioides oftewel de Pannenkoekplant. Een opvallende verschijning met bladeren die heel erg lijken op \'groene pannenkoeken\'. Voorkom dat de grond uitdroogt, het liefst heeft hij ontkalkt water en de grond continu licht vochtig. In de zomer kan hij kleine witte bloemetjes krijgen.Wil je meer Pannenkoekplanten of heb je een wat oudere plant die wat minder mooi wordt? Dan stek je hem gewoon. Hier hoef je niet eens veel moeite voor te doen, er groeien aan de voet van de plant namelijk kleine babyplantjes. Als zo\'n babyplantje een beetje formaat heeft kun je hem voorzichtig een beetje vrijmaken en uit de grond trekken. Zet het stekje in een flinke laag water in een glazen potje zodat hij (meer) wortels kan vormen. Als hij flink wat wortels heeft gevormd zet je hem pot met grond en kun je genieten van je nieuwe Pannenkoekplant.Of laat een ander meegenieten van je Pannenkoekplant en geef je zelfgekweekte planten kado aan je vrienden. Wat dacht je bijvoorbeeld van een mooie Pannenkoekplant als kado bij een housewarming?</p>',
            'price' => 14.99,
            'image_src' => 'products/pannenkoekenplant.webp'
        ]);

        DB::table('products')->insert([
            'name' => 'Biologische Appelboom',
            'categorie_id' => 2,
            'description' => '<h3>Herkomst</h3><p>De Malus (Latijnse naam van de appel) is een oude fruitbomensoort die in de gematigde gebieden van Europa voorkomt tot in de richting van Rusland. De Chinezen begonnen met het kruisen van appelbomen om betere en grotere appels te kweken. Pas in de Romeinse tijd werden appelbomen bekender en werden ze door Europa verspreid.</p><h3>Kenmerken</h3><p>Deze groengele appel heeft vaak een rode blos en is geschikt als handappel, maar ook om te verwerken tot appelmoes of appeltaart. De witroze bloesem verschijnt in het voorjaar. Vanaf september kan worden geoogst en het voordeel van de Elstar is dat ze heel lang bewaarbaar zijn op een koele en donkere plaats. De witte bloesem verschijnt in april of mei. Voor de bestuiving van de bloemen is niet persé een andere boom nodig, maar kruisbestuiving geeft wel meer vruchten. Goede bestuivers zijn: \'Cox orange pippin\', \'Golden Delicious\' en \'James Grieve\'. De \'Elstar\' appelboom kan maximaal 5 meter hoog worden, maar is door regelmatig te snoeien veel kleiner te houden. Wat is er nu leuker dan een appel plukken van eigen boom!</p><h3>Verzorging</h3><p>Het snoeien van appelbomen is het makkelijkst wanneer de boom kaal is, tussen januari en eind maart. Snoei niet bij vorst, omdat de snoeiwonden dan kunnen bevriezen. Vruchten ontstaan vooral aan horizontaal groeiende takken, verticaal groeiende takken kunnen worden uitgebogen, door ze met touw vast te zetten. Als de kruin van de boom teveel dichtgroeit komt er te weinig licht bij de vruchten, daarom is het goed een paar takken weg te halen, vooral de takken die elkaar kruisen of recht omhoog groeien. Na de bloei worden gelijk de vruchten gevormd, waarna er een natuurlijke rui volgt. Hierbij valt een gedeelte van de vruchtjes van de boom. Halverwege de zomer is het goed om zelf nog een gedeelte van de vruchten te dunnen, omdat de boom zich anders teveel uitput en het jaar daarna weinig of geen vruchten krijgt. Dit heet \'beurtjaren\', wat bij appels veel voorkomt. Door per tak maar een paar appels aan te houden worden de vruchten groter en sappiger en krijg je ieder jaar een goede oogst. Bij het dunnen kies je de mooiste en grootste vruchten uit om te behouden en de minder goede vruchten haal je weg. Pas op dat hierbij de vruchtknoppen niet beschadigen! Als je in de zomer lange takken verticaal ziet groeien (waterloten) dan kunnen deze gelijk kort gesnoeid worden. Appelbomen houden van vruchtbare grond, geef daarom ieder voorjaar wat natuurmest bij de wortels.</p><h3>Extra informatie</h3><p>Iedere plant groeit en bloeit op zijn eigen manier en zal per seizoen en per plant verschillen. De getoonde plant kan afwijken qua vorm en maat van de aankoop in de winkel of webshop.</p>',
            'price' => 19.99,
            'image_src' => 'products/appelboom.webp'
        ]);

        DB::table('products')->insert([
            'name' => 'Pokon Anthurium potgrond 5 L',
            'categorie_id' => 3,
            'description' => '<h3>Waarom Pokon Anthurium Potgrond</h3><p>Anthuriums en varens zijn beide planten die behoefte hebben aan een luchtige grond die voldoende water vasthoudt en voedingsstoffen bevat. Pokon Anthurium Potgrond voldoet aan deze behoeften. Deze potgrond is samengesteld uit hoogwaardige, natuurlijke grondstoffen. In de potgrond zit onder andere turfstrooisel en kalk. Ook bevat de potgrond voeding voor ongeveer 60 dagen.</p><h3>Wanneer gebruik je Pokon Anthurium Potgrond</h3><p>Pokon Anthurium Potgrond kan worden gebruikt bij het oppotten of verpotten van anthuriums en varens.</p><h3>Zo gebruik je het:</h3><ol><li>Breng onder in de pot een laag hydrokorrels aan. Houd hierbij een laag van 20 – 25% van de pothoogte aan.</li><li>Vul vervolgens de pot aan met potgrond.</li><li>Dompel de kluit van de anthurium of varen onder in water. Zet vervolgens de plant in de pot.</li><li>Vul de rest van de pot aan met potgrond tot ongeveer 2 cm van de bovenkant van de pot.</li><li>Druk de potgrond rondom de plant licht aan.</li><li>Geef na het verpotten of oppotten ruim water.</li></ol>',
            'price' => 6.49,
            'image_src' => 'products/potgrond.webp'
        ]);

        /*
            DB::table('products')->insert([
                'name' => '',
                'categorie_id' => ,
                'description' => '',
                'price' => 0.00,
                'image_src' => '',
            ]);
        */
    }
}
