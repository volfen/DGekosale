<?php

/* showcasebox\index\index.tpl */
class __TwigTemplate_c4cd64a182aa9498a9f29f7bd51d493f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layoutbox.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutbox.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<div id=\"homeSlideTab\" class=\"tabbable tabs-below\">
\t<div class=\"tab-content\">
\t\t<div class=\"tab-pane fade active in\" id=\"category-27\">
\t\t\t<div id=\"myCarousel\" class=\"carousel slide\">
\t\t\t";
        // line 6
        if (isset($context["products"])) { $_products_ = $context["products"]; } else { $_products_ = null; }
        echo $_products_;
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"tabs\">
\t\t<ul class=\"nav nav-tabs bottom-tabs\">
\t\t\t";
        // line 12
        if (isset($context["showcasecategories"])) { $_showcasecategories_ = $context["showcasecategories"]; } else { $_showcasecategories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_showcasecategories_);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "\t\t\t<li ";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            if (($this->getAttribute($_category_, "id") == 0)) {
                echo "class=\"active\"";
            }
            echo "><a href=\"#\" data-toggle=\"tab\" data-id=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo $this->getAttribute($_category_, "id");
            echo "\">";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo $this->getAttribute($_category_, "caption");
            echo "</a><span class=\"ico\"></span></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "\t\t</ul>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "showcasebox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  50 => 13,  45 => 12,  35 => 6,  139 => 20,  116 => 16,  81 => 12,  78 => 11,  72 => 9,  64 => 8,  54 => 5,  46 => 4,  20 => 2,  17 => 1,  112 => 20,  109 => 19,  103 => 14,  90 => 16,  86 => 15,  80 => 14,  77 => 13,  70 => 12,  57 => 10,  53 => 9,  44 => 8,  41 => 7,  38 => 3,  32 => 4,  29 => 2,  26 => 1,);
    }
}
