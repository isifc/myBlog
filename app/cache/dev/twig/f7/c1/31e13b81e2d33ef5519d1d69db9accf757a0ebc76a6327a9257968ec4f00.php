<?php

/* MWSimpleCrudGeneratorBundle::layout.html.twig */
class __TwigTemplate_f7c131e13b81e2d33ef5519d1d69db9accf757a0ebc76a6327a9257968ec4f00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'page' => array($this, 'block_page'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mwsimplecrudgenerator/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mwsimplecrudgenerator/css/bootstrap-checkbox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css\" rel=\"stylesheet\" />
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mwsimplecrudgenerator/css/crud.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mwsimplecrudgenerator/images/favicon.ico"), "html", null, true);
        echo "\">
</head>

<body>

<div class=\"container\">
    ";
        // line 35
        $this->displayBlock('menu', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
            // line 38
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 39
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"], array(), "MWSimpleCrudGeneratorBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('page', $context, $blocks);
        // line 46
        echo "
</div>


<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mwsimplecrudgenerator/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mwsimplecrudgenerator/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mwsimplecrudgenerator/js/bootstrap-checkbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Select2Bundle/js/bootstrap-checkbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("PinanoSelect2Bundle/Resources/public/js/i18n/es.js"), "html", null, true);
        echo "\"></script>


";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "
</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.layout.bannersadmin", array(), "MWSimpleCrudGeneratorBundle"), "html", null, true);
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "       
    ";
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 45
    public function block_page($context, array $blocks = array())
    {
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "   
   
";
    }

    public function getTemplateName()
    {
        return "MWSimpleCrudGeneratorBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 59,  176 => 58,  171 => 45,  166 => 35,  161 => 21,  158 => 20,  152 => 5,  146 => 62,  144 => 58,  138 => 55,  133 => 53,  129 => 52,  125 => 51,  121 => 50,  115 => 46,  113 => 45,  110 => 44,  104 => 43,  95 => 40,  90 => 39,  85 => 38,  81 => 37,  78 => 36,  76 => 35,  67 => 29,  59 => 23,  57 => 20,  53 => 19,  43 => 12,  39 => 11,  30 => 5,  24 => 1,);
    }
}
