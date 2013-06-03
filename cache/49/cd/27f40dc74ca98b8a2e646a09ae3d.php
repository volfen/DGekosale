<?php

/* cart_preview.tpl */
class __TwigTemplate_49cd27f40dc74ca98b8a2e646a09ae3d extends Twig_Template
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
        if ((twig_length_filter($this->env, $_productCart_) > 0)) {
            echo " 
<a href=\"";
            // line 2
            echo Gekosale\Template::getPathFromRoute("frontend.cart");
            echo "\" class=\"inherit\">
<i class=\"icon icon-chevron-down\"></i>
";
        }
        // line 5
        echo "<p>";
        echo Gekosale\Translation::get("TXT_NUMBEROFITEM");
        echo ": <span>";
        if (isset($context["count"])) { $_count_ = $context["count"]; } else { $_count_ = null; }
        echo $_count_;
        echo "</span></p>
<p>";
        // line 6
        echo Gekosale\Translation::get("TXT_PRODUCT_SUBTOTAL");
        echo ": <span>";
        if (isset($context["globalPrice"])) { $_globalPrice_ = $context["globalPrice"]; } else { $_globalPrice_ = null; }
        echo Gekosale\Template::priceFormat($_globalPrice_);
        echo "</span></p>
";
        // line 7
        if (isset($context["productCart"])) { $_productCart_ = $context["productCart"]; } else { $_productCart_ = null; }
        if ((twig_length_filter($this->env, $_productCart_) > 0)) {
            echo " 
</a>
<div id=\"topBasketContent\" class=\"span4\">
    <table class=\"table\">
    \t<tbody>
    \t";
            // line 12
            if (isset($context["productCart"])) { $_productCart_ = $context["productCart"]; } else { $_productCart_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_productCart_);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 13
                echo "    \t\t";
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                if (($this->getAttribute($_product_, "standard") == 1)) {
                    // line 14
                    echo "        \t<tr>
                <td style=\"width: 120px;\"><a href=\"";
                    // line 15
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_product_, "seo")));
                    echo "\">";
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo $this->getAttribute($_product_, "name");
                    echo "</a></td>
                <td style=\"vertical-align: middle;\">";
                    // line 16
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo $this->getAttribute($_product_, "qty");
                    echo " ";
                    echo Gekosale\Translation::get("TXT_QTY");
                    echo "</td>
                <td><strong>";
                    // line 17
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "qtyprice"));
                    echo "</strong><a href=\"#\" class=\"btn remove\" onclick=\"xajax_deleteProductFromCart(";
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    echo $this->getAttribute($_product_, "idproduct");
                    echo ", null); return false;\"><i class=\"icon-remove\"></i></a></td>
\t\t\t</tr>
\t\t\t";
                }
                // line 20
                echo "\t\t\t";
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                if (($this->getAttribute($_product_, "attributes") != null)) {
                    // line 21
                    echo "\t\t\t\t";
                    if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_product_, "attributes"));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribprod"]) {
                        // line 22
                        echo "\t\t\t\t<tr>
\t                <td style=\"width: 120px;\"><a href=\"";
                        // line 23
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_attribprod_, "seo")));
                        echo "\">";
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo $this->getAttribute($_attribprod_, "name");
                        echo "</a>
\t                ";
                        // line 24
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_attribprod_, "features"));
                        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                            // line 25
                            echo "\t\t\t\t\t\t<br />";
                            if (isset($context["feature"])) { $_feature_ = $context["feature"]; } else { $_feature_ = null; }
                            echo $this->getAttribute($_feature_, "group");
                            echo ": ";
                            if (isset($context["feature"])) { $_feature_ = $context["feature"]; } else { $_feature_ = null; }
                            echo $this->getAttribute($_feature_, "attributename");
                            echo "
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 27
                        echo "\t                </td>
\t                <td style=\"vertical-align: middle;\">";
                        // line 28
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo $this->getAttribute($_attribprod_, "qty");
                        echo " ";
                        echo Gekosale\Translation::get("TXT_QTY");
                        echo "</td>
\t                <td><strong>";
                        // line 29
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_attribprod_, "qtyprice"));
                        echo "</strong><a href=\"#\" class=\"btn remove\" onclick=\"xajax_deleteProductFromCart(";
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo $this->getAttribute($_attribprod_, "idproduct");
                        echo ", ";
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo $this->getAttribute($_attribprod_, "attr");
                        echo "); return false;\"><i class=\"icon-remove\"></i></a></td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribprod'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 32
                    echo "\t\t\t";
                }
                // line 33
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 34
            echo "\t\t</tbody>
\t</table>
\t<a href=\"";
            // line 36
            echo Gekosale\Template::getPathFromRoute("frontend.cart");
            echo "\" class=\"btn-basket pull-left font\">";
            echo Gekosale\Translation::get("TXT_CHECKOUT");
            echo "</a>
\t<h3 class=\"pull-right\"><small>";
            // line 37
            echo Gekosale\Translation::get("TXT_PRODUCT_SUBTOTAL");
            echo ":</small> ";
            if (isset($context["globalPrice"])) { $_globalPrice_ = $context["globalPrice"]; } else { $_globalPrice_ = null; }
            echo Gekosale\Template::priceFormat($_globalPrice_);
            echo "</h3>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "cart_preview.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 37,  167 => 36,  163 => 34,  157 => 33,  154 => 32,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 21,  89 => 20,  79 => 17,  72 => 16,  64 => 15,  61 => 14,  57 => 13,  52 => 12,  43 => 7,  36 => 6,  28 => 5,  22 => 2,  17 => 1,);
    }
}
