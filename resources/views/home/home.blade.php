@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/deratizacija_novi_sad_1.jpg') }}" alt="First slide">
            <div class="carousel-caption d-md-block text-center">
                <h2>Deratizacija Novi Sad</h2>
                <p>Deratizacija je proces kojim se suzbijaju glodari kako na otvorenom tako i u zatvorenom prostoru.
                    Pozovite nas još danas da se rešimo štetočina.</p>
                <button type="button" class="btn btn-primary btn-block">Pozovite Nas!</button></div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/deratizacija_novi_sad_2.jpg') }}" alt="Second slide">
            <div class="carousel-caption d-md-block text-center">
                <h2>Okolina</h2>
                <p>Na vaš poziv izlazimo i na teren u mesta u okolini Novog Sada. Najbolje bi bilo da nas pozovete i da
                    nam date svoju tačnu adresu.</p>
                <button type="button" class="btn btn-primary btn-lg">Pozovite Nas!</button>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid bg-diamond pt-5 pb-5">
    <div class="container">
        <h2 class="text-center">Deratizacija Novi Sad</h2>
        <hr>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('img/logo.png') }}" class="mb-3 wow fadeInUp delay-0.5s">
                <h2>Novi Sad I Okolina</h2>
                <hr>
                <p>Ako ste u Novom Sadu, ili se nalazite na teritoriji Novog Sada, slobodno nas pozovite!</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('img/logo.png') }}" class="mb-3 wow fadeInUp delay-0.5s">
                <h2>Brzo I Sigurno</h2>
                <hr>
                <p>Ponosni smo na našu brzinu i sigurnost jer imamo apsolutno pouzdanje u naše kolege.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('img/logo.png') }}" class="mb-3 wow fadeInUp delay-0.5s">
                <h2>Garancija Kvaliteta</h2>
                <hr>
                <p>Naš profesionalni tim je tu za vas. Garantujemo da ćete biti zadovoljni našim uslugama!</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-diamond pt-5 pb-5 mb-5">
    <div class="container">
        <h2 class="text-center">Online Formular:</h2>
        <hr>
        <p class="text-center">Unesite kontakt informacije i mi ćemo vam se javiti u najkraćem
            mogućem roku:</p>
        <form class="form-inline justify-content-center">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" id="number" placeholder="Ime *">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" id="email" placeholder="Email *">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" id="number" placeholder="Broj telefona *">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <textarea class="form-control" id="poruka" placeholder="Poruka *"></textarea>
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-outline-danger btn-lg mb-2">Pošalji</button>
            </div>
        </form>
    </div>
</div>


