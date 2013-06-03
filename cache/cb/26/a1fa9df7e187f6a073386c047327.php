<?php

/* checkoutbox\index\guest.tpl */
class __TwigTemplate_cb26a1fa9df7e187f6a073386c047327 extends Twig_Template
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
        // line 1
        $context["forms"] = $this->env->loadTemplate("forms.tpl");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1 class=\"large\">Krok 1. Dane adresowe</h1>
<div class=\"row-fluid row-form\">
\t<div class=\"span9\">
\t\t<div class=\"span3 alignright\">
\t\t\t<h3 class=\"normal font20\">Posiadam konto</h3>
\t\t</div>
\t\t<div class=\"span6\">
\t\t\t";
        // line 11
        if (array_key_exists("loginerror", $context)) {
            // line 12
            echo "\t\t\t<div class=\"alert alert-error\">
\t\t\t\t<strong>";
            // line 13
            if (isset($context["loginerror"])) { $_loginerror_ = $context["loginerror"]; } else { $_loginerror_ = null; }
            echo $_loginerror_;
            echo "</strong>
\t\t\t</div>
\t\t\t";
        }
        // line 15
        echo " 
\t\t\t<form name=\"";
        // line 16
        if (isset($context["formLogin"])) { $_formLogin_ = $context["formLogin"]; } else { $_formLogin_ = null; }
        echo $this->getAttribute($_formLogin_, "name");
        echo "\" id=\"";
        if (isset($context["formLogin"])) { $_formLogin_ = $context["formLogin"]; } else { $_formLogin_ = null; }
        echo $this->getAttribute($_formLogin_, "name");
        echo "\"\tmethod=\"";
        if (isset($context["formLogin"])) { $_formLogin_ = $context["formLogin"]; } else { $_formLogin_ = null; }
        echo $this->getAttribute($_formLogin_, "method");
        echo "\" action=\"";
        if (isset($context["formLogin"])) { $_formLogin_ = $context["formLogin"]; } else { $_formLogin_ = null; }
        echo $this->getAttribute($_formLogin_, "action");
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"";
        // line 17
        if (isset($context["formLogin"])) { $_formLogin_ = $context["formLogin"]; } else { $_formLogin_ = null; }
        echo $this->getAttribute($_formLogin_, "submit_name");
        echo "\" value=\"1\" />
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"well well-small\">
\t\t\t\t\t\t<div class=\"login-form\">
\t\t\t\t\t\t\t<legend>
\t\t\t\t\t\t\t\tZaloguj się <small>*Pola wymagane</small>
\t\t\t\t\t\t\t</legend>
\t\t\t\t\t\t\t";
        // line 24
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formLogin"])) { $_formLogin_ = $context["formLogin"]; } else { $_formLogin_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formLogin_, "children"), "login"), 1 => "input-xlarge"), "method");
        echo " 
\t\t\t\t\t\t\t";
        // line 25
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formLogin"])) { $_formLogin_ = $context["formLogin"]; } else { $_formLogin_ = null; }
        echo $this->getAttribute($_forms_, "password", array(0 => $this->getAttribute($this->getAttribute($_formLogin_, "children"), "password"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t\t\t\t\t";
        // line 26
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formLogin"])) { $_formLogin_ = $context["formLogin"]; } else { $_formLogin_ = null; }
        echo $this->getAttribute($_forms_, "hidden", array(0 => $this->getAttribute($this->getAttribute($_formLogin_, "children"), "__csrf")), "method");
        echo "
\t\t\t\t\t\t\t<div class=\"form-actions form-actions-clean\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 28
        echo Gekosale\Template::getPathFromRoute("frontend.forgotpassword");
        echo "\" title=\"";
        echo Gekosale\Translation::get("TXT_FORGOT_PASSWORD");
        echo "\">";
        echo Gekosale\Translation::get("TXT_FORGOT_PASSWORD");
        echo "</a>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary pull-right\">";
        // line 29
        echo Gekosale\Translation::get("TXT_LOGIN");
        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"login-info\">
\t\t\t\t\t\t\t<h4>Jesteś stałym klientem</h4>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Kupujesz szybko i wygodnie</li>
\t\t\t\t\t\t\t\t<li>Możesz śledzić bieżące zamówienia</li>
\t\t\t\t\t\t\t\t<li>Otrzymujesz informacje o promocjach</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t";
        // line 43
        if (isset($context["formLogin"])) { $_formLogin_ = $context["formLogin"]; } else { $_formLogin_ = null; }
        echo $this->getAttribute($_formLogin_, "javascript");
        echo "
\t\t\t</form>
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t\t<div class=\"span3 alignright\">
\t\t\t<h3 class=\"normal font20\">Kupuję pierwszy raz</h3>
\t\t\t<h4 class=\"normal font15\">
\t\t\t\tKupuj jako gość<br>lub zarejestruj się
\t\t\t</h4>
\t\t</div>
\t\t<div class=\"span6\">
\t\t\t<form  name=\"";
        // line 54
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "name");
        echo "\" id=\"";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "name");
        echo "\" method=\"";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "method");
        echo "\" action=\"";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "action");
        echo "\">
