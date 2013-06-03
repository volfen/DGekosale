<?php

/* cartbox\index\index.tpl */
class __TwigTemplate_d49d9ad64f268f3b0d1261b81a38a037 extends Twig_Template
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
        if (isset($context["productCart"])) { $_productCart_ = $context["productCart"]; } else { $_productCart_ = null; }
        if ((twig_length_filter($this->env, $_productCart_) > 0)) {
            // line 4
            echo "<article class=\"article marginbt20\">
\t<div class=\"row-fluid row-form\">
\t\t<div class=\"basket-large\">
\t\t\t";
            // line 7
            if (isset($context["minimumordervalue"])) { $_minimumordervalue_ = $context["minimumordervalue"]; } else { $_minimumordervalue_ = null; }
            if (($_minimumordervalue_ > 0)) {
                // line 8
                echo "\t\t\t
\t\t\t";
            } else {
                // line 10
                echo "\t\t\t<div class=\"pull-right\">
\t\t\t\t<a href=\"";
                // line 11
                echo Gekosale\Template::getPathFromRoute("frontend.mainside");
                echo "\" title=\"\"><i class=\"icon icon-arrow-left-blue\"></i> ";
                echo Gekosale\Translation::get("TXT_BACK_TO_SHOPPING");
                echo "</a>
\t\t\t\t<a href=\"";
                // line 12
                echo Gekosale\Template::getPathFromRoute("frontend.checkout");
                echo "\" class=\"btn btn-large btn-primary marginlt20\">";
                echo Gekosale\Translation::get("TXT_PLACE_ORDER");
                echo "</a>
\t\t\t</div>
\t\t\t";
            }
            // line 15
            echo "\t\t\t<h1>";
            echo Gekosale\Translation::get("TXT_CART");
            echo "</h1>
\t\t\t
\t\t\t";
            // line 17
            $this->env->loadTemplate("cartbox/index/rules.tpl")->display($context);
            // line 18
            echo "\t\t\t
\t\t\t<form class=\"form-horizontal\" action=\"";
            // line 19
            echo Gekosale\Template::getPathFromRoute("frontend.checkout");
            echo "\" id=\"cart-contents\">
\t\t\t\t";
            // line 20
            $this->env->loadTemplate("cartbox/index/table.tpl")->display($context);
            // line 21
            echo "\t\t\t</form>
\t\t</div>
\t</div>
</article>
";
        } else {
            // line 26
            echo "\t";
            $this->env->loadTemplate("cartbox/index/empty.tpl")->display($context);
        }
        // line 27
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "cartbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  85 => 26,  78 => 21,  76 => 20,  72 => 19,  69 => 18,  67 => 17,  61 => 15,  53 => 12,  47 => 11,  44 => 10,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  26 => 2,);
    }
}
