<?php
namespace App\Controllers\Admin;

use App\Models\IndexAdmin;
use Core\App;

class AdminController
{
    protected $indexAdmin;

    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if ($_SESSION['user']->ROLE < 3) {
            $this->indexAdmin = new IndexAdmin;
        } else {
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }

    public function index()
    {
        $indexAdmin = $this->indexAdmin->indexAdmin();
        $title = ['SHOP' => ['title' => 'Bài đăng',
            'icon' => 'pencil',
            'link' => '/admin/shop',
            'color' => 'blue',
        ],
            'ACCOUNT' => ['title' => 'User',
                'icon' => 'user',
                'link' => '/admin/user',
                'color' => 'orange',
            ],
            'TYPE' => ['title' => 'Danh mục',
                'icon' => 'list-alt',
                'link' => '/admin/type',
                'color' => 'green',
            ],
            'FEEDBACK' => ['title' => 'Phản hồi',
                'icon' => 'reply',
                'link' => '/admin/feedback',
                'color' => 'red',
            ],
        ];
        return view('admin/index/index', compact('indexAdmin', 'title'));
    }
}
