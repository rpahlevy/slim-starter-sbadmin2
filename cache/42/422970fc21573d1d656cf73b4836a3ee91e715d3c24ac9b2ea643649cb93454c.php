<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* template.html */
class __TwigTemplate_e0367ae767867830ee5530cd8fd4bbd7b89ff08ded1ec347999aa6d47f57a30f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"id\">
    <head>
    </head>
    <body>
        <div class=\"container\" id=\"app\">
            <h1>Tem<strong>plate</strong></h1>
            <p>Hello!</p>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "template.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.html", "E:\\Products\\Shared\\WebCodes\\vendor\\slim-starter-sbadmin2\\templates\\template.html");
    }
}
