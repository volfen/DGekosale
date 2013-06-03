<?php

/* maincategoriesbox\index\index.tpl */
class __TwigTemplate_669f115b97812b92c0dcb58699eeeece extends Twig_Template
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
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        if ((twig_length_filter($this->env, $_categories_) == 0)) {
            // line 4
            echo "\t<p>";
            echo Gekosale\Translation::get("ERR_EMPTY_MENUCATEGORY");
            echo "</p>
";
        } else {
            // line 6
            echo "<ul class=\"nav nav-pills nav-stacked cat-list\">
\t";
            // line 7
            if (isset($context["exclude"])) { $_exclude_ = $context["exclude"]; } else { $_exclude_ = null; }
            if ((twig_length_filter($this->env, $_exclude_) > 0)) {
                // line 8
                echo "\t\t";
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_categories_);
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if (isset($context["exclude"])) { $_exclude_ = $context["exclude"]; } else { $_exclude_ = null; }
                    if (twig_in_filter($this->getAttribute($_category_, "id"), $_exclude_)) {
                        // line 9
                        echo "\t\t";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if ($this->getAttribute($_category_, "totalproducts")) {
                            // line 10
                            echo "\t\t<li><a href=\"";
                            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                            echo $this->getAttribute($_category_, "link");
                            echo "\" title=\"";
                            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                            echo $this->getAttribute($_category_, "label");
                            echo "\">";
                            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                            echo $this->getAttribute($_category_, "label");
                            echo "</a></li>
\t\t";
                        }
                        // line 12
                        echo "\t\t";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 13
                echo "\t";
            } else {
                // line 14
                echo "\t\t";
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_categories_);
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 15
                    echo "\t\t";
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if ($this->getAttribute($_category_, "totalproducts")) {
                        // line 16
                        echo "\t\t<li><a href=\"";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "link");
                        echo "\" title=\"";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "label");
                        echo "\">";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "label");
                        echo "</a></li>
\t\t";
                    }
                    // line 18
                    echo "\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 19
                echo "\t";
            }
            // line 20
            echo "    <li class=\"all\"><a href=\"";
            echo Gekosale\Template::getPathFromRoute("frontend.sitemap");
            echo "\">Wszystkie kategorie</a></li>
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "maincategoriesbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 20,  109 => 19,  103 => 18,  90 => 16,  86 => 15,  80 => 14,  77 => 13,  70 => 12,  57 => 10,  53 => 9,  44 => 8,  41 => 7,  38 => 6,  32 => 4,  29 => 3,  26 => 2,);
    }
}
