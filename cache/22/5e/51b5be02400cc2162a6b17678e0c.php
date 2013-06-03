<?php

/* categoriesbox\index\index.tpl */
class __TwigTemplate_225e51b5be02400cc2162a6b17678e0c extends Twig_Template
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
            if (isset($context["showall"])) { $_showall_ = $context["showall"]; } else { $_showall_ = null; }
            if (($_showall_ == 1)) {
                // line 7
                echo "<nav class=\"category-nav well\">
\t";
                // line 8
                if (isset($context["categories"])) { $_categories_ = $context["categories"]; } else { $_categories_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_categories_);
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 9
                    echo "\t";
                    if (isset($context["hideempty"])) { $_hideempty_ = $context["hideempty"]; } else { $_hideempty_ = null; }
                    if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                    if ((($_hideempty_ == 0) || (($_hideempty_ == 1) && ($this->getAttribute($_category_, "totalproducts") > 0)))) {
                        // line 10
                        echo "\t<a href=\"";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "link");
                        echo "\" title=\"";
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "label");
                        echo "\">
\t\t<h1 ";
                        // line 11
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
                        if (twig_in_filter($this->getAttribute($_category_, "id"), $_path_)) {
                            echo "class=\"active\"";
                        }
                        echo ">
\t\t\t";
                        // line 12
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        echo $this->getAttribute($_category_, "label");
                        echo " ";
                        if (isset($context["showcount"])) { $_showcount_ = $context["showcount"]; } else { $_showcount_ = null; }
                        if (($_showcount_ == 1)) {
                            echo "(";
                            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                            echo $this->getAttribute($_category_, "totalproducts");
                            echo ")";
                        }
                        // line 13
                        echo "\t\t</h1>
\t</a>
\t";
                        // line 15
                        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                        if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
                        if (((twig_length_filter($this->env, $this->getAttribute($_category_, "children")) > 0) && twig_in_filter($this->getAttribute($_category_, "id"), $_path_))) {
                            // line 16
                            echo "    <ul class=\"nav nav-pills nav-stacked\">
    \t";
                            // line 17
                            if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_category_, "children"));
                            foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
                                // line 18
                                echo "    \t";
                                if (isset($context["hideempty"])) { $_hideempty_ = $context["hideempty"]; } else { $_hideempty_ = null; }
                                if (isset($context["subcategory"])) { $_subcategory_ = $context["subcategory"]; } else { $_subcategory_ = null; }
                                if ((($_hideempty_ == 0) || (($_hideempty_ == 1) && ($this->getAttribute($_subcategory_, "totalproducts") > 0)))) {
                                    // line 19
                                    echo "\t\t<li ";
                                    if (isset($context["subcategory"])) { $_subcategory_ = $context["subcategory"]; } else { $_subcategory_ = null; }
                                    if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
                                    if (twig_in_filter($this->getAttribute($_subcategory_, "id"), $_path_)) {
                                        echo "class=\"active\"";
                                    }
                                    echo "><a href=\"";
                                    if (isset($context["subcategory"])) { $_subcategory_ = $context["subcategory"]; } else { $_subcategory_ = null; }
                                    echo $this->getAttribute($_subcategory_, "link");
                                    echo "\">";
                                    if (isset($context["subcategory"])) { $_subcategory_ = $context["subcategory"]; } else { $_subcategory_ = null; }
                                    echo $this->getAttribute($_subcategory_, "label");
                                    echo " ";
                                    if (isset($context["showcount"])) { $_showcount_ = $context["showcount"]; } else { $_showcount_ = null; }
                                    if (($_showcount_ == 1)) {
                                        echo "(";
                                        if (isset($context["subcategory"])) { $_subcategory_ = $context["subcategory"]; } else { $_subcategory_ = null; }
                                        echo $this->getAttribute($_subcategory_, "totalproducts");
                                        echo ")";
                                    }
                                    echo "</a></li>
\t\t";
                                }
                                // line 21
                                echo "\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
                            $context = array_merge($_parent, array_intersect_key($context, $_parent));
                            echo "   
    </ul>
    ";
                        }
                        // line 24
                        echo "    ";
                    }
                    // line 25
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                echo "   
</nav>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "categoriesbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 25,  137 => 24,  127 => 21,  103 => 19,  98 => 18,  93 => 17,  90 => 16,  86 => 15,  82 => 13,  71 => 12,  63 => 11,  54 => 10,  49 => 9,  44 => 8,  41 => 7,  38 => 6,  32 => 4,  29 => 3,  26 => 2,);
    }
}
