<?php

/* default/templates/email/orderClient.tpl */
class __TwigTemplate_c60763ba1fa92c43b6bf623c75dead13 extends Twig_Template
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
        echo "<h1 style=\"margin-top:0; font-size:18px; color:#231f20; border-bottom:1px solid #e3e3e3; padding-bottom:6px; text-transform:uppercase;\">";
        echo Gekosale\Translation::get("TXT_ACCEPT_AN_ORDER");
        echo "</h1>
<p>Witamy serdecznie,<br/>

Bardzo dziękujemy za dokonanie zakupu w sklepie <a target=\"_blank\" href=\"";
        // line 4
        echo Gekosale\Template::getPathFromRoute("frontend.home");
        echo "\" title=\"";
        if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
        echo $_SHOP_NAME_;
        echo "\" style=\"color:#f15a25; text-decoration:none;\">";
        if (isset($context["SHOP_NAME"])) { $_SHOP_NAME_ = $context["SHOP_NAME"]; } else { $_SHOP_NAME_ = null; }
        echo $_SHOP_NAME_;
        echo "</a>.</p>
<p>W dniu ";
        // line 5
        echo twig_date_format_filter($this->env, "now", "d/m/Y");
        echo " otrzymaliśmy nowe zamówienie nr <strong style=\"color:#231f20;\">";
        if (isset($context["orderId"])) { $_orderId_ = $context["orderId"]; } else { $_orderId_ = null; }
        echo $_orderId_;
        echo "</strong></p>

<p style=\"margin-top:20px;\"><strong style=\"color:#231f20;\">Oto szczegóły zamówienia:</strong></p>

<table width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
\t<thead>
\t\t<tr style=\"color:#787372; background:#ebebeb; font-size:11px; line-height:26px; text-align:left;\">
\t\t\t<th style=\"border-bottom:1px solid #e1e1e1; border-right:1px solid #fff; padding-left:10px; font-weight:normal;\">";
        // line 12
        echo Gekosale\Translation::get("TXT_PRODUCT_NAME");
        echo "</th>
\t\t\t<th style=\"border-bottom:1px solid #e1e1e1; border-right:1px solid #fff; padding-left:10px; font-weight:normal;\">";
        // line 13
        echo Gekosale\Translation::get("TXT_EAN");
        echo "</th>
\t\t\t<th style=\"border-bottom:1px solid #e1e1e1; border-right:1px solid #fff; padding-left:10px; font-weight:normal; width:60px\">";
        // line 14
        echo Gekosale\Translation::get("TXT_PRODUCT_PRICE");
        echo "</th>
\t\t\t<th style=\"border-bottom:1px solid #e1e1e1; border-right:1px solid #fff; padding-left:10px; font-weight:normal;\">";
        // line 15
        echo Gekosale\Translation::get("TXT_QUANTITY");
        echo "</th>
\t\t\t<th style=\"border-bottom:1px solid #e1e1e1; border-right:1px solid #fff; padding-left:10px; font-weight:normal; width:85px\">";
        // line 16
        echo Gekosale\Translation::get("TXT_VALUE");
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody style=\"color:#231f20;\">
\t";
        // line 20
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_order_, "cart"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo " 
\t\t";
            // line 21
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            if ($this->getAttribute($_product_, "standard", array(), "any", true, true)) {
                // line 22
                echo "\t\t<tr style=\"font-size:11px; line-height:26px; text-align:left;\">
\t\t\t<td>";
                // line 23
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "name");
                echo "</td>
\t\t\t<td>";
                // line 24
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "ean");
                echo "</td>
\t\t\t<td>";
                // line 25
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "newprice"));
                echo "</td>
\t\t\t<td>";
                // line 26
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo $this->getAttribute($_product_, "qty");
                echo " ";
                echo Gekosale\Translation::get("TXT_QTY");
                echo "</td>
\t\t\t<td>";
                // line 27
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_product_, "qtyprice"));
                echo "</td>
\t\t</tr>
\t\t";
            }
            // line 30
            echo "\t\t";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_product_, "attributes"));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 31
                echo "\t\t<tr style=\"font-size:11px; line-height:26px; text-align:left;\">
\t\t\t<td>";
                // line 32
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                echo $this->getAttribute($_attributes_, "name");
                echo "<br />
\t\t\t";
                // line 33
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_attributes_, "features"));
                foreach ($context['_seq'] as $context["_key"] => $context["features"]) {
                    echo " <small>
\t\t\t";
                    // line 34
                    if (isset($context["features"])) { $_features_ = $context["features"]; } else { $_features_ = null; }
                    echo $this->getAttribute($_features_, "group");
                    echo ": ";
                    if (isset($context["features"])) { $_features_ = $context["features"]; } else { $_features_ = null; }
                    echo $this->getAttribute($_features_, "attributename");
                    echo "&nbsp;&nbsp;</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['features'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "</td>
\t\t\t<td>";
                // line 35
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                echo $this->getAttribute($_attributes_, "ean");
                echo "</td>
\t\t\t<td>";
                // line 36
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_attributes_, "newprice"));
                echo "</td>
