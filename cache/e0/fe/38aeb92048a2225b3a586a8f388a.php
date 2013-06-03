<?php

/* finalizationbox/index/client.tpl */
class __TwigTemplate_e0fe38aeb92048a2225b3a586a8f388a extends Twig_Template
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
        // line 2
        echo "<tr>
\t<td colspan=\"5\" class=\"order-address\">
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>
\t\t\t\t\t";
        // line 7
        echo Gekosale\Translation::get("TXT_DELIVERER_ADDRESS");
        echo " <a href=\"#changeDeliveryData\" data-toggle=\"modal\">";
        echo Gekosale\Translation::get("TXT_CHANGE");
        echo "</a>
\t\t\t\t</h4>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 10
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        if (($this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "companyname") != "")) {
            if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "companyname"), "html", null, true);
            echo "<br />";
        }
        // line 11
        echo "\t\t\t\t\t";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "firstname"), "html", null, true);
        echo " ";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "surname"), "html", null, true);
        echo "<br />
\t\t\t\t\t";
        // line 12
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "street"), "html", null, true);
        echo " ";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "streetno"), "html", null, true);
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        if (($this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "placeno") != "")) {
            echo "/";
            if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "placeno"), "html", null, true);
        }
        echo "<br />
\t\t\t\t\t";
        // line 13
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "postcode"), "html", null, true);
        echo " ";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "placename"), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>
\t\t\t\t\t";
        // line 18
        echo Gekosale\Translation::get("TXT_CONTACT_DATA");
        echo " <a href=\"#changeContactData\" data-toggle=\"modal\">";
        echo Gekosale\Translation::get("TXT_CHANGE");
        echo "</a>
\t\t\t\t</h4>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 21
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "contactData"), "email"), "html", null, true);
        echo "<br>";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "contactData"), "phone"), "html", null, true);
        echo " ";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        if (($this->getAttribute($this->getAttribute($_clientOrder_, "contactData"), "phone2") != "")) {
            echo "<br />";
            if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "contactData"), "phone2"), "html", null, true);
        }
        // line 22
        echo "\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"span4\">
\t\t\t\t<h4>
\t\t\t\t\t";
        // line 26
        echo Gekosale\Translation::get("TXT_INVOICE_DATA");
        echo " <a href=\"#changeBillingData\" data-toggle=\"modal\">";
        echo Gekosale\Translation::get("TXT_CHANGE");
        echo "</a>
\t\t\t\t</h4>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 29
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        if (($this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "companyname") != "")) {
            if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "companyname"), "html", null, true);
            echo "<br />";
        }
        // line 30
        echo "\t\t\t\t\t";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        if (($this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "nip") != "")) {
            if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "nip"), "html", null, true);
            echo "<br />";
        }
        // line 31
        echo "\t\t\t\t\t";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "firstname"), "html", null, true);
        echo " ";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "surname"), "html", null, true);
        echo "<br />
\t\t\t\t\t";
        // line 32
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "street"), "html", null, true);
        echo " ";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "streetno"), "html", null, true);
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        if (($this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "placeno") != "")) {
            echo "/";
            if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "deliveryAddress"), "placeno"), "html", null, true);
        }
        echo "<br />
\t\t\t\t\t";
        // line 33
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "postcode"), "html", null, true);
        echo " ";
        if (isset($context["clientOrder"])) { $_clientOrder_ = $context["clientOrder"]; } else { $_clientOrder_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_clientOrder_, "clientaddress"), "placename"), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "finalizationbox/index/client.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  116 => 30,  109 => 29,  101 => 26,  82 => 21,  74 => 18,  62 => 13,  39 => 11,  24 => 7,  32 => 10,  20 => 2,  173 => 39,  158 => 36,  153 => 35,  143 => 32,  137 => 30,  131 => 29,  128 => 28,  124 => 31,  111 => 24,  106 => 23,  98 => 22,  93 => 21,  90 => 20,  83 => 19,  80 => 18,  68 => 14,  58 => 11,  46 => 8,  43 => 7,  34 => 5,  29 => 4,  26 => 3,  22 => 2,  17 => 2,  488 => 194,  477 => 189,  473 => 188,  463 => 182,  457 => 181,  448 => 177,  438 => 172,  430 => 169,  420 => 164,  412 => 161,  404 => 158,  394 => 153,  384 => 148,  376 => 145,  368 => 141,  354 => 140,  346 => 135,  335 => 130,  331 => 129,  321 => 123,  315 => 122,  306 => 118,  296 => 113,  288 => 110,  278 => 105,  270 => 102,  262 => 99,  252 => 94,  244 => 91,  236 => 89,  228 => 86,  220 => 83,  211 => 79,  204 => 76,  190 => 75,  182 => 70,  170 => 64,  166 => 63,  156 => 57,  150 => 34,  141 => 52,  133 => 32,  125 => 46,  117 => 42,  103 => 41,  95 => 22,  84 => 28,  79 => 25,  76 => 24,  73 => 15,  70 => 22,  67 => 21,  65 => 13,  61 => 18,  59 => 17,  52 => 9,  48 => 12,  44 => 11,  40 => 10,  31 => 3,  28 => 3,  23 => 1,);
    }
}
