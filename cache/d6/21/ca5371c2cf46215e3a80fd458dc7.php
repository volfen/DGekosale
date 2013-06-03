<?php

/* breadcrumb.tpl */
class __TwigTemplate_d621ca5371c2cf46215e3a80fd458dc7 extends Twig_Template
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
        echo "<ul class=\"breadcrumb\" xmlns:v=\"http://rdf.data-vocabulary.org/#\">
";
        // line 2
        if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrumb_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
            // line 3
            echo "   \t";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "last")) {
                // line 4
                echo "\t<li class=\"active\" typeof=\"v:Breadcrumb\">";
                if (isset($context["crumb"])) { $_crumb_ = $context["crumb"]; } else { $_crumb_ = null; }
                echo $this->getAttribute($_crumb_, "title");
                echo "</li>
    ";
            } else {
                // line 6
                echo "    <li typeof=\"v:Breadcrumb\"><a href=\"";
                echo Gekosale\Template::getPathFromRoute("frontend.home");
                if (isset($context["crumb"])) { $_crumb_ = $context["crumb"]; } else { $_crumb_ = null; }
                echo $this->getAttribute($_crumb_, "link");
                echo "\" rel=\"v:url\" property=\"v:title\">";
                if (isset($context["crumb"])) { $_crumb_ = $context["crumb"]; } else { $_crumb_ = null; }
                echo $this->getAttribute($_crumb_, "title");
                echo "</a> <span class=\"divider\">/</span></li>
    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "breadcrumb.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 28,  129 => 26,  108 => 23,  60 => 14,  150 => 40,  141 => 30,  134 => 33,  121 => 24,  116 => 23,  98 => 17,  88 => 15,  77 => 14,  326 => 101,  323 => 100,  321 => 99,  309 => 91,  305 => 89,  301 => 87,  293 => 86,  288 => 85,  276 => 83,  273 => 82,  267 => 78,  262 => 76,  258 => 74,  256 => 73,  250 => 70,  247 => 69,  238 => 67,  218 => 66,  215 => 65,  211 => 63,  206 => 60,  179 => 58,  174 => 57,  170 => 56,  162 => 53,  155 => 48,  137 => 46,  132 => 45,  119 => 39,  94 => 20,  83 => 17,  73 => 12,  156 => 32,  146 => 30,  143 => 38,  105 => 22,  91 => 22,  80 => 18,  38 => 3,  24 => 6,  59 => 12,  55 => 11,  48 => 7,  42 => 4,  20 => 2,  30 => 4,  25 => 3,  111 => 22,  107 => 18,  103 => 16,  75 => 17,  21 => 3,  209 => 43,  191 => 40,  186 => 39,  169 => 38,  166 => 54,  159 => 35,  153 => 33,  147 => 32,  144 => 31,  140 => 28,  127 => 43,  122 => 40,  114 => 25,  109 => 24,  106 => 21,  96 => 27,  84 => 17,  58 => 9,  46 => 8,  34 => 7,  87 => 32,  70 => 13,  65 => 14,  62 => 13,  54 => 11,  51 => 11,  49 => 6,  45 => 8,  31 => 6,  23 => 2,  90 => 18,  81 => 31,  68 => 44,  63 => 10,  41 => 6,  35 => 6,  19 => 2,  33 => 4,  27 => 6,  18 => 1,  85 => 26,  78 => 48,  76 => 16,  69 => 15,  67 => 17,  53 => 8,  47 => 8,  44 => 23,  40 => 22,  37 => 8,  32 => 4,  29 => 3,  26 => 4,  173 => 39,  167 => 36,  163 => 34,  157 => 33,  154 => 42,  138 => 29,  131 => 28,  128 => 27,  115 => 24,  110 => 24,  102 => 21,  99 => 22,  93 => 16,  89 => 18,  79 => 17,  72 => 9,  64 => 15,  61 => 15,  57 => 12,  52 => 10,  43 => 6,  36 => 5,  28 => 3,  22 => 3,  17 => 1,);
    }
}