<div class="container-fluid bg-light">
<div class="container">
    <h2 class="text-center display-4">Deratizacija Novi Sad - Ukratko O Uklanjanju Štetocina</h2>
    <p>Deratizacija predstavlja proces uništavanja miševa, pacova i drugih štetočina. To je zapravo skup postupaka koje
        mi
        primenjujemo da bi suzbili ove štetočine, kontrolisali (ili istrebili) njihovu populaciju radi sprečavanja
        šrienja
        bolesti koje oni prenose.</p>
    <p>Neke od najčešćih bolesti koje ovi glodari prenose su:</p>

    <ul>
        <li>Salmonela</li>
        <li>Tularemija</li>
        <li>Leptospiroza</li>
    </ul>
        <h2>Istorija Deratizacije</h2>
        <p>Verovali ili ne, ljudi se deratizacijom, u ovoj ili onoj meri, bave hiljadama godina. Još su se u starom
            Egiptu
            mačke koristile da bi se zalihe žita štitile od štetocina. Postoje tvrdnje da su se pored mačaka, čak i
            zmije
            koristile, u iste te svrhe.</p>
        <p>Od "zanimljivih" načina za deratizaciju, valja pomenuti još i korišćenje pripitomljenih mungosa i lasica.</p>
        <h2>Problem Štetočina U Razvijenim Gradovima</h2>
        <p>Štetočine izazivaju velike probleme u razvijenim, urbanim mestima. Konkretno miševi i pacovi su poznati po
            tome što
            mogu da kontaminiraju zalihe hrane, oštete konstrukcije samih zgrada, mogu da progrizu kablove, tkaninu pa
            čak i
            čvršći materijal.</p>
        <p>Pored samog oštećenja materijala, problem mogu da naprave i posledice povezane sa ovim oštećenjem, kao što su
            izazivanje požara.</p>
        <p>Na sve ovo, treba pomenuti i ulogu štetočina u širenju zaraznih bolesti i ugrožavanja zdravlja kompletne
            populacije.</p>
        <p>Sve ovo su razlozi zašto danas pričamo o deratizaciji u Novom Sadu a i šire. Bitno je kontrolisati njihovu
            populaciju i zaštiti stanovništvo, u krajnjem slučaju.</p>
        <h3>Fizičke Metode Deratizacije</h3>
        <img src="{{ asset('img/deratizacija_novi_sad.jpg') }}" class="rounded float-right p-3" width="550px;">
        <p> Najčešće metode deratizacije koje su se koristile u prošlosti su bile treniranje domaćih životinja i njihovo
            korišćenje u ove svrhe, pored raznoraznih tipova zamki.</p>
        <p>Naravno, zamke su još uvek u upotrebi a sve više pažnje se poklanja takozvanim humanim zamkama koje ne
            ubijaju
            životinju nego joj samo ograničavaju kretanje.</p>
        <p> Pored ovih metoda, jedna od svakako najdelotvornijih, najpraktičnijih i najefikasnijih je otrovan mamac.
            Ovaj metod
            se koristi ne samo za miševe i pacove, već i za puževe, bubašvabe, mrave i mnoge druge.</p>
        <p>Takođe, dosta je popularan i lepak za glodare, koji se pokazao kao dosta efikasan.</p>
        <h2>Pre Deratizacije - Preventivne Mere</h2>
        <p>Naš narod kaže "Bolje sprečiti nego lečiti". Ova rečenica, malo modifikovana naravno, može da se upotrebi i
            kada je
            problem glodara u pitanju. Jer, najbolje je prečiti njihovu pojavu na prvom mestu, jednostavnije je a i
            jeftinije.
            Dakle, koje su to mere za prevenciju i zaštitu od najezde glodara? Pa, navešćemo neke:</p>

        <ul>
        <li><strong>Visok nivo higijene</strong> - redovno uklanjanje đubreta i otpadaka</li>
        <li><strong>Sprečavanje ulaska glodara</strong> - danas postoje mnogi proizvodi namenjeni isključivo sprečavanju ulaska ovih
        štetočina u vaš dom. To su uglavnom zaštitne mreže, rešetke, poklopci na ventilacionim otvorima itd.</li>
        <li><strong>Primena ultrazvuka</strong> - ovo je jedna vrlo zanimljiva metoda gde se koriste zvučni talasi visokih frekvencija. Ovaj
        zvuk, naravno, ljudsko uho ne čuje, ali on iritira glodare tako da oni izbegavaju ulazak u kuće odakle on
        dopire. Nažalost, problem sa ovom metodom jeste što zvuk mora biti konstanto emitovan a, iako ga ljudsko uho ne
        registruje, nije poželjan u prisustvu ljudi. Dakle, ova metoda je idealna za neka udaljena skladišta, gde ljudi nisu
        prisutni ali opet je potrebna zaštita od glodara.</li>
        </ul>

        <h2>Deratizacija U Novom Sadu</h2>
        <p>Posle svega ovoga, jasno vam je zašto je u svakom mestu bitno imati dobru službu za deratizaciju. Ona, ne
            samo da
            ubija glodare, ona štiti zdravlje ljudi.</p>
        <p>Što se tiče naše firme, mi smo specijalizovani za rešavanje problema glodara na području Novog Sada i
            okoline.
            <p>Naravno, oblast koju porkivamo zavisi i od količine i obima posla koji se od nas na terenu zahteva. Ako
                postoji veći
                problem, mi smo spremni poslati našu ekipu i u udaljenija mesta. Naravno, sve je stvar dogovora, tako da
                bi najbolje
                bilo da nas kontaktirate i da popričamo.</p>
            <p>Kontaktirati nas možete preko naše "Kontakt Stranice" na koju možete otići iz menija ili Klikom Ovde -
                Kontakt.</p>
            <h2>Cilj Deratizacije U Novom Sadu</h2>
            <p>Naš, kao i osnovni cilj svake uspešne deratizacije je smanjenje populacije glodara, čime se opet štite i
                zalihe
                hrane, vode za piće, a i sprečava se širenje bolesti. Takođe, umanjuju se i potencijalna strukturalna
                oštećenja koja
                su oni sposobni izazvati svojim snažnim sekutićima.</p>
            <p>Zanimljivost kod tih sekutića je što oni konstantno rastu, tako da ih pacovi zapravo i moraju trošiti i
                zato se
                često okome na neke materijale koji i čak nisu ni jestivi.</p>
            <p>Pre nego što završimo, hteli bismo da napomenemo još i da deratizacija nije proces koji se obavlja jednom
                i na njega
                se zaboravi. Ako uzmemo u obzir reproduktivne sposobnosti ovih glodara, doći ćemo do zastrašujućih
                cifara, naime,
                smatra se da jedna plodna ženka (koja neometano vodi svoj biološki život) u toku samo 4 godine može da
                ima 20
                miliona direktnih potomaka. Da, reč je o milionima. Tako da je redovna deratizacija nešto o čemu morate
                misliti.</p>

            <p>Za više informacija o deratizaciji u Novom Sadu, možete nas diretno kontaktirati!</p>

</div>
</div>

{{--{{$zivotinje->links()}}--}}

    <div class="container">
    <h3 class="text-center">Najnoviji članci sa našeg bloga:</h3>
    <hr>
    <div class="row mt-4">
        @foreach($blogs as $blog)
        <div class="col-md-4 mt-3 mb-3">
            <div class="card">
                <img class="card-img-top" src="/img/{{$blog->photo->photo}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center"><a href="{{action('HomeController@show', [$blog->slug])}}">{{$blog->title}}</a></h5>
                    <hr>
                    <p class="card-text">{!! Str::limit($blog->body, 100) !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="container-fluid bg-diamond mt-5 p-4">
<div class="container text-center ">
    <h3>Dodatne Usluge</h3>
    <hr>
    <div class="row">
        <div class="col-md-6">
        <img src="{{ asset('img/dezinsekcija_novi_sad.png') }}" class="mb-3">
        <h3>Dezinsekcija</h3>
        <hr>
            <p>Ut ac tristique turpis. Ut eget tristique nisl. Aenean fringilla commodo congue. Fusce suscipit, mi eu tincidunt tristique, mauris nunc varius lorem, a vulputate dolor odio ac massa.</p>
        </div>
        <div class="col-md-6">
        <img src="{{ asset('img/dezinfekcija_novi_sad.png') }}" class="mb-3">
        <h3>Dezinfekcija</h3>
        <hr>
            <p>Ut ac tristique turpis. Ut eget tristique nisl. Aenean fringilla commodo congue. Fusce suscipit, mi eu tincidunt tristique, mauris nunc varius lorem, a vulputate dolor odio ac massa.</p>
    </div>
    </div>
</div>
</div>
@endsection