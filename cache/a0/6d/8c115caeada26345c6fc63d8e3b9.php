<?php

/* forms.tpl */
class __TwigTemplate_a06d8c115caeada26345c6fc63d8e3b9 extends Twig_Template
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
        // line 12
        echo "
";
        // line 23
        echo "
";
        // line 35
        echo "
";
        // line 46
        echo "
";
        // line 62
        echo "
";
        // line 78
        echo "
";
    }

    // line 1
    public function getinput($field = null, $class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $field,
            "class" => $class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "<div class=\"control-group ";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "error";
            }
            echo "\">
\t<label class=\"control-label ";
            // line 4
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($this->getAttribute($_field_, "attributes"), "required") == 1)) {
                echo "required";
            }
            echo "\" for=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\">";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "label"), "html", null, true);
            echo "</label>
    <div class=\"controls\">
    \t<input type=\"text\" name=\"";
            // line 6
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "name"), "html", null, true);
            echo "\" class=\"";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\" id=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "value"), "html", null, true);
            echo "\" />
        ";
            // line 7
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "<span class=\"help-block pull-right\">";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_field_, "errors")), "html", null, true);
                echo "</span>";
            }
            // line 8
            echo "\t</div>
</div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 13
    public function gethidden($field = null, $class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $field,
            "class" => $class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "<div class=\"control-group ";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "error";
            }
            echo "\">
    <div class=\"controls\">
\t<input type=\"hidden\" name=\"";
            // line 17
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "name"), "html", null, true);
            echo "\" class=\"";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\" id=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "value"), "html", null, true);
            echo "\" />
\t\t";
            // line 18
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "<span class=\"help-block pull-left\">";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_field_, "errors")), "html", null, true);
                echo "</span><br />";
            }
            // line 19
            echo "\t</div>
</div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 24
    public function getpassword($field = null, $class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $field,
            "class" => $class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 26
            echo "<div class=\"control-group ";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "error";
            }
            echo "\">
\t<label class=\"control-label ";
            // line 27
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($this->getAttribute($_field_, "attributes"), "required") == 1)) {
                echo "required";
            }
            echo "\" for=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\">";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "label"), "html", null, true);
            echo "</label>
    <div class=\"controls\">
    \t<input autocomplete=\"off\" type=\"password\" name=\"";
            // line 29
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "name"), "html", null, true);
            echo "\" class=\"";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\" id=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\" value=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "value"), "html", null, true);
            echo "\" />
        ";
            // line 30
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "<span class=\"help-block pull-right\">";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_field_, "errors")), "html", null, true);
                echo "</span>";
            }
            // line 31
            echo "\t</div>
</div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 36
    public function getcheckbox($field = null, $class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $field,
            "class" => $class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "<div class=\"control-group ";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "error";
            }
            echo "\">
\t<label class=\"checkbox\">
\t\t<input type=\"checkbox\" name=\"";
            // line 40
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "name"), "html", null, true);
            echo "\" value=\"1\" id=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\" ";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($_field_, "value") == 1)) {
                echo "checked=\"checked\"";
            }
            echo " /> ";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo $this->getAttribute($this->getAttribute($_field_, "attributes"), "label");
            echo "
\t\t";
            // line 41
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "<span class=\"help-block pull-right\">";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_field_, "errors")), "html", null, true);
                echo "</span>";
            }
            // line 42
            echo "\t</label>
</div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 47
    public function getselect($field = null, $class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $field,
            "class" => $class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 49
            echo "<div class=\"control-group ";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "error";
            }
            echo "\">
\t<label class=\"control-label ";
            // line 50
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (($this->getAttribute($this->getAttribute($_field_, "attributes"), "required") == 1)) {
                echo "required";
            }
            echo "\" for=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\">";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "label"), "html", null, true);
            echo "</label>
\t<div class=\"controls\">
\t\t<select name=\"";
            // line 52
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "name"), "html", null, true);
            echo "\" id=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\">
\t\t\t";
            // line 53
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_field_, "attributes"), "options"));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 54
                echo "\t\t\t<option value=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" ";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if (($_key_ == $this->getAttribute($_field_, "value"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $_option_, "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 56
            echo "\t\t</select>
\t\t";
            // line 57
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "<span class=\"help-block pull-right\">";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_field_, "errors")), "html", null, true);
                echo "</span>";
            }
            // line 58
            echo "\t</div>
</div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 63
    public function getradio($field = null, $class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $field,
            "class" => $class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "<div class=\"control-group\">
\t<label class=\"control-label\" for=\"";
            // line 66
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\">";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "label"), "html", null, true);
            echo "</label>
\t<div class=\"controls\">
\t";
            // line 68
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_field_, "attributes"), "options"));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 69
                echo "\t\t<label class=\"radio inline\">
\t\t\t<input type=\"radio\"\tid=\"";
                // line 70
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
                echo "_";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" name=\"";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "name"), "html", null, true);
                echo "\" value=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" ";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                if (($_key_ == $this->getAttribute($_field_, "value"))) {
                    echo "checked=\"checked\"";
                }
                echo "> ";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $_option_, "html", null, true);
                echo "
\t\t</label>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 73
            echo "\t";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "<span class=\"help-block pull-right\">";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_field_, "errors")), "html", null, true);
                echo "</span>";
            }
            // line 74
            echo "\t</div>
</div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    // line 79
    public function gettextarea($field = null, $class = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $field,
            "class" => $class,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 81
            echo "<div class=\"control-group ";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "error";
            }
            echo "\">
\t<label class=\"control-label\" for=\"";
            // line 82
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\">";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "label"), "html", null, true);
            echo "</label>
   \t<div class=\"controls\">
       \t<textarea name=\"";
            // line 84
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "name"), "html", null, true);
            echo "\" id=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "id"), "html", null, true);
            echo "\" class=\"";
            if (isset($context["class"])) { $_class_ = $context["class"]; } else { $_class_ = null; }
            echo twig_escape_filter($this->env, $_class_, "html", null, true);
            echo "\" rows=\"6\">";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_field_, "attributes"), "value"), "html", null, true);
            echo "</textarea>
       \t ";
            // line 85
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if (twig_length_filter($this->env, $this->getAttribute($_field_, "errors"))) {
                echo "<span class=\"help-block pull-right\">";
                if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($_field_, "errors")), "html", null, true);
                echo "</span>";
            }
            // line 86
            echo "\t</div>
</div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "forms.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 86,  504 => 85,  490 => 84,  481 => 82,  473 => 81,  461 => 79,  448 => 74,  439 => 73,  411 => 70,  408 => 69,  403 => 68,  394 => 66,  391 => 65,  379 => 63,  366 => 58,  358 => 57,  355 => 56,  336 => 54,  331 => 53,  323 => 52,  309 => 50,  301 => 49,  289 => 47,  276 => 42,  268 => 41,  252 => 40,  243 => 38,  231 => 36,  218 => 31,  210 => 30,  196 => 29,  182 => 27,  174 => 26,  162 => 24,  149 => 19,  141 => 18,  127 => 17,  106 => 13,  85 => 7,  71 => 6,  57 => 4,  49 => 3,  37 => 1,  32 => 78,  29 => 62,  26 => 46,  20 => 23,  17 => 12,  136 => 49,  118 => 15,  111 => 32,  105 => 31,  99 => 30,  93 => 8,  82 => 22,  68 => 21,  58 => 13,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  23 => 35,);
    }
}
