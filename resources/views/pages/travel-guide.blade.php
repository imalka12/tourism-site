@extends('layouts.web-secondary')

@section('page-content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="carousel slide" data-ride="carousel" id="carousel-2">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item"><img class="img-fluid w-100 d-block"
                            src="assets/img/travel-guide-banner.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="img-fluid w-100 d-block"
                            src="assets/img/travel-guide-banner.jpg" alt="Slide Image"></div>
                    <div class="carousel-item active"><img class="img-fluid w-100 d-block"
                            src="assets/img/travel-guide-banner.jpg" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev"><span
                            class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                        class="carousel-control-next" href="#carousel-2" role="button" data-slide="next"><span
                            class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators d-none">
                    <li data-target="#carousel-2" data-slide-to="0"></li>
                    <li data-target="#carousel-2" data-slide-to="1"></li>
                    <li data-target="#carousel-2" data-slide-to="2" class="active"></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xl-12 tour-package-left-area">
            <h3 class="tour-package-heading" style="font-family: 'Titillium Web', sans-serif;">Travel Tips for Sri
                Lankan Holidays </h3>
            <p class="tour-package-text" style="font-family: 'Titillium Web', sans-serif;">Any trip abroad needs a
                check-list of what you should have with you to ensure that your visit goes without a hitch. Sri Lanka is
                no exception—and being in the tropics means there are some specific items that we advise you to include:
            </p>
            <h3 class="tour-package-heading" style="font-family: 'Titillium Web', sans-serif;">When To Visit Sri
                Lanka<br></h3>
            <p class="tour-package-text" style="font-family: 'Titillium Web', sans-serif;">Sri Lanka is a round-the-year
                destination for the visitors who seek for sun and sea the best time to visit the island is from November
                to April. The Southwestern coastal area, where the most of the beach resorts are located.Kalpitiya,
                located in the western ( North Western)coast has been declared a new tourist attraction. Many
                development projects have also been planned such as hotels and other infrastructure to make the East a
                new tourist destination in Sri
                Lanka. The central highlands are pleasantly cool and relatively dry from January to April. The peak
                season is mid December to mid January and March-April during Easter with a mini peak season in July and
                August when festivals and
                pageants are held through the country.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

    </div>


    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 travelguide-left-column">
            <div class="row">
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Passports must be valid for at least 6 months beyond the intended
                        length of stay. Depending on your country of origin, tourist visas may be obtained on arrival.
                        Details are available online at www.eta.gov.lk . We strongly advise
                        you to check visa requirements in good time before your departure date. Security. This goes
                        without saying, but keep your documents and valuables safe, either on your person, in the
                        room-safe found in many hotels, or with hotel
                        reception.</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">PASSPORT<img class="img-fluid travelguide-icon"
                            src="assets/img/passport.png"></p>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">POWER<img class="img-fluid travelguide-icon"
                            src="assets/img/electrical.png"></p>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Power is standard 230V throughout the island, but you might need a
                        multi-plug adapter, particularly for phone, tablet and battery chargers.</p>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 travelguide-left-column">
            <div class="row">
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">While all major credit cards are accepted throughout Sri Lanka, you
                        will need cash for some of the smaller souvenir shops and grocery stores. ATM cashpoints are
                        widely available. Our national currency is the Sri Lanka rupee (LKR),
                        while many tourist shops will accept the US dollar, the euro, and other major currencies,
                        offering up-to-the-minute exchange rates obtained via the Internet. As a rough guide, carry
                        3–5,000 rupees in cash. If you need more,
                        your driver/guide will be happy to arrange for you to exchange currency or travellers cheques at
                        a bank, licensed money-changer, or your hotel.</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">money&nbsp;<img class="img-fluid travelguide-icon"
                            src="assets/img/money.png"></p>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-6">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">torch &nbsp;&nbsp;<img class="img-fluid travelguide-icon"
                            src="assets/img/torch.png"></p>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Always useful, particularly if a seasonal lightning storm temporarily
                        knocks out the power supply.</p>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 travelguide-left-column">
            <div class="row">
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">If you’re new to the tropics, the heat and humidity, mild dehydration,
                        a couple or three too many beers by the pool, and first-time exposure to our hot and spicy
                        cuisine, might leave you feeling out of sorts. Keep a blister-pack
                        of paracetamol handy (Panadol are widely available in Sri Lanka), plus a pick-me-up effervescent
                        antacid and pain reliever (such as Alka-Seltzer).<br><br></p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">medicine<img class="img-fluid travelguide-icon"
                            src="assets/img/medicine.png"></p>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-6">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">umbrella<img class="img-fluid travelguide-icon"
                            src="assets/img/umbrella.png"></p>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Depending on the season, you might get caught out in a sudden tropical
                        shower (or full-blown downpour!). A collapsible umbrella will not only help keep you dry, they
                        are also widely used by Sri Lankans as parasols for protection
                        against the mid-day sun.</p>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 travelguide-left-column">
            <div class="row">
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">It is easy to become so wrapped up in your new adventure that you
                        forget to drink enough, and may experience the onset of dehydration: dry mouth, slight headache,
                        weakness and lethargy. If that happens when you are out and about,
                        tell your driver/guide and he will quickly provide bottled water and a shady spot with a cooling
                        breeze to rest and recuperate. But it shouldn’t come to that if you remember to carry with you
                        and drink a liter of water an hour,
                        or more if you feel the need. And don’t ration yourself—our driver/guides always have enough to
                        go round!</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">water &nbsp;<img class="img-fluid travelguide-icon"
                            src="assets/img/water.png"></p>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">Mosquito&nbsp;<br>repellent<img
                            class="img-fluid travelguide-icon" src="assets/img/mosquito.png"></p>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Mosquitos are the bane of the tropics, but a little repellent goes
                        along way. Many brands of creams and sprays are widely available in shops and pharmacies, and
                        your driver/guide will also have a plentiful supply.</p>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 travelguide-left-column">
            <div class="row">
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Light, loosely-fitting clothing is a must in any hot and humid
                        tropical climate. However, in Sri Lanka’s Hill Country, the high altitude and low cloud mean it
                        can get quite chilly, so pack a jacket, sweater or fleece. Swimwear
                        is fine around pool or beach areas, but not inside the hotel. Most important, you must be fully
                        covered—including long dresses (or saris/sarongs) and trousers—when visiting Buddhist temples
                        and other places of worship.</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">clothing &nbsp;<img class="img-fluid travelguide-icon"
                            src="assets/img/clothing.png"></p>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">Tipping &amp;&nbsp;Etiquette<img
                            class="img-fluid travelguide-icon" src="assets/img/mosquito.png"></p>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Tips have to be earned not expected.&nbsp;<br><br>In the
                        hotel:&nbsp;<br>Room boy/girl LKR 900/week, Pool boy LKR 900/week,&nbsp;<br>Bell boy/porter LKR
                        200-300 depending on how far he has to carry your luggage. <br><br>Restaurants:&nbsp;<br>if
                        10% service is not already added to the bill a 10% tip is reasonable.&nbsp;<br>If 10% service
                        charge is added usually tip less than LKR 200.</p>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 travelguide-left-column">
            <div class="row">
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Sri Lanka’s tourism and health authorities enforce western food and
                        hygiene standards, and stomach complaints are rare. Nevertheless, we recommend that you drink
                        only bottled water, either from supermarkets and reputable shops,
                        or obtained from your driver/guide. But if you should feel queasy—perhaps after over-indulging
                        in some of our hot and spicy culinary delicacies!—king coconut water is renowned for settling an
                        upset stomach.</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">food &amp; <br>hygine&nbsp;<img
                            class="img-fluid travelguide-icon" src="assets/img/food-hygine.png"></p>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-md-12 col-lg-6 col-xl-6">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">Custom <br>imports<img class="img-fluid travelguide-icon"
                            src="assets/img/custom-imports.png"></p>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">You are allowed to bring into the country duty free 1.5 litres of
                        spirits, two bottles of wine, a quarter-litre of toilet water, and a small quantity of perfume
                        and souvenirs with a value not exceeding US $250. The import of personal
                        equipment such as cameras and laptop computers is allowed but must be declared on arrival.
                        However, personal equipment must be taken out of the country upon the visitor.s departure. The
                        import of non-prescription drugs and
                        pornography of any form is an offence.<br></p>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 travelguide-left-column">
            <div class="row">
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Pictures. Photographing airports, dams, roadblocks, and anything else
                        to do with security or the military is forbidden. And don’t pose beside or in front of, or in
                        any way disrespect, a statue or image of the Buddha.</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">photos&nbsp;<img class="img-fluid travelguide-icon"
                            src="assets/img/photos.png"></p>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">languages&nbsp;<br><img class="img-fluid travelguide-icon"
                            src="assets/img/language.png"></p>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Sri Lanka has two official languages . Sinhala and Tamil - with
                        English as a link language. Most people have some knowledge of English, and signboards are often
                        in English.</p>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 travelguide-left-column">
            <div class="row">
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">This goes without saying, but keep your documents and valuables safe,
                        either on your person, in the room-safe found in many hotels, or with hotel reception.</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">Security<img class="img-fluid travelguide-icon"
                            src="assets/img/security.png"></p>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">time <br>difference<br><img class="img-fluid travelguide-icon"
                            src="assets/img/time-difference.png"></p>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Sri Lanka Standard Time is five and a half hours ahead of
                        GMT.&nbsp;(Allowance should be made for summer-time changes in Europe.)
                    </p>
                </div>
            </div>
            <hr>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 travelguide-left-column">
            <div class="row">
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">UV light, the rays that cause sunburn, are particularly strong in the
                        tropics, even through haze and light cloud. Make sure you have—and use!— the right filter factor
                        for your skin type, plus an after-sun moisturizer.</p>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">sun cream<img class="img-fluid travelguide-icon"
                            src="assets/img/sun-cream.png"></p>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                    <p class="travelguide-icon-heading">local<br>healthcare<br>
                        <img class="img-fluid travelguide-icon" src="assets/img/local-healthcare.png"></p>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 col-xl-9">
                    <p class="inner-content-text">Sri Lanka Standard Time is five and a half hours ahead of
                        GMT.&nbsp;(Allowance should be made for summer-time changes in Europe.)</p>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection
