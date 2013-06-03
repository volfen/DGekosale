<?php

/* finalizationbox/index/products.tpl */
class __TwigTemplate_50f2d53b90b226f097b267dc422d99c5 extends Twig_Template
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
        if (isset($context["productCart"])) { $_productCart_ = $context["productCart"]; } else { $_productCart_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_productCart_);
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            echo "\t";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            if (($this->getAttribute($_product_, "standard") == 1)) {
                // line 3
                echo "\t<tr>
\t\t<td><img src=\"";
                // line 4
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "smallphoto");
                echo "\" alt=\"\"></td>
\t\t<td><a href=\"";
                // line 5
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_product_, "seo")));
                echo "\">";
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "name");
                echo "</a></td>
\t\t<td>
\t\t";
                // line 7
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                if ((!(null === $this->getAttribute($_product_, "pricebeforepromotiongross")))) {
                    // line 8
                    echo "\t\t\t<span class=\"red\">";
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "newprice"));
                    echo "</span>
\t\t\t<span class=\"old\">";
                    // line 9
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "pricebeforepromotiongross"));
                    echo "</span>
\t\t";
                } else {
                    // line 11
                    echo "\t\t\t";
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "newprice"));
                    echo "
\t\t";
                }
                // line 13
                echo "\t\t</td>
\t\t<td>";
                // line 14
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "qty");
                echo "</td>
\t\t<td>";
                // line 15
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "qtyprice"));
                echo "</td>
\t</tr>
\t";
            }
            // line 18
            echo "\t
\t";
            // line 19
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_product_, "attributes"));
            foreach ($context['_seq'] as $context["_key"] => $context["attribprod"]) {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                if (($this->getAttribute($_product_, "attributes") != null)) {
                    // line 20
                    echo "\t<tr>
\t\t<td><img src=\"";
                    // line 21
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "smallphoto");
                    echo "\" alt=\"\"></td>
\t\t<td><a href=\"";
                    // line 22
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_attribprod_, "seo")));
                    echo "\">";
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "name");
                    echo "</a>
\t\t";
                    // line 23
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_attribprod_, "features"));
                    foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                        // line 24
                        echo "\t\t\t<br />";
                        if (isset($context["feature"])) { $_feature_ = $context["feature"]; } else { $_feature_ = null; }
                        echo $this->getAttribute($_feature_, "group");
                        echo ": ";
                        if (isset($context["feature"])) { $_feature_ = $context["feature"]; } else { $_feature_ = null; }
                        echo $this->getAttribute($_feature_, "attributename");
                        echo "
\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 26
                    echo "\t\t</td>
\t\t<td>
\t\t";
                    // line 28
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    if ((!(null === $this->getAttribute($_attribprod_, "pricebeforepromotiongross")))) {
                        // line 29
                        echo "\t\t\t<span class=\"red\">";
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_attribprod_, "newprice"));
                        echo "</span>
\t\t\t<span class=\"old\">";
                        // line 30
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_attribprod_, "pricebeforepromotiongross"));
                        echo "</span>
\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t";
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_attribprod_, "newprice"));
                        echo "
\t\t";
                    }
                    // line 34
                    echo "\t\t</td>
\t\t<td>";
                    // line 35
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "qty");
                    echo "</td>
\t\t<td>";
                    // line 36
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_attribprod_, "qtyprice"));
                    echo "</td>
\t</tr>
\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribprod'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "\t";
    }

    public function getTemplateName()
    {
        return "finalizationbox/index/products.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 39,  158 => 36,  153 => 35,  143 => 32,  137 => 30,  131 => 29,  128 => 28,  124 => 26,  111 => 24,  106 => 23,  98 => 22,  93 => 21,  90 => 20,  83 => 19,  80 => 18,  68 => 14,  58 => 11,  46 => 8,  43 => 7,  34 => 5,  29 => 4,  26 => 3,  22 => 2,  17 => 1,  488 => 194,  477 => 189,  473 => 188,  463 => 182,  457 => 181,  448 => 177,  438 => 172,  430 => 169,  420 => 164,  412 => 161,  404 => 158,  394 => 153,  384 => 148,  376 => 145,  368 => 141,  354 => 140,  346 => 135,  335 => 130,  331 => 129,  321 => 123,  315 => 122,  306 => 118,  296 => 113,  288 => 110,  278 => 105,  270 => 102,  262 => 99,  252 => 94,  244 => 91,  236 => 89,  228 => 86,  220 => 83,  211 => 79,  204 => 76,  190 => 75,  182 => 70,  170 => 64,  166 => 63,  156 => 57,  150 => 34,  141 => 52,  133 => 49,  125 => 46,  117 => 42,  103 => 41,  95 => 36,  84 => 28,  79 => 25,  76 => 24,  73 => 15,  70 => 22,  67 => 21,  65 => 13,  61 => 18,  59 => 17,  52 => 9,  48 => 12,  44 => 11,  40 => 10,  31 => 3,  28 => 2,  23 => 1,);
    }
}
