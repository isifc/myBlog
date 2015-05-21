<?php

/* HomeBackendBundle:Post:new.html.twig */
class __TwigTemplate_4961c9246fc42b945d398a7f90695ad889a2a818799741a4b540ade04d121f66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MWSimpleCrudGeneratorBundle::layout.html.twig", "HomeBackendBundle:Post:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page' => array($this, 'block_page'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MWSimpleCrudGeneratorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.creation", array("%entity%" => "Post"), "MWSimpleCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "MWSimpleCrudGeneratorBundle:widget:fields.html.twig"));
        // line 9
        echo "    <div class=\"panel panel-default center-block\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title center-block\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.new.creation", array("%entity%" => "Post"), "MWSimpleCrudGeneratorBundle"), "html", null, true);
        echo "
            </h3>
        </div>
            
        <div class=\"panel-body\">
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
        </div>
    </div>

        <div class=\"col-lg-9\">
    <div class=\"float-left col-lg-3\">
        <a class=\"btn btn-info col-lg-11\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_post");
        echo "\">
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.recordactions.backtothelist", array(), "MWSimpleCrudGeneratorBundle"), "html", null, true);
        echo "
        </a>
    </div>
</div>

";
    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        // line 32
        echo "    
        \$(\"#home_backendbundle_post_categories\").select2();
    
    ";
        // line 35
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mwsimplecrudgenerator/js/widget.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "HomeBackendBundle:Post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  91 => 35,  86 => 32,  83 => 31,  73 => 24,  69 => 23,  60 => 17,  52 => 12,  47 => 9,  44 => 8,  41 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
