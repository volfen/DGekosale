<?php

/* cmsmenubox\index\index.tpl */
class __TwigTemplate_e1d18cf5ea6f6448982837e07c235e75 extends Twig_Template
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
        // line 3
        echo "<nav class=\"category-nav well\">
\t";
        // line 4
        if (isset($context["contentcategory"])) { $_contentcategory_ = $context["contentcategory"]; } else { $_contentcategory_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_contentcategory_);
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 5
            echo "\t<a href=\"";
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            echo $this->getAttribute($_cat_, "link");
            echo "\" title=\"";
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            echo $this->getAttribute($_cat_, "name");
            echo "\">
\t\t<h1 ";
            // line 6
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            if (isset($context["activePath"])) { $_activePath_ = $context["activePath"]; } else { $_activePath_ = null; }
            if (twig_in_filter($this->getAttribute($_cat_, "id"), $_activePath_)) {
                echo "class=\"active\"";
            }
            echo ">
\t\t\t";
            // line 7
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            echo $this->getAttribute($_cat_, "name");
            echo "
\t\t</h1>
\t</a>
\t";
            // line 10
            if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
            if (isset($context["activePath"])) { $_activePath_ = $context["activePath"]; } else { $_activePath_ = null; }
            if (((!twig_test_empty($this->getAttribute($_cat_, "children"))) && twig_in_filter($this->getAttribute($_cat_, "id"), $_activePath_))) {
                // line 11
                echo "    <ul class=\"nav nav-pills nav-stacked\">
    \t";
                // line 12
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_cat_, "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
                    if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                    if (($this->getAttribute($_subcat_, "header") == 1)) {
                        // line 13
                        echo "\t\t<li ";
                        if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                        if (isset($context["activePath"])) { $_activePath_ = $context["activePath"]; } else { $_activePath_ = null; }
                        if (twig_in_filter($this->getAttribute($_subcat_, "id"), $_activePath_)) {
                            echo "class=\"active\"";
                        }
                        echo "><a href=\"";
                        if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                        echo $this->getAttribute($_subcat_, "link");
                        echo "\">";
                        if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                        echo $this->getAttribute($_subcat_, "name");
                        echo "</a></li>
\t\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcat'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 14
                echo "   
    </ul>
    ";
            }
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo "   
</nav>
";
    }

    public function getTemplateName()
    {
        return "cmsmenubox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 17,  95 => 14,  75 => 13,  68 => 12,  65 => 11,  61 => 10,  54 => 7,  46 => 6,  37 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
