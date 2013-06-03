<?php

/* clientsettingsbox\index\index.tpl */
class __TwigTemplate_4d4697a6e7f5437d1828b7ce63e787ea extends Twig_Template
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
        echo " 
";
        // line 4
        if (array_key_exists("success", $context)) {
            // line 5
            echo "<script>
GMessage('";
            // line 6
            if (isset($context["success"])) { $_success_ = $context["success"]; } else { $_success_ = null; }
            echo $_success_;
            echo "','');
</script>
";
        }
        // line 8
        echo " 
<article class=\"article\">
\t<h1>";
        // line 10
        echo Gekosale\Translation::get("TXT_SETTINGS");
        echo "</h1>
\t";
        // line 11
        if (array_key_exists("duplicateMailError", $context)) {
            // line 12
            echo "\t<div class=\"alert scroll alert-error\">
\t\t<strong>";
            // line 13
            if (isset($context["duplicateMailError"])) { $_duplicateMailError_ = $context["duplicateMailError"]; } else { $_duplicateMailError_ = null; }
            echo $_duplicateMailError_;
            echo "</strong>
\t</div>
\t";
        }
        // line 15
        echo " 
\t";
        // line 16
        if (array_key_exists("registrationok", $context)) {
            // line 17
            echo "\t<div class=\"alert scroll alert-success\">
\t\t<strong>";
            // line 18
            if (isset($context["registrationok"])) { $_registrationok_ = $context["registrationok"]; } else { $_registrationok_ = null; }
            echo $_registrationok_;
            echo "</strong>
\t</div>
\t";
        }
        // line 20
        echo " 
\t<form class=\"form-horizontal well\" name=\"";
        // line 21
        if (isset($context["formEmail"])) { $_formEmail_ = $context["formEmail"]; } else { $_formEmail_ = null; }
        echo $this->getAttribute($_formEmail_, "name");
        echo "\" id=\"";
        if (isset($context["formEmail"])) { $_formEmail_ = $context["formEmail"]; } else { $_formEmail_ = null; }
        echo $this->getAttribute($_formEmail_, "name");
        echo "\" method=\"";
        if (isset($context["formEmail"])) { $_formEmail_ = $context["formEmail"]; } else { $_formEmail_ = null; }
        echo $this->getAttribute($_formEmail_, "method");
        echo "\" action=\"";
        if (isset($context["formEmail"])) { $_formEmail_ = $context["formEmail"]; } else { $_formEmail_ = null; }
        echo $this->getAttribute($_formEmail_, "action");
        echo "\">
\t\t<input type=\"hidden\" name=\"";
        // line 22
        if (isset($context["formEmail"])) { $_formEmail_ = $context["formEmail"]; } else { $_formEmail_ = null; }
        echo $this->getAttribute($_formEmail_, "submit_name");
        echo "\" value=\"1\" />
\t\t<fieldset>
\t\t\t<legend>
\t\t\t\t";
        // line 25
        echo Gekosale\Translation::get("TXT_CONTACT_DATA");
        // line 26
        echo "\t\t\t</legend>
\t\t\t<br />
\t\t\t";
        // line 28
        if (array_key_exists("settingsSaved", $context)) {
            // line 29
            echo "\t\t\t<div class=\"alert scroll alert-success\">
\t\t\t\t<strong>";
            // line 30
            if (isset($context["settingsSaved"])) { $_settingsSaved_ = $context["settingsSaved"]; } else { $_settingsSaved_ = null; }
            echo $_settingsSaved_;
            echo "</strong>
\t\t\t</div>
\t\t\t";
        } else {
            // line 33
            echo "\t\t\t<div class=\"alert scroll alert-info\">
\t\t\t\tZmieniając adres e-mail zmieni się również Twój login do sklepu. Po zmianie zostaniesz wylogowany i będzie konieczne ponowne zalogowanie w sklepie.
\t\t\t</div>
\t\t\t";
        }
        // line 37
        echo "\t\t\t";
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formEmail"])) { $_formEmail_ = $context["formEmail"]; } else { $_formEmail_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formEmail_, "children"), "email"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t";
        // line 38
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formEmail"])) { $_formEmail_ = $context["formEmail"]; } else { $_formEmail_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formEmail_, "children"), "phone"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t";
        // line 39
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formEmail"])) { $_formEmail_ = $context["formEmail"]; } else { $_formEmail_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_formEmail_, "children"), "phone2"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t";
        // line 40
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formEmail"])) { $_formEmail_ = $context["formEmail"]; } else { $_formEmail_ = null; }
        echo $this->getAttribute($_forms_, "hidden", array(0 => $this->getAttribute($this->getAttribute($_formEmail_, "children"), "__csrf")), "method");
        echo "
\t\t\t<div class=\"form-actions form-actions-clean\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary marginlt20\">Zapisz zmiany</button>
\t\t\t</div>
\t\t</fieldset>
\t\t";
        // line 45
        if (isset($context["formEmail"])) { $_formEmail_ = $context["formEmail"]; } else { $_formEmail_ = null; }
        echo $this->getAttribute($_formEmail_, "javascript");
        echo "
\t</form>
\t
\t";
        // line 48
        if (array_key_exists("changedPasswd", $context)) {
            // line 49
            echo "\t<div class=\"alert alert-success\">
\t\t";
            // line 50
            if (isset($context["changedPasswd"])) { $_changedPasswd_ = $context["changedPasswd"]; } else { $_changedPasswd_ = null; }
            echo $_changedPasswd_;
            echo "
\t</div>
\t";
        }
        // line 52
        echo " 
\t<form class=\"form-horizontal well\" name=\"";
        // line 53
        if (isset($context["formPass"])) { $_formPass_ = $context["formPass"]; } else { $_formPass_ = null; }
        echo $this->getAttribute($_formPass_, "name");
        echo "\" id=\"";
        if (isset($context["formPass"])) { $_formPass_ = $context["formPass"]; } else { $_formPass_ = null; }
        echo $this->getAttribute($_formPass_, "name");
        echo "\" method=\"";
        if (isset($context["formPass"])) { $_formPass_ = $context["formPass"]; } else { $_formPass_ = null; }
        echo $this->getAttribute($_formPass_, "method");
        echo "\" action=\"";
        if (isset($context["formPass"])) { $_formPass_ = $context["formPass"]; } else { $_formPass_ = null; }
        echo $this->getAttribute($_formPass_, "action");
        echo "\">
\t\t<input type=\"hidden\" name=\"";
        // line 54
        if (isset($context["formPass"])) { $_formPass_ = $context["formPass"]; } else { $_formPass_ = null; }
        echo $this->getAttribute($_formPass_, "submit_name");
        echo "\" value=\"1\" />
\t\t<fieldset>
\t\t\t<legend>
\t\t\t\t";
        // line 57
        echo Gekosale\Translation::get("TXT_CHANGE_PASSWORD");
        // line 58
        echo "\t\t\t</legend>
\t\t\t";
        // line 59
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formPass"])) { $_formPass_ = $context["formPass"]; } else { $_formPass_ = null; }
        echo $this->getAttribute($_forms_, "password", array(0 => $this->getAttribute($this->getAttribute($_formPass_, "children"), "password"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t";
        // line 60
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formPass"])) { $_formPass_ = $context["formPass"]; } else { $_formPass_ = null; }
        echo $this->getAttribute($_forms_, "password", array(0 => $this->getAttribute($this->getAttribute($_formPass_, "children"), "newpassword"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t";
        // line 61
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formPass"])) { $_formPass_ = $context["formPass"]; } else { $_formPass_ = null; }
        echo $this->getAttribute($_forms_, "password", array(0 => $this->getAttribute($this->getAttribute($_formPass_, "children"), "confirmpassword"), 1 => "input-xlarge"), "method");
        echo "
\t\t\t";
        // line 62
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["formPass"])) { $_formPass_ = $context["formPass"]; } else { $_formPass_ = null; }
        echo $this->getAttribute($_forms_, "hidden", array(0 => $this->getAttribute($this->getAttribute($_formPass_, "children"), "__csrf")), "method");
        echo "
\t\t\t<div class=\"form-actions form-actions-clean\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary marginlt20\">Zapisz zmiany</button>
\t\t\t</div>
\t\t</fieldset>
\t\t";
        // line 67
        if (isset($context["formPass"])) { $_formPass_ = $context["formPass"]; } else { $_formPass_ = null; }
        echo $this->getAttribute($_formPass_, "javascript");
        echo "
\t</form>

\t
\t
</article>
";
    }

    public function getTemplateName()
    {
        return "clientsettingsbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 67,  223 => 62,  217 => 61,  211 => 60,  205 => 59,  202 => 58,  200 => 57,  193 => 54,  179 => 53,  176 => 52,  169 => 50,  166 => 49,  164 => 48,  157 => 45,  147 => 40,  141 => 39,  135 => 38,  128 => 37,  122 => 33,  115 => 30,  112 => 29,  110 => 28,  106 => 26,  104 => 25,  97 => 22,  83 => 21,  80 => 20,  73 => 18,  70 => 17,  68 => 16,  65 => 15,  58 => 13,  55 => 12,  53 => 11,  49 => 10,  45 => 8,  38 => 6,  35 => 5,  33 => 4,  28 => 3,  23 => 1,);
    }
}
