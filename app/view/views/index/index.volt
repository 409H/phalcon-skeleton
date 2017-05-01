{% extends "../templates/main.volt" %}

{%  block content %}
    <h2>This is the main/index view</h2>
    {{ partial("welcome_message") }}
{%  endblock %}