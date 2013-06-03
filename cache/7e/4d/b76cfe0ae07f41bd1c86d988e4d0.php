<?php

/* registration\index\layout.tpl */
class __TwigTemplate_7e4db76cfe0ae07f41bd1c86d988e4d0 extends Twig_Template
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
        $this->env->loadTemplate("header.tpl")->display($context);
        // line 2
        echo "<section id=\"content\" class=\"content layout-boxes\">
\t";
        // line 3
        if (isset($context["pagescheme"])) { $_pagescheme_ = $context["pagescheme"]; } else { $_pagescheme_ = null; }
        echo $this->getAttribute($_pagescheme_, "content");
        echo "
</section>
";
        // line 5
        if (isset($context["pagescheme"])) { $_pagescheme_ = $context["pagescheme"]; } else { $_pagescheme_ = null; }
        echo $this->getAttribute($_pagescheme_, "js");
        echo "
";
        // line 6
        $this->env->loadTemplate("footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "registration\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  19 => 2,  145 => 54,  135 => 49,  126 => 45,  120 => 44,  108 => 37,  101 => 35,  94 => 33,  87 => 31,  80 => 29,  73 => 27,  54 => 12,  40 => 11,  512 => 86,  504 => 85,  490 => 84,  481 => 82,  473 => 81,  461 => 79,  448 => 74,  439 => 73,  411 => 70,  408 => 69,  403 => 68,  394 => 66,  391 => 65,  379 => 63,  366 => 58,  358 => 57,  355 => 56,  336 => 54,  331 => 53,  323 => 52,  309 => 50,  301 => 49,  289 => 47,  276 => 42,  268 => 41,  252 => 40,  243 => 38,  231 => 36,  218 => 31,  210 => 30,  196 => 29,  182 => 27,  174 => 26,  162 => 24,  149 => 19,  141 => 18,  127 => 17,  106 => 13,  85 => 7,  71 => 6,  57 => 4,  49 => 3,  37 => 1,  32 => 78,  29 => 62,  26 => 46,  20 => 23,  17 => 1,  136 => 49,  118 => 15,  111 => 32,  105 => 31,  99 => 30,  93 => 8,  82 => 22,  68 => 21,  58 => 13,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  36 => 6,  33 => 6,  31 => 4,  28 => 5,  23 => 1,);
    }
}
