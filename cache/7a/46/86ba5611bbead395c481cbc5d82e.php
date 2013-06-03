<?php

/* cartbox/index/combinations.tpl */
class __TwigTemplate_7a4686ba5611bbead395c481cbc5d82e extends Twig_Template
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
        if (isset($context["productCartCombinations"])) { $_productCartCombinations_ = $context["productCartCombinations"]; } else { $_productCartCombinations_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_productCartCombinations_);
        foreach ($context['_seq'] as $context["_key"] => $context["combination"]) {
            // line 2
            echo "\t";
            if (isset($context["productCart"])) { $_productCart_ = $context["productCart"]; } else { $_productCart_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_productCart_);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                if (($this->getAttribute($_product_, "combinationid") == $this->getAttribute($_combination_, "id"))) {
                    // line 3
                    echo "\t\t";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ($this->getAttribute($_loop_, "first")) {
                        // line 4
                        echo "\t\t\t";
                        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                        if (($this->getAttribute($_product_, "standard") == 1)) {
                            // line 5
                            echo "\t\t\t<tr>
\t\t\t\t<td><img src=\"";
                            // line 6
                            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                            echo $this->getAttribute($_product_, "smallphoto");
                            echo "\" alt=\"\"></td>
\t\t\t\t<td><a href=\"";
                            // line 7
                            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_product_, "seo")));
                            echo "\">";
                            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                            echo $this->getAttribute($_product_, "qty");
                            echo " x ";
                            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                            echo $this->getAttribute($_product_, "name");
                            echo "</a></td>
\t\t\t\t<td rowspan=\"";
                            // line 8
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo twig_length_filter($this->env, $this->getAttribute($_combination_, "products"));
                            echo "\">
\t\t\t\t\t<span class=\"red\">";
                            // line 9
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo Gekosale\Template::priceFormat(($this->getAttribute($this->getAttribute($_combination_, "summary"), "totalDiscountPriceGross") / $this->getAttribute($_combination_, "currentqty")));
                            echo "</span>
\t\t\t\t\t<span class=\"old\">";
                            // line 10
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo Gekosale\Template::priceFormat(($this->getAttribute($this->getAttribute($_combination_, "summary"), "totalStandardPriceGross") / $this->getAttribute($_combination_, "currentqty")));
                            echo "</span>
\t\t\t\t</td>
\t\t\t\t<td rowspan=\"";
                            // line 12
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo twig_length_filter($this->env, $this->getAttribute($_combination_, "products"));
                            echo "\"><input type=\"text\" class=\"product-quantity spinnerhide\" data-value=\"";
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo $this->getAttribute($_combination_, "currentqty");
                            echo "\" data-packagesize=\"1\" value=\"";
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo $this->getAttribute($_combination_, "currentqty");
                            echo "\" onchange=\"\$(this).spinner('disable');doChangeAJAXCombinationQty(";
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo $this->getAttribute($_combination_, "id");
                            echo ",this.value);\" /></td>
\t\t\t\t<td rowspan=\"";
                            // line 13
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo twig_length_filter($this->env, $this->getAttribute($_combination_, "products"));
                            echo "\">
\t\t\t\t\t<span class=\"red\">";
                            // line 14
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo Gekosale\Template::priceFormat($this->getAttribute($this->getAttribute($_combination_, "summary"), "totalDiscountPriceGross"));
                            echo "</span>
\t\t\t\t\t<span class=\"old\">";
                            // line 15
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo Gekosale\Template::priceFormat($this->getAttribute($this->getAttribute($_combination_, "summary"), "totalStandardPriceGross"));
                            echo "</span>
\t\t\t\t</td>
\t\t\t\t<td rowspan=\"";
                            // line 17
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo twig_length_filter($this->env, $this->getAttribute($_combination_, "products"));
                            echo "\"><a class=\"btn btn-mini\" href=\"#\" onclick=\"xajax_deleteCombinationFromCart(";
                            if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                            echo $this->getAttribute($_combination_, "id");
                            echo "); return false;\"><i class=\"icon-remove\"></i></a></td>
\t\t\t</tr>
\t\t\t";
                        }
                        // line 20
                        echo "\t\t\t
