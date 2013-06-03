<?php

/* cartbox/index/table.tpl */
class __TwigTemplate_dbb6289991d3c810c32f3f98851cd447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table class=\"table table-striped table-bordered products-table\">
\t<thead>
\t\t<tr>
\t\t\t<th style=\"width: 88px;\"></th>
\t\t\t<th>";
        // line 5
        echo Gekosale\Translation::get("TXT_PRODUCT_NAME");
        echo "</th>
\t\t\t<th style=\"width: 80px\">";
        // line 6
        echo Gekosale\Translation::get("TXT_PRICE");
        echo "</th>
\t\t\t<th style=\"width: 85px\">";
        // line 7
        echo Gekosale\Translation::get("TXT_PRODUCT_QUANTITY");
        echo "</th>
\t\t\t<th style=\"width: 100px\">";
        // line 8
        echo Gekosale\Translation::get("TXT_PRODUCT_SUBTOTAL");
        echo "</th>
\t\t\t<th></th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 13
        $this->env->loadTemplate("cartbox/index/products.tpl")->display($context);
        // line 14
        echo "\t</tbody>
\t<tfoot>
\t\t";
        // line 16
        $this->env->loadTemplate("cartbox/index/methods.tpl")->display($context);
        // line 17
        echo "\t\t";
        $this->env->loadTemplate("cartbox/index/discounts.tpl")->display($context);
        // line 18
        echo "\t\t";
        $this->env->loadTemplate("cartbox/index/summary.tpl")->display($context);
        // line 19
        echo "\t</tfoot>
</table>

";
        // line 22
        if (isset($context["minimumordervalue"])) { $_minimumordervalue_ = $context["minimumordervalue"]; } else { $_minimumordervalue_ = null; }
        if (($_minimumordervalue_ > 0)) {
            // line 23
            echo "<div class=\"alert alert-block alert-error\">
\t<h4>
\t\t<strong>Minimalna wartość zamówienia nie została osiągnięta</strong><br />
\t\tAby złożyć zamówienie, musisz jeszcze dodać do koszyka produkty o wartości <strong>";
            // line 26
            if (isset($context["minimumordervalue"])) { $_minimumordervalue_ = $context["minimumordervalue"]; } else { $_minimumordervalue_ = null; }
            echo Gekosale\Template::priceFormat($_minimumordervalue_);
            echo "</strong>
\t</h4>
</div>
";
        } else {
            // line 30
            echo "<div class=\"pull-right\">
\t<a href=\"";
            // line 31
            echo Gekosale\Template::getPathFromRoute("frontend.mainside");
            echo "\" title=\"\"><i class=\"icon icon-arrow-left-blue\"></i> ";
            echo Gekosale\Translation::get("TXT_BACK_TO_SHOPPING");
            echo "</a>
\t<a href=\"";
            // line 32
            echo Gekosale\Template::getPathFromRoute("frontend.checkout");
            echo "\" class=\"btn btn-large btn-primary marginlt20\">";
            echo Gekosale\Translation::get("TXT_PLACE_ORDER");
            echo "</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "cartbox/index/table.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  81 => 31,  78 => 30,  70 => 26,  65 => 23,  62 => 22,  57 => 19,  54 => 18,  51 => 17,  49 => 16,  45 => 14,  43 => 13,  35 => 8,  31 => 7,  27 => 6,  23 => 5,  17 => 1,);
    }
}
