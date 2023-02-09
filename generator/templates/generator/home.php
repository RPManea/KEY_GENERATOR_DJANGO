{% extends 'generator/layout.html' %}
{% block content %}

<div class="col-md-4 offset-md-4">
    <form action="{% url 'password' %}" class="card card-body p-5"
    
        style="background-color: #121212;"
    >
    
        <h1 class="h4">Password Generator</h1>
    
        <label for="length">Select the length of your password:</label>
        <select name="length" id="length" class="form-control">
            <option value="6">6 Characters</option>
            <option value="7">7 characters</option>
            <option value="8">8 characters</option>
            <option value="9">9 characters</option>
            <option value="10">10 characters</option>
            <option value="11">11 characters</option>
            <option value="12">12 characters</option>
            <option value="13">13 characters</option>
            <option value="14">14 characters</option>
            <option value="15">15 characters</option>
            <option value="16">16 characters</option>
            <option value="17">17 characters</option>
            <option value="18">18 characters</option>
            <option value="19">19 characters</option>
            <option value="20">20 characters</option>
            <option value="21">21 characters</option>
            <option value="22">22 characters</option>
            <option value="23">23 characters</option>
            <option value="24">24 characters</option>
            <option value="25">25 characters</option>
            <option value="26">26 characters</option>
            <option value="27">27 characters</option>
            <option value="28">28 characters</option>
            <option value="29">29 characters</option>
            <option value="30">30 characters</option>
            <option value="31">31 characters</option>
            <option value="32">32 characters</option>
        </select>
        <div class="form-check form-switch my-2">
            <label for="uppercase" class="form-check-label">Uppercase</label>
            <input type="checkbox" name="uppercase" id="uppercase" class="form-check-input">
        </div>
        
        <div class="form-check form-switch my-2">
            <label for="special" class="form-check-label">Special Characters</label>
        <input type="checkbox" name="special" id="special" class="form-check-input">
        </div>
    
        <div class="form-check form-switch my-2">
            <label for="numbers" class="form-check-label">Numbers</label>
            <input type="checkbox" name="numbers" id="numbers" class="form-check-input">
        </div>
    
        <button>Generate Password</button>
    
    
    </form>
</div>

{% endblock %}