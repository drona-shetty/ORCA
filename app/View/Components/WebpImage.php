<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\File;

class WebpImage extends Component
{
    public $src;
    public $webpExists;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($src)
    {
        $this->src = $src;

        // Convert image path to webp
        $pathInfo = pathinfo(public_path($src));
        $webpPath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '.webp';

        $this->webpExists = File::exists($webpPath);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.webp-image');
    }
}
