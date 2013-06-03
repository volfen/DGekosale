<?php

/* clientorderbox\index\view.tpl */
class __TwigTemplate_39ba7510ad6c8c4a2d0fcfedf4ac5710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layoutbox.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutbox.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<article class=\"article\">
\t<h1>";
        // line 5
        echo Gekosale\Translation::get("TXT_ORDER_DETAILS");
        echo " #";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "idorder"), "html", null, true);
        echo "</h1>
    <div class=\"well well-clean well-small order-info\">
    \t<div class=\"row-fluid\">
        \t<div class=\"span6\">
            \t<div class=\"item\">
                \t<span class=\"name\">";
        // line 10
        echo Gekosale\Translation::get("TXT_STATUS");
        echo ":</span>
                    <strong>";
        // line 11
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "orderstatusname"), "html", null, true);
        echo "</strong>
\t\t\t\t</div>
            \t<div class=\"item\">
                \t<span class=\"name\">";
        // line 14
        echo Gekosale\Translation::get("TXT_DATE");
        echo ":</span>
                    <strong>";
        // line 15
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "orderdate"), "html", null, true);
        echo "</strong>
\t\t\t\t</div>
            \t<div class=\"item\">
                \t<span class=\"name\">";
        // line 18
        echo Gekosale\Translation::get("TXT_PAYMENT");
        echo ":</span>
                    <strong>";
        // line 19
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "paymentmethodname"), "html", null, true);
        echo "</strong>
\t\t\t\t</div>
            \t<div class=\"item\">
                \t<span class=\"name\">";
        // line 22
        echo Gekosale\Translation::get("TXT_EDIT_ORDER_BILLING_DATA");
        echo ":</span>
                    <strong>
                    ";
        // line 24
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "firstname"), "html", null, true);
        echo " ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "surname"), "html", null, true);
        echo "<br />
\t\t\t\t\t";
        // line 25
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "street"), "html", null, true);
        echo " ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "streetno"), "html", null, true);
        echo " / ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "placeno"), "html", null, true);
        echo "<br />
\t\t\t\t\t";
        // line 26
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "postcode"), "html", null, true);
        echo " ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "placename"), "html", null, true);
        echo "<br />
\t\t\t\t\t";
        // line 27
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "phone"), "html", null, true);
        echo "<br />
\t\t\t\t\t";
        // line 28
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if (($this->getAttribute($this->getAttribute($_order_, "billingaddress"), "phone2") != "")) {
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "phone2"), "html", null, true);
            echo "<br />";
        }
        // line 29
        echo "\t\t\t\t\t";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "email"), "html", null, true);
        echo "
                    </strong>
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"span6\">
            \t<div class=\"item\">
                \t<span class=\"name\">";
        // line 35
        echo Gekosale\Translation::get("TXT_DISPATCH");
        echo ":</span>
                    <strong>";
        // line 36
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "dispatchmethodname"), "html", null, true);
        echo "</strong>
\t\t\t\t</div>
                <div class=\"item\">
                \t<span class=\"name\">";
        // line 39
        echo Gekosale\Translation::get("TXT_EDIT_ORDER_SHIPPING_DATA");
        echo ":</span>
                    <strong>
                    ";
        // line 41
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "shippingaddress"), "firstname"), "html", null, true);
        echo " ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "shippingaddress"), "surname"), "html", null, true);
        echo "<br />
\t\t\t\t\t";
        // line 42
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "shippingaddress"), "street"), "html", null, true);
        echo " ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "shippingaddress"), "streetno"), "html", null, true);
        echo " / ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "shippingaddress"), "placeno"), "html", null, true);
        echo "<br />
\t\t\t\t\t";
        // line 43
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "shippingaddress"), "postcode"), "html", null, true);
        echo " ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "shippingaddress"), "placename"), "html", null, true);
        echo "<br />
\t\t\t\t\t";
        // line 44
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "shippingaddress"), "phone"), "html", null, true);
        echo "<br />
