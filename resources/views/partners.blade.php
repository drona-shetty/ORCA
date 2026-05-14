@extends('web')

@section('title', 'Our Collaboration Partners | ORCA')
@section('meta_keywords', 'ORCA partners, research collaboration, think tanks, policy institutes')
@section('meta_description', 'Explore ORCA’s global collaboration partners including think tanks, universities, and policy institutions.')

@section('content')

<style>
    .shock-header .navbar .navbar-nav .nav-link {
        color: black !important;
    }

    .partner-card {
        text-decoration: none;
        color: inherit;
        display: block;
        transition: all 0.3s ease;
        height: 100%;
    }

    .partner-card:hover {
        transform: translateY(-6px);
    }

    .image-wrapper {
        background: #fff;
        padding: 2rem;
        border-radius: 12px;
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .image-wrapper img {
        max-height: 110px;
        object-fit: contain;
    }

    .hover-filter {
        filter: opacity(0.5);
    }

    .hover-filter:hover {
        filter: opacity(1);
    }

    .partner-desc {
        font-size: 0.85rem;
        color: #666;
    }
</style>

@php
$partners = [
    [
        'name' => 'Society for Policy Studies (SPS)',
        'role' => 'Dialogue Partner',
        'url' => 'http://spsindia.in/',
        'image' => 'images/spss.png',
        'description' => 'Society for Policy Studies (SPS) is a New Delhi-based independent think tank focused on India. It analyses India’s relations with the world, its place in South Asia and in the larger Indo-Pacific dynamic; its public policies and their strategic, security, economic, social and geopolitical impact. Through its various platforms, it provides a non-partisan forum for policymakers, opinion leaders and civil society to foster dialogue and engagement on critical issues, affecting India and the region.'
    ],
    [
        'name' => 'Initiative for Peace and Security in Africa (IPSA)',
        'role' => 'Research Cooperation Partner',
        'url' => 'https://www.ipsa-afrique.org/page/2/',
        'image' => 'images/ipsaa.png',
        'description' => 'Initiative for Peace and Security in Africa (IPSA), a think-tank specializing in defense, security and peace studies based in Dakar, Senegal.'
    ],
    [
        'name' => 'Asian Pathfinders',
        'role' => 'Dialogue Partner',
        'url' => 'https://www.linkedin.com/company/fireside-chats-of-asian-pathfinders/',
        'image' => 'images/aps.png',
        'description' => 'Asian Pathfinders is a knowledge sharing and networking forum to bring together scholars and practitioners working on the Asian region for a constructive dialogue.'
    ],
    [
        'name' => 'WICCI India-EU Business Council',
        'role' => 'Promotional Cooperation Partner',
        'url' => 'https://indiaeuwomencouncil.com/',
        'image' => 'images/wicci.png',
        'description' => 'WICCI’s India-EU Business Council is an up-to-date and diverse community of businesswomen, female entrepreneurs, and change-makers from all over India and the European Union. It serves as a networking platform to highlight their accomplishments and unique experiences. By sharing knowledge, business opportunities, and best practices the Council generates awareness of women’s contributions in developing the India-EU relations.'
    ],
    [
        'name' => 'Nepal Institute for International Cooperation and Engagement (NIICE)',
        'role' => 'Research Cooperation Partner',
        'url' => 'https://niice.org.np/',
        'image' => 'images/niice.png',
        'description' => 'Nepal Institute for International Cooperation and Engagement (NIICE) is an independent, apolitical and non-partisan think tank based in Nepal, which believes in freedom, democracy and a world free from conflict. We envision a world, where sources of insecurity are identified and understood, conflicts are prevented or resolved, and peace is advocated.'
    ],
    [
        'name' => 'FLAME University',
        'role' => 'Academic and Research Cooperation Partner',
        'url' => 'https://www.flame.edu.in/',
        'image' => 'images/flame.png',
        'description' => 'Flame University is an exceptional platform for students who can explore their academic journeys but not without the help of its renowned faculty and solid leadership. Experts from diverse backgrounds and qualifications and phenomenal industry experience guide the students at FLAME.'
    ],
    [
        'name' => 'Policy Perspectives Foundation (PPF)',
        'role' => 'Research and Event Cooperation Partner',
        'url' => 'https://ppf.org.in/',
        'image' => 'images/PPF_Logo.png',
        'description' => 'The Policy Perspectives Foundation (PPF) was founded in 2005 as a non-profit and apolitical think-tank on matters of national interest. The organisation’s activities focus on complex and inter-connected challenges to internal peace, stability and development in India.'
    ],
    [
        'name' => 'KW Publishers Pvt Ltd',
        'role' => 'Event and Publishing Cooperation Partner',
        'url' => 'http://kwpub.in/',
        'image' => 'images/KCW Logo.png',
        'description' => 'KW Publishers Pvt Ltd is one of the pioneers in publishing books on International Relations, Strategic Studies, Military Science, National Security, Management and Commerce.'
    ],
    [
        'name' => 'Chennai Centre for China Studies (C3S)',
        'role' => 'Research Cooperation Partner',
        'url' => 'https://www.c3sindia.org/',
        'image' => 'images/cs3.png',
        'description' => 'Chennai Centre for China Studies (C3S) conducts in-depth research on developments related to China, focusing on areas of strategic interest to India.'
    ],
    [
        'name' => 'StratNews Global',
        'role' => 'Media Partner',
        'url' => 'https://www.stratnewsglobal.com/',
        'image' => 'allfiles/StratNews.jpg',
        'description' => 'StratNews Global is an Indian niche venture that provides on-ground reporting and in-depth analysis in strategic affairs.'
    ],
    [
        'name' => 'Diplomania',
        'role' => 'Academic Initiative',
        'url' => 'https://diplomania.wixsite.com/website',
        'image' => 'allfiles/Diplomania.jpg',
        'description' => 'Diplomania is a student-led initiative that promotes exchange of ideas in international relations and politics.'
    ],
    [
        'name' => 'Ministry of External Affairs, India',
        'role' => 'Institutional Partner',
        'url' => 'https://www.mea.gov.in/',
        'image' => 'allfiles/ministryOfExternalAffairs.png',
        'description' => 'India’s Ministry of External Affairs manages foreign relations and diplomatic affairs.'
    ],
    [
        'name' => 'Geostrata',
        'role' => 'Youth Think Tank',
        'url' => 'https://www.thegeostrata.com/',
        'image' => 'allfiles/Geostrata.png',
        'description' => 'The Geostrata is a youth-led think tank promoting Indian perspectives on global affairs.'
    ],
    [
        'name' => 'Signadyne Labs',
        'role' => 'AI Research Partner',
        'url' => 'https://signadynelabs.com/',
        'image' => 'images/Consultancy/SignadyneLabs.webp',
        'description' => 'Signadyne Labs is an applied AI research lab building intelligent systems for real-world challenges.'
    ],
    [
        'name' => 'The Pathfinder Foundation',
        'role' => 'Research Partner',
        'url' => 'https://pathfinderfoundation.org/',
        'image' => 'allfiles/ThePathfinderFoundation.png',
        'description' => 'The Pathfinder Foundation is an independent, non-partisan research and advocacy think-tank whose primary focus is on policy research and action-oriented policy reform.'
    ],
    [
        'name' => 'BRICS+ Thinking',
        'role' => 'Research Partner',
        'url' => '',
        'image' => 'allfiles/BricsPlusThinking.jpeg',
        'description' => 'BRICS+ Thinking is a London-based not-for-profit platform aiming to bring together leading institutions as well as scholars working on the changing international order, emerging economies, the evolving role of the BRICS+ group and their interactions with the political West.'
    ],
];
@endphp

<section class="shock-section mt-8 pt-3 pb-4 bg-color-lightbg gray-10">
    <div class="container">

        <header class="mb-5">
            <div class="basic-intro">
                <h1 class="title black">
                    <span class="text-1 text-style-5">Our Collaboration </span>
                    <span class="text-2 text-style-6 text-italic">Partners</span>
                </h1>
            </div>
        </header>

        <div class="row g-4">
            @foreach(array_reverse($partners) as $partner)
                <article class="col-md-4">
                    <a href="{{ $partner['url'] }}" target="_blank" rel="noopener noreferrer nofollow" class="partner-card hover-grayscale">
                        <div class="image-wrapper hover-filter">
                            <img src="{{ url(asset($partner['image'])) }}"
                                 alt="{{ $partner['name'] }}"
                                 loading="lazy">
                        </div>

                        <div class="mt-1 text-center">
                            <h3 class="mb-0">{{ $partner['name'] }}</h3>
                            <p><strong>{{ $partner['role'] }}</strong></p>
                            <p class="partner-desc">{{ $partner['description'] }}</p>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>

    </div>
</section>

<!-- FULL SCHEMA FOR ALL PARTNERS -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "name": "ORCA",
      "url": "{{ url('/') }}",
      "logo": {
        "@type": "ImageObject",
        "url": "{{ url(asset('images/ORCA Website Banner Logo PNG.png')) }}"
      }
    }

    @foreach($partners as $partner)
    ,{
      "@type": "Organization",
      "name": "{{ $partner['name'] }}",
      "url": "{{ $partner['url'] }}",
      "description": "{{ $partner['description'] }}",

      "logo": {
        "@type": "ImageObject",
        "url": "{{ url(asset($partner['image'])) }}"
      },

      "image": {
        "@type": "ImageObject",
        "url": "{{ url(asset($partner['image'])) }}"
      },

      "sameAs": [
        "{{ $partner['url'] }}"
      ],

      "parentOrganization": {
        "@type": "Organization",
        "name": "ORCA",
        "url": "{{ url('/') }}"
      },

      "brand": {
        "@type": "Brand",
        "name": "{{ $partner['name'] }}"
      }
    }
    @endforeach
  ]
}
</script>

@endsection