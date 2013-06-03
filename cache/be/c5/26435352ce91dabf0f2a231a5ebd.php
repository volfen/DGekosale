<?php

/* clientorderbox\index\check.tpl */
class __TwigTemplate_bec526435352ce91dabf0f2a231a5ebd extends Twig_Template
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
        echo "<article class=\"article\">
\t<h1>";
        // line 5
        echo Gekosale\Translation::get("TXT_ORDER_STATUS");
        echo "</h1>
\t";
        // line 6
        if (array_key_exists("status", $context)) {
            // line 7
            echo "\t\t";
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            if ((!(null === $_status_))) {
                // line 8
                echo "\t    <div class=\"alert alert-block alert-info\">
\t\t\tAktualny status zamówienia #";
                // line 9
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo $this->getAttribute($_status_, "orderid");
                echo ": <strong>";
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo $this->getAttribute($_status_, "name");
                echo "</strong>
\t\t</div>
\t\t";
            } else {
                // line 12
                echo "\t\t<div class=\"alert alert-block alert-error\">
\t\t\tPodałeś niepoprawne dane. Nie jest możliwe sprawdzenie statusu zamówienia.
\t\t</div>
\t\t";
            }
            // line 16
            echo "\t";
        }
        // line 17
        echo "\t<form class=\"well\" name=\"";
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
\t\t<input type=\"hidden\" name=\"";
        // line 18
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "submit_name");
        echo "\" value=\"1\" />
\t\t<div class=\"alert alert-block alert-info\">
\t\t\tJeśli chcesz uzyskać więcej informacji - <a href=\"";
        // line 20
        echo Gekosale\Template::getPathFromRoute("frontend.clientlogin");
        echo "\"><strong>zaloguj się</strong></a> korzystając z danych konta utworzonego przy składaniu zamówienia
\t\t</div>
\t\t<fieldset>
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span5\">
\t\t\t\t\t";
        // line 25
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "email"), 1 => "span12"), "method");
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"span5\">
\t\t\t\t\t";
        // line 28
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "orderid"), 1 => "span12"), "method");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 31
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "hidden", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "__csrf")), "method");
        echo "
\t\t\t<div class=\"form-actions form-actions-clean\">
\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary\">Sprawdź status</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</fieldset>
\t\t";
        // line 38
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "javascript");
        echo "
\t</form>
\t
</article>
";
    }

    public function getTemplateName()
    {
        return "clientorderbox\\index\\check.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 38,  111 => 31,  103 => 28,  95 => 25,  87 => 20,  81 => 18,  66 => 17,  63 => 16,  57 => 12,  47 => 9,  44 => 8,  40 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  23 => 1,);
    }
}
