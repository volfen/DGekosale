<?php

/* products.tpl */
class __TwigTemplate_c64d1a7008b00f3d08cd4ee6d742a016 extends Twig_Template
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
        if (isset($context["view"])) { $_view_ = $context["view"]; } else { $_view_ = null; }
        if (($_view_ == 0)) {
            // line 2
            echo "\t";
            $this->env->loadTemplate("products_grid.tpl")->display($context);
        } else {
            // line 4
            echo "\t";
            $this->env->loadTemplate("products_list.tpl")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "products.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  75 => 17,  65 => 14,  62 => 13,  59 => 12,  55 => 11,  48 => 8,  40 => 6,  37 => 5,  68 => 15,  45 => 12,  35 => 6,  139 => 20,  116 => 16,  81 => 12,  78 => 11,  72 => 16,  64 => 8,  54 => 5,  46 => 4,  20 => 2,  33 => 2,  27 => 2,  18 => 1,  112 => 20,  109 => 19,  103 => 14,  90 => 16,  80 => 14,  77 => 13,  57 => 10,  53 => 9,  44 => 8,  41 => 7,  38 => 3,  32 => 4,  29 => 3,  26 => 2,  195 => 44,  189 => 43,  185 => 41,  179 => 40,  176 => 39,  160 => 36,  153 => 35,  150 => 34,  137 => 32,  132 => 31,  124 => 30,  121 => 29,  115 => 28,  111 => 27,  101 => 24,  94 => 23,  86 => 15,  83 => 21,  79 => 20,  74 => 19,  70 => 12,  67 => 16,  63 => 14,  56 => 12,  52 => 10,  50 => 13,  43 => 7,  36 => 6,  28 => 5,  22 => 2,  17 => 1,);
    }
}
