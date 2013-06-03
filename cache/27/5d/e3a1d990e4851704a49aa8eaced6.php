<?php

/* finalizationbox/index/methods.tpl */
class __TwigTemplate_275de3a1d990e4851704a49aa8eaced6 extends Twig_Template
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
        echo "<tr>
\t<td colspan=\"2\"><h4>Transport i sposób płatności:</h4>";
        // line 2
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo $this->getAttribute($this->getAttribute($_clientOrder_, "dispatchmethod"), "dispatchmethodname");
        echo " - ";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo $this->getAttribute($this->getAttribute($_clientOrder_, "payment"), "paymentmethodname");
        echo "</td>
\t<td colspan=\"2\" class=\"alignright\">";
        // line 3
        echo Gekosale\Translation::get("TXT_COST_OF_DELIVERY");
        echo "</td>
\t<td class=\"center\"><strong>";
        // line 4
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo Gekosale\Template::priceFormat($this->getAttribute($this->getAttribute($_clientOrder_, "dispatchmethod"), "dispatchmethodcost"));
        echo "</strong></td>
</tr>";
    }

    public function getTemplateName()
    {
        return "finalizationbox/index/methods.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  20 => 2,  173 => 39,  158 => 36,  153 => 35,  143 => 32,  137 => 30,  131 => 29,  128 => 28,  124 => 26,  111 => 24,  106 => 23,  98 => 22,  93 => 21,  90 => 20,  83 => 19,  80 => 18,  68 => 14,  58 => 11,  46 => 8,  43 => 7,  34 => 5,  29 => 4,  26 => 3,  22 => 2,  17 => 1,  488 => 194,  477 => 189,  473 => 188,  463 => 182,  457 => 181,  448 => 177,  438 => 172,  430 => 169,  420 => 164,  412 => 161,  404 => 158,  394 => 153,  384 => 148,  376 => 145,  368 => 141,  354 => 140,  346 => 135,  335 => 130,  331 => 129,  321 => 123,  315 => 122,  306 => 118,  296 => 113,  288 => 110,  278 => 105,  270 => 102,  262 => 99,  252 => 94,  244 => 91,  236 => 89,  228 => 86,  220 => 83,  211 => 79,  204 => 76,  190 => 75,  182 => 70,  170 => 64,  166 => 63,  156 => 57,  150 => 34,  141 => 52,  133 => 49,  125 => 46,  117 => 42,  103 => 41,  95 => 36,  84 => 28,  79 => 25,  76 => 24,  73 => 15,  70 => 22,  67 => 21,  65 => 13,  61 => 18,  59 => 17,  52 => 9,  48 => 12,  44 => 11,  40 => 10,  31 => 3,  28 => 3,  23 => 1,);
    }
}
