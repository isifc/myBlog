<?php

/* MWSimpleCrudGeneratorBundle:widget:fields.html.twig */
class __TwigTemplate_c7b6a4258ecfc74845a859f7e6b63f5d38a313f01f35fb9752da9770600db2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('checkbox_widget', $context, $blocks);
    }

    // line 1
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"form-group\">
        ";
        // line 4
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 5
        echo "        <input class=\"form-control\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 10
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "    <div class=\"input-group input-group-lg\">
        <textarea class=\"form-control\" ";
        // line 13
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 18
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 19
        ob_start();
        // line 20
        echo "    <input type=\"checkbox\" class=\"mws_checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "MWSimpleCrudGeneratorBundle:widget:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  84 => 19,  81 => 18,  71 => 13,  68 => 12,  66 => 11,  63 => 10,  46 => 5,  44 => 4,  41 => 3,  39 => 2,  36 => 1,  32 => 18,  29 => 17,  27 => 10,  24 => 9,  22 => 1,);
    }
}