\t\t\t<td>";
                // line 37
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                echo $this->getAttribute($_attributes_, "qty");
                echo " ";
                echo Gekosale\Translation::get("TXT_QTY");
                echo "</td>
\t\t\t<td>";
                // line 38
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                echo Gekosale\Template::priceFormat($this->getAttribute($_attributes_, "qtyprice"));
                echo "</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo " 
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "\t</tbody>
\t<tfoot style=\"color:#231f20;\">
\t\t<tr style=\"background:#e2e2e2; line-height:30px;\">
\t\t\t<td colspan=\"4\" style=\"background:#e2e2e2; color:#231f20; font-weight:bold; font-size:11px; padding-right:10px; text-align:right;\">";
        // line 45
        echo Gekosale\Translation::get("TXT_SUM");
        echo "</td>
\t\t\t<td style=\"background:#e2e2e2; color:#231f20; font-weight:bold; font-size:11px; padding-left:10px;\">";
        // line 46
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo Gekosale\Template::priceFormat($this->getAttribute($_order_, "globalPrice"));
        echo "</td>
\t\t</tr>
\t\t<tr style=\"line-height:30px;\">
\t\t\t<td colspan=\"4\" style=\"background:#e2e2e2; color:#231f20; font-weight:bold; font-size:11px; padding-right:10px; text-align:right;\">";
        // line 49
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "dispatchmethod"), "dispatchmethodname");
        echo "</td>
\t\t\t<td style=\"background:#e2e2e2; color:#231f20; font-weight:bold; font-size:11px; padding-left:10px;\">";
        // line 50
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo Gekosale\Template::priceFormat($this->getAttribute($this->getAttribute($_order_, "dispatchmethod"), "dispatchmethodcost"));
        echo "</td>
\t\t</tr>
\t\t";
        // line 52
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if ($this->getAttribute($_order_, "rulescart", array(), "any", true, true)) {
            // line 53
            echo "\t\t<tr style=\"line-height:30px;\">
\t\t\t<td colspan=\"4\" style=\"background:#e2e2e2; color:#231f20; font-weight:bold; font-size:11px; padding-right:10px; text-align:right;\">";
            // line 54
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $this->getAttribute($_order_, "rulescart");
            echo "</td>
\t\t\t<td style=\"background:#e2e2e2; color:#231f20; font-weight:bold; font-size:11px; padding-left:10px;\">";
            // line 55
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $this->getAttribute($_order_, "rulescartmessage");
            echo "</td>
\t\t</tr>
\t\t<tr style=\"line-height:30px;\">
\t\t\t<td colspan=\"4\" style=\"background:#e2e2e2; color:#231f20; font-weight:bold; font-size:11px; padding-right:10px; text-align:right;\">";
            // line 58
            echo Gekosale\Translation::get("TXT_VIEW_ORDER_TOTAL");
            echo "</td>
\t\t\t<td style=\"background:#e2e2e2; color:#231f20; font-weight:bold; font-size:11px; padding-left:10px;\">";
            // line 59
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo Gekosale\Template::priceFormat($this->getAttribute($_order_, "priceWithDispatchMethodPromo"));
            echo "</td>
\t\t</tr>
\t\t";
        } else {
            // line 62
            echo "\t\t<tr style=\"line-height:30px;\">
\t\t\t<td colspan=\"4\" style=\"background:#e2e2e2; color:#231f20; font-weight:bold; font-size:11px; padding-right:10px; text-align:right;\">";
            // line 63
            echo Gekosale\Translation::get("TXT_VIEW_ORDER_TOTAL");
            echo "</td>
\t\t\t<td style=\"background:#e2e2e2; color:#231f20; font-weight:bold; font-size:11px; padding-left:10px;\">";
            // line 64
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo Gekosale\Template::priceFormat($this->getAttribute($_order_, "priceWithDispatchMethod"));
            echo "</td>
\t\t</tr>
\t\t";
        }
        // line 67
        echo "\t</tfoot>
</table>

<h2 style=\"font-size:14px; color:#231f20; border-bottom:1px solid #e3e3e3; padding-bottom:4px; margin-top:30px; text-transform:uppercase;\">";
        // line 70
        echo Gekosale\Translation::get("TXT_METHOD_OF_PEYMENT");
        echo "</h2>
<p>";
        // line 71
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "payment"), "paymentmethodname");
        echo "<p>

<h2 style=\"font-size:14px; color:#231f20; border-bottom:1px solid #e3e3e3; padding-bottom:4px; margin-top:30px; text-transform:uppercase;\">Dostawa</h2>
<p>";
        // line 74
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "dispatchmethod"), "dispatchmethodname");
        echo "</p>

<h2 style=\"font-size:14px; color:#231f20; border-bottom:1px solid #e3e3e3; padding-bottom:4px; margin-top:30px; text-transform:uppercase;\">";
        // line 76
        echo Gekosale\Translation::get("TXT_CLIENT");
        echo ":</h2>
