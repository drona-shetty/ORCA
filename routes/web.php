<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\{
    AboutPageController,
    ArticleController,
    AuthController,
    AuthorController,
    CategoryController,
    ContactController,
    CSVController,
    CYPController,
    CYPEventTypeController,
    CYPVolunteerController,
    DashboardController,
    DMArticleController,
    FileUploadController,
    GraphsController,
    MissionController,
    OrcaFileController,
    ProfileController,
    SubscriberController,
    TagController,
    TeamController,
    TutController,
    UserController,
};

use App\Http\Controllers\Event\{
    AboutController,
    MediaController,
    PartnerController,
    RegisterationController,
    ScheduleController,
    SpeakerController,
    EventController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * ------------------------------------------------------------------------
 * GCNS URLs
 * ------------------------------------------------------------------------
 * */
Route::domain('gcns.orcasia.org')->group(function () {
    Route::get('/', function () {
        return view('gcns.home');
    });
    Route::get('/event/speaker/{id}', [SpeakerController::class, 'getSpeakerData']);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('yn-admin')->group(function () {
        // DashboardController group
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'index');
            Route::put('/', 'update_profile');
            Route::post('s_featured', 's_featured');
            Route::post('s_agenda', 's_agenda');
            Route::post('s_scoop', 's_scoop');
            Route::post('s_fullscreen', 's_fullscreen');
            Route::post('s_g_three', 's_g_three');
            Route::post('s_g_five', 's_g_five');
            Route::post('s_first', 's_first');
            Route::post('s_second', 's_second');
            Route::post('s_last', 's_last');
            Route::post('case_studies', 'case_studies');
        });

        // ArticleController group
        Route::controller(ArticleController::class)->group(function () {
            Route::put('approved', 'update_status_approved');
            Route::get('articles/search', 'search_article')->name('search.articles');
        });

        // UserController group
        Route::controller(UserController::class)->group(function () {
            Route::get('all-users', 'all_users');
            Route::get('users/search', 'search_author')->name('authors.search');
        });

        // ProfileController group
        Route::controller(ProfileController::class)->group(function () {
            Route::get('design_25under25', 'design');
        });

        // CYPController group
        Route::controller(CYPController::class)->group(function () {
            Route::get('cyp_design', 'cypDesign');
            Route::post('cyp_banner', 'cypBanner');
        });

        // TutController group
        Route::controller(TutController::class)->group(function () {
            Route::post('section_featured', 'featured');
            Route::post('section_one', 'section_one');
            Route::post('section_two', 'section_two');
            Route::post('section_three', 'section_three');
            Route::post('section_four', 'section_four');
            Route::post('section_five', 'section_five');
        });

        // SubscriberController group
        Route::controller(SubscriberController::class)->group(function () {
            Route::get('subscribers', 'index');
            Route::get('subscribers/search', 'search')->name('search.subscribers');
        });

        // GCNS-related controllers grouped by controller and prefix
        Route::prefix('gcns23')->group(function () {

            Route::resource('partner', App\Http\Controllers\GCNS23\PartnerController::class);
            Route::resource('about', App\Http\Controllers\GCNS23\AboutController::class);
            Route::resource('speaker', App\Http\Controllers\GCNS23\SpeakerController::class);
            Route::resource('media', App\Http\Controllers\GCNS23\MediaController::class);
            Route::resource('convenors', App\Http\Controllers\GCNS23\ConvenorController::class);

            Route::resource('schedule', App\Http\Controllers\GCNS23\ScheduleController::class); // ✅ Moved outside
            Route::get('schedule/{id}/sessionAdd', [App\Http\Controllers\GCNS23\ScheduleController::class, 'sessionAdd']);
            Route::post('schedule/{id}/sessionCreate', [App\Http\Controllers\GCNS23\ScheduleController::class, 'sessionCreate']);
            Route::get('schedule/{scheduleId}/{sessionId}/sessionEdit', [App\Http\Controllers\GCNS23\ScheduleController::class, 'sessionEdit']);
            Route::put('schedule/{scheduleId}/{sessionId}/sessionUpdate', [App\Http\Controllers\GCNS23\ScheduleController::class, 'sessionUpdate']);
            Route::delete('schedule/{scheduleId}/{sessionId}/sessionDestroy', [App\Http\Controllers\GCNS23\ScheduleController::class, 'sessionDestroy']);
            
            Route::resource('registeration', App\Http\Controllers\GCNS23\RegisterationController::class);

            Route::controller(CSVController::class)->group(function () {
                Route::get('download-csv/{gcns}', 'download');
            });
        });

        // GCNS-related controllers grouped by controller and prefix
        Route::prefix('gcns')->group(function () {

            Route::resource('partner', App\Http\Controllers\GCNS\PartnerController::class);
            Route::resource('about', App\Http\Controllers\GCNS\AboutController::class);
            Route::resource('speaker', App\Http\Controllers\GCNS\SpeakerController::class);
            Route::resource('media', App\Http\Controllers\GCNS\MediaController::class);
            Route::resource('convenors', App\Http\Controllers\GCNS\ConvenorController::class);

            Route::resource('schedule', App\Http\Controllers\GCNS\ScheduleController::class); // ✅ Moved outside
            Route::get('schedule/{id}/sessionAdd', [App\Http\Controllers\GCNS\ScheduleController::class, 'sessionAdd']);
            Route::post('schedule/{id}/sessionCreate', [App\Http\Controllers\GCNS\ScheduleController::class, 'sessionCreate']);
            Route::get('schedule/{scheduleId}/{sessionId}/sessionEdit', [App\Http\Controllers\GCNS\ScheduleController::class, 'sessionEdit']);
            Route::put('schedule/{scheduleId}/{sessionId}/sessionUpdate', [App\Http\Controllers\GCNS\ScheduleController::class, 'sessionUpdate']);
            Route::delete('schedule/{scheduleId}/{sessionId}/sessionDestroy', [App\Http\Controllers\GCNS\ScheduleController::class, 'sessionDestroy']);
            
            Route::resource('registeration', App\Http\Controllers\GCNS\RegisterationController::class);

            Route::controller(CSVController::class)->group(function () {
                Route::get('download-csv/{gcns}', 'download');
            });
        });

        // Event-related controllers grouped by controller and prefix
        Route::prefix('event')->group(function () {

            Route::resource('partner', PartnerController::class);
            Route::resource('about', AboutController::class);
            Route::resource('speaker', SpeakerController::class);
            Route::resource('media', MediaController::class);
            Route::resource('convenors', App\Http\Controllers\Event\ConvenorController::class);

            Route::controller(ScheduleController::class)->group(function () {
                Route::resource('schedule', ScheduleController::class);
                Route::get('schedule/{id}/sessionAdd', 'sessionAdd');
                Route::post('schedule/{id}/sessionCreate', 'sessionCreate');
                Route::get('schedule/{scheduleId}/{sessionId}/sessionEdit', 'sessionEdit');
                Route::put('schedule/{scheduleId}/{sessionId}/sessionUpdate', 'sessionUpdate');
                Route::delete('schedule/{scheduleId}/{sessionId}/sessionDestroy', 'sessionDestroy');
            });

            Route::resource('registeration', RegisterationController::class);

            Route::controller(CSVController::class)->group(function () {
                Route::get('download-csv/{gcns}', 'download');
            });
        });

        // AuthController group
        Route::controller(AuthController::class)->group(function () {
            Route::put('change-password', 'change_password');
        });

        // Resource-only Controllers
        Route::resources([
            'users' => UserController::class,
            'tags' => TagController::class,
            'articles' => ArticleController::class,
            'episodesofexchanges' => DMArticleController::class,
            'category' => CategoryController::class,
            'profiles' => ProfileController::class,
            'cyp' => CYPController::class,
            'cyp_eventTypes' => CYPEventTypeController::class,
            'cyp_volunteers' => CYPVolunteerController::class,
            'graphsPage' => GraphsController::class,
            'fileUpload' => FileUploadController::class,
            'orcafiles' => OrcaFileController::class,
        ]);
    });
    Route::post('check-category', [CategoryController::class, 'check_if_used']);
    Route::post('check-tag', [TagController::class, 'check_if_used']);
    Route::post('check-graph', [GraphsController::class, 'check_if_used']);
});

