<?php

/* productsearchlistbox\index\index.tpl */
class __TwigTemplate_8374f2dff0c4f2405aabd47f486de7b2 extends Twig_Template
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
        if (isset($context["dataset"])) { $_dataset_ = $context["dataset"]; } else { $_dataset_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_dataset_, "rows")) > 0)) {
            // line 4
            echo "<h2 class=\"category-title\">Wyniki wyszukiwania dla <strong>\"";
            if (isset($context["phrase"])) { $_phrase_ = $context["phrase"]; } else { $_phrase_ = null; }
            echo $_phrase_;
            echo "\"</strong></h2>
<span class=\"category-info\">Dla \"";
            // line 5
            if (isset($context["phrase"])) { $_phrase_ = $context["phrase"]; } else { $_phrase_ = null; }
            echo $_phrase_;
            echo "\" znaleziono ";
            if (isset($context["dataset"])) { $_dataset_ = $context["dataset"]; } else { $_dataset_ = null; }
            echo twig_length_filter($this->env, $this->getAttribute($_dataset_, "rows"));
            echo " wyników.</span>
<div class=\"category-options\">
\t<form class=\"form-horizontal\">
    \t<fieldset>
        \t<div class=\"control-group\">
            \t<label class=\"control-label\" for=\"sort\">Sortuj wg:</label>
                <div class=\"controls\">
                \t<select id=\"sort\" class=\"input-medium\" onchange=\"location.href=this.value\">
                    ";
            // line 13
            if (isset($context["sorting"])) { $_sorting_ = $context["sorting"]; } else { $_sorting_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_sorting_);
            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                echo " 
\t    \t\t\t\t<option value=\"";
                // line 14
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                echo $this->getAttribute($_sort_, "link");
                echo "\" ";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                if ($this->getAttribute($_sort_, "active")) {
                    echo "selected";
                }
                echo ">";
                if (isset($context["sort"])) { $_sort_ = $context["sort"]; } else { $_sort_ = null; }
                echo $this->getAttribute($_sort_, "label");
                echo "</option> 
\t    \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 16
            echo "                    </select>
                </div>
            </div>
\t\t</fieldset>
\t</form>
    <div class=\"category-view\">
    \t<span>Widok:</span>
        ";
            // line 23
            if (isset($context["viewSwitcher"])) { $_viewSwitcher_ = $context["viewSwitcher"]; } else { $_viewSwitcher_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_viewSwitcher_);
            foreach ($context['_seq'] as $context["_key"] => $context["switch"]) {
                echo " 
        <a href=\"";
                // line 24
                if (isset($context["switch"])) { $_switch_ = $context["switch"]; } else { $_switch_ = null; }
                echo $this->getAttribute($_switch_, "link");
                echo "#sort\" class=\"";
                if (isset($context["switch"])) { $_switch_ = $context["switch"]; } else { $_switch_ = null; }
                if (($this->getAttribute($_switch_, "type") == 1)) {
                    echo "list";
                } else {
                    echo "box";
                }
                echo " ";
                if (isset($context["switch"])) { $_switch_ = $context["switch"]; } else { $_switch_ = null; }
                if (($this->getAttribute($_switch_, "active") == 1)) {
                    echo "active";
                }
                echo "\"></a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['switch'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "\t</div>
    <div class=\"clearfix\"></div>
</div>
";
            // line 29
            $this->env->loadTemplate("products.tpl")->display($context);
            // line 30
            $this->env->loadTemplate("pagination.tpl")->display($context);
        } else {
            // line 32
            echo "<p class=\"empty\">";
            echo Gekosale\Translation::get("TXT_EMPTY_SEARCH_RESULTS");
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "productsearchlistbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 32,  121 => 30,  119 => 29,  114 => 26,  93 => 24,  86 => 23,  77 => 16,  60 => 14,  53 => 13,  38 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