<p>
";
        // line 78
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if (($this->getAttribute($this->getAttribute($_order_, "clientaddress"), "companyname") != "")) {
            // line 79
            echo "<br>";
            echo Gekosale\Translation::get("TXT_COMPANYNAME");
            echo " : ";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $this->getAttribute($this->getAttribute($_order_, "clientaddress"), "companyname");
            echo "
";
        }
        // line 80
        echo " 
";
        // line 81
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if (($this->getAttribute($this->getAttribute($_order_, "clientaddress"), "nip") != "")) {
            // line 82
            echo "<br>";
            echo Gekosale\Translation::get("TXT_NIP");
            echo ": ";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $this->getAttribute($this->getAttribute($_order_, "clientaddress"), "nip");
            echo "
";
        }
        // line 83
        echo " 
";
        // line 84
        echo Gekosale\Translation::get("TXT_FIRSTNAME");
        echo ":\t";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "clientaddress"), "firstname");
        echo " 
<br>";
        // line 85
        echo Gekosale\Translation::get("TXT_SURNAME");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "clientaddress"), "surname");
        echo " 
<br>";
        // line 86
        echo Gekosale\Translation::get("TXT_PLACENAME");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "clientaddress"), "placename");
        echo "
<br>";
        // line 87
        echo Gekosale\Translation::get("TXT_POSTCODE");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "clientaddress"), "postcode");
        echo "
<br>";
        // line 88
        echo Gekosale\Translation::get("TXT_STREET");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "clientaddress"), "street");
        echo " 
<br>";
        // line 89
        echo Gekosale\Translation::get("TXT_STREETNO");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "clientaddress"), "streetno");
        echo "
<br>";
        // line 90
        echo Gekosale\Translation::get("TXT_PLACENO");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "clientaddress"), "placeno");
        echo "
<br>
</p>

<h2 style=\"font-size:14px; color:#231f20; border-bottom:1px solid #e3e3e3; padding-bottom:4px; margin-top:30px; text-transform:uppercase;\">";
        // line 94
        echo Gekosale\Translation::get("TXT_DELIVERER_ADDRESS");
        echo ":</h2>
<p>
<br>";
        // line 96
        echo Gekosale\Translation::get("TXT_FIRSTNAME");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "deliveryAddress"), "firstname");
        echo " 
<br>";
        // line 97
        echo Gekosale\Translation::get("TXT_SURNAME");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "deliveryAddress"), "surname");
        echo " 
<br>";
        // line 98
        echo Gekosale\Translation::get("TXT_PLACENAME");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "deliveryAddress"), "placename");
        echo "
<br>";
        // line 99
        echo Gekosale\Translation::get("TXT_POSTCODE");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "deliveryAddress"), "postcode");
        echo "
<br>";
        // line 100
        echo Gekosale\Translation::get("TXT_STREET");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "deliveryAddress"), "street");
        echo " 
<br>";
        // line 101
        echo Gekosale\Translation::get("TXT_STREETNO");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "deliveryAddress"), "streetno");
        echo "
<br>";
        // line 102
        echo Gekosale\Translation::get("TXT_PLACENO");
        echo ": ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($this->getAttribute($_order_, "deliveryAddress"), "placeno");
        echo "
</p>

";
        // line 105
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if (($this->getAttribute($_order_, "customeropinion") != "")) {
            // line 106
            echo "<h2 style=\"font-size:14px; color:#231f20; border-bottom:1px solid #e3e3e3; padding-bottom:4px; margin-top:30px; text-transform:uppercase;\">";
            echo Gekosale\Translation::get("TXT_PRODUCT_REVIEW");
            echo ":</h2>
<p>";
            // line 107
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $this->getAttribute($_order_, "customeropinion");
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "default/templates/email/orderClient.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 107,  418 => 106,  415 => 105,  406 => 102,  399 => 101,  392 => 100,  385 => 99,  378 => 98,  371 => 97,  364 => 96,  359 => 94,  349 => 90,  342 => 89,  335 => 88,  328 => 87,  321 => 86,  314 => 85,  307 => 84,  304 => 83,  295 => 82,  292 => 81,  289 => 80,  280 => 79,  277 => 78,  272 => 76,  266 => 74,  259 => 71,  255 => 70,  250 => 67,  243 => 64,  239 => 63,  236 => 62,  229 => 59,  225 => 58,  218 => 55,  213 => 54,  210 => 53,  207 => 52,  201 => 50,  196 => 49,  189 => 46,  185 => 45,  180 => 42,  173 => 40,  163 => 38,  156 => 37,  151 => 36,  146 => 35,  133 => 34,  126 => 33,  121 => 32,  118 => 31,  112 => 30,  105 => 27,  98 => 26,  93 => 25,  88 => 24,  83 => 23,  80 => 22,  77 => 21,  70 => 20,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  34 => 5,  24 => 4,  33 => 15,  17 => 1,);
    }
}
