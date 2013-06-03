<?php

/* clientaddressbox\index\index.tpl */
class __TwigTemplate_238317c706a46562b27118977fe6da96 extends Twig_Template
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
        if (array_key_exists("mailsend", $context)) {
            // line 5
            echo "\t<p class=\"error\"><strong>";
            echo Gekosale\Translation::get("TXT_ATTENTION");
            echo ": ";
            echo Gekosale\Translation::get("TXT_EMAIL_SENT");
            echo "</strong></p>
";
        }
        // line 7
        echo "
<article class=\"article\">
\t<h1>";
        // line 9
        echo Gekosale\Translation::get("TXT_CLIENT_ADDRESS");
        echo "</h1>
\t<form class=\"form-horizontal well\" name=\"";
        // line 10
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_formBilling_, "name");
        echo "\" id=\"";
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_formBilling_, "name");
        echo "\" method=\"";
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_formBilling_, "method");
        echo "\" action=\"";
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_formBilling_, "action");
        echo "\">
\t\t<input type=\"hidden\" name=\"";
        // line 11
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_formBilling_, "submit_name");
        echo "\" value=\"1\" />
\t\t<fieldset>
\t\t\t<legend>
\t\t\t\tDane zamawiającego <small>*Pola wymagane zostały oznaczone gwiazdką</small>
\t\t\t</legend>

\t\t\t";
        // line 17
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "radio", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "clienttype")), "method");
        echo "

\t\t\t";
        // line 19
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "firstname"), 1 => "input-xlarge"), "method");
        echo "

\t\t\t";
        // line 21
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "surname"), 1 => "input-xlarge"), "method");
        echo "

\t\t\t<div id=\"billing-company-data\" class=\"collapse ";
        // line 23
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_formBilling_, "children"), "clienttype"), "value") == 2)) {
            echo "in";
        }
        echo "\">
\t\t\t\t";
        // line 24
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "companyname"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t\t";
        // line 25
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "nip"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t</div>

\t\t\t";
        // line 28
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "street"), 1 => "input-xlarge"), "method");
        echo "

\t\t\t";
        // line 30
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "streetno"), 1 => "input-xlarge"), "method");
        echo "

\t\t\t";
        // line 32
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "placeno"), 1 => "input-xlarge"), "method");
        echo "

\t\t\t";
        // line 34
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "postcode"), 1 => "input-xlarge"), "method");
        echo "

\t\t\t";
        // line 36
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "placename"), 1 => "input-xlarge"), "method");
        echo "

\t\t\t";
        // line 38
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "select", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "countryid"), 1 => "input-xlarge"), "method");
        echo "

\t\t\t";
        // line 40
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_forms_, "hidden", array(0 => $this->getAttribute($this->getAttribute($_formBilling_, "children"), "__csrf")), "method");
        echo "
\t\t\t<div class=\"form-actions form-actions-clean\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary\">Zapisz zmiany</button>
\t\t\t</div>
\t\t</fieldset>
\t\t";
        // line 45
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_formBilling_, "javascript");
        echo "
\t</form>
";
        // line 48
        echo "\t<form class=\"form-horizontal padding19 nomarginbt\">
\t\t<legend>";
        // line 49
        echo Gekosale\Translation::get("TXT_DELIVER_DATA");
        echo " <a href=\"#changeDeliveryData\" data-toggle=\"modal\" title=\"\">";
        echo Gekosale\Translation::get("TXT_CHANGE");
        echo "</a></legend>
\t\t<div class=\"control-group group-text\">
\t\t\t<label class=\"control-label\" for=\"\">";
        // line 51
        echo Gekosale\Translation::get("TXT_FIRSTNAME");
        echo ":</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<strong>";
        // line 53
        if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_clientShippingAddress_, "firstname"), "html", null, true);
        echo "</strong>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group group-text\">
\t\t\t<label class=\"control-label\" for=\"\">";
        // line 57
        echo Gekosale\Translation::get("TXT_SURNAME");
        echo ":</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<strong>";
        // line 59
        if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_clientShippingAddress_, "surname"), "html", null, true);
        echo "</strong>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 62
        if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
        if (($this->getAttribute($_clientShippingAddress_, "clienttype") == 2)) {
            // line 63
            echo "\t\t<div class=\"control-group group-text\">
\t\t\t<label class=\"control-label\" for=\"\">";
            // line 64
            echo Gekosale\Translation::get("TXT_COMPANYNAME");
            echo ":</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<strong>";
            // line 66
            if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_clientShippingAddress_, "companyname"), "html", null, true);
            echo "</strong>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group group-text\">
\t\t\t<label class=\"control-label\" for=\"\">";
            // line 70
            echo Gekosale\Translation::get("TXT_NIP");
            echo ":</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<strong>";
            // line 72
            if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_clientShippingAddress_, "nip"), "html", null, true);
            echo "</strong>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 76
        echo "\t\t<div class=\"control-group group-text\">
\t\t\t<label class=\"control-label\" for=\"\">";
        // line 77
        echo Gekosale\Translation::get("TXT_PLACENAME");
        echo ":</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<strong>";
        // line 79
        if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_clientShippingAddress_, "placename"), "html", null, true);
        echo "</strong>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group group-text\">
\t\t\t<label class=\"control-label\" for=\"\">";
        // line 83
        echo Gekosale\Translation::get("TXT_POSTCODE");
        echo ":</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<strong>";
        // line 85
        if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_clientShippingAddress_, "postcode"), "html", null, true);
        echo "</strong>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"control-group group-text\">
