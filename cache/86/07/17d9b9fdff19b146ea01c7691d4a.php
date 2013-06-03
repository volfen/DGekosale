<?php

/* producerbox\index\index.tpl */
class __TwigTemplate_860717d9b9fdff19b146ea01c7691d4a extends Twig_Template
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
        if (isset($context["CURRENT_PARAM"])) { $_CURRENT_PARAM_ = $context["CURRENT_PARAM"]; } else { $_CURRENT_PARAM_ = null; }
        if (isset($context["CURRENT_CONTROLLER"])) { $_CURRENT_CONTROLLER_ = $context["CURRENT_CONTROLLER"]; } else { $_CURRENT_CONTROLLER_ = null; }
        if ((($_CURRENT_PARAM_ != "") && ($_CURRENT_CONTROLLER_ == "producerlist"))) {
            // line 4
            echo "<nav class=\"category-nav well\">
\t";
            // line 5
            if (isset($context["producers"])) { $_producers_ = $context["producers"]; } else { $_producers_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_producers_);
            foreach ($context['_seq'] as $context["_key"] => $context["producer"]) {
                // line 6
                echo "\t<a href=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "link");
                echo "\" title=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "\">
\t\t<h1 ";
                // line 7
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                if ($this->getAttribute($_producer_, "active")) {
                    echo "class=\"active\"";
                }
                echo ">
\t\t\t";
                // line 8
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "
\t\t</h1>
\t</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producer'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 11
            echo "   
</nav>
";
        } else {
            // line 14
            echo "<nav class=\"category-nav well\">
\t";
            // line 15
            if (isset($context["contentcategory"])) { $_contentcategory_ = $context["contentcategory"]; } else { $_contentcategory_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_contentcategory_);
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 16
                echo "\t<a href=\"";
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo $this->getAttribute($_cat_, "link");
                echo "\" title=\"";
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo $this->getAttribute($_cat_, "name");
                echo "\">
\t\t<h1 ";
                // line 17
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                if (isset($context["activePath"])) { $_activePath_ = $context["activePath"]; } else { $_activePath_ = null; }
                if (twig_in_filter($this->getAttribute($_cat_, "id"), $_activePath_)) {
                    echo "class=\"active\"";
                }
                echo ">
\t\t\t";
                // line 18
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                echo $this->getAttribute($_cat_, "name");
                echo "
\t\t</h1>
\t</a>
\t";
                // line 21
                if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                if (isset($context["activePath"])) { $_activePath_ = $context["activePath"]; } else { $_activePath_ = null; }
                if (((!twig_test_empty($this->getAttribute($_cat_, "children"))) && twig_in_filter($this->getAttribute($_cat_, "id"), $_activePath_))) {
                    // line 22
                    echo "    <ul class=\"nav nav-pills nav-stacked\">
    \t";
                    // line 23
                    if (isset($context["cat"])) { $_cat_ = $context["cat"]; } else { $_cat_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_cat_, "children"));
                    foreach ($context['_seq'] as $context["_key"] => $context["subcat"]) {
                        if (isset($context["subcat"])) { $_subcat_ = $context["subcat"]; } else { $_subcat_ = null; }
                        if (($this->getAttribute($_subcat_, "header") == 1)) {
                            // line 24
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
                    // line 25
                    echo "   
    </ul>
    ";
                }
                // line 28
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "   
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "producerbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 28,  139 => 25,  119 => 24,  112 => 23,  109 => 22,  105 => 21,  98 => 18,  90 => 17,  81 => 16,  76 => 15,  73 => 14,  68 => 11,  57 => 8,  50 => 7,  41 => 6,  36 => 5,  33 => 4,  29 => 3,  26 => 2,);
    }
}
