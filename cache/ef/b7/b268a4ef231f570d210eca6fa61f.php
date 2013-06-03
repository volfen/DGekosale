<?php

/* order\edit\edit.tpl */
class __TwigTemplate_efb7b268a4ef231f570d210eca6fa61f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.tpl");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h2><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/modules/orders-edit.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_EDIT_ORDER");
        echo " ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($_order_, "order_id");
        echo " (";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($_order_, "view");
        echo ") <br /><small>z dnia ";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($_order_, "order_date");
        echo "</small></h2>
<ul class=\"possibilities\">
\t<li><a href=\"";
        // line 5
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "order\" class=\"button return\" title=\"";
        echo Gekosale\Translation::get("TXT_RETURN_TO_PREVIOUS_SCREEN");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/arrow-left-gray.png\" title=\"";
        echo Gekosale\Translation::get("TXT_ORDER_LIST");
        echo "\" alt=\"";
        echo Gekosale\Translation::get("TXT_ORDER_LIST");
        echo "\"/></span></a></li>
\t";
        // line 6
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if (($this->getAttribute($_order_, "previous") > 0)) {
            echo "<li><a href=\"";
            if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
            echo $_URL_;
            echo "order/edit/";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $this->getAttribute($_order_, "previous");
            echo "\" class=\"button previous-order\"><span><img src=\"";
            if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
            echo $_DESIGNPATH_;
            echo "_images_panel/icons/buttons/arrow-left-green.png\" title=\"";
            echo Gekosale\Translation::get("TXT_PREV_ORDER");
            echo "\" alt=\"";
            echo Gekosale\Translation::get("TXT_PREV_ORDER");
            echo "\"/>";
            echo Gekosale\Translation::get("TXT_PREV_ORDER");
            echo "</span></a></li>";
        }
        // line 7
        echo "\t";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if (($this->getAttribute($_order_, "next") > 0)) {
            echo "<li><a href=\"";
            if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
            echo $_URL_;
            echo "order/edit/";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $this->getAttribute($_order_, "next");
            echo "\" class=\"button next\"><span><img src=\"";
            if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
            echo $_DESIGNPATH_;
            echo "_images_panel/icons/buttons/arrow-right-green.png\" title=\"";
            echo Gekosale\Translation::get("TXT_NEXT_ORDER");
            echo "\" alt=\"";
            echo Gekosale\Translation::get("TXT_NEXT_ORDER");
            echo "\"/>";
            echo Gekosale\Translation::get("TXT_NEXT_ORDER");
            echo "</span></a></li>";
        }
        // line 8
        echo "\t<li><a href=\"";
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "order/confirm/";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($_order_, "order_id");
        echo "\" class=\"button print\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/print.png\" title=\"";
        echo Gekosale\Translation::get("TXT_NEXT_ORDER");
        echo "\" alt=\"";
        echo Gekosale\Translation::get("TXT_NEXT_ORDER");
        echo "\"/>";
        echo Gekosale\Translation::get("TXT_PRINT");
        echo "</span></a></li>
\t<li><a href=\"#order\" id=\"save_order\" rel=\"submit\" class=\"button\" title=\"";
        // line 9
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "\"><span><img src=\"";
        if (isset($context["DESIGNPATH"])) { $_DESIGNPATH_ = $context["DESIGNPATH"]; } else { $_DESIGNPATH_ = null; }
        echo $_DESIGNPATH_;
        echo "_images_panel/icons/buttons/check.png\" alt=\"\"/>";
        echo Gekosale\Translation::get("TXT_SAVE");
        echo "</span></a></li>
</ul>
<script type=\"text/javascript\">
\t
\t\t/*<![CDATA[*/
\t\t\tGCore.OnLoad(function() {
\t\t\t\t\$('.view-order').GTabs();
\t\t\t});
\t\t/*]]>*/
\t
</script>
<div class=\"view-order GForm\">
\t
\t<fieldset class=\"no-margin\">
\t\t<legend><span>";
        // line 23
        echo Gekosale\Translation::get("TXT_VIEW_ORDER_BASIC_DATA");
        echo "</span></legend>
\t\t";
        // line 24
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $_form_;
        echo "
