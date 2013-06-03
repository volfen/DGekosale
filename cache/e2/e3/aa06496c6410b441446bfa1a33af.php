<?php

/* newsbox\index\index.tpl */
class __TwigTemplate_e2e3aa06496c6410b441446bfa1a33af extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        echo " 
<article class=\"article\">
\t<h1>";
        // line 4
        if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
        echo $this->getAttribute($_box_, "heading");
        echo "</h1>
\t";
        // line 5
        if (isset($context["news"])) { $_news_ = $context["news"]; } else { $_news_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_news_);
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 6
            echo "\t<div class=\"row-fluid\">
\t\t<div class=\"span12 well\">
\t\t\t<h3>";
            // line 8
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo $this->getAttribute($_entry_, "topic");
            echo "</h3>
\t\t\t<p><span class=\"badge\">";
            // line 9
            echo Gekosale\Translation::get("TXT_ADDDATE");
            echo ": ";
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo $this->getAttribute($_entry_, "adddate");
            echo "</span></p>
\t\t\t";
            // line 10
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo $this->getAttribute($_entry_, "summary");
            echo "
\t\t\t<p>
\t\t\t\t<a class=\"btn\" href=\"";
            // line 12
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo $this->getAttribute($_entry_, "link");
            echo "\" title=\"";
            if (isset($context["entry"])) { $_entry_ = $context["entry"]; } else { $_entry_ = null; }
            echo $this->getAttribute($_entry_, "topic");
            echo "\">";
            echo Gekosale\Translation::get("TXT_READ_MORE");
            echo " »</a>
\t\t\t</p>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "newsbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  64 => 12,  58 => 10,  51 => 9,  42 => 6,  100 => 17,  95 => 14,  75 => 13,  68 => 12,  65 => 11,  61 => 10,  54 => 7,  46 => 8,  37 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
