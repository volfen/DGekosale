<?php

/* cartbox/index/discounts.tpl */
class __TwigTemplate_2833ba31a7b292acd1cf57bc188fe783 extends Twig_Template
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
        if (isset($context["summary"])) { $_summary_ = $context["summary"]; } else { $_summary_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_summary_);
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 2
            echo "<tr>
\t<td colspan=\"4\" class=\"alignright\">";
            // line 3
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo $this->getAttribute($_s_, "label");
            echo "</td>
\t<td colspan=\"2\" class=\"center\">";
            // line 4
            if (isset($context["s"])) { $_s_ = $context["s"]; } else { $_s_ = null; }
            echo $this->getAttribute($_s_, "value");
            echo "</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "cartbox/index/discounts.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 3,  111 => 19,  107 => 18,  103 => 16,  75 => 14,  21 => 3,  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 37,  159 => 35,  153 => 33,  147 => 32,  144 => 31,  140 => 29,  127 => 27,  122 => 26,  114 => 25,  109 => 24,  106 => 23,  96 => 21,  84 => 17,  58 => 11,  46 => 8,  34 => 7,  87 => 32,  70 => 13,  65 => 11,  62 => 10,  54 => 18,  51 => 17,  49 => 16,  45 => 14,  31 => 6,  23 => 5,  90 => 17,  81 => 31,  68 => 11,  63 => 10,  41 => 7,  35 => 8,  19 => 2,  33 => 2,  27 => 6,  18 => 1,  85 => 26,  78 => 30,  76 => 20,  69 => 15,  67 => 17,  53 => 12,  47 => 9,  44 => 10,  40 => 8,  37 => 7,  32 => 5,  29 => 4,  26 => 5,  173 => 37,  167 => 36,  163 => 34,  157 => 33,  154 => 32,  138 => 29,  131 => 28,  128 => 27,  115 => 25,  110 => 24,  102 => 23,  99 => 22,  93 => 21,  89 => 18,  79 => 17,  72 => 19,  64 => 15,  61 => 15,  57 => 19,  52 => 9,  43 => 7,  36 => 6,  28 => 5,  22 => 2,  17 => 1,);
    }
}