\t\t\t\t\t";
        // line 45
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if (($this->getAttribute($this->getAttribute($_order_, "billingaddress"), "phone2") != "")) {
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "billingaddress"), "phone2"), "html", null, true);
            echo "<br />";
        }
        // line 46
        echo "\t\t\t\t\t";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "shippingaddress"), "email"), "html", null, true);
        echo "
                    </strong>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<table class=\"table table-striped order\">
\t\t<caption>";
        // line 53
        echo Gekosale\Translation::get("TXT_VIEW_ORDER_PRODUCTS");
        echo "</caption>
        <thead>
        \t<tr>
            \t<th>";
        // line 56
        echo Gekosale\Translation::get("TXT_PRODUCT_NAME");
        echo "</th>
                <th>";
        // line 57
        echo Gekosale\Translation::get("TXT_PRODUCT_PRICE");
        echo "</th>
                <th>";
        // line 58
        echo Gekosale\Translation::get("TXT_QUANTITY");
        echo "</th>
                <th style=\"width: 90px\">";
        // line 59
        echo Gekosale\Translation::get("TXT_VALUE");
        echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 63
        if (isset($context["orderproductlist"])) { $_orderproductlist_ = $context["orderproductlist"]; } else { $_orderproductlist_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_orderproductlist_);
        foreach ($context['_seq'] as $context["_key"] => $context["orderproduct"]) {
            // line 64
            echo "\t\t\t<tr>
\t\t\t\t<td><strong>";
            // line 65
            if (isset($context["orderproduct"])) { $_orderproduct_ = $context["orderproduct"]; } else { $_orderproduct_ = null; }
            echo $this->getAttribute($_orderproduct_, "productname");
            echo "</strong>
\t\t\t\t";
            // line 66
            if (isset($context["orderproduct"])) { $_orderproduct_ = $context["orderproduct"]; } else { $_orderproduct_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_orderproduct_, "attributes"));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                echo "\t\t\t\t\t\t
\t\t\t\t\t<br />";
                // line 67
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_attribute_, "attributegroup"), "html", null, true);
                echo ": ";
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_attribute_, "attributename"), "html", null, true);
                echo "
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 69
            echo "\t\t\t\t</td>
\t\t\t\t<td>";
            // line 70
            if (isset($context["orderproduct"])) { $_orderproduct_ = $context["orderproduct"]; } else { $_orderproduct_ = null; }
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, Gekosale\Template::priceFormat($this->getAttribute($_orderproduct_, "price"), array("symbol" => $this->getAttribute($_order_, "currencysymbol"))), "html", null, true);
            echo "</td>
                <td><strong>";
            // line 71
            if (isset($context["orderproduct"])) { $_orderproduct_ = $context["orderproduct"]; } else { $_orderproduct_ = null; }
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($_orderproduct_, "qty")), "html", null, true);
            echo "</strong></td>
\t\t\t\t<td><strong>";
            // line 72
            if (isset($context["orderproduct"])) { $_orderproduct_ = $context["orderproduct"]; } else { $_orderproduct_ = null; }
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, Gekosale\Template::priceFormat($this->getAttribute($_orderproduct_, "qtyprice"), array("symbol" => $this->getAttribute($_order_, "currencysymbol"))), "html", null, true);
            echo "</strong></td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderproduct'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 75
        echo "\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<td colspan=\"3\" class=\"alignright\"><strong>";
        // line 78
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_order_, "dispatchmethodname"), "html", null, true);
        echo "</strong></td>
\t\t\t\t<td><strong>";
        // line 79
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, Gekosale\Template::priceFormat($this->getAttribute($_order_, "dispatchmethodprice"), array("symbol" => $this->getAttribute($_order_, "currencysymbol"))), "html", null, true);
        echo "</strong></td>
