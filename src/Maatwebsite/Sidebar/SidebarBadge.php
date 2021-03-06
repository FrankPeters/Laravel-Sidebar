<?php namespace Maatwebsite\Sidebar;

use Illuminate\Contracts\View\Factory;
use Maatwebsite\Sidebar\Traits\Itemable;
use Maatwebsite\Sidebar\Traits\Renderable;
use Maatwebsite\Sidebar\Traits\Attributable;
use Maatwebsite\Sidebar\Traits\Authorizable;

class SidebarBadge {

    /**
     * Traits
     */
    use Attributable, Renderable, Itemable, Authorizable;
    /**
     * @var
     */
    protected $factory;

    /**
     * Default view
     * @var string
     */
    protected $view = 'sidebar::badge';

    /**
     * @var string
     */
    protected $renderType = 'badge';

    /**
     * @param Factory    $factory
     */
    public function __construct(Factory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * Init item
     * @return $this
     * @internal param $name
     */
    public function init()
    {
        return $this->cleanInstance();
    }
}
