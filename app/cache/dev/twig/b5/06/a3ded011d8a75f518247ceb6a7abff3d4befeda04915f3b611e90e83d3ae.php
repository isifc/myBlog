<?php

/* HomeBackendBundle:Post:index.html.twig */
class __TwigTemplate_b506a3ded011d8a75f518247ceb6a7abff3d4befeda04915f3b611e90e83d3ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MWSimpleCrudGeneratorBundle::layout.html.twig", "HomeBackendBundle:Post:index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Post"), "MWSimpleCrudGeneratorBundle"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_page($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
    <div class=\"col-lg-2\">
        ";
        // line 10
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), "vars", array()), "errors", array())) > 0)) {
            // line 11
            echo "        <div class=\"alert alert-block alert-danger fade in form-errors\">
            ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), 'errors');
            echo "
        </div>
        ";
        }
        // line 15
        echo "        &nbsp;
    </div>
    <div class=\"col-lg-12\">
        <div class=\"filters-right\">
            <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"collapse\" data-target=\"#filters\">
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.filters", array(), "MWSimpleCrudGeneratorBundle"), "html", null, true);
        echo "
                <span class=\"caret\"></span>
            </a>
        </div>
    </div>
    
    <div class=\"col-lg-12\">
        <div id=\"filters\" class=\"well collapse\">
            <div class=\"form-group\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["filterForm"]) ? $context["filterForm"] : $this->getContext($context, "filterForm")), 'form');
        echo "
            </div>
        </div>
    </div>
    </div>
    <div class=\"row\">
    <div class=\"panel panel-default\">
    <div class=\"panel-heading\"><h3>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.list", array("%entity%" => "Post"), "MWSimpleCrudGeneratorBundle"), "html", null, true);
        echo "</h3></div>    
   
        <table class=\"table table-striped table-bordered table-condensed table-responsive\">
            <thead>
                <tr>
                    <th";
        // line 41
        if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "isSorted", array(0 => "a.Id"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "Id", "a.id");
        echo "</th>
                    <th";
        // line 42
        if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "isSorted", array(0 => "a.Name"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "Name", "a.name");
        echo "</th>
                    <th";
        // line 43
        if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "Title", "a.title");
        echo "</th>
                    <th";
        // line 44
        if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "isSorted", array(0 => "a.Content"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "Content", "a.content");
        echo "</th>
                    <th";
        // line 45
        if ($this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "isSorted", array(0 => "a.Date"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "Date", "a.date");
        echo "</th>
                    <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.actions", array(), "MWSimpleCrudGeneratorBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "                <tr>
                    <td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "content", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>
                        
        
                    <a class=\"glyphicon glyphicon-search tooltips\"  href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"\" rel=\"tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.show", array(), "MWSimpleCrudGeneratorBundle"), "html", null, true);
            echo "\">

            </a>
                
        
                    <a class=\"glyphicon glyphicon-edit tooltips\"  href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" title=\"\" rel=\"tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.actions.edit", array(), "MWSimpleCrudGeneratorBundle"), "html", null, true);
            echo "\">

            </a>
                                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tbody>
        </table>
        </div>

    <div class=\"col-lg-4 navigation\">
        ";
        // line 76
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
    </div>

        <div class=\"col-lg-8\">
        <a class=\"btn btn-primary likepaginator\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("admin_post_new");
        echo "\">
            ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("views.index.createnew", array(), "MWSimpleCrudGeneratorBundle"), "html", null, true);
        echo " Post
        </a>
    </div>
    </div>
        
";
    }

    // line 89
    public function block_javascript($context, array $blocks = array())
    {
        // line 90
        echo "<script type=\"text/javascript\">
\$('.tooltips').tooltip();
</script>
";
    }

    public function getTemplateName()
    {
        return "HomeBackendBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 90,  229 => 89,  219 => 81,  215 => 80,  208 => 76,  201 => 71,  187 => 65,  177 => 60,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  150 => 52,  147 => 51,  143 => 50,  136 => 46,  128 => 45,  120 => 44,  112 => 43,  104 => 42,  96 => 41,  88 => 36,  78 => 29,  66 => 20,  59 => 15,  53 => 12,  50 => 11,  48 => 10,  44 => 8,  41 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
