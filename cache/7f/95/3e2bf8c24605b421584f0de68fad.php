<?php

/* cartbox/index/rules.tpl */
class __TwigTemplate_7f953e2bf8c24605b421584f0de68fad extends Twig_Template
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
        if (array_key_exists("checkRulesCart", $context)) {
            // line 2
            echo "<div class=\"alert alert-block alert-info\">
\t";
            // line 3
            if (isset($context["checkRulesCart"])) { $_checkRulesCart_ = $context["checkRulesCart"]; } else { $_checkRulesCart_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_checkRulesCart_);
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
                if (($this->getAttribute($_rule_, "type") == 0)) {
                    // line 4
                    echo "\t<h4>
\t\t";
                    // line 5
                    if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
                    if ((($this->getAttribute($_rule_, "name") != "") && ($this->getAttribute($_rule_, "description") != ""))) {
                        // line 6
                        echo "\t\t<strong>";
                        if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
                        echo $this->getAttribute($_rule_, "name");
                        echo "</strong><br />
\t\t";
                        // line 7
                        if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
                        echo $this->getAttribute($_rule_, "description");
                        echo "
\t\t";
                    } else {
                        // line 9
                        echo "\t\t<strong>";
                        echo Gekosale\Translation::get("TXT_MEET_CONDITION_FOR_DISCOUNT");
                        echo " ";
                        if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
                        if ($this->getAttribute($_rule_, "discount", array(), "any", true, true)) {
                            if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
                            echo $this->getAttribute($_rule_, "discount");
                        }
                        echo " ";
                        if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
                        if (($this->getAttribute($_rule_, "freeshipping") == 1)) {
                            echo Gekosale\Translation::get("TXT_RULESCART_GET_FREE_SHIPPING");
                        }
                        echo "</strong> 
\t\t";
                        // line 10
                        if (isset($context["rule"])) { $_rule_ = $context["rule"]; } else { $_rule_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_rule_, "conditions"));
                        foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
                            // line 11
                            echo "\t\t<br />";
                            if (isset($context["condition"])) { $_condition_ = $context["condition"]; } else { $_condition_ = null; }
                            echo $_condition_;
                            echo "
\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
                        $context = array_merge($_parent, array_intersect_key($context, $_parent));
                        // line 13
                        echo "\t\t";
                    }
                    // line 14
                    echo "
\t</h4>
\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 17
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "cartbox/index/rules.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  81 => 14,  68 => 11,  63 => 10,  41 => 7,  35 => 6,  19 => 2,  33 => 2,  27 => 2,  18 => 1,  85 => 26,  78 => 13,  76 => 20,  69 => 18,  67 => 17,  53 => 12,  47 => 9,  44 => 10,  40 => 8,  37 => 7,  32 => 5,  29 => 4,  26 => 2,  173 => 37,  167 => 36,  163 => 34,  157 => 33,  154 => 32,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 21,  89 => 27,  79 => 17,  72 => 19,  64 => 15,  61 => 15,  57 => 13,  52 => 12,  43 => 7,  36 => 6,  28 => 5,  22 => 3,  17 => 1,);
    }
}