\t\t
\t\t<div class=\"layout-two-columns\">
\t\t \t
\t\t\t<div class=\"column\">
\t\t\t\t<h3><span><strong>Zmień status</strong></span></h3>
\t\t\t\t";
        // line 30
        if (isset($context["statusChange"])) { $_statusChange_ = $context["statusChange"]; } else { $_statusChange_ = null; }
        echo $_statusChange_;
        echo "
\t\t\t</div>
\t\t \t
\t\t\t<div class=\"column\">
\t\t\t\t<h3><span><strong>Dodaj notkę</strong></span></h3>
\t\t\t\t";
        // line 35
        if (isset($context["addNotes"])) { $_addNotes_ = $context["addNotes"]; } else { $_addNotes_ = null; }
        echo $_addNotes_;
        echo "
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t</fieldset>
\t
\t<fieldset class=\"no-margin\">
\t\t<legend><span>";
        // line 43
        echo Gekosale\Translation::get("TXT_VIEW_ORDER_INVOICES");
        echo "</span></legend>
\t\t
\t\t";
        // line 45
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_order_, "invoices")) > 0)) {
            // line 46
            echo "\t\t<ul class=\"changes-detailed\">
\t\t";
            // line 47
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_order_, "invoices"));
            foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
                // line 48
                echo "\t\t<li>
\t\t\t<h4><span>";
                // line 49
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo $this->getAttribute($_invoice_, "symbol");
                echo " - <em>";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo $this->getAttribute($_invoice_, "invoicedate");
                echo "</em> <a href=\"";
                if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
                echo $_URL_;
                echo "invoice/view/";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo $this->getAttribute($_invoice_, "idinvoice");
                echo ",0\">ORYGINAŁ</a> | <a href=\"";
                if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
                echo $_URL_;
                echo "invoice/view/";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo $this->getAttribute($_invoice_, "idinvoice");
                echo ",1\">KOPIA</a></span></h4>
\t\t\t";
                // line 50
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                if (($this->getAttribute($_invoice_, "comment") != "")) {
                    echo "<p>";
                    echo Gekosale\Translation::get("TXT_COMMENT");
                    echo ": <strong>";
                    if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                    echo $this->getAttribute($_invoice_, "comment");
                    echo "</strong></p>";
                }
                // line 51
                echo "\t\t\t<p>";
                echo Gekosale\Translation::get("TXT_MATURITY");
                echo ": <strong>";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo $this->getAttribute($_invoice_, "paymentduedate");
                echo "</strong></p>
\t\t\t<p>";
                // line 52
                echo Gekosale\Translation::get("TXT_SALES_PERSON");
                echo ": <strong>";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo $this->getAttribute($_invoice_, "salesperson");
                echo "</strong></p>
\t\t\t<p>";
                // line 53
                echo Gekosale\Translation::get("TXT_TOTAL_PAYED");
                echo ": <strong>";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo $this->getAttribute($_invoice_, "totalpayed");
                echo "</strong></p>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 56
            echo "\t\t</ul>
\t\t";
        }
        // line 58
        echo "\t\t
\t\t<p class=\"information\">
\t\t\t<a href=\"";
        // line 60
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "invoice/add/";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($_order_, "order_id");
        echo ",1\" class=\"button\"><span>";
        echo Gekosale\Translation::get("TXT_ADD_INVOICE_PRO");
        echo "</span></a>
\t\t\t<a href=\"";
        // line 61
        if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
        echo $_URL_;
        echo "invoice/add/";
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($_order_, "order_id");
        echo ",2\" class=\"button\"><span>";
        echo Gekosale\Translation::get("TXT_ADD_INVOICE_VAT");
        echo "</span></a>
\t\t</p>
\t\t
\t</fieldset>
\t
\t<fieldset class=\"no-margin\">
\t\t<legend><span>";
        // line 67
        echo Gekosale\Translation::get("TXT_VIEW_ORDER_HISTORY");
        echo "</span></legend>
