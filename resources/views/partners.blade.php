@extends('web')
@section('title', 'ORCA | Organisation for Research on China and Asia')
@section('meta_keywords', 'ORCA')
@section('meta_description', 'ORCA')

@section('content')

    <style>
        .shock-header .navbar .navbar-nav .nav-link {
            color: black !important;
        }

        .hover-filter {
            filter: opacity(0.5);
        }

        .hover-filter:hover {
            filter: opacity(1);
        }
    </style>

    <!-- Table / Gallery -->
    <section class="shock-section mt-8 pt-3 pb-4 bg-color-lightbg gray-10">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-12">
                    <!-- Intro -->
                    <div class="basic-intro">
                        <h2 class="title black">
                            <span class="text-1 text-style-5">Our Collaboration </span>
                            <span class="text-2 text-style-6 text-italic">Partners</span>
                        </h2>

                    </div>

                </div>
                <div class="col-12 col-md-12">
                    <!-- Gallery -->
                    <div class="gallery">
                        <div class="row g-1">
                            <div class="col-4">
                                <a href="http://spsindia.in/" target="_blank" class="item hover-grayscale">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style="padding: 3rem!important;" src="{{ URL::asset('images/spss.png') }}"
                                            class="image p-1 fit-cover" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Dialogue Partner: </strong>Society for Policy
                                    Studies (SPS) is a New Delhi-based independent think tank focused on India. It
                                    analyses India’s relations with the world, its place in South Asia and in the
                                    larger Indo-Pacific dynamic; its public policies and their strategic, security,
                                    economic, social and geopolitical impact. Through its various platforms, it
                                    provides a non-partisan forum for policymakers, opinion leaders and civil society
                                    to foster dialogue and engagement on critical issues, affecting India and the
                                    region.</p>
                            </div>

                            <div class="col-lg-4">
                                <a href="https://www.ipsa-afrique.org/page/2/" target="_blank" class="item hover-grayscale">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style="padding: 3rem!important;" src="{{ URL::asset('images/ipsaa.png') }}"
                                            class="image p-1 fit-cover" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Research Cooperation Partner: </strong>
                                    Initiative for Peace and Security in Africa (IPSA), a think-tank specializing in
                                    defense, security and peace studies based in Dakar, Senegal.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://www.linkedin.com/company/fireside-chats-of-asian-pathfinders/"
                                    target="_blank" class="item hover-grayscale">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style="padding: 3rem!important;" src="{{ URL::asset('images/aps.png') }}"
                                            class="image p-1 fit-cover" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Dialogue Partner: </strong>Asian Pathfinders
                                    is a knowledge sharing and networking forum to bring together scholars and
                                    practitioners working on the Asian region for a constructive dialogue.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://indiaeuwomencouncil.com/" target="_blank" target="_blank"
                                    class="item hover-grayscale">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style="padding: 3rem!important;" src="{{ URL::asset('images/wicci.png') }}"
                                            class="image p-1 fit-cover" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Promotional Cooperation Partner:
                                    </strong>WICCI’s India-EU Business Council is an up-to-date and diverse community
                                    of businesswomen, female entrepreneurs, and change-makers from all over India and
                                    the European Union. It serves as a networking platform to highlight their
                                    accomplishments and unique experiences. By sharing knowledge, business
                                    opportunities, and best practices the Council generates awareness of women’s
                                    contributions in developing the India-EU relations.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://niice.org.np/" target="_blank" class="item hover-grayscale">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style=" padding: 3rem!important;" src="{{ URL::asset('images/niice.png') }}"
                                            class="image p-1 fit-cover" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Research Cooperation Partner: </strong>Nepal
                                    Institute for International Cooperation and Engagement (NIICE) is an independent,
                                    apolitical and non-partisan think tank based in Nepal, which believes in freedom,
                                    democracy and a world free from conflict. We envision a world, where sources of
                                    insecurity are identified and understood, conflicts are prevented or resolved, and
                                    peace is advocated.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://www.flame.edu.in/" target="_blank" class="item hover-grayscale">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style=" padding: 3rem!important;" src="{{ URL::asset('images/flame.png') }}"
                                            class="image p-1 fit-cover" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Academic and Research Cooperation Partner:
                                    </strong>Flame University is an exceptional platform for students who can explore
                                    their academic journeys but not without the help of its renowned faculty and solid
                                    leadership. Experts from diverse backgrounds and qualifications and phenomenal
                                    industry experience guide the students at FLAME.
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://ppf.org.in/" target="_blank" class="item hover-grayscale">
                                    <div class="image-wrapper">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style=" padding: 3rem!important;" src="{{ URL::asset('images/PPF_Logo.png') }}"
                                            class="image p-1 fit-cover" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Research and Event Cooperation Partner:
                                    </strong>The Policy Perspectives Foundation (PPF) was founded in 2005 as a
                                    non-profit and apolitical think-tank on matters of national interest. The
                                    organisation’s activities focus on complex and inter-connected challenges to
                                    internal peace, stability and development in India.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="http://kwpub.in/" target="_blank" class="item hover-filter">
                                    <div class="image-wrapper" style="height: 515.5px">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style=" padding: 3rem!important;" src="{{ URL::asset('images/KCW Logo.png') }}"
                                            class="image p-1 fit-cover" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Event and Publishing Cooperation Partner:
                                    </strong>KW Publishers Pvt Ltd is
                                    one of the pioneers in publishing books on International Relations,
                                    Strategic Studies, Military Science, National Security, Management and
                                    Commerce. Publishing since 1998 with its first book on ‘Nuclear
                                    India’, the company specialises in publishing on subjects including
                                    Defence Studies, Maritime Security, Intelligence & Surveillance and
                                    Counter-terrorism among others.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://www.c3sindia.org/" target="_blank" class="item hover-filter">
                                    <div class="image-wrapper" style="height: 515.5px">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style=" padding: 3rem!important;" src="{{ URL::asset('images/cs3.png') }}"
                                            class="image p-1 fit-cover" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Research Cooperation Partner:
                                    </strong>Chennai Centre for China Studies (C3S) conducts in-depth research on
                                    developments related to China, focusing on areas of strategic interest to India,
                                    including Business, Defence, Geopolitics, Society, Science, Human Rights, Culture, and
                                    Environment. C3S provides valuable insights to understand China’s impact on India and
                                    the world.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://www.kwad.in/" target="_blank" class="item hover-filter">
                                    <div class="image-wrapper" style="height: 515.5px">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style=" padding: 3rem!important;position: absolute;
                                        top: 50%;
                                        left: 50%;
                                        transform: translate(-50%, -50%);"
                                            src="{{ URL::asset('images/kwad_logo_blue.png') }}"
                                            class="image p-1 fit-cover" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>KWAD:
                                    </strong>KWAD is a software consulting firm that specializes in web-app, iOS & Android
                                    mobile application design and website development.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://www.stratnewsglobal.com/" target="_blank" class="item hover-filter">
                                    <div class="image-wrapper" style="height: 515.5px">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style="padding: 3rem!important;position: absolute;
                                        top: 50%;
                                        left: 50%;
                                        transform: translate(-50%, -50%);"
                                            src="{{ URL::asset('allfiles/StratNews.jpg') }}" class="image p-1 fit-cover"
                                            alt="StratNews Global" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>StratNews Global:
                                    </strong>StratNews Global is an Indian niche venture that has established itself as an
                                    online media house that provides a judicious mix of on-ground reporting and in-depth
                                    analysis of events as they happen, in the strategic affairs, foreign policy and defence
                                    space. StratNews Global served as the official media partner for ORCA’s Global
                                    Conference on New Sinology 2023.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://diplomania.wixsite.com/website" target="_blank" class="item hover-filter">
                                    <div class="image-wrapper" style="height: 515.5px">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style="padding: 3rem!important;position: absolute;
                                        top: 50%;
                                        left: 50%;
                                        transform: translate(-50%, -50%);"
                                            src="{{ URL::asset('allfiles/Diplomania.jpg') }}" class="image p-1 fit-cover"
                                            alt="Diplomania" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Diplomania:
                                    </strong>Diplomania, the editorial and international affairs society of the Jindal School of International Affairs (JSIA) is a student-led initiative that seeks the exchange of ideas, and the exploration of diverse perspectives in the field of IR and politics.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://www.mea.gov.in/" target="_blank" class="item hover-filter">
                                    <div class="image-wrapper" style="height: 515.5px">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style="padding: 3rem!important;position: absolute;
                                        top: 50%;
                                        left: 50%;
                                        transform: translate(-50%, -50%);"
                                            src="{{ URL::asset('allfiles/ministryOfExternalAffairs.png') }}" class="image p-1 fit-cover"
                                            alt="Ministry of External Affairs" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Ministry of External Affairs:
                                    </strong>India’s Ministry of External Affairs (MEA) was among the key institutional partners for ORCA’s Global Conference on New Sinology 2024, lending its support to the initiative.</p>
                            </div>
                            <div class="col-lg-4">
                                <a href="https://www.thegeostrata.com/" target="_blank" class="item hover-filter">
                                    <div class="image-wrapper" style="height: 515.5px">
                                        <div class="overlay has-border rounded black"></div>
                                        <img style="padding: 3rem!important;position: absolute;
                                        top: 50%;
                                        left: 50%;
                                        transform: translate(-50%, -50%);"
                                            src="{{ URL::asset('allfiles/Geostrata.png') }}" class="image p-1 fit-cover"
                                            alt="Geostrata" />
                                    </div>
                                </a>
                                <p class="mt-1 mb-1 text-center"><strong>Geostrata:
                                    </strong>The Geostrata is a youth-led think tank based in India, committed to researching, advocating, and promoting a distinctly Indian perspective on world affairs, Indian national interest and culture internationally, and engaging youth constituencies abroad with an Indian context of international affairs and history.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>

@endsection
