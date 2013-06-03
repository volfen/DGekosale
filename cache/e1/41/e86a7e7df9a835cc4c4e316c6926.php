<?php

/* clientorderbox\index\index.tpl */
class __TwigTemplate_e141e86a7e7df9a835cc4c4e316c6926 extends Twig_Template
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
        if (isset($context["orderlist"])) { $_orderlist_ = $context["orderlist"]; } else { $_orderlist_ = null; }
        if ((twig_length_filter($this->env, $_orderlist_) > 0)) {
            // line 4
            echo "<article class=\"article\">
\t<h1>";
            // line 5
            echo Gekosale\Translation::get("TXT_CLIENT_ORDER_HISTORY");
            echo "</h1>
    <table class=\"table table-striped table-bordered history-order\">
    \t<thead>
        \t<tr class=\"thead-info\">
            \t<td colspan=\"6\">Poniżej są wyświetlone wszystkie Twoje zamówienia posortowane według daty dodania.</td>
            </tr>
            <tr>
            \t<th>";
            // line 12
            echo Gekosale\Translation::get("TXT_ORDER");
            echo "</th>
                <th>";
            // line 13
            echo Gekosale\Translation::get("TXT_DATE");
            echo "</th>
                <th>";
            // line 14
            echo Gekosale\Translation::get("TXT_SUM");
            echo "</th>
                <th>";
            // line 15
            echo Gekosale\Translation::get("TXT_PAYMENT");
            echo "</th>
                <th>";
            // line 16
            echo Gekosale\Translation::get("TXT_STATUS");
            echo "</th>
                <th>";
            // line 17
            echo Gekosale\Translation::get("TXT_OPTIONS");
            echo "</th>
\t\t\t</tr>
\t\t</thead>
        <tbody>
        \t";
            // line 21
            if (isset($context["orderlist"])) { $_orderlist_ = $context["orderlist"]; } else { $_orderlist_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_orderlist_);
            foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
                // line 22
                echo "        \t<tr>
            \t<td>";
                // line 23
                if (isset($context["other"])) { $_other_ = $context["other"]; } else { $_other_ = null; }
                echo $this->getAttribute($_other_, "idorder");
                echo "</td>
                <td>";
                // line 24
                if (isset($context["other"])) { $_other_ = $context["other"]; } else { $_other_ = null; }
                echo $this->getAttribute($_other_, "orderdate");
                echo "</td>
                <td><strong>";
                // line 25
                if (isset($context["other"])) { $_other_ = $context["other"]; } else { $_other_ = null; }
                echo $this->getAttribute($_other_, "globalprice");
                echo " ";
                if (isset($context["other"])) { $_other_ = $context["other"]; } else { $_other_ = null; }
                echo $this->getAttribute($_other_, "currencysymbol");
                echo "</strong></td>
                <td>";
                // line 26
                if (isset($context["other"])) { $_other_ = $context["other"]; } else { $_other_ = null; }
                echo $this->getAttribute($_other_, "paymentmethodname");
                echo "</td>
                <td style=\"color: #";
                // line 27
                if (isset($context["other"])) { $_other_ = $context["other"]; } else { $_other_ = null; }
                echo $this->getAttribute($_other_, "colour");
                echo ";\">";
                if (isset($context["other"])) { $_other_ = $context["other"]; } else { $_other_ = null; }
                echo $this->getAttribute($_other_, "orderstatusname");
                echo "</td>
                <td><a href=\"";
                // line 28
                if (isset($context["other"])) { $_other_ = $context["other"]; } else { $_other_ = null; }
                echo Gekosale\Template::getPathFromRoute("frontend.clientorder", array("param" => $this->getAttribute($_other_, "idorder")));
                echo "\" title=\"\">";
                echo Gekosale\Translation::get("TXT_SHOW");
                echo "</a></td>
\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 31
            echo "\t\t</tbody>
\t</table>                        
</article>
";
        } else {
            // line 35
            echo "<div class=\"alert alert-block alert-info\">
\tDo tej pory nie złożyłeś jeszcze żadnego zamówienia! Nie czekaj, zobacz naszą ofertę, a na pewno znajdziesz coś dla siebie!
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "clientorderbox\\index\\index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  123 => 31,  111 => 28,  103 => 27,  98 => 26,  90 => 25,  85 => 24,  80 => 23,  77 => 22,  72 => 21,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  35 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
