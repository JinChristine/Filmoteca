<?php
declare(strict_types=1);

namespace App\Controller;
use App\Core\TemplateRenderer;
class ContactController
{
    private TemplateRenderer $renderer;
    public function __construct()
    {
        $this->renderer = new TemplateRenderer();
    }
}
?>