<?php

/* registrationbox\index\index.tpl */
class __TwigTemplate_092dbd9d90eb37de5f8a003c20cc1e6b extends Twig_Template
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
        echo "<div class=\"order-wrap\" style=\"background: none;\">
\t<div class=\"row-fluid row-form\">
\t\t<div class=\"span9\"> 
\t\t\t<div class=\"span3\">
\t\t\t\t<h3 class=\"normal font20\">Nie posiadam konta</h3>
\t\t\t</div>
\t\t\t<div class=\"span6\">
\t\t\t\t<form name=\"";
        // line 11
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
\t\t\t\t\t<input type=\"hidden\" name=\"";
        // line 12
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "submit_name");
        echo "\" value=\"1\" />
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"well well-small well-clean\">
\t\t\t\t\t\t\t<legend>
\t\t\t\t\t\t\t\tZarejestruj się <small>*Pola wymagane</small>
\t\t\t\t\t\t\t</legend>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 19
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "firstname"), 1 => "input-large"), "method");
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 21
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "surname"), 1 => "input-large"), "method");
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 23
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "phone"), 1 => "input-large"), "method");
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 25
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "email"), 1 => "input-large"), "method");
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 27
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "password", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "password"), 1 => "input-large"), "method");
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 29
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "password", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "confirmpassword"), 1 => "input-large"), "method");
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"well well-small\">
\t\t\t\t\t\t\t<legend>Warunki sklepu oraz biuletyn okazji</legend>
\t\t\t\t\t\t\t";
        // line 36
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "checkbox", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "confirmterms")), "method");
        echo "
\t\t\t\t\t\t\t";
        // line 37
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "checkbox", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "newsletter")), "method");
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t";
        // line 41
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "hidden", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "__csrf")), "method");
        echo "
\t\t\t\t\t\t<div class=\"form-actions form-actions-clean\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary pull-right\">Zarejestruj się</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</fieldset>
\t\t\t\t\t";
        // line 46
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
        return "registrationbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 46,  127 => 41,  118 => 37,  112 => 36,  100 => 29,  93 => 27,  86 => 25,  79 => 23,  72 => 21,  65 => 19,  54 => 12,  40 => 11,  31 => 4,  28 => 3,  23 => 1,);
    }
}