\t\t
\t\t";
        // line 69
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_order_, "order_history")) > 0)) {
            // line 70
            echo "\t\t<ul class=\"changes-detailed\">
\t\t\t";
            // line 71
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_order_, "order_history"));
            foreach ($context['_seq'] as $context["_key"] => $context["change"]) {
                // line 72
                echo "\t\t\t<li>
\t\t\t\t<h4><span>";
                // line 73
                if (isset($context["change"])) { $_change_ = $context["change"]; } else { $_change_ = null; }
                echo $this->getAttribute($_change_, "date");
                echo " - <em>";
                if (isset($context["change"])) { $_change_ = $context["change"]; } else { $_change_ = null; }
                if (($this->getAttribute($_change_, "inform") == 1)) {
                    echo Gekosale\Translation::get("TXT_VIEW_ORDER_CLIENT_INFORMED");
                } else {
                    echo Gekosale\Translation::get("TXT_VIEW_ORDER_CLIENT_NOT_INFORMED");
                }
                echo "</em></span></h4>
\t\t\t\t";
                // line 74
                if (isset($context["change"])) { $_change_ = $context["change"]; } else { $_change_ = null; }
                if ($this->getAttribute($_change_, "orderstatusname", array(), "any", true, true)) {
                    echo "<p>status: <strong>";
                    if (isset($context["change"])) { $_change_ = $context["change"]; } else { $_change_ = null; }
                    echo $this->getAttribute($_change_, "orderstatusname");
                    echo "</strong></p>";
                }
                // line 75
                echo "\t\t\t\t";
                if (isset($context["change"])) { $_change_ = $context["change"]; } else { $_change_ = null; }
                if ($this->getAttribute($_change_, "content", array(), "any", true, true)) {
                    echo "<p>Komentarz: <strong>";
                    if (isset($context["change"])) { $_change_ = $context["change"]; } else { $_change_ = null; }
                    echo $this->getAttribute($_change_, "content");
                    echo "</strong></p>";
                }
                // line 76
                echo "\t\t\t\t";
                if (isset($context["change"])) { $_change_ = $context["change"]; } else { $_change_ = null; }
                if (($this->getAttribute($_change_, "user") != "")) {
                    echo "<p class=\"author\">";
                    echo Gekosale\Translation::get("TXT_VIEW_ORDER_CHANGE_AUTHOR");
                    echo ": <strong>";
                    if (isset($context["change"])) { $_change_ = $context["change"]; } else { $_change_ = null; }
                    echo $this->getAttribute($_change_, "user");
                    echo "</strong></p>";
                }
                // line 77
                echo "\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['change'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 79
            echo "\t\t</ul>
\t\t";
        } else {
            // line 81
            echo "\t\t\t<p class=\"information\">";
            echo Gekosale\Translation::get("TXT_VIEW_ORDER_NO_RECORDED_HISTORY");
            echo "</p>
\t\t";
        }
        // line 82
        echo "\t
\t</fieldset>
\t
\t<fieldset class=\"no-margin\">
\t\t<legend><span>";
        // line 86
        echo Gekosale\Translation::get("TXT_ORDER_NOTE");
        echo "</span></legend>