\t\t\t</tr>
\t\t</tfoot>
\t</table>
\t<div class=\"order-total\">
    \t<span class=\"total\">";
        // line 84
        echo Gekosale\Translation::get("TXT_ALL_ORDERS_PRICE");
        echo "</span>
        <span class=\"price\">";
        // line 85
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo twig_escape_filter($this->env, Gekosale\Template::priceFormat($this->getAttribute($_order_, "globalprice"), array("symbol" => $this->getAttribute($_order_, "currencysymbol"))), "html", null, true);
        echo "</span>
\t</div>
\t<table class=\"table table-striped table-bordered history-order\">
    \t<thead>
        \t<tr class=\"thead-info\">
            \t<td colspan=\"3\">";
        // line 90
        echo Gekosale\Translation::get("TXT_ORDER_INVOICE_LIST");
        echo "</td>
            </tr>
            <tr>
            \t<th>";
        // line 93
        echo Gekosale\Translation::get("TXT_INVOICE_NUMBER");
        echo "</th>
                <th>";
        // line 94
        echo Gekosale\Translation::get("TXT_INVOICE_DATE");
        echo "</th>
                <th>";
        // line 95
        echo Gekosale\Translation::get("TXT_MATURITY");
        echo "</th>
                <th>";
        // line 96
        echo Gekosale\Translation::get("TXT_TOTAL_PAYED");
        echo "</th>
                <th>";
        // line 97
        echo Gekosale\Translation::get("TXT_OPTIONS");
        echo "</th>
\t\t\t</tr>
\t\t</thead>
        <tbody>
        \t";
        // line 101
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_order_, "invoices"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 102
            echo "        \t<tr>
            \t<td>";
            // line 103
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "symbol"), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "invoicedate"), "html", null, true);
            echo "</td>
                <td>";
            // line 105
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "paymentduedate"), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "totalpayed"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 107
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, Gekosale\Template::getPathFromRoute("frontend.invoice", array("param" => $this->getAttribute($_invoice_, "idinvoice"))), "html", null, true);
            echo "\" title=\"\">";
            echo Gekosale\Translation::get("TXT_DOWNLOAD_INVOICE");
            echo " <i class=\"icon icon-chevron-down\"></i></a></td>
\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 110
            echo "\t\t\t<tr>
            \t<td colspan=\"5\" style=\"text-align: center;\">";
            // line 111
            echo Gekosale\Translation::get("TXT_EMPTY_INVOICE_LIST");
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 114
        echo "\t\t</tbody>
\t</table>      
\t<div class=\"pull-right\">
    \t<a href=\"";
        // line 117
        echo twig_escape_filter($this->env, Gekosale\Template::getPathFromRoute("frontend.clientorder"), "html", null, true);
        echo "\" title=\"\"><i class=\"icon icon-arrow-left-blue\"></i> Wróć do historii zamówień</a>
\t</div>
</article>
";
    }

    public function getTemplateName()
    {
        return "clientorderbox\\index\\view.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 117,  393 => 114,  384 => 111,  381 => 110,  370 => 107,  365 => 106,  360 => 105,  355 => 104,  350 => 103,  347 => 102,  341 => 101,  334 => 97,  330 => 96,  326 => 95,  322 => 94,  318 => 93,  312 => 90,  303 => 85,  299 => 84,  290 => 79,  285 => 78,  280 => 75,  269 => 72,  264 => 71,  258 => 70,  255 => 69,  243 => 67,  236 => 66,  231 => 65,  228 => 64,  223 => 63,  216 => 59,  212 => 58,  208 => 57,  204 => 56,  198 => 53,  186 => 46,  179 => 45,  174 => 44,  166 => 43,  155 => 42,  147 => 41,  142 => 39,  135 => 36,  131 => 35,  120 => 29,  113 => 28,  108 => 27,  100 => 26,  89 => 25,  81 => 24,  76 => 22,  69 => 19,  65 => 18,  58 => 15,  54 => 14,  47 => 11,  43 => 10,  32 => 5,  29 => 4,  26 => 2,);
    }
}