\t\t\t";
                        // line 21
                        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_product_, "attributes"));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribprod"]) {
                            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                            if (($this->getAttribute($_product_, "attributes") != null)) {
                                // line 22
                                echo "\t\t\t<tr>
\t\t\t\t<td><img src=\"";
                                // line 23
                                if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                                echo $this->getAttribute($_attribprod_, "smallphoto");
                                echo "\" alt=\"\"></td>
\t\t\t\t<td><a href=\"";
                                // line 24
                                if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                                echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_attribprod_, "seo")));
                                echo "\">";
                                if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                                echo $this->getAttribute($_attribprod_, "qty");
                                echo " x ";
                                if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                                echo $this->getAttribute($_attribprod_, "name");
                                echo "</a>
\t\t\t\t";
                                // line 25
                                if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_attribprod_, "features"));
                                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                                    // line 26
                                    echo "\t\t\t\t\t<br />";
                                    if (isset($context["feature"])) { $_feature_ = $context["feature"]; } else { $_feature_ = null; }
                                    echo $this->getAttribute($_feature_, "group");
                                    echo ": ";
                                    if (isset($context["feature"])) { $_feature_ = $context["feature"]; } else { $_feature_ = null; }
                                    echo $this->getAttribute($_feature_, "attributename");
                                    echo "
\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                                // line 28
                                echo "\t\t\t\t</td>
\t\t\t\t<td rowspan=\"";
                                // line 29
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo twig_length_filter($this->env, $this->getAttribute($_combination_, "products"));
                                echo "\">
\t\t\t\t\t<span class=\"red\">";
                                // line 30
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo Gekosale\Template::priceFormat(($this->getAttribute($this->getAttribute($_combination_, "summary"), "totalDiscountPriceGross") / $this->getAttribute($_combination_, "currentqty")));
                                echo "</span>
\t\t\t\t\t<span class=\"old\">";
                                // line 31
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo Gekosale\Template::priceFormat(($this->getAttribute($this->getAttribute($_combination_, "summary"), "totalStandardPriceGross") / $this->getAttribute($_combination_, "currentqty")));
                                echo "</span>
\t\t\t\t</td>
\t\t\t\t<td rowspan=\"";
                                // line 33
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo twig_length_filter($this->env, $this->getAttribute($_combination_, "products"));
                                echo "\"><input type=\"text\" class=\"product-quantity spinnerhide\" data-value=\"";
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo $this->getAttribute($_combination_, "currentqty");
                                echo "\" data-packagesize=\"1\" value=\"";
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo $this->getAttribute($_combination_, "currentqty");
                                echo "\" onchange=\"\$(this).spinner('disable');xajax_changeCombinationQuantity(";
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo $this->getAttribute($_combination_, "id");
                                echo ",this.value);\" /></td>
\t\t\t\t<td rowspan=\"";
                                // line 34
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo twig_length_filter($this->env, $this->getAttribute($_combination_, "products"));
                                echo "\">
\t\t\t\t\t<span class=\"red\">";
                                // line 35
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo Gekosale\Template::priceFormat($this->getAttribute($this->getAttribute($_combination_, "summary"), "totalDiscountPriceGross"));
                                echo "</span>
\t\t\t\t\t<span class=\"old\">";
                                // line 36
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo Gekosale\Template::priceFormat($this->getAttribute($this->getAttribute($_combination_, "summary"), "totalStandardPriceGross"));
                                echo "</span>
\t\t\t\t</td>
\t\t\t\t<td rowspan=\"";
                                // line 38
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo twig_length_filter($this->env, $this->getAttribute($_combination_, "products"));
                                echo "\"><a class=\"btn btn-mini\" href=\"#\" onclick=\"xajax_deleteCombinationFromCart(";
                                if (isset($context["combination"])) { $_combination_ = $context["combination"]; } else { $_combination_ = null; }
                                echo $this->getAttribute($_combination_, "id");
                                echo "); return false;\"><i class=\"icon-remove\"></i></a></td>
