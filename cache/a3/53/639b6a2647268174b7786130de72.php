<?php

/* pagination.tpl */
class __TwigTemplate_a353639b6a2647268174b7786130de72 extends Twig_Template
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
        if (isset($context["pagination"])) { $_pagination_ = $context["pagination"]; } else { $_pagination_ = null; }
        if (isset($context["dataset"])) { $_dataset_ = $context["dataset"]; } else { $_dataset_ = null; }
        if ((($_pagination_ == 1) && (twig_length_filter($this->env, $this->getAttribute($_dataset_, "totalPages")) > 1))) {
            // line 2
            echo "<div class=\"pagination pagination-centered\">
\t<ul>
\t\t";
            // line 4
            if (isset($context["paginationLinks"])) { $_paginationLinks_ = $context["paginationLinks"]; } else { $_paginationLinks_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_paginationLinks_);
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 5
                echo "\t\t\t<li class=\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo $this->getAttribute($_link_, "class");
                echo "\"><a href=\"";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo $this->getAttribute($_link_, "link");
                echo "\">";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                echo $this->getAttribute($_link_, "label");
                echo "</a></li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 7
            echo "\t</ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  30 => 5,  21 => 2,  167 => 39,  157 => 34,  150 => 32,  105 => 24,  102 => 23,  91 => 22,  76 => 16,  57 => 13,  51 => 11,  47 => 10,  25 => 4,  20 => 2,  17 => 1,  269 => 78,  267 => 77,  263 => 76,  258 => 73,  237 => 71,  230 => 70,  221 => 63,  204 => 61,  197 => 60,  187 => 52,  183 => 50,  177 => 47,  174 => 46,  169 => 45,  163 => 42,  160 => 41,  156 => 40,  151 => 37,  145 => 35,  134 => 28,  123 => 29,  120 => 28,  116 => 26,  108 => 23,  92 => 21,  87 => 20,  83 => 18,  78 => 17,  75 => 16,  67 => 12,  60 => 10,  53 => 8,  50 => 7,  35 => 4,  173 => 50,  164 => 44,  148 => 42,  138 => 41,  135 => 40,  130 => 31,  125 => 36,  122 => 35,  118 => 33,  106 => 27,  80 => 18,  77 => 23,  72 => 15,  66 => 20,  58 => 18,  48 => 12,  43 => 11,  140 => 30,  137 => 29,  127 => 26,  103 => 19,  98 => 18,  93 => 17,  90 => 25,  86 => 15,  82 => 13,  71 => 12,  63 => 14,  54 => 10,  49 => 9,  44 => 8,  41 => 8,  38 => 7,  32 => 4,  29 => 5,  26 => 2,);
    }
}