\t\t\t<label class=\"control-label\" for=\"\">";
        // line 89
        echo Gekosale\Translation::get("TXT_ADDRESS");
        echo ":</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<strong>";
        // line 91
        if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_clientShippingAddress_, "street"), "html", null, true);
        echo " ";
        if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_clientShippingAddress_, "streetno"), "html", null, true);
        if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
        if (($this->getAttribute($_clientShippingAddress_, "placeno") != "")) {
            echo "/";
            if (isset($context["clientShippingAddress"])) { $_clientShippingAddress_ = $context["clientShippingAddress"]; } else { $_clientShippingAddress_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_clientShippingAddress_, "placeno"), "html", null, true);
        }
        echo "</strong>
\t\t\t</div>
\t\t</div>
\t</form>
";
        // line 96
        echo "</article>
<div id=\"changeDeliveryData\" class=\"modal fade hide\">
\t<div class=\"modal-header\">
\t\t<h3>";
        // line 99
        echo Gekosale\Translation::get("TXT_DELIVER_DATA");
        echo "</h3>
\t</div>
\t<div class=\"modal-body\">
\t<div class=\"row-fluid row-form\">

                <div class=\"span9\">

\t\t<form name=\"";
        // line 106
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_formShipping_, "name");
        echo "\" id=\"";
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_formShipping_, "name");
        echo "\" method=\"";
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_formShipping_, "method");
        echo "\" action=\"";
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_formShipping_, "action");
        echo "\">
\t\t\t<input type=\"hidden\" name=\"";
        // line 107
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_formShipping_, "submit_name");
        echo "\" value=\"1\" />
\t\t\t<fieldset>
\t\t\t\t";
        // line 109
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "radio", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "clienttype")), "method");
        echo "
\t\t\t\t<div class=\"row-fluid\">
                \t<div class=\"span6\">
\t\t\t\t\t\t";
        // line 112
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "firstname"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t";
        // line 115
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "surname"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"shipping-company-data\" class=\"collapse ";
        // line 118
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        if (($this->getAttribute($this->getAttribute($this->getAttribute($_formShipping_, "children"), "clienttype"), "value") == 2)) {
            echo "in";
        }
        echo "\">
\t\t\t\t\t";
        // line 119
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "companyname"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t";
        // line 120
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "nip"), 1 => "span12"), "method");
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"row-fluid\">
                \t<div class=\"span6\">
\t\t\t\t\t\t";
        // line 124
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "street"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t";
        // line 127
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "streetno"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t";
        // line 130
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "placeno"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row-fluid\">
                \t<div class=\"span3\">
\t\t\t\t\t\t";
        // line 135
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "postcode"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span9\">
\t\t\t\t\t\t";
        // line 138
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "placename"), 1 => "span12"), "method");
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row-fluid\">
                \t<div class=\"span12\">
                \t\t";
        // line 143
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "select", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "countryid"), 1 => "span12"), "method");
        echo "
                \t</div>
                </div>
\t\t\t</fieldset>
\t\t\t";
        // line 147
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_forms_, "hidden", array(0 => $this->getAttribute($this->getAttribute($_formShipping_, "children"), "__csrf")), "method");
        echo "
\t\t\t";
        // line 148
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_formShipping_, "javascript");
        echo "
\t\t</form>
\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"modal-footer\">
\t\t<a href=\"#\" class=\"btn\" data-dismiss=\"modal\">";
        // line 154
        echo Gekosale\Translation::get("Close");
        echo "</a>
\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"\$('#";
        // line 155
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_formShipping_, "name");
        echo "').submit();\">";
        echo Gekosale\Translation::get("Save changes");
        echo "</button>
\t</div>
</div>
<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$('#billing-company-data').find('input').attr('tabindex', -1);
\t\$(\"#";
        // line 161
        if (isset($context["formBilling"])) { $_formBilling_ = $context["formBilling"]; } else { $_formBilling_ = null; }
        echo $this->getAttribute($_formBilling_, "name");
        echo " input[name='clienttype']\").unbind('change').bind('change', function(){
\t\t\$('#billing-company-data').collapse(\$(this).val() == 2 ? 'show' : 'hide');
\t\tif(\$(this).val() == 2){
\t\t\t\$('#billing-company-data').find('input').removeAttr('tabindex');
\t\t}else{
\t\t\t\$('#billing-company-data').find('input').attr('tabindex', -1);
\t\t}
\t});
\t\$(\"#";
        // line 169
        if (isset($context["formShipping"])) { $_formShipping_ = $context["formShipping"]; } else { $_formShipping_ = null; }
        echo $this->getAttribute($_formShipping_, "name");
        echo " input[name='clienttype']\").unbind('change').bind('change', function(){
\t\t\$('#shipping-company-data').collapse(\$(this).val() == 2 ? 'show' : 'hide');
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "clientaddressbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 169,  457 => 161,  445 => 155,  441 => 154,  431 => 148,  425 => 147,  416 => 143,  406 => 138,  398 => 135,  388 => 130,  380 => 127,  372 => 124,  363 => 120,  357 => 119,  350 => 118,  342 => 115,  334 => 112,  326 => 109,  320 => 107,  306 => 106,  296 => 99,  291 => 96,  274 => 91,  269 => 89,  261 => 85,  256 => 83,  248 => 79,  243 => 77,  240 => 76,  232 => 72,  227 => 70,  219 => 66,  214 => 64,  211 => 63,  208 => 62,  201 => 59,  196 => 57,  188 => 53,  183 => 51,  176 => 49,  173 => 48,  167 => 45,  157 => 40,  150 => 38,  143 => 36,  136 => 34,  129 => 32,  122 => 30,  115 => 28,  107 => 25,  101 => 24,  94 => 23,  87 => 21,  80 => 19,  73 => 17,  63 => 11,  49 => 10,  45 => 9,  41 => 7,  33 => 5,  31 => 4,  28 => 3,  23 => 1,);
    }
}
