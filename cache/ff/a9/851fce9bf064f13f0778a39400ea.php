<?php

/* contactbox\index\index.tpl */
class __TwigTemplate_ffa9851fce9bf064f13f0778a39400ea extends Twig_Template
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
        if (array_key_exists("sendContact", $context)) {
            // line 5
            echo "<div class=\"alert alert-success\">
\t<strong>";
            // line 6
            if (isset($context["sendContact"])) { $_sendContact_ = $context["sendContact"]; } else { $_sendContact_ = null; }
            echo $_sendContact_;
            echo "</strong>
</div>
";
        }
        // line 8
        echo " 
\t\t\t
<article class=\"article\">
\t";
        // line 11
        if (isset($context["contactList"])) { $_contactList_ = $context["contactList"]; } else { $_contactList_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_contactList_);
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 12
            echo "\t<h1>";
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            echo $this->getAttribute($_contact_, "name");
            echo "</h1>
\t<div class=\"row-fluid marginbt50\">
\t\t<div class=\"span1\">&nbsp;</div>
\t\t<div class=\"span3\">
\t\t\t<h4>";
            // line 16
            echo Gekosale\Translation::get("TXT_ADDRESS");
            echo "</h4>
\t\t\t";
            // line 17
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            echo $this->getAttribute($_contact_, "street");
            echo " ";
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            echo $this->getAttribute($_contact_, "streetno");
            echo " ";
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            echo $this->getAttribute($_contact_, "placeno");
            echo "<br>
\t\t\t";
            // line 18
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            echo $this->getAttribute($_contact_, "postcode");
            echo " ";
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            echo $this->getAttribute($_contact_, "placename");
            echo "
\t\t</div>
\t\t<div class=\"span4\">
\t\t\t<h4>";
            // line 21
            echo Gekosale\Translation::get("TXT_PHONE");
            echo "</h4>
\t\t\t<div class=\"phone\">
\t\t\t\t<h3 class=\"font\">";
            // line 23
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            echo $this->getAttribute($_contact_, "phone");
            echo "</h3>
\t\t\t\t";
            // line 24
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            if (($this->getAttribute($_contact_, "businesshours") != "")) {
                echo " <span>";
                if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
                echo $this->getAttribute($_contact_, "businesshours");
                echo "</span> ";
            }
            // line 25
            echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"span4\">
\t\t\t<h4>";
            // line 28
            echo Gekosale\Translation::get("TXT_EMAIL");
            echo "</h4>
\t\t\t<div class=\"email\">
\t\t\t\t<a href=\"#\" title=\"\">";
            // line 30
            if (isset($context["contact"])) { $_contact_ = $context["contact"]; } else { $_contact_ = null; }
            echo $this->getAttribute($_contact_, "email");
            echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "\t<h1>";
        if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
        echo $this->getAttribute($_box_, "heading");
        echo "</h1>
\t
\t";
        // line 37
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $this->getAttribute($_content_, "content");
        echo "
\t
\t<form class=\"well\" name=\"";
        // line 39
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
        // line 40
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "submit_name");
        echo "\" value=\"1\" />
\t\t<fieldset>
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span5\">
\t\t\t\t\t";
        // line 44
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "firstname"), 1 => "span12"), "method");
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"span5\">
\t\t\t\t\t";
        // line 47
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "surname"), 1 => "span12"), "method");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span5\">
\t\t\t\t\t";
        // line 52
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "email"), 1 => "span12"), "method");
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"span5\">
\t\t\t\t\t";
        // line 55
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "phone"), 1 => "span12"), "method");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 58
        if ((!array_key_exists("productid", $context))) {
            // line 59
            echo "\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span10\">
\t\t\t\t\t";
            // line 61
            if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
            echo $this->getAttribute($_forms_, "input", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "topic"), 1 => "span12"), "method");
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 65
        echo "\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span10\">
\t\t\t\t\t";
        // line 67
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "textarea", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "content"), 1 => "span12"), "method");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 70
        if (isset($context["forms"])) { $_forms_ = $context["forms"]; } else { $_forms_ = null; }
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_forms_, "hidden", array(0 => $this->getAttribute($this->getAttribute($_form_, "children"), "__csrf")), "method");
        echo "
\t\t\t<div class=\"form-actions form-actions-clean\">
\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary\">Wyślij wiadomość</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</fieldset>
\t\t";
        // line 77
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->getAttribute($_form_, "javascript");
        echo "
\t</form>
</article>
";
    }

    public function getTemplateName()
    {
        return "contactbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 77,  225 => 70,  217 => 67,  213 => 65,  204 => 61,  200 => 59,  198 => 58,  190 => 55,  182 => 52,  172 => 47,  164 => 44,  156 => 40,  142 => 39,  136 => 37,  129 => 35,  117 => 30,  112 => 28,  107 => 25,  99 => 24,  94 => 23,  89 => 21,  79 => 18,  68 => 17,  64 => 16,  55 => 12,  50 => 11,  45 => 8,  38 => 6,  35 => 5,  33 => 4,  28 => 3,  23 => 1,);
    }
}
