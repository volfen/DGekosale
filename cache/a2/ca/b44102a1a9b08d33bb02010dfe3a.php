<?php

/* product_modal.tpl */
class __TwigTemplate_a2cab44102a1a9b08d33bb02010dfe3a extends Twig_Template
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
        echo "<button class=\"close\" data-dismiss=\"modal\">&times;</button>
<div class=\"modal-body\">
\t<input type=\"hidden\" id=\"attributevariants\" value=\"0\" />
\t<input type=\"hidden\" id=\"availablestock\" value=\"";
        // line 4
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "stock");
        echo "\" />
\t<input type=\"hidden\" id=\"variantprice\" value=\"";
        // line 5
        if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
        if (($_showtax_ == 0)) {
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "pricenetto"));
        } else {
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "price"));
        }
        echo "\" />\t
\t<h1>";
        // line 6
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "productname");
        echo "</h1>
\t<div class=\"image-large \">
\t\t<img src=\"";
        // line 8
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($this->getAttribute($_product_, "mainphoto"), "normal");
        echo "\" alt=\"";
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "productname");
        echo "\">
\t</div>
\t<div id=\"addToCart\" class=\"well well-small\">
\t\t";
        // line 11
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if ((($this->getAttribute($_product_, "discountprice") != null) && ($this->getAttribute($_product_, "discountprice") != $this->getAttribute($_product_, "price")))) {
            // line 12
            echo "        <span class=\"price price-large\" id=\"changeprice\">";
            if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
            if (($_showtax_ == 0)) {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "discountpricenetto"));
            } else {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "discountprice"));
            }
            echo "</span>
        <span class=\"price price-small\" id=\"changeprice-old\">";
            // line 13
            if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
            if (($_showtax_ == 0)) {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "pricenetto"));
            } else {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "price"));
            }
            echo "</span>
\t\t";
        } else {
            // line 15
            echo "\t\t<span class=\"price price-large\" id=\"changeprice\">";
            if (isset($context["showtax"])) { $_showtax_ = $context["showtax"]; } else { $_showtax_ = null; }
            if (($_showtax_ == 0)) {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "pricenetto"));
            } else {
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "price"));
            }
            echo "</span>
\t\t";
        }
        // line 17
        echo "\t\t<div class=\"hr\"></div>
\t\t<ul>
\t\t\t";
        // line 19
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "trackstock") == 1)) {
            // line 20
            echo "            <li><span>";
            echo Gekosale\Translation::get("TXT_PRODUCT_IS_AVAILABLE");
            echo " <strong class=\"green available\">";
            echo Gekosale\Translation::get("TXT_AVAILABLE");
            echo "</strong><strong class=\"noavailable red\">";
            echo Gekosale\Translation::get("TXT_NOT_AVAILABLE");
            echo "</strong></span></li>
            ";
        } else {
            // line 22
            echo "            <li><span>";
            echo Gekosale\Translation::get("TXT_PRODUCT_IS_AVAILABLE");
            echo " <span class=\"green\"><strong>dostępny</strong></span></span></li>
            ";
        }
        // line 24
        echo "\t\t\t<li><span>";
        echo Gekosale\Translation::get("TXT_DISPATCH");
        echo ": <strong>";
        echo Gekosale\Translation::get("TXT_FROM");
        echo " ";
        if (isset($context["deliverymin"])) { $_deliverymin_ = $context["deliverymin"]; } else { $_deliverymin_ = null; }
        echo Gekosale\Template::priceFormat($_deliverymin_);
        echo "</strong></span></li>
\t\t\t";
        // line 25
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if (($this->getAttribute($_product_, "availablityname") != "")) {
            // line 26
            echo "\t\t\t<li><span>Dostawa w ciągu <strong id=\"availablity\">";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo $this->getAttribute($_product_, "availablityname");
            echo "</strong></span></li>
\t\t\t";
        }
        // line 28
        echo "\t\t</ul>
\t\t<div class=\"hr\"></div>
\t\t\t";
        // line 30
        if (isset($context["attset"])) { $_attset_ = $context["attset"]; } else { $_attset_ = null; }
        if (($_attset_ != null)) {
            // line 31
            echo "\t\t\t";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["_key"] => $context["attributesgroup"]) {
                // line 32
                echo "\t\t\t<label>";
                if (isset($context["attributesgroup"])) { $_attributesgroup_ = $context["attributesgroup"]; } else { $_attributesgroup_ = null; }
                echo $this->getAttribute($_attributesgroup_, "name");
                echo ":</label>
            <select id=\"";
                // line 33
                if (isset($context["grid"])) { $_grid_ = $context["grid"]; } else { $_grid_ = null; }
                echo $_grid_;
                echo "\" name=\"";
                if (isset($context["grid"])) { $_grid_ = $context["grid"]; } else { $_grid_ = null; }
                echo $_grid_;
                echo "\" class=\"attributes span2\">
            ";
                // line 34
                if (isset($context["attributesgroup"])) { $_attributesgroup_ = $context["attributesgroup"]; } else { $_attributesgroup_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_attributesgroup_, "attributes"));
                foreach ($context['_seq'] as $context["v"] => $context["variant"]) {
                    // line 35
                    echo "\t        \t<option value=\"";
                    if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                    echo $_v_;
                    echo "\">";
                    if (isset($context["variant"])) { $_variant_ = $context["variant"]; } else { $_variant_ = null; }
                    echo $_variant_;
                    echo "</option>
\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['v'], $context['variant'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 37
                echo "            </select>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributesgroup'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 39
            echo "\t\t\t<div class=\"hr\"></div>
\t\t\t";
        }
        // line 40
        echo "\t
\t\t\t<div class=\"amount\">
                <div class=\"pull-left mgr5\">";
        // line 42
        echo Gekosale\Translation::get("TXT_QUANTITY");
        echo ":</div>
                <div class=\"pull-left mgr5\"><input type=\"text\" class=\"spinnerhide pull-left\" id=\"product-qty\" data-packagesize=\"";
        // line 43
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "packagesize");
        echo "\" id=\"product-qty\" value=\"";
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "packagesize");
        echo "\"></div>
                <div class=\"pull-left\">";
        // line 44
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "unit");
        echo "</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t\t<button type=\"submit\" onclick=\"\$('#productModal').modal('hide');xajax_addProductToCart(";
        // line 47
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo $this->getAttribute($_product_, "idproduct");
        echo ", \$('#attributevariants').val(), \$('#product-qty').val());return false;\" class=\"btn btn-primary btn-large available marginbt10\" id=\"add-cart\"><i class=\"icon-shopping-cart icon-white\"></i> Do koszyka </button>
\t\t\t<a href=\"";
        // line 48
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo Gekosale\Template::getPathFromRoute("frontend.contact", array("param" => $this->getAttribute($_product_, "idproduct")));
        echo "\" class=\"btn btn-large btn-danger noavailable\"><i class=\"icon-question-sign icon-white\"></i> ";
        echo Gekosale\Translation::get("TXT_REQUEST_QUOTE");
        echo "</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "product_modal.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 48,  216 => 47,  209 => 44,  201 => 43,  197 => 42,  193 => 40,  189 => 39,  182 => 37,  169 => 35,  164 => 34,  156 => 33,  150 => 32,  144 => 31,  141 => 30,  137 => 28,  130 => 26,  127 => 25,  117 => 24,  111 => 22,  101 => 20,  98 => 19,  94 => 17,  81 => 15,  69 => 13,  57 => 12,  54 => 11,  44 => 8,  38 => 6,  27 => 5,  22 => 4,  17 => 1,);
    }
}