\t\t\t\t<input type=\"hidden\" name=\"";
        // line 55
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "submit_name");
        echo "\" value=\"1\" />
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"well well-small well-clean\">
\t\t\t\t\t\t<legend>
\t\t\t\t\t\t\tDane zamawiającego <small>*Pola wymagane</small>
\t\t\t\t\t\t</legend>
\t\t\t\t\t\t";
        // line 61
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "radio", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_clienttype")), "method");
        echo "
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t";
        // line 64
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_firstname"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t";
        // line 67
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_surname"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid collapse ";
        // line 70
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_formBilling_, "children"), "clienttype"), "value") == 2)) {
            echo "in";
        }
        echo "\" id=\"billing-company-data\">
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t";
        // line 72
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_companyname"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t";
        // line 75
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_nip"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t";
        // line 80
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_street"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t";
        // line 83
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_streetno"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t";
        // line 86
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_placeno"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t";
        // line 91
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_placename"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t";
        // line 94
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_postcode"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t";
        // line 99
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "select", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "billing_country"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<span class=\"help-block gray\"><small>Na powyższe dane zostanie wystawona faktura VAT</small></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 108
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "checkbox", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "other_address"), 1 => "span12"), "method");
        echo "

\t\t\t\t\t\t<div id=\"shipping-data\" class=\"collapse\">
\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t\t";
        // line 113
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "shipping_firstname"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t\t";
        // line 116
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "shipping_surname"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t\t";
        // line 121
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "shipping_companyname"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t\t";
        // line 126
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "shipping_street"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t\t";
        // line 129
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "shipping_streetno"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t\t";
        // line 132
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "shipping_placeno"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t\t";
        // line 137
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "shipping_placename"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t\t";
        // line 140
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "shipping_postcode"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t\t";
        // line 145
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "select", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "shipping_country"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<legend class=\"marginbt10\">Dane kontaktowe</legend>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t";
        // line 153
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "phone"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t";
        // line 158
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "phone2"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid marginbt20\">
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t";
        // line 163
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "email"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"well well-small\">
\t\t\t\t\t\t";
        // line 168
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "checkbox", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "create_account"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t<div class=\"collapse in\" id=\"create-account\">
\t\t\t\t\t\t\t<legend class=\"marginbt10\">Dane konta</legend>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"password-form\">
\t\t\t\t\t\t\t\t\t";
        // line 173
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "password", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "password"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 174
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "password", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "confirmpassword"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"password-info\">
\t\t\t\t\t\t\t\t\t<h4>Korzyści z założenia konta</h4>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><strong>50 zł</strong> na następne zakupy</li>
\t\t\t\t\t\t\t\t\t\t<li>Aktualny <strong>status przesyłki</strong></li>
\t\t\t\t\t\t\t\t\t\t<li><strong>Rabaty</strong> dla stałych klientów</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"well well-small\">
\t\t\t\t\t\t<legend>Warunki sklepu oraz biuletyn okazji</legend>
\t\t\t\t\t\t";
        // line 192
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "checkbox", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "confirmterms")), "method");
        echo "
\t\t\t\t\t\t";
        // line 193
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "checkbox", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "newsletter")), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<fieldset>
\t\t\t\t\t";
        // line 197
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "hidden", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "__csrf")), "method");
        echo "
\t\t\t\t\t<div class=\"form-actions form-actions-clean pull-right\">
\t\t\t\t\t\t<a href=\"";
        // line 199
        echo Gekosale\Template::getPathFromRoute("frontend.cart");
        echo "\" title=\"\"><i class=\"icon icon-arrow-left-blue\"></i> ";
        echo Gekosale\Translation::get("TXT_BACK_TO_SHOPPING");
        echo "</a>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary marginlt20\">";
        // line 200
        echo Gekosale\Translation::get("TXT_CONFIRM_ORDER_DATA");
        echo " <i class=\"icon icon-arrow-right icon-white\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t";
        // line 203
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "javascript");
        echo "
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$('#billing-company-data').find('input').attr('tabindex', -1);
\t\$(\"#";
        // line 211
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "name");
        echo " input[name='billing_clienttype']\").unbind('change').bind('change', function(){
\t\t\$('#billing-company-data').collapse(\$(this).val() == 2 ? 'show' : 'hide');
\t\tif(\$(this).val() == 2){
\t\t\t\$('#billing-company-data').find('input').removeAttr('tabindex');
\t\t}else{
\t\t\t\$('#billing-company-data').find('input').attr('tabindex', -1);
\t\t}
\t});
\t\$(\"#";
        // line 219
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "name");
        echo " input[name='other_address']\").unbind('change').bind('change', function(){
\t\t\$('#shipping-data').collapse(\$(this).is(':checked') ? 'show' : 'hide');
\t});
\t
\t\$(\"#";
        // line 223
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "name");
        echo " input[name='create_account']\").unbind('change').bind('change', function(){
\t\t\$('#create-account').collapse(\$(this).is(':checked') ? 'show' : 'hide');
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "checkoutbox\\index\\guest.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 223,  493 => 219,  481 => 211,  469 => 203,  463 => 200,  457 => 199,  450 => 197,  441 => 193,  435 => 192,  412 => 174,  406 => 173,  396 => 168,  386 => 163,  376 => 158,  366 => 153,  353 => 145,  343 => 140,  335 => 137,  325 => 132,  317 => 129,  309 => 126,  299 => 121,  289 => 116,  281 => 113,  271 => 108,  257 => 99,  247 => 94,  239 => 91,  229 => 86,  221 => 83,  213 => 80,  203 => 75,  195 => 72,  187 => 70,  179 => 67,  171 => 64,  163 => 61,  153 => 55,  139 => 54,  124 => 43,  107 => 29,  99 => 28,  92 => 26,  86 => 25,  80 => 24,  69 => 17,  55 => 16,  52 => 15,  45 => 13,  42 => 12,  40 => 11,  31 => 4,  28 => 3,  23 => 1,);
    }
}
