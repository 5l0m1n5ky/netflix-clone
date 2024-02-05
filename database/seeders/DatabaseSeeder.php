<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Rating;
use App\Models\MovieGenre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Movie::create([
            'title' => 'Szlakiem pingwinów',
            'cover' => 'images/penguins-2555571_1280.jpg',
            'description' => 'Zanurz się w fascynujący świat pingwinów w tym pełnym przygód filmie przyrodniczym. Odkryj ich niezwykłe życie na odległych lodowcach Antarktydy, śledź ich wspaniałe zdolności nurkowania i obserwuj, jak te kształtne ptaki radzą sobie w surowym klimacie. Podążaj za ich rodzinami podczas unikalnych ceremonii zalotów i poznaj trudy, jakie muszą pokonać, aby przetrwać w jednym z najtrudniejszych środowisk na Ziemi. Ten film przeniesie Cię na niezapomnianą podróż przez lodowate krainy, gdzie pingwiny stają się bohaterami ich własnej niezwykłej opowieści.',
            'production' => 'Antarktyda',
            'media_path' => 'images/penguin_-_115177 (360p).mp4'
        ],);
        Movie::create([
            'title' => 'Co na ruszcie?',
            'cover' => 'images/burger-4145977_1280.jpg',
            'description' => 'W tym ekscytującym odcinku naszego programu kulinarnego przeniesiemy się w świat soczystych i aromatycznych burgerów. Doświadczysz niezwykłych smaków i technik, gdy nasz utalentowany szef kuchni poprowadzi Cię przez proces tworzenia idealnego burgera. Odkryj tajniki przygotowywania soczystego mięsa, dowiedz się, jak dobrać idealne składniki do smakowitego sosu i jak stworzyć niezwykłe dodatki, które sprawią, że Twój burger będzie niezapomniany. Przygotuj się na uczucie pełne smaku i przyjemności, które tylko prawdziwy burger może dostarczyć. To nie jest zwykłe gotowanie – to prawdziwa kulinarna podróż w świat burgerowych arcydzieł!',
            'production' => 'USA',
            'media_path' => 'images/burger_-_124823 (720p).mp4'
        ],);
        Movie::create([
            'title' => 'LAS',
            'cover' => 'images/california-4053982_1280.jpg',
            'description' => 'W tajemniczym lesie, gdzie drzewa ukrywają stare sekrety i ciemność gęsto spowiada każdy zakamarek, rozgrywa się przerażająca opowieść. Głęboko w tym dzikim zakątku natury grupa przyjaciół postanawia spędzić weekend kempingowy. Jednak, gdy zapada noc, las ożywa własnymi dźwiękami, a mroczne cienie ukrywają coś znacznie bardziej złowrogiego niż pierwotnie podejrzewano. Strach i niepewność wkradają się w serca bohaterów, gdy tajemnicze zjawiska zaczynają się dziać wokół nich. Ten horror w lesie zanurza widzów w atmosferze niepokoju i grozy, w której przyroda staje się areną nieodgadnionych zagrożeń, a każdy szelest liści może zwiastować coś znacznie bardziej przerażającego niż marzenia najczarniejszych koszmarów.',
            'production' => 'UK',
            'media_path' => 'images/pexels-cottonbro-5427575 (360p).mp4',
        ],);
        Movie::create([
            'title' => 'Just Podcast',
            'cover' => 'images/audio-1844798_1280.jpg',
            'description' => 'Witajcie w fascynującym świecie Kraju Kwitnącej Wiśni! Nasz podcast, tworzony w samym sercu Japonii, zabierze was w podróż pełną niezwykłych historii, kultury i fascynujących rozmów. Poznacie tajniki tradycyjnej ceremonii herbaty, dowiecie się o najnowszych trendach z japońskiego świata popkultury, zanurzycie się w pięknie krajobrazów i poznacie niezwykłe historie ludzi, którzy nadają ton życiu w Japonii. To więcej niż podcast - to okno na Japońską duszę, które otwiera się dla was z każdym odcinkiem. Przygotujcie się na odkrywanie magicznego świata Japonii, jednym dźwiękiem naraz!',
            'production' => 'Japonia',
            'media_path' => 'images/pexels-tea-oebel-6892734 (360p).mp4',
        ],);
        Movie::create([
            'title' => 'Almost Fight Club',
            'cover' => 'images/boxing-62867_1280.jpg',
            'description' => 'Wkraczając do ringu z pięściami nasyconymi adrenaliną, nasz film akcji o bokserach to prawdziwa pochwała determinacji i męstwa. Śledź życie dwóch utalentowanych bokserów, którzy zmagają się nie tylko z przeciwnikami na ringu, ale również z własnymi przeszłościami i marzeniami. Akcja osadzona w brutalnym świecie boksu przeniesie cię w wir emocji, zaciętych walk i niesamowitej siły ludzkiego ducha. W tej epickiej historii sportowej nie brakuje momentów, które wstrząsną twoim sercem i sprawią, że uwierzysz w moc prawdziwych bohaterów. Gotowi na walkę?',
            'production' => 'USA',
            'media_path' => 'images/production_id_4761713 (360p).mp4',
        ]);
        Genre::create([
            'genre' => 'Film przyrodniczy',
        ]);
        Genre::create([
            'genre' => 'Program kulinarny',
        ]);
        Genre::create([
            'genre' => 'Horror',
        ]);
        Genre::create([
            'genre' => 'Podcast',
        ]);
        Genre::create([
            'genre' => 'Film akcji',
        ]);
        Genre::create([
            'genre' => 'Inny',
        ]);
        MovieGenre::create([
            'movie_id' => '1',
            'genre_id' => '1'
        ]);
        MovieGenre::create([
            'movie_id' => '1',
            'genre_id' => '6'
        ]);
        MovieGenre::create([
            'movie_id' => '2',
            'genre_id' => '2'
        ]);
        MovieGenre::create([
            'movie_id' => '3',
            'genre_id' => '3'
        ]);
        MovieGenre::create([
            'movie_id' => '4',
            'genre_id' => '4'
        ]);
        MovieGenre::create([
            'movie_id' => '5',
            'genre_id' => '5'
        ]);
    }
}
