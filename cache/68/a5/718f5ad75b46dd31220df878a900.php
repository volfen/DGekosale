<?php

/* productbox/index/info_notabs.tpl */
class __TwigTemplate_68a5718f5ad75b46dd31220df878a900 extends Twig_Template
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
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "description") != "")) {
            echo " 
<div id=\"product-description\" class=\"well well-clean well-small product-details\" itemprop=\"description\">
\t<h2>";
            // line 3
            echo Gekosale\Translation::get("TXT_DESCRIPTION");
            echo "</h2>
\t";
            // line 4
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "description");
            echo "
</div>
";
        }
        // line 7
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "longdescription") != "")) {
            echo " 
<div class=\"well well-clean well-small product-details\">
\t<h2>";
            // line 9
            echo Gekosale\Translation::get("TXT_ADDITIONAL_INFO");
            echo "</h2>
\t";
            // line 10
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "longdescription");
            echo "
</div>
";
        }
        // line 13
        echo "<div class=\"well well-clean well-small product-details\">
\t<h2>";
        // line 14
        echo Gekosale\Translation::get("TXT_COST_OF_DELIVERY");
        echo "</h2>
\t<table class=\"table\">
\t\t<tbody>
\t\t\t";
        // line 17
        if (isset($context["delivery"])) { $_delivery_ = $context["delivery"]; } else { $_delivery_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_delivery_);
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 18
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 19
            if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
            echo $this->getAttribute($_d_, "name");
            echo "</td>
\t\t\t\t<th>";
            // line 20
            if (isset($context["d"])) { $_d_ = $context["d"]; } else { $_d_ = null; }
            echo Gekosale\Template::priceFormat($this->getAttribute($_d_, "dispatchmethodcost"));
            echo "</th>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "\t\t</tbody>
\t</table>
</div>
";
        // line 26
        if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
        if ((twig_length_filter($this->env, $_files_) > 0)) {
            // line 27
            echo "<div class=\"well well-clean well-small product-details\" id=\"files\">
\t";
            // line 28
            $this->env->loadTemplate("productbox/index/files.tpl")->display($context);
            // line 29
            echo "</div>
";
        }
        // line 31
        echo "<div id=\"reviews\">
";
        // line 32
        $this->env->loadTemplate("productbox/index/opinions.tpl")->display($context);
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "productbox/index/info_notabs.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  103 => 32,  100 => 31,  96 => 29,  88 => 26,  83 => 23,  73 => 20,  68 => 19,  54 => 14,  51 => 13,  40 => 9,  27 => 4,  23 => 3,  17 => 1,  92 => 35,  84 => 29,  74 => 21,  65 => 18,  61 => 15,  59 => 14,  46 => 9,  44 => 10,  39 => 7,  36 => 6,  33 => 5,  506 => 156,  496 => 148,  488 => 144,  485 => 143,  482 => 142,  474 => 138,  467 => 134,  461 => 132,  452 => 127,  437 => 118,  433 => 117,  426 => 114,  418 => 113,  414 => 112,  410 => 110,  406 => 109,  399 => 107,  386 => 105,  381 => 104,  373 => 103,  367 => 102,  361 => 101,  358 => 100,  353 => 99,  348 => 98,  342 => 94,  335 => 92,  332 => 91,  322 => 90,  316 => 88,  306 => 86,  303 => 85,  299 => 83,  286 => 81,  274 => 79,  262 => 78,  259 => 77,  245 => 70,  238 => 65,  223 => 63,  220 => 62,  215 => 61,  212 => 60,  202 => 57,  194 => 56,  191 => 55,  188 => 54,  185 => 53,  168 => 51,  162 => 50,  156 => 48,  152 => 47,  146 => 45,  143 => 44,  137 => 42,  132 => 39,  126 => 35,  112 => 33,  107 => 32,  99 => 31,  94 => 28,  91 => 27,  81 => 24,  76 => 23,  71 => 20,  64 => 18,  60 => 17,  53 => 12,  50 => 11,  41 => 7,  34 => 7,  31 => 4,  29 => 3,  26 => 2,);
    }
}
