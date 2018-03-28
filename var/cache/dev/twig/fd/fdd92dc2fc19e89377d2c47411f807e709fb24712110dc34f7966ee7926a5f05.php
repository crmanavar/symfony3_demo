<?php

/* faculty/index.html.twig */
class __TwigTemplate_642d14da02a14a633119e61e25b4e88d51aeadca7d7c0fd6e85eb5276b106ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "faculty/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "faculty/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "faculty/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Faculty List";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-md-12\">
        <h1 class=\"page-header\">
            <i class=\"fa fa-user fa-fw\"></i>Faculty
            <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faculty_new");
        echo "\"><button class=\"btn btn-primary btn-sm pull-right\" >Add New Faculty</button></a>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 19
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
</div>
<div class=\"col-lg-12 sp-list\">
    <div class=\"row\" id=\"scroll\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                List Faculty
            </div>
            <!-- /.panel-heading -->
            <div class=\"panel-body\">
                <div class=\"scroll\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-responsive\">
                            <thead>
                                <tr>
                                    <th class=\"text-center\">No</th>
                                    <th class=\"text-center\">Name</th>
                                    <th class=\"text-center\">Email</th>
                                    <th class=\"text-center\">Phone</th>
                                    <th class=\"text-center\">Joining Date</th>
                                    <th class=\"text-center\">Last Updated</th>
                                    <th class=\"text-center\" width=\"18%\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 48
        if (twig_test_empty(($context["faculties"] ?? $this->getContext($context, "faculties")))) {
            // line 49
            echo "                                  <tr>
                                    <td colspan=\"7\">No Record Found</td>
                                  </tr>
                                ";
        } else {
            // line 53
            echo "
                                      ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["faculties"] ?? $this->getContext($context, "faculties")));
            foreach ($context['_seq'] as $context["_key"] => $context["faculty"]) {
                // line 55
                echo "                                          ";
                $context["counter"] = (((array_key_exists("counter", $context)) ? (_twig_default_filter(($context["counter"] ?? $this->getContext($context, "counter")), 0)) : (0)) + 1);
                // line 56
                echo "                                        <tr class=\"text-center\">
                                          <td>";
                // line 57
                echo twig_escape_filter($this->env, ($context["counter"] ?? $this->getContext($context, "counter")), "html", null, true);
                echo "</td>
                                          <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["faculty"], "firstName", array()), "html", null, true);
                echo "</td>
                                          <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["faculty"], "email", array()), "html", null, true);
                echo "</td>
                                          <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["faculty"], "phoneNumber", array()), "html", null, true);
                echo "</td>
                                          <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["faculty"], "dateOfJoining", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                                          <td>";
                // line 62
                if ($this->getAttribute($context["faculty"], "modified", array())) {
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('AppBundle\Twig\AppExtension')->timeAgoFilter($this->getAttribute($context["faculty"], "modified", array()))), "html", null, true);
                }
                echo "</td>
                                          <td>
                                              <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faculty_show", array("id" => $this->getAttribute($context["faculty"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info fa fa-eye\" title=\"VIEW\"></a>
                                              <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faculty_edit", array("id" => $this->getAttribute($context["faculty"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success fa fa-pencil\" title=\"EDIT\"></a>
                                              <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("faculty_delete", array("id" => $this->getAttribute($context["faculty"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger fa fa-trash-o\" title=\"DELETE\"></a>
                                          </td>
                                        </tr>
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faculty'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                ";
        }
        // line 71
        echo "                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <!--paginations-->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.row -->
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "faculty/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 71,  207 => 70,  197 => 66,  193 => 65,  189 => 64,  182 => 62,  178 => 61,  174 => 60,  170 => 59,  166 => 58,  162 => 57,  159 => 56,  156 => 55,  152 => 54,  149 => 53,  143 => 49,  141 => 48,  114 => 23,  108 => 22,  99 => 19,  94 => 18,  89 => 17,  85 => 16,  75 => 9,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Faculty List{% endblock %}
{% block body %}

<div class=\"row\">
    <div class=\"col-md-12\">
        <h1 class=\"page-header\">
            <i class=\"fa fa-user fa-fw\"></i>Faculty
            <a href=\"{{ path('faculty_new') }}\"><button class=\"btn btn-primary btn-sm pull-right\" >Add New Faculty</button></a>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>
</div>
<div class=\"col-lg-12 sp-list\">
    <div class=\"row\" id=\"scroll\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                List Faculty
            </div>
            <!-- /.panel-heading -->
            <div class=\"panel-body\">
                <div class=\"scroll\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-bordered table-hover\" id=\"dataTables-responsive\">
                            <thead>
                                <tr>
                                    <th class=\"text-center\">No</th>
                                    <th class=\"text-center\">Name</th>
                                    <th class=\"text-center\">Email</th>
                                    <th class=\"text-center\">Phone</th>
                                    <th class=\"text-center\">Joining Date</th>
                                    <th class=\"text-center\">Last Updated</th>
                                    <th class=\"text-center\" width=\"18%\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% if faculties is empty %}
                                  <tr>
                                    <td colspan=\"7\">No Record Found</td>
                                  </tr>
                                {% else %}

                                      {% for faculty in faculties %}
                                          {% set counter = ( counter | default(0) ) + 1 %}
                                        <tr class=\"text-center\">
                                          <td>{{ counter }}</td>
                                          <td>{{ faculty.firstName }}</td>
                                          <td>{{ faculty.email }}</td>
                                          <td>{{ faculty.phoneNumber }}</td>
                                          <td>{{ faculty.dateOfJoining | date(\"d-m-Y\")  }}</td>
                                          <td>{% if faculty.modified %}{{ faculty.modified|time_ago()|capitalize }}{% endif %}</td>
                                          <td>
                                              <a href=\"{{ path('faculty_show', { 'id': faculty.id }) }}\" class=\"btn btn-info fa fa-eye\" title=\"VIEW\"></a>
                                              <a href=\"{{ path('faculty_edit', { 'id': faculty.id }) }}\" class=\"btn btn-success fa fa-pencil\" title=\"EDIT\"></a>
                                              <a href=\"{{ path('faculty_delete', { 'id': faculty.id }) }}\" class=\"btn btn-danger fa fa-trash-o\" title=\"DELETE\"></a>
                                          </td>
                                        </tr>
                                      {% endfor %}
                                {% endif %}
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <!--paginations-->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.row -->
    </div>
</div>
{% endblock %}
", "faculty/index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/demo/app/Resources/views/faculty/index.html.twig");
    }
}
