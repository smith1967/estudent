{% for item in items %}
    <li>{{ item.name|e }} : {{ item.email}}</li>
{% endfor %}    


