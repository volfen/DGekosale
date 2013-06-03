<?php

/* mainside\index\layout.tpl */
class __TwigTemplate_aa2ec8b5cced8e909671a4a8235004ad extends Twig_Template
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
        return "mainside\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,  71 => 16,  61 => 13,  58 => 12,  39 => 6,  173 => 39,  163 => 34,  156 => 32,  146 => 30,  143 => 29,  140 => 28,  127 => 26,  105 => 24,  102 => 23,  91 => 22,  76 => 16,  51 => 10,  47 => 8,  25 => 3,  24 => 4,  75 => 17,  65 => 14,  62 => 13,  59 => 12,  55 => 11,  48 => 8,  40 => 6,  37 => 5,  68 => 15,  45 => 12,  35 => 6,  139 => 20,  116 => 16,  81 => 12,  78 => 11,  72 => 16,  64 => 14,  54 => 11,  46 => 4,  20 => 2,  33 => 6,  27 => 2,  18 => 1,  112 => 20,  109 => 19,  103 => 14,  90 => 16,  80 => 18,  77 => 13,  57 => 13,  53 => 9,  44 => 8,  41 => 8,  38 => 7,  32 => 4,  29 => 3,  26 => 2,  195 => 44,  189 => 43,  185 => 41,  179 => 40,  176 => 39,  160 => 36,  153 => 35,  150 => 34,  137 => 32,  132 => 31,  124 => 30,  121 => 29,  115 => 28,  111 => 27,  101 => 24,  94 => 23,  86 => 15,  83 => 21,  79 => 20,  74 => 17,  70 => 12,  67 => 15,  63 => 14,  56 => 12,  52 => 10,  50 => 13,  43 => 7,  36 => 5,  28 => 5,  22 => 3,  17 => 1,);
    }
}
