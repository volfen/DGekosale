<?php

/* searchresults\index\items.tpl */
class __TwigTemplate_35261077d2b6719036b23b618123ea35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        if ((twig_length_filter($this->env, $_items_) > 0)) {
            // line 2
            echo "<div style=\"z-index: 900000; width: 250px;right: 289px;background: #fff;\" > 
";
            // line 3
            if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_items_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "<div class=\"product-list row-fluid\">
\t<div class=\"span3 photo\">
    \t<a href=\"";
                // line 6
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
                echo "\" title=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "name");
                echo "\"><img src=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "photo");
                echo "\" alt=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "name");
                echo "\"></a>
\t</div>
    <div class=\"span9 info\">
\t\t<a href=\"";
                // line 9
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_item_, "seo")));
                echo "\" title=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "name");
                echo "\"><h4 style=\"padding: 5px;\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "name");
                echo "</h4></a>
\t</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 13
            echo "</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "searchresults\\index\\items.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  48 => 9,  32 => 6,  28 => 4,  23 => 3,  20 => 2,  17 => 1,);
    }
}