\t\t\t</tr>
\t\t\t";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribprod'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 41
                        echo "\t\t";
                    } else {
                        // line 42
                        echo "\t\t\t";
                        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                        if (($this->getAttribute($_product_, "standard") == 1)) {
                            // line 43
                            echo "\t\t\t<tr>
\t\t\t\t<td><img src=\"";
                            // line 44
                            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                            echo $this->getAttribute($_product_, "smallphoto");
                            echo "\" alt=\"\"></td>
\t\t\t\t<td><a href=\"";
                            // line 45
                            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                            echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_product_, "seo")));
                            echo "\">";
                            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                            echo $this->getAttribute($_product_, "qty");
                            echo " x ";
                            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                            echo $this->getAttribute($_product_, "name");
                            echo "</a></td>
\t\t\t</tr>
\t\t\t";
                        }
                        // line 48
                        echo "\t\t\t
\t\t\t";
                        // line 49
                        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_product_, "attributes"));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribprod"]) {
                            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                            if (($this->getAttribute($_product_, "attributes") != null)) {
                                // line 50
                                echo "\t\t\t<tr>
\t\t\t\t<td><img src=\"";
                                // line 51
                                if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                                echo $this->getAttribute($_attribprod_, "smallphoto");
                                echo "\" alt=\"\"></td>
\t\t\t\t<td><a href=\"";
                                // line 52
                                if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                                echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_attribprod_, "seo")));
                                echo "\">";
                                if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                                echo $this->getAttribute($_attribprod_, "qty");
                                echo " x ";
                                if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                                echo $this->getAttribute($_attribprod_, "name");
                                echo "</a>
\t\t\t\t";
                                // line 53
                                if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_attribprod_, "features"));
                                foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                                    // line 54
                                    echo "\t\t\t\t\t<br />";
                                    if (isset($context["feature"])) { $_feature_ = $context["feature"]; } else { $_feature_ = null; }
                                    echo $this->getAttribute($_feature_, "group");
                                    echo ": ";
                                    if (isset($context["feature"])) { $_feature_ = $context["feature"]; } else { $_feature_ = null; }
                                    echo $this->getAttribute($_feature_, "attributename");
                                    echo "
\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                                // line 56
                                echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribprod'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 59
                        echo "\t\t";
                    }
                    // line 60
                    echo "\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['combination'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 61
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "cartbox/index/combinations.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 61,  317 => 60,  314 => 59,  305 => 56,  292 => 54,  287 => 53,  276 => 52,  271 => 51,  268 => 50,  261 => 49,  258 => 48,  245 => 45,  240 => 44,  237 => 43,  233 => 42,  230 => 41,  216 => 38,  210 => 36,  205 => 35,  200 => 34,  186 => 33,  180 => 31,  175 => 30,  170 => 29,  167 => 28,  149 => 25,  138 => 24,  133 => 23,  130 => 22,  123 => 21,  120 => 20,  110 => 17,  104 => 15,  99 => 14,  94 => 13,  80 => 12,  74 => 10,  64 => 8,  48 => 6,  217 => 45,  198 => 42,  193 => 41,  176 => 40,  173 => 39,  166 => 37,  160 => 35,  154 => 26,  151 => 33,  147 => 31,  134 => 29,  129 => 28,  121 => 27,  116 => 26,  113 => 25,  106 => 24,  103 => 23,  96 => 20,  91 => 19,  59 => 11,  50 => 9,  36 => 6,  33 => 5,  84 => 32,  73 => 27,  65 => 13,  60 => 20,  57 => 19,  54 => 18,  51 => 17,  49 => 16,  45 => 5,  43 => 13,  31 => 7,  27 => 6,  23 => 5,  90 => 33,  81 => 31,  68 => 24,  63 => 10,  41 => 4,  35 => 8,  22 => 2,  19 => 2,  17 => 1,  89 => 27,  85 => 26,  78 => 13,  76 => 17,  72 => 15,  69 => 9,  67 => 17,  61 => 15,  53 => 7,  47 => 9,  44 => 10,  40 => 8,  37 => 3,  32 => 5,  29 => 4,  26 => 2,);
    }
}
