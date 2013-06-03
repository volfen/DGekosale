<?php

/* productcart\index\layout.tpl */
class __TwigTemplate_a077a776817a6aa1518db11a932385ed extends Twig_Template
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
        if (array_key_exists("message", $context)) {
            // line 4
            echo "\t<div class=\"alert alert-info\">
\t\t<h3>";
            // line 5
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo $_message_;
            echo "</h3>
\t</div>
\t";
        }
        // line 7
        echo " 
\t";
        // line 8
        if (isset($context["pagescheme"])) { $_pagescheme_ = $context["pagescheme"]; } else { $_pagescheme_ = null; }
        echo $this->getAttribute($_pagescheme_, "content");
        echo "
</section>
";
        // line 10
        if (isset($context["pagescheme"])) { $_pagescheme_ = $context["pagescheme"]; } else { $_pagescheme_ = null; }
        echo $this->getAttribute($_pagescheme_, "js");
        echo "
";
        // line 11
        $this->env->loadTemplate("footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "productcart\\index\\layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  43 => 10,  37 => 8,  24 => 4,  38 => 6,  32 => 4,  231 => 108,  216 => 96,  184 => 66,  181 => 65,  179 => 64,  167 => 59,  160 => 56,  155 => 55,  128 => 49,  122 => 48,  117 => 46,  102 => 37,  95 => 35,  90 => 34,  85 => 33,  55 => 19,  47 => 17,  42 => 16,  22 => 3,  19 => 2,  105 => 33,  103 => 32,  100 => 31,  96 => 29,  88 => 26,  83 => 23,  73 => 23,  68 => 19,  54 => 14,  51 => 13,  40 => 9,  27 => 5,  23 => 3,  17 => 1,  92 => 35,  84 => 29,  74 => 21,  65 => 18,  61 => 15,  59 => 14,  46 => 9,  44 => 10,  39 => 7,  36 => 6,  33 => 5,  506 => 156,  496 => 148,  488 => 144,  485 => 143,  482 => 142,  474 => 138,  467 => 134,  461 => 132,  452 => 127,  437 => 118,  433 => 117,  426 => 114,  418 => 113,  414 => 112,  410 => 110,  406 => 109,  399 => 107,  386 => 105,  381 => 104,  373 => 103,  367 => 102,  361 => 101,  358 => 100,  353 => 99,  348 => 98,  342 => 94,  335 => 92,  332 => 91,  322 => 90,  316 => 88,  306 => 86,  303 => 85,  299 => 83,  286 => 81,  274 => 79,  262 => 78,  259 => 77,  245 => 70,  238 => 65,  223 => 63,  220 => 62,  215 => 61,  212 => 60,  202 => 57,  194 => 56,  191 => 55,  188 => 54,  185 => 53,  168 => 51,  162 => 50,  156 => 48,  152 => 54,  146 => 45,  143 => 53,  137 => 52,  132 => 51,  126 => 35,  112 => 45,  107 => 32,  99 => 31,  94 => 28,  91 => 27,  81 => 24,  76 => 23,  71 => 20,  64 => 18,  60 => 20,  53 => 12,  50 => 18,  41 => 7,  34 => 7,  31 => 4,  29 => 3,  26 => 2,);
    }
}
