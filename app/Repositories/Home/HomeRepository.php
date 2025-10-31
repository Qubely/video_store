<?php

namespace App\Repositories\Home;

use App\Repositories\BaseRepository;

class HomeRepository extends BaseRepository implements IHomeRepository
{

    public function homeData($request)
    {
        return [
            'topSwiper' => $this->getTopSwiper(),
            'categoryMenus' => $this->getCategoryMenus(),
            'cardSwiper' => $this->getCardSwiper(),
            'fixedMenus' => $this->getFixedMenu(),
            'cardDisplay' => $this->getCardDisplay()
        ];
    }

    private function getTopSwiper()
    {
        return [
            [
                'uri' => url('images/swiper/top/1.webp'),
                'alt' => 'Image 1'
            ],
            [
                'uri' => url('images/swiper/top/2.webp'),
                'alt' => 'Image 2'
            ],
            [
                'uri' => url('images/swiper/top/3.webp'),
                'alt' => 'Image 3'
            ],
            [
                'uri' => url('images/swiper/top/4.webp'),
                'alt' => 'Image 4'
            ],
        ];
    }

    private function getCategoryMenus()
    {
        return [
            [
                'name' => '国产',
                'uri' => '',
                'menus' => [
                    [
                        'name' => '乱伦',
                        'uri' => '',
                    ],
                    [
                        'name' => '乱伦',
                        'uri' => '',
                    ],
                    [
                        'name' => '乱伦',
                        'uri' => '',
                    ]
                ]
            ],
            [
                'name' => '国产',
                'uri' => '',
                'menus' => [
                    [
                        'name' => '乱伦',
                        'uri' => '',
                    ],
                    [
                        'name' => '乱伦',
                        'uri' => '',
                    ]
                ]
            ],
            [
                'name' => '国产',
                'uri' => '',
                'menus' => [
                    [
                        'name' => '乱伦',
                        'uri' => '',
                    ],
                    [
                        'name' => '乱伦',
                        'uri' => '',
                    ]
                ]
            ],
        ];
    }

    private function getCardSwiper()
    {
        return [
            [
                'name' => 'slide 1',
                'items' => [
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ]
                ]
            ],
            [
                'name' => 'slide 1',
                'items' => [
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ]
                ]
            ]
        ];
    }

    private function getFixedMenu()
    {
        return [
            [
                'name' => 'slide 1',
                'items' => [
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                ]
            ],
            [
                'name' => 'slide 1',
                'items' => [
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ]
                ]
            ],
            [
                'name' => 'slide 1',
                'items' => [
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ]
                ]
            ],
            [
                'name' => 'slide 1',
                'items' => [
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ],
                    [
                        'name' => '示範連結',
                        'uri' => ''
                    ]
                ]
            ]
        ];
    }

    public function getCardDisplay()
    {
        return [
            [
                'name' => 'slide 1',
                'items' => [
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ]
                ]
            ],
            [
                'name' => 'slide 1',
                'items' => [
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ],
                    [
                        'name' => '影片的示範標題',
                        'uri' => ''
                    ]
                ]
            ]
        ];
    }
}
