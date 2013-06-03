<?php

/* cartbox/index/methods.tpl */
class __TwigTemplate_0b9dde95ba5f990fe47239993f0ccd5b extends Twig_Template
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
        return array (  111 => 19,  107 => 18,  75 => 14,  70 => 13,  62 => 10,  34 => 7,  21 => 3,  39 => 11,  24 => 4,  20 => 2,  333 => 61,  317 => 60,  314 => 59,  305 => 56,  292 => 54,  287 => 53,  276 => 52,  271 => 51,  268 => 50,  261 => 49,  258 => 48,  245 => 45,  240 => 44,  237 => 43,  233 => 42,  230 => 41,  216 => 38,  210 => 36,  205 => 35,  200 => 34,  186 => 33,  180 => 31,  175 => 30,  170 => 29,  167 => 28,  149 => 25,  138 => 24,  133 => 23,  130 => 22,  123 => 21,  120 => 20,  110 => 17,  104 => 15,  99 => 14,  94 => 13,  80 => 12,  74 => 10,  64 => 8,  48 => 6,  217 => 45,  198 => 42,  193 => 41,  176 => 40,  173 => 39,  166 => 37,  160 => 35,  154 => 26,  151 => 33,  147 => 31,  134 => 29,  129 => 28,  121 => 27,  116 => 26,  113 => 25,  106 => 24,  103 => 16,  96 => 20,  91 => 19,  59 => 11,  50 => 9,  36 => 6,  33 => 5,  84 => 32,  73 => 27,  65 => 11,  60 => 20,  57 => 19,  54 => 18,  51 => 17,  49 => 16,  45 => 5,  43 => 13,  31 => 6,  27 => 6,  23 => 5,  90 => 33,  81 => 31,  68 => 24,  63 => 10,  41 => 4,  35 => 8,  22 => 2,  19 => 2,  17 => 1,  89 => 27,  85 => 26,  78 => 13,  76 => 17,  72 => 15,  69 => 9,  67 => 17,  61 => 15,  53 => 7,  47 => 9,  44 => 10,  40 => 8,  37 => 3,  32 => 8,  29 => 4,  26 => 5,);
    }
}