/**
 * ------------------------------------------------------------------------
 * AUTHOR DASHBOARD URLs
 * ------------------------------------------------------------------------
 * */
Route::middleware(['auth', 'author'])->prefix('yn-author')->group(function () {
    Route::controller(AuthorController::class)->group(function () {
        Route::get('/', 'index');
        Route::put('/', 'update_profile');
        Route::get('/articles', 'articles');
        Route::get('/articles/create', 'add_article');
        Route::get('/articles/{id}/edit', 'edit_article');
        Route::post('/articles', 'store_article');
        Route::put('/articles/{id}', 'update_article');
        Route::delete('/articles/{id}', 'delete_article');
    });

    Route::put('/change-password', [AuthController::class, 'change_password']);
    Route::put('/send-for-approval', [ArticleController::class, 'update_status_processing']);
});

/**
 * ------------------------------------------------------------------------
 * ORCA frontend URLs
 * ------------------------------------------------------------------------
 * */
Route::get('/sitemap.xml', function () {
    $routeCollection = Route::getRoutes();

    $urls = [];

    foreach ($routeCollection as $route) {
        // Basic checks to include only public GET routes
        if (
            in_array('GET', $route->methods()) &&
            $route->getPrefix() === null &&
            !$route->parameterNames() &&
            !str_contains($route->uri(), 'admin') &&
            !str_contains($route->uri(), '{')
        ) {
            $urls[] = [
                'loc' => url($route->uri()),
                'priority' => '0.6',
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
            ];
        }
    }

    // Add dynamic routes (e.g., posts)
    foreach (App\Models\User::where('role', 'author')->with('meta')->get() as $author) {
        $urls[] = [
            'loc' => url("/author/{$author->meta->slug}"),
            'priority' => '0.5',
            'lastmod' => $author->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    foreach (App\Models\Article::select('id', 'slug', 'updated_at')->where('category', 31)->get() as $article) {
        $urls[] = [
            'loc' => url("/events/{$article->slug}"),
            'priority' => '0.8',
            'lastmod' => $article->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    foreach (App\Models\Article::select('id', 'slug', 'updated_at')->where('category', 35)->get() as $article) {
        $urls[] = [
            'loc' => url("/infographics/{$article->slug}"),
            'priority' => '0.8',
            'lastmod' => $article->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    foreach (App\Models\Article::select('id', 'slug', 'updated_at')->where('category', 33)->get() as $article) {
        $urls[] = [
            'loc' => url("/centralcommittee/20cc/{$article->slug}"),
            'priority' => '0.8',
            'lastmod' => $article->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    foreach (App\Models\Article::select('id', 'slug', 'updated_at')->where('category', 20)->get() as $article) {
        $urls[] = [
            'loc' => url("/article/{$article->slug}"),
            'priority' => '0.8',
            'lastmod' => $article->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    foreach (App\Models\Article::select('id', 'slug', 'updated_at')->where('category', 22)->get() as $article) {
        $urls[] = [
            'loc' => url("/{$article->slug}"),
            'priority' => '0.8',
            'lastmod' => $article->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    foreach (App\Models\Article::select('id', 'slug', 'updated_at')->whereNotIn('category', [20, 33, 35, 31, 22])->get() as $article) {
        $urls[] = [
            'loc' => url("/article/{$article->id}/{$article->slug}"),
            'priority' => '0.8',
            'lastmod' => $article->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    foreach (App\Models\DMArticle::select('id', 'slug', 'updated_at')->get() as $article) {
        $urls[] = [
            'loc' => url("/episodesofexchanges/{$article->id}/{$article->slug}"),
            'priority' => '0.8',
            'lastmod' => $article->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    foreach (App\Models\Event\Speaker::select('id', 'updated_at')->where('gcns', 2024)->get() as $speaker) {
        $urls[] = [
            'loc' => url("pages/gcns2024/speaker/{$speaker->id}"),
            'priority' => '0.8',
            'lastmod' => $speaker->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    foreach (App\Models\Event\Speaker::select('id', 'updated_at')->where('gcns', 2025)->get() as $speaker) {
        $urls[] = [
            'loc' => url("pages/gcns2025/speaker/{$speaker->id}"),
            'priority' => '0.8',
            'lastmod' => $speaker->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    foreach (App\Models\Event\Speaker::select('id', 'updated_at')->where('gcns', 2023)->get() as $speaker) {
        $urls[] = [
            'loc' => url("pages/gcns2023/speaker/{$speaker->id}"),
            'priority' => '0.8',
            'lastmod' => $speaker->updated_at->toAtomString(),
            'changefreq' => 'monthly',
        ];
    }

    $content = view('sitemap', compact('urls'))->render();

    return response($content, 200)->header('Content-Type', 'application/xml');
});

// Auth & User Management Routes
Route::view('/login', 'frontend.login')->name('login');
Route::view('/register', 'frontend.register');

Route::controller(AuthController::class)->group(function () {
    Route::post('/user_login', 'authenticate');
    Route::get('/user_logout', 'logout');
});

Route::controller(UserController::class)->group(function () {
    Route::post('/user_register', 'store');
    Route::get('/pages/authors', 'showAuthors');
    Route::get('/author/{slug}', 'show');
});

// Homepage and Static Pages
Route::view('/', 'frontend.home')->name('homepage');
Route::view('/news', 'frontend.article.view');

// Article and Related Content
Route::controller(ArticleController::class)->group(function () {
    Route::get('/events/{slug}', 'viewevent');
    Route::get('/infographics/{slug}', 'graphics');
    Route::get('/centralcommittee/20cc/{slug}', 'twentycc');
    Route::get('/article/{slug}/{id}', 'show');
    Route::get('/article/{slug}', 'cicmnews');
    Route::post('/search', 'search');
    Route::post('/search/ajax', 'ajax_search');
    Route::post('/ajax-load-more', 'ajax_loadmore');
});

// Taxonomy Routes
Route::get('/tag/{slug}', [TagController::class, 'show']);
Route::get('/category/{slug}', [CategoryController::class, 'show']);
Route::get('/specialreport/{slug}', [ArticleController::class, 'specialreport']);

// Subscriptions
Route::post('/add-subscriber', [SubscriberController::class, 'store']);

// DM Article Routes
Route::controller(DMArticleController::class)->group(function () {
    Route::get('/episodesofexchanges', 'list');
    Route::get('/episodesofexchanges/{id}/{slug}', 'show');
});

//Pages
Route::prefix('pages')->group(function () {
    Route::controller(AboutPageController::class)->group(function () {
        Route::get('about', 'index');
    });

    Route::controller(MissionController::class)->group(function () {
        Route::get('mission', 'index');
    });

    Route::controller(TeamController::class)->group(function () {
        Route::get('team', 'index');
    });

    Route::controller(GraphsController::class)->group(function () {
        Route::get('graphs', 'show');
    });

    Route::controller(OrcaFileController::class)->group(function () {
        Route::get('orcafiles', 'show');
    });

    Route::controller(EventController::class)->group(function(){
        Route::get('events', 'index');
    });

    Route::get('gcns2024/speaker/{id}', [SpeakerController::class, 'getSpeakerData']);
    Route::get('gcns2025/speaker/{id}', [App\Http\Controllers\GCNS\SpeakerController::class, 'getSpeakerData']);
    Route::get('gcns2023/speaker/{id}', [App\Http\Controllers\GCNS23\SpeakerController::class, 'getSpeakerData']);

    // Static view routes
    $staticViews = [
        'publication' => 'frontend.publications',
        'onv' => 'onv',
        'share' => 'share',
        'submission' => 'submission',
        'partners' => 'partners',
        'india-china-trade-dashboard' => 'india-china-trade-dashboard',
        'china-census-dashboard' => 'china-census-dashboard',
        'china-provinces-dashboard' => 'china-provinces-dashboard',
        'china-public-diplomacy-dashboard' => 'china-public-diplomacy-dashboard',
        'infographics' => 'infographics',
        '19cc/part1' => 'part1',
        '19cc/part2' => 'part2',
        '20cc/overview' => 'overview',
        'consultancy' => 'consultancy',
        'contact' => 'contact',
        'test' => 'test',
        'gcns2024' => 'gcns/home',
        'gcns2024/all-speakers' => 'gcns/allspeakers',
        'gcns2023/all-speakers' => 'gcns23/allspeakers',
        'gcns2025/all-speakers' => 'gcns25/allspeakers',
        'gcns2025' => 'gcns25/home',
        'gcns2023' => 'gcns23/home',
        'gcns2025/all-media' => 'gcns25/allMedia',
        'gcns2024/all-media' => 'gcns/allMedia',
        'gcns2023/all-media' => 'gcns23/allMedia',
    ];

    foreach ($staticViews as $uri => $view) {
        Route::get($uri, fn() => view($view));
    }
});

// Other routes
Route::get('/infographics', fn() => view('infographics'));
Route::get('tag/{slug}', [TagController::class, 'show'])->name('tag.show');
Route::post('scheduleRegistration', [App\Http\Controllers\GCNS\RegisterationController::class, 'scheduleRegistration'])->name('scheduleRegistration');
Route::get('gcns/load-more-media', [App\Http\Controllers\GCNS\MediaController::class, 'loadMore'])->name('media.loadMore');
Route::get('gcns24/load-more-media', [App\Http\Controllers\Event\MediaController::class, 'loadMore'])->name('media24.loadMore');
Route::get('gcns23/load-more-media', [App\Http\Controllers\GCNS23\MediaController::class, 'loadMore'])->name('media23.loadMore');
Route::get('/event/speaker/{id}', [SpeakerController::class, 'getSpeakerData']);
Route::post('pdf-log', [ArticleController::class, 'pdfCounter']);
// Fallback route to display featured article by slug
Route::get('/{slug}', [ArticleController::class, 'featured']);