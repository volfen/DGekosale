<?php

/* sitemapbox\index\index.tpl */
class __TwigTemplate_1064178712c8ef63b58f64e36c023203 extends Twig_Template
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
        echo "\t\t<article class=\"article category-list\">
\t\t\t<h1>";
        // line 4
        if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
        echo $this->getAttribute($_box_, "heading");
        echo "</h1>
\t\t\t<table>
\t\t\t";
        // line 6
        if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_categories_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "\t\t\t\t";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                // line 8
                echo "\t\t\t\t<tr>
\t\t\t\t";
            }
            // line 10
            echo "\t\t\t\t\t<td class=\"valigntop padding10\">
\t\t\t\t\t\t<div class=\"span3 item\">
\t\t\t\t\t\t\t<a href=\"";
            // line 12
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo $this->getAttribute($_category_, "link");
            echo "\" title=\"";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo $this->getAttribute($_category_, "label");
            echo "\"><h2>";
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            echo $this->getAttribute($_category_, "label");
            echo "</h2></a>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t\t\t\t";
            // line 14
            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_category_, "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
                // line 15
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                if (isset($context["subcategory"])) { $_subcategory_ = $context["subcategory"]; } else { $_subcategory_ = null; }
                echo $this->getAttribute($_subcategory_, "link");
                echo "\">";
                if (isset($context["subcategory"])) { $_subcategory_ = $context["subcategory"]; } else { $_subcategory_ = null; }
                echo $this->getAttribute($_subcategory_, "label");
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 16
            echo "   
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t";
            // line 20
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((0 == $this->getAttribute($_loop_, "index") % 4)) {
                // line 21
                echo "\t\t\t\t</tr>
    \t\t\t<tr>
\t\t\t\t";
            }
            // line 23
            echo "\t
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "\t\t\t</table>
\t\t</article>
";
    }

    public function getTemplateName()
    {
        return "sitemapbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 25,  112 => 23,  107 => 21,  104 => 20,  98 => 16,  85 => 15,  80 => 14,  68 => 12,  64 => 10,  60 => 8,  56 => 7,  38 => 6,  32 => 4,  29 => 3,  26 => 2,);
    }
}
