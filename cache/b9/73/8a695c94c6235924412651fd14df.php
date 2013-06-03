<?php

/* layerednavigationbox\index\index.tpl */
class __TwigTemplate_b9738a695c94c6235924412651fd14df extends Twig_Template
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
        echo "<div class=\"vertical-block category-filter\">
\t<div class=\"block-head\">";
        // line 4
        if (isset($context["box"])) { $_box_ = $context["box"]; } else { $_box_ = null; }
        echo $this->getAttribute($_box_, "heading");
        echo "</div>
    <div class=\"block-content\">
    \t<form class=\"form\" method=\"post\" action=\"\">
    \t\t<input type=\"hidden\" name=\"layered_submitted\" value=\"1\" />
\t\t\t<fieldset>
    \t\t\t<legend>Cena:</legend>
\t\t        <div class=\"control-group\">
\t\t        \t<label class=\"control-label\" style=\"display: inline-block;\">Od:</label> <input style=\"display: inline-block;\" class=\"input-mini2\" type=\"text\" name=\"priceFrom\" value=\"";
        // line 11
        if (isset($context["priceFrom"])) { $_priceFrom_ = $context["priceFrom"]; } else { $_priceFrom_ = null; }
        echo $_priceFrom_;
        echo "\">&nbsp;&nbsp;
\t\t        \t<label class=\"control-label\" style=\"display: inline-block;\">Do:</label> <input style=\"display: inline-block;\" class=\"input-mini2\" type=\"text\" name=\"priceTo\" value=\"";
        // line 12
        if (isset($context["priceTo"])) { $_priceTo_ = $context["priceTo"]; } else { $_priceTo_ = null; }
        echo $_priceTo_;
        echo "\">
\t\t        </div>
\t\t        <div class=\"form-actions form-actions-clean pull-right\">
\t\t        \t<button class=\"btn btn-primary\">Pokaż</button>
\t\t        </div>
\t\t\t</fieldset>
\t\t\t";
        // line 18
        if (isset($context["groups"])) { $_groups_ = $context["groups"]; } else { $_groups_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_groups_);
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 19
            echo "        \t<fieldset>
\t\t\t\t<legend>";
            // line 20
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo $this->getAttribute($_group_, "name");
            echo ":</legend>
                <div class=\"controls checkbox-list\">
                \t";
            // line 22
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "attributes"));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 23
                echo "                \t<label class=\"checkbox\">
                    \t<input class=\"active\" type=\"checkbox\" name=\"attribute[]\" value=\"";
                // line 24
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                echo $this->getAttribute($_attribute_, "id");
                echo "\" ";
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                if ($this->getAttribute($_attribute_, "active")) {
                    echo "checked=\"checked\"";
                }
                echo ">
                    \t<a href=\"";
                // line 25
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                echo $this->getAttribute($_attribute_, "link");
                echo "\" title=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "\">";
                if (isset($context["attribute"])) { $_attribute_ = $context["attribute"]; } else { $_attribute_ = null; }
                echo $this->getAttribute($_attribute_, "name");
                echo "</a>
                    </label>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 27
            echo "                  
\t\t\t\t</div>
\t\t\t\t<div class=\"form-actions form-actions-clean pull-right\">
\t\t        \t<button class=\"btn btn-primary\">Pokaż</button>
\t\t        </div>
\t\t\t</fieldset>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "  
\t\t\t
        \t";
        // line 35
        if (isset($context["producers"])) { $_producers_ = $context["producers"]; } else { $_producers_ = null; }
        if ((twig_length_filter($this->env, $_producers_) > 0)) {
            // line 36
            echo "        \t<fieldset>
\t\t\t\t<legend>Producenci:</legend>
                <div class=\"controls checkbox-list\">
                \t";
            // line 39
            if (isset($context["producers"])) { $_producers_ = $context["producers"]; } else { $_producers_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_producers_);
            foreach ($context['_seq'] as $context["_key"] => $context["producer"]) {
                // line 40
                echo "                \t<label class=\"checkbox\">
                    \t<input class=\"active\" type=\"checkbox\" name=\"producer[]\" value=\"";
                // line 41
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "id");
                echo "\" ";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                if ($this->getAttribute($_producer_, "active")) {
                    echo "checked=\"checked\"";
                }
                echo ">
                    \t<a href=\"";
                // line 42
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "link");
                echo "\" title=\"";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "\">";
                if (isset($context["producer"])) { $_producer_ = $context["producer"]; } else { $_producer_ = null; }
                echo $this->getAttribute($_producer_, "name");
                echo "</a>
                    </label>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producer'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 44
            echo "                  
\t\t\t\t</div>
\t\t\t\t<div class=\"form-actions form-actions-clean pull-right\">
\t\t        \t<button class=\"btn btn-primary\">Pokaż</button>
\t\t        </div>
\t\t\t</fieldset>
\t\t\t";
        }
        // line 50
        echo "               
\t\t</form>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "layerednavigationbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 50,  164 => 44,  148 => 42,  138 => 41,  135 => 40,  130 => 39,  125 => 36,  122 => 35,  118 => 33,  106 => 27,  90 => 25,  80 => 24,  77 => 23,  72 => 22,  66 => 20,  63 => 19,  58 => 18,  48 => 12,  43 => 11,  32 => 4,  29 => 3,  26 => 2,);
    }
}
