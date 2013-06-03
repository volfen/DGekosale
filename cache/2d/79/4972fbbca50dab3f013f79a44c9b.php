<?php

/* clientloginbox\index\index.tpl */
class __TwigTemplate_2d794972fbbca50dab3f013f79a44c9b extends Twig_Template
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
        if (array_key_exists("clientChangedMail", $context)) {
            // line 5
            echo "<div class=\"alert alert-success\">
\t<strong>";
            // line 6
            if (isset($context["clientChangedMail"])) { $_clientChangedMail_ = $context["clientChangedMail"]; } else { $_clientChangedMail_ = null; }
            echo $_clientChangedMail_;
            echo "</strong>
</div>
";
        }
        // line 8
        echo " 
";
        // line 9
        if (array_key_exists("loginerror", $context)) {
            // line 10
            echo "\t<div class=\"alert alert-error\">
\t\t<strong>";
            // line 11
            if (isset($context["loginerror"])) { $_loginerror_ = $context["loginerror"]; } else { $_loginerror_ = null; }
            echo $_loginerror_;
            echo "</strong>
\t</div>
";
        }
        // line 13
        echo " 
<div class=\"order-wrap\" style=\"background: none;\">
\t<div class=\"row-fluid row-form\">
\t\t<div class=\"span9\">
\t\t\t<div class=\"span3\">
\t\t\t\t<h3 class=\"normal font20\">Posiadam konto</h3>
\t\t\t</div>
\t\t\t<div class=\"span6\">
\t\t\t\t<form name=\"";
        // line 21
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
        echo "\" class=\"order-wrap\">
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 22
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "submit_name");
        echo "\" value=\"1\" />
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"well well-small\">
\t\t\t\t\t\t\t<div class=\"login-form\">
\t\t\t\t\t\t\t\t<legend>
\t\t\t\t\t\t\t\t\tZaloguj się <small>*Pola wymagane</small>
\t\t\t\t\t\t\t\t</legend>
\t\t\t\t\t\t\t\t";
        // line 29
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "login"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t\t\t\t\t\t";
        // line 30
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "password", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "password"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t\t\t\t\t\t";
        // line 31
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "checkbox", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "autologin"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t\t\t\t\t\t";
        // line 32
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "hidden", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "__csrf")), "method");
        echo "
\t\t\t\t\t\t\t\t<div class=\"form-actions form-actions-clean\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo Gekosale\Template::getPathFromRoute("frontend.forgotpassword");
        echo "\" title=\"\">Przypomnij hasło</a>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary pull-right\">Zaloguj się</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t";
        // line 41
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "javascript");
        echo "
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "clientloginbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  118 => 34,  111 => 32,  105 => 31,  99 => 30,  93 => 29,  82 => 22,  68 => 21,  58 => 13,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  23 => 1,);
    }
}
