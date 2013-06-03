<?php

/* producerlistbox\index\index.tpl */
class __TwigTemplate_f3da940666275af76ef4ed54e3fca1a3 extends Twig_Template
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
        echo "<h2 class=\"category-title\">";
        if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
        echo $this->getAttribute($_producer_, "name");
        echo "</h2>
";
        // line 4
        if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
        if ((($this->getAttribute($_producer_, "photo") != "") || ($this->getAttribute($_producer_, "description") != ""))) {
            // line 5
            echo "<div class=\"category-description\">
\t";
            // line 6
            if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
            if (($this->getAttribute($_producer_, "photo") != "")) {
                // line 7
                echo "\t<img style=\"float: right;right: 0;position: absolute;\" src=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "photo");
                echo "\" alt=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "\" title=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "\" />
\t";
            }
            // line 9
            echo "\t";
            if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
            if (($this->getAttribute($_producer_, "description") != "")) {
                // line 10
                echo "\t<div class=\"caption\">
\t";
                // line 11
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "description");
                echo "
\t</div>
\t";
            }
            // line 14
            echo "</div>
";
        }
        // line 16
        if (isset($context["dataset"])) { $_dataset_ = $context["dataset"]; } else { $_dataset_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_dataset_, "rows")) > 0)) {
            // line 17
            echo "<div class=\"category-options\">
\t<form class=\"form-horizontal\">
    \t<fieldset>
        \t<div class=\"control-group\">
            \t<label class=\"control-label\" for=\"sort\">Sortuj wg:</label>
                <div class=\"controls\">
                \t<select id=\"sort\" class=\"input-medium\" onchange=\"location.href=this.value\">
                    ";
            // line 24
            if (isset($context["sorting"])) { $_sorting_ = $context["sorting"]; } else { $_sorting_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_sorting_);
            foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
                echo " 
\t    \t\t\t\t<option value=\"";
                // line 25
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
            // line 27
            echo "                    </select>
                </div>
            </div>
\t\t</fieldset>
\t</form>
    <div class=\"category-view\">
    \t<span>Widok:</span>
    \t";
            // line 34
            if (isset($context["viewSwitcher"])) { $_viewSwitcher_ = $context["viewSwitcher"]; } else { $_viewSwitcher_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_viewSwitcher_);
            foreach ($context['_seq'] as $context["_key"] => $context["switch"]) {
                echo " 
        <a href=\"";
                // line 35
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
            // line 37
            echo "\t</div>
    <div class=\"clearfix\"></div>
</div>
";
            // line 40
            $this->env->loadTemplate("pagination.tpl")->display($context);
            echo " 
";
            // line 41
            $this->env->loadTemplate("products.tpl")->display($context);
            // line 42
            $this->env->loadTemplate("pagination.tpl")->display($context);
        } else {
            // line 44
            echo "<div class=\"alert alert-block alert-error\">
";
            // line 45
            echo Gekosale\Translation::get("ERR_EMPTY_PRODUCT_LIST");
            // line 46
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "producerlistbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 46,  165 => 45,  162 => 44,  159 => 42,  157 => 41,  153 => 40,  148 => 37,  127 => 35,  120 => 34,  111 => 27,  94 => 25,  87 => 24,  78 => 17,  75 => 16,  71 => 14,  64 => 11,  61 => 10,  44 => 7,  38 => 5,  35 => 4,  144 => 28,  139 => 25,  119 => 24,  112 => 23,  109 => 22,  105 => 21,  98 => 18,  90 => 17,  81 => 16,  76 => 15,  73 => 14,  68 => 11,  57 => 9,  50 => 7,  41 => 6,  36 => 5,  33 => 4,  29 => 3,  26 => 2,);
    }
}
