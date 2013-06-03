<?php

/* productsincategorybox\index\index.tpl */
class __TwigTemplate_edc58dd51eba4b47f7b6dc6c4481ff60 extends Twig_Template
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
        if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
        echo $this->getAttribute($_box_, "heading");
        echo "</h2>
";
        // line 4
        if (isset($context["currentCategory"])) { $_currentCategory_ = $context["currentCategory"]; } else { $_currentCategory_ = null; }
        if (((($this->getAttribute($_currentCategory_, "description") != "") || ($this->getAttribute($_currentCategory_, "shortdescription") != "")) || ($this->getAttribute($_currentCategory_, "photo") != ""))) {
            // line 5
            echo "<div class=\"category-description\" ";
            if (isset($context["currentCategory"])) { $_currentCategory_ = $context["currentCategory"]; } else { $_currentCategory_ = null; }
            if (($this->getAttribute($_currentCategory_, "photo") != "")) {
                echo "style=\"background: transparent url('";
                if (isset($context["currentCategory"])) { $_currentCategory_ = $context["currentCategory"]; } else { $_currentCategory_ = null; }
                echo $this->getAttribute($_currentCategory_, "photo");
                echo "') no-repeat top right;\"";
            }
            echo ">
\t<div class=\"caption\">
\t";
            // line 7
            if (isset($context["currentCategory"])) { $_currentCategory_ = $context["currentCategory"]; } else { $_currentCategory_ = null; }
            if (($this->getAttribute($_currentCategory_, "description") != "")) {
                // line 8
                echo "\t\t";
                if (isset($context["currentCategory"])) { $_currentCategory_ = $context["currentCategory"]; } else { $_currentCategory_ = null; }
                echo $this->getAttribute($_currentCategory_, "description");
                echo "
\t";
            } else {
                // line 10
                echo "\t\t";
                if (isset($context["currentCategory"])) { $_currentCategory_ = $context["currentCategory"]; } else { $_currentCategory_ = null; }
                echo $this->getAttribute($_currentCategory_, "shortdescription");
                echo "
\t";
            }
            // line 12
            echo "\t</div>
</div>
";
        }
        // line 15
        if (isset($context["subcategories"])) { $_subcategories_ = $context["subcategories"]; } else { $_subcategories_ = null; }
        if ((twig_length_filter($this->env, $_subcategories_) > 0)) {
            // line 16
            echo "<div class=\"row-fluid\">
\t";
            // line 17
            if (isset($context["subcategories"])) { $_subcategories_ = $context["subcategories"]; } else { $_subcategories_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_subcategories_);
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 18
                echo "\t<div class=\"span3 item\">
\t    <ul class=\"nav nav-pills nav-stacked\">
\t    \t";
                // line 20
                if (isset($context["block"])) { $_block_ = $context["block"]; } else { $_block_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_block_);
                foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
                    // line 21
                    echo "\t        <li><a href=\"";
                    if (isset($context["subcategory"])) { $_subcategory_ = $context["subcategory"]; } else { $_subcategory_ = null; }
                    echo Gekosale\Template::getPathFromRoute("frontend.categorylist", array("param" => $this->getAttribute($_subcategory_, "seo")));
                    echo "\" title=\"";
                    if (isset($context["subcategory"])) { $_subcategory_ = $context["subcategory"]; } else { $_subcategory_ = null; }
                    echo $this->getAttribute($_subcategory_, "name");
                    echo "\">";
                    if (isset($context["subcategory"])) { $_subcategory_ = $context["subcategory"]; } else { $_subcategory_ = null; }
                    echo $this->getAttribute($_subcategory_, "name");
                    echo "</a></li>
\t        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 23
                echo "\t\t</ul>
    </div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "</div>
";
        }
        // line 28
        echo "                                    
<div class=\"category-options\">
\t<form class=\"form-horizontal\">
    \t<fieldset>
        \t<div class=\"control-group\">
            \t<label class=\"control-label\" for=\"sort\">Sortuj wg:</label>
                <div class=\"controls\">
                \t<select id=\"sort\" class=\"input-medium\" onchange=\"location.href=this.value\">
                    ";
        // line 36
        if (isset($context["sorting"])) { $_sorting_ = $context["sorting"]; } else { $_sorting_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_sorting_);
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            echo " 
\t    \t\t\t\t<option value=\"";
            // line 37
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
        // line 39
        echo "                    </select>
                </div>
            </div>
\t\t</fieldset>
\t</form>
    <div class=\"category-view\">
    \t<span>Widok:</span>
    \t";
        // line 46
        if (isset($context["viewSwitcher"])) { $_viewSwitcher_ = $context["viewSwitcher"]; } else { $_viewSwitcher_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_viewSwitcher_);
        foreach ($context['_seq'] as $context["_key"] => $context["switch"]) {
            echo " 
        <a href=\"";
            // line 47
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
        // line 49
        echo "\t</div>
    <div class=\"clearfix\"></div>
</div>
";
        // line 52
        $this->env->loadTemplate("pagination.tpl")->display($context);
        echo " 
";
        // line 53
        $this->env->loadTemplate("products.tpl")->display($context);
        // line 54
        $this->env->loadTemplate("pagination.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "productsincategorybox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 54,  200 => 53,  196 => 52,  191 => 49,  170 => 47,  163 => 46,  154 => 39,  120 => 28,  116 => 26,  108 => 23,  92 => 21,  87 => 20,  83 => 18,  78 => 17,  75 => 16,  67 => 12,  60 => 10,  53 => 8,  50 => 7,  35 => 4,  173 => 50,  164 => 44,  148 => 42,  138 => 41,  135 => 40,  130 => 36,  125 => 36,  122 => 35,  118 => 33,  106 => 27,  80 => 24,  77 => 23,  72 => 15,  66 => 20,  58 => 18,  48 => 12,  43 => 11,  140 => 25,  137 => 37,  127 => 21,  103 => 19,  98 => 18,  93 => 17,  90 => 25,  86 => 15,  82 => 13,  71 => 12,  63 => 19,  54 => 10,  49 => 9,  44 => 8,  41 => 7,  38 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
