<?php

/* products.tpl */
class __TwigTemplate_5cc48ad7b908a81ef5ee023fc8181dad extends Twig_Template
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
        return array (  24 => 4,  59 => 12,  55 => 11,  48 => 8,  42 => 8,  20 => 2,  30 => 4,  25 => 3,  111 => 19,  107 => 18,  103 => 16,  75 => 17,  21 => 3,  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 37,  159 => 35,  153 => 33,  147 => 32,  144 => 31,  140 => 29,  127 => 27,  122 => 26,  114 => 25,  109 => 24,  106 => 23,  96 => 21,  84 => 17,  58 => 11,  46 => 8,  34 => 7,  87 => 32,  70 => 13,  65 => 14,  62 => 13,  54 => 18,  51 => 17,  49 => 16,  45 => 14,  31 => 6,  23 => 5,  90 => 17,  81 => 31,  68 => 15,  63 => 10,  41 => 7,  35 => 6,  19 => 2,  33 => 2,  27 => 6,  18 => 1,  85 => 26,  78 => 30,  76 => 20,  69 => 15,  67 => 17,  53 => 12,  47 => 9,  44 => 10,  40 => 6,  37 => 5,  32 => 4,  29 => 3,  26 => 2,  173 => 37,  167 => 36,  163 => 34,  157 => 33,  154 => 32,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 21,  89 => 18,  79 => 17,  72 => 16,  64 => 15,  61 => 15,  57 => 19,  52 => 10,  43 => 7,  36 => 6,  28 => 4,  22 => 2,  17 => 1,);
    }
}
