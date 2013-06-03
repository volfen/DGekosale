<?php

/* cartbox/index/methods.tpl */
class __TwigTemplate_11b0a8db246ec25b4909079f54fa1479 extends Twig_Template
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
\t<td colspan=\"2\" class=\"order-method\">
\t\t<h4>";
        // line 3
        echo Gekosale\Translation::get("TXT_DELIVERY_TYPE");
        echo "</h4>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 5
        if (isset($context["deliverymethods"])) { $_deliverymethods_ = $context["deliverymethods"]; } else { $_deliverymethods_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_deliverymethods_);
        foreach ($context['_seq'] as $context["_key"] => $context["delivery"]) {
            // line 6
            echo "\t\t\t<label class=\"radio\">
\t\t\t\t<input type=\"radio\" name=\"optionsRadios\" id=\"delivery-";
            // line 7
            if (isset($context["delivery"])) { $_delivery_ = $context["delivery"]; } else { $_delivery_ = null; }
            echo $this->getAttribute($_delivery_, "dispatchmethodid");
            echo "\" value=\"";
            if (isset($context["delivery"])) { $_delivery_ = $context["delivery"]; } else { $_delivery_ = null; }
            echo $this->getAttribute($_delivery_, "dispatchmethodid");
            echo "\"  ";
            if (isset($context["delivery"])) { $_delivery_ = $context["delivery"]; } else { $_delivery_ = null; }
            if (isset($context["checkedDelivery"])) { $_checkedDelivery_ = $context["checkedDelivery"]; } else { $_checkedDelivery_ = null; }
            if (($this->getAttribute($_delivery_, "dispatchmethodid") == $this->getAttribute($_checkedDelivery_, "dispatchmethodid"))) {
                echo "checked=\"checked\"";
            }
            echo " onclick=\"xajax_setDispatchmethodChecked(";
            if (isset($context["delivery"])) { $_delivery_ = $context["delivery"]; } else { $_delivery_ = null; }
            echo $this->getAttribute($_delivery_, "dispatchmethodid");
            echo "); return false;\"> ";
            if (isset($context["delivery"])) { $_delivery_ = $context["delivery"]; } else { $_delivery_ = null; }
            echo $this->getAttribute($_delivery_, "name");
            echo " <span class=\"pull-right\"><strong>";
            if (isset($context["delivery"])) { $_delivery_ = $context["delivery"]; } else { $_delivery_ = null; }
            echo Gekosale\Template::priceFormat($this->getAttribute($_delivery_, "dispatchmethodcost"));
            echo "</strong></span>
\t\t\t</label>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 10
        echo "\t\t</div>
\t\t<h4>";
        // line 11
        echo Gekosale\Translation::get("TXT_PAYMENT_TYPE");
        echo "</h4>
\t\t<div class=\"control-group\">
\t\t\t";
        // line 13
        if (isset($context["payments"])) { $_payments_ = $context["payments"]; } else { $_payments_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_payments_);
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 14
            echo "\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"paymentsradio\" id=\"payment-";
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo $this->getAttribute($_payment_, "idpaymentmethod");
            echo "\" value=\"";
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo $this->getAttribute($_payment_, "name");
            echo "\" ";
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            if (isset($context["checkedPayment"])) { $_checkedPayment_ = $context["checkedPayment"]; } else { $_checkedPayment_ = null; }
            if (($this->getAttribute($_payment_, "idpaymentmethod") == $this->getAttribute($_checkedPayment_, "idpaymentmethod"))) {
                echo "checked=\"checked\"";
            }
            echo " onclick=\"xajax_setPeymentChecked(";
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo $this->getAttribute($_payment_, "idpaymentmethod");
            echo ", '";
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo $this->getAttribute($_payment_, "name");
            echo "'); return false;\"> ";
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo $this->getAttribute($_payment_, "name");
            echo "</label>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "\t\t</div>
\t</td>
\t<td colspan=\"2\" class=\"alignright\">";
        // line 18
        echo Gekosale\Translation::get("TXT_COST_OF_DELIVERY");
        echo "</td>
\t<td colspan=\"2\" class=\"center\"><strong>";
        // line 19
        if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
        echo Gekosale\Template::priceFormat($this->getAttribute($this->getAttribute($_order_, "dispatchmethod"), "dispatchmethodcost"));
        echo "</strong></td>
</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t



";
    }

    public function getTemplateName()
    {
        return "cartbox/index/methods.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 19,  107 => 18,  103 => 16,  75 => 14,  21 => 3,  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 37,  159 => 35,  153 => 33,  147 => 32,  144 => 31,  140 => 29,  127 => 27,  122 => 26,  114 => 25,  109 => 24,  106 => 23,  96 => 21,  84 => 17,  58 => 11,  46 => 8,  34 => 7,  87 => 32,  70 => 13,  65 => 11,  62 => 10,  54 => 18,  51 => 17,  49 => 16,  45 => 14,  31 => 6,  23 => 5,  90 => 17,  81 => 31,  68 => 11,  63 => 10,  41 => 7,  35 => 8,  19 => 2,  33 => 2,  27 => 6,  18 => 1,  85 => 26,  78 => 30,  76 => 20,  69 => 15,  67 => 17,  53 => 12,  47 => 9,  44 => 10,  40 => 8,  37 => 7,  32 => 5,  29 => 4,  26 => 5,  173 => 37,  167 => 36,  163 => 34,  157 => 33,  154 => 32,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 21,  89 => 18,  79 => 17,  72 => 19,  64 => 15,  61 => 15,  57 => 19,  52 => 9,  43 => 7,  36 => 6,  28 => 5,  22 => 2,  17 => 1,);
    }
}
