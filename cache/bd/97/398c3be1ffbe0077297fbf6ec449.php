<?php

/* categorylist\index\layout.tpl */
class __TwigTemplate_bd97398c3be1ffbe0077297fbf6ec449 extends Twig_Template
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
        return "categorylist\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  28 => 5,  19 => 2,  153 => 30,  149 => 29,  136 => 27,  114 => 25,  111 => 24,  104 => 21,  73 => 15,  27 => 5,  22 => 3,  46 => 7,  30 => 5,  21 => 2,  167 => 34,  157 => 34,  150 => 32,  105 => 24,  102 => 23,  91 => 22,  76 => 16,  57 => 13,  51 => 11,  47 => 10,  25 => 4,  20 => 2,  17 => 1,  269 => 78,  267 => 77,  263 => 76,  258 => 73,  237 => 71,  230 => 70,  221 => 63,  204 => 61,  197 => 60,  187 => 52,  183 => 50,  177 => 47,  174 => 46,  169 => 45,  163 => 42,  160 => 32,  156 => 40,  151 => 37,  145 => 35,  134 => 28,  123 => 29,  120 => 28,  116 => 26,  108 => 23,  92 => 21,  87 => 20,  83 => 18,  78 => 17,  75 => 16,  67 => 12,  60 => 13,  53 => 8,  50 => 7,  35 => 6,  173 => 50,  164 => 44,  148 => 42,  138 => 41,  135 => 40,  130 => 31,  125 => 36,  122 => 35,  118 => 33,  106 => 27,  80 => 18,  77 => 17,  72 => 15,  66 => 20,  58 => 18,  48 => 10,  43 => 11,  140 => 30,  137 => 29,  127 => 26,  103 => 19,  98 => 18,  93 => 20,  90 => 25,  86 => 15,  82 => 13,  71 => 12,  63 => 14,  54 => 12,  49 => 9,  44 => 9,  41 => 8,  38 => 7,  32 => 4,  29 => 5,  26 => 2,);
    }
}
