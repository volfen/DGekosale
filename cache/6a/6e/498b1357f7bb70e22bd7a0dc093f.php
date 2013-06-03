<?php

/* cartbox/index/products.tpl */
class __TwigTemplate_6a6e498b1357f7bb70e22bd7a0dc093f extends Twig_Template
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
\t\t<td>
\t\t\t<input type=\"text\" class=\"product-quantity spinnerhide\" data-value=\"";
                // line 15
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "qty");
                echo "\" data-packagesize=\"";
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "packagesize");
                echo "\" value=\"";
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "qty");
                echo "\" onchange=\"\$(this).spinner('disable');xajax_changeQuantity(";
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "idproduct");
                echo ",null,this.value);\" />
\t\t</td>
\t\t<td>";
                // line 17
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "qtyprice"));
                echo "</td>
\t\t<td><a class=\"btn btn-mini\" href=\"#\" onclick=\"xajax_deleteProductFromCart(";
                // line 18
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "idproduct");
                echo ", null); return false;\"><i class=\"icon-remove\"></i></a></td>
\t</tr>
\t";
            }
            // line 21
            echo "\t
\t";
            // line 22
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_product_, "attributes"));
            foreach ($context['_seq'] as $context["_key"] => $context["attribprod"]) {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                if (($this->getAttribute($_product_, "attributes") != null)) {
                    // line 23
                    echo "\t<tr>
\t\t<td><img src=\"";
                    // line 24
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "smallphoto");
                    echo "\" alt=\"\"></td>
\t\t<td><a href=\"";
                    // line 25
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo Gekosale\Template::getPathFromRoute("frontend.productcart", array("param" => $this->getAttribute($_attribprod_, "seo")));
                    echo "\">";
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "name");
                    echo "</a>
\t\t";
                    // line 26
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_attribprod_, "features"));
                    foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                        // line 27
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
                    // line 29
                    echo "\t\t</td>
\t\t<td>
\t\t";
                    // line 31
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    if ((!(null === $this->getAttribute($_attribprod_, "pricebeforepromotiongross")))) {
                        // line 32
                        echo "\t\t\t<span class=\"red\">";
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_attribprod_, "newprice"));
                        echo "</span>
\t\t\t<span class=\"old\">";
                        // line 33
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_attribprod_, "pricebeforepromotiongross"));
                        echo "</span>
\t\t";
                    } else {
                        // line 35
                        echo "\t\t\t";
                        if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                        echo Gekosale\Template::priceFormat($this->getAttribute($_attribprod_, "newprice"));
                        echo "
\t\t";
                    }
                    // line 37
                    echo "\t\t</td>
\t\t<td><input type=\"text\" class=\"product-quantity spinnerhide\" data-value=\"";
                    // line 38
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "qty");
                    echo "\" data-packagesize=\"";
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "packagesize");
                    echo "\" value=\"";
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "qty");
                    echo "\" onchange=\"\$(this).spinner('disable');xajax_changeQuantity(";
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "idproduct");
                    echo ",";
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "attr");
                    echo ",this.value);\" /></td>
\t\t<td>";
                    // line 39
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo Gekosale\Template::priceFormat($this->getAttribute($_attribprod_, "qtyprice"));
                    echo "</td>
\t\t<td><a class=\"btn btn-mini\" href=\"#\" onclick=\"xajax_deleteProductFromCart(";
                    // line 40
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "idproduct");
                    echo ", ";
                    if (isset($context["attribprod"])) { $_attribprod_ = $context["attribprod"]; } else { $_attribprod_ = null; }
                    echo $this->getAttribute($_attribprod_, "attr");
                    echo "); return false;\"><i class=\"icon-remove\"></i></a></td>
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
        // line 43
        echo "\t

<script type=\"text/javascript\">
function restoreQty(){
\t\$('.product-quantity').each(function(){
\t\t\$(this).val(\$(this).attr('data-value'));
\t});
}
</script>";
    }

    public function getTemplateName()
    {
        return "cartbox/index/products.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 37,  159 => 35,  153 => 33,  147 => 32,  144 => 31,  140 => 29,  127 => 27,  122 => 26,  114 => 25,  109 => 24,  106 => 23,  96 => 21,  84 => 17,  58 => 11,  46 => 8,  34 => 5,  87 => 32,  70 => 26,  65 => 13,  62 => 22,  54 => 18,  51 => 17,  49 => 16,  45 => 14,  31 => 7,  23 => 5,  90 => 17,  81 => 31,  68 => 11,  63 => 10,  41 => 7,  35 => 8,  19 => 2,  33 => 2,  27 => 6,  18 => 1,  85 => 26,  78 => 30,  76 => 20,  69 => 15,  67 => 17,  53 => 12,  47 => 9,  44 => 10,  40 => 8,  37 => 7,  32 => 5,  29 => 4,  26 => 3,  173 => 37,  167 => 36,  163 => 34,  157 => 33,  154 => 32,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 21,  89 => 18,  79 => 17,  72 => 19,  64 => 15,  61 => 15,  57 => 19,  52 => 9,  43 => 7,  36 => 6,  28 => 5,  22 => 2,  17 => 1,);
    }
}