\t\t
\t\t";
        // line 88
        if (isset($context["orderNotes"])) { $_orderNotes_ = $context["orderNotes"]; } else { $_orderNotes_ = null; }
        if ((twig_length_filter($this->env, $_orderNotes_) > 0)) {
            // line 89
            echo "\t\t<ul class=\"changes-detailed\">
\t\t\t";
            // line 90
            if (isset($context["orderNotes"])) { $_orderNotes_ = $context["orderNotes"]; } else { $_orderNotes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_orderNotes_);
            foreach ($context['_seq'] as $context["_key"] => $context["ordernote"]) {
                // line 91
                echo "\t\t\t<li>
\t\t\t\t<h4><span>";
                // line 92
                if (isset($context["ordernote"])) { $_ordernote_ = $context["ordernote"]; } else { $_ordernote_ = null; }
                echo $this->getAttribute($_ordernote_, "adddate");
                echo "</span></h4>
\t\t\t\t";
                // line 93
                if (isset($context["ordernote"])) { $_ordernote_ = $context["ordernote"]; } else { $_ordernote_ = null; }
                if ($this->getAttribute($_ordernote_, "content", array(), "any", true, true)) {
                    echo "<p>Komentarz: <strong>";
                    if (isset($context["ordernote"])) { $_ordernote_ = $context["ordernote"]; } else { $_ordernote_ = null; }
                    echo $this->getAttribute($_ordernote_, "content");
                    echo "</strong></p>";
                }
                // line 94
                echo "\t\t\t\t<p class=\"author\">";
                echo Gekosale\Translation::get("TXT_VIEW_ORDER_CHANGE_AUTHOR");
                echo ": <strong>";
                if (isset($context["ordernote"])) { $_ordernote_ = $context["ordernote"]; } else { $_ordernote_ = null; }
                echo $this->getAttribute($_ordernote_, "user");
                echo "</strong></p>
\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordernote'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 97
            echo "\t\t";
        } else {
            // line 98
            echo "        \t<p class=\"information\">";
            echo Gekosale\Translation::get("TXT_ORDER_NOTES_EMPTY");
            echo "</p>
\t\t";
        }
        // line 99
        echo "\t\t
\t\t</ul>
\t</fieldset>
\t
\t<fieldset class=\"no-margin\">
\t\t<legend><span>";
        // line 104
        echo Gekosale\Translation::get("TXT_CLIENT_ORDER_HISTORY");
        echo "</span></legend>
\t\t
\t\t";
        // line 106
        if (isset($context["clientOrderHistory"])) { $_clientOrderHistory_ = $context["clientOrderHistory"]; } else { $_clientOrderHistory_ = null; }
        if ((twig_length_filter($this->env, $_clientOrderHistory_) > 0)) {
            // line 107
            echo "\t\t<ul class=\"changes-detailed\">
\t\t\t";
            // line 108
            if (isset($context["clientOrderHistory"])) { $_clientOrderHistory_ = $context["clientOrderHistory"]; } else { $_clientOrderHistory_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_clientOrderHistory_);
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 109
                echo "\t\t\t<li>
\t\t\t\t<h4><span>";
                // line 110
                if (isset($context["history"])) { $_history_ = $context["history"]; } else { $_history_ = null; }
                echo $this->getAttribute($_history_, "adddate");
                echo "</span></h4>
\t\t\t\t<p>Nr. zamówienia:  <strong><a href=\"";
                // line 111
                if (isset($context["URL"])) { $_URL_ = $context["URL"]; } else { $_URL_ = null; }
                echo $_URL_;
                echo "order/edit/";
                if (isset($context["history"])) { $_history_ = $context["history"]; } else { $_history_ = null; }
                echo $this->getAttribute($_history_, "idorder");
                echo "\">#";
                if (isset($context["history"])) { $_history_ = $context["history"]; } else { $_history_ = null; }
                echo $this->getAttribute($_history_, "idorder");
                echo "</a></strong></p>
\t\t\t\t<p class=\"author\">";
                // line 112
                echo Gekosale\Translation::get("TXT_ALL_ORDERS_PRICE");
                echo ": <strong>";
                if (isset($context["history"])) { $_history_ = $context["history"]; } else { $_history_ = null; }
                echo $this->getAttribute($_history_, "globalprice");
                echo "</strong>";
                if (isset($context["currencysymbol"])) { $_currencysymbol_ = $context["currencysymbol"]; } else { $_currencysymbol_ = null; }
                echo $_currencysymbol_;
                echo "</p>
\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 115
            echo "\t\t";
        } else {
            // line 116
            echo "        \t<p class=\"information\">";
            echo Gekosale\Translation::get("TXT_ORDER_HISTORY_EMPTY");
            echo "</p>
\t\t";
        }
        // line 117
        echo "\t
\t\t</ul>
\t</fieldset>
\t
\t<fieldset class=\"no-margin\">
\t\t<legend><span>";
        // line 122
        echo Gekosale\Translation::get("TXT_CUSTOMER_OPINION");
        echo "</span></legend>
\t\t";
        // line 123
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        if ((!twig_test_empty($this->getAttribute($_order_, "customeropinion")))) {
            // line 124
            echo "\t\t\t<p class=\"information\">";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo $this->getAttribute($_order_, "customeropinion");
            echo "</p>
\t\t";
        } else {
            // line 126
            echo "\t\t\t<p class=\"information\">";
            echo Gekosale\Translation::get("TXT_CUSTOMER_OPINION_NO_EXIST");
            echo "</p>
\t\t";
        }
        // line 128
        echo "\t</fieldset>
</div>

<script type=\"text/javascript\">
\t
\t\t/*<![CDATA[*/
\t\t\t
\t\t\tvar RecalculateOrder = function(eEvent, bWithDeliveryMethodsUpdate) {
\t\t\t\tvar fNetValue = parseFloat(\$('.field-order-editor .selected-products tr.total .GF_Datagrid_Col_net_subsum span').text());
\t\t\t\tvar fVatValue = parseFloat(\$('.field-order-editor .selected-products tr.total .GF_Datagrid_Col_vat_value span').text());
\t\t\t\tvar fWeight = parseFloat(\$('.field-order-editor .selected-products tr.total .GF_Datagrid_Col_weight span').text());
\t\t\t\tfNetValue = isNaN(fNetValue) ? 0 : fNetValue;
\t\t\t\tfVatValue = isNaN(fVatValue) ? 0 : fVatValue;
\t\t\t\tfWeight = isNaN(fWeight) ? 0 : fWeight;
\t\t\t\tvar gSelectedDatagrid = \$('.field-order-editor').get(0).gNode.m_gSelectedDatagrid;
\t\t\t\tvar aoProducts = [];
\t\t\t\tfor (var i in gSelectedDatagrid.m_aoRows) {
\t\t\t\t\taoProducts.push({
\t\t\t\t\t\tid: gSelectedDatagrid.m_aoRows[i].idproduct,
\t\t\t\t\t\tvariant: gSelectedDatagrid.m_aoRows[i].variant,
\t\t\t\t\t\tquantity: gSelectedDatagrid.m_aoRows[i].quantity,
\t\t\t\t\t\tprice: gSelectedDatagrid.m_aoRows[i].price
\t\t\t\t\t});
\t\t\t\t};
\t\t\t\t\$('#additional_data__summary_data__total_net_total').val(fNetValue.toFixed(2));
\t\t\t\t\$('#additional_data__summary_data__total_vat_value').val(fVatValue.toFixed(2));
\t\t\t\t\$('#pricenetto').val(fNetValue.toFixed(2));
\t\t\t\t\$('#pricebrutto').val((fNetValue + fVatValue).toFixed(2));
\t\t\t\t
\t\t\t\tif ((bWithDeliveryMethodsUpdate != undefined) && bWithDeliveryMethodsUpdate) {\t\t\t\t\t
\t\t\t\t\txajax_GetDispatchMethodForPrice({
\t\t\t\t\t\tproducts: aoProducts,
\t\t\t\t\t\tidorder: ";
        // line 160
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($_order_, "id");
        echo ",
\t\t\t\t\t\tnet_total: (fNetValue).toFixed(2),
\t\t\t\t\t\tgross_total: (fNetValue + fVatValue).toFixed(2),
\t\t\t\t\t\tweight_total: (fWeight).toFixed(2),
\t\t\t\t\t}, GCallback(function(oResponse) {
\t\t\t\t\t\t\$('#order').get(0).GetField('delivery_method').ExchangeOptions(oResponse.options);
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t\txajax_CalculateDeliveryCost({
\t\t\t\t\tproducts: aoProducts,
\t\t\t\t\tidorder: ";
        // line 170
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo $this->getAttribute($_order_, "id");
        echo ",
\t\t\t\t\tweight: parseFloat(\$('.field-order-editor .selected-products tr.total .GF_Datagrid_Col_weight span').text()),
\t\t\t\t\tprice_for_deliverers: \$('#pricebrutto').val(),
\t\t\t\t\tnet_total: \$('#pricenetto').val(),
\t\t\t\t\tdelivery_method: \$('#additional_data__payment_data__delivery_method').val(),
\t\t\t\t\trules_cart: \$('#additional_data__payment_data__rules_cart').val(),
\t\t\t\t\tcurrency: \$('#currencyid').val()
\t\t\t\t}, GCallback(function(oResponse) {
\t\t\t\t\tvar fDeliveryValue = parseFloat(oResponse.cost);
\t\t\t\t\tfDeliveryValue = isNaN(fDeliveryValue) ? 0 : fDeliveryValue;
\t\t\t\t\t\$('#additional_data__summary_data__total_delivery').val(fDeliveryValue.toFixed(2));
\t\t\t\t\t\$('#dispatchmethodprice').val(fDeliveryValue.toFixed(2));
\t\t\t\t\tif(oResponse.rulesCart.discount != undefined) {
\t\t\t\t\t\tvar sSymbol =  oResponse.rulesCart.symbol;
\t\t\t\t\t\tvar fDiscount = parseFloat(oResponse.rulesCart.discount);
\t\t\t\t\t\tvar fOldTotal = parseFloat(fNetValue + fVatValue + fDeliveryValue);
\t\t\t\t\t\tswitch (sSymbol) {
\t\t\t\t\t\t\tcase '%':
\t\t\t\t\t\t\t\tfNewTotal = fOldTotal * (fDiscount / 100);
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase '+':
\t\t\t\t\t\t\t\tfNewTotal = fOldTotal + fDiscount;
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase '-':
\t\t\t\t\t\t\t\tfNewTotal = fOldTotal - fDiscount;
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\tcase '=':
\t\t\t\t\t\t\t\tfNewTotal = fDiscount;
\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t\t\$('#additional_data__summary_data__total_total').val((fNewTotal).toFixed(2));
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#additional_data__summary_data__total_total').val((fNetValue + fVatValue + fDeliveryValue).toFixed(2));
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t\$('#additional_data__summary_data__total_delivery').val(fDeliveryValue.toFixed(2));
\t\t\t\t\t\$('#dispatchmethodprice').val(fDeliveryValue.toFixed(2));
\t\t\t\t}));
\t\t\t};
\t\t\t
\t\t\tvar OnProductListChanged = GEventHandler(function(eEvent) {
\t\t\t\tvar gSelectedDatagrid = \$('.field-order-editor').get(0).gNode.m_gSelectedDatagrid;
\t\t\t\tif(gSelectedDatagrid.m_aoRows.length){
\t\t\t\t\tRecalculateOrder(eEvent, true);
\t\t\t\t}
\t\t\t\tgSelectedDatagrid.m_jBody.find('.show-thumb').mouseenter(GTooltip.ShowThumbForThis).mouseleave(GTooltip.HideThumbForThis);
\t\t\t});
\t\t\t
\t\t\t\$(document).ready(function() {
\t\t\t\t\$('#additional_data__payment_data__delivery_method').live('change',RecalculateOrder);
\t\t\t\t\$('#additional_data__payment_data__rules_cart').change(RecalculateOrder);
\t\t\t\t\$(\"<input />\").attr({type:'hidden',name:'dispatchmethodprice',id:'dispatchmethodprice'}).appendTo(\$(\"#order\"));
\t\t\t\t\$(\"<input />\").attr({type:'hidden',name:'pricebrutto',id:'pricebrutto'}).appendTo(\$(\"#order\"));
\t\t\t\t\$(\"<input />\").attr({type:'hidden',name:'pricenetto',id:'pricenetto'}).appendTo(\$(\"#order\"));
\t\t\t\t\$(\"<input />\").attr({type:'hidden',name:'currencyid',id:'currencyid',value:'";
        // line 224
        if (isset($context["currencyid"])) { $_currencyid_ = $context["currencyid"]; } else { $_currencyid_ = null; }
        echo $_currencyid_;
        echo "'}).appendTo(\$(\"#order\"));
\t\t\t});\t

\t\t/*]]>*/
\t
</script>
";
    }

    public function getTemplateName()
    {
        return "order\\edit\\edit.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  621 => 224,  563 => 170,  549 => 160,  515 => 128,  509 => 126,  502 => 124,  499 => 123,  495 => 122,  488 => 117,  482 => 116,  479 => 115,  464 => 112,  453 => 111,  448 => 110,  445 => 109,  440 => 108,  437 => 107,  434 => 106,  429 => 104,  422 => 99,  416 => 98,  413 => 97,  400 => 94,  392 => 93,  387 => 92,  384 => 91,  379 => 90,  376 => 89,  373 => 88,  368 => 86,  362 => 82,  356 => 81,  352 => 79,  345 => 77,  334 => 76,  325 => 75,  317 => 74,  305 => 73,  302 => 72,  297 => 71,  294 => 70,  291 => 69,  286 => 67,  271 => 61,  261 => 60,  257 => 58,  253 => 56,  241 => 53,  234 => 52,  226 => 51,  216 => 50,  196 => 49,  193 => 48,  188 => 47,  185 => 46,  182 => 45,  177 => 43,  165 => 35,  156 => 30,  146 => 24,  142 => 23,  120 => 9,  102 => 8,  81 => 7,  61 => 6,  47 => 5,  29 => 3,  26 => 2,);
    }
}
