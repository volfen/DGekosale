<?php

/* cartbox/index/coupons.tpl */
class __TwigTemplate_2994431075d9ce4cdeba06c25b55b0ee extends Twig_Template
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
        if (isset($context["coupon"])) { $_coupon_ = $context["coupon"]; } else { $_coupon_ = null; }
        if ($this->getAttribute($_coupon_, "code", array(), "any", true, true)) {
            // line 2
            echo "<tr>
\t<td colspan=\"2\">
\t\t<h4>Kupon rabatowy: ";
            // line 4
            if (isset($context["coupon"])) { $_coupon_ = $context["coupon"]; } else { $_coupon_ = null; }
            echo $this->getAttribute($_coupon_, "code");
            echo "</h4>
\t\t<button type=\"submit\" class=\"btn btn-cancel\" onclick=\"xajax_useCoupon();return false;\">Anuluj</button>
\t</td>
\t<td colspan=\"2\" class=\"alignright\">Wysokość rabatu</td>
\t<td colspan=\"2\" class=\"center\"><strong><span class=\"green\">";
            // line 8
            if (isset($context["couponvalue"])) { $_couponvalue_ = $context["couponvalue"]; } else { $_couponvalue_ = null; }
            echo Gekosale\Template::priceFormat($_couponvalue_);
            echo "</span></strong></td>
</tr>
";
        } else {
            // line 11
            echo "<tr>
\t<td colspan=\"6\">
\t\t<h4>Kupon rabatowy</h4> <input type=\"text\" id=\"coupon-code\" class=\"input-large\">
\t\t<button type=\"submit\" class=\"btn btn-info\" onclick=\"xajax_useCoupon(\$('#coupon-code').val());return false;\">Aktywuj</button>
\t</td>
</tr>
";
        }
    }

    public function getTemplateName()
    {
        return "cartbox/index/coupons.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  24 => 4,  20 => 2,  333 => 61,  317 => 60,  314 => 59,  305 => 56,  292 => 54,  287 => 53,  276 => 52,  271 => 51,  268 => 50,  261 => 49,  258 => 48,  245 => 45,  240 => 44,  237 => 43,  233 => 42,  230 => 41,  216 => 38,  210 => 36,  205 => 35,  200 => 34,  186 => 33,  180 => 31,  175 => 30,  170 => 29,  167 => 28,  149 => 25,  138 => 24,  133 => 23,  130 => 22,  123 => 21,  120 => 20,  110 => 17,  104 => 15,  99 => 14,  94 => 13,  80 => 12,  74 => 10,  64 => 8,  48 => 6,  217 => 45,  198 => 42,  193 => 41,  176 => 40,  173 => 39,  166 => 37,  160 => 35,  154 => 26,  151 => 33,  147 => 31,  134 => 29,  129 => 28,  121 => 27,  116 => 26,  113 => 25,  106 => 24,  103 => 23,  96 => 20,  91 => 19,  59 => 11,  50 => 9,  36 => 6,  33 => 5,  84 => 32,  73 => 27,  65 => 13,  60 => 20,  57 => 19,  54 => 18,  51 => 17,  49 => 16,  45 => 5,  43 => 13,  31 => 7,  27 => 6,  23 => 5,  90 => 33,  81 => 31,  68 => 24,  63 => 10,  41 => 4,  35 => 8,  22 => 2,  19 => 2,  17 => 1,  89 => 27,  85 => 26,  78 => 13,  76 => 17,  72 => 15,  69 => 9,  67 => 17,  61 => 15,  53 => 7,  47 => 9,  44 => 10,  40 => 8,  37 => 3,  32 => 8,  29 => 4,  26 => 2,);
    }
}
