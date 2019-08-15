<?php

return [
    // Mode
    'production' => false,

    // Envs
    'branch' => env('BRANCH'),
    'apiUrl' => env('API_URL'),
    'apiToken' => env('API_TOKEN'),

    // Meta
    'description' => 'Social Trader Tools is a web based platform for anyone that uses MT4. Hosted in the cloud 24/7 without the hassle of a VPS, allowing you to copy trades to any amount of trading accounts and much more.',

    // Page data
    'titleMain' => 'A platform for',
    'titleCategories' => 'Traders, Money Managers, Signal Providers, Brokers',
    'titleSub' => 'Social Trader Tools is a web based platform for anyone that uses MT4.
     Hosted in the cloud 24/7 without the hassle of a VPS, allowing you to copy trades to any amount of trading accounts and much more.',

    // Urls
    'urlRegister' => 'https://my.socialtradertools.com/register',
    'urlLogin' => 'https://my.socialtradertools.com/login',
    'facebookUrl' => 'https://www.facebook.com/tifintech',
    'twitterUrl' => 'https://twitter.com/tifintech',
    'youtubeUrl' => 'https://www.youtube.com/channel/UCnWMF0CDmlaPtpjrq4MpGXw',
    'linkedInUrl' => 'https://www.linkedin.com/showcase/social-trader-tools-platform/',
    'baseUrl' => 'https://www.socialtradertools.com/',

    // Helpers
    'active' => function ($page, $section) {
        if (is_array($section)) {
            foreach ($section as $item) {
                if ($item == $page->getPath()) {
                    return 'active';
                }
            }
            return '';
        } else {
            return str_contains($page->getPath(), $section) ? 'active' : '';
        }

    },

    //Get terms and conditions documents and parse to markdown
    'getTerms' => function ($page) {

        $response = json_decode(file_get_contents(env('CMS_URL') . '/terms?access_token=' . env('API_TOKEN') . '&single=1'));

        $parser = new \TightenCo\Jigsaw\Parsers\ParsedownExtraParser();

        return $parser->parse($response->data->body);
    },

    //Get privacy documents and parse to markdown
    'getPrivacy' => function ($page) {

        $response = json_decode(file_get_contents(env('CMS_URL') . '/privacy?access_token=' . env('API_TOKEN') . '&single=1'));

        $parser = new \TightenCo\Jigsaw\Parsers\ParsedownExtraParser();

        return $parser->parse($response->data->body);
    },

    // Remotes
    'collections' => [
        'terms' => [
            'extends' => '_layouts.term',
            'path' => '{collection}',
            'items' => function () {
                $response = json_decode(file_get_contents(env('CMS_URL') . '/terms?access_token=' . env('API_TOKEN')));

                if (!isset($response->data)) {
                    throw new Exception('Could not get terms.');
                }

                $terms = $response->data;

                return collect($terms)->map(function ($term) {
                    return [
                        'title' => $term->title,
                        'content' => $term->body,
                    ];
                });
            },
        ],
        'privacy' => [
            'extends' => '_layouts.privacy',
            'path' => '{collection}',
            'items' => function () {
                $response = json_decode(file_get_contents(env('CMS_URL') . '/privacy?access_token=' . env('API_TOKEN')));

                if (!isset($response->data)) {
                    throw new Exception('Could not get privacy docs.');
                }

                $privacies = $response->data;

                return collect($privacies)->map(function ($privacy) {
                    return [
                        'title' => $privacy->title,
                        'content' => $privacy->body,
                    ];
                });
            },
        ],
        'reviews' => [
            'extends' => '_layouts.review',
            'items' => function () {
                $response = json_decode(file_get_contents(env('CMS_URL') . '/reviews?access_token=' . env('API_TOKEN')));

                if (!isset($response->data)) {
                    throw new Exception('Could not get reviews.');
                }

                $reviews = $response->data;

                return collect($reviews)->map(function ($review) {
                    return [
                        'status' => $review->status,
                        'name' => $review->name,
                        'company' => $review->company,
                        'comment' => $review->comment,
                        'rating' => $review->rating,
                    ];
                });
            },
        ],
        'posts' => [
            'extends' => '_layouts.post',
            'items' => function () {
                $response = json_decode(file_get_contents(env('CMS_URL') . '/blog?access_token=' . env('API_TOKEN' . '?status=published')));

                if (!isset($response->data)) {
                    throw new Exception('Could not get blog posts.');
                }

                $posts = $response->data;

                return collect($posts)->map(function ($post) {
                    return [
                        'published_on' => $post->published_on,
                        'title' => $post->title,
                        'content' => $post->body,
                        'author' => $post->author,
                        'filename' => $post->slug,
                        'status' => $post->status,
                        'crawl' => true,
                        'description' => $post->body
                    ];
                });
            },
            'path' => 'blog/{filename}',
        ],
        'test' => [

        ],
        'features' => [
            'icon' => '',
            'title' => '',
            'body' => ''
        ],
    ],
];
