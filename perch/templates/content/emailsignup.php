<div class="id>
<perch:form id="form-contact" method="post" app="perch_forms" role=form>
</div>
<div class="id">
     <perch:input id="email" type="email" required="true" label="email">Email</perch:label>
     <perch:input id="email" type="email" required="true" label="Email"/><br>
</div>
<perch:input type="submit" id="submit" value="Send"/>
    
    <perch:success>
        <div class="alert success">
            <perch:content id="success" type="textarea" size="m" label="Thank you message" markdown="true" 
            required="true"/>
        </div>
    </perch:success>
    </perch:form>